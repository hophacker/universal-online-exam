<?php $_al0 = "3.0.0.0";
if (isset($_GET[md5("js")])) {
    header("Content-type: text/javascript"); ?> var _aO=0; function _ao(_aY){if (typeof(_aY)=="undefined"){return false; }return (_aY!=null); }function _ay(){_aO++; return _aO; }function _ao(_aY){return (_aY!=null);}var KoolAjaxDebug=null; function _aI(_ai){if (_ao(KoolAjaxDebug))KoolAjaxDebug(_ai); }function _aA(_aa){return document.getElementById(_aa); }function _aE(_ae,_aU){_au=document.createElement(_ae); _aU.appendChild(_au); return _au; }function _aZ(_aY,_az){if (!_ao(_az))_az=1; for (var i=0; i<_az; i++)_aY=_aY.firstChild; return _aY; }function _aX(_ax,_aW){var _aw=document.createTextNode(_ax); _aW.appendChild(_aw); return _aw; }function _aV(_aY){var _av=_aY.childNodes.length; for (var i=0; i<_av; i++)_aY.removeChild(_aY.firstChild); }function _aT(){}function _at(_aS){if (_aS.indexOf("#")>0){return _aS.substring(0,_aS.indexOf("#")); }else {return _aS; }}function _as(width){var _aR=0; if (typeof(width)=="string" && width!=null && width!=""){var p=width.indexOf("px"); if (p>=0){_aR=parseInt(width.substring(0,p)); }else {_aR=1; }}return _aR; }function _ar(_aQ){var _aR=new Object(); _aR.left=0; _aR.top=0; _aR.right=0; _aR.bottom=0; if (window.getComputedStyle){var _aq=window.getComputedStyle(_aQ,null); _aR.left=parseInt(_aq.borderLeftWidth.slice(0,-2)); _aR.top=parseInt(_aq.borderTopWidth.slice(0,-2)); _aR.right=parseInt(_aq.borderRightWidth.slice(0,-2)); _aR.bottom=parseInt(_aq.borderBottomWidth.slice(0,-2)); }else {_aR.left=_as(_aQ.style.borderLeftWidth); _aR.top=_as(_aQ.style.borderTopWidth); _aR.right=_as(_aQ.style.borderRightWidth); _aR.bottom=_as(_aQ.style.borderBottomWidth); }return _aR; }function _aP(_ap,_aN){return _aN.indexOf(_ap); }function _an(){var _aM=navigator.userAgent.toLowerCase(); if (_aP("opera",_aM)!=-1){return "opera"; }else if (_aP("firefox",_aM)!=-1){return "firefox"; }else if (_aP("safari",_aM)!=-1){return "safari"; }else if ((_aP("msie 6",_aM)!=-1) && (_aP("msie 7",_aM)==-1) && (_aP("msie 8",_aM)==-1) && (_aP("opera",_aM)==-1)){return "ie6"; }else if ((_aP("msie 7",_aM)!=-1) && (_aP("opera",_aM)==-1)){return "ie7"; }else if ((_aP("msie 8",_aM)!=-1) && (_aP("opera",_aM)==-1)){return "ie8"; }else if ((_aP("msie",_aM)!=-1) && (_aP("opera",_aM)==-1)){return "ie"; }else if (_aP("chrome",_aM)!=-1){return "chrome"; }else {return "firefox"; }}function _am(_aL,_al,_aK,_ak){if (_aL.addEventListener){_aL.addEventListener(_al,_aK,_ak); return true; }else if (_aL.attachEvent){if (_ak){return false; }else {var _aJ= function (){_aK.apply(_aL,[window.event]); };if (!_aL["ref"+_al])_aL["ref"+_al]=[]; else {for (var _aj in _aL["ref"+_al]){if (_aL["ref"+_al][_aj]._aK === _aK)return false; }}var _aH=_aL.attachEvent("on"+_al,_aJ); if (_aH)_aL["ref"+_al].push( {_aK:_aK,_aJ:_aJ } ); return _aH; }}else {return false; }} ; function _ah(_aG){var a=_aG.attributes,i,_ag,_aF; if (a){_ag=a.length; for (i=0; i<_ag; i+=1){if (a[i])_aF=a[i].name; if (typeof _aG[_aF] === "function"){_aG[_aF]=null; }}}a=_aG.childNodes; if (a){_ag=a.length; for (i=0; i<_ag; i+=1){_ah(_aG.childNodes[i]); }}}function _af(_aD){for (var _ad in _aD){switch (typeof(_aD[_ad])){case "string":try {_aD[_ad]=decodeURIComponent(_aD[_ad]); }catch (_aC){_aD[_ad]=unescape(_aD[_ad]); }break; case "object":_aD[_ad]=_af(_aD[_ad]); break; }}return _aD; }function _ac(_aB){if (_aB.preventDefault)_aB.preventDefault(); else event.returnValue= false; return false; }function KoolUpdatePanel(_aa,_ab){ this._aa=_aa; this._ab=_ab; this._ao0=new Array(); eval(_aa+"handleTrigger = function(){"+_aa+".update();}"); this._aO0=new Array(); this._al0=0; this._ai0=new Array(); this._aI0=new Array(); this._ao1(); }KoolUpdatePanel.prototype= {update:function (_aS){if (!this._al0){var _aO1=new KoolAjaxRequest( {url:_aS,onDone:_al1,onError:_ai1 } ); var _aI1=_aA(this._aa); _aO1.addArg("__updatepanel",this._aa); _ao2(_aI1,_aO1); for (var i=0; i<this._aI0.length; i++){_aO1.addArg(this._aI0[i]._aO2,this._aI0[i]._al2); } this._aI0=new Array(); var _ai2=new Object(); _ai2.UpdateRequest=_aO1; if (!this._aI2("OnBeforeSendingRequest",_ai2))return; koolajax.sendRequest(_aO1); if (this._ab){ this._ao3(1); } this._aI2("OnSendingRequest",null); }} ,setContent:function (_aO3){var _al3=_aA(this._aa); _al3.innerHTML=_aO3; } ,addTrigger:function (_ai3,_aI3){var _ao4=_aA(_ai3); if (_ao(_ao4)){ this._aO0.push( { "id":_ai3,"ev":_aI3 } ); _am(_ao4,("_"+_aI3.toLowerCase()).replace("_on",""),eval(this._aa+"handleTrigger"),0); }} ,_ao3:function (_aO4){var _al4=_aA(this._aa+"_loading"); var _al3=_aA(this._aa); if (_ao(_al4)){try {_al4.style.top="0px"; _al4.style.left="0px"; _al4.style.width=(isNaN(_al3.offsetWidth)?0:_al3.offsetWidth)+"px"; _al4.style.height=(isNaN(_al3.offsetHeight)?0:_al3.offsetHeight)+"px"; _al4.style.display=(_aO4)?"block": "none"; if (_an()=="ie6"){var _ai4=_aA(this._aa+"_iframe"); if (!_ao(_ai4)){var _aI4=document.createElement("div"); _aI4.innerHTML="\x3ciframe src=\"javascript:\'\';\" tabindex=\'-1\' style=\'position:absolute;display:none;border:0px;top:0px;left:0px;filter:progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)\'>Your browser does not support inline iframe.\x3c/frame>"; _ai4=_aZ(_aI4); _al3.insertBefore(_ai4,_al4); _ai4.id=this._aa+"_iframe"; }_ai4.style.width=_al4.style.width; _ai4.style.height=_al4.style.height; _ai4.style.display=(_aO4)?"block": "none"; }}catch (_aB){}}} ,_ao1:function (){var _al3=_aA(this._aa); var _ao5=_al3.getElementsByTagName("input"); for (var i=0; i<_ao5.length; i++){if (_ao5[i].type=="submit"){_am(_ao5[i],"click",_aO5, false); }}} ,_al5:function (){for (var i=0; i<this._aO0.length; i++){var _ao4=_aA(this._aO0[i]["id"]); if (_ao(_ao4)){_am(_ao4,("_"+this._aO0[i]["ev"].toLowerCase()).replace("_on",""),eval(this._aa+"handleTrigger"),0); }}} ,attachData:function (_aO2,_al2){var _aJ=new Object(); _aJ._aO2=_aO2; _aJ._al2=_al2; this._aI0.push(_aJ); } ,registerEvent:function (_ai5,_aI5){if (this._ai0[_ai5]){var _ao6= false; for (var i=0; i<this._ai0[_ai5].length; i++){if (this._ai0[_ai5][i]==_aI5){_ao6= true; }}if (!_ao6){ this._ai0[_ai5].push(_aI5); }}else { this._ai0[_ai5]=[_aI5]; }} ,_aI2:function (_ai5,_ai2){if (this._ai0[_ai5]){var _aO6= true; for (i=0; i<this._ai0[_ai5].length; i++){_aO6 &= this._ai0[_ai5][i](this,_ai2); }return _aO6; }else {return true; }}};function _aO5(_aB){var _al6=this.parentNode; while ((_al6.className.indexOf("_kup")!=0)){_al6=_al6.parentNode; }var _ai6=eval("__="+_al6.id); if (this.name!=""){_ai6.attachData(this.name,this.value); }_ai6.update(); return _ac(_aB); }function _ao2(_aY,_aO1){if (_aY.name!=""){switch (_aY.nodeName.toLowerCase()){case "input":switch (_aY.type.toLowerCase()){case "radio":case "checkbox":if (!_aY.checked)break; case "":case "text":case "hidden":case "file":case "password":_aO1.addArg(_aY.name,_aY.value); break; }break; case "select":case "textarea":_aO1.addArg(_aY.name,_aY.value); break; }}for (var i=0; i<_aY.childNodes.length; i++){_ao2(_aY.childNodes[i],_aO1); }}function _al1(_aI6){var _ao7=_aI6.indexOf("<updatepanel>")+13; var _aO7=_aI6.indexOf("</updatepanel>"); var _al7=""; if (_ao7<13 || _aO7<0){_al7=_aI6; }else {var _al7=_aI6.substring(_ao7,_aO7); }var _ai7; for (var i=0; i<this.request._aI7.data.length; i++)if (this.request._aI7.data[i]._ad=="__updatepanel")_ai7=this.request._aI7.data[i]._ao8; var _aI1=eval(_ai7); var _ai2=new Object(); _ai2.Content=_al7; if (!_aI1._aI2("OnBeforeUpdatePanel",_ai2))return; var _al3=_aA(_ai7); var _aO3=_aZ(_al3); _aO3.innerHTML=_al7; var _aO8=_aO3.getElementsByTagName("script"); var _al8=""; var _ai8=_aO8.length; for (var i=0; i<_ai8; i++){if (_aO8[i].src!=""){var _aI8=_aE("script",_aO3); _aI8.type="text/javascript"; _aI8.src=_aO8[i].src; }else {_al8+=_aO8[i].text; }}if (_al8!=""){var _aI8=_aE("script",_aO3); _aI8.text=_al8; }_aI1._al5(); _aI1._ao1(); if (_aI1._ab){_aI1._ao3(0); }_aI1._aI2("OnUpdatePanel",null); }function _ai1(_ao9){var _ai7; for (var i=0; i<this.request._aI7.data.length; i++)if (this.request._aI7.data[i]._ad=="__updatepanel")_ai7=this.request._aI7.data[i]._ao8; var _aI1=eval(_ai7); if (_aI1._ab){_aI1._ao3(0); }var _ai2=new Object(); _ai2.Error=_ao9; _aI1._aI2("OnError",_ai2); }var koolajax= {charset:null,_ai0:new Array(),_aO9:new Array(),sendRequest:function (_aO1){if (_aO1._aI7.sync){return _aO1._al9(); }else { this._aO9.push(_aO1); _aO1._al9(); }} ,ORSC:function (_aa){var _ai9=this._aI9(_aa); var _aO1=this._aO9[_ai9]; if (_ao(_aO1)){_aO1._aoa(); if (_aO1._aOa.readyState==4){ this._aO9.splice(_ai9,1); delete _aO1; }}} ,_aI9:function (_aa){var _ai9=null; for (var i=0; i<this._aO9.length; i++)if (this._aO9[i]._aa==_aa){_ai9=i; break; }return _ai9; } ,RTO:function (_aa){var _aO1=this._aO9[this._aI9(_aa)]; if (_ao(_aO1)){_aO1._ala(); }} ,callback:function (_aO1,_aia,_aS){_aO1._aI7.url=_aS; if (_ao(_aia)){_aO1._aIa=_aia; _aO1._aI7.onDone=_aob; _aO1._aI7.onError=_aOb; try { this.sendRequest(_aO1); }catch (_aB){}}else {_aO1._aI7.sync=1; var _alb; try {var _al7=this.sendRequest(_aO1); var _ao7=_al7.indexOf("<callback>")+10; var _aO7=_al7.indexOf("</callback>"); var _aib=_al7.substring(_ao7,_aO7); _alb=eval("__kr="+_aib); _alb=_af(_alb); }catch (_aB){}if (_ao(_alb)){if (_alb["r"]!=null){return _alb["r"]; }else { throw (_alb["e"]); return; }}}} ,funcRequest:function (_aIb,_aoc){var _aO1=new KoolAjaxRequest( {} ); _aO1.addArg("__func",_aIb); for (var i=0; i<_aoc.length; i++)_aO1.addArg("__args[]",_aoc[i]); return _aO1; } ,updatePanel:function (_ai7,_aS){var _aOc=eval(_ai7); if (_ao(_aOc)){_aOc.update(_aS); }} ,parseXml:function (_alc){if (!window.DOMParser){var _aic=["Msxml2.DOMDocument.3.0","Msxml2.DOMDocument"]; for (var i=0,_ag=_aic.length; i<_ag; i++){try {var _aIc=new ActiveXObject(_aic[i]); _aIc.async= false; _aIc.loadXML(_alc); _aIc.setProperty("SelectionLanguage","XPath"); return _aIc; }catch (_aod){}}}else {try {var _aOd=new window.DOMParser(); return _aOd.parseFromString(_alc,"text/xml"); }catch (_aod){}}} ,load:function (_ald,_aia){var _aO1=new KoolAjaxRequest( {method: "get",url:_ald,onDone:_aia,sync: (!_ao(_aia))} ); return this.sendRequest(_aO1); } ,loadCss:function (_ald,_aia){var _aO1=new KoolAjaxRequest( {method: "get",url:_ald,onDone:_aid,sync: false } ); _aO1._aId=_aia; this.sendRequest(_aO1); } ,loadScript:function (_ald,_aia){var _aO1=new KoolAjaxRequest( {method: "get",url:_ald,onDone:_aoe,sync: false } ); _aO1._aOe=_aia; this.sendRequest(_aO1); }};function _aid(_al7){var _ale=_aE("style",document.body); _ale.setAttribute("type","text/css"); if (_ale.styleSheet){_ale.styleSheet.cssText=_al7; }else {_aX(_al7,_ale); }if (_ao(this.request._aId))this.request._aId(this.url); }function _aoe(_al7){var _aie=_aE("script",document.body); _aie.setAttribute("type","text/javascript"); _aie.text=_al7; if (_ao(this.request._aOe))this.request._aOe(this.url); }function _aob(_al7){var _ao7=_al7.indexOf("<callback>")+10; var _aO7=_al7.indexOf("</callback>"); var _aib=_al7.substring(_ao7,_aO7); var _alb=eval("__kr="+_aib); _alb=_af(_alb); this.request._aIa(_alb["r"],_alb["e"]); }function _aOb(_ao9){ this.request._aIa(null,_ao9); }function KoolAjaxRequest(_aI7){ this._aOa=null; if (!_ao(_aI7.sync))_aI7.sync=0; if (!_ao(_aI7.method))_aI7.method="post"; if (!_ao(_aI7.charset))_aI7.charset=koolajax.charset; if (!_ao(_aI7.data))_aI7.data=new Array(); _aI7.request=this ; this._aI7=_aI7; this._aa=_ay(); }KoolAjaxRequest.prototype= {_al9:function (){var _aOa=null; var _aIe=["Msxml2.XMLHTTP.3.0","Msxml2.XMLHTTP"]; for (var i=0; i<_aIe.length && _aOa==null; i++){try {if (typeof ActiveXObject!="undefined"){_aOa=new ActiveXObject(_aIe[i]); }}catch (_aof){_aOa=null; }}if (!_aOa && typeof XMLHttpRequest!="undefined"){_aOa=new XMLHttpRequest(); _aOa.overrideMimeType("text/plain"); } this._aOa=_aOa; if (!_ao(_aOa)){_aI("Could not able to create XHTMLRequest"); return false; }if (!_ao(this._aI7.url))this._aI7.url=_at(window.location.href); var _aOf="__koolajax=1"; for (var _aIf in this._aI7.data)if (typeof this._aI7.data[_aIf]!="function")_aOf+="&"+this._aI7.data[_aIf]._ad+"="+this._aI7.data[_aIf]._ao8; if (this._aI7.method.toLowerCase()!="post")this._aI7.url+=((this._aI7.url.indexOf("?")<0)?"?": "&")+_aOf; _aOa.open(this._aI7.method,this._aI7.url,!this._aI7.sync); if (!this._aI7.sync)_aOa.onreadystatechange=eval("__orsc=function(){koolajax.ORSC("+this._aa+")}"); if (_ao(this._aI7.timeout)){ this._aog=setTimeout("koolajax.RTO("+this._aa+")",this._aI7.timeout); } this._aOg= false; if (this._aI7.method.toLowerCase()!="post"){_aOa.send(null); }else {_aOa.setRequestHeader("Method","POST "+this._aI7.url+" HTTP/1.1"); _aOa.setRequestHeader("Content-Type","application/x-www-form-urlencoded"+((this._aI7.charset!=null)?";charset="+this._aI7.charset: "")); _aOa.send(_aOf); }_aI(this._aI7.method); _aI(_aOf); _aI("Data send..."); if (this._aI7.sync){return _aOa.responseText; }} ,_ala:function (){if (_ao(this._aI7.onTimeOut)){var _alg=this._aI7.onTimeOut(); if (_alg){ this._aog=setTimeout("koolajax.RTO("+this._aa+")",this._aI7.timeout); }else { this.abort(); }}else { this.abort(); }} ,abort:function (){ this._aOg= true; this._aOa.abort(); if (_ao(this._aI7.onAbort)){ this._aI7.onAbort(); }} ,addArg:function (_ad,_ao8){var _aJ=new Object(); _aJ._ad=_ad; _aJ._ao8=encodeURIComponent(_ao8); this._aI7.data.push(_aJ); } ,_aoa:function (){_aI(this._aOa.readyState); switch (this._aOa.readyState){case 1:if (_ao(this._aI7.onOpen))this._aI7.onOpen(); break; case 2:if (_ao(this._aI7.onSent))this._aI7.onSent(); break; case 3:if (_ao(this._aI7.onReceive))this._aI7.onReceive(); break; case 4:_aI(this._aOa.responseText); if (_ao(this._aog))clearTimeout(this._aog); if (!this._aOg){if (this._aOa.status==200){var _aig=this._aOa.responseText; var _aie=null; var _aIg=_aig.indexOf("[!@s>"); if (_aIg>0){_aie=_aig.substring(_aIg+5,_aig.length); _aig=_aig.substr(0,_aIg); }if (_ao(this._aI7.onDone))this._aI7.onDone(_aig); if (_ao(_aie)){setTimeout(_aie,20); }}else {if (_ao(this._aI7.onError))this._aI7.onError(this._aOa.status); }} this._aOa.onreadystatechange=_aT; break; }}}; <?php exit();
} if (!class_exists("KoolScripting", FALSE)) {

    class koolscripting {

        static function start() {
            ob_start();
            return "";
        }

        static function end() {
            $content = ob_get_clean();
            $_aO0 = "";
            $_al1 = new domdocument();
            $_al1->loadxml($content);
            $_aO1 = $_al1->documentElement;
            $_al2 = $_aO1->getattribute("id");
            $_aO2 = $_aO1->nodeName;
            $_al2 = ($_al2 == "") ? "dump" : $_al2;
            if (class_exists($_aO2, FALSE)) {
                eval("$" . $_al2 . " = new " . $_aO2 . "(\047" . $_al2 . "');");
                $$_al2->loadxml($_aO1);
                $_aO0 = $$_al2->render();
            } else {
                $_aO0.=$content;
            } return $_aO0;
        }

    }

} if (!class_exists("KoolAjax", FALSE)) {

    function _al3($_aO3, $_al4, $_aO4) {
        return str_replace($_aO3, $_al4, $_aO4);
    }

    function _al5() {
        $_aO5 = _al3("\134", "/", strtolower($_SERVER["SCRIPT_NAME"]));
        $_aO5 = _al3(strrchr($_aO5, "/"), "", $_aO5);
        $_al6 = _al3("\134", "/", realpath("."));
        $_aO6 = _al3($_aO5, "", strtolower($_al6));
        return $_aO6;
    }

    function _al7($_aO7) {
        if (isset($_POST[$_aO7])) return $_POST[$_aO7]; if (isset($_GET[$_aO7])) return $_GET[$_aO7]; return NULL;
    }

    function _al8($_aO8, $_al9) {
        $_aO9 = "";
        foreach ($_aO8->childNodes as $_ala) {
            $_aO9.=$_al9->savexml($_ala);
        } return trim($_aO9);
    }

    function _aOa($_alb) {
        return _al3("+", " ", urlencode($_alb));
    }

    function _aOb($_alc) {
        $_aOc = "null";
        $_ald = gettype($_alc);
        switch ($_ald) {
            case "integer": case "double": $_aOc = $_alc;
                break;
            case "boolean": $_aOc = ($_alc) ? "true" : "false";
                break;
            case "string": $_aOc = "\042" . _aOa($_alc) . "\042";
                break;
            case "array": case "object": $_aOc = "{";
                if ($_ald == "object") $_alc = get_object_vars($_alc); foreach ($_alc as $_aOd => $_ale)
                    $_aOc.=((is_numeric($_aOd)) ? $_aOd : "\042" . _aOa($_aOd) . "\042") . ":" . _aOb($_ale) . ","; if (count($_alc)) $_aOc = substr($_aOc, 0, -1); $_aOc.="}";
                break;
        } return $_aOc;
    }

    class _aOe {

        var $_alf;
        var $_aOf;

        function __construct($_alf, $_aOf) {
            $this->_alf = $_alf;
            $this->_aOf = $_aOf;
        }

    }

    class _alg {

        var $_aOg = "white";
        var $_alh = 062;
        var $_aOh;

    }

    class updatepanel {

        var $_al2;
        var $content;
        var $rendermode = "block";
        var $cssclass;
        var $_aOi;
        var $_alj = NULL;
        static $koolajax;

        function __construct($_al2) {
            $this->_al2 = $_al2;
            $this->_aOi = array();
        }

        function loadxmlfile($_aOj) {
            
        }

        function loadxml($_alk) {
            if (gettype($_alk) == "string") {
                $_al1 = new domdocument();
                $_al1->loadxml($_alk);
                $_alk = $_al1->documentElement;
            } $_al2 = $_alk->getattribute("id");
            if ($_al2 != "") $this->_al2 = $_al2; $this->cssclass = $_alk->getattribute("cssclass");
            if ($this->cssclass == "") {
                $this->cssclass = $_alk->getattribute("class");
            } $_aOk = $_alk->getattribute("rendermode");
            $this->rendermode = ($_aOk != "") ? $_aOk : "block";
            foreach ($_alk->childNodes as $_all) {
                switch (strtolower($_all->nodeName)) {
                    case "content": $_alm = _al8($_all, $_alk->parentNode);
                        $_alm = trim($_alm);
                        if (substr($_alm, 0, 011) == "<![CDATA[") {
                            $_alm = substr($_alm, 011);
                        } if (substr($_alm, -3) == "]]>") {
                            $_alm = substr($_alm, 0, -3);
                        } $this->content = $_alm;
                        break;
                    case "triggers": foreach ($_all->childNodes as $_aOm) {
                            if (strtolower($_aOm->nodeName) == "trigger") {
                                $this->addtrigger($_aOm->getattribute("elementid"), $_aOm->getattribute("event"));
                            }
                        } break;
                    case "loading": $this->_alj = new _alg();
                        $this->_alj->_aOh = $_all->getattribute("image");
                        $_aOg = $_all->getattribute("backColor");
                        if ($_aOg != "") $this->_alj->_aOg = $_aOg; $_alh = $_all->getattribute("opacity");
                        if ($_alh != "") $this->_alj->_alh = intval($_alh); break;
                }
            }
        }

        function setloading($_aOh, $_aOg = "white", $_alh = 062) {
            $this->_alj = new _alg();
            $this->_alj->_aOh = $_aOh;
            $this->_alj->_aOg = $_aOg;
            $this->_alj->_alh = $_alh;
        }

        function addtrigger($_alf, $_aOf) {
            array_push($this->_aOi, new _aOe($_alf, $_aOf));
        }

        function render() {
            $koolajax = updatepanel::$koolajax;
            if ($koolajax->isCallback && _al7("__updatepanel") == $this->_al2) {
                $_aln = 0;
                while (ob_get_level() > 0 && $_aln < 012) {
                    ob_end_clean();
                    $_aln++;
                } echo "<updatepanel>" . $this->content . "</updatepanel>" . (($koolajax->_aOn == "") ? "" : "[!@s>" . $koolajax->_aOn);
                exit();
            } else {
                $_alo = "<div id='{id}\047 class=\047_kup {class}\047 style='position:relative;\047><div>{content}</div>{loading}</div>";
                $_aOo = "<span id='{id}' {class}>{content}</span>";
                $_alp = "<div id='{id}_loading\047 style=\047position:absolute;display:none;background:url({image}) no-repeat 50% 50%;background-color:{backColor};filter:alpha(opacity={opacity});-moz-opacity:{opacity/100};opacity:{opacity/100};\047><img src=\047{image}' style=\047display:none' alt=\047\047 /></div>";
                $_aOp = "<script type='text/javascript\047>var {id} = new KoolUpdatePanel('{id}',{loading});{triggers}</script>";
                $_alq = "{id}.addTrigger();";
                $_aOq = ($this->rendermode == "inline") ? $_aOo : $_alo;
                $_aOq = _al3("{id}", $this->_al2, $_aOq);
                $_aOq = _al3("{content}", $this->content, $_aOq);
                $_aOq = _al3("{class}", ($this->cssclass != "") ? $this->cssclass : "", $_aOq);
                $_alr = $_aOp;
                $_alr = _al3("{id}", $this->_al2, $_alr);
                if ($this->_alj != NULL) {
                    $_alj = _al3("{id}", $this->_al2, $_alp);
                    $_alj = _al3("{image}", $this->_alj->_aOh, $_alj);
                    $_alj = _al3("{opacity}", $this->_alj->_alh, $_alj);
                    $_alj = _al3("{opacity/100}", $this->_alj->_alh / 0144, $_alj);
                    $_alj = _al3("{backColor}", $this->_alj->_aOg, $_alj);
                    $_aOq = _al3("{loading}", $_alj, $_aOq);
                    $_alr = _al3("{loading}", "1", $_alr);
                } else {
                    $_aOq = _al3("{loading}", "", $_aOq);
                    $_alr = _al3("{loading}", "0", $_alr);
                } $_aOi = "";
                for ($_als = 0; $_als < sizeof($this->_aOi); $_als++) {
                    $_aOi.=$this->_al2 . ".addTrigger(\047" . $this->_aOi[$_als]->_alf . "','" . $this->_aOi[$_als]->_aOf . "');";
                } $_alr = _al3("{triggers}", $_aOi, $_alr);
                $_aOq.=$_alr;
                return $_aOq;
            }
        }

    }

    class koolajax {

        var $_al0 = "3.0.0.0";
        var $_aOs;
        var $_alt;
        var $isCallback = FALSE;
        var $_aOt;
        var $_aOn = "";
        var $scriptFolder = "";
        var $CharSet;

        function __construct() {
            $this->_aOs = array();
            $this->_alt = array();
            if (_al7("__koolajax") != NULL) {
                $this->isCallback = TRUE;
            } $this->_aOt = array();
        }

        function enablefunction($_alu) {
            array_push($this->_aOs, $_alu);
        }

        function registerclientscript($_aOu) {
            $this->_aOn .=$_aOu . ";";
        }

        function render() {
            if ($this->isCallback) {
                if (_al7("__func") != NULL) {
                    $_aln = 0;
                    while (ob_get_level() > 0 && $_aln < 012) {
                        ob_end_clean();
                        $_aln++;
                    } $_alv = _al7("__func");
                    $_aOv = _al7("__args");
                    $_alc = "null";
                    $_alw = "null";
                    try {
                        $_alc = _aOb(call_user_func_array($_alv, ($_aOv !== NULL) ? $_aOv : array()));
                    } catch (_aOw $_alx) {
                        $_alw = "\042" . $_alx . _aOx() . "\042";
                    } $_aly = "<callback>{\042r\042:{result},\042e\042:{error}}</callback>{js}";
                    $_aOy = "[!@s>{js}";
                    $_aly = _al3("{result}", $_alc, $_aly);
                    $_aly = _al3("{error}", $_alw, $_aly);
                    $_aly = _al3("{js}", ($this->_aOn == "") ? "" : _al3("{js}", $this->_aOn, $_aOy), $_aly);
                    echo $_aly;
                    exit();
                }
            } else {
                $_aOq = "";
                $_aOq = "\n<!--KoolAjax version " . $this->_al0 . " - www.koolphp.net -->\n";
                $_aOq.="<script type=\047text/javascript\047 src=\047" . $this->_alz() . "?" . md5("js") . "\047> </script>";
                if ($this->CharSet !== NULL) {
                    $_aOq.="<script type='text/javascript\047>koolajax.charset=\047" . $this->CharSet . "';</script>";
                } if (sizeof($this->_aOs) > 0 || sizeof($this->_alt) > 0) {
                    $_aOq.="\n<script type='text/javascript'>\n";
                    for ($_als = 0; $_als < sizeof($this->_aOs); $_als++) {
                        $_aOq.="function " . $this->_aOs[$_als] . "()\n";
                        $_aOq.="{\n";
                        $_aOq.="return koolajax.funcRequest('" . $this->_aOs[$_als] . "\047,arguments);\n";
                        $_aOq.="}\n";
                    } $_aOq.="</script>\n";
                } if ($this->_aOn != "") {
                    $_aOq.="\n<script type='text/javascript\047>\n";
                    $_aOq.=$this->_aOn . ";";
                    $_aOq.="\n</script>\n";
                } return $_aOq;
            }
        }

        function _alz() {
            if ($this->scriptFolder == "") {
                $_aO6 = _al5();
                $_aOz = substr(_al3("\134", "/", __FILE__), strlen($_aO6));
                return $_aOz;
            } else {
                $_aOz = _al3("\134", "/", __FILE__);
                $_aOz = $this->scriptFolder . substr($_aOz, strrpos($_aOz, "/"));
                return $_aOz;
            }
        }

    }

    if (!isset($koolajax)) {
        $koolajax = new koolajax();
        if ($koolajax->isCallback) {
            ob_start();
        } updatepanel::$koolajax = $koolajax;
    }
} ?>
