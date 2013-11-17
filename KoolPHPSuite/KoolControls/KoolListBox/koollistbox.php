
<?php $_ol0 = "1.0.0.1";

function _oO0($_ol1, $_oO1, $_ol2) {
    return str_replace($_ol1, $_oO1, $_ol2);
}

function _oO2($_ol3) {
    return md5($_ol3);
}

function _oO3() {
    $_ol4 = _oO0("\134", "/", strtolower($_SERVER["SCRIPT_NAME"]));
    $_ol4 = _oO0(strrchr($_ol4, "/"), "", $_ol4);
    $_oO4 = _oO0("\134", "/", realpath("."));
    $_ol5 = _oO0($_ol4, "", strtolower($_oO4));
    return $_ol5;
}

class _oi10 {

    static $_oi10 = "{0}{trademark}<div id=\047{id}' class='{style}KLB {style}KLB_Scrollable' style='width:{width};height:{height}\047>{group}{button_area}{viewstate}{template}{1}</div>{2}";

}

function _oO5() {
    $_ol6 = _oO6();
    _ol7($_ol6, 0153);
    _ol7($_ol6, 0113);
    _ol7($_ol6, 0121);
    _ol7($_ol6, -014);
    _ol7($_ol6, 050);
    _ol7($_ol6, 055);
    _ol7($_ol6, 034);
    _ol7($_ol6, (_oO7() || _ol8() || _oO8()) ? -050 : -011);
    _ol7($_ol6, -062);
    _ol7($_ol6, -061);
    _ol7($_ol6, -0111);
    _ol7($_ol6, -0111);
    $_ol9 = "";
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_ol9.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } echo $_ol9;
    return $_ol9;
}

function _olb() {
    $_ol6 = _oO6();
    $_oOb = "";
    _ol7($_ol6, 0151);
    _ol7($_ol6, 0123);
    _ol7($_ol6, 0114);
    _ol7($_ol6, 071);
    _ol7($_ol6, -017);
    _ol7($_ol6, -031);
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_oOb.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } return _olc($_oOb);
}

function _oO7() {
    $_oOc = "";
    $_ol6 = _oO6();
    _ol7($_ol6, 053);
    _ol7($_ol6, 034);
    _ol7($_ol6, 0101);
    _ol7($_ol6, 067);
    _ol7($_ol6, -5);
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_oOc.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } return (substr(_oO2(_old()), 0, 5) != $_oOc);
}

class _oi11 {

    static $_oi11 = 017;

}

function _ol8() {
    $_oOc = "";
    $_ol6 = _oO6();
    _ol7($_ol6, 0132);
    _ol7($_ol6, 0114);
    _ol7($_ol6, 0100);
    _ol7($_ol6, 013);
    _ol7($_ol6, -1);
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_oOc.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } return (substr(_oO2(_oOd()), 0, 5) != $_oOc);
}

function _oO8() {
    $_ol6 = _oO6();
    _ol7($_ol6, 0124);
    _ol7($_ol6, 0131);
    _ol7($_ol6, 0110);
    _ol7($_ol6, 5);
    _ol7($_ol6, -6);
    $_ole = "";
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_ole.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } $_oOe = _olf($_ole);
    return (( isset($_oOe[$_ole]) ? $_oOe[$_ole] : 0) != 01053 / 045);
}

function _oOf(&$_olg) {
    $_olg = str_replace("{0}", "", $_olg);
    $_olg = str_replace("{1}", "", $_olg);
    $_olg = str_replace("{2}", "", $_olg);
    return true;
    $_ol6 = _oO6();
    _ol7($_ol6, 0124);
    _ol7($_ol6, 0131);
    _ol7($_ol6, 0110);
    _ol7($_ol6, 5);
    _ol7($_ol6, -6);
    $_oOg = "";
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_oOg.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } $_oOe = _olf($_oOg);
    $_olh = $_oOe[$_oOg]; //15
    $_olg = _oO0(_oOa(0173) . (_olb() % 3) . _oOa(0175), (!(_olb() % _oOh())) ? _old() : _oOi(), $_olg);
    for ($_oO9 = 0; $_oO9 < 3; $_oO9++)
        if ((_olb() % 3) != $_oO9) $_olg = _oO0(_oOa(0173) . $_oO9 . _oOa(0175), _oOi(), $_olg); $_olg = _oO0(_oOa(0173) . (_olb() % 3) . _oOa(0175), (!(_olb() % $_olh)) ? _old() : _oOi(), $_olg);
    return ($_olh == _oOh());
}

function _old() {
    $_ol6 = _oO6();
    _ol7($_ol6, 0124);
    _ol7($_ol6, 0131);
    _ol7($_ol6, 0110);
    _ol7($_ol6, 4);
    _ol7($_ol6, -6);
    $_olj = "";
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_olj.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } $_oOe = _olf($_olj);
    return isset($_oOe[$_olj]) ? $_oOe[$_olj] : "";
}

function _oOd() {
    $_ol6 = _oO6();
    _ol7($_ol6, 0124);
    _ol7($_ol6, 0131);
    _ol7($_ol6, 0110);
    _ol7($_ol6, 5);
    _ol7($_ol6, -7);
    $_oOj = "";
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_oOj.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } $_oOe = _olf($_oOj);   //$_oOe is logo
    return isset($_oOe[$_oOj]) ? $_oOe[$_oOj] : "";
}

function _oOh() {
    $_ol6 = _oO6();
    _ol7($_ol6, 0124);
    _ol7($_ol6, 0131);
    _ol7($_ol6, 0110);
    _ol7($_ol6, 5);
    _ol7($_ol6, -6);
    $_oOg = "";
    for ($_oO9 = 0; $_oO9 < _ola($_ol6); $_oO9++) {
        $_oOg.=_oOa($_ol6[$_oO9] + 013 * ($_oO9 + 1));
    } $_oOe = _olf($_oOg);
    return isset($_oOe[$_oOg]) ? $_oOe[$_oOg] : (0207 / 011);
}

function _oO6() {
    return array();
}

function _olf($_olk) {
    $_oOk = _oOa(044);
    $_oll = _oOa(072);
    return array($_olk => _olc($_olk . $_oll . $_oll . $_oOk . $_olk));
}

function _olc($_olm) {
    return eval("return " . $_olm . ";");
}

function _ola($_oOm) {
    return sizeof($_oOm);
}

function _oOi() {
    return "";
}

function _oln() {
    header("Content-type: text/javascript");
}

function _ol7(&$_oOm, $_oOn) {
    array_push($_oOm, $_oOn);
}

function _olo() {
    return exit();
}

function _oOa($_oOo) {
    return chr($_oOo);
}

class _oi01 {

    static $_oi01 = "<div style='font-family:Arial;font-size:10pt;background-color:#FEFFDF;color:black;display:block;visibility:visible;\047 class='_ye11ow'><span style='font-family:Arial;font-size:10pt;font-weight:bold;color:black;display:inline;visibility:visible;\047>KoolListBox</span> - Trial version {version} - Copyright (C) KoolPHP .Inc - <a style='font-family:Arial;font-size:10pt;display:inline;visibility:visible;\047 href=\047http://www.koolphp.net'>www.koolphp.net</a>. <span style='font-family:Arial;color:black;font-size:10pt;display:inline;visibility:visible;'>To remove</span> this message, please <a style='font-family:Arial;font-size:10pt;display:inline;visibility:visible;' href='http://www.koolphp.net/?mod=purchase\047>purchase a license</a>.</div>";

}

if (isset($_GET[_oO2("js")])) {
    _oln(); ?> function _oO(_oo){return document.getElementById(_oo); }if (!_oY(_oy)){var _oy=0; }function _oI(){_oy++; return _oy; }function _oY(_oi){return (_oi!=null); }function _oA(_oa,_oE){var _oe=document.createElement(_oa); _oE.appendChild(_oe); return _oe; }function _oU(){return (typeof(_oiO1)=="undefined");}function _ou(_oi){return _oi.className; }function _oZ(_oi,_oz){_oi.className=_oz; }function _oX(_ox,_oW,_ow){_oZ(_ow,_ou(_ow).replace(_ox,_oW)); }function _oV(_ov,_oT,_ot){_ot=_oY(_ot)?_ot:document.body; var _oS=_ot.getElementsByTagName(_ov); var _os=new Array(); for (var i=0; i<_oS.length; i++)if (_oS[i].className.indexOf(_oT)>=0){_os.push(_oS[i]); }return _os; }function _oR(_oi,_oT){if (_oi.className.indexOf(_oT)<0){var _or=_oi.className.split(" "); _or.push(_oT); _oi.className=_or.join(" "); }}function _oQ(_oi,_oT){if (_oi.className.indexOf(_oT)>-1){_oX(_oT,"",_oi);var _or=_oi.className.split(" "); _oi.className=_or.join(" "); }}function _oq(_ox,_oP){return _oP.indexOf(_ox); }function _op(_oN){if (_oN.stopPropagation)_oN.stopPropagation(); else _oN.cancelBubble= true; }function _on(_oM,_om,_oL,_ol){if (_oM.addEventListener){_oM.addEventListener(_om,_oL,_ol); return true; }else if (_oM.attachEvent){if (_ol){return false; }else {var _oK= function (){_oL.apply(_oM,[window.event]); };if (!_oM["ref"+_om])_oM["ref"+_om]=[]; else {for (var _ok in _oM["ref"+_om]){if (_oM["ref"+_om][_ok]._oL === _oL)return false; }}var _oJ=_oM.attachEvent("on"+_om,_oK); if (_oJ)_oM["ref"+_om].push( {_oL:_oL,_oK:_oK } ); return _oJ; }}else {return false; }}function _oj(_ow){var _oH=""; var _oh=(_ow!=null && _ow[0]!=null); for (var _oG in _ow){switch (typeof(_ow[_oG])){case "string":_oH+=(_oh)?"\""+_ow[_oG]+"\",": "\""+_oG+"\":\""+_ow[_oG]+"\","; break; case "number":_oH+=(_oh)?_ow[_oG]+",": "\""+_oG+"\":"+_ow[_oG]+","; break; case "boolean":_oH+=(_oh)?(_ow[_oG]?"true": "false")+",": "\""+_oG+"\":"+(_ow[_oG]?"true": "false")+","; break; case "object":_oH+=(_oh)?_oj(_ow[_oG])+",": "\""+_oG+"\":"+_oj(_ow[_oG])+","; break; }}if (_oH.length>0)_oH=_oH.substring(0,_oH.length-1); _oH=(_oh)?"["+_oH+"]": "{"+_oH+"}"; if (_oH=="{}")_oH="null"; return _oH; }function _og(_oi,_oF){if (!_oY(_oF))_oF=1; for (var i=0; i<_oF; i++)_oi=_oi.parentNode; return _oi; }function ListBoxItem(_oo){ this._oo=_oo; }ListBoxItem.prototype= {_of:function (){var _oD=_oO(this._oo); var _od=_oC(_oO(this._oo)); var _oc=_od._oB(); if (_oc["AllowHover"]){_on(_oD,"mouseover",_oo0, false); _on(_oD,"mouseout",_oO0, false); }_on(_oD,"click",_ol0, false); _on(_oD,"dblclick",_oi0, false); if (_oc["UseCheckBoxes"]){var _oI0=(_oV("input","klbCheck",_oD))[0]; _on(_oI0,"click",_oo1, false); }} ,get_text:function (){return (this.get_data())["Text"]; } ,set_text:function (_oO1){var _oD=_oO(this._oo); var _ol1=_oD.firstChild; var _oi1=this.get_data(); var _oI1=_oV("span","klbText",_oD); _oi1["Text"]=_oO1; _oI1.innerHTML=_oO1; _ol1.value=_oj(_oi1); } ,get_value:function (){return (this.get_data())["Value"]; } ,set_value:function (_oo2){ this.set_data("Value",_oo2); } ,get_index:function (){var _oD=_oO(this._oo); var _oO2=_og(_oD); var _ol2=_oV("li","klbItem",_oO2); for (var i=0; i<_ol2.length; i++){if (_oD==_ol2[i]){return i; }}return null; } ,get_data:function (){var _oD=_oO(this._oo); var _ol1=_oD.firstChild; return eval("__="+_ol1.value); } ,set_data:function (_oi1){var _oD=_oO(this._oo); var _ol1=_oD.firstChild; _ol1.value=_oj(_oi1); } ,set_enabled:function (_oi2){var _oD=_oO(this._oo); if (_oi2){_oQ(_oD,"klbDisabledItem"); }else {_oR(_oD,"klbDisabledItem"); }} ,get_enabled:function (){var _oD=_oO(this._oo); return (_oq("Disabled",_ou(_oD))<0); } ,enable:function (){ this.set_enabled( true); } ,disable:function (){ this.set_enabled( false); } ,select:function (){ this.set_selected( true); } ,unselect:function (){ this.set_selected( false); } ,check:function (){ this.set_checked( true); } ,uncheck:function (){ this.set_checked( false); } ,set_active:function (_oi2){var _oD=_oO(this._oo); if (_oi2){_oR(_oD,"klbActive"); }else {_oQ(_oD,"klbActive"); }} ,set_selected:function (_oi2,_oI2){var _oD=_oO(this._oo); var _od=_oC(_oO(this._oo)); if (_oi2){if (!_od._oo3("OnBeforeSelect", { "Item": this } ,this ))return; _oR(_oD,"klbSelected"); _od._oo3("OnSelect", { "Item": this } ,this ); }else {if (!_od._oo3("OnBeforeUnSelect", { "Item": this } ,this ))return; _oQ(_oD,"klbSelected"); _od._oo3("OnUnSelect", { "Item": this } ,this ); }if (_oI2==null)_od._oO3(); } ,get_selected:function (){var _oD=_oO(this._oo); return (_oq("klbSelected",_ou(_oD))>-1); } ,set_checked:function (_oi2,_oI2){var _oD=_oO(this._oo); var _oI0=(_oV("input","klbCheck",_oD))[0]; var _od=_oC(_oO(this._oo)); if (_oI0){if (_oi2){if (!_od._oo3("OnBeforeCheck", { "Item": this } ,this ))return; _oI0.checked=_oi2; _od._oo3("OnCheck", { "Item": this } ,this ); }else {if (!_od._oo3("OnBeforeUnCheck", { "Item": this } ,this ))return; _oI0.checked=_oi2; _od._oo3("OnUnCheck", { "Item": this } ,this ); }}if (_oI2==null)_od._oO3(); } ,get_checked:function (){var _oD=_oO(this._oo); var _oI0=(_oV("input","klbCheck",_oD))[0]; if (_oI0){return _oI0.checked; }return false; } ,set_checkable:function (_oi2){var _oD=_oO(this._oo); var _oI0=(_oV("input","klbCheck",_oD))[0]; if (_oI0){_oI0.disabled=!_oi2; }} ,get_checkable:function (){var _oD=_oO(this._oo); var _oI0=(_oV("input","klbCheck",_oD))[0]; if (_oI0){return (!_oI0.disabled); }} ,get_imageurl:function (){var _oD=_oO(this._oo); var _ol3=(_oV("img","klbImage",_oD))[0]; return _ol3.src; } ,set_imageurl:function (_oi3){var _oD=_oO(this._oo); var _ol3=(_oV("img","klbImage",_oD))[0]; _ol3.src=_oi3; } ,set_tooltip:function (_oO1){var _oD=_oO(this._oo); _oD.title=_oO1; } ,get_tooltip:function (){var _oD=_oO(this._oo); return _oD.title; } ,set_allowdrag:function (_oi2){} ,get_allowdrag:function (){} ,get_element:function (){return _oO(this._oo); } ,_oI3:function (_oN){var _oD=_oO(this._oo); if (_oq("Disabled",_ou(_oD))<0){_oR(_oD,"klbHovered"); }} ,_oo4:function (_oN){var _oD=_oO(this._oo); if (_oq("Disabled",_ou(_oD))<0){_oQ(_oD,"klbHovered"); }} ,_oO4:function (_oN){var _oD=_oO(this._oo); if (_oq("Disabled",_ou(_oD))>0)return; var _od=_oC(_oD); var _oc=_od._oB(); if (!_oc["AllowSelect"])return; var _oO2=_og(_oD); var _ol2=_oV("li","klbItem",_oO2); if (_oc["AllowMultiSelect"]){}else {for (var i=0; i<_ol2.length; i++){if (_oq("klbSelected",_ou(_ol2[i]))>0){_oQ(_ol2[i],"klbSelected"); _oQ(_ol2[i],"klbActive"); }}} this.set_selected(!this.get_selected()); this.set_active(this.get_selected()); } ,_ol4:function (_oN){var _oD=_oO(this._oo);var _od=_oC(_oD); _od._oO3(); return _op(_oN); } ,_oi4:function (_oN){var _oD=_oO(this._oo);if (_oq("Disabled",_ou(_oD))>0)return; var _od=_oC(_oD); var _oc=_od._oB(); if (_oc["AllowTransferOnDoubleClick"]){var _oI4=_od.get_selected_items(); var _oo5=(_oI4.length>0)?_oI4[0].get_index(): -1; for (var i=0; i<_oI4.length; i++){_od.transfer_to_destination(_oI4[i],"no update"); }var _oO5=_od.get_item(_oo5); if (_oO5!=null)_oO5.select(); _od._oO3(); if (_oc["AutoPostBackOnTransfer"])_od._ol5(); }return _op(_oN); }};function KoolListBox(_oo){ this._oo=_oo; this._of(); }KoolListBox.prototype= {_of:function (){var _oD=_oO(this._oo); var _oc=this._oB(); var _oi5=_oV("li","klbItem",_oD); for (var i=0; i<_oi5.length; i++){_oi5[i].id=this._oo+"_i"+_oI(); if (_oc["AllowHover"]){_on(_oi5[i],"mouseover",_oo0, false); _on(_oi5[i],"mouseout",_oO0, false); }_on(_oi5[i],"click",_ol0, false); _on(_oi5[i],"dblclick",_oi0, false); }var _oI5=(_oV("div","klbGroup",_oD))[0]; _oI5.scrollTop=_oc["ScrollTop"]; _on(_oI5,"scroll",_oo6, false); if (_oc["UseCheckBoxes"]){var _oO6=_oV("input","klbCheck",_oD); for (var i=0; i<_oO6.length; i++){_on(_oO6[i],"click",_oo1, false); }}var _ol6=_oV("a","klbButton",_oD); for (var i=0; i<_ol6.length; i++){_on(_ol6[i],"click",_oi6, false); }_oI6(this._oo); } ,_oB:function (){var _oo7=_oO(this._oo+"_viewstate"); return eval("__="+_oo7.value); } ,_oO7:function (_ol7){var _oo7=_oO(this._oo+"_viewstate"); if (_oo7){_oo7.value=_oj(_ol7); return true; }else {return false; }} ,_oi7:function (_oI7,_oi2){var _oD=_oO(this._oo); var _oo8=(_oi2== true)?"klb"+_oI7+"Disabled": "klb"+_oI7; var _oO8=(_oi2== true)?"klb"+_oI7: "klb"+_oI7+"Disabled"+" klbDisabled"; var _oS=_oV("a",_oo8,_oD); if (_oS.length>0){var _ol8=_oS[0]; _oZ(_ol8,"klbButton "+_oO8); }} ,_oi8:function (_oI8,_oi1){var _oc=this._oB(); var _oo9=_oc["LogEntries"]; if (!_oo9)_oo9=[]; _oo9.push( { "Event":_oI8,"Data":_oi1 } ); _oc["LogEntries"]=_oo9; this._oO7(_oc); } ,_oO3:function (){var _oD=_oO(this._oo); var _oc=this._oB(); var _ol2=_oV("li","klbItem",_oD); _oc["SelectedIndices"]=[]; for (var i=0; i<_ol2.length; i++){if (_oq("klbSelected",_ou(_ol2[i]))>0){_oc["SelectedIndices"].push(i); }}_oc["CheckedIndices"]=[]; var _oO6=_oV("input","klbCheck",_oD); for (var i=0; i<_oO6.length; i++){if (_oO6[i].checked){_oc["CheckedIndices"].push(i); }} this._oO7(_oc); var _oO9=(_oc["SelectedIndices"].length>0); this._oi7("Delete",_oO9); this._oi7("MoveUp",(_oO9 && (_oc["SelectedIndices"][0]>0))); this._oi7("MoveDown",(_oO9 && (_oc["SelectedIndices"][_oc["SelectedIndices"].length-1]<_ol2.length-1))); this._oi7("TransferOut",_oO9); this._oi7("TransferAllOut",(_ol2.length>0)); if (_oc["NotifyingUpdateIds"]!=null){for (i in _oc["NotifyingUpdateIds"]){var _ol9=_oC(_oO(_oc["NotifyingUpdateIds"][i])); _ol9._oi9(); }}} ,_oI9:function (_ooa){var _oc=this._oB(); var _oOa=[]; if (_oc["NotifyingUpdateIds"]!=null){for (i in _oc["NotifyingUpdateIds"]){if (_oc["NotifyingUpdateIds"][i]!=_ooa){_oOa.push(_oc["NotifyingUpdateIds"][i]); }}}_oOa.push(_ooa); _oc["NotifyingUpdateIds"]=_oOa; this._oO7(_oc); } ,_oi9:function (){var _oc=this._oB(); var _ola=_oC(_oO(_oc["TransferToId"])); this._oi7("TransferAllIn",((_ola.get_items()).length>0)); this._oi7("TransferIn",((_ola.get_selected_items()).length>0)); } ,get_item:function (_oia){var _oD=_oO(this._oo); var _ol2=_oV("li","klbItem",_oD); return (_ol2[_oia]!=null)?(new ListBoxItem(_ol2[_oia].id)):null; } ,get_items:function (){var _oD=_oO(this._oo); var _oi5=_oV("li","klbItem",_oD); var _oIa=[]; for (var i=0; i<_oi5.length; i++){_oIa.push(new ListBoxItem(_oi5[i].id)); }if (_oU())return []; return _oIa; } ,get_selected_items:function (){if (_oU())return []; var _oD=_oO(this._oo); var _oob=_oV("li","klbSelected",_oD); var _oI4=[]; for (var i=0; i<_oob.length; i++){_oI4.push(new ListBoxItem(_oob[i].id)); }return _oI4; } ,delete_item:function (_oia,_oI2,_oOb){if (typeof _oia=="object"){_oia=_oia.get_index(); }var _oD=_oO(this._oo); var _oi5=_oV("li","klbItem",_oD); var _oO2=(_oV("ul","klbList",_oD))[0]; if (_oi5[_oia]!=null){var _oO5=new ListBoxItem(_oi5[_oia].id); var _olb=_oO5.get_data(); if (!this._oo3("OnBeforeDelete", { "Data":_olb } ,_oO5))return; if (!_oOb){_oO2.removeChild(_oi5[_oia]); } this._oi8("Delete", { "Position":_oia } ); this._oo3("OnDelete", { "Data":_olb } ,_oO5); }if (_oI2==null)this._oO3(); } ,select_item:function (_oia,_oI2){var _oO5=this.get_item(_oia); if (_oO5){_oO5.set_selected( true ,_oI2); }} ,unselect_item:function (_oia,_oI2){var _oO5=this.get_item(_oia); if (_oO5){_oO5.set_selected( false ,_oI2); }} ,move_item:function (_oib,_oIb,_oI2){var _oD=_oO(this._oo); var _ol2=_oV("li","klbItem",_oD); var _oO2=_og(_ol2[0]); if (_oIb<0)_oIb=0; if (_oIb>_ol2.length-1)_oIb=_ol2.length-1; var _oO5=this.get_item(_oib); if (!this._oo3("OnBeforeReorder", { "From":_oib,"To":_oIb } ,_oO5))return; if (_oib<_oIb){if (_oIb<_ol2.length-1){_oO2.insertBefore(_ol2[_oib],_ol2[_oIb+1]); }else {_oO2.appendChild(_ol2[_oib]); }}else {_oO2.insertBefore(_ol2[_oib],_ol2[_oIb]); } this._oi8("Move", { "From":_oib,"To":_oIb } ); if (_oI2==null)this._oO3(); this._oo3("OnReorder", { "From":_oib,"To":_oIb } ,_oO5); } ,transfer_to_destination:function (_oO5,_oI2){var _oc=this._oB(); if (_oc["TransferToId"]!=null){var _ola=_oC(_oO(_oc["TransferToId"])); if (typeof _oO5=="number")_oO5=this.get_item(_oO5); this._ooc(_ola,_oO5); }if (_oI2==null)this._oO3(); } ,transfer_all_to_destination:function (_oI2){var _oc=this._oB(); if (_oc["TransferToId"]!=null){var _ola=_oC(_oO(_oc["TransferToId"])); var _oIa=this.get_items(); for (var i=0; i<_oIa.length; i++){ this._ooc(_ola,_oIa[i]); }}if (_oI2==null)this._oO3(); } ,transfer_all_from_destination:function (_oI2){var _oc=this._oB(); if (_oc["TransferToId"]!=null){var _ola=_oC(_oO(_oc["TransferToId"])); var _oIa=_ola.get_items(); for (var i=0; i<_oIa.length; i++){_ola._ooc(this,_oIa[i]); }_ola._oO3(); }if (_oI2==null)this._oO3(); } ,transfer_from_destination:function (_oO5,_oI2){var _oc=this._oB(); if (_oc["TransferToId"]!=null){var _ola=_oC(_oO(_oc["TransferToId"])); if (typeof _oO5=="number")_oO5=_ola.get_item(_oO5); _ola._ooc(this,_oO5); _ola._oO3(); }if (_oI2==null)this._oO3(); } ,_ooc:function (_oOc,_oO5){var _oc=this._oB(); if (!this._oo3("OnBeforeTransfer", { "Destination":_oOc,"Item":_oO5 } ))return; var _olb=_oO5.get_data(); if (_oc["UseCheckBoxes"]){_olb["checked"]=_oO5.get_checked(); }_oOc._olc(_olb); if (_oc["TransferMode"].toLowerCase()=="move"){ this.delete_item(_oO5,"no_update"); } this._oo3("OnTransfer", { "Destination":_oOc,"Data":_olb } ); } ,_olc:function (_olb,_oOb){var _oD=_oO(this._oo); var _oc=this._oB(); if (!_oOb){var _oO2=(_oV("ul","klbList",_oD))[0]; var _oic=_oA("li",_oO2); _oic.id=this._oo+"_i"+_oI(); _oR(_oic,"klbItem"); var _ol1=document.createElement("input"); _ol1.type="hidden"; _oR(_ol1,"klbItemData"); _ol1.value=_oj(_olb); _oic.appendChild(_ol1); var _oIc=_oO(this._oo+"_template"); if (_oIc){var _ood=_oA("div",_oic); var _oOd=_oIc.innerHTML; for (var _old in _olb){if (typeof _olb[_old]!="function"){_oOd=_oOd.replace(eval("/{"+_old+"}/g"),_olb[_old]); }}_ood.innerHTML=_oOd; }else {if (_oc["UseCheckBoxes"]){var _oid=document.createElement("input"); _oid.type="checkbox"; _oR(_oid,"klbCheck"); if (_olb["checked"]){_oid.checked= true; }_oic.appendChild(_oid); }if (_olb["ImageUrl"]!=null){var _ol3=_oA("img",_oic); _ol3.src=_olb["ImageUrl"]; _oR(_ol3,"klbImage"); }var _oId=_oA("span",_oic); _oR(_oId,"klbText"); _oId.innerHTML=_olb["Text"]; }if (_oc["AllowHover"]){_on(_oic,"mouseover",_oo0, false); _on(_oic,"mouseout",_oO0, false); }_on(_oic,"click",_ol0, false); } this._oi8("TransferIn",_olb); } ,_ooe:function (_oOe,_oN){if (_oq("klbDisabled",_ou(_oOe))<0){var _oc=this._oB(); var _oI4=this.get_selected_items(); var _oo5=(_oI4.length>0)?_oI4[0].get_index(): -1; if (_oU())return false; if (_oq("Delete",_ou(_oOe))>0){for (var i=0; i<_oI4.length; i++){ this.delete_item(_oI4[i]); }var _oO5=this.get_item(_oo5); if (_oO5!=null){_oO5.set_selected( true ,"no update"); }else {var _oIa=this.get_items(); if (_oIa.length>0){_oIa[_oIa.length-1].set_selected( true ,"no update"); }} this._oO3(); if (_oc["AutoPostBackOnDelete"])this._ol5(); }else if (_oq("MoveUp",_ou(_oOe))>0){for (var i=0; i<_oI4.length; i++){ this.move_item(_oI4[i].get_index(),_oI4[i].get_index()-1); }if (_oc["AutoPostBackOnReorder"])this._ol5(); }else if (_oq("MoveDown",_ou(_oOe))>0){for (var i=0; i<_oI4.length; i++){ this.move_item(_oI4[i].get_index(),_oI4[i].get_index()+1); }if (_oc["AutoPostBackOnReorder"])this._ol5(); }else if (_oq("TransferOut",_ou(_oOe))>0){for (var i=0; i<_oI4.length; i++){ this.transfer_to_destination(_oI4[i],"no update"); }var _oO5=this.get_item(_oo5); if (_oO5!=null){_oO5.set_selected( true ,"no update"); }else {var _oIa=this.get_items(); if (_oIa.length>0){_oIa[_oIa.length-1].set_selected( true ,"no update"); }} this._oO3(); if (_oc["AutoPostBackOnTransfer"])this._ol5(); }else if (_oq("TransferIn",_ou(_oOe))>0){if (_oc["TransferToId"]!=null){var _ola=_oC(_oO(_oc["TransferToId"])); var _ole=_ola.get_selected_items(); var _oie=(_ole.length>0)?_ole[0].get_index(): -1; for (var i=0; i<_ole.length; i++){ this.transfer_from_destination(_ole[i],"no update"); }var _oO5=_ola.get_item(_oie); if (_oO5!=null){_oO5.set_selected( true ,"no update"); }else {var _oIa=_ola.get_items(); if (_oIa.length>0){_oIa[_oIa.length-1].set_selected( true ,"no update"); }}_ola._oO3(); this._oO3(); if (_oc["AutoPostBackOnTransfer"])this._ol5(); }}else if (_oq("TransferAllOut",_ou(_oOe))>0){ this.transfer_all_to_destination(); if (_oc["AutoPostBackOnTransfer"])this._ol5(); }else if (_oq("TransferAllIn",_ou(_oOe))>0){ this.transfer_all_from_destination(); if (_oc["AutoPostBackOnTransfer"])this._ol5(); }}} ,_oIe:function (_oN){var _oc=this._oB(); if (_oc["TransferToId"]!=null){ this._oi9(); var _ola=_oC(_oO(_oc["TransferToId"])); _ola._oI9(this._oo); } this._oO3(); } ,_oof:function (_oN){var _oD=_oO(this._oo); var _oc=this._oB(); var _oI5=(_oV("div","klbGroup",_oD))[0]; _oc["ScrollTop"]=_oI5.scrollTop; this._oO7(_oc); } ,_oo3:function (_oG,_oOf,_oIf){var _oc=this._oB(); if (_oY(_oc["ClientEvents"]) && _oY(_oc["ClientEvents"][_oG])){var _oog=eval(_oc["ClientEvents"][_oG]); return _oog((_oIf!=null)?_oIf: this,_oOf); }else {return true; }} ,_ol5:function (){var _oc=this._oB(); if (_oc["UpdatePanel"]){var _oOg=eval("__="+_oc["UpdatePanel"]); _oOg.registerEvent("OnUpdatePanel",_olg); _oOg.update(); }else {var _oig=_oO(this._oo); while (_oig.nodeName!="FORM"){if (_oig.nodeName=="BODY")return; _oig=_og(_oig); }_oig.submit(); }}};function _oC(_oIg){while (_oIg.nodeName!="DIV" || _oq("KLB",_ou(_oIg))<0){_oIg=_og(_oIg); if (_oIg.nodeName=="BODY")return null; }return eval(_oIg.id); }function _oo0(_oN){ (new ListBoxItem(this.id))._oI3(this,_oN); }function _oO0(_oN){ (new ListBoxItem(this.id))._oo4(this,_oN); }function _ol0(_oN){ (new ListBoxItem(this.id))._oO4(this,_oN); }function _oi0(_oN){return (new ListBoxItem(this.id))._oi4(this,_oN); }function _oo1(_oN){return (new ListBoxItem((_og(this )).id))._ol4(_oN); }function _oo6(_oN){var _od=_oC(this ); return _od._oof(_oN); }function _oi6(_oN){var _od=_oC(this ); _od._ooe(this,_oN); }var _ooh=[]; function _oI6(_oo){var _oOh= false; for (var i=0; i<_ooh.length; i++){if (_ooh[i]==_oo){_oOh= true; }}if (!_oOh){_ooh.push(_oo); }}function _olh(_oN){for (var i=0; i<_ooh.length; i++){var _od=_oC(_oO(_ooh[i])); _od._oIe(_oN);}}_on(window,"load",_olh, false); function _olg(_oIf,_oOf){_olh(); }if (typeof(__KLBInits)!="undefined" && _oY(__KLBInits)){for (var i=0; i<__KLBInits.length; i++){__KLBInits[i](); }} <?php _oO5();
    _olo();
} if (!class_exists("KoolListBox", FALSE)) {

    class _olp {

        var $_oOp;
        var $_olq;
        var $_oOq = FALSE;
        var $_olr = FALSE;
        var $_ols;

        function __construct($_oOs = "_viewstate", $_olt = FALSE) {
            $this->_ols = $_oOs;
            $this->_oOq = $_olt;
        }

        function _oOt($_olu) {
            $this->_oOp = $_olu;
            $_oOu = ( isset($_POST[$this->_oOp->_olv . $this->_ols])) ? $_POST[$this->_oOp->_olv . $this->_ols] : "";
            if ($_oOu != "") {
                $this->_olr = TRUE;
                if ($this->_oOq) {
                    $_oOu = base64_decode($_oOu);
                }
            } $_oOu = _oO0("\134", "", $_oOu);
            $this->_olq = json_decode($_oOu, TRUE);
        }

        function _oOv() {
            $_olw = json_encode($this->_olq);
            if ($this->_oOq) $_olw = base64_encode($_olw); $_oOw = "<input id=\047{id}' name=\047{id}\047 type=\047hidden' value='{value}\047 autocomplete='off\047 />";
            $_olx = _oO0("{id}", $this->_oOp->_olv . $this->_ols, $_oOw);
            $_olx = _oO0("{value}", $_olw, $_olx);
            return $_olx;
        }

    }

    class _oOx {

        var $ShowDelete = FALSE;
        var $ShowReorder = FALSE;
        var $ShowTransfer = FALSE;
        var $ShowTransferAll = FALSE;
        var $Position = "Right";
        var $HorizontalAlign = "Left";
        var $VerticalAlign = "Top";
        var $RenderButtonWithText = FALSE;

    }

    class listboxitem {

        var $id;
        var $Enabled = TRUE;
        var $Text;
        var $Value;
        var $ToolTip;
        var $Checked;
        var $Checkable = TRUE;
        var $Selected;
        var $ImageUrl;
        var $AllowDrag;
        var $CssClass;
        var $Data;
        var $_oly;

        function __construct($_ol3 = "ListBoxItem", $_oOy = NULL) {
            $this->Text = $_ol3;
            if ($_oOy === NULL) {
                $this->Value = $_ol3;
            } else {
                $this->Value = $_oOy;
            } $this->Data = array();
        }

        function cloneme() {
            $_olz = new listboxitem($this->Text, $this->Value);
            $_olz->Enabled = $this->Enabled;
            $_olz->ToolTip = $this->ToolTip;
            $_olz->Checked = $this->Checked;
            $_olz->Checkable = $this->Checkable;
            $_olz->Selected = $this->Selected;
            $_olz->ImageUrl = $this->ImageUrl;
            $_olz->AllowDrag = $this->AllowDrag;
            $_olz->CssClass = $this->CssClass;
            $_olz->Data = $this->Data;
            $_olz->_oly = $this->_oly;
            return $_olz;
        }

        function _oOv() {
            $_oOz = "<li class='klbItem{selected}{cssclass}{disabled}' {tooltip}>{data}{display}</li>";
            $_ol10 = "<input class='klbItemData' type=\047hidden\047 value='{value}' autocomplete='off\047 />";
            $_oO10 = "";
            if ($this->_oly->ItemTemplate !== NULL) {
                $_oO10 = $this->_oly->ItemTemplate;
                foreach ($this->Data as $_ol11 => $_oO11) {
                    $_oO10 = _oO0("{" . $_ol11 . "}", $_oO11, $_oO10);
                } $_oO10 = _oO0("{Text}", $this->Text, $_oO10);
                $_oO10 = _oO0("{Value}", $this->Value, $_oO10);
            } else {
                $_ol12 = "<span class='klbText'>{text}</span>";
                $_oO12 = "<input class=\047klbCheck\047 type='checkbox\047 {checked} {disabled}/>";
                $_ol13 = "<img class='klbImage' src='{imageurl}' />";
                $_oO13 = ($this->_oly->UseCheckBoxes) ? _oO0("{checked}", $this->Checked ? "checked='true'" : "", $_oO12) : "";
                $_oO13 = _oO0("{disabled}", ($this->Checkable) ? "" : "disabled='true'", $_oO13);
                $_ol14 = ($this->ImageUrl !== NULL) ? _oO0("{imageurl}", $this->ImageUrl, $_ol13) : "";
                $_ol3 = _oO0("{text}", $this->Text, $_ol12);
                $_oO10 = $_oO13 . $_ol14 . $_ol3;
            } $_oO14 = $this->Data;
            $_oO14["Text"] = $this->Text;
            $_oO14["Value"] = $this->Value;
            if ($this->ImageUrl !== NULL) {
                $_oO14["ImageUrl"] = $this->ImageUrl;
            } $_ol15 = _oO0("{value}", json_encode($_oO14), $_ol10);
            $_olz = _oO0("{display}", $_oO10, $_oOz);
            $_olz = _oO0("{selected}", ($this->Selected) ? " klbSelected klbActive" : "", $_olz);
            $_olz = _oO0("{tooltip}", ($this->ToolTip !== NULL) ? "title='" . $this->ToolTip . "'" : "", $_olz);
            $_olz = _oO0("{cssclass}", ($this->CssClass) ? $this->CssClass : "", $_olz);
            $_olz = _oO0("{disabled}", ($this->Enabled) ? "" : " klbDisabledItem", $_olz);
            $_olz = _oO0("{data}", $_ol15, $_olz);
            return $_olz;
        }

        function _oO15() {
            $_ol16 = array();
            $_ol16["Text"] = $this->Text;
            $_ol16["Value"] = $this->Value;
            $_ol16["Enabled"] = $this->Enabled;
            $_ol16["ToolTip"] = $this->ToolTip;
            $_ol16["Checked"] = $this->Checked;
            $_ol16["Checkable"] = $this->Checkable;
            $_ol16["Selected"] = $this->Selected;
            $_ol16["ImageUrl"] = $this->ImageUrl;
            $_ol16["AllowDrag"] = $this->AllowDrag;
            $_ol16["CssClass"] = $this->CssClass;
            $_ol16["Data"] = $this->Data;
            return $_ol16;
        }

        function _oO16($_ol16) {
            $this->Text = $_ol16["Text"];
            $this->Value = $_ol16["Value"];
            $this->Enabled = $_ol16["Enabled"];
            $this->ToolTip = $_ol16["ToolTip"];
            $this->Checked = $_ol16["Checked"];
            $this->Checkable = $_ol16["Checkable"];
            $this->ImageUrl = $_ol16["ImageUrl"];
            $this->AllowDrag = $_ol16["AllowDrag"];
            $this->CssClass = $_ol16["CssClass"];
            $this->Data = $_ol16["Data"];
        }

    }

    class listboxeventhandler {

        function onbeforereorder($_ol17, $_oO17) {
            return TRUE;
        }

        function onreorder($_ol17, $_oO17) {
            
        }

        function onbeforetransferin($_ol17, $_oO17) {
            return TRUE;
        }

        function ontransferin($_ol17, $_oO17) {
            
        }

        function onbeforedelete($_ol17, $_oO17) {
            return TRUE;
        }

        function ondelete($_ol17, $_oO17) {
            
        }

    }

    class koollistbox {

        var $_ol0 = "1.0.0.1";
        var $id;
        var $_olv;
        var $scriptFolder;
        var $styleFolder;
        var $_ol18;
        var $Height = "200px";
        var $Width = "200px";
        var $AllowMultiSelect = FALSE;
        var $AllowSelect = TRUE;
        var $AllowHover = TRUE;
        var $UseCheckBoxes = FALSE;
        var $EnableDragAndDrop = FALSE;
        var $AllowReorder = FALSE;
        var $AutoPostBackOnReorder = FALSE;
        var $AllowTransfer = FALSE;
        var $TransferMode = "Move";
        var $AutoPostBackOnTransfer = FALSE;
        var $AutoPostBackOnDelete = FALSE;
        var $AllowTransferOnDoubleClick = FALSE;
        var $ButtonSettings;
        var $LoadOnDemand = FALSE;
        var $ItemTemplate;
        var $SelectedItems;
        var $CheckedItems;
        var $TransferToId;
        var $ClientEvents;
        var $EventHandler;
        var $UpdatePanel;
        var $Items;
        var $_oO18;
        var $_ol19;
        var $_oO19;
        var $_ol1a;
        var $_oO1a;
        var $_ol1b;
        var $_oO1b = 0;

        function __construct($_ol1c) {
            $this->id = $_ol1c;
            $this->_olv = $_ol1c;
            $this->ButtonSettings = new _oOx();
            $this->Items = array();
            $this->_ol19 = new _olp();
            $this->_oO18 = new _olp("_itemdata", TRUE);
            $this->ClientEvents = array();
            $this->_ol1a = array();
            $this->EventHandler = new listboxeventhandler();
        }

        function clearall() {
            $this->_oO1c = array();
        }

        function additem($_olz) {
            $_olz->_oly = $this;
            array_push($this->Items, $_olz);
            return $_olz;
        }

        function _ol1d() {
            if ($this->_ol19->_olr) {
                $this->_oO19 = $this->_ol19->_olq["NotifyingUpdateIds"];
                $this->_ol1a = $this->_ol19->_olq["LogEntries"];
                $this->_oO1a = $this->_ol19->_olq["SelectedIndices"];
                $this->_ol1b = $this->_ol19->_olq["CheckedIndices"];
                $this->_oO1b = $this->_ol19->_olq["ScrollTop"];
            } if ($this->_oO18->_olr) {
                $this->Items = array();
                $_oO1d = $this->_oO18->_olq;
                for ($_oO9 = 0; $_oO9 < count($_oO1d); $_oO9++) {
                    $_olz = new listboxitem();
                    $_olz->_oO16($_oO1d[$_oO9]);
                    $_olz->Selected = FALSE;
                    $_olz->Checked = FALSE;
                    $this->additem($_olz);
                }
            }
        }

        function _ol1e() {
            $this->_ol19->_olq = array("AllowMultiSelect" => $this->AllowMultiSelect, "AllowHover" => $this->AllowHover, "AllowSelect" => $this->AllowSelect, "UseCheckBoxes" => $this->UseCheckBoxes, "EnableDragAndDrop" => $this->EnableDragAndDrop, "AllowReorder" => $this->AllowReorder, "AutoPostBackOnReorder" => $this->AutoPostBackOnReorder, "AutoPostBackOnDelete" => $this->AutoPostBackOnDelete, "AllowTransfer" => $this->AllowTransfer, "TransferMode" => $this->TransferMode, "AutoPostBackOnTransfer" => $this->AutoPostBackOnTransfer, "AllowTransferOnDoubleClick" => $this->AllowTransferOnDoubleClick, "TransferToId" => $this->TransferToId, "UseCheckBoxes" => $this->UseCheckBoxes, "ClientEvents" => $this->ClientEvents, "LogEntries" => array(), "SelectedIndices" => array(), "CheckedIndices" => array(), "NotifyingUpdateIds" => $this->_oO19, "ScrollTop" => $this->_oO1b, "UpdatePanel" => $this->UpdatePanel);
            $_ol15 = array();
            for ($_oO9 = 0; $_oO9 < count($this->Items); $_oO9++) {
                array_push($_ol15, $this->Items[$_oO9]->_oO15());
            } $this->_oO18->_olq = $_ol15;
        }

        function _oO1e() {
            if (count($this->_ol1a) > 0) foreach ($this->_ol1a as $_ol1f) {
                    switch ($_ol1f["Event"]) {
                        case "Delete": if ($this->EventHandler->onbeforedelete($this, array("Position" => $_ol1f["Data"]["Position"]))) {
                                $_ol6 = array();
                                for ($_oO9 = 0; $_oO9 < count($this->Items); $_oO9++) {
                                    if ($_oO9 != $_ol1f["Data"]["Position"]) {
                                        array_push($_ol6, $this->Items[$_oO9]);
                                    }
                                } $this->Items = $_ol6;
                                $this->EventHandler->ondelete($this, array("Position" => $_ol1f["Data"]["Position"]));
                            } break;
                        case "Move": if ($this->EventHandler->onbeforereorder($this, $_ol1f["Data"])) {
                                $_oO1f = abs($_ol1f["Data"]["To"] - $_ol1f["Data"]["From"]) / ($_ol1f["Data"]["To"] - $_ol1f["Data"]["From"]);
                                for ($_oO9 = $_ol1f["Data"]["From"]; $_oO9 != $_ol1f["Data"]["To"]; $_oO9 = $_oO9 + $_oO1f) {
                                    $_ol1g = $this->Items[$_oO9 + $_oO1f];
                                    $this->Items[$_oO9 + $_oO1f] = $this->Items[$_oO9];
                                    $this->Items[$_oO9] = $_ol1g;
                                }
                            } break;
                        case "TransferIn": if ($this->EventHandler->onbeforetransferin($this, array("ItemData" => $_ol1f["Data"]))) {
                                $_olz = new listboxitem($_ol1f["Data"]["Text"], $_ol1f["Data"]["Value"]);
                                $_olz->Data = $_ol1f["Data"];
                                $this->additem($_olz);
                                $this->EventHandler->ontransferin($this, array("ItemData" => $_ol1f["Data"]));
                            } break;
                    }
                } $this->SelectedItems = array();
            for ($_oO9 = 0; $_oO9 < count($this->_oO1a); $_oO9++) {
                if (isset($this->Items[$this->_oO1a[$_oO9]])) {
                    $this->Items[$this->_oO1a[$_oO9]]->Selected = TRUE;
                    array_push($this->SelectedItems, $this->Items[$this->_oO1a[$_oO9]]);
                }
            } $this->CheckedItems = array();
            for ($_oO9 = 0; $_oO9 < count($this->_ol1b); $_oO9++) {
                if (isset($this->Items[$this->_ol1b[$_oO9]])) {
                    $this->Items[$this->_ol1b[$_oO9]]->Checked = TRUE;
                    array_push($this->CheckedItems, $this->Items[$this->_ol1b[$_oO9]]);
                }
            }
        }

        function init() {
            $this->_ol19->_oOt($this);
            $this->_oO18->_oOt($this);
            $this->_ol1d();
            $this->_oO1e();
        }

        function render() {
            $this->_ol1e();
            $_oO1g = $this->registercss();
            $_oO1g.=$this->renderlistbox();
            $_ol1h = isset($_POST["__koolajax"]) || isset($_GET["__koolajax"]);
            $_oO1g.=($_ol1h) ? "" : $this->registerscript();
            $_oO1g.="<script type='text/javascript\047>";
            $_oO1g.=$this->startupscript();
            $_oO1g.="</script>";
            return $_oO1g;
        }

        function renderlistbox() {
            $this->_oO1h();
            $_ol1i = "\n<!--KoolListBox version " . $this->_ol0 . " - www.koolphp.net -->\n";
            $_oO1i = "<div class=\047klbGroup\047 style=\047{style}\047><ul class='klbList\047>{lis}</ul></div>";
            $_ol1j = "<div class=\047klbButtonArea{position} klbAlign{align}' style='{style}'>{buttons}</div>";
            $_oO1j = "<table cellpadding='0\047 cellspacing='0\047 class='klbButtonArea{position} klbAlign{align}\047 style=\047{style}'><tr><td>{buttons}</td></tr></table>";
            $_ol1k = "<div id=\047{id}_template\047 style=\047display:none'>{itemtemplate}</div>";
            $_oO1k = "<a class=\047klbButton {type}\047 tittle=\047{title}' href=\047javascript:void 0\047><span class=\047klbButtonBL'><span class='klbButtonBR\047><span class=\047klbButtonTR\047><span class='klbButtonTL\047><span class='klbButtonText\047>{text}</span></span></span></span></span></a>";
            $_ol1l = "";
            $_oO1l = "";
            foreach ($this->Items as $_olz) {
                $_oO1l.=$_olz->_oOv();
            } $_ol1m = _oO0("{lis}", $_oO1l, $_oO1i);
            $_oO1m = "";
            if ($this->ButtonSettings->ShowDelete || $this->ButtonSettings->ShowTransfer || $this->ButtonSettings->ShowReorder || $this->ButtonSettings->ShowTransferAll) {
                $_ol1n = "";
                if ($this->ButtonSettings->ShowDelete) {
                    $_ol1n = _oO0("{type}", "klbDelete", $_oO1k);
                    $_ol1n = _oO0("{title}", "Delete", $_ol1n);
                    $_ol1n = _oO0("{text}", "", $_ol1n);
                } $_oO1n = "";
                if ($this->ButtonSettings->ShowReorder) {
                    $_ol1o = _oO0("{type}", "klbMoveUp", $_oO1k);
                    $_ol1o = _oO0("{title}", "Move up", $_ol1o);
                    $_ol1o = _oO0("{text}", "", $_ol1o);
                    $_oO1o = _oO0("{type}", "klbMoveDown", $_oO1k);
                    $_oO1o = _oO0("{title}", "Move up", $_oO1o);
                    $_oO1o = _oO0("{text}", "", $_oO1o);
                    $_oO1n = $_ol1o . $_oO1o;
                } $_ol1p = "";
                if ($this->ButtonSettings->ShowTransfer) {
                    $_oO1p = _oO0("{type}", "klbTransferOut", $_oO1k);
                    $_oO1p = _oO0("{title}", "Transfer out", $_oO1p);
                    $_oO1p = _oO0("{text}", "", $_oO1p);
                    $_ol1q = _oO0("{type}", "klbTransferIn", $_oO1k);
                    $_ol1q = _oO0("{title}", "Transfer in", $_ol1q);
                    $_ol1q = _oO0("{text}", "", $_ol1q);
                    $_ol1p = $_oO1p . $_ol1q;
                } $_oO1q = "";
                if ($this->ButtonSettings->ShowTransferAll) {
                    $_ol1r = _oO0("{type}", "klbTransferAllOut", $_oO1k);
                    $_ol1r = _oO0("{title}", "Transfer all out ", $_ol1r);
                    $_ol1r = _oO0("{text}", "", $_ol1r);
                    $_oO1r = _oO0("{type}", "klbTransferAllIn", $_oO1k);
                    $_oO1r = _oO0("{title}", "Transfer all in", $_oO1r);
                    $_oO1r = _oO0("{text}", "", $_oO1r);
                    $_oO1q = $_ol1r . $_oO1r;
                } $_ol1s = "";
                $_oO1s = "";
                switch (strtolower($this->ButtonSettings->Position)) {
                    case "left": case "right": switch (strtolower($this->ButtonSettings->VerticalAlign)) {
                            case "top": $_ol1s = "Top";
                                break;
                            case "bottom": $_ol1s = "Bottom";
                                break;
                            case "middle": $_ol1s = "Middle";
                                break;
                        } $_oO1s = $_oO1j;
                        break;
                    case "top": case "bottom": switch (strtolower($this->ButtonSettings->HorizontalAlign)) {
                            case "left": $_ol1s = "Left";
                                break;
                            case "right": $_ol1s = "Right";
                                break;
                            case "center": $_ol1s = "Center";
                                break;
                        } $_oO1s = $_ol1j;
                        break;
                } $_ol1t = $_oO1n . $_ol1p . $_oO1q . $_ol1n;
                $_oO1m = _oO0("{buttons}", $_ol1t, $_oO1s);
                $_oO1m = _oO0("{position}", $this->ButtonSettings->Position, $_oO1m);
                $_oO1m = _oO0("{align}", $_ol1s, $_oO1m);
            } if ($_oO1m != "") {
                switch (strtolower($this->ButtonSettings->Position)) {
                    case "left": $_ol1m = _oO0("{style}", "margin-left:30px;", $_ol1m);
                        $_oO1m = _oO0("{style}", "width:30px;", $_oO1m);
                        break;
                    case "right": $_ol1m = _oO0("{style}", "margin-right:30px;", $_ol1m);
                        $_oO1m = _oO0("{style}", "width:30px;", $_oO1m);
                        break;
                    case "top": $_ol1m = _oO0("{style}", "margin-top:30px;", $_ol1m);
                        $_oO1m = _oO0("{style}", "height:30px;", $_oO1m);
                        break;
                    case "bottom": $_ol1m = _oO0("{style}", "margin-bottom:30px;", $_ol1m);
                        $_oO1m = _oO0("{style}", "position:absolute;height:30px;bottom:0px;", $_oO1m);
                        break;
                }
            } $_oO1t = "";
            if ($this->ItemTemplate !== NULL) {
                $_oO1t = _oO0("{itemtemplate}", $this->ItemTemplate, $_ol1k);
                $_oO1t = _oO0("{id}", $this->id, $_oO1t);
            } $_olg = _oO0("{id}", $this->id, _oOd());
            if (_oOf($_olg)) {
                $_olg = _oO0("{style}", $this->_ol18, $_olg);
                $_olg = _oO0("{width}", $this->Width, $_olg);
                $_olg = _oO0("{height}", $this->Height, $_olg);
                $_olg = _oO0("{viewstate}", $this->_ol19->_oOv() . $this->_oO18->_oOv(), $_olg);
                $_olg = _oO0("{group}", $_ol1m, $_olg);
                $_olg = _oO0("{button_area}", $_oO1m, $_olg);
                $_olg = _oO0("{template}", $_oO1t, $_olg);
                $_olg = _oO0("{trademark}", $_ol1i, $_olg);
                $_olg = _oO0("{version}", $this->_ol0, $_olg);
            } return $_olg;
        }

        function _oO1h() {
            $this->styleFolder = _oO0("\134", "/", $this->styleFolder);
            $_ol1u = trim($this->styleFolder, "/");
            $_oO1u = strrpos($_ol1u, "/");
            $this->_ol18 = substr($_ol1u, ($_oO1u ? $_oO1u : -1) + 1);
        }

        function registercss() {
            $this->_oO1h();
            $_ol1v = "<script type='text/javascript\047>if (document.getElementById('__{style}KLB\047)==null){var _head = document.getElementsByTagName('head\047)[0];var _link = document.createElement('link'); _link.id = '__{style}KLB\047;_link.rel='stylesheet\047; _link.href=\047{stylepath}/{style}/{style}.css';_head.appendChild(_link);}</script>";
            $_oO1g = _oO0("{style}", $this->_ol18, $_ol1v);
            $_oO1g = _oO0("{stylepath}", $this->_oO1v(), $_oO1g);
            return $_oO1g;
        }

        function registerscript() {
            $_ol1v = "<script type=\047text/javascript\047>if(typeof _libKLB=='undefined'){document.write(unescape(\042%3Cscript type=\047text/javascript\047 src='{src}\047%3E %3C/script%3E\042));_libKLB=1;}</script>";
            $_oO1g = _oO0("{src}", $this->_ol1w() . "?" . md5("js"), $_ol1v);
            return $_oO1g;
        }

        function startupscript() {
            $_ol1v = "var {id}; function {id}_init(){ {id} = new KoolListBox(\047{id}');}";
            $_ol1v.="if (typeof(KoolListBox)=='function'){{id}_init();}";
            $_ol1v.="else{if(typeof(__KLBInits)=='undefined\047){__KLBInits=new Array();} __KLBInits.push({id}_init);{register_script}}";
            $_oO1w = "if(typeof(_libKLB)=='undefined\047){var _head = document.getElementsByTagName('head\047)[0];var _script = document.createElement('script\047); _script.type=\047text/javascript\047; _script.src='{src}'; _head.appendChild(_script);_libKLB=1;}";
            $_ol1x = _oO0("{src}", $this->_ol1w() . "?" . md5("js"), $_oO1w);
            $_oO1g = _oO0("{id}", $this->id, $_ol1v);
            $_oO1g = _oO0("{register_script}", $_ol1x, $_oO1g);
            return $_oO1g;
        }

        function _ol1w() {
            if ($this->scriptFolder == "") {
                $_ol5 = _oO3();
                $_oO1x = substr(_oO0("\134", "/", __FILE__), strlen($_ol5));
                return $_oO1x;
            } else {
                $_oO1x = _oO0("\134", "/", __FILE__);
                $_oO1x = $this->scriptFolder . substr($_oO1x, strrpos($_oO1x, "/"));
                return $_oO1x;
            }
        }

        function _oO1v() {
            $_ol1y = $this->_ol1w();
            $_oO1y = _oO0(strrchr($_ol1y, "/"), "", $_ol1y) . "/styles";
            return $_oO1y;
        }

    }

} ?>
