<!-- File: /app/View/Elements/select.ctp -->
<!-- 院系选择联动 -->
<?php $department_id = $_SESSION['Manager']['Manager']['department_id']; ?>
<style type="text/css">
    .selectArea{
        width:780px;
        border-bottom:1px solid #eee;
    }
    .linkageArea{
        margin:10px 0;
    }
    .linkageArea span{
        width:250px;
        height:22px;
        margin-right:5px;
        font-size:120%;
        display:inline-block;
    }
    .linkageArea select{
        font-size:100%;
        width:200px;
        height:22px;
        vertical-align:middle;
    }
    #linkageSelect select{
        width:172px;
    }
</style>

<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            async: false
        });
        $.getJSON("../assignments/departments/" + <?=$department_id?>, {}, function(e) {
            if (e) {
                $.each(e, function(i, d) {
                    $("#st_depart").append("<option value=\"" + d.value + "\">" + d.name + "</option>");
                })
            } else {
                artError("无法获取数据！");
            }
        })
        load_linkage("#st_major", "#st_class", "../assignments/classes");
        load_linkage("#st_depart", "#st_major", "../assignments/majors");
        $('#st_depart').trigger('change');
        //联动公共函数
        function load_linkage(source, target, url) {
            $(source).change(function() {
                var key = $(this).val();
                $(target).empty();
                $(target).append("<option value=\"-1\">全部</option>");
                if (key == -1) {
                    return false;
                }
                $.post(url, {"key": key}, function(e) {
                    if (e) {
                        $.each(e, function(i, d) {
                            $(target).append("<option value=\"" + d.value + "\">" + d.name + "</option>");
                        })
                        //触发刷新下级联动
                        $(target).trigger("change");
                    }
                }, "json")
            })
        }
    })
</script>

<div class="selectArea clear">
    <div class="linkageArea">
        <span>
            学院：
            <?php
            if ($department_id == 0){
                $dept_ele = array(array('value' => -1, 'name' => '全部'));
            }else $dept_ele = array();
                echo $this->Form->select('st_depart', $dept_ele, array('empty' => false));
            ?>
        </span>
        <span>
            专业：
            <?php
            echo $this->Form->select('st_major', array(array('value' => -1, 'name' => '全部')), array('empty' => false));
            ?>
        </span>	
        <span>
            班级：
            <?php
            echo $this->Form->select('st_class', array(array('value' => -1, 'name' => '全部')), array('empty' => false));
            ?>
        </span>
    </div>
</div>
