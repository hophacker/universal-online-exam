<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$KoolControlsFolder = "../../KoolPHPSuite/KoolControls";
require $KoolControlsFolder . "/KoolAjax/koolajax.php";
$koolajax->scriptFolder = $KoolControlsFolder . "/KoolAjax";
echo $koolajax->Render();

require $KoolControlsFolder . "/KoolTabs/kooltabs.php";
$kts = new KoolTabs("kts");
$kts->scriptFolder = $KoolControlsFolder . "/KoolTabs";
$kts->styleFolder = "outlook";
$kts->addtab("root","main_page","Main Page");
echo $kts->Render();
?>

<div id ="pg"></div>

<script type="text/javascript">
    var buffer = {};
    function add_tab(pagename,title)
    {
        kts.addTab("root",title, title
            +"<img onmouseover='m_over(this)' onmouseout='m_out(this)' onclick=\"remove('"
            +title+"')\" src='closeover.gif' />","javascript:loadPage(\""
            +pagename+"\")",true);
    }
    function loadPage(pagename)
    {
        if(!buffer.hasOwnProperty(pagename))
            buffer[pagename] = koolajax.load(pagename);
        document.getElementById('pg').innerHTML = buffer[pagename];
    }
    function remove(_id)
    {
        kts.removeTab(_id);
    }
    function m_over(_this)
    {
        _this.src='closeover.gif';
    }
    function m_out(_this)
    {
        _this.src='closenormal.gif';
    }
</script>