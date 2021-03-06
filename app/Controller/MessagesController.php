<?php

App::import('Controller', 'Jqgrid');

/**
 * 通知部分信息相关函数
 * @author jiangjun
 * @version 1.0 发布新通知
 */
class MessagesController extends JqgridController {
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }

    /**
     * 发布新通知
     */
    public function newMessage($id = 0) {
        if ($this->request->is('post') && $this->request->is('ajax')) {
            $this->autoRender = false;
            $title = $this->request->data('title');
            $info = $this->request->data('info');
            $type = $this->request->data('type');
            $dept_id = -1;
            $this->loadModel('Information');
            if ($id) {
                $information = $this->Information->findById($id);
                if (empty($information)) {
                    return $this->json_error('抱歉，修改的内容不存在');
                }
                $this->Information->id = $id;
            }
            $data = array('title' => $title, 'info' => $info, 'info_date' => date('Y-m-d', time()), 'department_id' => $dept_id, 'information_type_id' => $type);
            $this->checkEmptyAjax($data);
            $ret=$this->Information->save($data);
            if ($ret) {
                if ($id!=0)
                    $this->json_success('修改成功！');
                else
                    $this->json_success('发布成功！');
            }else {
                if ($id!=0)
                    $this->json_error('修改失败！');
                else
                    $this->json_error('发布失败！');
            }
        }else {
            $this->loadModel('InformationType');
            $msgTypes = $this->InformationType->find('list', array('fields' => 'id,name'));
            foreach ($msgTypes as $typeId => $typeName) {
                $departments[] = array('value' => $typeId,
                    'name' => $typeName);
            }
            $information = array('title' => '', 'info' => '', 'information_type_id' => 1);
            if ($id) {
                $this->loadModel('Information');
                $information = $this->Information->findById($id);
                if (empty($information)) {
                    throw new NotFoundException('抱歉，无法获取通知信息！');
                }
                $information = $information['Information'];
            }
            $this->set('information', $information);
            $this->set('msgTypes', $msgTypes);
        }
    }

    /**
     * 消息列表
     */
    public function messageList() {
        if ($this->request->is('ajax') && $this->request->is('post')) {
            $this->autoRender = false;
            $this->loadModel('Information');
            $json = $this->show_results($this->Information, 'id,title,info,info_date,information_type_id', '', array(), false);
            $results = $json['results'];
            if (!empty($results)) {
                foreach ($results as $key => $result) {
                    $results[$key]['operation'] = "<div style='display:none' class='info_hidden'>$result[info]</div><a href='javascript:void(0)' class='info_view' id='info_view" . $result['id'] . "'>查看</a>&nbsp;&nbsp;<a href='/messages/newMessage/" . $result['id'] . "' target='_blank' class='info_edit'>编辑</a>";
                }
            }
            $json['results'] = $results;
            echo $this->json_key_result($json);
        }
    }

    /**
     * 消息操作
     */
    public function messageOper() {
        if ($this->request->is('ajax') && $this->request->is('post')) {
            $this->autoRender = false;
            $oper = $this->request->data('oper');
            $conditions = array();
            $info_id = $this->request->data('id');
            if (!$info_id) {
                return $this->json_error();
            }
            $conditions = array('id' => $info_id);
            $data = array();
            $data['title'] = $this->request->data('title');
            $data['information_type_id'] = $this->request->data('information_type_id');
            $this->loadModel('Information');
            $this->oper($oper, $this->Information, $conditions, $data);
        } else {
            throw new ForbiddenException();
        }
    }

}
