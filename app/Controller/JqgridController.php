<?php

/**
 * jqgrid后台公共函数
 * @author jiangjun 
 * @version 1.0 Model updatAll() 方法中的$conditions的值需要自行加上引号
 */
class JqgridController extends AppController {

    /**
     * jqgrid公共显示数据的方法，入口函数
     * @param dao $dao dao（必选）
     * @param string $fields 查询的域（可选）
     * @param string $order 排序方式：为false，表示不排序；为''时将按照前台传入参数排序，默认（可选）
     * @param array $where 附加查询条件（可选）
     * @param boolean $returnJson 是否返回json格式数据，默认为true（可选）
     * @param boolean $needWhere 附加的where条件是否一定要存在，默认为false（可选）
     * @param array $joins 连接查询的表
     * @return json|array
     */
    protected function show_results($dao, $fields = '', $order = '', $where = '', $returnJson = true, $needWhere = false, $joins = array()) {
        //前台获取参数
        $page = $this->request->data('page') ? $this->request->data('page') : 1; //默认第一页
        $rows = $this->request->data('rows') ? intval($this->request->data('rows')) : 20; //需要显示的条数
        $options['sidx'] = $this->request->data('sidx');
        $options['sord'] = $this->request->data('sord');
        //简单查询
        $options['searchField'] = $this->request->data('searchField');
        $options['searchString'] = $this->request->data('searchString');
        $options['searchOper'] = $this->request->data('searchOper');
        //多条件查询，成对存在
        $options['search'] = $this->request->data('_search') == 'true' ? true : false;
        $options['filters'] = $this->request->data('filters');
        //自定义参数
        $options['fields'] = $fields;
        $options['order'] = $order;
        $options['where'] = $where;
        $options['returnJson'] = $returnJson;
        $options['needWhere'] = $needWhere;
        $options['joins'] = $joins;
        return $this->jqgrid_show_results($dao, $page, $rows, $options);
    }

    /**
     * jqgrid显示所有结果
     * @param dao $dao 当前使用的dao
     * @param array $options 
     * @param int $page 当前页面
     * @param int $rows 每页显示数目
     * @param array $options 扩展配置项
      <p> string sidx 排序域名</p>
      <p> string sord 排序方式</p>
      <p> boolean search 是否为搜索</p>
      <p> array filters 多条件搜索条件数据</p>
      <p> string searchField 多条件搜索域</p>
      <p> string searchString 多条件搜索值</p>
      <p> string searchOper 多条件搜索操作符</p>
      <p> string fields 搜索的域</p>
      <p> string order 搜索时默认的排序方式</p>
      <p> string where 搜索时默认的排序条件</p>
      <p>	 boolean returnJson 是否返回json格式数组，默认为true</p>
      <p> boolean needWhere 是否一定要有设置的where条件，为true时 where不能为空</p>
     * @return json|array 默认返回json数据
     */
    private function jqgrid_show_results($dao, $page, $rows, $options) {
        //排序方式
        if (isset($options['sidx']) && isset($options['sord'])) {
            $order = $options['sidx'] . ' ' . $options['sord'];
        } else {
            $order = '';
        }
        if (!empty($options['where']))
            $conditions = $options['where'];
        //表示是查找功能，会重置查询条件
        if ($options['search']) {
            //多条件查询
            $multipleSearch = stripcslashes($options['filters']);
            //多值查询
            if (!empty($multipleSearch)) {
                //条件转化为数组格式
                $multipleSearch = json_decode($multipleSearch, true);
                $conditions = $this->multiple_earch_condition($multipleSearch);
            } else if ($options['searchOper']) {
                //获得单个查询的条件
                $conditions = $this->get_search_string($options['searchField'], $options['searchString'], $options['searchOper']);
            }
        }
        if ($options['needWhere'] == true && !empty($options['where'])) {
            $conditions = array_merge($conditions, $options['where']);
        }
        $modelOptions = array();
        if (!empty($options['joins'])) {
            $modelOptions['joins'] = $options['joins'];
        }
        //查询条件
        if (!empty($conditions)) {
            $modelOptions['conditions'] = $conditions;
        }
        //获得总记录条数
        $counts = $dao->find('count', $modelOptions);
        if ($counts > 0) {
            //排序方式
            $modelOptions['order'] = $order;
            //查询字段
            if (isset($options['fields'])) {
                $modelOptions['fields'] = $options['fields'];
            }
            //获得查询结果
            $modelOptions['limit'] = $rows;
            $modelOptions['offset'] = (($page - 1) * $rows);
            $results = $dao->find('all', $modelOptions);
        } else {
            $results = array();
        }
        $total = ceil($counts / $rows);
        //去除表名，使用别名形式
        $results = $this->del_tablename($results);

        $json['page'] = $page;
        $json['records'] = $counts;
        $json['total'] = $total;
        $json['results'] = $results;

        //获得执行的sql
        //print_r($dao->getDataSource()->getLog(false,false));
        //默认返回json数据
        if (!isset($options['returnJson']) || $options['returnJson']) {
            return $this->json_key_result($json);
        }
        return $json;
    }

    /**
     * 将cakephp取出的不同表中的数据全部放置到一个数组中返回
     * @param array $result 结果集
     */
    private function del_tablename($result) {
        $results = array();
        foreach ($result as $i => $r) {
            foreach ($r as $tableName => $resultSet) {
                if (empty($results[$i]))
                    $results[$i] = $resultSet;
                else
                    $results[$i] = array_merge($results[$i], $resultSet);
            }
        }
        return $results;
    }

    /**
     * 获得以key-value形式组成的数组
     * @param array $json json数组
     */
    protected function json_key_result(&$json) {
        $json['rows'] = $json['results'];
        unset($json['results']);
        return json_encode($json);
    }

    /**
     * 获得查找条件
     * @param string $searchField 查询域名
     * @param string $searchString 查询条件
     * @param string $searchOper 查询操作
     * @return array $searchOption 查询条件语句
     */
    private function get_search_string($searchField, $searchString, $searchOper) {
        //定义的一些匹配规则
        $sopt = array('eq' => '=', 'ne' => '<>', 'lt' => '<', 'le' => '<=', 'gt' => '>', 'ge' => '>=', 'bw' => 'LIKE', 'bn' => 'NOT LIKE',
            'in' => 'IN', 'ni' => 'NOT IN', 'ew' => 'LIKE', 'en' => 'NOT LIKE', 'cn' => 'LIKE', 'nc' => 'NOT LIKE',
            'nu' => 'IS NULL', 'nn' => 'IS NOT NULL');
        //开始于与不开始于
        if (in_array($searchOper, array('bw', 'bn'))) {
            $searchString.='%';
        }
        //属于与不属于
        else if (in_array($searchOper, array('in', 'ni'))) {
            $searchString = split(',', $searchString);
        }
        //结束于与不结束于
        else if (in_array($searchOper, array('ew', 'en'))) {
            $searchString = '%' . $searchString;
        }
        //包含与不包含
        else if (in_array($searchOper, array('cn', 'nc'))) {
            $searchString = "%$searchString%";
        }
        //为空
        if ($searchOper == 'nu') {
            $searchOption = array($searchField => null);
        }
        //非空
        else if ($searchOper == 'not') {
            $searchOption = array('not' => array($searchField => null));
        }
        //其他情况
        else {
            $searchOption = array($searchField . ' ' . $sopt[$searchOper] => $searchString);
        }
        return $searchOption;
    }

    /**
     * 获得多值查询的查询条件
     * @param array $multipleSearch
     * @return array conditions
     */
    private function multiple_earch_condition($multipleSearch) {
        $rules = array();
        foreach ($multipleSearch['rules'] as $rule) {
            $rules[] = $this->get_search_string($rule['field'], $rule['data'], $rule['op']);
        }
        if (!empty($multipleSearch['groups'])) {
            foreach ($multipleSearch['groups'] as $group) {
                $rules[] = $this->multiple_earch_condition($group);
            }
        }
        $conditions[$multipleSearch['groupOp']] = $rules;
        return $conditions;
    }

    /**
     * jqgrid公共编辑
     * @param dao $dao
     * @param array $conditions 更新条件
     * @param array $data 更新值
     */
    protected function edit($dao, $conditions, $data) {
        if (empty($conditions) || empty($data))
            return false;
        $this->__add_quote($data);
        if ($dao->updateAll($data, $conditions))
            return true;
        else
            return false;
    }

    /**
     * jqgrid公共增加
     * @param dao $dao
     * @param array $data 更新值
     */
    protected function add($dao, $data) {
        if (!isset($data))
            return false;
        $dao->create();
        if ($dao->save($data))
            return true;
        else
            return false;
    }

    /**
     * jqgrid公共删除，可多值删除
     * @param dao $dao
     * @param array $condtions
     */
    protected function del($dao, $conditions) {
        if (empty($conditions))
            return false;
        if ($dao->deleteAll($conditions, false))
            return true;
        else
            return false;
    }

    /**
     * jqgrid公共操作入口
     * @param string $oper 操作方式
     * @param dao $dao dao层
     * @param array $conditions 条件项
     * @param array $data	更新内容
     */
    protected function oper($oper, $dao, $conditions = array(), $data = array()) {
        $dao->belongsTo = array();
        if ($oper == 'edit') {
            $status = $this->edit($dao, $conditions, $data);
        } else if ($oper == 'add') {
            $status = $this->add($dao, $data);
        } else if ($oper == 'del') {
            $status = $this->del($dao, $conditions);
        }
        if ($status)
            $this->json_success('操作成功！');
        else
            $this->json_error('操作过程中发生错误！');
    }

    /**
     * 支持jqgrid的filterToolbar的查询功能
     * @param array $options 查询配置
     * @param array $request 前台请求数组
     */
    protected function filterToolbar($options, $request) {
        $where = array();
        foreach ($options as $option) {
            if (isset($request[$option['field']])) {
                if ($option['op'] == 'eq') {
                    $where[$option['field']] = $request[$option['field']];
                } else if ($option['op'] == 'like') {
                    $where[$option['field'] . ' LIKE'] = '%' . $request[$option['field']] . '%';
                }
                else
                    continue;
            }
        }
        return $where;
    }

    /**
     * 默认的filterToolbar的查询，全部使用模糊查询
     * @param array $fields 查询域名数组
     * @param array $request 前台请求数组
     */
    protected function defaultFilterToolbar($fields, $request) {
        $options = array();
        foreach ($fields as $field) {
            $options[] = array('field' => $field, 'op' => 'like');
        }
        return $this->filterToolbar($options, $request);
    }
}