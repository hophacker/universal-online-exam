<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../../../../../class/autoload.inc";
$a_tt = new test_type();
$grad_options = $a_tt->getNameOptions();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html> 
    <head> 
        <title>考试类型管理</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <script src="../../../../js/jquery-1.9.0.js" type='text/javascript'></script>
        <script src="../../../../jquery-ui/js/jquery-ui-1.10.1.custom.js" type='text/javascript'></script>
        <script src="../../../../jtable/jquery.jtable.js" type='text/javascript'></script>
        <script src="index.js" type='text/javascript'></script>
        <link rel="stylesheet" href="../../../../css/common.css" />
        <link rel="stylesheet" href="../../../../jquery-ui/development-bundle/themes/sunny/jquery-ui.css" />
        <link rel="stylesheet" href="../../../../jtable/themes/lightcolor/orange/jtable.css" />
        <script type="text/javascript">
            $(document).ready(function () {

                $('#test_type_table').jtable({
                    title: '考试类型管理',
                    paging: false, //Enable paging
                    sorting: false, //Enable sorting
                    defaultSorting: 'test_type_id ASC', //Set default sorting
                    deleteConfirmation: function(data) {
                        if (data.record.test_type_id <= 5){
                            data.cancel = true;
                            data.cancelMessage = "该考试级别为初始设置，不可删除";
                        }
                        data.deleteConfirmMessage = '您确定要删除吗？';
                        
                    },
                    actions: {
                        listAction: 'action.php?action=look',
                        createAction: 'action.php?action=create',
                        updateAction: 'action.php?action=update',
                        deleteAction: 'action.php?action=delete'
                    },
                    //$sql = "SELECT style, test_type_id, sel_num, sel_score, jud_num, jud_score, ans_num, ans_score, duration, name, comment FROM test_type;";
                    fields: {
                        test_type_id: {
                            key: true,
                            create: false,
                            edit: false,
                            list: false
                        },
                        name: {
                            title: '考试类型',
                            edit: false,
                            width: '7%'
                        },
                        style: {
                            title: '考试方式',
                            width: '5%',
                            list: false,
                            listClass: 'jtable-input jtable-text-input',
                            options: {
                                '0' : '抽取题库',
                                '1' : '抽取试卷'
                            }
                        },
                        style_name: {
                            title: '考试方式',
                            create: false,
                            edit: false,
                            width: '5%'
                        },
                        duration: {
                            title: '考试时间(分)',
                            width: '7%'
                        },
                        grad_test_type_id:{
                            title: '通过后参加',
                            width: '6%',
                            list: false,
                            options:<?=$grad_options?>
                        },
                        grad_test_type_id_name:{
                            title: '通过后参加',
                            width: '6%',
                            create: false,
                            edit: false
                        },
                        sel_num: {
                            title: '选择题数',
                            width: '5%'
                        },
                        sel_score: {
                            title: '选择题分值',
                            width: '7%'
                        },
                        jud_num: {
                            title: '判断题数',
                            width: '5%'
                        },
                        jud_score: {
                            title: '判断题分值',
                            width: '7%'
                        },
                        ans_num: {
                            title: '解答题数',
                            width: '5%'
                        },
                        ans_score: {
                            title: '解答题分值',
                            width: '7%'
                        },
                        comment: {
                            title: '备注',
                            width: '20%'
                        }
                    }
                });
                $('#test_type_table').jtable('load');
            });
        </script>
    </head> 
    <body> 
        <div id="test_type_table"></div>
    </body> 
</html> 
