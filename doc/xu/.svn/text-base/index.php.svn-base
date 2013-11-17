<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$KoolControlsFolder = "KoolPHPSuite/KoolControls";

require $KoolControlsFolder . "/KoolSlideMenu/koolslidemenu.php";
$ksm = new KoolSlideMenu("ksm");
$ksm->scriptFolder = $KoolControlsFolder . "/KoolSlideMenu";
$ksm->addParent("root", "company", "Company", NULL, true);
$ksm->addChild("company", "about", "About Us",'javascript:add_tab("1.php","first")');
$ksm->addChild("company", "news", "Company News",'javascript:add_tab("2.php","second")');
$ksm->addChild("company", "contact", "Contact us");
$ksm->addParent("root", "products", "Products");
$ksm->addChild("products", "koolajax", "KoolAjax");
$ksm->addChild("products", "kooltreeview", "KoolTreeView");
$ksm->addChild("products", "KoolSlideMenu", "KoolSlideMenu");
$ksm->addParent("root", "services", "Services");
$ksm->addChild("services", "outsourcing", "Out-sourcing");
$ksm->addChild("services", "freelancer", "Free-lancer");
$ksm->singleExpand = true;
$ksm->width = "200px";
$style_select = "bluearrow";
$ksm->styleFolder = $KoolControlsFolder . "KoolSlideMenu/styles/$style_select";
echo $ksm->render();

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