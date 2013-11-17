<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of department
 *
 * @author j
 */
require_once 'DB_Connect.php';

class department extends DB_Connect {
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        return parent::getArray("select id, dept_name from departments where state=1");
    }

    public function getAllMajor($dept_id) {
        return parent::getArray("select id, major_name from majors where department_id=" . $dept_id);
    }

    public function getAllClass($major_id) {
        return parent::getArray("select id, class_name from classes where major_id=" . $major_id);
    }

    public static function select($withMajorAndClass) {
        $dept_obj = new department();
        $dept = $dept_obj->getAll();
        $html = "<span class='header' style='margin:4px;padding:4px;height:25px;width:500px;border:solid 1px #C6E1F2;'>";
        $html .= "学院:<select id='st_depart' name='st_depart' >";
        $html .= "<option value='-1'>全部</option>";
        foreach ($dept as $key => $value) {
            $html .= "<option value='$key'>$value</option>";
        }
        $html .= "</select>";
        if ($withMajorAndClass){
            $html .= "专业:<select id='st_major' name='st_major' class='dept_select'>
            <option value='-1'>全部</option> </select>
            班级:<select id='st_class' name='st_class' class='dept_select'>
            <option value='-1'>全部</option></select>";
        }
        $html .= "</span>";
        $html .= "<script type='text/javascript'>";
        $html .= <<<'EOF'
   var post_url = '../../../../../class/LoadAndCheck.php';
function depart_change($dept_id) {
    $("#st_major").html('<option value="-1" selected="selected">全部</option>');
    $("#st_class").html('<option value="-1" selected="selected">全部</option>');
    if($dept_id != -1) {
        $.post(post_url,{
            oper:'LoadMajor', 
            dept_id:$dept_id
        }, 
        function(data) {
            var option = "";
            for(var i = 0; i < data.length; i++) {
                option += '<option value="'+data[i].major_id+'">'+data[i].major_name+'</option>';
            }
            $("#st_major").append(option);
        }, 'json');
    }
}
function major_change($major_id){
    $("#st_class").html('<option value="-1" selected="selected">全部</option>');
    if($major_id != -1) {
        $.post(post_url,{
            oper:'LoadClass',
            major_id:$major_id
        }, function(data) {
            var option="";
            for(var i = 0; i < data.length; i++) {
                option += '<option value="'+data[i].class_id+'">'+data[i].class_name+'</option>';
            }
            $("#st_class").append(option);
        },'json');
    }
}
$(document).ready(function() {
    $.ajaxSetup({
        async: false
    });
    $("#st_depart").change(function(){
        depart_change($(this).val());
    });

    $("#st_major").change(function() {
        major_change($(this).val());
    });
    $("#st_button").click(function(){
        $.get("grid.php",{
            dept_id: $("#st_depart").val(),
            major_id: $("#st_major").val(),
            class_id: $("#st_class").val()
        }, function(data) {
            $("#studentGrid").html(data);
        },'html');			
    });
    
    
    var hidden_depart = $("#hidden_depart").val();
    var hidden_major = $("#hidden_major").val();
    var hidden_class = $("#hidden_class").val();
    
    
    
    if (hidden_depart != "-1"){
        $('#st_depart').val(hidden_depart).change();
    }
    if (hidden_major != "-1"){
        $('#st_major').val(hidden_major).change();
    }
    if (hidden_class != "-1"){
        $('#st_class').val(hidden_class).change();
    }
});



EOF;
        
        $html .= "</script>";
        return $html;
    }
}

?>
