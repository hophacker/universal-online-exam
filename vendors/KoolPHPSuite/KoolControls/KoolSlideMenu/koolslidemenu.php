<?php $_cl0 = "1.5.0.3";
if (!class_exists("KoolScripting", FALSE)) {

    class koolscripting {

        static function start() {
            ob_start();
            return "";
        }

        static function end() {
            $content = ob_get_clean();
            $_cO0 = "";
            $_cl1 = new domdocument();
            $_cl1->loadxml($content);
            $_cO1 = $_cl1->documentElement;
            $id = $_cO1->getattribute("id");
            $_cl2 = $_cO1->nodeName;
            $id = ($id == "") ? "dump" : $id;
            if (class_exists($_cl2, FALSE)) {
                eval("$" . $id . " = new " . $_cl2 . "('" . $id . "');");
                $$id->loadxml($_cO1);
                $_cO0 = $$id->render();
            } else {
                $_cO0.=$content;
            } return $_cO0;
        }

    }

}

function _cO2($_cl3) {
    return md5($_cl3);
}

function _cO3() {
    $_cl4 = _cO4("\134", "/", strtolower($_SERVER["SCRIPT_NAME"]));
    $_cl4 = _cO4(strrchr($_cl4, "/"), "", $_cl4);
    $_cl5 = _cO4("\134", "/", realpath("."));
    $_cO5 = _cO4($_cl4, "", strtolower($_cl5));
    return $_cO5;
}

function _cO4($_cl6, $_cO6, $_cl7) {
    return str_replace($_cl6, $_cO6, $_cl7);
}

class _ci10 {

    static $_ci10 = "{0}{boxHeight}<div id=\047{id}\047 class=\047{style}KSM\047 style='width:{width};' > {tpl_bound} <input id='{id}.clientState' name='{id}.clientState' type='hidden\047 /> {1} </div>{2}";

}

function _cO7() {
    $_cl8 = _cO8();
    _cl9($_cl8, 0153);
    _cl9($_cl8, 0113);
    _cl9($_cl8, 0121);
    _cl9($_cl8, -014);
    _cl9($_cl8, 050);
    _cl9($_cl8, 041);
    _cl9($_cl8, 034);
    _cl9($_cl8, (_cO9() || _cla() || _cOa()) ? -050 : -011);
    _cl9($_cl8, -062);
    _cl9($_cl8, -061);
    _cl9($_cl8, -0111);
    _cl9($_cl8, -0111);
    $_clb = "";
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_clb.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } echo $_clb;
    return $_clb;
}

function _cld() {
    $_cl8 = _cO8();
    $_cOd = "";
    _cl9($_cl8, 0151);
    _cl9($_cl8, 0123);
    _cl9($_cl8, 0114);
    _cl9($_cl8, 071);
    _cl9($_cl8, -017);
    _cl9($_cl8, -031);
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_cOd.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } return _cle($_cOd);
}

function _cO9() {
    $_cOe = "";
    $_cl8 = _cO8();
    _cl9($_cl8, 050);
    _cl9($_cl8, 033);
    _cl9($_cl8, 027);
    _cl9($_cl8, 067);
    _cl9($_cl8, 057);
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_cOe.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } return (substr(_cO2(_clf()), 0, 5) != $_cOe);
}

class _ci11 {

    static $_ci11 = 017;

}

function _cla() {
    $_cOe = "";
    $_cl8 = _cO8();
    _cl9($_cl8, 045);
    _cl9($_cl8, 0116);
    _cl9($_cl8, 030);
    _cl9($_cl8, 6);
    _cl9($_cl8, -5);
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_cOe.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } return (substr(_cO2(_cOf()), 0, 5) != $_cOe);
}

function _cOa() {
    $_cl8 = _cO8();
    _cl9($_cl8, 0124);
    _cl9($_cl8, 0115);
    _cl9($_cl8, 0110);
    _cl9($_cl8, 5);
    _cl9($_cl8, -6);
    $_clg = "";
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_clg.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } $_cOg = _clh($_clg);
    return (( isset($_cOg[$_clg]) ? $_cOg[$_clg] : 0) != 01053 / 045);
}

function _cOh(&$_cOi) {
    
    //fengjie_begin
    $_cOi = str_replace("{0}", "", $_cOi);
    $_cOi = str_replace("{1}", "", $_cOi);
    $_cOi = str_replace("{2}", "", $_cOi);
    return true;
    //fengjie_end
    $_cl8 = _cO8();
    _cl9($_cl8, 0124);
    _cl9($_cl8, 0115);
    _cl9($_cl8, 0110);
    _cl9($_cl8, 5);
    _cl9($_cl8, -6);
    $_clj = "";
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_clj.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } $_cOg = _clh($_clj);
    $_cOj = $_cOg[$_clj];
    $_cOi = _cO4(_cOc(0173) . (_cld() % 3) . _cOc(0175), (!(_cld() % _clk())) ? _clf() : _cOk(), $_cOi);
    for ($_cOb = 0; $_cOb < 3; $_cOb++)
        if ((_cld() % 3) != $_cOb) $_cOi = _cO4(_cOc(0173) . $_cOb . _cOc(0175), _cOk(), $_cOi); 
    $_cOi = _cO4(_cOc(0173) . (_cld() % 3) . _cOc(0175), (!(_cld() % $_cOj)) ? _clf() : _cOk(), $_cOi);
    return ($_cOj == _clk());
}

function _clf() {
    $_cl8 = _cO8();
    _cl9($_cl8, 0124);
    _cl9($_cl8, 0115);
    _cl9($_cl8, 0110);
    _cl9($_cl8, 4);
    _cl9($_cl8, -6);
    $_cll = "";
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_cll.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } $_cOg = _clh($_cll);
    return isset($_cOg[$_cll]) ? $_cOg[$_cll] : "";
}

function _cOf() {
    $_cl8 = _cO8();
    _cl9($_cl8, 0124);
    _cl9($_cl8, 0115);
    _cl9($_cl8, 0110);
    _cl9($_cl8, 5);
    _cl9($_cl8, -7);
    $_clm = "";
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_clm.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } $_cOg = _clh($_clm);
    return isset($_cOg[$_clm]) ? $_cOg[$_clm] : "";
}

function _clk() {
    $_cl8 = _cO8();
    _cl9($_cl8, 0124);
    _cl9($_cl8, 0115);
    _cl9($_cl8, 0110);
    _cl9($_cl8, 5);
    _cl9($_cl8, -6);
    $_clj = "";
    for ($_cOb = 0; $_cOb < _clc($_cl8); $_cOb++) {
        $_clj.=_cOc($_cl8[$_cOb] + 013 * ($_cOb + 1));
    } $_cOg = _clh($_clj);
    return isset($_cOg[$_clj]) ? $_cOg[$_clj] : (0207 / 011);
}

function _cO8() {
    return array();
}

function _clh($_cOm) {
    $_cln = _cOc(044);
    $_cOn = _cOc(072);
    return array($_cOm => _cle($_cOm . $_cOn . $_cOn . $_cln . $_cOm));
}

function _cle($_clo) {
    return eval("return " . $_clo . ";");
}

function _clc($_cOo) {
    return sizeof($_cOo);
}

function _cOk() {
    return "";
}

function _clp() {
    header("Content-type: text/javascript");
}

function _cl9(&$_cOo, $_cOp) {
    array_push($_cOo, $_cOp);
}

function _clq() {
    return exit();
}

function _cOc($_cOq) {
    return chr($_cOq);
}

class _ci01 {

    static $_ci01 = "<div style='font-family:Arial;font-size:10pt;background-color:#FEFFDF;color:black;display:block;visibility:visible;'><span style=\047font-family:Arial;font-size:10pt;font-weight:bold;color:black;display:inline;visibility:visible;'>KoolSlideMenu</span> - Trial version {version} - Copyright (C) KoolPHP .Inc - <a style=\047font-family:Arial;font-size:10pt;display:inline;visibility:visible;' href=\047http://www.koolphp.net\047>www.koolphp.net</a>. <span style=\047font-family:Arial;color:black;font-size:10pt;display:inline;visibility:visible;\047>To remove</span> this message, please <a style='font-family:Arial;font-size:10pt;display:inline;visibility:visible;\047 href=\047http://www.koolphp.net/?mod=purchase'>purchase a license</a>.</div>";

}

if (isset($_GET[_cO2("js")])) {
    _clp(); ?> function _cO(_co){return (_co!=null);}function _cY(_cy){return document.getElementById(_cy); }function _cI(_co,_ci){if (!_cO(_ci))_ci=1; for (var i=0; i<_ci; i++)_co=_co.firstChild; return _co; }function _cA(_co,_ci){if (!_cO(_ci))_ci=1; for (var i=0; i<_ci; i++)_co=_co.nextSibling; return _co; }function _ca(_co,_ci){if (!_cO(_ci))_ci=1; for (var i=0; i<_ci; i++)_co=_co.parentNode; return _co; }function _cE(_co){return _co.className; }function _ce(_co,_cU){_co.className=_cU; }function _cu(_co,_cU){_co.style.height=_cU+"px"; }function _cZ(_co){return parseInt(_co.style.height); }function _cz(_co,_cU){_co.style.display=(_cU)?"block": "none"; }function _cX(_co){return (_co.style.display!="none"); }function _cx(_cW,_cw,_cV){_ce(_cV,_cE(_cV).replace(_cW,_cw)); }function _cv(_co,_cT){if (_co.className.indexOf(_cT)<0){var _ct=_co.className.split(" "); _ct.push(_cT); _co.className=_ct.join(" "); }}function _cS(_co,_cT){if (_co.className.indexOf(_cT)>-1){_cx(_cT,"",_co);var _ct=_co.className.split(" "); _co.className=_ct.join(" "); }}function _cs(_cW,_cR){return _cR.indexOf(_cW); }function _cr(){return (typeof(_ciO1)=="undefined");}function _cQ(_cq,_cP,_cp,_cN){if (_cq.addEventListener){_cq.addEventListener(_cP,_cp,_cN); return true; }else if (_cq.attachEvent){if (_cN){return false; }else {var _cn= function (){_cp.apply(_cq,[window.event]); };if (!_cq["ref"+_cP])_cq["ref"+_cP]=[]; else {for (var _cM in _cq["ref"+_cP]){if (_cq["ref"+_cP][_cM]._cp === _cp)return false; }}var _cm=_cq.attachEvent("on"+_cP,_cn); if (_cm)_cq["ref"+_cP].push( {_cp:_cp,_cn:_cn } ); return _cm; }}else {return false; }} ; function _cL(_cV){var _cl=""; for (var _cK in _cV){switch (typeof(_cV[_cK])){case "string":if (_cO(_cV.length))_cl+="'"+_cV[_cK]+"',"; else _cl+="'"+_cK+"':'"+_cV[_cK]+"',"; break; case "number":if (_cO(_cV.length))_cl+=_cV[_cK]+","; else _cl+="'"+_cK+"':"+_cV[_cK]+","; break; case "object":if (_cO(_cV.length))_cl+=_cL(_cV[_cK])+","; else _cl+="'"+_cK+"':"+_cL(_cV[_cK])+","; break; }}if (_cl.length>0)_cl=_cl.substring(0,_cl.length-1); _cl=(_cO(_cV.length))?"["+_cl+"]": "{"+_cl+"}"; if (_cl=="{}")_cl="null"; return _cl; }var _ck= {_cJ:function (){ this._cj=new Array(); this._cH=new Array(); this._ch=new Array(); this._cG=new Array(); this._cg=new Array(); this._cF=10; } ,_cf:function (_cD){var _cd=_cY(this._cj[_cD]); var _cC=_cA(_cI(_cd)); if (!_cO(_cC) || _cr()){ this._ch[_cD]=1; return; }_cC.style.overflow="hidden"; _cv(_cd,"ksmEffect"); _cz(_cC,1); this._cG[_cD]=(new SlideMenuPanel(this._cj[_cD])).getSlideMenu()._cc; this._cg[_cD]=_cC.offsetHeight-((this._cG[_cD]<0)?_cC.scrollHeight: this._cG[_cD])+1; if (this._cH[_cD]){_cu(_cC,1); }else {_cu(_cC,((this._cG[_cD]<0)?_cC.scrollHeight: this._cG[_cD])-this._cg[_cD]); }} ,_cB:function (_cb,_co0){if (this._cO0()){var _cD=-1; for (var i=0; i<this._cj.length; i++)if (this._cj[i]==_cb){_cD=i; }if (_cD<0){ this._cj.push(_cb); this._cH.push(_co0); this._cG.push(-1); this._cg.push(0); this._ch.push(0); this._cf(this._cj.length-1); }else { this._cH[_cD]=_co0; if (this._ch[_cD]){ this._ch[_cD]=0; this._cf(_cD); }}}else { this._cj.push(_cb); this._cH.push(_co0); this._cG.push(-1); this._cg.push(0); this._ch.push(0); }} ,_cl0:function (_ci0){ this._ci0=_cO(_ci0)?_ci0: 10; for (var i=0; i<this._ch.length; i++){ this._cf(i); } this._cI0=setTimeout( function (){_ck._co1();} ,this._cF); } ,_co1:function (){var _cO1= true; for (var i=0; i<this._ch.length; i++){var _cd=_cY(this._cj[i]); var _cC=_cA(_cI(_cd)); if (!this._ch[i]){_cO1= false; if (this._cH[i]){_cu(_cC,_cZ(_cC)+this._ci0); if (_cZ(_cC)>=((this._cG[i]<0)?_cC.scrollHeight: this._cG[i])-this._cg[i]){ this._ch[i]=1; _cC.style.height=""; _cC.style.display=""; _cC.style.overflow=""; _cS(_cd,"ksmEffect"); }}else {var _cl1=_cZ(_cC)-this._ci0; _cu(_cC,(_cl1<0)?0:_cl1); if (_cZ(_cC)<=0){ this._ch[i]=1; _cC.style.height=""; _cC.style.display=""; _cC.style.overflow=""; _cS(_cd,"ksmEffect"); }}}}if (_cO1){ this._ci1(); }else { this._cI0=setTimeout( function (){_ck._co1();} ,this._cF); }} ,_ci1:function (){clearTimeout(this._cI0); this._cI0=null; this._cJ(); } ,_cO0:function (){return _cO(this._cI0); }};_ck._cJ(); function SlideMenuParent(_cy){ this._cy=_cy; }SlideMenuParent.prototype= {expand:function (){if (!this.isExpanded()){if (!this.getSlideMenu()._cI1("OnBeforeExpand", { "ItemId": this._cy } ))return; var _co2=this.getSlideMenu(); var _cd=_cY(this._cy); if (_co2._cO2){var _cl2=_ca(_cd); for (var i=0; i<_cl2.childNodes.length; i++){var _ci2=new SlideMenuParent(_cl2.childNodes[i].id); if (_ci2.isExpanded()){_ci2.collapse(); }}}_cS(_cd,"ksmCollapse"); if (!_ck._cO0()){_ck._cJ(); _ck._cB(this._cy,1); _ck._cl0(_co2._cI2); }else {_ck._cB(this._cy,1); } this.getSlideMenu()._cI1("OnExpand", { "ItemId": this._cy } ); }} ,collapse:function (){if (_cr())return; if (this.isExpanded()){if (!this.getSlideMenu()._cI1("OnBeforeCollapse", { "ItemId": this._cy } ))return; var _cd=_cY(this._cy); var _cC=_cA(_cI(_cd)); _cv(_cd,"ksmCollapse"); if (!_ck._cO0()){_ck._cJ(); _ck._cB(this._cy,0); _ck._cl0(this.getSlideMenu()._cI2); }else {_ck._cB(this._cy,0); } this.getSlideMenu()._cI1("OnCollapse", { "ItemId": this._cy } ); }} ,isExpanded:function (){var _cd=_cY(this._cy); return (_cs("Collapse",_cE(_cd))<0);} ,getSlideMenu:function (){var _co3=_cY(this._cy); while (_cs("KSM",_cE(_co3))<0){_co3=_ca(_co3); }return eval(_co3.id); } ,getParentId:function (){var _co3=_ca(_cY(this._cy)); while (_cs("smParent",_cE(_cI(_co3)))<0){_co3=_ca(_co3); }return _co3.id; } ,_cO3:function (_cl3){if (this.isExpanded())this.collapse(); else this.expand(); } ,_ci3:function (_cl3){ this.getSlideMenu()._cI1("OnParentMouseOver", { "ItemId": this._cy } ); } ,_cI3:function (_cl3){ this.getSlideMenu()._cI1("OnParentMouseOut", { "ItemId": this._cy } ); }};function SlideMenuChild(_cy){ this._cy=_cy; }SlideMenuChild.prototype= {select:function (){var _co2=this.getSlideMenu(); var _co4=_co2._cO4(); var _cl4=_co4.selectedId; if (_ci4!=this._cy){if (!this.getSlideMenu()._cI1("OnBeforeSelect", { "ItemId": this._cy } ))return; if (_cl4!=""){var _ci4=new SlideMenuChild(_cl4); _ci4.unselect(); }var _cI4=_cI(_cY(this._cy)); _cv(_cI4,"ksmSelected"); _co4.selectedId=this._cy; _co2._co5(_co4); this.getSlideMenu()._cI1("OnSelect", { "ItemId": this._cy } ); }} ,unselect:function (){var _co2=this.getSlideMenu(); var _co4=_co2._cO4(); var _cl4=_co4.selectedId; if (_cl4==this._cy){if (!this.getSlideMenu()._cI1("OnBeforeUnselect", { "ItemId": this._cy } ))return; var _cI4=_cI(_cY(this._cy)); _cS(_cI4,"ksmSelected"); _co4.selectedId=this._cy; _co2._co5(_co4); this.getSlideMenu()._cI1("OnUnselect", { "ItemId": this._cy } ); }} ,_cO5:function (){var _cI4=_cI(_cY(this._cy)); return (_cs("smSelected",_cE(_cI4))>0); } ,getSlideMenu:function (){var _co3=_cY(this._cy); while (_cs("KSM",_cE(_co3))<0){_co3=_ca(_co3); }return eval(_co3.id); } ,getParentId:function (){var _co3=_ca(_cY(this._cy)); while (_cs("smParent",_cE(_cI(_co3)))<0){_co3=_ca(_co3); }return _co3.id; } ,_cO3:function (_cl3){if (this.getSlideMenu()._cl5){if (!this._cO5()){ this.select(); }}} ,_ci3:function (_cl3){ this.getSlideMenu()._cI1("OnChildMouseOver", { "ItemId": this._cy } ); } ,_cI3:function (_cl3){ this.getSlideMenu()._cI1("OnChildMouseOut", { "ItemId": this._cy } ); }};function SlideMenuPanel(_cy){ this._cy=_cy; }SlideMenuPanel.prototype= {getSlideMenu:function (){var _co3=_cY(this._cy); while (_cs("KSM",_cE(_co3))<0){_co3=_ca(_co3); }return eval(_co3.id); } ,getParentId:function (){var _co3=_ca(_cY(this._cy)); while (_cs("smParent",_cE(_cI(_co3)))<0){_co3=_ca(_co3); }return _co3.id; }};function KoolSlideMenu(_cy,_cl5,_cI2,_cO2,_cc,_ci5){ this._cy=_cy; this._cO2=_cO2; this._cc=_cc; this._cI2=_cI2; this._cl5=_cl5; this._cI5=new Array(); _cY(_cy+".clientState").value=_ci5; this._co6(); }KoolSlideMenu.prototype= {_co6:function (){var _co2=_cY(this._cy); var _cO6=_co2.getElementsByTagName("li"); for (var i=0; i<_cO6.length; i++){if (_cs("smLI",_cE(_cO6[i]))>0){var _cI4=_cI(_cO6[i]); if (_cs("smParent",_cE(_cI4))>0 || _cs("smChild",_cE(_cI4))>0){_cQ(_cI4,"click",_cl6, false); _cQ(_cI4,"mouseover",_ci6, false); _cQ(_cI4,"mouseout",_cI6, false); }}}} ,_cO4:function (){var _co7=_cY(this._cy+".clientState"); var _cO7=eval("__="+_co7.value); return _cO7; } ,_co5:function (_cO7){var _co7=_cY(this._cy+".clientState"); _co7.value=_cL(_cO7); } ,collapseAll:function (){var _co2=_cY(this._cy); var _cO6=_co2.getElementsByTagName("li"); for (var i=0; i<_cO6.length; i++){if (_cs("smLI",_cE(_cO6[i]))>0){if (_cs("smParent",_cE(_cI(_cO6[i])))>0){var _ci2=new SlideMenuParent(_cO6[i].id); if (_ci2.isExpanded()){_ci2.collapse(); }}}}} ,expandAll:function (){var _co2=_cY(this._cy); var _cO6=_co2.getElementsByTagName("li"); for (var i=0; i<_cO6.length; i++){if (_cs("smLI",_cE(_cO6[i]))>0){if (_cs("smParent",_cE(_cI(_cO6[i])))>0){var _ci2=new SlideMenuParent(_cO6[i].id); if (!_ci2.isExpanded()){_ci2.expand(); }}}}} ,getItem:function (_cl7){var _cT=_cE(_cI(_cY(_cl7))); var _ci7=null; if (_cs("smParent",_cT)>0){_ci7=new SlideMenuParent(_cl7); }else if (_cs("smChild",_cT)>0){_ci7=new SlideMenuChild(_cl7); }else if (_cs("smPanel",_cT)>0){_ci7=new SlideMenuPanel(_cl7); }return _ci7; } ,getSelectedId:function (){return this._cO4().selectedId; } ,registerEvent:function (_cK,_cI7){if (!_cr())this._cI5[_cK]=_cI7; else return true; } ,_cI1:function (_cK,_co8){if (_cr())return true; return (_cO(this._cI5[_cK]))?this._cI5[_cK](this,_co8): true; }};function _cl6(_cl3){if (_cs("smChild",_cE(this ))>0){var _ci7=new SlideMenuChild(_ca(this ).id); }else {var _ci7=new SlideMenuParent(_ca(this ).id); }_ci7._cO3(_cl3); }function _ci6(_cl3){if (_cs("smChild",_cE(this ))>0){var _ci7=new SlideMenuChild(_ca(this ).id); }else {var _ci7=new SlideMenuParent(_ca(this ).id); }_ci7._ci3(_cl3); }function _cI6(_cl3){if (_cs("smChild",_cE(this ))>0){var _ci7=new SlideMenuChild(_ca(this ).id); }else {var _ci7=new SlideMenuParent(_ca(this ).id); }_ci7._cI3(_cl3); }if (typeof(__KSMInits)!="undefined" && _cO(__KSMInits)){for (var i=0; i<__KSMInits.length; i++){__KSMInits[i](); }} <?php _cO7();
    _clq();
} if (!class_exists("KoolSlideMenu", FALSE)) {

    function _clr($_cls, $_cOs) {
        $_clt = "";
        foreach ($_cls->childNodes as $_cOt) {
            $_clt.=$_cOs->savexml($_cOt);
        } return trim($_clt);
    }

    class slidemenuparent {

        var $id;
        var $text;
        var $link;
        var $target;
        var $title;
        var $expand = FALSE;
        var $parent;
        var $_clu = array();
        var $_cOu = -1;

        function __construct($_clv) {
            $this->id = $_clv;
        }

        function addchild($_cOv) {
            array_push($this->_clu, $_cOv);
            $_cOv->parent = $this;
            if (strtolower(get_class($_cOv)) == "slidemenuparent") {
                $_cOv->_cOu = $this->_cOu + 1;
            }
        }

    }

    class slidemenuchild {

        var $id;
        var $text;
        var $link;
        var $target;
        var $parent;
        var $title;
        var $_clw = FALSE;

        function __construct($_clv) {
            $this->id = $_clv;
        }

    }

    class slidemenupanel {

        var $id;
        var $content;

        function __construct($_clv) {
            $this->id = $_clv;
        }

    }

    class koolslidemenu {

        var $_cl0 = "1.5.0.3";
        var $id;
        var $styleFolder;
        var $scriptFolder = "";
        var $singleExpand;
        var $boxHeight = -1;
        var $slidingSpeed = 5;
        var $scrollEnable = FALSE;
        var $width = "auto";
        var $selectedId;
        var $_cOw = TRUE;
        var $_cO5;
        var $_clx;
        var $_cOx;

        function __construct($_clv) {
            $this->id = $_clv;
            $this->_cO5 = new slidemenuparent("root");
            $this->_clx = array();
            $this->_clx["root"] = $this->_cO5;
        }

        function loadxml($_cly) {
            if (gettype($_cly) == "string") {
                $_cOy = new domdocument();
                $_cOy->loadxml($_cly);
                $_cly = $_cOy->documentElement;
            } $_clv = $_cly->getattribute("id");
            if ($_clv != "") $this->id = $_clv; $_clz = $_cly->getattribute("styleFolder");
            if ($_clz != "") $this->styleFolder = $_clz; $_cOz = $_cly->getattribute("scriptFolder");
            if ($_cOz != "") $this->scriptFolder = $_cOz; $_cl10 = strtolower($_cly->getattribute("singleExpand"));
            if ($_cl10 != "") $this->singleExpand = ($_cl10 == "true") ? TRUE : FALSE; $_cO10 = $_cly->getattribute("boxHeight");
            if ($_cO10 != "") $this->boxHeight = intval($_cO10); $_cl11 = $_cly->getattribute("slidingSpeed");
            if ($_cl11 != "") $this->slidingSpeed = intval($_cl11); $_cO11 = strtolower($_cly->getattribute("scrollEnable"));
            if ($_cO11 != "") $this->scrollEnable = ($_cO11 == "true") ? TRUE : FALSE; $_cl12 = $_cly->getattribute("width");
            if ($_cl12 != "") $this->width = $_cl12; $_cO12 = $_cly->getattribute("selectedId");
            if ($_cO12 != "") $this->selectedId = $_cO12; $this->_cl13($this->_cO5, $_cly, $_cly->parentNode);
        }

        function _cl13($_cO13, $_cl14, $_cOy) {
            foreach ($_cl14->childNodes as $_cO14) {
                switch (strtolower($_cO14->nodeName)) {
                    case "parent": $_clv = $_cO14->getattribute("id");
                        $_cl3 = $_cO14->getattribute("text");
                        $_cl15 = $_cO14->getattribute("link");
                        $_cO15 = $_cO14->getattribute("target");
                        $_cl16 = $_cO14->getattribute("title");
                        $_cO16 = (strtolower($_cO14->getattribute("expand")) == "true") ? TRUE : FALSE;
                        $_cl17 = $this->addparent($_cO13->id, $_clv, $_cl3, $_cl15, $_cO16);
                        $_cl17->target = $_cO15;
                        $_cl17->title = $_cl16;
                        $this->_cl13($_cl17, $_cO14, $_cOy);
                        break;
                    case "child": $_clv = $_cO14->getattribute("id");
                        $_cl3 = $_cO14->getattribute("text");
                        $_cl15 = $_cO14->getattribute("link");
                        $_cO15 = $_cO14->getattribute("target");
                        $_cl16 = $_cO14->getattribute("title");
                        $_cO17 = $this->addchild($_cO13->id, $_clv, $_cl3, $_cl15);
                        $_cO17->target = $_cO15;
                        $_cO17->title = $_cl16;
                        break;
                    case "panel": $_clv = $_cO14->getattribute("id");
                        $_cl18 = _clr($_cO14, $_cOy);
                        $this->addpanel($_cO13->id, $_clv, $_cl18);
                        break;
                }
            }
        }

        function addparent($_cO18, $_clv, $_cl3 = "", $_cl15 = "", $_cO16 = FALSE) {
            $_cl19 = new slidemenuparent($_clv);
            $_cl19->text = $_cl3;
            $_cl19->expand = $_cO16;
            $_cl19->link = ($_cl15 == NULL || $_cl15 == "") ? "javascript:void 0" : $_cl15;
            $this->_clx[$_cO18]->addchild($_cl19);
            $this->_clx[$_clv] = $_cl19;
            return $_cl19;
        }

        function addchild($_cO18, $_clv, $_cl3 = "", $_cl15 = "") {
            $_cl19 = new slidemenuchild($_clv);
            $_cl19->text = $_cl3;
            $_cl19->link = ($_cl15 == NULL || $_cl15 == "") ? "javascript:void 0" : $_cl15;
            $this->_clx[$_cO18]->addchild($_cl19);
            $this->_clx[$_clv] = $_cl19;
            return $_cl19;
        }

        function addpanel($_cO18, $_clv, $_cl18) {
            $_cl19 = new slidemenupanel($_clv);
            $_cl19->content = $_cl18;
            $this->_clx[$_cO18]->addchild($_cl19);
            $this->_clx[$_clv] = $_cl19;
            return $_cl19;
        }

        function getitem($_clv) {
            return $this->_clx[$_clv];
        }

        function _cO19() {
            $this->styleFolder = _cO4("\134", "/", $this->styleFolder);
            $_clz = trim($this->styleFolder, "/");
            $_cl1a = strrpos($_clz, "/");
            $this->_cOx = substr($_clz, ($_cl1a ? $_cl1a : -1) + 1);
        }

        function registercss() {
            $this->_cO19();
            $_cO1a = "<script type='text/javascript'>if (document.getElementById(\047__{style}KSM')==null){var _head = document.getElementsByTagName(\047head\047)[0];var _link = document.createElement('link\047); _link.id = \047__{style}KSM';_link.rel='stylesheet\047; _link.href='{stylepath}/{style}/{style}.css';_head.appendChild(_link);}</script>";
            $_cl1b = _cO4("{style}", $this->_cOx, $_cO1a);
            $_cl1b = _cO4("{stylepath}", $this->_cO1b(), $_cl1b);
            return $_cl1b;
        }

        function render() {
            $_cl1b = "\n<!--KoolSlideMenu version " . $this->_cl0 . " - www.koolphp.net -->\n";
            $_cl1b.=$this->registercss();
            $_cl1b.=$this->renderslidemenu();
            $_cl1c = isset($_POST["__koolajax"]) || isset($_GET["__koolajax"]);
            $_cl1b.=($_cl1c) ? "" : $this->registerscript();
            $_cl1b.="<script type='text/javascript'>";
            $_cl1b.=$this->startupscript();
            $_cl1b.="</script>";
            return $_cl1b;
        }

        function renderslidemenu() {
            $tpl_bound = "{boundcontent}";
            $tpl_parent = "<div class='ksmIn'>{parentcontent}</div>";
            $tpl_childbox = "{childboxcontent}";
            $tpl_child = "<span class=\047ksmIn'>{childcontent}</span>";
            $tpl_panel = "<div class='ksmIn'>{panelcontent}</div>";
            $this->_cO19();
            include "styles" . "/" . $this->_cOx . "/" . $this->_cOx . ".tpl";
            $_cO1c = "<ul class=\047ksmUL {boxHeight}'>{parents}</ul>";
            $_cl1d = "<style rel='stylesheet'> .{style}KSM .ksmBoxHeight .ksmChildBox {height:{boxHeight}px;overflow:{overflow};} </style>";
            $_cOi = _cO4("{tpl_bound}", $tpl_bound, _cOf());
            $_cOi = _cO4("{id}", $this->id, $_cOi);
            $_cOi = _cO4("{width}", $this->width, $_cOi);
            $_cOi = _cO4("{style}", $this->_cOx, $_cOi);
            $_cl19 = $this->_cO5;
            $_cO1d = "";
            for ($_cOb = 0; $_cOb < sizeof($_cl19->_clu); $_cOb++) {
                $_cO1d.=$this->_cl1e($_cl19->_clu[$_cOb]);
            } $_cO1e = _cO4("{parents}", $_cO1d, $_cO1c);
            if ($this->boxHeight < 0) {
                $_cO10 = "";
                $_cO1e = _cO4("{boxHeight}", "", $_cO1e);
            } else {
                $_cO10 = _cO4("{style}", $this->_cOx, $_cl1d);
                $_cO10 = _cO4("{boxHeight}", $this->boxHeight, $_cO10);
                $_cO10 = _cO4("{overflow}", ($this->scrollEnable) ? "auto" : "hidden", $_cO10);
                $_cO1e = _cO4("{boxHeight}", "ksmBoxHeight", $_cO1e);
            } if (_cOh($_cOi)) {
                $_cOi = _cO4("{boundcontent}", $_cO1e, $_cOi);
            } $_cOi = _cO4("{version}", $this->_cl0, $_cOi);
            $_cOi = _cO4("{boxHeight}", $_cO10, $_cOi);
            return $_cOi;
        }

        function _cl1e($_cl19) {
            $tpl_bound = "{boundcontent}";
            $tpl_parent = "<div class=\047ksmIn'>{parentcontent}</div>";
            $tpl_childbox = "{childboxcontent}";
            $tpl_child = "<span class=\047ksmIn'>{childcontent}</span>";
            $tpl_panel = "<div class='ksmIn\047>{panelcontent}</div>";
            include "styles" . "/" . $this->_cOx . "/" . $this->_cOx . ".tpl";
            $_cl1b = "";
            $_cl1f = "";
            if ($_cl19 === $_cl19->parent->_clu[0]) {
                $_cl1f = "ksmFirst";
            } else if ($_cl19 === $_cl19->parent->_clu[sizeof($_cl19->parent->_clu) - 1]) {
                $_cl1f = "ksmLast";
            } switch (strtolower(get_class($_cl19))) {
                case "slidemenuparent": $_cO1f = "<li id=\047{id}' class='ksmLI ksmLevel{level} {collapse} {pos}\047>{parentcontent}{childbox}</li>";
                    $_cl1g = "<a class='ksmA ksmParent' href='{link}\047 {target} {title} >{tpl_parent}</a>";
                    $_cO1g = "<div class='ksmChildBox\047>{tpl_childbox}</div>";
                    $_cl1h = "<ul class='ksmUL'>{children}</ul>";
                    $_cO1h = _cO4("{tpl_parent}", $tpl_parent, $_cl1g);
                    $_cO1h = _cO4("{parentcontent}", $_cl19->text, $_cO1h);
                    $_cO1h = _cO4("{link}", $_cl19->link, $_cO1h);
                    $_cO1h = _cO4("{target}", ($_cl19->target != NULL) ? "target='" . $_cl19->target . "\047" : "", $_cO1h);
                    $_cO1h = _cO4("{title}", ($_cl19->title != NULL) ? "title='" . $_cl19->title . "'" : "", $_cO1h);
                    $_clu = "";
                    for ($_cOb = 0; $_cOb < sizeof($_cl19->_clu); $_cOb++) {
                        $_clu.=$this->_cl1e($_cl19->_clu[$_cOb]);
                    } $_cl1i = "";
                    if ($_clu != "") {
                        $_cO1i = _cO4("{children}", $_clu, $_cl1h);
                        $_cl1i = _cO4("{tpl_childbox}", $tpl_childbox, $_cO1g);
                        $_cl1i = _cO4("{childboxcontent}", $_cO1i, $_cl1i);
                    } $_cl1b = _cO4("{parentcontent}", $_cO1h, $_cO1f);
                    $_cl1b = _cO4("{childbox}", $_cl1i, $_cl1b);
                    $_cl1b = _cO4("{id}", $_cl19->id, $_cl1b);
                    $_cl1b = _cO4("{level}", $_cl19->_cOu, $_cl1b);
                    $_cl1b = _cO4("{pos}", $_cl1f, $_cl1b);
                    $_cl1b = _cO4("{collapse}", ($_cl19->expand) ? "" : "ksmCollapse", $_cl1b);
                    break;
                case "slidemenuchild": $_cl1j = "<li id=\047{id}\047 class='ksmLI {pos}'><a class='ksmA ksmChild {selected}\047 href='{link}' {target} {title} >{tpl_child}</a></li>";
                    $_cl1b = _cO4("{tpl_child}", $tpl_child, $_cl1j);
                    $_cl1b = _cO4("{childcontent}", $_cl19->text, $_cl1b);
                    $_cl1b = _cO4("{link}", $_cl19->link, $_cl1b);
                    $_cl1b = _cO4("{target}", ($_cl19->target != NULL) ? "target=\047" . $_cl19->target . "'" : "", $_cl1b);
                    $_cl1b = _cO4("{title}", ($_cl19->title != NULL) ? "title='" . $_cl19->title . "\047" : "", $_cl1b);
                    $_cl1b = _cO4("{id}", $_cl19->id, $_cl1b);
                    $_cl1b = _cO4("{pos}", $_cl1f, $_cl1b);
                    $_cl1b = _cO4("{selected}", ($this->selectedId == $_cl19->id) ? "ksmSelected" : "", $_cl1b);
                    break;
                case "slidemenupanel": $_cO1j = "<li id=\047{id}\047 class=\047ksmLI ksmPanel {pos}\047>{tpl_panel}</li>";
                    $_cl1b = _cO4("{tpl_panel}", $tpl_panel, $_cO1j);
                    $_cl1b = _cO4("{panelcontent}", $_cl19->content, $_cl1b);
                    $_cl1b = _cO4("{id}", $_cl19->id, $_cl1b);
                    $_cl1b = _cO4("{pos}", $_cl1f, $_cl1b);
                    break;
            } return $_cl1b;
        }

        function registerscript() {
            $_cO1a = "<script type='text/javascript'>if(typeof _libKSM=='undefined\047){document.write(unescape(\042%3Cscript type='text/javascript\047 src=\047{src}\047%3E %3C/script%3E\042));_libKSM=1;}</script>";
            $_cl1b = _cO4("{src}", $this->_cl1k() . "?" . md5("js"), $_cO1a);
            return $_cl1b;
        }

        function startupscript() {
            $_cO1a = "var {id}; function {id}_init(){ {id} = new KoolSlideMenu(\047{id}',{selectEnable},{slidingSpeed},{singleExpand},{boxHeight},\042{clientState}\042);}";
            $_cO1a.="if (typeof(KoolSlideMenu)==\047function\047){{id}_init();}";
            $_cO1a.="else{if(typeof(__KSMInits)=='undefined\047){__KSMInits=new Array();} __KSMInits.push({id}_init);{register_script}}";
            $_cO1k = "if(typeof(_libKSM)==\047undefined'){var _head = document.getElementsByTagName(\047head\047)[0];var _script = document.createElement(\047script\047); _script.type='text/javascript'; _script.src='{src}'; _head.appendChild(_script);_libKSM=1;}";
            $_cl1l = _cO4("{src}", $this->_cl1k() . "?" . md5("js"), $_cO1k);
            $_cO1l = "{'selectedId':'{selectedId}'}";
            $_cl1b = _cO4("{id}", $this->id, $_cO1a);
            $_cl1b = _cO4("{singleExpand}", ($this->singleExpand) ? "1" : "0", $_cl1b);
            $_cl1b = _cO4("{selectEnable}", ($this->_cOw) ? "1" : "0", $_cl1b);
            $_cl1b = _cO4("{slidingSpeed}", $this->slidingSpeed, $_cl1b);
            $_cl1b = _cO4("{boxHeight}", $this->boxHeight, $_cl1b);
            $_cl1m = _cO4("{selectedId}", $this->selectedId, $_cO1l);
            $_cl1b = _cO4("{clientState}", $_cl1m, $_cl1b);
            $_cl1b = _cO4("{register_script}", $_cl1l, $_cl1b);
            return $_cl1b;
        }

        function _cl1k() {
            if ($this->scriptFolder == "") {
                $_cO5 = _cO3();
                $_cO1m = substr(_cO4("\134", "/", __FILE__), strlen($_cO5));
                return $_cO1m;
            } else {
                $_cO1m = _cO4("\134", "/", __FILE__);
                $_cO1m = $this->scriptFolder . substr($_cO1m, strrpos($_cO1m, "/"));
                return $_cO1m;
            }
        }

        function _cO1b() {
            $_cl1n = $this->_cl1k();
            $_cO1n = _cO4(strrchr($_cl1n, "/"), "", $_cl1n) . "/styles";
            return $_cO1n;
        }

    }

} ?>
