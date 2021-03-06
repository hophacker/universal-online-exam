<?php
echo $this->element('jqgrid');
?>

<style>
    .selectArea,.query_btn,.jqgrid_table{
        float:left;
    }
    .query_btn{
        margin:10px;
    }
</style>
<?php $department_id = $_SESSION['Manager']['Manager']['department_id']; 
$url = "student";
if ($department_id != 0) $url .= "?dept_id=$department_id";
?>
<script type="text/javascript">
    $(function() {
        //表格配置
        $("#account_student_table").jqGrid({
            datatype: "json",
            url: <?='"' . $url . '"'?>,
            height: 450,
            width: 1000,
            mtype: "POST",
            colNames: ["编号", "姓名", "学号", "用户名", "密码", "邮箱", "生日", "等级", "电话号码", "注册时间", "上次登录时间", "学历", "学院", "专业", "班级"],
            colModel: [
                {name: "s_id", index: "Student.id", hidden: true},
                {name: "s_name", index: "s_name", width: 40, align: "center", sortable: true, editable: true, editrules: {required: true},
                    search: true, searchoptions: {sopt: ['eq', 'ne', 'bw', 'ew', 'cn']}},
                {name: "s_num", index: "s_num", width: 60, align: "left", sortable: true, editable: true, editrules: {required: true},
                    search: true, searchoptions: {sopt: ['eq', 'lt', 'gt', 'le', 'ge', 'ne', 'bw', 'ew', 'cn']}},
                {name: "s_user", index: "s_user", width: 80, align: "left", sortable: true, editable: false,
                    search: true, searchoptions: {sopt: ['eq', 'ne', 'bw', 'ew', 'cn']}},
                {name: "s_pwd", index: "s_pwd", hidden: true, align: "left", sortable: false, editable: true, edittype: "password",
                    editrules: {edithidden: true}, editoptions: {dataInit: function(elem) {
                            $(elem).val("");
                        }}, search: false}, //初始化密码为空
                {name: "s_mail", index: "s_mail", width: 100, align: "left", sortable: true, editable: false, search: false},
                {name: "s_date", index: "s_date", width: 60, align: "center", sortable: true, editable: false, search: false},
                {name: "s_role", index: "s_role", width: 40, align: "center", sortable: true, editable: false, search: false},
                {name: "s_phone", index: "s_phone", width: 80, align: "left", sortable: true, editable: false, search: false},
                {name: "reg_date", index: "reg_date", width: 60, align: "left", sortable: true, editable: false, search: false},
                {name: "last_login", index: "last_login", width: 100, align: "left", sortable: true, editable: false, search: false},
                {name: "edu_name", index: "edu_id", width: 30, align: "center", sortable: true, editable: false, search: false},
                {name: "dept_name", index: "dept_id", width: 60, align: "left", sortable: true, editable: false, search: false},
                {name: "major_name", index: "major_id", width: 60, align: "left", sortable: true, editable: false, search: false},
                {name: "class_name", index: "class_id", width: 60, align: "left", sortable: true, editable: false, search: false}
            ],
            sortname: "Student.id",
            sortorder: "asc",
            viewrecords: true,
            rowNum: 20,
            rowList: [20, 40, 60],
            pager: "#account_student_pager",
            multiselect: false,
            caption: "",
            jsonReader: {
                repeatitems: false,
                id: "s_id"
            },
            shrikToFit: true,
            editurl: "studentOper",
            rownumbers: true
        });


        //表格操作条
        $("#account_student_table").jqGrid("navGrid", "#account_student_pager", {excel: true, edit: true, add: false, del: true, search: true, view: true, refresh: true},
        {
            recreateForm: true, //重新构建编辑框
            closeOnEscape: true,
            closeAfterEdit: false
        }
        , {}, {
            closeOnEscape: true
        }, {
            multipleSearch: true,
            multipleGroup: true,
            showQuery: true
        }, {
            closeOnEscape: true
        }
        );
        $("#account_student_table").jqGrid('navButtonAdd', '#account_student_pager',
                {
                    caption: " ",
                    title: "导出到Excel",
                    buttonicon: "ui-icon-newwin",
                    onClickButton: function() {
                    },
                    position: "last"
                });

        //内置查询
        $("#account_student_table").jqGrid("filterToolbar");
        //查询
        $("#account_student_reset").click(function() {
            var dept_id = $("#st_depart").val();
            var major_id = $("#st_major").val();
            var class_id = $("#st_class").val();
            var url = "student?dept_id=" + dept_id + "&major_id=" + major_id + "&class_id=" + class_id;
            $("#account_student_table").jqGrid("setGridParam", {url: url}).trigger("reloadGrid", url);
        })
    });
</script>

<div class="main">
    <?php
    echo $this->element('select');
    ?>
    <div class="query_btn">
<?php echo $this->Form->button('点击查询', array('type' => 'button', 'id' => 'account_student_reset')); ?>
    </div>
    <div class="jqgrid_table">
        <table id="account_student_table"></table>
        <div id="account_student_pager"></div>
    </div>
</div>