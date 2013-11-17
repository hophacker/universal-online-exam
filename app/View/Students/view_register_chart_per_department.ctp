<style>
    .selectArea{
        float: left;
    }
    iframe#ifrm{
        width : 100%;
        height: 480px;
    }
</style>
<div>
    <label class="very_larger_label">注册人数统计</label>
    <?php
//    $dept
    $selSpan = array(1=>'按月统计', 6=>'按半年统计', 12=>'按年统计');
    echo $this->element('select');
    echo $this->Form->select('selSpan', $selSpan, array('empty' => false));
    echo $this->Form->button('点击查询', array('type' => 'button', 'id' => 'st_button'));
    ?>
</div>
<iframe id="ifrm">
</iframe>
<script>
$('#st_button').click(function() {
    var dept_id = $("#st_depart").val();
    var major_id = $("#st_major").val();
    var class_id = $("#st_class").val();
    var span = $("#selSpan").val();
    var url = 'viewRegisterChartPerDepartmentNow/$1/$2/$3/$4';
    url = url.replace('$1', dept_id).replace('$2', major_id).replace('$3', class_id).replace('$4', span);
//    alert(url);
    $('iframe#ifrm').attr('src', url);
});    
</script>
