<html>
    <head>
        


<?php
    $jquery_ui="jquery-ui";
    $bundle = $jquery_ui . "/development-bundle";
	
        print "<script type='text/javascript' src='$jquery_ui/js/jquery-1.9.1.js'></script>";
        print "<script type='text/javascript' src='$jquery_ui/js/jquery-ui-1.10.1.custom.js'></script>";
        print "<script src='$bundle/ui/jquery.ui.position.js'></script>";
	print "<script src='$bundle/ui/jquery.ui.core.js'></script>";
	print "<script src='$bundle/ui/jquery.ui.widget.js'></script>";
	print "<script src='$bundle/ui/jquery.ui.button.js'></script>";
	print "<script src='$bundle/ui/jquery.ui.tabs.js'></script>";
	print "<link rel='stylesheet' href='$bundle/demos/demos.css'>";
        print "<link rel='stylesheet' href='$bundle/themes/sunny/jquery-ui.css'>";
        
?>


        <style>
            html { font-size:15px; }
            .iframetab { width:100%; height:90%; border:0px; margin:0px; position:relative; }
            .ui-tabs-panel { padding:5px !important; }
            .openout { float:right; position:relative; top:-28px; left:-5px; }
            #tabs li .ui-icon-close { float: left; margin: 0.4em 0.2em 0 0; cursor: pointer; }
        </style>
        <script>
            jquery_addTab = null;
            $(document).ready(function() {
                var tabs = $('#tabs').tabs();

                //var tabTemplate = "<li><a class='tabref' href='#{href}' rel='#{rel}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>";
                var tabTemplate = "<li class='ui-state-default ui-corner-top' role='tab' tabindex='-1' aria-controls='tabs-#{num}' aria-labelledby='ui-id-#{num}' aria-selected='false'><a class='tabref ui-tabs-anchor' href='#tabs-#{num}' rel='#{rel}' role='presentation' tabindex='-1' id='ui-id-#{num}'>#{label}</a><span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>";



                //#{num} #{label} #{rel}
                //display:block
                var panelTemplate= "<div id='tabs-#{num}' aria-labelledby='ui-id-#{num}' class='ui-tabs-panel ui-widget-content ui-corner-bottom' role='tabpanel' style='display: block; ' aria-expanded='true' aria-hidden='false'> </div>";
                var contentTemplate= "<div class='tabIframeWrapper'> <div class='openout'> <a href='#{href}'> </a> </div> <iframe class='iframetab' src='#{href}' >Load Failed?</iframe> </div>";


                //get selected tab
                function getSelectedTabIndex() {
                    return tabs.tabs('option', 'selected');
                }

                //get tab contents
                beginTab = $("#tabs ul li:eq(" + getSelectedTabIndex() + ")").find("a");

                function openTab(jie){
                    for (var i=1; i<=$('#tabs ul li').length; i++){
                        var now = $("#tabs-" + i);
                        if (jie == ""+i){
                            now.attr('aria-expanded', 'true');
                            now.attr('aria-hidden', 'false');
                            now.css('display', 'block');
                        }else{
                            now.attr('aria-expanded', 'false');
                            now.attr('aria-hidden', 'true');
                            now.css('display', 'none');
                        }
                    }
                }
                $(document).on('click', 'a.tabref', function() {
                    loadTabFrame($(this).attr("href"),$(this).attr("rel"));
                    var jie = $(this).attr("href").replace(/#tabs-/g, "");
                    openTab(jie);
                });

                function addTab(url, label){
                    var id = $("#tabs ul li").length+1;
                    var li = $( tabTemplate.replace( /#\{num\}/g, id ).replace( /#\{label\}/g, label ).replace(/#\{rel\}/g, url));
                    $("#tabs ul").append(li);
                    $("#tabs").append(panelTemplate.replace(/#\{num\}/g,  id));
                    tabid = "#tabs-"+id
                    loadTabFrame(tabid,url);
                    openTab(""+id);
                };
                jquery_addTab = addTab;

                //tab switching function
                function loadTabFrame(tab, url) {
                    if ($(tab).find("iframe").length == 0) {
                        
                        $(tab).append(contentTemplate.replace(/#\{href\}/g, url));
                        //$(tab).find("iframe").height($(window).height()-80);
                        $(tab).find("iframe").height(600);

                        tabs.tabs( "refresh" );
                        return true;
                    }
                    return false;
                } 
                tabs.delegate( "span.ui-icon-close", "click", function() {
                    var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
                    $( "#" + panelId ).remove();
                    tabs.tabs( "refresh" );
                });
                
            });
        </script>
    </head>
    <body>
       


        <div id="tabs">
            <ul>
            </ul>
        </div> 

    </body>
</html>
