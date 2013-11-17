<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
        echo $this->Html->css('jquery-ui-themes/base/jquery.ui.all.css');
        echo $this->Html->script('jquery-1.9.1.js');
        echo $this->Html->script('jquery-ui-1.10.1.custom.js');
        echo $this->Html->script('jquery-ui/ui/jquery.ui.position.js');
        echo $this->Html->script('jquery-ui/ui/jquery.ui.core.js');
        echo $this->Html->script('jquery-ui/ui/jquery.ui.widget.js');
        echo $this->Html->script('jquery-ui/ui/jquery.ui.button.js');
        echo $this->Html->script('jquery-ui/ui/jquery.ui.tabs.js');
        ?>
    </head>
    <body>

        <?php
        $KoolControlsFolder = "../../vendors/KoolPHPSuite/KoolControls";
        require $KoolControlsFolder . "/KoolSlideMenu/koolslidemenu.php";
        
//$ksm->slidingSpeed = 6;
//$ksm->width="270px";
//About us
        $xmlDoc = new DOMDocument();
        $xmlDoc->load(APP . "/webroot/xml/{$data['xml']}.xml");
        
        $ksm = new KoolSlideMenu("ksm");
        $ksm->loadXML($xmlDoc->saveXML());
        $ksm->scriptFolder = $KoolControlsFolder . "/KoolSlideMenu";
        $ksm->styleFolder = $KoolControlsFolder . "KoolSlideMenu/styles/{$data['style']}";
        
        ?>
        <form id="form1" method="post">
            <?php echo $ksm->Render(); ?>
        </form>
<!--                    <script type="text/javascript">
                        function OnParentMouseOver_handle(sender,arg)
                        {
                            ksm.getItem(arg.ItemId).expand();
                        }	
                        // Register for OnParentMouseOver event
                        ksm.registerEvent("OnParentMouseOver",OnParentMouseOver_handle);	
                    </script>-->
            
        <script>
            $(document).ready(function(){
                $('#logout').click(function(){
                    parent.window.location.href = "../../Logins/exitSystem";
                    return false;
                });
                $('a.ksmChild').click(function(event){
                    event.preventDefault();
                    parent.tabs.jquery_addTab($(this).attr("href"), $(this).children(".ksmIn").text());
                });
                $("#add").click(function (){
                    callMain();
                })
            });
        </script>
    </body>
</html>
