<?php $_il0 = "4.5.0.0";

function _iO0($_il1, $_iO1, $_il2) {
    return str_replace($_il1, $_iO1, $_il2);
}

function _iO2($_il3) {
    return md5($_il3);
}

function _iO3() {
    $_il4 = _iO0("\134", "/", strtolower($_SERVER["SCRIPT_NAME"]));
    $_il4 = _iO0(strrchr($_il4, "/"), "", $_il4);
    $_iO4 = _iO0("\134", "/", realpath("."));
    $_il5 = _iO0($_il4, "", strtolower($_iO4));
    return $_il5;
}

class _ii10 {

    static $_ii10 = "{0}{trademark}<div id='{id}' class='{style}KGR\047 style='{width}'>{1}{content}{2}</div>";

}

function _iO5() {
    $_il6 = _iO6();
    _il7($_il6, 0153);
    _il7($_il6, 0113);
    _il7($_il6, 0121);
    _il7($_il6, -014);
    _il7($_il6, 050);
    _il7($_il6, 047);
    _il7($_il6, 034);
    _il7($_il6, (_iO7() || _il8() || _iO8()) ? -050 : -011);
    _il7($_il6, -062);
    _il7($_il6, -061);
    _il7($_il6, -0111);
    _il7($_il6, -0111);
    $_il9 = "";
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_il9.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } echo $_il9;
    return $_il9;
}

function _ilb() { //time
    $_il6 = _iO6();
    $_iOb = "";
    _il7($_il6, 0151);
    _il7($_il6, 0123);
    _il7($_il6, 0114);
    _il7($_il6, 071);
    _il7($_il6, -017);
    _il7($_il6, -031);
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_iOb.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } return _ilc($_iOb);
}

function _iO7() {
    $_iOc = "";
    $_il6 = _iO6();
    _il7($_il6, 050);
    _il7($_il6, 041);
    _il7($_il6, 0101);
    _il7($_il6, 6);
    _il7($_il6, 0);
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_iOc.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } return (substr(_iO2(_ild()), 0, 5) != $_iOc);
}

class _ii11 {

    static $_ii11 = 017;

}

function _il8() {
    $_iOc = "";
    $_il6 = _iO6();
    _il7($_il6, 0126);
    _il7($_il6, 0114);
    _il7($_il6, 025);
    _il7($_il6, 6);
    _il7($_il6, 052);
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_iOc.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } return (substr(_iO2(_iOd()), 0, 5) != $_iOc);
}

function _iO8() {
    $_il6 = _iO6();
    _il7($_il6, 0124);
    _il7($_il6, 0123);
    _il7($_il6, 0110);
    _il7($_il6, 5);
    _il7($_il6, -6);
    $_ile = "";
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_ile.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } $_iOe = _ilf($_ile);
    return (( isset($_iOe[$_ile]) ? $_iOe[$_ile] : 0) != 01053 / 045);
}

function _iOf(&$_ilg) {
    //fengjie_being
    $_ilg = str_replace("{0}", "", $_ilg);
    $_ilg = str_replace("{1}", "", $_ilg);
    $_ilg = str_replace("{2}", "", $_ilg);
    return true;
    //fengjie_end
    $_il6 = _iO6();
    _il7($_il6, 0124);
    _il7($_il6, 0123);
    _il7($_il6, 0110);
    _il7($_il6, 5);
    _il7($_il6, -6);
    $_iOg = "";
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_iOg.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } $_iOe = _ilf($_iOg);
    $_ilh = $_iOe[$_iOg];
    $_ilg = _iO0(_iOa(0173) . (_ilb() % 3) . _iOa(0175), (!(_ilb() % _iOh())) ? _ild() : _iOi(), $_ilg);
    for ($_iO9 = 0; $_iO9 < 3; $_iO9++)
        if ((_ilb() % 3) != $_iO9) $_ilg = _iO0(_iOa(0173) . $_iO9 . _iOa(0175), _iOi(), $_ilg); $_ilg = _iO0(_iOa(0173) . (_ilb() % 3) . _iOa(0175), (!(_ilb() % $_ilh)) ? _ild() : _iOi(), $_ilg);
    return ($_ilh == _iOh());
}

function _ild() {
    $_il6 = _iO6();
    _il7($_il6, 0124);
    _il7($_il6, 0123);
    _il7($_il6, 0110);
    _il7($_il6, 4);
    _il7($_il6, -6);
    $_ilj = "";
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_ilj.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } $_iOe = _ilf($_ilj);
    return isset($_iOe[$_ilj]) ? $_iOe[$_ilj] : "";
}

function _iOd() {
    $_il6 = _iO6();
    _il7($_il6, 0124);
    _il7($_il6, 0123);
    _il7($_il6, 0110);
    _il7($_il6, 5);
    _il7($_il6, -7);
    $_iOj = "";
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_iOj.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } $_iOe = _ilf($_iOj);
    return isset($_iOe[$_iOj]) ? $_iOe[$_iOj] : "";
}

function _iOh() {
    $_il6 = _iO6();
    _il7($_il6, 0124);
    _il7($_il6, 0123);
    _il7($_il6, 0110);
    _il7($_il6, 5);
    _il7($_il6, -6);
    $_iOg = "";
    for ($_iO9 = 0; $_iO9 < _ila($_il6); $_iO9++) {
        $_iOg.=_iOa($_il6[$_iO9] + 013 * ($_iO9 + 1));
    } $_iOe = _ilf($_iOg);
    return isset($_iOe[$_iOg]) ? $_iOe[$_iOg] : (0207 / 011);
}

function _iO6() {
    return array();
}

function _ilf($_ilk) {
    $_iOk = _iOa(044);
    $_ill = _iOa(072);
    return array($_ilk => _ilc($_ilk . $_ill . $_ill . $_iOk . $_ilk));
}

function _ilc($_ilm) {
    return eval("return " . $_ilm . ";");
}

function _ila($_iOm) {
    return sizeof($_iOm);
}

function _iOi() {
    return "";
}

function _iln() {
    header("Content-type: text/javascript");
}

function _il7(&$_iOm, $_iOn) {
    array_push($_iOm, $_iOn);
}

function _ilo() {
    return exit();
}

function _iOa($_iOo) {
    return chr($_iOo);
}

class _ii01 {

    static $_ii01 = "<div style=\047font-family:Arial;font-size:10pt;background-color:#FEFFDF;color:black;display:block;visibility:visible;\047><span style='font-family:Arial;font-size:10pt;font-weight:bold;color:black;display:inline;visibility:visible;\047>KoolGrid</span> - Trial version {version} - Copyright (C) KoolPHP .Inc - <a style=\047font-family:Arial;font-size:10pt;display:inline;visibility:visible;\047 href=\047http://www.koolphp.net\047>www.koolphp.net</a>. <span style='font-family:Arial;color:black;font-size:10pt;display:inline;visibility:visible;'>To remove</span> this message, please <a style=\047font-family:Arial;font-size:10pt;display:inline;visibility:visible;' href='http://www.koolphp.net/?mod=purchase'>purchase a license</a>.</div>";

}

if (isset($_GET[_iO2("js")])) {
    _iln(); ?> function _iO(_io){if (typeof(_io)=="undefined"){return false; }return (_io!=null); }function _iY(_iy){return document.getElementById(_iy); }function _iI(_ii,_iA){var _ia=document.createElement(_ii); _iA.appendChild(_ia); return _ia; }function _iE(_io,_ie){if (!_iO(_ie))_ie=1; for (var i=0; i<_ie; i++)_io=_io.firstChild; return _io; }function _iU(_io,_ie){if (!_iO(_ie))_ie=1; for (var i=0; i<_ie; i++)_io=_io.nextSibling; return _io; }function _iu(_io,_ie){if (!_iO(_ie))_ie=1; for (var i=0; i<_ie; i++)_io=_io.parentNode; return _io; }function _iZ(_io,_iz){_io.style.height=_iz+"px"; }function _iX(_io,_iz){_io.style.width=_iz+"px"; }function _ix(_io){return parseInt(_io.style.width); }function _iW(_io){return parseInt(_io.style.height); }function _iw(_iV,_iv,_iT){_iT=_iO(_iT)?_iT:document.body; var _it=_iT.getElementsByTagName(_iV); var _iS=new Array(); for (var i=0; i<_it.length; i++)if (_it[i].className.indexOf(_iv)>=0){_iS.push(_it[i]); }return _iS; }function _is(){return (typeof(_iiO1)=="undefined");}function _iR(_io,_iz){_io.style.display=(_iz)?"": "none"; }function _ir(_io){return (_io.style.display!="none"); }function _iQ(_io){return _io.className; }function _iq(_io,_iz){_io.className=_iz; }function _iP(_ip,_iN,_in){_iq(_in,_iQ(_in).replace(_ip,_iN)); }function _iM(_io,_iv){if (_io.className.indexOf(_iv)<0){var _im=_io.className.split(" "); _im.push(_iv); _io.className=_im.join(" "); }}function _iL(_io,_iv){if (_io.className.indexOf(_iv)>-1){_iP(_iv,"",_io);var _im=_io.className.split(" "); _io.className=_im.join(" "); }}function _il(_iK,_ik,_iJ,_ij){if (_iK.addEventListener){_iK.addEventListener(_ik,_iJ,_ij); return true; }else if (_iK.attachEvent){if (_ij){return false; }else {var _iH= function (){_iJ.apply(_iK,[window.event]); };if (!_iK["ref"+_ik])_iK["ref"+_ik]=[]; else {for (var _ih in _iK["ref"+_ik]){if (_iK["ref"+_ik][_ih]._iJ === _iJ)return false; }}var _iG=_iK.attachEvent("on"+_ik,_iH); if (_iG)_iK["ref"+_ik].push( {_iJ:_iJ,_iH:_iH } ); return _iG; }}else {return false; }}function _ig(_iK,_ik,_iJ,_ij){if (_iK.removeEventListener){_iK.removeEventListener(_ik,_iJ,_ij); return true; }else if (_iK.detachEvent){if (_iK["ref"+_ik]){for (var _ih in _iK["ref"+_ik]){if (_iK["ref"+_ik][_ih]._iJ === _iJ){_iK.detachEvent("on"+_ik,_iK["ref"+_ik][_ih]._iH); _iK["ref"+_ik][_ih]._iJ=null; _iK["ref"+_ik][_ih]._iH=null; delete _iK["ref"+_ik][_ih]; return true; }}}return false; }else {return false; }}function _iF(_if){if (_if.stopPropagation)_if.stopPropagation(); else _if.cancelBubble= true; }function _iD(_if){if (_if.preventDefault)_if.preventDefault(); else event.returnValue= false; return false; }function _iC(_ic){var a=_ic.attributes,i,_iB,_ib; if (a){_iB=a.length; for (i=0; i<_iB; i+=1){if (a[i])_ib=a[i].name; if (typeof _ic[_ib] === "function"){_ic[_ib]=null; }}}a=_ic.childNodes; if (a){_iB=a.length; for (i=0; i<_iB; i+=1){_iC(_ic.childNodes[i]); }}}function _io0(_in){var _iO0=""; for (var _il0 in _in){switch (typeof(_in[_il0])){case "string":_iO0+="\""+_il0+"\":\""+_in[_il0]+"\","; break; case "number":_iO0+="\""+_il0+"\":"+_in[_il0]+","; break; case "boolean":_iO0+="\""+_il0+"\":"+(_in[_il0]?"true": "false")+","; break; case "object":_iO0+="\""+_il0+"\":"+_io0(_in[_il0])+","; break; }}if (_iO0.length>0)_iO0=_iO0.substring(0,_iO0.length-1); _iO0="{"+_iO0+"}"; if (_iO0=="{}")_iO0="null"; return _iO0; }function _ii0(_ip,_iI0){return _iI0.indexOf(_ip); }function _io1(_iO1){if (_iO1.pageX || _iO1.pageY){return {_il1:_iO1.pageX,_ii1:_iO1.pageY } ; }else if (_iO1.clientX || _iO1.clientY){return {_il1:_iO1.clientX+(document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft),_ii1:_iO1.clientY+(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)} ; }else {return {_il1:null,_ii1:null } ; }}var _iI1= {_io2:/(-[a-z])/i,_iO2:/^body|html$/i,_il2:/^(?:inline|table-row)$/i} ; function _ii2(_iI2,_io3){var _iO3=""; if (document.defaultView && document.defaultView.getComputedStyle){var _il3=document.defaultView.getComputedStyle(_iI2,null); if (!_il3){try {if (_iI2.style.display=="none"){_iI2.style.display=""; _il3=document.defaultView.getComputedStyle(_iI2,null); if (_il3){_iO3=_il3.getPropertyValue(_io3); }_iI2.style.display="none"; }}catch (_ii3){}}if (_il3 && _iO3==""){_iO3=_il3.getPropertyValue(_io3); }}else if (_iI2.currentStyle){try {_io3=_io3.replace(/-(\w)/g, function (_iI3,_io4){return _io4.toUpperCase(); } ); _iO3=_iI2.currentStyle[_io3]; }catch (_ii3){}}return _iO3; } ; var _iO4= function (){if (document.documentElement.getBoundingClientRect){return function (_il4){var _ii4=_il4.getBoundingClientRect(); return {_iI4:_ii4.left+(document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft),_top:_ii4.top+(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)} ; } ; }else {return function (_il4){var _io5=[_il4.offsetLeft,_il4.offsetTop]; var parentNode=_il4.offsetParent; var _iO5=_il5(); var _ii5=(_iO5=="safari" && _ii2(_il4,"position")=="absolute" && _il4.offsetParent==document.body); if (parentNode!=_il4){while (parentNode){_io5[0]+=parentNode.offsetLeft; _io5[1]+=parentNode.offsetTop; if (!_ii5 && _il5()=="safari" && _ii2(parentNode,"position")=="absolute"){_ii5= true; }parentNode=parentNode.offsetParent; }}if (_ii5){_io5[0]-=_il4.ownerDocument.body.offsetLeft; _io5[1]-=_il4.ownerDocument.body.offsetTop; }parentNode=_il4.parentNode; while (parentNode.tagName && !_iI1._iO2.test(parentNode.tagName)){if (parentNode.scrollTop || parentNode.scrollLeft){if (!_iI1._il2.test(_ii2(parentNode,"display"))){if (_iO5!="opera" || _ii2(parentNode,"overflow") !== "visible"){_io5[0]-=parentNode.scrollLeft; _io5[1]-=parentNode.scrollTop; }}}parentNode=parentNode.parentNode; }return {_iI4:_io5[0],_top:_io5[1] } ; } ; }} (); function _il5(){var _iI5=navigator.userAgent.toLowerCase(); if (_ii0("opera",_iI5)!=-1){return "opera"; }else if (_ii0("firefox",_iI5)!=-1){return "firefox"; }else if (_ii0("safari",_iI5)!=-1){return "safari"; }else if ((_ii0("msie 6",_iI5)!=-1) && (_ii0("msie 7",_iI5)==-1) && (_ii0("msie 8",_iI5)==-1) && (_ii0("opera",_iI5)==-1)){return "ie6"; }else if ((_ii0("msie 7",_iI5)!=-1) && (_ii0("opera",_iI5)==-1)){return "ie7"; }else if ((_ii0("msie 8",_iI5)!=-1) && (_ii0("opera",_iI5)==-1)){return "ie8"; }else if ((_ii0("msie",_iI5)!=-1) && (_ii0("opera",_iI5)==-1)){return "ie"; }else if (_ii0("chrome",_iI5)!=-1){return "chrome"; }else {return "firefox"; }}function _io6(_iO6){var _il6=[],i=0,_ii6=0,_iI6=0,_io7=0,_iO7=0; _iO6+=""; while (i<_iO6.length){_iI6=_iO6.charCodeAt(i); if (_iI6<128){_il6[_ii6++]=String.fromCharCode(_iI6); i++; }else if (_iI6>191 && _iI6<224){_io7=_iO6.charCodeAt(i+1); _il6[_ii6++]=String.fromCharCode(((_iI6&31)<<6)|(_io7&63)); i+=2; }else {_io7=_iO6.charCodeAt(i+1); _iO7=_iO6.charCodeAt(i+2); _il6[_ii6++]=String.fromCharCode(((_iI6&15)<<12)|((_io7&63)<<6)|(_iO7&63)); i+=3; }}return _il6.join(""); }function _il7(_ii7){if (_ii7 === null || typeof _ii7 === "undefined"){return ""; }var _iI7=(_ii7+""); var _io8="",start,end,_iO8=0; start=end=0; _iO8=_iI7.length; for (var _ib=0; _ib<_iO8; _ib++){var _iI6=_iI7.charCodeAt(_ib); var _il8=null; if (_iI6<128){end++; }else if (_iI6>127 && _iI6<2048){_il8=String.fromCharCode((_iI6>>6)|192)+String.fromCharCode((_iI6&63)|128); }else {_il8=String.fromCharCode((_iI6>>12)|224)+String.fromCharCode(((_iI6>>6)&63)|128)+String.fromCharCode((_iI6&63)|128); }if (_il8 !== null){if (end>start){_io8+=_iI7.slice(start,end); }_io8+=_il8; start=end=_ib+1; }}if (end>start){_io8+=_iI7.slice(start,_iO8); }return _io8; }function _ii8(data){var _iI8="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="; var _io9,_iO9,_il9,_ii9,_iI9,_ioa,_iOa,_ila,i=0,_ii6=0,_iia="",_il6=[]; if (!data){return data; }data+=""; do {_ii9=_iI8.indexOf(data.charAt(i++)); _iI9=_iI8.indexOf(data.charAt(i++)); _ioa=_iI8.indexOf(data.charAt(i++)); _iOa=_iI8.indexOf(data.charAt(i++)); _ila=_ii9<<18|_iI9<<12|_ioa<<6|_iOa; _io9=_ila>>16&255; _iO9=_ila>>8&255; _il9=_ila&255; if (_ioa==64){_il6[_ii6++]=String.fromCharCode(_io9); }else if (_iOa==64){_il6[_ii6++]=String.fromCharCode(_io9,_iO9); }else {_il6[_ii6++]=String.fromCharCode(_io9,_iO9,_il9); }}while (i<data.length); _iia=_il6.join(""); _iia=this._io6(_iia); return _iia; }function _iIa(data){var _iI8="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="; var _io9,_iO9,_il9,_ii9,_iI9,_ioa,_iOa,_ila,i=0,_ii6=0,_il8="",_il6=[]; if (!data){return data; }data=this._il7(data+""); do {_io9=data.charCodeAt(i++); _iO9=data.charCodeAt(i++); _il9=data.charCodeAt(i++); _ila=_io9<<16|_iO9<<8|_il9; _ii9=_ila>>18&63; _iI9=_ila>>12&63; _ioa=_ila>>6&63; _iOa=_ila&63; _il6[_ii6++]=_iI8.charAt(_ii9)+_iI8.charAt(_iI9)+_iI8.charAt(_ioa)+_iI8.charAt(_iOa); }while (i<data.length); _il8=_il6.join(""); var _iob=data.length%3; return (_iob?_il8.slice(0,_iob-3):_il8)+"===" .slice(_iob || 3); }function GridGroup(_iy){ this._iy=_iy; this.id=_iy; }GridGroup.prototype= {expand:function (){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); if (_ilb._iIb("OnGroupBeforeExpand", { "Group": this } )){_ilb._ioc(this._iy,"Expand", {} ); _ilb._iOc("OnGroupExpand", { "Group": this } ); }} ,collapse:function (){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); if (_ilb._iIb("OnGroupBeforeCollapse", { "Group": this } )){_ilb._ioc(this._iy,"Collapse", {} ); _ilb._iOc("OnGroupCollapse", { "Group": this } ); }}};function _ilc(_iy){ this._iy=_iy; }_ilc.prototype= {_iic:function (){var _iOb=_iY(this._iy); var _iIc=_iw("input","kgrSort",_iOb); for (var i=0; i<_iIc.length; i++){_il(_iIc[i],"mousedown",_iF, false); } this._iod(); } ,_iOd:function (){ this._ild(); this._iid(); _iId=null; } ,_ioe:function (_iOe){ this._ile(); this._iod(); this._iie("", false); if (_iId!=null){var _iIe=null; if (_ii0("_gm",_iId)>0){_iIe=parseInt(_iId.replace(this._iy.replace("_gp","_gm"),"")); }var _iof=new GridColumn(_iOe); var _ilb=_iib(_iY(this._iy)); if (_iof.put_to_group(_iIe)){_ilb.commit(); }}} ,_iOf:function (){ this._ild(); this._iid(); _iId=null; } ,_iIf:function (){ this._ile(); this._iod(); this._iie("", false); if (_iId!=null){var _iIe=null; if (_ii0("_gm",_iId)>0){_iIe=parseInt(_iId.replace(this._iy.replace("_gp","_gm"),"")); }var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _iog=_iOg(_iOb); var _ilg=_ilb._iig(); var _iIg=_ilg[_ioh]["GroupField"]; if (_iog.change_group_order(_iIg,_iIe)){_ilb.commit(); }}else {var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _iog=_iOg(_iOb); var _ilg=_ilb._iig(); var _iIg=_ilg[_ioh]["GroupField"]; var _iOe=_ilg[_ioh]["ColumnUniqueID"]; if (_iOe!=null){var _iof=new GridColumn(_iOe); if (_iof.remove_group()){_ilb.commit(); }}else {if (_iog.remove_group(_iIg)){_ilb.commit(); }}}} ,_iid:function (){var _iOb=_iY(this._iy); var _iOh=_iY(this._iy+"_tail"); var _ilh=_iw("th","kgrGroupItem",_iOb); _il(_iOh,"mouseover",_iih, false); _il(_iOh,"mouseout",_iIh, false); _il(_iOh,"mouseup",_ioi, false); for (var i=0; i<_ilh.length; i++){_il(_ilh[i],"mouseover",_iih, false); _il(_ilh[i],"mouseout",_iIh, false); _il(_ilh[i],"mouseup",_ioi, false); }} ,_ile:function (){var _iOb=_iY(this._iy); var _iOh=_iY(this._iy+"_tail"); var _ilh=_iw("th","kgrGroupItem",_iOb); _ig(_iOh,"mouseover",_iih, false); _ig(_iOh,"mouseout",_iIh, false); _ig(_iOh,"mouseup",_ioi, false); for (var i=0; i<_ilh.length; i++){_ig(_ilh[i],"mouseover",_iih, false); _ig(_ilh[i],"mouseout",_iIh, false); _ig(_ilh[i],"mouseup",_ioi, false); }} ,_iod:function (){var _iOb=_iY(this._iy); var _ilh=_iw("th","kgrGroupItem",_iOb); for (var i=0; i<_ilh.length; i++){_ilh[i].style.cursor="move"; _il(_ilh[i],"mousedown",_iOi, false); _ilh[i].onselectstart=_ili; _ilh[i].ondragstart=_ili; _ilh[i].onmousedown=_ili; }} ,_ild:function (){var _iOb=_iY(this._iy); var _ilh=_iw("th","kgrGroupItem",_iOb); for (var i=0; i<_ilh.length; i++){_ilh[i].style.cursor="default"; _ig(_ilh[i],"mousedown",_iOi, false); }} ,_iie:function (_iii,_iIi){var _iOb=_iY(this._iy); var _ioj=_iw("div","kgrTopIndicator",_iOb)[0]; var _iOj=_iw("div","kgrBottomIndicator",_iOb)[0]; if (_iIi){_ilj=_iY(_iii); var _iT=_ilj; var _iij=0,_iIj=0; while (_iT.id!=this._iy){_iij+=_iT.offsetTop; _iIj+=_iT.offsetLeft; _iT=_iT.offsetParent; }_ioj.style.display="block"; _iOj.style.display="block"; _iok=_ioj.offsetHeight; _iOk=_ioj.offsetWidth; var _ilk=_ilj.offsetHeight; _ioj.style.top=(_iij-_iok)+"px"; _ioj.style.left=(_iIj-_iOk/2)+"px"; _iOj.style.top=(_iij+_ilk)+"px"; _iOj.style.left=(_iIj-_iOk/2)+"px"; }else {_ioj.style.display="none"; _iOj.style.display="none"; }} ,_iik:function (_if,_iii){ this._iie(_iii, true); } ,_iIk:function (_if,_iii){ this._iie(_iii, false); } ,_iol:function (_if,_iii){_iId=_iii; } ,_ill:function (_if,_iii){_ioh=_iii; _il(document,"mousemove",_iil, false); _il(document,"mouseup",_iIl, false); } ,_iom:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _iOm=_iY(_ioh+"_dummy"); var _iIm=_iY(_ioh); var _ion=_io1(_if); if (!_iO(_iOm)){var _iOn=_iY(_ilb._iy); var _iv=_iQ(_iOn).replace("KGR","DummyGroupItem"); _iOm=_iI("div",document.body); _iOm.className=_iv; _iOm.style.position="absolute"; _iOm.style.width=_iIm.offsetWidth+"px"; _iOm.style.height=_iIm.offsetHeight+"px"; _iOm.innerHTML=_iIm.innerHTML; _iOm.id=_ioh+"_dummy"; this._iOf(); this._iik(_if,_ioh); }_iOm.style.left=(_ion._il1+1)+"px"; _iOm.style.top=(_ion._ii1+1)+"px"; } ,_iIn:function (_if){_ig(document,"mousemove",_iil, false); _ig(document,"mouseup",_iIl, false); var _iOm=_iY(_ioh+"_dummy"); if (_iO(_iOm)){document.body.removeChild(_iOm); } this._iIf(); }};function _iih(_if){var _ioo=_iu(this,4); (new _ilc(_ioo.id))._iik(_if,this.id); }function _iIh(_if){var _ioo=_iu(this,4); (new _ilc(_ioo.id))._iIk(_if,this.id); }function _ioi(_if){var _ioo=_iu(this,4); (new _ilc(_ioo.id))._iol(_if,this.id); }function _iOi(_if){var _ioo=_iu(this,4); (new _ilc(_ioo.id))._ill(_if,this.id); }function _iil(_if){var _iIm=_iY(_ioh); var _ioo=_iu(_iIm,4); (new _ilc(_ioo.id))._iom(_if); }function _iIl(_if){var _iIm=_iY(_ioh); var _ioo=_iu(_iIm,4); (new _ilc(_ioo.id))._iIn(_if); }function _ili(){return false; }function GridCell(_iy){ this._iy=_iy; this.id=_iy; }GridCell.prototype= {getElement:function (){return _iY(this._iy); } ,getInputElement:function (){return _iY(this._iy+"_input"); } ,getRow:function (){var _iOb=_iY(this._iy); var _iOo=_iu(_iOb); if (_ii0("kgrRow",_iQ(_iOo))>-1){return new GridRow(_iOo.id); }return null; } ,getColumn:function (){var _iOo=this.getRow(); var _iIo=this._iy.replace(_iOo._iy+"_",""); return new GridColumn(_iIo); } ,getData:function (){var _iOo=this.getRow(); if (_iO(_iOo)){var _iOb=_iY(this._iy); var _iof=this.getColumn(); var _iop=_iOo.getDataItem(); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _iOp=_ilg[_iof._iy]["Name"]; if (_iO(_iOp)){return _iop[_iOp]; }}return null; } ,_ilp:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); _ilb._iIb("OnCellMouseOver", { "Cell": this,"Event":_if } ); } ,_iip:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); _ilb._iIb("OnCellMouseOut", { "Cell": this,"Event":_if } ); } ,_iIp:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); _ilb._iIb("OnCellClick", { "Cell": this,"Event":_if } ); }};function _ioq(_if){ (new GridCell(this.id))._ilp(_if); }function _iOq(_if){ (new GridCell(this.id))._iip(_if); }function _ilq(_if){ (new GridCell(this.id))._iIp(_if); }function GridRow(_iy){ this._iy=_iy; this.id=_iy; }GridRow.prototype= {getDataItem:function (){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _iop=new Array(); for (var i in _ilg[this._iy]["DataItem"]){if (typeof _ilg[this._iy]["DataItem"][i]!="function"){_iop[i]=unescape(_ilg[this._iy]["DataItem"][i]); }}return _iop; } ,getElement:function (){return _iY(this._iy); } ,del:function (){_ilb=_iib(_iY(this._iy)); if (_ilb._iIb("OnBeforeRowDelete", { "Row": this } )){_ilb._ioc(this._iy,"Delete", {} ); _ilb._iOc("OnRowDelete", { "Row": this } ); }} ,startEdit:function (){if (_is())return; _ilb=_iib(_iY(this._iy)); if (_ilb._iIb("OnBeforeRowStartEdit", { "Row": this } )){_ilb._ioc(this._iy,"StartEdit", {} ); _ilb._iOc("OnRowStartEdit", { "Row": this } ); }} ,cancelEdit:function (){_ilb=_iib(_iY(this._iy)); if (_ilb._iIb("OnBeforeRowCancelEdit", { "Row": this } )){_ilb._ioc(this._iy,"CancelEdit", {} ); _ilb._iOc("OnRowCancelEdit", { "Row": this } ); }} ,confirmEdit:function (){if (_is())return; _ilb=_iib(_iY(this._iy)); var _iiq=new Array(); var _ilg=_ilb._iig(); _iog=_iOg(_iY(this._iy)); var _iIq=_iog.getColumns(); if (_ilb._iIb("OnBeforeRowConfirmEdit", { "Row": this } )){_ilb._ioc(this._iy,"ConfirmEdit", {} ); _ilb._iOc("OnRowConfirmEdit", { "Row": this } ); }} ,getCells:function (){var _iOb=_iY(this._iy); var _ior=_iw("td","kgrCell",_iOb); var _iOr=new Array(); for (var i=0; i<_ior.length; i++){_iOr.push(new GridCell(_ior[i].id)); }return _iOr; } ,select:function (){if (!this.isSelected()){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _iog=_iOg(_iOb); var _ilg=_ilb._iig(); if (!_ilb._iIb("OnBeforeRowSelect", { "Row": this } ))return; _iM(_iOb,"kgrRowSelected"); _ilg[this._iy]["Selected"]= true; _ilb._ilr(_ilg); _iir=_iw("input","kgrSelectSingleRow",_iOb); for (var i=0; i<_iir.length; i++){_iir[i].checked= true; }_iog._iIr(); _ilb._iIb("OnRowSelect", { "Row": this } ); }} ,deselect:function (){if (this.isSelected()){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _iog=_iOg(_iOb); var _ilg=_ilb._iig(); if (!_ilb._iIb("OnBeforeRowDeselect", { "Row": this } ))return; _iL(_iOb,"kgrRowSelected"); _ilg[this._iy]["Selected"]= false; _ilb._ilr(_ilg); _iir=_iw("input","kgrSelectSingleRow",_iOb); for (var i=0; i<_iir.length; i++){_iir[i].checked= false; }_iog._iIr(); _ilb._iIb("OnRowDeselect", { "Row": this } ); }} ,expand:function (){if (_is())return; _ilb=_iib(_iY(this._iy)); if (!_ilb._iIb("OnBeforeDetailTablesExpand", { "Row": this } ))return; _ilb._ioc(this._iy,"Expand", {} ); _ilb._iOc("OnDetailTablesExpand", { "Row": this } ); } ,collapse:function (){if (_is())return; _ilb=_iib(_iY(this._iy)); if (!_ilb._iIb("OnBeforeDetailTableCollapse", { "Row": this } ))return; _ilb._ioc(this._iy,"Collapse", {} ); _ilb._iOc("OnDetailTableCollapse", { "Row": this } ); } ,getDetailTables:function (){if (_is())return; var _iOb=_iY(this._iy); var _ios=_iU(_iOb); var _iOs=new Array(); if (_iO(_ios)){_ils=_iw("div","kgrTableView",_ios); for (var i=0; i<_ils.length; i++){_iog=new GridTableView(_ils[i].id); _iOs.push(_iog); }}return _iOs; } ,isSelected:function (){var _iis=_iY(this._iy); return (_ii0("kgrRowSelected",_iQ(_iis))>-1); } ,isEditing:function (){var _iis=_iY(this._iy); return (_ii0("kgrRowEdit",_iQ(_iis))>-1); } ,setHeight:function (_iIs){} ,_iot:function (_if){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); if (_ilg[_iog._iy]["AllowHovering"]){_iM(_iOb,"kgrRowOver"); }_ilb._iIb("OnRowMouseOver", { "Row": this,"Event":_if } ); } ,_iOt:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); _iL(_iOb,"kgrRowOver"); _ilb._iIb("OnRowMouseOut", { "Row": this,"Event":_if } ); } ,_ilt:function (_if){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); _ilb._iIb("OnRowClick", { "Row": this,"Event":_if } ); if (_ilg[_iog._iy]["AllowSelecting"]){if (this.isSelected()){ this.deselect(); }else {if (!_ilg[_iog._iy]["AllowMultiSelecting"]){_iog.deselectAllRows(); } this.select(); }}} ,_iit:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); _ilb._iIb("OnRowDoubleClick", { "Row": this,"Event":_if } ); }};function GridColumn(_iy){ this._iy=_iy; this.id=_iy; }GridColumn.prototype= {getFooterText:function (){var _iIt=_iY(this._iy+"_ft"); if (_iO(_iIt)){var _iou=_iE(_iIt,2); if (_iO(_iou)){return _iou.innerHTML; }}return ""; } ,getElement:function (){return _iY(this._iy); } ,setFooterText:function (_iOu){var _iIt=_iY(this._iy+"_ft"); if (_iO(_iIt)){var _iou=_iE(_iIt,2); if (_iO(_iou)){_iou.innerHTML=_iOu; }}} ,setVisible:function (_iIi){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _ilu=_ilg[_iog._iy]["RowsCount"]; var _iiu=_iY(this._iy+"_hd"); var _iIu=_iY(this._iy+"_ft"); var _iov=_iY(this._iy+"_flt"); var _iO5=_il5(); if (_iO5!="ie7" && _iO5!="ie6"){for (var i=0; i<_ilu; i++){var _iOv=_iY(_iog._iy+"_r"+i+"_"+this._iy); if (_iIi){_iL(_iOv,"kgrHidden"); }else {_iM(_iOv,"kgrHidden"); }}}var _ilv=document.getElementsByName(this._iy); if (_iIi){for (var i=0; i<_ilv.length; i++){_iL(_ilv[i],"kgrHidden"); }if (_iO5!="ie7" && _iO5!="ie6"){if (_iO(_iiu))_iL(_iiu,"kgrHidden"); if (_iO(_iIu))_iL(_iIu,"kgrHidden"); if (_iO(_iov))_iL(_iov,"kgrHidden"); }}else {for (var i=0; i<_ilv.length; i++){_iM(_ilv[i],"kgrHidden"); }if (_iO5!="ie7" && _iO5!="ie6"){if (_iO(_iiu))_iM(_iiu,"kgrHidden"); if (_iO(_iIu))_iM(_iIu,"kgrHidden"); if (_iO(_iov))_iM(_iov,"kgrHidden"); }}_ilg[this._iy]["Visible"]=_iIi; _ilb._ilr(_ilg); } ,setWidth:function (_iiv){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _iIv=_iY(_iog._iy); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _iow=_ilg[_iog._iy]["AllowScrolling"]; var _iOw=_ilg[_ilb._iy]["ClientSettings"]["Resizing"]["ResizeGridOnColumnResize"]; if (_iOw || _iow){var _ilw=(_ii0("px",_iOb.style.width)<0)?_iOb.offsetWidth:_ix(_iOb); var _iiw=document.getElementsByName(_iOb.id); for (var i=0; i<_iiw.length; i++){_iiw[i].style.width=_iiv; }var _iIw=_iY(this._iy+"_hd"); var _iox=_iY(this._iy+"_ft"); if (_iO(_iIw)){_iIw.style.width=_iiv; }if (_iO(_iox)){_iox.style.width=_iiv; }if (_il5()=="safari" || _il5()=="chrome"){var _iOx=_iog.getRows(); if (_iOx.length>0){var _iOv=_iY(_iOx[0]._iy+"_"+this._iy); _ilw=(_ii0("px",_iOv.style.width)<0)?_iOv.offsetWidth:_ix(_iOv); _iOv.style.width=_iiv; }}var _ilx=parseInt(_iiv)-_ilw; if (_iow){_iog._iix(_ilx); _ilg=_ilb._iig(); }else {if (_ii0("%",_iiv)<0){var _iIx=(_ii0("px",_iIv.style.width)<0)?_iIv.offsetWidth:_ix(_iIv); var _ioy=_iIx+_ilx; _iog.setWidth(_ioy+"px"); _ilg=_ilb._iig(); }}_ilg[_iOb.id]["Width"]=_iiv; }else {var _iT=_iu(_iOb); if (_iOb==_iT.lastChild){return; }var _iiw=document.getElementsByName(_iOb.id); for (var i=0; i<_iiw.length; i++){_iiw[i].style.width=_iiv; }var _iIw=_iY(this._iy+"_hd"); var _iox=_iY(this._iy+"_ft"); if (_iO(_iIw)){_iIw.style.width=_iiv; }if (_iO(_iox)){_iox.style.width=_iiv; }_ilg[_iOb.id]["Width"]=_iiv; var _iOy=_iOb.nextSibling; while (_iO(_iOy)){var _iiw=document.getElementsByName(_iOy.id); for (var i=0; i<_iiw.length; i++){_iiw[i].style.width=""; }var _ily=_iY(_iOy.id+"_hd"); var _iiy=_iY(_iOy.id+"_ft"); if (_iO(_ily)){_ily.style.width=""; }if (_iO(_iiy)){_iiy.style.width=""; }_ilg[_iOy.id]["Width"]=""; _iOy=_iOy.nextSibling; }}_ilb._ilr(_ilg); } ,sort:function (_iIy){if (_is())return; var _ilb=_iib(_iY(this._iy)); if (!_ilb._iIb("OnBeforeColumnSort", { "Column": this,"Order":_iIy } ))return; _ilb._ioc(this._iy,"Sort", { "Sort":_iIy } ); _ilb._iOc("OnColumnSort", { "Column": this,"Order":_iIy } ); } ,filter:function (_ioz,_iOz,_ilz){if (_is())return; var _ilb=_iib(_iY(this._iy)); if (!_ilb._iIb("OnBeforeColumnFilter", { "Column": this,"Exp":_ioz,"Value":_iOz } ))return; _ilb._ioc(this._iy,"Filter", { "Filter":{ "Exp":_ioz,"Value": (_iOz)?escape(_iOz):_iOz } ,"Post":_ilz } ); _ilb._iOc("OnColumnFilter", { "Column": this,"Exp":_ioz,"Value":_iOz } ); } ,put_to_group:function (_iiz){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); if (!_ilb._iIb("OnBeforeColumnGroup", { "Column": this,"Position":_iiz } ))return false; _ilb._ioc(this._iy,"Group", { "Position":_iiz } ); _ilb._iOc("OnColumnGroup", { "Column": this,"Position":_iiz } ); return true; } ,change_group_order:function (_iiz){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); _iog.change_group_order(_ilg[this._iy]["Name"],_iiz); } ,remove_group:function (){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); if (!_ilb._iIb("OnBeforeColumnRemoveGroup", { "Column": this } ))return false; _ilb._ioc(this._iy,"UnGroup", {} ); _ilb._iOc("OnColumnRemoveGroup", { "Column": this } ); return true; } ,isVisible:function (){var _iOb=_iY(this._iy); return (_ii0("kgrHidden",_iQ(_iOb))<0); } ,_iIz:function (){var _iOb=_iY(this._iy); return (_ii0("kgrResizable",_iQ(_iOb))>-1); } ,_io10:function (){var _iOb=_iY(this._iy); return (_ii0("kgrGroupable",_iQ(_iOb))>-1); } ,_iO10:function (_if){var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); var _ilb=_iib(_iOb); if (this._iIz() && !_il10){_ii10=null; _iY(_iog._iy).style.cursor=""; _ig(document,"mousemove",_iI10, false); }if (this._io10() && !_io11){_iO11=null; _il11= true; }_ilb._iIb("OnColumnMouseOut", { "Column": this,"Event":_if } ); } ,_ii11:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); if (this._iIz() && !_il10){_ii10=this._iy; _il(document,"mousemove",_iI10, false); }if (this._io10() && !_io11){_iO11=this._iy; }_ilb._iIb("OnColumnMouseOver", { "Column": this,"Event":_if } ); } ,_iI11:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); _ilb._iIb("OnColumnClick", { "Column": this,"Event":_if } ); } ,_io12:function (_if){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); _ilb._iIb("OnColumnDblClick", { "Column": this,"Event":_if } ); } ,_iO12:function (_if){if (this._iIz()){var _ion=_io1(_if); if (!_il10){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _il12=_iY(this._iy+"_hd"); var _ii12=_iO4(_il12); var _iI12=_ii12._iI4; var _io13=_ii12._top; var _iO13=_il12.offsetWidth; var _il13=_il12.offsetHeight; if ((_ion._ii1>_io13 && _ion._ii1<_io13+_il13) && (_ion._il1<_iI12+_iO13 && _ion._il1>_iI12+_iO13-5)){if (!_ilb._iIb("OnBeforeColumnResize", { "Column": this } ))return; _il10= true; _ii13=_ion._il1; this.setWidth(_iO13+"px"); _il(document,"mouseup",_iI13, false); return; }}}if (this._io10()){_io11= true; _iO11=this._iy; _il(document,"mousemove",_io14, false); _il(document,"mouseup",_iO14, false); var _iog=_iOg(_iY(this._iy)); var _il14=_iog._ii14(); _il14._iOd(); }} ,_iI14:function (_if){var _io15=_iY(this._iy+"_hd"); var _iO15=_iY(this._iy+"_hd_dummy"); var _ilb=_iib(_io15); var _ion=_io1(_if); if (!_iO(_iO15)){var _iOn=_iY(_ilb._iy); var _iv=_iQ(_iOn).replace("KGR","DummyHeader"); _iO15=_iI("div",document.body); _iO15.className=_iv; _iO15.style.position="absolute"; _iO15.style.width=_io15.offsetWidth+"px"; _iO15.style.height=_io15.offsetHeight+"px"; _iO15.innerHTML=_io15.innerHTML; _iO15.id=this._iy+"_hd_dummy"; }_iO15.style.left=(_ion._il1+1)+"px"; _iO15.style.top=(_ion._ii1+1)+"px"; } ,_il15:function (_if){_ig(document,"mousemove",_io14, false); _ig(document,"mouseup",_iO14, false); var _iO15=_iY(this._iy+"_hd_dummy"); if (_iO(_iO15)){document.body.removeChild(_iO15); }_iO11=null; _io11= false; var _iog=_iOg(_iY(this._iy)); var _il14=_iog._ii14(); _il14._ioe(this._iy); } ,_ii15:function (_if){if (this._iIz()){var _ion=_io1(_if); if (!_il10){var _il12=_iY(this._iy+"_hd"); var _ii12=_iO4(_il12); var _iI12=_ii12._iI4; var _io13=_ii12._top; var _iO13=_il12.offsetWidth; var _il13=_il12.offsetHeight; var _iOb=_iY(this._iy); var _iog=_iOg(_iOb); if ((_ion._ii1>_io13 && _ion._ii1<_io13+_il13) && (_ion._il1<_iI12+_iO13 && _ion._il1>_iI12+_iO13-7)){_iY(_iog._iy).style.cursor="w-resize"; }else {_iY(_iog._iy).style.cursor=""; }}else {_iOb=_iY(this._iy); var _iI15=_ix(_iOb)+(_ion._il1-_ii13); _iI15=(_iI15<0)?0:_iI15; this.setWidth(_iI15+"px"); _ii13=_ion._il1; }}} ,_io16:function (_if){if (this._iIz()){if (_il10){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _iog=_iOg(_iOb); var _il12=_iY(this._iy+"_hd"); _ig(document,"mouseup",_iI13, false); _iY(_iog._iy).style.cursor=""; _il10= false; _ilb._iIb("OnColumnResize", { "Column": this } ); }}}};function GridTableView(_iy){ this._iy=_iy; this.id=_iy; }GridTableView.prototype= {_iic:function (_ilb){var _ilg=_ilb._iig(); var _iOb=_iY(this._iy); var _iow=_ilg[this._iy]["AllowScrolling"]; var _iO16=_ilg[this._iy]["VirtualScrolling"]; var _il16=_ilg[this._iy]["FrozenColumnsCount"]; var _il14=new _ilc(this._iy+"_gp"); _il14._iic(); if (_iow){var _ii16=_iu(_iY(this._iy+"_header")); var _iI16=_iu(_iY(this._iy+"_data")); var _io17=_iu(_iY(this._iy+"_footer")); var _iO17=_iY(this._iy+"_data"); if (_iI16.offsetWidth>=_iI16.scrollWidth){_iI16.style.overflowX="hidden"; }if (_il16>0){_iI16.style.overflowX="hidden"; var _il17=_iI("div",_iOb); _iOb.insertBefore(_il17,_io17); _il17.id=this._iy+"_frozen_scroller"; _iq(_il17,"kgrFrozenScroller"); var _ii17=_iI("div",_il17); _iX(_ii17,_iO17.offsetWidth); }if (_iOb.style.height!=""){var _iI17=_iW(_iOb); var _io18=0; for (var i=0; i<_iOb.childNodes.length; i++)if (_iOb.childNodes[i].nodeName=="DIV" && _iQ(_iOb.childNodes[i])!="kgrPartData"){if (!isNaN(_iOb.childNodes[i].offsetHeight)){_io18+=_iOb.childNodes[i].offsetHeight; }}var _iO18=_iI17-_io18; _iZ(_iI16,_iO18); _ilg[this._iy]["PartDataHeight"]=_iO18; }if (_ii0("ie",_il5())>-1){_il(window,"load",eval("__=function(){_itch(\""+this._iy+"\");}"), false); }_iI16.scrollTop=_ilg[this._iy]["scrollTop"]; if (_il16>0){_il(_il17,"scroll",_il18, false); _il17.scrollLeft=_ilg[this._iy]["scrollLeft"]-1; }else {_io17.scrollLeft=_ii16.scrollLeft=_iI16.scrollLeft=_ilg[this._iy]["scrollLeft"]; }_il(_iI16,"scroll",_il18, false); _ilb._ilr(_ilg); var _ii18=_iw("div","kgrEditForm",_iOb); for (var i=0; i<_ii18.length; i++){if (!isNaN(_iOb.offsetWidth)){_iX(_ii18[i],_iOb.offsetWidth-((_iow)?26: 0)); }}var _iI18=_iw("div","kgrInsertForm",_iOb); for (var i=0; i<_iI18.length; i++){if (!isNaN(_iOb.offsetWidth)){_iX(_iI18[i],_iOb.offsetWidth-((_iow)?26: 0)); }}if (_iO16){var _io19=_ilg[this._iy+"_pg"]["_TotalPages"]; var _iO19=_ilg[this._iy+"_pg"]["PageIndex"]; var _ilu=_ilg[this._iy]["RowsCount"]; var _il19=_ilg[this._iy+"_pg"]["_TotalRows"]; var _ii19=_iO17.offsetHeight; var _iI19=_iI("div",_iI16); var _io1a=_iI("div",_iI16); var _iO1a=_iI16.offsetHeight; _iI16.insertBefore(_iI19,_iO17); if (_iO19<_io19-1){_iZ(_iI19,(_iO19)*_ii19); _iZ(_io1a,(_io19-_iO19-1)*_ii19); _iI16.scrollTop=(_iO19)*_ii19; }else {_iZ(_iI19,(_ii19*(_il19-_ilu)/_ilu)); if (_ii19<_iO1a){_iZ(_io1a,_iO1a-_ii19-17); }_iI16.scrollTop=(_ii19*(_il19-_ilu)/_ilu); }}}} ,_il1a:function (){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _iOb=_iY(this._iy); var _iow=_ilg[this._iy]["AllowScrolling"]; if (_iow){if (_iOb.style.height!=""){var _iI16=_iu(_iY(this._iy+"_data")); var _iI17=_iW(_iOb); var _io18=0; for (var i=0; i<_iOb.childNodes.length; i++)if (_iOb.childNodes[i].nodeName=="DIV" && _iQ(_iOb.childNodes[i])!="kgrPartData"){if (!isNaN(_iOb.childNodes[i].offsetHeight)){_io18+=_iOb.childNodes[i].offsetHeight; }}var _iO18=_iI17-_io18; _iZ(_iI16,_iO18); _ilg[this._iy]["PartDataHeight"]=_iO18; _ilb._ilr(_ilg); }}} ,selectAllRows:function (){var _ii1a=this.getRows(); for (var i=0; i<_ii1a.length; i++){_ii1a[i].select(); }} ,deselectAllRows:function (){var _ii1a=this.getRows(); for (var i=0; i<_ii1a.length; i++){_ii1a[i].deselect(); }} ,_iIr:function (){var _iOb=_iY(this._iy); var _iI1a=_iw("input","kgrSelectAllRows",_iOb); if (_iI1a.length>0){var _ii1a=this.getRows(); var _io1b= true; for (var i=0; i<_ii1a.length; i++){if (!_ii1a[i].isSelected())_io1b= false; }for (var i=0; i<_iI1a.length; i++){_iI1a[i].checked=_io1b; }}} ,setWidth:function (_iiv){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _iow=_ilg[this._iy]["AllowScrolling"]; _iOb.style.width=_iiv; if (!_iow){var _iO1b=_iE(_iOb); _iO1b.style.width=(_ii0("%",_iiv)<0)?_iiv: "100%"; }_ilg[this._iy]["Width"]=_iiv; _ilb._ilr(_ilg); } ,_iix:function (_ilx){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _il1b=_iY(this._iy+"_header"); var _ii1b=_iY(this._iy+"_data"); var _iI1b=_iY(this._iy+"_footer"); var _iiv=0; if (_iO(_ii1b)){_iiv=_ii1b.offsetWidth+_ilx; _iX(_ii1b,_iiv); }if (_iO(_il1b))_iX(_il1b,_iiv); if (_iO(_iI1b))_iX(_iI1b,_iiv); _ilg[this._iy]["TablePartWidth"]=_iiv+"px"; _ilb._ilr(_ilg); } ,getName:function (){var _ilb=_iib(_iY(this._iy)); var _ilg=_ilb._iig(); return _ilg[this._iy]["Name"]; } ,getRows:function (){var _iOx=new Array(); var _iOo=_iY(this._iy+"_r0"); while (_iO(_iOo)){if (_ii0("kgrRow",_iQ(_iOo))>-1){_iOx.push(new GridRow(_iOo.id)); }_iOo=_iU(_iOo); }return _iOx; } ,getColumns:function (){var _io1c=new Array(); var _iO1c=_iY(this._iy+"_c0"); while (_iO(_iO1c)){_io1c.push(new GridColumn(_iO1c.id)); _iO1c=_iU(_iO1c); }return _io1c; } ,getSelectedRows:function (){var _il1c=new Array(); var _iOo=_iY(this._iy+"_r0"); while (_iO(_iOo)){if (_ii0("kgrRowSelected",_iQ(_iOo))>-1){_il1c.push(new GridRow(_iOo.id)); }_iOo=_iU(_iOo); }return _il1c; } ,goPage:function (_iO19){var _ilb=_iib(_iY(this._iy)); if (!_ilb._iIb("OnBeforePageChange", { "TableView": this,"PageIndex":_iO19 } ))return; _ilb._ioc(this._iy+"_pg","GoPage", { "PageIndex":_iO19 } ); _ilb._iOc("OnPageChange", { "TableView": this,"PageIndex":_iO19 } ); } ,changePageSize:function (_ii1c){var _ilb=_iib(_iY(this._iy)); _ilb._ioc(this._iy+"_pg","ChangePageSize", { "PageSize":_ii1c } ); } ,refresh:function (){var _ilb=_iib(_iY(this._iy)); _ilb._ioc(this._iy,"Refresh", {} ); } ,getPageIndex:function (){var _ilb=_iib(_iY(this._iy)); var _ilg=_ilb._iig(); return _ilg[this._iy+"_pg"]["PageIndex"]; } ,startInsert:function (){if (_is())return; var _ilb=_iib(_iY(this._iy)); if (_ilb._iIb("OnBeforeStartInsert", { "TableView": this } )){_ilb._ioc(this._iy,"StartInsert", {} ); _ilb._iOc("OnStartInsert", { "TableView": this } ); }} ,confirmInsert:function (){if (_is())return; var _ilb=_iib(_iY(this._iy)); if (_ilb._iIb("OnBeforeConfirmInsert", { "TableView": this } )){_ilb._ioc(this._iy,"ConfirmInsert", {} ); _ilb._iOc("OnConfirmInsert", { "TableView": this } ); }} ,cancelInsert:function (){var _ilb=_iib(_iY(this._iy)); if (_ilb._iIb("OnBeforeCancelInsert", { "TableView": this } )){_ilb._ioc(this._iy,"CancelInsert", {} ); _ilb._iOc("OnCancelInsert", { "TableView": this } ); }} ,add_group:function (_iIg,_iiz){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); if (!_ilb._iIb("OnBeforeAddGroup", { "GroupField":_iIg,"Position":_iiz } ))return; _ilb._ioc(this._iy,"AddGroup", { "GroupField":_iIg,"Position":_iiz } ); _ilb._iOc("OnAddGroup", { "GroupField":_iIg,"Position":_iiz } ); } ,change_group_order:function (_iIg,_iiz){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); if (!_ilb._iIb("OnBeforeChangeGroupOrder", { "GroupField":_iIg,"Position":_iiz } ))return false; _ilb._ioc(this._iy,"ChangeGroupOrder", { "GroupField":_iIg,"Position":_iiz } ); _ilb._iOc("OnChangeGroupOrder", { "GroupField":_iIg,"Position":_iiz } ); return true; } ,remove_group:function (_iIg){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); if (!_ilb._iIb("OnBeforeRemoveGroup", { "GroupField":_iIg } ))return false; _ilb._ioc(this._iy,"RemoveGroup", { "GroupField":_iIg } ); _ilb._iOc("OnRemoveGroup", { "GroupField":_iIg } ); return true; } ,_ii14:function (){return (new _ilc(this._iy+"_gp")); } ,get_group_list:function (){var _iOb=_iY(this._iy); var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _iI1c=_ilg[this._iy]["GroupSize"]; var _io1d=new Array(); for (var i=0; i<_iI1c; i++){_io1d.push(_ilg[this._iy+"_gm"+i]["GroupField"]); }return _io1d; } ,excuteDelete:function (_iop){} ,excuteUpdate:function (_iop){} ,excuteInsert:function (_iop){} ,_iO1d:function (_if){var _ii16=_iu(_iY(this._iy+"_header")); var _iI16=_iu(_iY(this._iy+"_data")); var _io17=_iu(_iY(this._iy+"_footer")); var _ilb=_iib(_iY(this._iy)); var _ilg=_ilb._iig(); var _il16=_ilg[this._iy]["FrozenColumnsCount"]; if (_il16>0){var _il17=_iY(this._iy+"_frozen_scroller"); if (_ilg[this._iy]["scrollLeft"]!=_il17.scrollLeft){var _ii17=_iE(_il17); var _il1d=_ix(_ii17)-_il17.offsetWidth; var _iIq=this.getColumns(); var _ii1d=_iIq.length-_il16-1; if (_ii1d>0){var _iI1d=(_il1d)/_ii1d; var _io1e=Math.floor(_il17.scrollLeft/_iI1d); for (var i=0; i<_iIq.length-_il16-1; i++){var _iO1e=(i<_io1e)? false : true; if (_iIq[_il16+i].isVisible()!=_iO1e){_iIq[_il16+i].setVisible(_iO1e); }}_il1e=_iY(this._iy+"_header"); _iO17=_iY(this._iy+"_data"); _ii1e=_iY(this._iy+"_footer"); _il1e.style.tableLayout="auto"; _iO17.style.tableLayout="auto"; _ii1e.style.tableLayout="auto"; _il1e.style.tableLayout="fixed"; _iO17.style.tableLayout="fixed"; _ii1e.style.tableLayout="fixed"; if (_ii0("ie",_il5())>-1){if (_iY(_iIq[_iIq.length-1].id).style.width!="100%"){_iIq[_iIq.length-1].setWidth("100%"); }}}}}if (_ilg[this._iy]["VirtualScrolling"] && _ilg[this._iy]["scrollTop"]!=_iI16.scrollTop){if (_iI1e){clearTimeout(_iI1e); }_io1f=this._iy; _iI1e=setTimeout(_iO1f,750); var _io19=_ilg[this._iy+"_pg"]["_TotalPages"]; var _iO19=_ilg[this._iy+"_pg"]["PageIndex"]; var _ilu=_ilg[this._iy]["RowsCount"]; var _il19=_ilg[this._iy+"_pg"]["_TotalRows"]; var _ii1c=_ilg[this._iy+"_pg"]["PageSize"]; var _iO17=_iY(this._iy+"_data"); var _ii19=_iO17.offsetHeight; var _iO1a=_iI16.offsetHeight; var _il1f=_iI16.scrollTop; var _ii1f=_iO19; if (_iO19<_io19-1){if (_il1f<(_ii19*_iO19)){_ii1f=Math.floor((_il1f+60)/_ii19); }else {_ii1f=Math.floor((_il1f+(_iO1a-60))/_ii19); }}else {if (_il1f<(_ii19*(_il19-_ilu)/_ilu)){_ii1f=Math.floor((_il1f+60)/(_ii19*_ii1c/_ilu)); }} this._iI1f(1); var _io1g=_iY(this._iy+"_scrolling_indicator"); var _iO1g="Page {page_number}"; _io1g.innerHTML=_iO1g.replace("{page_number}",_ii1f+1); _io1g.style.right="17px"; _io1g.style.top=(_ii16.offsetHeight+((_iO1a-48)*(_iO1a-48)/(2*_iI16.scrollHeight))+Math.round(_il1f*(_iO1a-48)/_iI16.scrollHeight))+"px"; if (_il1g){clearTimeout(_il1g); }_il1g=setTimeout(_ii1g,2000); }_io17.scrollLeft=_ii16.scrollLeft=_iI16.scrollLeft; if (_ilg[_ilb._iy]["ClientSettings"]["Scrolling"]["SaveScrollingPosition"]){_ilg[this._iy]["scrollTop"]=_iI16.scrollTop; _ilg[this._iy]["scrollLeft"]=(_il16>0)?_il17.scrollLeft:_iI16.scrollLeft; _ilb._ilr(_ilg); }} ,_iI1g:function (){var _iI16=_iu(_iY(this._iy+"_data")); var _ilb=_iib(_iY(this._iy)); var _ilg=_ilb._iig(); var _io19=_ilg[this._iy+"_pg"]["_TotalPages"]; var _iO19=_ilg[this._iy+"_pg"]["PageIndex"]; var _ilu=_ilg[this._iy]["RowsCount"]; var _il19=_ilg[this._iy+"_pg"]["_TotalRows"]; var _ii1c=_ilg[this._iy+"_pg"]["PageSize"]; var _iO17=_iY(this._iy+"_data"); var _ii19=_iO17.offsetHeight; var _iO1a=_iI16.offsetHeight; var _il1f=_iI16.scrollTop; var _ii1f=_iO19; if (_iO19<_io19-1){if (_il1f<(_ii19*_iO19)){_ii1f=Math.floor((_il1f+60)/_ii19); }else {_ii1f=Math.floor((_il1f+(_iO1a-60))/_ii19); }}else {if (_il1f<(_ii19*(_il19-_ilu)/_ilu)){_ii1f=Math.floor((_il1f+60)/(_ii19*_ii1c/_ilu)); }}if (_ii1f!=_iO19){ this.goPage(_ii1f); _ilb.commit(); }} ,_iI1f:function (_iIi){var _iI16=_iu(_iY(this._iy+"_data")); var _io1g=_iY(this._iy+"_scrolling_indicator"); if (!_io1g){_io1g=_iI("div",_iI16); _io1g.id=this._iy+"_scrolling_indicator"; _iq(_io1g,"kgrScrollingIndicator"); }_iR(_io1g,_iIi); }};var _iI1e; var _il1g; var _io1f; function _iO1f(){if (_iO(_io1f)){ (new GridTableView(_io1f))._iI1g(); }}function _ii1g(){if (_iO(_io1f)){ (new GridTableView(_io1f))._iI1f(0); }}function KoolGrid(_iy,_io1h,_iO1h){ this._iy=_iy; this.id=_iy; this._io1h=_io1h; this._iO1h=_iO1h; this._il1h=new Array(); this._iic(); }KoolGrid.prototype= {_iic:function (){var _iOb=_iY(this._iy); var _ii1h=_iY(this._iy+"_cmd"); _ii1h.value=""; if (_il5()=="firefox" && this._io1h){var _iiv=_iOb.style.width; if (_ii0("%",_iiv)>-1){var _iI1h=_iY(this._iy+"_updatepanel"); _iI1h.style.width=_iiv; _iOb.style.width="100%"; }}var _io1i=_iw("th","kgrHeader",_iOb); for (var i=0; i<_io1i.length; i++){var _il12=_io1i[i]; _il(_il12,"mouseover",_iO1i, false); _il(_il12,"mouseout",_il1i, false); _il(_il12,"mousedown",_ii1i, false); _il(_il12,"click",_iI1i, false); _il(_il12,"dblclick",_io1j, false); _il12.onselectstart=_ili; _il12.ondragstart=_ili; _il12.onmousedown=_ili; _il12.style.MozUserSelect="none"; }var _ii1a=_iw("tr","kgrRow",_iOb); for (var i=0; i<_ii1a.length; i++){_il(_ii1a[i],"mouseover",_iO1j, false); _il(_ii1a[i],"mouseout",_il1j, false); _il(_ii1a[i],"click",_ii1j, false); _il(_ii1a[i],"dblclick",_iI1j, false); var _ior=_iw("td","kgrCell",_ii1a[i]); for (var _io1k=0; _io1k<_ior.length; _io1k++){_il(_ior[_io1k],"mouseover",_ioq, false); _il(_ior[_io1k],"mouseout",_iOq, false); _il(_ior[_io1k],"click",_ilq, false); }}var _iO1k=["span","div"]; for (var _io1k=0; _io1k<_iO1k.length; _io1k++){var _il1k=_iw(_iO1k[_io1k],"kgrECap",_iOb); for (var i=0; i<_il1k.length; i++){_il(_il1k[i],"click",_iF, false); }}var _ils=_iw("div","kgrTableView",_iOb); for (var i=0; i<_ils.length; i++){ (new GridTableView(_ils[i].id))._iic(this ); }var _ii1k=_iw("input","kgrFiEnTr",_iOb); for (var i=0; i<_ii1k.length; i++){_il(_ii1k[i],"keypress",_iI1k, false); }var _io1l=_iw("input","kgrEnNoPo",_iOb); for (var i=0; i<_io1l.length; i++){_il(_io1l[i],"keypress",_iO1l, false); }if (_iO(_il1l[this._iy]) && _iO(_il1l[this._iy]["Focus"])){var _ii1l=_iY(_il1l[this._iy]["Focus"]); if (_iO(_ii1l)){try {_ii1l.focus(); }catch (_ii3){}}}var _iI1l=_iw("div","kgrInputFocus",_iOb); if (_iI1l.length>0){if (_ii0("kgrBlurGrid",_iQ(_iI1l[0]))>0){var _io1m=_iI("div",_iOb); _io1m.style.position="absolute"; _io1m.style.backgroundColor="white"; _io1m.style.opacity="0.6"; _io1m.style.filter="alpha(opacity=60)"; _io1m.style.left="0px"; _io1m.style.top="0px"; _iZ(_io1m,_iOb.scrollHeight); _iX(_io1m,_iOb.scrollWidth); var _iO1m=_iI("div",_iu(_iI1l[0])); var _il1m=_iI1l[0].offsetHeight; var _ii1m=_iI1l[0].offsetWidth; _iZ(_iO1m,_il1m); _iX(_iO1m,_ii1m); _iI1l[0].style.position="absolute"; _iI1l[0].style.zIndex="1000"; _iZ(_iI1l[0],_il1m-parseInt(_ii2(_iI1l[0],"padding-top"))-parseInt(_ii2(_iI1l[0],"padding-bottom"))); _iX(_iI1l[0],_ii1m-parseInt(_ii2(_iI1l[0],"padding-left"))-parseInt(_ii2(_iI1l[0],"padding-right"))); }else {var _iI1m=_iY(this._iy+"_mt"); _iI1m.style.display="none"; _iOb.appendChild(_iI1l[0]); }}var _ilg=this._iig(); var _io1n=_ilg[this._iy]["ClientSettings"]["ClientEvents"]; for (var _il0 in _io1n){if (typeof _io1n[_il0]!="function")if (eval("typeof "+_io1n[_il0]+" =='function'")){ this._il1h[_il0]=eval(_io1n[_il0]); }}if (!_iO(_il1l[this._iy])){try { this._iIb("OnInit", {} ); }catch (_ii3){}}try { this._iIb("OnLoad", {} ); }catch (_ii3){}if (_iO(_il1l[this._iy])){_iO1n=_il1l[this._iy]["PostLoadEvent"]; for (_il0 in _iO1n){if (typeof _iO1n[_il0]!="function"){try { this._iIb(_il0,_iO1n[_il0]); }catch (_ii3){}}}}_il1l[this._iy]= { "PostLoadEvent":{}} ; } ,_ioc:function (_iy,_il1n,_ii1n){var _ii1h=_iY(this._iy+"_cmd"); var _iI1n=new Object(); if (_ii1h.value!=""){_iI1n=eval("__="+_ii8(_ii1h.value)); }_iI1n[_iy]= { "Command":_il1n,"Args":_ii1n } ; _ii1h.value=_iIa(_io0(_iI1n)); } ,_iig:function (){var _io1o=_iY(this._iy+"_viewstate"); return eval("__="+_ii8(_io1o.value)); } ,_ilr:function (_ilg){var _io1o=_iY(this._iy+"_viewstate"); _io1o.value=_iIa(_io0(_ilg)); } ,getMasterTable:function (){return (new GridTableView(this._iy+"_mt")); } ,refresh:function (){ this._ioc(this._iy,"Refresh", {} ); } ,attachData:function (_il0,_iOz){if (this._io1h){var _iO1o=eval(this._iy+"_updatepanel"); _iO1o.attachData(_il0,_iOz); }} ,commit:function (){if (!this._iIb("OnBeforeGridCommit", {} ))return; if (this._io1h){var _iO1o=eval(this._iy+"_updatepanel"); _iO1o.update((this._iO1h!="")?this._iO1h:null); }else {var _il1o=_iY(this._iy); while (_il1o.nodeName!="FORM"){if (_il1o.nodeName=="BODY")return; _il1o=_iu(_il1o); }_il1o.submit(); }var _ii1o=_iw("div","kgrStatus",_iY(this._iy)); for (var i=0; i<_ii1o.length; i++){_iM(_ii1o[i],"kgrLoading"); } this._iOc("OnGridCommit", {} ); } ,_iIb:function (_il0,_iI1o){if (_is())return true; return (_iO(this._il1h[_il0]))?this._il1h[_il0](this,_iI1o): true; } ,_iOc:function (_il0,_iI1o){_il1l[this._iy]["PostLoadEvent"][_il0]=_iI1o; }};function _iib(_iOb){var _iOn=_iu(_iOb); while (_iOn.nodeName!="DIV" || _ii0("KGR",_iQ(_iOn))<0){_iOn=_iu(_iOn); if (_iOn.nodeName=="BODY")return null; }return eval(_iOn.id); }function _iOg(_iOb){var _io1p=_iu(_iOb); while (_ii0("kgrTableView",_iQ(_io1p))<0 && _ii0("kgrInsertForm",_iQ(_io1p))<0){_io1p=_iu(_io1p); }var _iy=_io1p.id; if (_ii0("kgrTableView",_iQ(_io1p))<0){_iy=_iy.replace("_nr_insertform",""); }return (new GridTableView(_iy)); }function _iO1p(_iOb){var _io1p=_iu(_iOb); while (_ii0("kgrRow",_iQ(_io1p))<0 && _ii0("kgrEditForm",_iQ(_io1p))<0){_io1p=_iu(_io1p); }var _iy=_io1p.id; if (_ii0("kgrRow",_iQ(_io1p))<0){_iy=_iy.replace("_editform",""); }return (new GridRow(_iy)); }function get_row(_iOb){return _iO1p(_iOb); }function get_tableview(_iOb){return _iOg(_iOb); }function get_grid(_iOb){return _iib(_iOb); }function grid_gopage(_iOb,_iO19){_iOg(_iOb).goPage(_iO19); _iib(_iOb).commit(); }function grid_pagesize_select_onchange(_iOb){var _ii1c=_iOb.options[_iOb.selectedIndex].value; _iOg(_iOb).changePageSize(_ii1c); _iib(_iOb).commit(); }function grid_delete(_iOb){var _ilb=_iib(_iOb); var _ilg=_ilb._iig(); var _il1p=_ilg[_ilb._iy]["ClientSettings"]["ClientMessages"]["DeleteConfirm"]; if (_il1p!=""){if (confirm(_il1p)){_iO1p(_iOb).del(); _iib(_iOb).commit(); }}else {_iO1p(_iOb).del(); _iib(_iOb).commit(); }}function grid_toggle_select(_iOb){if (_ii0("kgrSelectAllRows",_iQ(_iOb))>-1){var _iog=_iOg(_iOb); if (_iOb.checked){_iog.selectAllRows(); }else {_iog.deselectAllRows(); }}else if (_ii0("kgrSelectSingleRow",_iQ(_iOb))>-1){var _iOo=_iO1p(_iOb); if (_iOb.checked){_iOo.select(); }else {_iOo.deselect(); }}}function grid_edit(_iOb){_iO1p(_iOb).startEdit(); _iib(_iOb).commit(); }function grid_confirm_edit(_iOb){_iO1p(_iOb).confirmEdit(); _iib(_iOb).commit(); }function grid_cancel_edit(_iOb){_iO1p(_iOb).cancelEdit(); _iib(_iOb).commit(); }function grid_confirm_insert(_iOb){_iOg(_iOb).confirmInsert(); _iib(_iOb).commit(); }function grid_cancel_insert(_iOb){_iOg(_iOb).cancelInsert(); _iib(_iOb).commit(); }function grid_insert(_iOb){_iOg(_iOb).startInsert(); _iib(_iOb).commit(); }function grid_refresh(_iOb){var _ilb=_iib(_iOb); _ilb.refresh(); _ilb.commit(); }function tableview_refresh(_iOb){var _iog=_iOg(_iOb); _iog.refresh(); _iib(_iOb).commit(); }function grid_expand(_iOb){_iO1p(_iOb).expand(); _iib(_iOb).commit(); }function grid_collapse(_iOb){_iO1p(_iOb).collapse(); _iib(_iOb).commit(); }function grid_sort(_iy,_iIy){ (new GridColumn(_iy)).sort(_iIy); _iib(_iY(_iy)).commit(); }function grid_group_toogle(_iOb){var _iis=_iu(_iOb,3); var _ii1p=_iw("span","kgrExpand",_iis); if (_ii1p.length>0){ (new GridGroup(_iis.id)).collapse(); }else { (new GridGroup(_iis.id)).expand(); }_iib(_iOb).commit(); }function grid_groupitem_sort(_iI1p,_io1q){var _iO1q=_iY(_iI1p); var _ilb=_iib(_iO1q); _ilb._ioc(_iI1p,"Sort", { "Sort":_io1q } ); _ilb.commit(); }function grid_filter_trigger(_iIo,_iOb){var _ilb=_iib(_iOb); var _iof=new GridColumn(_iIo); if (_ii0("_filter_select",_iOb.id)>0){var _ioz=_iOb.options[_iOb.selectedIndex].value; _iof.filter(_ioz,null, true); _ilb.commit(); }else {var _il1q=_iY(_iIo+"_filter_select"); var _ioz=_il1q.options[_il1q.selectedIndex].value; if (_ioz!="No_Filter"){if (_iOb.nodeName=="INPUT" && _iOb.type=="text"){var _ilg=_ilb._iig(); var _ii1q=unescape(_ilg[_iIo]["Filter"]["Value"]); if (_iOb.value!=_ii1q){_iof.filter(_ioz,null, true); _ilb.commit(); }}else {_iof.filter(_ioz,null, true); _ilb.commit(); }}}}function _iI1k(_if){var _iI1q=_if.keyCode; if (_iI1q==13){var _ilb=_iib(this ); var _iIo=this.id.replace("_filter_input",""); _il1l[_ilb._iy]["Focus"]=this.id; grid_filter_trigger(_iIo,this ); return _iD(_if); }}function _iO1l(_if){if (_if.keyCode==13){return _iD(_if); }}var _ii10=null; var _il10= false; var _ii13=0; var _io11= false; var _iO11=null; var _iId=null; var _ioh=null; function _iO1i(_if){var _iy=this.id.replace("_hd",""); (new GridColumn(_iy))._ii11(_if); }function _il1i(_if){var _iy=this.id.replace("_hd",""); (new GridColumn(_iy))._iO10(_if); }function _iI1i(_if){var _iy=this.id.replace("_hd",""); (new GridColumn(_iy))._iI11(_if); }function _io1j(_if){var _iy=this.id.replace("_hd",""); (new GridColumn(_iy))._io12(_if); }function _ii1i(_if){var _iy=this.id.replace("_hd",""); (new GridColumn(_iy))._iO12(_if); return false; }function _iI13(_if){ (new GridColumn(_ii10))._io16(_if); }function _iI10(_if){ (new GridColumn(_ii10))._ii15(_if); }function _iO14(_if){ (new GridColumn(_iO11))._il15(_if); }function _io14(_if){ (new GridColumn(_iO11))._iI14(_if); }function _iO1j(_if){ (new GridRow(this.id))._iot(_if); }function _il1j(_if){ (new GridRow(this.id))._iOt(_if); }function _ii1j(_if){ (new GridRow(this.id))._ilt(_if); }function _iI1j(_if){ (new GridRow(this.id))._iit(_if); }function _il18(_if){_iog=_iOg(this ); _iog._iO1d(_if); }function _itch(_io1f){ (new GridTableView(_io1f))._il1a(); }function grid_on_datetimepicker_open(_iy){var _iOb=_iY(_iy+"_bound"); var _io1r=_iu(_iOb); var _iO1r=_iu(_io1r); var _iiv=_iO1r.offsetWidth; _io1r.style.width=_iiv+"px"; _iO1r.style.width=_iiv+"px"; _iM(_iO1r,"kgrDateTimePickerOpening"); if (_il5()!="firefox"){var _iog=_iOg(_iOb); var _il1r=_iu(_iO1r,2); var _ii1r=_iu(_iY(_iog._iy+"_data")); _io1r.style.left=(_io1r.offsetLeft-_ii1r.scrollLeft)+"px"; if (_iQ(_il1r)!="kgrIn"){_io1r.style.top=(_io1r.offsetTop-_ii1r.scrollTop)+"px"; }}}function grid_on_datetimepicker_close(_iy){var _iOb=_iY(_iy+"_bound"); var _io1r=_iu(_iOb); var _iO1r=_iu(_io1r); _iL(_iO1r,"kgrDateTimePickerOpening"); _io1r.style.width=_io1r.style.top=_io1r.style.left=""; _iO1r.style.width=""; }var _il1l=new Array(); if (typeof(__KGRInits)!="undefined" && _iO(__KGRInits)){for (var i=0; i<__KGRInits.length; i++){__KGRInits[i](); }} <?php _iO5();
    _ilo();
} if (!function_exists("money_format")) {

    function money_format($_ilp, $_iOp) {
        $_ilq = '/%((?:[\\^!\\-]|\\+|\\(|\\=.)*)([0-9]+)?' . '(?:#([0-9]+))?(?:\\.([0-9]+))?([in%])/';
        if (setlocale(LC_MONETARY, 0) == 'C') {
            setlocale(LC_MONETARY, '');
        } $_iOq = localeconv();
        preg_match_all($_ilq, $_ilp, $_ilr, _ils);
        foreach ($_ilr as $_iOs) {
            $value = floatval($_iOp);
            $_ilt = array('fillchar' => preg_match('/\\=(.)/', $_iOs[1], $_iOt) ? $_iOt[1] : ' ', 'nogroup' => preg_match('/\\^/', $_iOs[1]) > 0, 'usesignal' => preg_match('/\\+|\\(/', $_iOs[1], $_iOt) ? $_iOt[0] : '+', 'nosimbol' => preg_match('/\\!/', $_iOs[1]) > 0, 'isleft' => preg_match('/\\-/', $_iOs[1]) > 0);
            $_ilu = trim($_iOs[2]) ? (int) $_iOs[2] : 0;
            $_iOu = trim($_iOs[3]) ? (int) $_iOs[3] : 0;
            $_ilv = trim($_iOs[4]) ? (int) $_iOs[4] : $_iOq['int_frac_digits'];
            $_iOv = $_iOs[5];
            $_ilw = TRUE;
            if ($value < 0) {
                $_ilw = FALSE;
                $value *= -1;
            } $_iOw = $_ilw ? 'p' : 'n';
            $_ilx = $_iOx = $_ily = $_iOy = $_ilz = '';
            $_ilz = $_ilw ? $_iOq['positive_sign'] : $_iOq['negative_sign'];
            switch (TRUE) {
                case $_iOq["{$_iOw}_sign_posn"] == 1 && $_ilt['usesignal'] == '+': $_ilx = $_ilz;
                    break;
                case $_iOq["{$_iOw}_sign_posn"] == 2 && $_ilt['usesignal'] == '+': $_iOx = $_ilz;
                    break;
                case $_iOq["{$_iOw}_sign_posn"] == 3 && $_ilt['usesignal'] == '+': $_ily = $_ilz;
                    break;
                case $_iOq["{$_iOw}_sign_posn"] == 4 && $_ilt['usesignal'] == '+': $_iOy = $_ilz;
                    break;
                case $_ilt['usesignal'] == '(': case $_iOq["{$_iOw}_sign_posn"] == 0: $_ilx = '(';
                    $_iOx = ')';
                    break;
            } if (!$_ilt['nosimbol']) {
                $_iOz = $_ily . ($_iOv == 'i' ? $_iOq['int_curr_symbol'] : $_iOq['currency_symbol']) . $_iOy;
            } else {
                $_iOz = '';
            } $_il10 = $_iOq["{$_iOw}_sep_by_space"] ? ' ' : '';
            $value = number_format($value, $_ilv, $_iOq['mon_decimal_point'], $_ilt['nogroup'] ? '' : $_iOq['mon_thousands_sep']);
            $value = @explode($_iOq['mon_decimal_point'], $value);
            $_iO10 = strlen($_ilx) + strlen($_iOz) + strlen($value[0]);
            if ($_iOu > 0 && $_iOu > $_iO10) {
                $value[0] = str_repeat($_ilt['fillchar'], $_iOu - $_iO10) . $value[0];
            } $value = implode($_iOq['mon_decimal_point'], $value);
            if ($_iOq["{$_iOw}_cs_precedes"]) {
                $value = $_ilx . $_iOz . $_il10 . $value . $_iOx;
            } else {
                $value = $_ilx . $value . $_il10 . $_iOz . $_iOx;
            } if ($_ilu > 0) {
                $value = str_pad($value, $_ilu, $_ilt['fillchar'], $_ilt['isleft'] ? STR_PAD_RIGHT : STR_PAD_LEFT);
            } $_ilp = str_replace($_iOs[0], $value, $_ilp);
        } return $_ilp;
    }

} if (!class_exists("KoolGrid", FALSE)) {

    function _il11($_iO11) {
        return _iO0("+", " ", urlencode($_iO11));
    }

    function _il12($_iO11) {
        return urldecode(_iO0(" ", "+", $_iO11));
    }

    function _iO12($_iO11) {
        return stripslashes($_iO11);
    }

    function _il13($_iO11) {
        return addslashes($_iO11);
    }

    function _iO13($_il14, $_iO14) {
        $_il15 = explode(",", $_iO14);
        $_iO15 = array();
        if ($_il15 != NULL) {
            for ($_iO9 = 0; $_iO9 < sizeof($_il15); $_iO9++) {
                $_il15[$_iO9] = trim($_il15[$_iO9]);
                $_iO15[$_il15[$_iO9]] = $_il14[$_il15[$_iO9]];
            }
        } return $_iO15;
    }

    function _il16($_il14) {
        $_il3 = "";
        foreach ($_il14 as $_iO16) {
            $_il3.=$_iO16;
        } return md5($_il3);
    }

    class datasourcefilter {

        var $Field;
        var $Expression;
        var $Value;

        function __construct($_il17, $_iO17, $_il18) {
            $this->Field = $_il17;
            $this->Expression = $_iO17;
            $this->Value = _il13($_il18);
        }

    }

    class datasourcesort {

        var $Field;
        var $Order;

        function __construct($_il17, $_iO18 = "ASC") {
            $this->Field = $_il17;
            $this->Order = $_iO18;
        }

    }

    class datasourcegroup {

        var $Field;

        function __construct($_il17) {
            $this->Field = $_il17;
        }

    }

    class datasource {

        var $Sorts = array();
        var $Filters = array();
        var $Groups = array();

        function count() {
            
        }

        function getfields() {
            
        }

        function getdata($_il19 = 0, $_iO19 = 046113177) {
            
        }

        function getaggregates($_il6) {
            
        }

        function insert($_il1a) {
            return FALSE;
        }

        function update($_il1a) {
            return FALSE;
        }

        function delete($_il1a) {
            return FALSE;
        }

        function addsort($_iO1a) {
            array_push($this->Sorts, $_iO1a);
        }

        function addfilter($_il1b) {
            array_push($this->Filters, $_il1b);
        }

        function addgroup($_iO1b) {
            array_push($this->Groups, $_iO1b);
        }

        function clear() {
            $this->Sorts = array();
            $this->Filters = array();
            $this->Groups = array();
        }

        function geterror() {
            return "";
        }

        function setcharset($_il1c) {
            
        }

        function getfilterexpression($_il1b) {
            $_iO17 = "";
            $_il18 = $_il1b->Value;
            switch ($_il1b->Expression) {
                case "Equal": $_iO17 = "=";
                    break;
                case "Not_Equal": $_iO17 = "<>";
                    break;
                case "Greater_Than": $_iO17 = ">";
                    break;
                case "Less_Than": $_iO17 = "<";
                    break;
                case "Greater_Than_Or_Equal": $_iO17 = ">=";
                    break;
                case "Less_Than_Or_Equal": $_iO17 = "<=";
                    break;
                case "Contain": $_iO17 = "LIKE";
                    $_il18 = "%" . $_il18 . "%";
                    break;
                case "Not_Contain": $_iO17 = "NOT LIKE";
                    $_il18 = "%" . $_il18 . "%";
                    break;
                case "Start_With": $_iO17 = "LIKE";
                    $_il18 = $_il18 . "%";
                    break;
                case "End_With": $_iO17 = "LIKE";
                    $_il18 = "%" . $_il18;
                    break;
            } return $_il1b->Field . " " . $_iO17 . " \047" . $_il18 . "\047";
        }

    }

    class mysqldatasource extends datasource {

        var $SelectCommand;
        var $UpdateCommand;
        var $InsertCommand;
        var $DeleteCommand;
        var $_iO1c;

        function __construct($_il1d) {
            $this->_iO1c = $_il1d;
        }

        function count() {
            $_iO1d = "SELECT COUNT(*) FROM (" . $this->SelectCommand . ") AS _TMP {where}";
            $_il1e = "";
            $_iO1e = $this->Filters;
            for ($_iO9 = 0; $_iO9 < sizeof($_iO1e); $_iO9++) {
                $_il1e.=" and " . $this->getfilterexpression($_iO1e[$_iO9]);
            } if ($_il1e != "") {
                $_il1e = "WHERE " . substr($_il1e, 5);
            } $_iO1d = _iO0("{where}", $_il1e, $_iO1d);
            $_il1f = mysql_query($_iO1d, $this->_iO1c);
            $_iO1f = mysql_result($_il1f, 0, 0);
            mysql_free_result($_il1f);
            return $_iO1f;
        }

        function getfields() {
            $_il1g = array();
            $_il1f = mysql_query($this->SelectCommand, $this->_iO1c);
            while ($_iO1g = mysql_fetch_field($_il1f)) {
                $_il17 = array("Name" => $_iO1g->name, "Type" => $_iO1g->type, "Not_Null" => $_iO1g->not_null);
                array_push($_il1g, $_il17);
            } mysql_free_result($_il1f);
            return $_il1g;
        }

        function getdata($_il1h = 0, $_iO1f = 046113177) {
            $_iO1h = "SELECT * FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby} {limit}";
            $_il1e = "";
            $_iO1e = $this->Filters;
            for ($_iO9 = 0; $_iO9 < sizeof($_iO1e); $_iO9++) {
                $_il1e.=" and " . $this->getfilterexpression($_iO1e[$_iO9]);
            } if ($_il1e != "") {
                $_il1e = "WHERE " . substr($_il1e, 5);
            } $_il1i = "";
            $_iO1i = $this->Sorts;
            for ($_iO9 = 0; $_iO9 < sizeof($_iO1i); $_iO9++) {
                $_il1i.=", " . $_iO1i[$_iO9]->Field . " " . $_iO1i[$_iO9]->Order;
            } if ($_il1i != "") {
                $_il1i = "ORDER BY " . substr($_il1i, 2);
            } $_il1j = "";
            $_iO1j = $this->Groups;
            for ($_iO9 = 0; $_iO9 < sizeof($_iO1j); $_iO9++) {
                $_il1j.=", " . $_iO1j[$_iO9]->Field;
            } if ($_il1j != "") {
                $_il1j = "GROUP BY " . substr($_il1j, 2);
            } $_il1k = "LIMIT " . $_il1h . " , " . $_iO1f;
            $_iO1k = _iO0("{SelectCommand}", $this->SelectCommand, $_iO1h);
            $_iO1k = _iO0("{where}", $_il1e, $_iO1k);
            $_iO1k = _iO0("{orderby}", $_il1i, $_iO1k);
            $_iO1k = _iO0("{groupby}", $_il1j, $_iO1k);
            $_iO1k = _iO0("{limit}", $_il1k, $_iO1k);
            $_il1f = mysql_query($_iO1k, $this->_iO1c);
            $_il1l = array();
            while ($_iO1l = mysql_fetch_assoc($_il1f)) {
                array_push($_il1l, $_iO1l);
            } mysql_free_result($_il1f);
            return $_il1l;
        }

        function getaggregates($_il6) {
            $_iO1h = "SELECT {text} FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby}";
            $_il3 = "";
            $_il1m = array();
            foreach ($_il6 as $_iO1m) {
                if (strpos("-|min|max|first|last|count|sum|avg|", "|" . strtolower($_iO1m["Aggregate"]) . "|") > 0) {
                    $_il3.=", " . $_iO1m["Aggregate"] . "(" . $_iO1m["DataField"] . ") as " . $_iO1m["Key"];
                }
            } if ($_il3 != "") {
                $_il3 = substr($_il3, 2);
                $_il1e = "";
                $_iO1e = $this->Filters;
                for ($_iO9 = 0; $_iO9 < sizeof($_iO1e); $_iO9++) {
                    $_il1e.=" and " . $this->getfilterexpression($_iO1e[$_iO9]);
                } if ($_il1e != "") {
                    $_il1e = "WHERE " . substr($_il1e, 5);
                } $_il1i = "";
                $_iO1i = $this->Sorts;
                for ($_iO9 = 0; $_iO9 < sizeof($_iO1i); $_iO9++) {
                    $_il1i.=", " . $_iO1i[$_iO9]->Field . " " . $_iO1i[$_iO9]->Order;
                } if ($_il1i != "") {
                    $_il1i = "ORDER BY " . substr($_il1i, 2);
                } $_il1j = "";
                $_iO1j = $this->Groups;
                for ($_iO9 = 0; $_iO9 < sizeof($_iO1j); $_iO9++) {
                    $_il1j.=", " . $_iO1j[$_iO9]->Field;
                } if ($_il1j != "") {
                    $_il1j = "GROUP BY " . substr($_il1j, 2);
                } $_iO1k = _iO0("{SelectCommand}", $this->SelectCommand, $_iO1h);
                $_iO1k = _iO0("{text}", $_il3, $_iO1k);
                $_iO1k = _iO0("{where}", $_il1e, $_iO1k);
                $_iO1k = _iO0("{orderby}", $_il1i, $_iO1k);
                $_iO1k = _iO0("{groupby}", $_il1j, $_iO1k);
                $_il1f = mysql_query($_iO1k, $this->_iO1c);
                $_il1m = mysql_fetch_assoc($_il1f);
                mysql_free_result($_il1f);
            } return $_il1m;
        }

        function insert($_il1a) {
            $_il1n = explode(";", $this->InsertCommand);
            foreach ($_il1a as $_ilk => $_il18) {
                for ($_iO9 = 0; $_iO9 < sizeof($_il1n); $_iO9++) {
                    $_il1n[$_iO9] = _iO0("@" . $_ilk, _il13($_il18), $_il1n[$_iO9]);
                }
            } foreach ($_il1n as $_iO1n) {
                if (mysql_query($_iO1n, $this->_iO1c) == FALSE) {
                    return FALSE;
                }
            } return TRUE;
        }

        function update($_il1a) {
            $_il1o = explode(";", $this->UpdateCommand);
            foreach ($_il1a as $_ilk => $_il18) {
                for ($_iO9 = 0; $_iO9 < sizeof($_il1o); $_iO9++) {
                    $_il1o[$_iO9] = _iO0("@" . $_ilk, _il13($_il18), $_il1o[$_iO9]);
                }
            } foreach ($_il1o as $_iO1o) {
                if (mysql_query($_iO1o, $this->_iO1c) == FALSE) {
                    return FALSE;
                }
            } return TRUE;
        }

        function delete($_il1a) {
            $_il1p = explode(";", $this->DeleteCommand);
            foreach ($_il1a as $_ilk => $_il18) {
                for ($_iO9 = 0; $_iO9 < sizeof($_il1p); $_iO9++) {
                    $_il1p[$_iO9] = _iO0("@" . $_ilk, _il13($_il18), $_il1p[$_iO9]);
                }
            } foreach ($_il1p as $_iO1p) {
                if (mysql_query($_iO1p, $this->_iO1c) == FALSE) {
                    return FALSE;
                }
            } return TRUE;
        }

        function geterror() {
            return mysql_error($this->_iO1c);
        }

        function setcharset($_il1c) {
            mysql_set_charset($_il1c, $this->_iO1c);
        }

    }

    class arraydatasource extends datasource {

        var $_il1q;

        function __construct($_iO1q) {
            $this->_il1q = $_iO1q;
        }

        function count() {
            return sizeof($this->_il1q);
        }

        function getfields() {
            $_il1g = array();
            $_il1r = $this->_il1q[0];
            foreach ($_il1r as $_iO1r => $_il1s) {
                array_push($_il1g, $_iO1r);
            } return $_il1g;
        }

        function getdata($_il19 = 0, $_iO19 = 046113177) {
            $_iO1s = array();
            if ($_il19 > $this->count()) return $_iO1s; if ($_il19 + $_iO19 > $this->count()) {
                $_iO19 = $this->count() - $_il19;
            } for ($_iO9 = 0; $_iO9 < $_iO19; $_iO9++) {
                array_push($_iO1s, $this->_il1q[$_il19 + $_iO9]);
            } return $_iO1s;
        }

    }

    interface _il1t {

        function _iO1t();

        function _il1u();
    }

    class _iO1u {

        var $_il1v;
        var $_il1q;
        var $_iO1v = TRUE;
        var $_il1w = FALSE;

        function _iO1w($_il1x) {
            $this->_il1v = $_il1x;
            $this->_il1w = $_il1x->KeepViewStateInSession;
            $_iO1x = ( isset($_POST[$this->_il1v->_il1y . "_viewstate"])) ? $_POST[$this->_il1v->_il1y . "_viewstate"] : "";
            if ($this->_il1w && $_iO1x == "") {
                $_iO1x = ( isset($_SESSION[$this->_il1v->_il1y . "_viewstate"])) ? $_SESSION[$this->_il1v->_il1y . "_viewstate"] : "";
                $this->_il1v->_iO1y->_il1z = TRUE;
            } if ($_iO1x != "" && $this->_iO1v) {
                $_iO1x = base64_decode($_iO1x);
            } $_iO1x = _iO0("\134", "", $_iO1x);
            $this->_il1q = json_decode($_iO1x, TRUE);
        }

        function _iO1z() {
            $_il20 = json_encode($this->_il1q);
            if ($this->_iO1v) {
                $_il20 = base64_encode($_il20);
            } if ($this->_il1w) {
                $_SESSION[$this->_il1v->_il1y . "_viewstate"] = $_il20;
            } $_iO20 = "<input id='{id}\047 name='{id}' type=\047hidden\047 value='{value}\047 autocomplete='off' />";
            $_il21 = _iO0("{id}", $this->_il1v->_il1y . "_viewstate", $_iO20);
            $_il21 = _iO0("{value}", $_il20, $_il21);
            return $_il21;
        }

    }

    class _iO21 {

        var $_il22;
        var $_iO22;

        function __construct() {
            $this->_il22 = array("Insert" => "Add New Record", "Delete" => "Delete", "Confirm" => "Confirm", "Edit" => "Edit", "Cancel" => "Cancel", "Refresh" => "Refresh", "Done" => "Done", "Loading" => "Loading...", "Go" => "Go", "Next" => "Next", "Prev" => "Prev", "Last" => "Last", "First" => "First", "No_Filter" => "[No Filter]", "Equal" => "Equal", "Not_Equal" => "Not Equal", "Greater_Than" => "Greater Than", "Less_Than" => "Less Than", "Greater_Than_Or_Equal" => "Greater Than Or Equal", "Less_Than_Or_Equal" => "Less Than Or Equal", "Contain" => "Contain", "Not_Contain" => "Not Contain", "Start_With" => "Start With", "End_With" => "End With");
            $this->_iO22 = array("DeleteConfirm" => "Are you sure to delete this row?", "PageInfoTemplate" => "Page <strong>{PageIndex}</strong> in <strong>{TotalPages}</strong>, items <strong>{FirstIndexInPage}</strong> to <strong>{LastIndexInPage}</strong> of <strong>{TotalRows}</strong>.", "ManualPagerTemplate" => "Change page: {TextBox} (of {TotalPage} pages) {GoPageButton}", "PageSizeText" => "Page Size:", "NextPageToolTip" => "Next Page", "PrevPageToolTip" => "Previous Page", "FirstPageToolTip" => "First Page", "LastPageToolTip" => "Last Page", "SortHeaderToolTip" => "Click here to sort", "SortAscToolTip" => "Sort Asc", "SortDescToolTip" => "Sort Desc", "SortNoneToolTip" => "No sort", "InsertForm_ConfirmButtonToolTip" => "Confirm Insert", "InsertForm_CancelButtonToolTip" => "Cancel Insert", "EditForm_ConfirmButtonToolTip" => "Confirm Changes", "EditForm_CancelButtonToolTip" => "Cancel Changes", "RequiredFieldValidator_ErrorMessage" => "Field is required!", "RegularExpressionValidator_ErrorMessage" => "Not valid!", "RangeValidator_ErrorMessage" => "Value must be in range [{MinValue},{MaxValue}]", "GroupPanelGuideText" => "Drag a column header and drop it here to group by that column", "GroupItemToolTip" => "Drag out of the bar to ungroup", "VirtualScrollingPageToolTip" => "Page {page_index}");
        }

        function load($_il23) {
            $_iO23 = new domdocument();
            $_iO23->load($_il23);
            $_il24 = $_iO23->getelementsbytagname("commands");
            if ($_il24->length > 0) {
                foreach ($_il24->item(0)->attributes as $_iO24) {
                    $this->_il22[$_iO24->name] = $_iO24->value;
                }
            } $_il24 = $_iO23->getelementsbytagname("messages");
            if ($_il24->length > 0) {
                foreach ($_il24->item(0)->attributes as $_iO24) {
                    $this->_iO22[$_iO24->name] = $_iO24->value;
                }
            }
        }

    }

    class _il25 {

        var $_il1y;
        var $_il1v;
        var $_il22;

        function __construct($_il1x) {
            $this->_il1y = $_il1x->_il1y . "_cmd";
            $this->_iO25();
        }

        function _iO25() {
            if (isset($_POST[$this->_il1y])) {
                $_iO1x = $_POST[$this->_il1y];
                $_iO1x = base64_decode($_iO1x);
                $_iO1x = _iO0("\134", "", $_iO1x);
                $this->_il22 = json_decode($_iO1x, TRUE);
            }
        }

        function _iO1z() {
            $_il26 = "<input id=\047{id}' name=\047{id}' type='hidden' value=\047' />";
            $_ilm = _iO0("{id}", $this->_il1y, $_il26);
            return $_ilm;
        }

    }

    class gridrow implements _il1t {

        var $_il1y;
        var $_iO26;
        var $_il27;
        var $_iO27 = array();
        var $_il28;
        var $DataItem;
        var $Selected = FALSE;
        var $Expand = FALSE;
        var $EditMode = FALSE;
        var $TableView;
        var $CssClass = "";
        var $_iO28 = FALSE;

        function _iO1w($_il29) {
            $this->_il27 = $_il29;
            $this->TableView = $_il29;
            $this->_iO26 = $_il29->_iO26;
        }

        function getunqiueid() {
            return $this->_il1y;
        }

        function _iO1t() {
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
                $this->Selected = $_iO29["Selected"];
                $this->Expand = $_iO29["Expand"];
                $this->EditMode = $_iO29["EditMode"];
                $_il2a = $_iO29["DataItem"];
                $this->DataItem = array();
                foreach ($_il2a as $_iO2a => $_il2b) {
                    $this->DataItem[$_iO2a] = _il12($_il2b);
                }
            }
        }

        function _il1u() {
            $_il2a = array();
            foreach ($this->DataItem as $_iO2a => $_il2b) {
                $_il2a[$_iO2a] = _il11($_il2b);
            } $this->_iO26->_il1q[$this->_il1y] = array("Selected" => $this->Selected, "Expand" => $this->Expand, "DataItem" => $_il2a, "EditMode" => $this->EditMode);
            foreach ($this->_iO27 as $_iO2b) {
                $_iO2b->_il1u();
            }
        }

        function _il2c($_il29) {
            $_il29->_il1y = $this->_il1y . "_dt" . sizeof($this->_iO27);
            array_push($this->_iO27, $_il29);
        }

        function getinstancedetailtables() {
            return $this->_iO27;
        }

        function gettableview() {
            return $this->_il27;
        }

        function _iO2c() {
            $this->_iO1t();
            if ($this->EditMode) {
                $this->_il28 = $this->_il27->EditSettings->_il2d();
                $this->_il28->_iO1w($this->_il27);
                $this->_il28->_iO2d = $this;
            } if ($this->Expand) {
                foreach ($this->_il27->_il2e as $_iO2b) {
                    $_iO2e = $_iO2b->_il2d();
                    $this->_il2c($_iO2e);
                    $_iO2e->_iO1w($this->_il27->_il1v, $this);
                    $_iO2e->_iO2c();
                }
            }
        }

        function _il2f($_ilm) {
            if (isset($_ilm->_il22[$this->_il1y])) {
                $_iO2f = $_ilm->_il22[$this->_il1y];
                switch ($_iO2f["Command"]) {
                    case "Select": $this->Selected = TRUE;
                        break;
                    case "Unselect": $this->Selected = FALSE;
                        break;
                    case "Expand": if ($this->_il27->_il1v->EventHandler->onbeforedetailtablesexpand($this, array()) == TRUE) {
                            $this->Expand = TRUE;
                            $this->_il27->_il1v->EventHandler->ondetailtablesexpand($this, array());
                        } break;
                    case "Collapse": if ($this->_il27->_il1v->EventHandler->onbeforedetailtablescollapse($this, array()) == TRUE) {
                            $this->Expand = FALSE;
                            $this->_iO27 = array();
                            $this->_il27->_il1v->EventHandler->ondetailtablescollapse($this, array());
                        } break;
                    case "StartEdit": if ($this->_il27->AllowEditing) {
                            if ($this->_il27->_il1v->EventHandler->onbeforerowstartedit($this, array()) == TRUE) {
                                $this->EditMode = TRUE;
                                $this->_il28 = $this->_il27->EditSettings->_il2d();
                                $this->_il28->_il2g = "StartEdit";
                                $this->_il28->_iO1w($this->_il27);
                                $this->_il28->_iO2d = $this;
                                $this->_il27->_il1v->EventHandler->onrowstartedit($this, array());
                            }
                        } break;
                    case "ConfirmEdit": if ($this->EditMode) {
                            $this->_il28->_il2g = "ConfirmEdit";
                            $this->_il28->_iO2g();
                        } break;
                    case "CancelEdit": if ($this->_il27->_il1v->EventHandler->onbeforerowcanceledit($this, array()) == TRUE) {
                            $this->EditMode = FALSE;
                            $this->_il27->_il1v->EventHandler->onrowcanceledit($this, array());
                        } break;
                    case "Delete": if ($this->_il27->AllowDeleting) {
                            if ($this->_il27->_il1v->EventHandler->onbeforerowdelete($this, array()) == TRUE) {
                                $_ilm->_il22[$this->_il1y]["Command"] = "NoMore";
                                $_il2h = $this->_il27->DataSource->delete($this->DataItem);
                                $this->_il27->_il1z = TRUE;
                                $_iO2h = $this->_il27->DataSource->geterror();
                                if ($_iO2h != "") $this->_il27->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); $this->_il27->_il1v->EventHandler->onrowdelete($this, array("Successful" => $_il2h, "Error" => $_iO2h));
                            }
                        } break;
                }
            } $this->_il27->_il1v->EventHandler->onrowprerender($this, array());
            if ($this->Expand && sizeof($this->_iO27) == 0) {
                foreach ($this->_il27->_il2e as $_iO2b) {
                    $_iO2e = $_iO2b->_il2d();
                    $this->_il2c($_iO2e);
                    $_iO2e->_iO1w($this->_il27->_il1v, $this);
                }
            } foreach ($this->_iO27 as $_iO2b) {
                $_iO2b->_il2f($_ilm);
            }
        }

        function _iO1z() {
            $_il2i = "<tr id=\047{rowid}' class=\047kgrRow {alt} {selected} {cssclass}\047>{tds}</tr>";
            $_iO2i = "<tr><td class='kgrCell {alt}\047>&#160;</td><td colspan=\047{colspan}\047 class='kgrDetailTablesPanel\047>{tables}</td></tr>";
            $_il2j = "<div class='kgrDesc\047>{text}</div>";
            $_iO2j = "";
            if ($this->EditMode) {
                $_iO2j = $this->_il28->_iO1z();
            } else {
                $_il2k = "";
                for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_iO2k); $_iO9++) {
                    $_il2l = $this->_il27->_iO2k[$_iO9];
                    $_iO2l = $_il2l->_iO1z($this);
                    $_il2k.=$_iO2l;
                } $_iO2j = _iO0("{tds}", $_il2k, $_il2i);
            } $_iO2j = _iO0("{rowid}", $this->_il1y, $_iO2j);
            $_iO2j = _iO0("{selected}", $this->Selected ? "kgrRowSelected" : "", $_iO2j);
            $_iO2j = _iO0("{alt}", $this->_iO28 ? "kgrAltRow" : "", $_iO2j);
            $_iO2j = _iO0("{cssclass}", $this->CssClass, $_iO2j);
            if (sizeof($this->_iO27) > 0) {
                $_il2m = "";
                foreach ($this->_iO27 as $_iO2b) {
                    $_iO2m = "";
                    if ($_iO2b->_il2n !== NULL) {
                        $_iO2m = _iO0("{text}", $_iO2b->_il2n, $_il2j);
                        foreach ($this->DataItem as $_iO1r => $_il1s) {
                            $_iO2m = _iO0("{" . $_iO1r . "}", $_il1s, $_iO2m);
                        }
                    } $_iO2n = $_iO2m . $_iO2b->_iO1z();
                    $_il2m.=$_iO2n;
                } $_il2o = _iO0("{colspan}", sizeof($this->_il27->_iO2k) - 1, $_iO2i);
                $_il2o = _iO0("{alt}", $this->_iO28 ? "kgrAltRow" : "", $_il2o);
                $_il2o = _iO0("{tables}", $_il2m, $_il2o);
                $_iO2j.=$_il2o;
            } return $_iO2j;
        }

    }

    class _iO2o {

        var $Wrap;
        var $Align;
        var $Valign;

        function _iO1w($_il2l) {
            if ($this->Wrap === NULL) $this->Wrap = $_il2l->Wrap; if ($this->Align === NULL) $this->Align = $_il2l->Align; if ($this->Valign === NULL) $this->Valign = $_il2l->Valign;
        }

        function _il2p() {
            return "white-space:" . (($this->Wrap) ? "normal" : "nowrap") . ";";
        }

        function _iO2p() {
            return ($this->Align) ? "text-align:" . $this->Align . ";" : "";
        }

        function _il2q() {
            return ($this->Valign) ? "valign=\047" . $this->Valign . "\047 " : "";
        }

    }

    class gridvalidator {

        var $ErrorMessage;

        function validate($_il18, $_il2a = NULL, $_iO1l = NULL, $_il2l = NULL) {
            return TRUE;
        }

    }

    class requiredfieldvalidator extends gridvalidator {

        function validate($_il18, $_il2a = NULL, $_iO1l = NULL, $_il2l = NULL) {
            if ($_il18 === NULL || $_il18 == "") {
                if ($this->ErrorMessage === NULL) $this->ErrorMessage = $_il2l->_il27->_il1v->Localization->_iO22["RequiredFieldValidator_ErrorMessage"]; return FALSE;
            } return TRUE;
        }

    }

    class regularexpressionvalidator extends gridvalidator {

        var $ValidationExpression = "";

        function validate($_il18, $_il2a = NULL, $_iO1l = NULL, $_il2l = NULL) {
            if (!preg_match($this->ValidationExpression, $_il18)) {
                if ($this->ErrorMessage === NULL) $this->ErrorMessage = $_il2l->_il27->_il1v->Localization->_iO22["RegularExpressionValidator_ErrorMessage"]; return FALSE;
            } return TRUE;
        }

    }

    class rangevalidator extends gridvalidator {

        var $MinValue;
        var $MaxValue;

        function __construct($_iO2q = NULL, $_il2r = NULL) {
            if ($_iO2q !== NULL) $this->MinValue = $_iO2q; if ($_il2r !== NULL) $this->MaxValue = $_il2r;
        }

        function validate($_il18, $_il2a = NULL, $_iO1l = NULL, $_il2l = NULL) {
            if ($_il18 > $this->MaxValue || $_il18 < $this->MinValue) {
                if ($this->ErrorMessage === NULL) $this->ErrorMessage = $_il2l->_il27->_il1v->Localization->_iO22["RangeValidator_ErrorMessage"]; $this->ErrorMessage = _iO0("{MinValue}", $this->MinValue, $this->ErrorMessage);
                $this->ErrorMessage = _iO0("{MaxValue}", $this->MaxValue, $this->ErrorMessage);
                return FALSE;
            } return TRUE;
        }

    }

    class customvalidator extends gridvalidator {

        var $ValidateFunction;

        function validate($_il18, $_il2a = NULL, $_iO1l = NULL, $_il2l = NULL) {
            $_iO2r = $this->ValidateFunction;
            if ($_iO2r !== NULL) {
                $_il2s = $_iO2r($_il18);
                if ($_il2s !== NULL) {
                    $this->ErrorMessage = $_il2s;
                    return FALSE;
                }
            } return TRUE;
        }

    }

    class gridcolumn implements _il1t {

        var $_il1y;
        var $_iO26;
        var $_il27;
        var $_iO2s;
        var $ReadOnly = FALSE;
        var $TableView;
        var $AllowSorting;
        var $AllowResizing;
        var $AllowFiltering;
        var $AllowGrouping;
        var $AllowExporting = TRUE;
        var $Width;
        var $Visible = TRUE;
        var $Filter;
        var $FilterOptions;
        var $HeaderText;
        var $FooterText;
        var $DataField;
        var $DataFieldPrefix;
        var $Sort = 0;
        var $Group = FALSE;
        var $GroupIndex = 0;
        var $GroupSettings;
        var $HeaderStyle;
        var $ItemStyle;
        var $FooterStyle;
        var $Wrap;
        var $Align;
        var $Valign;
        var $CssClass = "";
        var $DefaultValue = NULL;
        var $NullDisplayText;
        var $Aggregate;
        var $_il2t;

        function __construct() {
            $this->HeaderStyle = new _iO2o();
            $this->FooterStyle = new _iO2o();
            $this->ItemStyle = new _iO2o();
            $this->_iO2s = array();
            $this->GroupSettings = new _iO2t();
        }

        function getunqiueid() {
            return $this->_il1y;
        }

        function _iO1w($_il29) {
            $this->_il27 = $_il29;
            $this->TableView = $_il29;
            $this->_iO26 = $_il29->_iO26;
            if ($this->AllowSorting === NULL) $this->AllowSorting = $this->_il27->AllowSorting; if ($this->AllowResizing === NULL) $this->AllowResizing = $this->_il27->AllowResizing; if ($this->AllowFiltering === NULL) $this->AllowFiltering = $this->_il27->AllowFiltering; if ($this->AllowGrouping === NULL) $this->AllowGrouping = $this->_il27->AllowGrouping; if ($this->Width === NULL) $this->Width = $this->_il27->ColumnWidth; if ($this->Wrap === NULL) $this->Wrap = $this->_il27->ColumnWrap; if ($this->Align === NULL) $this->Align = $this->_il27->ColumnAlign; if ($this->Valign === NULL) $this->Valign = $this->_il27->_il2u; if ($this->FilterOptions === NULL) $this->FilterOptions = $this->_il27->FilterOptions; $this->HeaderStyle->_iO1w($this);
            $this->FooterStyle->_iO1w($this);
            $this->ItemStyle->_iO1w($this);
            if ($this->Filter === NULL) {
                $this->Filter = array("Value" => "", "Exp" => "No_Filter");
            } $this->GroupSettings->_iO2u = $this;
        }

        function addvalidator($_il2v) {
            array_push($this->_iO2s, $_il2v);
        }

        function _iO1t() {
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
                $this->Sort = $_iO29["Sort"];
                $this->Group = $_iO29["Group"];
                $this->Width = $_iO29["Width"];
                $this->Visible = $_iO29["Visible"];
                $this->_il2t = _il12($_iO29["AggRes"]);
                $_il1b = $_iO29["Filter"];
                $_il1b["Value"] = _il12($_il1b["Value"]);
                $this->Filter = $_il1b;
            }
        }

        function _il1u() {
            $_il1b = $this->Filter;
            $_il1b["Value"] = _il11($_il1b["Value"]);
            $this->_iO26->_il1q[$this->_il1y] = array("Name" => $this->DataField, "Sort" => $this->Sort, "Group" => $this->Group, "Visible" => $this->Visible, "Filter" => $_il1b, "Width" => $this->Width, "AggRes" => _il11($this->_il2t));
        }

        function _il2f($_ilm) {
            if (isset($_ilm->_il22[$this->_il1y])) {
                $_iO2f = $_ilm->_il22[$this->_il1y];
                switch ($_iO2f["Command"]) {
                    case "Sort": if ($this->_il27->_il1v->EventHandler->onbeforecolumnsort($this, array("NewSort" => $_iO2f["Args"]["Sort"])) == TRUE) {
                            if ($this->_il27->SingleColumnSorting) {
                                foreach ($this->_il27->_iO2k as $_il2l) {
                                    $_il2l->Sort = 0;
                                } $this->_il27->DataSource->Sorts = array();
                            } $this->Sort = $_iO2f["Args"]["Sort"];
                            $this->_il27->_il1z = TRUE;
                            $this->_il27->_il1v->EventHandler->oncolumnsort($this, array());
                        } break;
                    case "Filter": if ($this->_il27->_il1v->EventHandler->onbeforecolumnfilter($this, array("FilterValue" => $_iO2f["Args"]["Filter"]["Value"], "FilterExp" => $_iO2f["Args"]["Filter"]["Exp"])) == TRUE) {
                            $this->Filter["Exp"] = $_iO2f["Args"]["Filter"]["Exp"];
                            if ($_iO2f["Args"]["Post"]) {
                                $this->Filter["Value"] = $this->_iO2v();
                            } else {
                                $this->Filter["Value"] = _il12($_iO2f["Args"]["Filter"]["Value"]);
                            } $this->_il27->_il1z = TRUE;
                            $this->_il27->_il1v->EventHandler->oncolumnfilter($this, array());
                        } break;
                    case "Group": if ($this->Group == FALSE) {
                            $_il2w = $_iO2f["Args"]["Position"];
                            if ($this->_il27->_il1v->EventHandler->onbeforecolumngroup($this, array("Position" => $_il2w)) == TRUE && $this->_il27->_il1v->EventHandler->onbeforeaddgroup($this->_il27, array("Position" => $_il2w)) == TRUE) {
                                $_iO2w = $this->GroupSettings;
                                $_iO2w->_iO1w($this->_il27);
                                if ($_il2w === NULL || ($_il2w >= sizeof($this->TableView->_il2x))) {
                                    array_push($this->_il27->_il2x, $_iO2w);
                                } else {
                                    $_iO2x = array();
                                    for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_il2x); $_iO9++) {
                                        if ($_il2w == $_iO9) {
                                            array_push($_iO2x, $_iO2w);
                                        } array_push($_iO2x, $this->_il27->_il2x[$_iO9]);
                                    } $this->_il27->_il2x = $_iO2x;
                                } for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_il2x); $_iO9++) {
                                    $this->_il27->_il2x[$_iO9]->_il1y = $this->_il27->_il1y . "_gm" . $_iO9;
                                } $this->Group = TRUE;
                                $this->_il27->_il1v->EventHandler->oncolumngroup($this, array("Position" => $_il2w));
                                $this->_il27->_il1v->EventHandler->onaddgroup($this->_il27, array("Position" => $_il2w));
                            }
                        } break;
                    case "UnGroup": if ($this->_il27->_il1v->EventHandler->onbeforecolumnremovegroup($this, array()) == TRUE && $this->_il27->_il1v->EventHandler->onbeforeremovegroup($this->_il27, array("GroupField" => $this->DataField)) == TRUE) {
                            $_iO2x = array();
                            for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_il2x); $_iO9++) {
                                if ($this->_il27->_il2x[$_iO9]->GroupField != $this->DataField) {
                                    array_push($_iO2x, $this->_il27->_il2x[$_iO9]);
                                }
                            } $this->_il27->_il2x = $_iO2x;
                            for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_il2x); $_iO9++) {
                                $this->_il27->_il2x[$_iO9]->_il1y = $this->_il27->_il1y . "_gm" . $_iO9;
                            } $this->Group = FALSE;
                            $this->_il27->_il1v->EventHandler->oncolumnremovegroup($this, array());
                            $this->_il27->_il1v->EventHandler->onremovegroup($this->_il27, array("GroupField" => $this->DataField));
                        } break;
                }
            } if ($this->Sort != 0) {
                $this->_il27->DataSource->addsort(new datasourcesort($this->DataFieldPrefix . $this->DataField, ($this->Sort < 0) ? "DESC" : "ASC"));
            } if ($this->Filter["Exp"] != "No_Filter") {
                $this->_il27->DataSource->addfilter(new datasourcefilter($this->DataFieldPrefix . $this->DataField, $this->Filter["Exp"], $this->Filter["Value"]));
            }
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridcolumn();
            } $_il2y->ReadOnly = $this->ReadOnly;
            $_il2y->HeaderText = $this->HeaderText;
            $_il2y->FooterText = $this->FooterText;
            $_il2y->DataField = $this->DataField;
            $_il2y->DataFieldPrefix = $this->DataFieldPrefix;
            $_il2y->AllowSorting = $this->AllowSorting;
            $_il2y->AllowResizing = $this->AllowResizing;
            $_il2y->AllowFiltering = $this->AllowFiltering;
            $_il2y->AllowGrouping = $this->AllowGrouping;
            $_il2y->AllowExporting = $this->AllowExporting;
            $_il2y->Width = $this->Width;
            $_il2y->Visible = $this->Visible;
            $_il2y->Sort = $this->Sort;
            $_il2y->Filter = $this->Filter;
            $_il2y->FilterOptions = $this->FilterOptions;
            $_il2y->Wrap = $this->Wrap;
            $_il2y->Align = $this->Align;
            $_il2y->Valign = $this->Valign;
            $_il2y->HeaderStyle = $this->HeaderStyle;
            $_il2y->FooterStyle = $this->FooterStyle;
            $_il2y->ItemStyle = $this->ItemStyle;
            $_il2y->CssClass = $this->CssClass;
            $_il2y->_iO2s = $this->_iO2s;
            $_il2y->Aggregate = $this->Aggregate;
            $_il2y->DefaultValue = $this->DefaultValue;
            $_il2y->NullDisplayText = $this->NullDisplayText;
            $_il2y->Group = $this->Group;
            $_il2y->GroupIndex = $this->GroupIndex;
            $_il2y->GroupSettings = $this->GroupSettings->_il2d();
            return $_il2y;
        }

        function inlineeditrender($_iO1l) {
            return $this->render($_iO1l);
        }

        function formeditrender($_iO1l) {
            return $this->inlineeditrender($_iO1l);
        }

        function format($_il18) {
            return $_il18;
        }

        function render($_iO1l) {
            return $this->format($_iO1l->DataItem[$this->DataField]);
        }

        function _iO1z($_iO1l) {
            $_iO2y = "<td id='{id}' class=\047kgrCell {sorted} {visible} {cssclass}\047 {valign}><div class='kgrIn\047 style=\047{wrap}{align}\047>{cell}</div></td>";
            $_iO2l = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y, $_iO2y);
            $_il2z = strtolower($_SERVER["HTTP_USER_AGENT"]);
            $_iO2z = (strpos($_il2z, "msie 6") !== FALSE) && (strpos($_il2z, "msie 7") === FALSE) && (strpos($_il2z, "msie 8") === FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_il30 = (strpos($_il2z, "msie 7") !== FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_iO2l = _iO0("{visible}", ($this->Visible || $_iO2z || $_il30) ? "" : "kgrHidden", $_iO2l);
            $_iO2l = _iO0("{wrap}", $this->ItemStyle->_il2p(), $_iO2l);
            $_iO2l = _iO0("{align}", $this->ItemStyle->_iO2p(), $_iO2l);
            $_iO2l = _iO0("{valign}", $this->ItemStyle->_il2q(), $_iO2l);
            $_iO2l = _iO0("{sorted}", ($this->Sort != 0) ? "kgrSorted" : "", $_iO2l);
            $_iO2l = _iO0("{cssclass}", $this->CssClass, $_iO2l);
            if ($this->DataField !== NULL && $this->NullDisplayText !== NULL) {
                $_iO2l = _iO0("{cell}", ($_iO1l->DataItem[$this->DataField] === NULL) ? $this->NullDisplayText : $this->render($_iO1l), $_iO2l);
            } else {
                $_iO2l = _iO0("{cell}", $this->render($_iO1l), $_iO2l);
            } return $_iO2l;
        }

        function _iO30($_iO1l) {
            $_iO2y = "<td id=\047{id}' class=\047kgrCell {visible}' {valign}><div class=\047kgrIn' style='{wrap}{align}\047 >{cell}</div></td>";
            $_iO2l = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y, $_iO2y);
            $_iO2l = _iO0("{cell}", $this->inlineeditrender($_iO1l), $_iO2l);
            $_il2z = strtolower($_SERVER["HTTP_USER_AGENT"]);
            $_iO2z = (strpos($_il2z, "msie 6") !== FALSE) && (strpos($_il2z, "msie 7") === FALSE) && (strpos($_il2z, "msie 8") === FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_il30 = (strpos($_il2z, "msie 7") !== FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_iO2l = _iO0("{visible}", ($this->Visible || $_iO2z || $_il30) ? "" : "kgrHidden", $_iO2l);
            $_iO2l = _iO0("{wrap}", $this->ItemStyle->_il2p(), $_iO2l);
            $_iO2l = _iO0("{align}", $this->ItemStyle->_iO2p(), $_iO2l);
            $_iO2l = _iO0("{valign}", $this->ItemStyle->_il2q(), $_iO2l);
            return $_iO2l;
        }

        function _il31($_iO1l) {
            $_il2i = "<tr style='white-space:nowrap\047><td valign=\047top' style=\047width:2px;'><label class='kgrCaption' for=\047{id}\047>{text}:</label></td><td valign='top\047><div class=\047kgrInput\047>{input}</div></td></tr>";
            $_iO2j = _iO0("{text}", $this->HeaderText, $_il2i);
            $_iO2j = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO2j);
            $_iO2j = _iO0("{input}", $this->formeditrender($_iO1l), $_iO2j);
            return $_iO2j;
        }

        function geteditvalue($_iO1l) {
            return _iO12($_POST[$_iO1l->_il1y . "_" . $this->_il1y . "_input"]);
        }

        function _iO31() {
            $_il32 = "<col id='{id}' name='{id}' style=\047{width}' class=\047{resizable} {visible} {groupable}\047/>";
            $_il2l = _iO0("{id}", $this->_il1y, $_il32);
            $_il2l = _iO0("{resizable}", ($this->AllowResizing) ? "kgrResizable" : "", $_il2l);
            $_il2l = _iO0("{groupable}", ($this->AllowGrouping) ? "kgrGroupable" : "", $_il2l);
            $_il2l = _iO0("{width}", ($this->Width != NULL) ? "width:" . $this->Width . ";" : "", $_il2l);
            $_il2l = _iO0("{visible}", ($this->Visible) ? "" : "kgrHidden", $_il2l);
            return $_il2l;
        }

        function renderheader() {
            $_iO32 = "<th id=\047{id}' class='kgrHeader {visible} {sorted}' {valign}><div class='kgrIn\047 style='{wrap}{align}\047>{text}\046#160;{sign}</div></th>";
            $_il33 = "<a href=\047javascript:void 0' class=\047kgrSortHeaderText' onclick='grid_sort(\042{id}\042,{sort})' title=\047{title}\047>{text}</a>";
            $_iO33 = "<input type=\047button' class=\047nodecor kgrSort{dir}' onclick='grid_sort(\042{id}\042,{sort})\047 title=\047{title}\047 />";
            $_il34 = _iO0("{id}", $this->_il1y . "_hd", $_iO32);
            if ($this->AllowSorting) {
                $_iO1a = 0;
                $_iO34 = "None";
                switch ($this->Sort) {
                    case 0: $_iO1a = 1;
                        $_iO34 = "None";
                        break;
                    case 1: $_iO1a = -1;
                        $_iO34 = "Asc";
                        break;
                    case -1: $_iO1a = 0;
                        $_iO34 = "Desc";
                        break;
                } $_il35 = _iO0("{id}", $this->_il1y, $_il33);
                $_il35 = _iO0("{sort}", $_iO1a, $_il35);
                $_il35 = _iO0("{text}", $this->HeaderText, $_il35);
                $_il35 = _iO0("{title}", $this->_il27->_il1v->Localization->_iO22["SortHeaderToolTip"], $_il35);
                $_iO35 = _iO0("{id}", $this->_il1y, $_iO33);
                $_iO35 = _iO0("{sort}", $_iO1a, $_iO35);
                $_iO35 = _iO0("{dir}", $_iO34, $_iO35);
                $_iO35 = _iO0("{title}", $this->_il27->_il1v->Localization->_iO22["Sort" . $_iO34 . "ToolTip"], $_iO35);
                $_il34 = _iO0("{text}", $_il35, $_il34);
                $_il34 = _iO0("{sign}", $_iO35, $_il34);
            } else {
                $_il34 = _iO0("{text}", $this->HeaderText, $_il34);
                $_il34 = _iO0("{sign}", "", $_il34);
            } $_il2z = strtolower($_SERVER["HTTP_USER_AGENT"]);
            $_iO2z = (strpos($_il2z, "msie 6") !== FALSE) && (strpos($_il2z, "msie 7") === FALSE) && (strpos($_il2z, "msie 8") === FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_il30 = (strpos($_il2z, "msie 7") !== FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_il34 = _iO0("{visible}", ($this->Visible || $_iO2z || $_il30) ? "" : "kgrHidden", $_il34);
            $_il34 = _iO0("{sorted}", ($this->Sort != 0) ? "kgrSorted" : "", $_il34);
            $_il34 = _iO0("{wrap}", $this->HeaderStyle->_il2p(), $_il34);
            $_il34 = _iO0("{align}", $this->HeaderStyle->_iO2p(), $_il34);
            $_il34 = _iO0("{valign}", $this->HeaderStyle->_il2q(), $_il34);
            return $_il34;
        }

        function renderfooter() {
            $_il36 = "<td id='{id}' class=\047kgrFooter {visible}\047 {valign}><div class='kgrIn' style=\047{wrap}{align}\047><span class=\047kgrFooterText'>{text}&#160;</span></div></td>";
            $_iO36 = _iO0("{id}", $this->_il1y . "_ft", $_il36);
            $_il3 = $this->FooterText;
            if ($this->Aggregate !== NULL) {
                $_il37 = new gridrow();
                $_il37->DataItem[$this->DataField] = $this->_il2t;
                $_il3.=$this->render($_il37);
            } $_iO36 = _iO0("{text}", $_il3, $_iO36);
            $_il2z = strtolower($_SERVER["HTTP_USER_AGENT"]);
            $_iO2z = (strpos($_il2z, "msie 6") !== FALSE) && (strpos($_il2z, "msie 7") === FALSE) && (strpos($_il2z, "msie 8") === FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_il30 = (strpos($_il2z, "msie 7") !== FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_iO36 = _iO0("{visible}", ($this->Visible || $_iO2z || $_il30) ? "" : "kgrHidden", $_iO36);
            $_iO36 = _iO0("{wrap}", $this->FooterStyle->_il2p(), $_iO36);
            $_iO36 = _iO0("{align}", $this->FooterStyle->_iO2p(), $_iO36);
            $_iO36 = _iO0("{valign}", $this->FooterStyle->_il2q(), $_iO36);
            return $_iO36;
        }

        function renderfilter() {
            $_iO37 = "<div class='kgrEditIn\047><input class=\047kgrFiEnTr' type='text\047 id='{id}\047 name=\047{id}' value='{text}\047 onblur='grid_filter_trigger(\042{colid}\042,this)\047 style='width:100%;\047 /></div>";
            $_il38 = _iO0("{id}", $this->_il1y . "_filter_input", $_iO37);
            $_il38 = _iO0("{colid}", $this->_il1y, $_il38);
            $_il38 = _iO0("{text}", htmlentities($this->Filter["Value"], ENT_QUOTES, $this->_il27->_il1v->CharSet), $_il38);
            return $_il38;
        }

        function _iO2v() {
            return _iO12($_POST[$this->_il1y . "_filter_input"]);
        }

        function _iO38() {
            $_il39 = "<td id='{id}' class=\047kgrFilterCell {visible}'><div class=\047kgrIn\047>{content}</div></td>";
            $_iO39 = "\046#160;";
            if ($this->AllowFiltering) {
                $_il3a = "<div>{input}</div><div>{select}</div>";
                $_iO3a = "<select id='{id}' onchange=\047grid_filter_trigger(\042{colid}\042,this)\047 style='width:100%'>{options}</select>";
                $_il3b = "<option value='{value}' {selected} >{text}</option>";
                $_iO3b = $this->FilterOptions;
                $_il3c = "";
                for ($_iO9 = 0; $_iO9 < sizeof($_iO3b); $_iO9++) {
                    $_iO3c = _iO0("{value}", $_iO3b[$_iO9], $_il3b);
                    $_iO3c = _iO0("{text}", $this->_il27->_il1v->Localization->_il22[$_iO3b[$_iO9]], $_iO3c);
                    $_iO3c = _iO0("{selected}", ($this->Filter["Exp"] == $_iO3b[$_iO9]) ? "selected" : "", $_iO3c);
                    $_il3c.=$_iO3c;
                } $_il3d = _iO0("{id}", $this->_il1y . "_filter_select", $_iO3a);
                $_il3d = _iO0("{colid}", $this->_il1y, $_il3d);
                $_il3d = _iO0("{options}", $_il3c, $_il3d);
                $_iO39 = _iO0("{select}", $_il3d, $_il3a);
                $_iO39 = _iO0("{input}", $this->renderfilter(), $_iO39);
            } $_il2z = strtolower($_SERVER["HTTP_USER_AGENT"]);
            $_iO2z = (strpos($_il2z, "msie 6") !== FALSE) && (strpos($_il2z, "msie 7") === FALSE) && (strpos($_il2z, "msie 8") === FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_il30 = (strpos($_il2z, "msie 7") !== FALSE) && (strpos($_il2z, "opera") === FALSE);
            $_il1b = _iO0("{id}", $this->_il1y . "_flt", $_il39);
            $_il1b = _iO0("{visible}", ($this->Visible || $_iO2z || $_il30) ? "" : "kgrHidden", $_il1b);
            $_il1b = _iO0("{content}", $_iO39, $_il1b);
            return $_il1b;
        }

    }

    class _iO3d extends gridcolumn {

        var $AllowHtmlRender = FALSE;

        function render($_iO1l) {
            $_il3e = $this->format($_iO1l->DataItem[$this->DataField]);
            if (!$this->AllowHtmlRender) {
                $_il3e = _iO0("<", "\046#60;", $_il3e);
                $_il3e = _iO0(">", "&#62;", $_il3e);
            } return $_il3e;
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new _iO3d();
            } parent::createinstance($_il2y);
            $_il2y->AllowHtmlRender = $this->AllowHtmlRender;
            return $_il2y;
        }

    }

    class gridboundcolumn extends _iO3d {

        function inlineeditrender($_iO1l) {
            if (!$this->ReadOnly) {
                $_iO3e = "<div class='kgrEditIn kgrECap\047><input id=\047{id}' class='kgrEnNoPo' name='{id}' type=\047text' value=\047{value}\047 style=\047width:100%\047 /></div>";
                $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3e);
                $_il3f = _iO0("{value}", htmlentities($this->format($_iO1l->DataItem[$this->DataField]), ENT_QUOTES, $this->_il27->_il1v->CharSet), $_il3f);
                return $_il3f;
            } else {
                return $this->render($_iO1l);
            }
        }

        function formeditrender($_iO1l) {
            $_iO3e = "<input id='{id}\047 class=\047kgrEnNoPo\047 name=\047{id}' type='text\047 value='{value}\047 style=\047width:90%\047 />";
            $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3e);
            $_il3f = _iO0("{value}", htmlentities($this->format($_iO1l->DataItem[$this->DataField]), ENT_QUOTES, $this->_il27->_il1v->CharSet), $_il3f);
            return $_il3f;
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridboundcolumn();
            } parent::createinstance($_il2y);
            return $_il2y;
        }

    }

    class gridcalculatedcolumn extends gridboundcolumn {

        var $Expression;

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            $this->ReadOnly = TRUE;
            $this->Aggregate = NULL;
        }

        function render($_iO1l) {
            $_iO17 = $this->Expression;
            foreach ($_iO1l->DataItem as $_iO1r => $_il1s) {
                $_iO17 = _iO0("{" . $_iO1r . "}", $_il1s, $_iO17);
            } return eval("return " . $_iO17 . ";");
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridcalculatedcolumn();
            } parent::createinstance($_il2y);
            $_il2y->Expression = $this->Expression;
            return $_il2y;
        }

    }

    class gridnumbercolumn extends gridboundcolumn {

        var $DecimalNumber = 0;
        var $DecimalPoint = ".";
        var $ThousandSeperate = ",";

        function format($_il18) {
            $_iO3f = (double) $_il18;
            return number_format($_iO3f, $this->DecimalNumber, $this->DecimalPoint, $this->ThousandSeperate);
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridnumbercolumn();
            } parent::createinstance($_il2y);
            $_il2y->DecimalNumber = $this->DecimalNumber;
            $_il2y->DecimalPoint = $this->DecimalPoint;
            $_il2y->ThousandSeperate = $this->ThousandSeperate;
            return $_il2y;
        }

    }

    class gridcurrencycolumn extends gridboundcolumn {

        var $Locale = "en_US";
        var $FormatString = "%i";

        function format($_il18) {
            setlocale(LC_MONETARY, $this->Locale);
            return money_format($this->FormatString, $_il18);
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridcurrencycolumn();
            } parent::createinstance($_il2y);
            $_il2y->Locale = $this->Locale;
            $_il2y->FormatString = $this->FormatString;
            return $_il2y;
        }

    }

    class gridtextareacolumn extends _iO3d {

        var $BoxHeight;

        function inlineeditrender($_iO1l) {
            if (!$this->ReadOnly) {
                $_iO3e = "<div class='kgrEditIn kgrECap'><textarea id=\047{id}' class=\047kgrEnNoPo' name=\047{id}' style=\047width:100%;{height}'>{value}</textarea></div>";
                $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3e);
                $_il3f = _iO0("{value}", htmlentities($_iO1l->DataItem[$this->DataField], ENT_QUOTES, $this->_il27->_il1v->CharSet), $_il3f);
                $_il3f = _iO0("{height}", ($this->BoxHeight) ? "height:" . $this->BoxHeight . ";" : "", $_il3f);
                return $_il3f;
            } else {
                return $this->render($_iO1l);
            }
        }

        function formeditrender($_iO1l) {
            $_iO3e = "<textarea id='{id}' class='kgrEnNoPo' name='{id}' style=\047width:90%;{height}'>{value}</textarea>";
            $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3e);
            $_il3f = _iO0("{value}", htmlentities($_iO1l->DataItem[$this->DataField], ENT_QUOTES, $this->_il27->_il1v->CharSet), $_il3f);
            $_il3f = _iO0("{height}", ($this->BoxHeight) ? "height:" . $this->BoxHeight . ";" : "", $_il3f);
            return $_il3f;
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridtextareacolumn();
            } parent::createinstance($_il2y);
            $_il2y->BoxHeight = $this->BoxHeight;
            return $_il2y;
        }

    }

    class griddropdowncolumn extends gridcolumn {

        var $_il3g = array();

        function render($_iO1l) {
            $_il18 = $_iO1l->DataItem[$this->DataField];
            $_il3 = $_iO1l->DataItem[$this->DataField];
            for ($_iO9 = 0; $_iO9 < sizeof($this->_il3g); $_iO9++) {
                if ($_il18 == $this->_il3g[$_iO9][1]) {
                    $_il3 = $this->_il3g[$_iO9][0];
                    break;
                }
            } return $_il3;
        }

        function additem($_il3, $_il18 = NULL) {
            if ($_il18 === NULL) $_il18 = $_il3; array_push($this->_il3g, array($_il3, $_il18));
        }

        function _iO3g($_iO1l, $_iO3a) {
            $_il3b = "<option value='{value}' {selected}>{text}</option>";
            $_il3c = "";
            foreach ($this->_il3g as $_iO16) {
                $_iO3c = _iO0("{text}", $_iO16[0], $_il3b);
                $_iO3c = _iO0("{value}", htmlentities($_iO16[1], ENT_QUOTES, $this->_il27->_il1v->CharSet), $_iO3c);
                $_iO3c = _iO0("{selected}", ($_iO16[1] == $_iO1l->DataItem[$this->DataField]) ? "selected" : "", $_iO3c);
                $_il3c.=$_iO3c;
            } $_il3d = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3a);
            $_il3d = _iO0("{options}", $_il3c, $_il3d);
            return $_il3d;
        }

        function inlineeditrender($_iO1l) {
            if (!$this->ReadOnly) {
                $_iO3a = "<span class='kgrECap'><select id='{id}' name='{id}' style=\047width:100%'>{options}</select></span>";
                return $this->_iO3g($_iO1l, $_iO3a);
            } else {
                return $this->render($_iO1l);
            }
        }

        function formeditrender($_iO1l) {
            $_iO3a = "<select id=\047{id}' name=\047{id}\047 style=\047width:90%'>{options}</select>";
            return $this->_iO3g($_iO1l, $_iO3a);
        }

        function renderfilter() {
            $_iO3a = "<span class='kgrECap'><select id='{id}' name=\047{id}' style='width:100%\047 onchange=\047grid_filter_trigger(\042{colid}\042,this)\047>{options}</select></span>";
            $_il3b = "<option value=\047{value}' {selected}>{text}</option>";
            $_il3c = "";
            foreach ($this->_il3g as $_iO16) {
                $_iO3c = _iO0("{text}", $_iO16[0], $_il3b);
                $_iO3c = _iO0("{value}", $_iO16[1], $_iO3c);
                $_iO3c = _iO0("{selected}", ($_iO16[1] == $this->Filter["Value"]) ? "selected" : "", $_iO3c);
                $_il3c.=$_iO3c;
            } $_il3d = _iO0("{id}", $this->_il1y . "_filter_input", $_iO3a);
            $_il3d = _iO0("{colid}", $this->_il1y, $_il3d);
            $_il3d = _iO0("{options}", $_il3c, $_il3d);
            return $_il3d;
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new griddropdowncolumn();
            } parent::createinstance($_il2y);
            $_il2y->_il3g = $this->_il3g;
            return $_il2y;
        }

    }

    class gridrowselectcolumn extends gridcolumn {

        var $Align = "center";

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            $this->AllowSorting = FALSE;
            $this->AllowResizing = FALSE;
            $this->AllowFiltering = FALSE;
            $this->AllowGrouping = FALSE;
            $this->ReadOnly = TRUE;
            $this->Aggregate = NULL;
        }

        function render($_iO1l) {
            $_il3h = "<span class='kgrECap'><input type=\047checkbox' class=\047kgrSelectSingleRow' {checked} onclick='grid_toggle_select(this)\047 /></span>";
            $_iO3h = _iO0("{checked}", $_iO1l->Selected ? "checked" : "", $_il3h);
            return $_iO3h;
        }

        function _iO31() {
            $_il32 = "<col id=\047{id}\047 name=\047{id}' style=\047{width}\047 class='kgrColumnSelect {resizable} {visible}\047/>";
            $_il2l = _iO0("{id}", $this->_il1y, $_il32);
            $_il2l = _iO0("{resizable}", ($this->AllowResizing) ? "kgrResizable" : "", $_il2l);
            $_il2l = _iO0("{width}", ($this->Width != NULL) ? "width:" . $this->Width . ";" : "", $_il2l);
            $_il2l = _iO0("{visible}", ($this->Visible) ? "" : "kgrHidden", $_il2l);
            return $_il2l;
        }

        function renderheader() {
            $_il3h = "<span class='kgrECap'><input type=\047checkbox' class=\047kgrSelectAllRows\047 {checked} onclick=\047grid_toggle_select(this)\047 /></span>";
            $_il1l = $this->_il27->_il3i;
            $_iO3i = TRUE;
            for ($_iO9 = 0; $_iO9 < sizeof($_il1l); $_iO9++) {
                if (!$_il1l[$_iO9]->Selected) {
                    $_iO3i = FALSE;
                    break;
                }
            } $this->HeaderText = _iO0("{checked}", $_iO3i ? "checked" : "", $_il3h);
            return parent::renderheader();
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridrowselectcolumn();
            } parent::createinstance($_il2y);
            return $_il2y;
        }

    }

    class gridbooleancolumn extends gridcolumn {

        var $TrueText = "True";
        var $FalseText = "False";
        var $UseCheckBox = FALSE;

        function render($_iO1l) {
            $_il3f = "";
            if ($this->UseCheckBox) {
                $_iO3e = "<input type=\047checkbox' {checked} disabled />";
                $_il3f = _iO0("{checked}", ($_iO1l->DataItem[$this->DataField]) ? "checked" : "", $_iO3e);
            } else {
                $_il3f = ($_iO1l->DataItem[$this->DataField]) ? $this->TrueText : $this->FalseText;
            } return $_il3f;
        }

        function inlineeditrender($_iO1l, $_il3j = FALSE) {
            if (!$this->ReadOnly) {
                $_il3f = "";
                if ($this->UseCheckBox) {
                    $_iO3e = "<span class='kgrECap'><input  id='{id}' name='{id}' type=\047checkbox\047 {checked} /></span>";
                    $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3e);
                    $_il3f = _iO0("{checked}", ($_iO1l->DataItem[$this->DataField]) ? "checked" : "", $_il3f);
                } else {
                    $_iO3a = "<span class='kgrECap'><select id='{id}' name=\047{id}' style='width:{width}'>{options}</select></span>";
                    $_il3b = "<option value='{value}' {selected}>{text}</option>";
                    $_iO3j = _iO0("{value}", "1", $_il3b);
                    $_iO3j = _iO0("{selected}", ($_iO1l->DataItem[$this->DataField]) ? "selected" : "", $_iO3j);
                    $_iO3j = _iO0("{text}", $this->TrueText, $_iO3j);
                    $_il3k = _iO0("{value}", "0", $_il3b);
                    $_il3k = _iO0("{selected}", (!$_iO1l->DataItem[$this->DataField]) ? "selected" : "", $_il3k);
                    $_il3k = _iO0("{text}", $this->FalseText, $_il3k);
                    $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3a);
                    $_il3f = _iO0("{options}", $_iO3j . $_il3k, $_il3f);
                    $_il3f = _iO0("{width}", ($_il3j) ? "90%" : "100%", $_il3f);
                } return $_il3f;
            } else {
                return $this->render($_iO1l);
            }
        }

        function formeditrender($_iO1l) {
            return $this->inlineeditrender($_iO1l, TRUE);
        }

        function geteditvalue($_iO1l) {
            if ($this->UseCheckBox) {
                return isset($_POST[$_iO1l->_il1y . "_" . $this->_il1y . "_input"]) ? 1 : 0;
            } else {
                return parent::geteditvalue($_iO1l);
            }
        }

        function renderfilter() {
            $_il3f = "";
            if ($this->UseCheckBox) {
                $_iO3e = "<span class='kgrECap'><input  id='{id}' name='{id}' type='checkbox\047 {checked} onchange=\047grid_filter_trigger(\042{colid}\042,this)\047 /></span>";
                $_il3f = _iO0("{id}", $this->_il1y . "_filter_input", $_iO3e);
                $_il3f = _iO0("{colid}", $this->_il1y, $_il3f);
                $_il3f = _iO0("{checked}", ($this->Filter["Value"]) ? "checked" : "", $_il3f);
            } else {
                $_iO3a = "<span class='kgrECap\047><select id='{id}' name=\047{id}' style='width:100%' onchange='grid_filter_trigger(\042{colid}\042,this)\047>{options}</select></span>";
                $_il3b = "<option value='{value}' {selected}>{text}</option>";
                $_iO3j = _iO0("{value}", "1", $_il3b);
                $_iO3j = _iO0("{selected}", ($this->Filter["Value"]) ? "selected" : "", $_iO3j);
                $_iO3j = _iO0("{text}", $this->TrueText, $_iO3j);
                $_il3k = _iO0("{value}", "0", $_il3b);
                $_il3k = _iO0("{selected}", (!$this->Filter["Value"]) ? "selected" : "", $_il3k);
                $_il3k = _iO0("{text}", $this->FalseText, $_il3k);
                $_il3f = _iO0("{id}", $this->_il1y . "_filter_input", $_iO3a);
                $_il3f = _iO0("{colid}", $this->_il1y, $_il3f);
                $_il3f = _iO0("{options}", $_iO3j . $_il3k, $_il3f);
            } return $_il3f;
        }

        function _iO2v() {
            if ($this->UseCheckBox) {
                return isset($_POST[$this->_il1y . "_filter_input"]) ? 1 : 0;
            } else {
                return parent::_iO2v();
            }
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridbooleancolumn();
            } parent::createinstance($_il2y);
            $_il2y->TrueText = $this->TrueText;
            $_il2y->FalseText = $this->FalseText;
            $_il2y->UseCheckBox = $this->UseCheckBox;
            return $_il2y;
        }

    }

    class gridimagecolumn extends gridcolumn {

        var $ImageFolder = "";
        var $CssClass = "";

        function render($_iO1l) {
            $_iO3e = "<img src='{src}' class='{class}' alt='' />";
            $_il3f = _iO0("{src}", (($this->ImageFolder != "") ? ($this->ImageFolder . "/") : "") . $_iO1l->DataItem[$this->DataField], $_iO3e);
            $_il3f = _iO0("{class}", $this->CssClass, $_il3f);
            return $_il3f;
        }

        function inlineeditrender($_iO1l) {
            return $this->render($_iO1l);
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridimagecolumn();
            } parent::createinstance($_il2y);
            $_il2y->ImageFolder = $this->ImageFolder;
            $_il2y->CssClass = $this->CssClass;
            return $_il2y;
        }

    }

    class gridcustomcolumn extends gridcolumn {

        var $ItemTemplate;
        var $EditItemTemplate;
        var $AllowSorting = FALSE;

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            $this->ReadOnly = TRUE;
        }

        function render($_iO1l) {
            $_il3f = $this->ItemTemplate;
            foreach ($_iO1l->DataItem as $_iO1r => $_il1s) {
                $_il3f = _iO0("{" . $_iO1r . "}", $_il1s, $_il3f);
            } return $_il3f;
        }

        function inlineeditrender($_iO1l) {
            $_il3f = $this->EditItemTemplate;
            foreach ($_iO1l->DataItem as $_iO1r => $_il1s) {
                $_il3f = _iO0("{" . $_iO1r . "}", $_il1s, $_il3f);
            } return $_il3f;
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridcustomcolumn();
            } parent::createinstance($_il2y);
            $_il2y->ItemTemplate = $this->ItemTemplate;
            $_il2y->EditItemTemplate = $this->EditItemTemplate;
            return $_il2y;
        }

    }

    class gridcommandcolumn extends gridcolumn {

        var $CommandText = "Command";
        var $OnClick = "";
        var $CssClass = "";

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            $this->AllowSorting = FALSE;
            $this->AllowFiltering = FALSE;
            $this->AllowGrouping = FALSE;
            $this->AllowExporting = FALSE;
            $this->ReadOnly = TRUE;
            $this->Aggregate = NULL;
        }

        function render($_iO1l) {
            $_iO3e = "<span class=\047kgrECap'><input type=\047button\047 class='{class}' value='{text}' onclick=\047{onclick}' /></span>";
            $_il3f = _iO0("{class}", $this->CssClass, $_iO3e);
            $_il3 = $this->CommandText;
            $_iO3k = $this->OnClick;
            foreach ($_iO1l->DataItem as $_iO1r => $_il1s) {
                $_il3 = _iO0("{" . $_iO1r . "}", $_il1s, $_il3);
                $_iO3k = _iO0("{" . $_iO1r . "}", $_il1s, $_iO3k);
            } $_il3f = _iO0("{text}", $_il3, $_il3f);
            $_il3f = _iO0("{onclick}", $_iO3k, $_il3f);
            return $_il3f;
        }

        function inlineeditrender($_iO1l) {
            return $this->render($_iO1l);
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridcommandcolumn();
            } parent::createinstance($_il2y);
            $_il2y->CommandText = $this->CommandText;
            $_il2y->OnClick = $this->OnClick;
            $_il2y->CssClass = $this->CssClass;
            return $_il2y;
        }

    }

    class grideditdeletecolumn extends gridcolumn {

        var $ButtonType = "Auto";
        var $EditButtonText;
        var $DeleteButtonText;
        var $ConfirmButtonText;
        var $CancelButtonText;
        var $EditButtonImageUrl = "";
        var $DeleteButtonImageUrl = "";
        var $ConfirmButtonImageUrl = "";
        var $CancelButtonImageUrl = "";
        var $EditButtonCssClass = "";
        var $ConfirmButtonCssClass = "";
        var $CancelButtonCssClass = "";
        var $DeleteButtonCssClass = "";
        var $ShowEditButton = TRUE;
        var $ShowDeleteButton = TRUE;

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            $this->AllowSorting = FALSE;
            $this->AllowResizing = FALSE;
            $this->AllowFiltering = FALSE;
            $this->AllowGrouping = FALSE;
            $this->AllowExporting = FALSE;
            $this->ReadOnly = TRUE;
            $this->Aggregate = NULL;
            if ($this->EditButtonText === NULL) $this->EditButtonText = $_il29->_il1v->Localization->_il22["Edit"]; if ($this->DeleteButtonText === NULL) $this->DeleteButtonText = $_il29->_il1v->Localization->_il22["Delete"]; if ($this->ConfirmButtonText === NULL) $this->ConfirmButtonText = $_il29->_il1v->Localization->_il22["Confirm"]; if ($this->CancelButtonText === NULL) $this->CancelButtonText = $_il29->_il1v->Localization->_il22["Cancel"];
        }

        function render($_iO1l) {
            $_il32 = "<span class='kgrECap'>{edit} {delete}</span>";
            $_il3l = "";
            switch (strtolower($this->ButtonType)) {
                case "auto": $_il32 = "<span class='kgrECap' style=\047white-space:nowrap;'>{edit}{delete}</span>";
                    $_il3l = "<a type='button' class='{autoclass} {class}' onclick=\047{onclick}' href='javascript:void 0\047>{text}</a>";
                    break;
                case "link": $_il3l = "<a type=\047button' class='{class}' onclick=\047{onclick}\047 href=\047javascript:void 0'>{text}</a>";
                    break;
                case "image": $_il3l = "<img src='{src}' onclick='{onclick}' class=\047{class}\047 />";
                    break;
                case "button": default : $_il3l = "<input class='{class}\047 type='button' value=\047{text}' onclick='{onclick}\047 />";
                    break;
            } $_iO3l = _iO0("{text}", $this->EditButtonText, $_il3l);
            $_iO3l = _iO0("{autoclass}", "kgrLinkEdit", $_iO3l);
            $_iO3l = _iO0("{class}", $this->EditButtonCssClass, $_iO3l);
            $_iO3l = _iO0("{src}", $this->EditButtonImageUrl, $_iO3l);
            $_iO3l = _iO0("{onclick}", "grid_edit(this)", $_iO3l);
            $_il3m = _iO0("{text}", $this->DeleteButtonText, $_il3l);
            $_il3m = _iO0("{autoclass}", "kgrLinkDelete", $_il3m);
            $_il3m = _iO0("{class}", $this->DeleteButtonCssClass, $_il3m);
            $_il3m = _iO0("{src}", $this->DeleteButtonImageUrl, $_il3m);
            $_il3m = _iO0("{onclick}", "grid_delete(this)", $_il3m);
            $_il2l = _iO0("{edit}", ($this->ShowEditButton) ? $_iO3l : "", $_il32);
            $_il2l = _iO0("{delete}", ($this->ShowDeleteButton) ? $_il3m : "", $_il2l);
            return $_il2l;
        }

        function inlineeditrender($_iO1l) {
            if ($this->ShowEditButton) {
                $_il32 = "<span class=\047kgrECap'>{confirm} {cancel}</span>";
                $_il3l = "";
                switch (strtolower($this->ButtonType)) {
                    case "auto": $_il32 = "<span class='kgrECap\047 style=\047white-space:nowrap;'>{confirm}{cancel}</span>";
                        $_il3l = "<a type='button\047 class='{autoclass} {class}' onclick='{onclick}\047 href=\047javascript:void 0'>{text}</a>";
                        break;
                    case "link": $_il3l = "<a type='button\047 class=\047{class}\047 onclick=\047{onclick}\047 href='javascript:void 0'>{text}</a>";
                        break;
                    case "image": $_il3l = "<input type=\047image' src='{src}' onclick='{onclick}\047 class='{class}\047 />";
                        break;
                    case "button": default : $_il3l = "<input class=\047{class}' type=\047button\047 value=\047{text}\047 onclick='{onclick}\047 />";
                        break;
                } $_iO3m = _iO0("{text}", $this->ConfirmButtonText, $_il3l);
                $_iO3m = _iO0("{autoclass}", "kgrLinkConfirm", $_iO3m);
                $_iO3m = _iO0("{class}", $this->ConfirmButtonCssClass, $_iO3m);
                $_iO3m = _iO0("{src}", $this->ConfirmButtonImageUrl, $_iO3m);
                $_iO3m = _iO0("{onclick}", "grid_confirm_edit(this)", $_iO3m);
                $_il3n = _iO0("{text}", $this->CancelButtonText, $_il3l);
                $_il3n = _iO0("{autoclass}", "kgrLinkCancel", $_il3n);
                $_il3n = _iO0("{class}", $this->CancelButtonCssClass, $_il3n);
                $_il3n = _iO0("{src}", $this->CancelButtonImageUrl, $_il3n);
                $_il3n = _iO0("{onclick}", "grid_cancel_edit(this)", $_il3n);
                $_il2l = _iO0("{confirm}", $_iO3m, $_il32);
                $_il2l = _iO0("{cancel}", $_il3n, $_il2l);
                return $_il2l;
            } else {
                return $this->render($_iO1l);
            }
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new grideditdeletecolumn();
            } parent::createinstance($_il2y);
            $_il2y->ButtonType = $this->ButtonType;
            $_il2y->ReadOnly = $this->ReadOnly;
            $_il2y->EditButtonText = $this->EditButtonText;
            $_il2y->DeleteButtonText = $this->DeleteButtonText;
            $_il2y->ConfirmButtonText = $this->ConfirmButtonText;
            $_il2y->CancelButtonText = $this->CancelButtonText;
            $_il2y->EditButtonImageUrl = $this->EditButtonImageUrl;
            $_il2y->DeleteButtonImageUrl = $this->DeleteButtonImageUrl;
            $_il2y->ConfirmButtonImageUrl = $this->ConfirmButtonImageUrl;
            $_il2y->CancelButtonImageUrl = $this->CancelButtonImageUrl;
            $_il2y->EditButtonCssClass = $this->EditButtonCssClass;
            $_il2y->DeleteButtonCssClass = $this->DeleteButtonCssClass;
            $_il2y->ConfirmButtonCssClass = $this->ConfirmButtonCssClass;
            $_il2y->CancelButtonCssClass = $this->CancelButtonCssClass;
            $_il2y->ShowEditButton = $this->ShowEditButton;
            $_il2y->ShowDeleteButton = $this->ShowDeleteButton;
            return $_il2y;
        }

    }

    class gridexpanddetailcolumn extends gridcolumn {

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            $this->AllowSorting = FALSE;
            $this->AllowResizing = FALSE;
            $this->AllowFiltering = FALSE;
            $this->AllowGrouping = FALSE;
            $this->AllowExporting = FALSE;
            $this->ReadOnly = TRUE;
            $this->Aggregate = NULL;
        }

        function render($_iO1l) {
            $_il32 = "<span class='kgr{status} kgrECap' onclick='grid_{command}(this)'> </span>";
            $_il2l = _iO0("{status}", ($_iO1l->Expand) ? "Expand" : "Collapse", $_il32);
            $_il2l = _iO0("{command}", ($_iO1l->Expand) ? "collapse" : "expand", $_il2l);
            return $_il2l;
        }

        function _iO31() {
            $_il32 = "<col id='{id}' name=\047{id}' style='{width}' class=\047kgrColumnExpand {resizable} {visible}\047/>";
            $_il2l = _iO0("{id}", $this->_il1y, $_il32);
            $_il2l = _iO0("{resizable}", ($this->AllowResizing) ? "kgrResizable" : "", $_il2l);
            $_il2l = _iO0("{width}", ($this->Width != NULL) ? "width:" . $this->Width . ";" : "", $_il2l);
            $_il2l = _iO0("{visible}", ($this->Visible) ? "" : "kgrHidden", $_il2l);
            return $_il2l;
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridexpanddetailcolumn();
            } parent::createinstance($_il2y);
            return $_il2y;
        }

    }

    class _iO3n extends gridcolumn {

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            $this->AllowSorting = FALSE;
            $this->AllowResizing = FALSE;
            $this->AllowFiltering = FALSE;
            $this->AllowGrouping = FALSE;
            $this->ReadOnly = TRUE;
            $this->Aggregate = NULL;
            $this->AllowExporting = FALSE;
        }

        function _iO31() {
            $_il32 = "<col id='{id}\047 name='{id}' style=\047{width}\047 class='kgrColumnGroup'/>";
            $_il2l = _iO0("{id}", $this->_il1y, $_il32);
            $_il2l = _iO0("{width}", ($this->Width != NULL) ? "width:" . $this->Width . ";" : "", $_il2l);
            return $_il2l;
        }

        function _iO1z($_iO1l) {
            $_iO2y = "<td id='{id}\047 class=\047kgrCell kgrGroupCol'><div class=\047kgrIn\047 style='\047>\046#160;</div></td>";
            $_iO2l = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y, $_iO2y);
            return $_iO2l;
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new _iO3n();
            } parent::createinstance($_il2y);
            return $_il2y;
        }

    }

    class griddatetimecolumn extends gridcolumn {

        var $Picker;
        var $FormatString;

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            if ($this->FormatString === NULL) {
                $this->FormatString = "m/d/Y g:i A";
                if ($this->Picker !== NULL) {
                    switch (strtolower(get_class($this->Picker))) {
                        case "kooldatetimepicker": $this->FormatString = $this->Picker->DateFormat . " " . $this->Picker->TimeFormat;
                            break;
                        case "kooldatepicker": $this->FormatString = $this->Picker->DateFormat;
                            break;
                        case "kooltimepicker": $this->FormatString = $this->Picker->TimeFormat;
                            break;
                    }
                }
            }
        }

        function inlineeditrender($_iO1l) {
            if (!$this->ReadOnly) {
                $_il3o = $_iO1l->DataItem[$this->DataField];
                $_iO3o = strtotime($_il3o);
                if ($this->Picker !== NULL) {
                    $_il3p = "m/d/Y g:i A";
                    switch (strtolower(get_class($this->Picker))) {
                        case "kooldatetimepicker": $_il3p = $this->Picker->DateFormat . " " . $this->Picker->TimeFormat;
                            break;
                        case "kooldatepicker": $_il3p = $this->Picker->DateFormat;
                            break;
                        case "kooltimepicker": $_il3p = $this->Picker->TimeFormat;
                            break;
                    } $this->Picker->id = $_iO1l->_il1y . "_" . $this->_il1y . "_input";
                    $this->Picker->Width = "100%";
                    $this->Picker->ClientEvents = array();
                    if ($this->_il27->AllowScrolling == TRUE) {
                        $this->Picker->ClientEvents["OnBeforeDatePickerOpen"] = $this->Picker->id . "_onbeforeopen";
                        $this->Picker->ClientEvents["OnBeforeTimePickerOpen"] = $this->Picker->id . "_onbeforeopen";
                        $this->Picker->ClientEvents["OnDatePickerClose"] = $this->Picker->id . "_onclose";
                        $this->Picker->ClientEvents["OnTimePickerClose"] = $this->Picker->id . "_onclose";
                    } $this->Picker->init();
                    if ($this->NullDisplayText != NULL && ($_il3o == NULL || $_il3o == "0000-00-00 00:00:00")) {
                        $this->Picker->Value = "";
                    } else {
                        $this->Picker->Value = date($_il3p, $_iO3o);
                    } $_iO3e = "<div class='kgrECap'>{picker}{js_edit_overflow}</div>";
                    if ($this->_il27->AllowScrolling == TRUE) {
                        $_iO3e = "<div class='kgrECap'>{js_init_openclose}<div class=\047kgrDateTimePickerOut\047><div class=\047kgrDateTimePickerIn'>{picker}</div></div>{js_edit_overflow}</div>";
                    } $_iO3p = "<script type='text/javascript'>function {id}_onbeforeopen(){grid_on_datetimepicker_open(\047{id}\047);return true;} function {id}_onclose(){grid_on_datetimepicker_close('{id}\047);} </script>";
                    $_il3q = "<script type='text/javascript\047>document.getElementById(\047{id}\047).className+=' kgrEnNoPo\047;var _agent=navigator.userAgent.toLowerCase();if(!((_agent.indexOf(\047msie 6\047)!=-1 || _agent.indexOf(\047msie 7')!=-1)\046&_agent.indexOf(\047msie 8\047)==-1 \046\046_agent.indexOf('opera\047)==-1)){document.getElementById(\047{id}_bound\047).parentNode.parentNode.style.overflow=\047visible';}</script>";
                    $_iO3q = _iO0("{id}", $this->Picker->id, $_il3q);
                    $_il3r = _iO0("{id}", $this->Picker->id, $_iO3p);
                    $_il3f = _iO0("{picker}", $this->Picker->render(), $_iO3e);
                    $_il3f = _iO0("{js_init_openclose}", $_il3r, $_il3f);
                    $_il3f = _iO0("{js_edit_overflow}", $_iO3q, $_il3f);
                    return $_il3f;
                } else {
                    if ($this->NullDisplayText != NULL && ($_il3o == NULL || $_il3o == "0000-00-00 00:00:00")) {
                        $_iO3r = "";
                    } else {
                        $_iO3r = date($this->FormatString, $_iO3o);
                    } $_iO3e = "<div class='kgrEditIn kgrECap'><input id=\047{id}' class=\047kgrEnNoPo' name='{id}\047 type=\047text' value='{value}' style='width:100%\047 /></div>";
                    $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3e);
                    $_il3f = _iO0("{value}", ($_il3o != "") ? htmlentities($_iO3r, ENT_QUOTES, $this->_il27->_il1v->CharSet) : "", $_il3f);
                    return $_il3f;
                }
            } else {
                return $this->render($_iO1l);
            }
        }

        function formeditrender($_iO1l) {
            $_il3o = $_iO1l->DataItem[$this->DataField];
            $_iO3o = strtotime($_il3o);
            if ($this->Picker !== NULL) {
                $_il3p = "m/d/Y g:i A";
                switch (strtolower(get_class($this->Picker))) {
                    case "kooldatetimepicker": $_il3p = $this->Picker->DateFormat . " " . $this->Picker->TimeFormat;
                        break;
                    case "kooldatepicker": $_il3p = $this->Picker->DateFormat;
                        break;
                    case "kooltimepicker": $_il3p = $this->Picker->TimeFormat;
                        break;
                } $this->Picker->id = $_iO1l->_il1y . "_" . $this->_il1y . "_input";
                $this->Picker->Width = "90%";
                $this->Picker->ClientEvents = array();
                $this->Picker->init();
                if ($this->NullDisplayText != NULL && ($_il3o == NULL || $_il3o == "0000-00-00 00:00:00")) {
                    $_iO3r = "";
                } else {
                    $_iO3r = date($_il3p, $_iO3o);
                } $this->Picker->Value = $_iO3r;
                $_iO3e = "<div class='kgrECap\047>{picker}{js_edit_overflow}</div>";
                $_il3q = "<script type=\047text/javascript'>document.getElementById(\047{id}\047).className+=' kgrEnNoPo\047;</script>";
                $_iO3q = _iO0("{id}", $this->Picker->id, $_il3q);
                $_il3f = _iO0("{picker}", $this->Picker->render(), $_iO3e);
                $_il3f = _iO0("{js_edit_overflow}", $_iO3q, $_il3f);
                return $_il3f;
            } else {
                if ($this->NullDisplayText != NULL && ($_il3o == NULL || $_il3o == "0000-00-00 00:00:00")) {
                    $_iO3r = "";
                } else {
                    $_iO3r = date($_il3p, $_iO3o);
                } $_iO3e = "<div class='kgrEditIn kgrECap'><input id=\047{id}' class=\047kgrEnNoPo' name='{id}\047 type=\047text' value='{value}' style=\047width:90%' /></div>";
                $_il3f = _iO0("{id}", $_iO1l->_il1y . "_" . $this->_il1y . "_input", $_iO3e);
                $_il3f = _iO0("{value}", ($_il3o != "") ? htmlentities($_iO3r, ENT_QUOTES, $this->_il27->_il1v->CharSet) : "", $_il3f);
                return $_il3f;
            }
        }

        function renderfilter() {
            $_il3o = $this->Filter["Value"];
            $_iO3o = strtotime($_il3o);
            if ($this->Picker !== NULL) {
                $_il3p = "m/d/Y g:i A";
                switch (strtolower(get_class($this->Picker))) {
                    case "kooldatetimepicker": $_il3p = $this->Picker->DateFormat . " " . $this->Picker->TimeFormat;
                        break;
                    case "kooldatepicker": $_il3p = $this->Picker->DateFormat;
                        break;
                    case "kooltimepicker": $_il3p = $this->Picker->TimeFormat;
                        break;
                } $this->Picker->id = $this->_il1y . "_filter_input";
                $this->Picker->Width = "100%";
                if ($this->_il27->AllowScrolling == TRUE) {
                    $this->Picker->ClientEvents["OnBeforeDatePickerOpen"] = $this->Picker->id . "_onbeforeopen";
                    $this->Picker->ClientEvents["OnBeforeTimePickerOpen"] = $this->Picker->id . "_onbeforeopen";
                    $this->Picker->ClientEvents["OnDatePickerClose"] = $this->Picker->id . "_onclose";
                    $this->Picker->ClientEvents["OnTimePickerClose"] = $this->Picker->id . "_onclose";
                } $this->Picker->ClientEvents["OnSelect"] = $this->Picker->id . "_onselect";
                $this->Picker->init();
                $this->Picker->Value = ($_il3o != "") ? date($_il3p, $_iO3o) : "";
                $_iO3e = "<div class='kgrECap'>{picker}{js_init_onselect}</div>";
                if ($this->_il27->AllowScrolling == TRUE) {
                    $_iO3e = "<div class=\047kgrECap'><div class='kgrDateTimePickerOut\047><div class='kgrDateTimePickerIn\047>{js_init_openclose}{picker}{js_init_onselect}</div></div></div>";
                } $_il3s = "<script type='text/javascript\047>function {id}_onselect(){grid_filter_trigger(\042{colid}\042,document.getElementById(\047{id}'))};var _input = document.getElementById(\047{id}\047);_input.className+='kgrFiEnTr'; var _agent=navigator.userAgent.toLowerCase();if(!((_agent.indexOf(\047msie 6\047)!=-1 || _agent.indexOf(\047msie 7\047)!=-1)&&_agent.indexOf(\047msie 8\047)==-1 \046\046_agent.indexOf('opera\047)==-1)){document.getElementById('{id}_bound\047).parentNode.parentNode.parentNode.style.overflow='visible\047;}</script>";
                $_iO3p = "<script type='text/javascript\047>function {id}_onbeforeopen(){grid_on_datetimepicker_open('{id}');return true;} function {id}_onclose(){grid_on_datetimepicker_close('{id}');}</script>";
                $_iO3s = _iO0("{id}", $this->Picker->id, $_il3s);
                $_iO3s = _iO0("{colid}", $this->_il1y, $_iO3s);
                $_il3r = _iO0("{id}", $this->Picker->id, $_iO3p);
                $_il3f = _iO0("{picker}", $this->Picker->render(), $_iO3e);
                $_il3f = _iO0("{js_init_onselect}", $_iO3s, $_il3f);
                $_il3f = _iO0("{js_init_openclose}", $_il3r, $_il3f);
                return $_il3f;
            } else {
                $_iO37 = "<div class='kgrEditIn\047><input class=\047kgrFiEnTr\047 type=\047text\047 id=\047{id}' name=\047{id}' value='{text}' onblur='grid_filter_trigger(\042{colid}\042,this)\047 style=\047width:100%;\047 /></div>";
                $_il38 = _iO0("{id}", $this->_il1y . "_filter_input", $_iO37);
                $_il38 = _iO0("{colid}", $this->_il1y, $_il38);
                $_il38 = _iO0("{text}", ($_il3o != "") ? htmlentities(date($this->FormatString, $_iO3o), ENT_QUOTES, $this->_il27->_il1v->CharSet) : "", $_il38);
                return $_il38;
            }
        }

        function render($_iO1l) {
            if (($_iO1l->DataItem[$this->DataField] == NULL || $_iO1l->DataItem[$this->DataField] == "0000-00-00 00:00:00") && $this->NullDisplayText !== NULL) {
                return $this->NullDisplayText;
            } else {
                $_iO3o = strtotime($_iO1l->DataItem[$this->DataField]);
                return date($this->FormatString, $_iO3o);
            }
        }

        function geteditvalue($_iO1l) {
            $_il3t = _iO12($_POST[$_iO1l->_il1y . "_" . $this->_il1y . "_input"]);
            if (trim($_il3t) == "") {
                if ($this->DefaultValue != NULL) {
                    $_iO3o = strtotime($this->DefaultValue);
                    return date("Y-m-d H:i:s", $_iO3o);
                } else {
                    return NULL;
                }
            } else {
                $_iO3o = strtotime($_il3t);
                return date("Y-m-d H:i:s", $_iO3o);
            }
        }

        function _iO2v() {
            $_il3t = _iO12($_POST[$this->_il1y . "_filter_input"]);
            $_iO3o = strtotime($_il3t);
            return date("Y-m-d H:i:s", $_iO3o);
        }

        function createinstance($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new griddatetimecolumn();
            } parent::createinstance($_il2y);
            $_il2y->Picker = $this->Picker;
            $_il2y->FormatString = $this->FormatString;
            return $_il2y;
        }

    }

    class _iO3t implements _il1t {

        var $_il1y;
        var $_il27;
        var $_iO26;
        var $TableView;
        var $PageIndex = 0;
        var $_il3u;
        var $_iO3u;
        var $PageSize;
        var $ShowPageInfo = TRUE;
        var $PageInfoTemplate;
        var $ShowPageSize = FALSE;
        var $PageSizeText;
        var $PageSizeOptions = "5,10,20,40";
        var $Position = "bottom";

        function _iO1w($_il29) {
            $this->_il27 = $_il29;
            $this->TableView = $_il29;
            $this->_iO26 = $_il29->_iO26;
            if ($this->PageSize === NULL) $this->PageSize = $this->_il27->PageSize; if ($this->PageInfoTemplate === NULL) $this->PageInfoTemplate = $_il29->_il1v->Localization->_iO22["PageInfoTemplate"]; if ($this->PageSizeText === NULL) $this->PageSizeText = $_il29->_il1v->Localization->_iO22["PageSizeText"];
        }

        function _iO1t() {
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
                $this->PageIndex = $_iO29["PageIndex"];
                $this->_il3u = $_iO29["_TotalPages"];
                $this->_iO3u = $_iO29["_TotalRows"];
                $this->PageSize = $_iO29["PageSize"];
            }
        }

        function _il1u() {
            $this->_iO26->_il1q[$this->_il1y] = array("PageIndex" => $this->PageIndex, "_TotalPages" => $this->_il3u, "PageSize" => $this->PageSize, "_TotalRows" => $this->_iO3u);
        }

        function _il2f($_ilm) {
            if (isset($_ilm->_il22[$this->_il1y])) {
                $_iO2f = $_ilm->_il22[$this->_il1y];
                switch ($_iO2f["Command"]) {
                    case "GoPage": if ($this->_il27->_il1v->EventHandler->onbeforepageindexchange($this, array("NewPageIndex" => $_iO2f["Args"]["PageIndex"])) == TRUE) {
                            $this->PageIndex = $_iO2f["Args"]["PageIndex"];
                            $this->_il27->_il1z = TRUE;
                            $this->_il27->_il1v->EventHandler->onpageindexchange($this, array());
                        } break;
                    case "ChangePageSize": if ($this->_il27->_il1v->EventHandler->onbeforepagesizechange($this, array("NewPageSize" => $_iO2f["Args"]["PageSize"])) == TRUE) {
                            $this->PageSize = $_iO2f["Args"]["PageSize"];
                            $this->_il27->_il1z = TRUE;
                            $this->_il27->_il1v->EventHandler->onpagesizechange($this, array());
                        } break;
                }
            } $this->_il3u = ceil($this->_iO3u / $this->PageSize);
            if ($this->PageIndex >= $this->_il3u) $this->PageIndex = $this->_il3u - 1; if ($this->PageIndex < 0) $this->PageIndex = 0;
        }

        function _iO1z() {
            return "";
        }

        function _il3v() {
            $_iO3v = "<div class='kgrInfo\047>{text}</div>";
            $_il3 = _iO0("{PageIndex}", ($this->_il3u > 0) ? ($this->PageIndex + 1) : 0, $this->PageInfoTemplate);
            $_il3 = _iO0("{TotalPages}", $this->_il3u, $_il3);
            $_il3w = ($this->_il3u > 0) ? ($this->PageIndex * $this->PageSize + 1) : 0;
            $_iO3w = ($this->PageIndex + 1) * $this->PageSize;
            if ($_iO3w > $this->_iO3u) $_iO3w = $this->_iO3u; $_il3 = _iO0("{FirstIndexInPage}", $_il3w, $_il3);
            $_il3 = _iO0("{LastIndexInPage}", $_iO3w, $_il3);
            $_il3 = _iO0("{TotalRows}", $this->_iO3u, $_il3);
            $_il3x = _iO0("{text}", $_il3, $_iO3v);
            return $_il3x;
        }

        function _iO3x() {
            $_il3y = "<div class='kgrPageSize'>{text}{select}</div>";
            $_iO3a = "<select onchange='grid_pagesize_select_onchange(this)'>{options}</select>";
            $_il3b = "<option value=\047{value}' {selected}>{value}</option>";
            $_il3c = "";
            $_iO3y = explode(',', $this->PageSizeOptions);
            for ($_iO9 = 0; $_iO9 < sizeof($_iO3y); $_iO9++) {
                $_iO3c = _iO0("{value}", $_iO3y[$_iO9], $_il3b);
                $_iO3c = _iO0("{selected}", ($this->PageSize == (int) $_iO3y[$_iO9]) ? "selected" : "", $_iO3c);
                $_il3c.=$_iO3c;
            } $_il3d = _iO0("{options}", $_il3c, $_iO3a);
            $_il3z = _iO0("{text}", $this->PageSizeText, $_il3y);
            $_il3z = _iO0("{select}", $_il3d, $_il3z);
            return $_il3z;
        }

        function _il2d($_il2y = NULL) {
            $_il2y->PageIndex = $this->PageIndex;
            $_il2y->ShowPageInfo = $this->ShowPageInfo;
            $_il2y->PageInfoTemplate = $this->PageInfoTemplate;
            $_il2y->ShowPageSize = $this->ShowPageSize;
            $_il2y->PageSizeText = $this->PageSizeText;
            $_il2y->PageSizeOptions = $this->PageSizeOptions;
            $_il2y->PageSize = $this->PageSize;
            $_il2y->Position = $this->Position;
        }

    }

    class gridprevnextpager extends _iO3t {

        var $FirstPageText;
        var $FirstPageToolTip;
        var $PrevPageText;
        var $PrevPageToolTip;
        var $NextPageText;
        var $NextPageToolTip;
        var $LastPageText;
        var $LastPageToolTip;

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            if ($this->FirstPageText === NULL) $this->FirstPageText = $_il29->_il1v->Localization->_il22["First"]; if ($this->FirstPageToolTip === NULL) $this->FirstPageToolTip = $_il29->_il1v->Localization->_iO22["FirstPageToolTip"]; if ($this->PrevPageText === NULL) $this->PrevPageText = $_il29->_il1v->Localization->_il22["Prev"]; if ($this->PrevPageToolTip === NULL) $this->PrevPageToolTip = $_il29->_il1v->Localization->_iO22["PrevPageToolTip"]; if ($this->NextPageText === NULL) $this->NextPageText = $_il29->_il1v->Localization->_il22["Next"]; if ($this->NextPageToolTip === NULL) $this->NextPageToolTip = $_il29->_il1v->Localization->_iO22["NextPageToolTip"]; if ($this->LastPageText === NULL) $this->LastPageText = $_il29->_il1v->Localization->_il22["Last"]; if ($this->LastPageToolTip === NULL) $this->LastPageToolTip = $_il29->_il1v->Localization->_iO22["LastPageToolTip"];
        }

        function _iO1z() {
            $_iO3z = "<div class='kgrPager kgrNextPrevNextPager'>{pagesize}{nav}{info}<div style='clear:both'></div></div>";
            $_il40 = "<div class=\047kgrNav'>{first} {prev} {next} {last}</div>";
            $_il3l = "<input type=\047button' onclick='{onclick}' title=\047{title}\047 class='nodecor\047/>";
            $_iO40 = "<a href=\047javascript:void 0\047 onclick=\047{onclick}\047 title='{title}\047>{text}</a>";
            $_il41 = "<span class= '{class}'>{button}</span>";
            $_iO41 = _iO0("{onclick}", ($this->PageIndex > 0) ? "grid_gopage(this,0)" : "", $_il3l);
            $_iO41 = _iO0("{title}", $this->FirstPageToolTip, $_iO41);
            $_il42 = _iO0("{onclick}", ($this->PageIndex > 0 && $this->FirstPageText !== NULL) ? "grid_gopage(this,0)" : "", $_iO40);
            $_il42 = _iO0("{text}", $this->FirstPageText, $_il42);
            $_il42 = _iO0("{title}", $this->FirstPageToolTip, $_il42);
            $_iO42 = _iO0("{button}", $_iO41 . $_il42, $_il41);
            $_iO42 = _iO0("{class}", "kgrFirst", $_iO42);
            $_il43 = _iO0("{onclick}", ($this->PageIndex > 0) ? "grid_gopage(this," . ($this->PageIndex - 1) . ")" : "", $_il3l);
            $_il43 = _iO0("{title}", $this->PrevPageToolTip, $_il43);
            $_iO43 = _iO0("{onclick}", ($this->PageIndex > 0 && $this->PrevPageText !== NULL) ? "grid_gopage(this," . ($this->PageIndex - 1) . ")" : "", $_iO40);
            $_iO43 = _iO0("{text}", $this->PrevPageText, $_iO43);
            $_iO43 = _iO0("{title}", $this->PrevPageToolTip, $_iO43);
            $_il44 = _iO0("{button}", $_il43 . $_iO43, $_il41);
            $_il44 = _iO0("{class}", "kgrPrev", $_il44);
            $_iO44 = _iO0("{onclick}", ($this->PageIndex < $this->_il3u - 1) ? "grid_gopage(this," . ($this->PageIndex + 1) . ")" : "", $_il3l);
            $_iO44 = _iO0("{title}", $this->NextPageToolTip, $_iO44);
            $_il45 = _iO0("{onclick}", (($this->PageIndex < $this->_il3u - 1) && $this->NextPageText !== NULL) ? "grid_gopage(this," . ($this->PageIndex + 1) . ")" : "", $_iO40);
            $_il45 = _iO0("{text}", $this->NextPageText, $_il45);
            $_il45 = _iO0("{title}", $this->NextPageToolTip, $_il45);
            $_iO45 = _iO0("{button}", $_il45 . $_iO44, $_il41);
            $_iO45 = _iO0("{class}", "kgrNext", $_iO45);
            $_il46 = _iO0("{onclick}", ($this->PageIndex > 0) ? "grid_gopage(this," . ($this->_il3u - 1) . ")" : "", $_il3l);
            $_il46 = _iO0("{title}", $this->LastPageToolTip, $_il46);
            $_iO46 = _iO0("{onclick}", (($this->PageIndex < $this->_il3u - 1) && $this->LastPageText !== NULL) ? "grid_gopage(this," . ($this->_il3u - 1) . ")" : "", $_iO40);
            $_iO46 = _iO0("{text}", $this->LastPageText, $_iO46);
            $_iO46 = _iO0("{title}", $this->LastPageToolTip, $_iO46);
            $_il47 = _iO0("{button}", $_iO46 . $_il46, $_il41);
            $_il47 = _iO0("{class}", "kgrLast", $_il47);
            $_iO47 = _iO0("{prev}", $_il44, $_il40);
            $_iO47 = _iO0("{next}", $_iO45, $_iO47);
            $_iO47 = _iO0("{first}", $_iO42, $_iO47);
            $_iO47 = _iO0("{last}", $_il47, $_iO47);
            $_il3z = ($this->ShowPageSize) ? $this->_iO3x() : "";
            $_il3x = ($this->ShowPageInfo) ? $this->_il3v() : "";
            $_il48 = _iO0("{nav}", $_iO47, $_iO3z);
            $_il48 = _iO0("{info}", $_il3x, $_il48);
            $_il48 = _iO0("{pagesize}", $_il3z, $_il48);
            return $_il48;
        }

        function _il2d($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridprevnextpager();
            } parent::_il2d($_il2y);
            $_il2y->NextPageText = $this->NextPageText;
            $_il2y->NextPageToolTip = $this->NextPageToolTip;
            $_il2y->PrevPageText = $this->PrevPageText;
            $_il2y->PrevPageToolTip = $this->PrevPageToolTip;
            return $_il2y;
        }

    }

    class gridnumericpager extends _iO3t {

        var $Range = 012;

        function _iO1z() {
            $_iO3z = "<div class='kgrPager kgrNumericPager\047>{pagesize}{nav}{info}<div style=\047clear:both'></div></div>";
            $_il40 = "<div class=\047kgrNav'>{numbers}</div>";
            $_iO48 = "<a class=\047kgrNum {selected}' {href} {onclick}><span>{number}</span></a> ";
            $_il49 = floor($this->PageIndex / $this->Range) * $this->Range;
            $_iO49 = "";
            if ($_il49 > 0) {
                $_iO3f = _iO0("{href}", "href='javascript:void 0\047", $_iO48);
                $_iO3f = _iO0("{onclick}", "onclick='grid_gopage(this," . ($_il49 - 1) . ")'", $_iO3f);
                $_iO3f = _iO0("{number}", "...", $_iO3f);
                $_iO49.=$_iO3f;
            } for ($_iO9 = $_il49; $_iO9 < $_il49 + $this->Range && $_iO9 < $this->_il3u; $_iO9++) {
                $_iO3f = _iO0("{number}", ($_iO9 + 1), $_iO48);
                if ($_iO9 == $this->PageIndex) {
                    $_iO3f = _iO0("{selected}", "kgrNumSelected", $_iO3f);
                    $_iO3f = _iO0("{href}", "", $_iO3f);
                    $_iO3f = _iO0("{onclick}", "", $_iO3f);
                } else {
                    $_iO3f = _iO0("{selected}", "", $_iO3f);
                    $_iO3f = _iO0("{href}", "href='javascript:void 0\047", $_iO3f);
                    $_iO3f = _iO0("{onclick}", "onclick='grid_gopage(this," . $_iO9 . ")'", $_iO3f);
                } $_iO49.=$_iO3f;
            } if ($_il49 + $this->Range < $this->_il3u) {
                $_iO3f = _iO0("{href}", "href='javascript:void 0'", $_iO48);
                $_iO3f = _iO0("{onclick}", "onclick=\047grid_gopage(this," . ($_il49 + $this->Range) . ")\047", $_iO3f);
                $_iO3f = _iO0("{number}", "...", $_iO3f);
                $_iO3f = _iO0("{selected}", "", $_iO3f);
                $_iO49.=$_iO3f;
            } $_iO47 = _iO0("{numbers}", $_iO49, $_il40);
            $_il3z = ($this->ShowPageSize) ? $this->_iO3x() : "";
            $_il3x = ($this->ShowPageInfo) ? $this->_il3v() : "";
            $_il48 = _iO0("{nav}", $_iO47, $_iO3z);
            $_il48 = _iO0("{info}", $_il3x, $_il48);
            $_il48 = _iO0("{pagesize}", $_il3z, $_il48);
            return $_il48;
        }

        function _il2d($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridnumericpager();
            } parent::_il2d($_il2y);
            $_il2y->Range = $this->Range;
            return $_il2y;
        }

    }

    class gridprevnextandnumericpager extends _iO3t {

        var $Range = 012;
        var $FirstPageText;
        var $FirstPageToolTip;
        var $PrevPageText;
        var $PrevPageToolTip;
        var $NextPageText;
        var $NextPageToolTip;
        var $LastPageText;
        var $LastPageToolTip;

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            if ($this->FirstPageText === NULL) $this->FirstPageText = $_il29->_il1v->Localization->_il22["First"]; if ($this->FirstPageToolTip === NULL) $this->FirstPageToolTip = $_il29->_il1v->Localization->_iO22["FirstPageToolTip"]; if ($this->PrevPageText === NULL) $this->PrevPageText = $_il29->_il1v->Localization->_il22["Prev"]; if ($this->PrevPageToolTip === NULL) $this->PrevPageToolTip = $_il29->_il1v->Localization->_iO22["PrevPageToolTip"]; if ($this->NextPageText === NULL) $this->NextPageText = $_il29->_il1v->Localization->_il22["Next"]; if ($this->NextPageToolTip === NULL) $this->NextPageToolTip = $_il29->_il1v->Localization->_iO22["NextPageToolTip"]; if ($this->LastPageText === NULL) $this->LastPageText = $_il29->_il1v->Localization->_il22["Last"]; if ($this->LastPageToolTip === NULL) $this->LastPageToolTip = $_il29->_il1v->Localization->_iO22["LastPageToolTip"];
        }

        function _iO1z() {
            $_iO3z = "<div class='kgrPager kgrNextPrevAndNumericPager'>{pagesize}{nav}{info}<div style='clear:both'></div></div>";
            $_il40 = "<div class='kgrNav\047>{first} {prev} {numbers} {next} {last}</div>";
            $_iO48 = "<a class='kgrNum {selected}' {href} {onclick}><span>{number}</span></a> ";
            $_il3l = "<input type=\047button' onclick='{onclick}' title=\047{title}\047 class='nodecor\047/>";
            $_iO40 = "<a href='javascript:void 0' onclick=\047{onclick}' title=\047{title}'>{text}</a>";
            $_il41 = "<span class= \047{class}'>{button}</span>";
            $_il49 = floor($this->PageIndex / $this->Range) * $this->Range;
            $_iO49 = "";
            if ($_il49 > 0) {
                $_iO3f = _iO0("{href}", "href='javascript:void 0'", $_iO48);
                $_iO3f = _iO0("{onclick}", "onclick=\047grid_gopage(this," . ($_il49 - 1) . ")\047", $_iO3f);
                $_iO3f = _iO0("{number}", "...", $_iO3f);
                $_iO49.=$_iO3f;
            } for ($_iO9 = $_il49; $_iO9 < $_il49 + $this->Range && $_iO9 < $this->_il3u; $_iO9++) {
                $_iO3f = _iO0("{number}", ($_iO9 + 1), $_iO48);
                if ($_iO9 == $this->PageIndex) {
                    $_iO3f = _iO0("{selected}", "kgrNumSelected", $_iO3f);
                    $_iO3f = _iO0("{href}", "", $_iO3f);
                    $_iO3f = _iO0("{onclick}", "", $_iO3f);
                } else {
                    $_iO3f = _iO0("{selected}", "", $_iO3f);
                    $_iO3f = _iO0("{href}", "href='javascript:void 0\047", $_iO3f);
                    $_iO3f = _iO0("{onclick}", "onclick='grid_gopage(this," . $_iO9 . ")'", $_iO3f);
                } $_iO49.=$_iO3f;
            } if ($_il49 + $this->Range < $this->_il3u) {
                $_iO3f = _iO0("{href}", "href='javascript:void 0\047", $_iO48);
                $_iO3f = _iO0("{onclick}", "onclick='grid_gopage(this," . ($_il49 + $this->Range) . ")\047", $_iO3f);
                $_iO3f = _iO0("{number}", "...", $_iO3f);
                $_iO3f = _iO0("{selected}", "", $_iO3f);
                $_iO49.=$_iO3f;
            } $_iO41 = _iO0("{onclick}", ($this->PageIndex > 0) ? "grid_gopage(this,0)" : "", $_il3l);
            $_iO41 = _iO0("{title}", $this->FirstPageToolTip, $_iO41);
            $_il42 = _iO0("{onclick}", ($this->PageIndex > 0 && $this->FirstPageText !== NULL) ? "grid_gopage(this,0)" : "", $_iO40);
            $_il42 = _iO0("{text}", $this->FirstPageText, $_il42);
            $_il42 = _iO0("{title}", $this->FirstPageToolTip, $_il42);
            $_iO42 = _iO0("{button}", $_iO41 . $_il42, $_il41);
            $_iO42 = _iO0("{class}", "kgrFirst", $_iO42);
            $_il43 = _iO0("{onclick}", ($this->PageIndex > 0) ? "grid_gopage(this," . ($this->PageIndex - 1) . ")" : "", $_il3l);
            $_il43 = _iO0("{title}", $this->PrevPageToolTip, $_il43);
            $_iO43 = _iO0("{onclick}", ($this->PageIndex > 0 && $this->PrevPageText !== NULL) ? "grid_gopage(this," . ($this->PageIndex - 1) . ")" : "", $_iO40);
            $_iO43 = _iO0("{text}", $this->PrevPageText, $_iO43);
            $_iO43 = _iO0("{title}", $this->PrevPageToolTip, $_iO43);
            $_il44 = _iO0("{button}", $_il43 . $_iO43, $_il41);
            $_il44 = _iO0("{class}", "kgrPrev", $_il44);
            $_iO44 = _iO0("{onclick}", ($this->PageIndex < $this->_il3u - 1) ? "grid_gopage(this," . ($this->PageIndex + 1) . ")" : "", $_il3l);
            $_iO44 = _iO0("{title}", $this->NextPageToolTip, $_iO44);
            $_il45 = _iO0("{onclick}", (($this->PageIndex < $this->_il3u - 1) && $this->NextPageText !== NULL) ? "grid_gopage(this," . ($this->PageIndex + 1) . ")" : "", $_iO40);
            $_il45 = _iO0("{text}", $this->NextPageText, $_il45);
            $_il45 = _iO0("{title}", $this->NextPageToolTip, $_il45);
            $_iO45 = _iO0("{button}", $_il45 . $_iO44, $_il41);
            $_iO45 = _iO0("{class}", "kgrNext", $_iO45);
            $_il46 = _iO0("{onclick}", ($this->PageIndex < $this->_il3u - 1) ? "grid_gopage(this," . ($this->_il3u - 1) . ")" : "", $_il3l);
            $_il46 = _iO0("{title}", $this->LastPageToolTip, $_il46);
            $_iO46 = _iO0("{onclick}", (($this->PageIndex < $this->_il3u - 1) && $this->LastPageText !== NULL) ? "grid_gopage(this," . ($this->_il3u - 1) . ")" : "", $_iO40);
            $_iO46 = _iO0("{text}", $this->LastPageText, $_iO46);
            $_iO46 = _iO0("{title}", $this->LastPageToolTip, $_iO46);
            $_il47 = _iO0("{button}", $_iO46 . $_il46, $_il41);
            $_il47 = _iO0("{class}", "kgrLast", $_il47);
            $_iO47 = _iO0("{numbers}", $_iO49, $_il40);
            $_iO47 = _iO0("{prev}", $_il44, $_iO47);
            $_iO47 = _iO0("{next}", $_iO45, $_iO47);
            $_iO47 = _iO0("{first}", $_iO42, $_iO47);
            $_iO47 = _iO0("{last}", $_il47, $_iO47);
            $_il3z = ($this->ShowPageSize) ? $this->_iO3x() : "";
            $_il3x = ($this->ShowPageInfo) ? $this->_il3v() : "";
            $_il48 = _iO0("{nav}", $_iO47, $_iO3z);
            $_il48 = _iO0("{info}", $_il3x, $_il48);
            $_il48 = _iO0("{pagesize}", $_il3z, $_il48);
            return $_il48;
        }

        function _il2d($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridprevnextandnumericpager();
            } parent::_il2d($_il2y);
            $_il2y->Range = $this->Range;
            $_il2y->NextPageText = $this->NextPageText;
            $_il2y->PrevPageText = $this->PrevPageText;
            $_il2y->NextPageToolTip = $this->NextPageToolTip;
            $_il2y->PrevPageToolTip = $this->PrevPageToolTip;
            return $_il2y;
        }

    }

    class gridmanualpager extends _iO3t {

        var $ManualPagerTemplate;
        var $ButtonType = "Button";
        var $GoPageButtonText;
        var $TextBoxWidth = "25px";

        function _iO1w($_il29) {
            parent::_iO1w($_il29);
            if ($this->ManualPagerTemplate === NULL) $this->ManualPagerTemplate = $_il29->_il1v->Localization->_iO22["ManualPagerTemplate"]; if ($this->GoPageButtonText === NULL) $this->GoPageButtonText = $_il29->_il1v->Localization->_il22["Go"];
        }

        function _il2f($_ilm) {
            parent::_il2f($_ilm);
            if (isset($_ilm->_il22[$this->_il1y])) {
                $_iO2f = $_ilm->_il22[$this->_il1y];
                $this->PageIndex = ( (int) $_POST[$this->_il1y . "_input"]) - 1;
                if ($this->PageIndex >= $this->_il3u) $this->PageIndex = $this->_il3u - 1; if ($this->PageIndex < 0) $this->PageIndex = 0; $this->_il27->_il1z = TRUE;
            }
        }

        function _iO1z() {
            $_iO3z = "<div class=\047kgrPager kgrManualPager\047>{pagesize}{nav}{info}<div style='clear:both'></div></div>";
            $_il40 = "<div class='kgrNav\047>{main}</div>";
            $_il4a = "<input id='{id}\047 name='{id}' type=\047textbox' style=\047width:{width};' value=\047{text}'/>";
            $_iO4a = $this->ManualPagerTemplate;
            $_il4b = "";
            switch (strtolower($this->ButtonType)) {
                case "link": $_il4b = "<a class='kgrGoButton' href='javascript:void 0\047 onclick='grid_gopage(this,0)'>{text}</a>";
                    break;
                case "image": $_il4b = "<input class='kgrGoButton kgrGoImage' type='button' onclick=\047grid_gopage(this,0)\047 />";
                    break;
                case "button": default : $_il4b = "<input class=\047kgrGoButton\047 type='button' onclick='grid_gopage(this,0)' value=\047{text}' />";
                    break;
            } $_iO4b = _iO0("{id}", $this->_il1y . "_input", $_il4a);
            $_iO4b = _iO0("{width}", $this->TextBoxWidth, $_iO4b);
            $_iO4b = _iO0("{text}", $this->PageIndex + 1, $_iO4b);
            $_il4c = _iO0("{text}", $this->GoPageButtonText, $_il4b);
            $_ilg = _iO0("{TextBox}", $_iO4b, $_iO4a);
            $_ilg = _iO0("{GoPageButton}", $_il4c, $_ilg);
            $_ilg = _iO0("{TotalPage}", $this->_il3u, $_ilg);
            $_iO47 = _iO0("{main}", $_ilg, $_il40);
            $_il3z = ($this->ShowPageSize) ? $this->_iO3x() : "";
            $_il3x = ($this->ShowPageInfo) ? $this->_il3v() : "";
            $_il48 = _iO0("{nav}", $_iO47, $_iO3z);
            $_il48 = _iO0("{info}", $_il3x, $_il48);
            $_il48 = _iO0("{pagesize}", $_il3z, $_il48);
            return $_il48;
        }

        function _il2d($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new gridmanualpager();
            } parent::_il2d($_il2y);
            $_il2y->ManualPagerTemplate = $this->ManualPagerTemplate;
            $_il2y->ButtonType = $this->ButtonType;
            $_il2y->GoPageButtonText = $this->GoPageButtonText;
            $_il2y->TextBoxWidth = $this->TextBoxWidth;
            return $_il2y;
        }

    }

    class gridcustompager extends _iO3t {

        function render($_iO4c) {
            return "CustomPager";
        }

        function _iO1z() {
            $_iO3z = "<div class='kgrPager kgrCustomPager'>{pagesize}{nav}{info}<div style='clear:both'></div></div>";
            $_il40 = "<div class=\047kgrNav'>{main}</div>";
            $_il48 = $_iO3z;
            $_iO4c = array("PageIndex" => $this->PageIndex, "TotalPages" => $this->_il3u);
            $_iO47 = _iO0("{main}", $this->render($_iO4c), $_il40);
            $_il48 = _iO0("{nav}", $_iO47, $_il48);
            $_il3x = ($this->ShowPageInfo) ? $this->_il3v() : "";
            $_il48 = _iO0("{info}", $_il3x, $_il48);
            $_il3z = ($this->ShowPageSize) ? $this->_iO3x() : "";
            $_il3x = ($this->ShowPageInfo) ? $this->_il3v() : "";
            $_il48 = _iO0("{info}", $_il3x, $_il48);
            $_il48 = _iO0("{pagesize}", $_il3z, $_il48);
            return $_il48;
        }

        function _il2d($_ii02 = NULL) {
            if ($_ii02 === NULL) {
                eval("$_ii02 = new " . get_class($this) . "();");
            } parent::_il2d($_ii02);
            return $_ii02;
        }

    }

    interface gridtemplate {

        function render($_iO2d);

        function getdata($_iO2d);
    }

    class _il4d {

        var $Mode = "Inline";
        var $HeaderCaption;
        var $ColumnNumber = 1;
        var $CancelButtonText;
        var $ConfirmButtonText;
        var $CancelButtonToolTip;
        var $ConfirmButtonToolTip;
        var $Template;
        var $InputFocus = "none";

        function _il2d($_il2y = NULL) {
            $_il2y->Mode = $this->Mode;
            $_il2y->Template = $this->Template;
            $_il2y->HeaderCaption = $this->HeaderCaption;
            $_il2y->ColumnNumber = $this->ColumnNumber;
            $_il2y->CancelButtonText = $this->CancelButtonText;
            $_il2y->ConfirmButtonText = $this->ConfirmButtonText;
            $_il2y->CancelButtonToolTip = $this->CancelButtonToolTip;
            $_il2y->ConfirmButtonToolTip = $this->ConfirmButtonToolTip;
            $_il2y->InputFocus = $this->InputFocus;
        }

    }

    class _iO4d extends _il4d {

        var $_il1y;
        var $_il2g;

    }

    class _il4e extends _il4d {

        function _il2d($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new _iO4e();
            } parent::_il2d($_il2y);
            return $_il2y;
        }

    }

    class _iO4e extends _iO4d {

        var $_iO2d;
        var $_il4f;

        function _iO1w($_il29) {
            if ($this->CancelButtonText === NULL) $this->CancelButtonText = $_il29->_il1v->Localization->_il22["Cancel"]; if ($this->ConfirmButtonText === NULL) $this->ConfirmButtonText = $_il29->_il1v->Localization->_il22["Confirm"]; if ($this->CancelButtonToolTip === NULL) $this->CancelButtonToolTip = $_il29->_il1v->Localization->_iO22["EditForm_CancelButtonToolTip"]; if ($this->ConfirmButtonToolTip === NULL) $this->ConfirmButtonToolTip = $_il29->_il1v->Localization->_iO22["EditForm_ConfirmButtonToolTip"];
        }

        function _iO2g() {
            $_il2a = $this->_iO2d->DataItem;
            $_iO4f = FALSE;
            if (strtolower($this->Mode) == "template") {
                $_il4g = $this->Template->getdata($this->_iO2d);
                foreach ($_il4g as $_iO1r => $_il1s) {
                    $_il2a[$_iO1r] = $_il1s;
                }
            } else {
                foreach ($this->_iO2d->_il27->_iO2k as $_il2l) {
                    if (!$_il2l->ReadOnly) {
                        $_il2a[$_il2l->DataField] = $_il2l->geteditvalue($this->_iO2d);
                    }
                } foreach ($this->_iO2d->_il27->_iO2k as $_il2l) {
                    if (!$_il2l->ReadOnly) {
                        foreach ($_il2l->_iO2s as $_il2v) {
                            if (!$_il2v->validate($_il2a[$_il2l->DataField], $_il2a, $this->_iO2d, $_il2l)) {
                                $_iO4f = TRUE;
                            }
                        }
                    }
                }
            } $this->_il4f = $_il2a;
            if (!$_iO4f) {
                if ($this->_iO2d->_il27->_il1v->EventHandler->onbeforerowconfirmedit($this->_iO2d, array("NewDataItem" => &$_il2a)) == TRUE) {
                    $_iO4g = $this->_iO2d->_il27->DataSource->update($_il2a);
                    $_iO2h = $this->_iO2d->_il27->DataSource->geterror();
                    $this->_iO2d->_il27->_il1z = TRUE;
                    $this->_iO2d->EditMode = FALSE;
                    if ($_iO2h != "") $this->_iO2d->_il27->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); $this->_iO2d->_il27->_il1v->EventHandler->onrowconfirmedit($this->_iO2d, array("NewDataItem" => $_il2a, "Successful" => $_iO4g, "Error" => $_iO2h));
                }
            }
        }

        function _iO1z() {
            $_iO2j = "";
            $_il4h = new gridrow();
            $_il4h->_il1y = $this->_iO2d->_il1y;
            $_il4h->_iO1w($this->_iO2d->_il27);
            $_il4h->DataItem = ($this->_il4f !== NULL) ? $this->_il4f : $this->_iO2d->DataItem;
            switch (strtolower($this->Mode)) {
                case "template": $_il2i = "<tr id='{rowid}\047 class=\047kgrRow {alt} {selected} kgrRowEdit'>{tds}</tr>";
                    $_iO4h = "<tr><td colspan='{colspan}\047><div id='{rowid}_editform\047 class='kgrEditForm {inputfocus}\047>{content}</div></td></tr>";
                    $_il2k = "";
                    for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2d->_il27->_iO2k); $_iO9++) {
                        $_il2l = $this->_iO2d->_il27->_iO2k[$_iO9];
                        $_iO2l = $_il2l->_iO1z($this->_iO2d);
                        $_il2k.=$_iO2l;
                    } $_iO2j = _iO0("{tds}", $_il2k, $_il2i);
                    $_il4i = _iO0("{content}", ($this->Template === NULL) ? "<b>Notice</b>: No template found!" : $this->Template->render($this->_iO2d), $_iO4h);
                    $_il4i = _iO0("{colspan}", sizeof($this->_iO2d->_il27->_iO2k), $_il4i);
                    switch (strtolower($this->InputFocus)) {
                        case "hidegrid": $_il4i = _iO0("{inputfocus}", "kgrInputFocus kgrHideGrid", $_il4i);
                            break;
                        case "blurgrid": $_il4i = _iO0("{inputfocus}", "kgrInputFocus kgrBlurGrid", $_il4i);
                            break;
                        default : $_il4i = _iO0("{inputfocus}", "", $_il4i);
                            break;
                    } $_iO2j.=$_il4i;
                    break;
                case "form": $_il2i = "<tr id='{rowid}\047 class='kgrRow {alt} {selected} kgrRowEdit\047>{tds}</tr>";
                    $_iO4h = "<tr><td colspan=\047{colspan}'><div id='{rowid}_editform' class=\047kgrEditForm {inputfocus}\047>{header}{validators}{bigtable}{footer}</div></td></tr>";
                    $_iO4i = "<div class=\047kgrFormHeader'>{text}</div>";
                    $_il4j = "<div class='kgrFormFooter'>{buttons}</div>";
                    $_iO4j = "<ul class=\047kgrValidator'>{items}</ul>";
                    $_il4k = "<li><label for=\047{id}'>{header}: {error}</label></li>";
                    $_iO4k = "<table style='table-layout:fixed;width:100%;'><tr>{bigtable_tds}</tr></table>";
                    $_il4l = "<td style=\047vertical-align: top;width:{width}%\047>{table{n}}</td>";
                    $_iO4l = "<table style='height:{height}px;width:100%;\047>{ct_trs}</table>";
                    $_il3l = "<input type='button' onclick='{onclick}' title=\047{title}' class='nodecor\047/>";
                    $_iO40 = "<a href=\047javascript:void 0\047 onclick=\047{onclick}' title='{title}\047>{text}</a>";
                    $_il41 = "<span class= \047{class}'>{button}{a}</span> ";
                    $_il4m = 043;
                    $_il2k = "";
                    for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2d->_il27->_iO2k); $_iO9++) {
                        $_il2l = $this->_iO2d->_il27->_iO2k[$_iO9];
                        $_iO2l = $_il2l->_iO1z($this->_iO2d);
                        $_il2k.=$_iO2l;
                    } $_iO2j = _iO0("{tds}", $_il2k, $_il2i);
                    $_iO4m = "";
                    $_il4n = $this->HeaderCaption;
                    if ($_il4n != NULL) {
                        foreach ($this->_iO2d->DataItem as $_iO1r => $_il1s) {
                            $_il4n = _iO0("{" . $_iO1r . "}", $_il1s, $_il4n);
                        } $_iO4m = _iO0("{text}", $_il4n, $_iO4i);
                    } $_iO4n = "";
                    if ($this->_il4f !== NULL && $this->_il2g != "StartEdit") {
                        foreach ($_il4h->_il27->_iO2k as $_il2l) {
                            if (!$_il2l->ReadOnly) {
                                foreach ($_il2l->_iO2s as $_il2v) {
                                    if (!$_il2v->validate($_il4h->DataItem[$_il2l->DataField], $_il4h->DataItem, $this->_iO2d, $_il2l)) {
                                        $_il4o = _iO0("{header}", $_il2l->HeaderText, $_il4k);
                                        $_il4o = _iO0("{error}", $_il2v->ErrorMessage, $_il4o);
                                        $_il4o = _iO0("{id}", $_il4h->_il1y . "_" . $_il2l->_il1y . "_input", $_il4o);
                                        $_iO4n.=$_il4o;
                                    }
                                }
                            }
                        }
                    } $_iO4o = _iO0("{items}", $_iO4n, $_iO4j);
                    $_il4p = "";
                    for ($_iO9 = 0; $_iO9 < $this->ColumnNumber; $_iO9++) {
                        $_iO4p = _iO0("{n}", $_iO9, $_il4l);
                        $_iO4p = _iO0("{width}", (0144 / $this->ColumnNumber), $_iO4p);
                        $_il4p.=$_iO4p;
                    } $_il4q = _iO0("{bigtable_tds}", $_il4p, $_iO4k);
                    $_iO4q = array();
                    for ($_iO9 = 0; $_iO9 < sizeof($_il4h->_il27->_iO2k); $_iO9++) {
                        $_il2l = $_il4h->_il27->_iO2k[$_iO9];
                        if (!$_il2l->ReadOnly) {
                            $_il4r = $_il2l->_il31($_il4h);
                            array_push($_iO4q, $_il4r);
                        }
                    } $_iO4r = ceil(sizeof($_iO4q) / $this->ColumnNumber);
                    for ($_iO9 = 0; $_iO9 < $this->ColumnNumber; $_iO9++) {
                        $_il4s = "";
                        for ($_iO4s = 0; $_iO4s < $_iO4r; $_iO4s++) {
                            $_il4t = $_iO4r * $_iO9 + $_iO4s;
                            if ($_il4t < sizeof($_iO4q)) {
                                $_il4s.=$_iO4q[$_il4t];
                            }
                        } $_iO4t = _iO0("{ct_trs}", $_il4s, $_iO4l);
                        $_iO4t = _iO0("{height}", $_iO4r * $_il4m, $_iO4t);
                        if ($_il4s == "") $_iO4t = ""; $_il4q = _iO0("{table" . $_iO9 . "}", $_iO4t, $_il4q);
                    } $_iO3m = _iO0("{class}", "kgrConfirm", $_il41);
                    $_iO3m = _iO0("{button}", $_il3l, $_iO3m);
                    $_iO3m = _iO0("{a}", ($this->ConfirmButtonText != NULL) ? $_iO40 : "", $_iO3m);
                    $_iO3m = _iO0("{onclick}", "grid_confirm_edit(this)", $_iO3m);
                    $_iO3m = _iO0("{title}", $this->ConfirmButtonToolTip, $_iO3m);
                    $_iO3m = _iO0("{text}", $this->ConfirmButtonText, $_iO3m);
                    $_il3n = _iO0("{class}", "kgrCancel", $_il41);
                    $_il3n = _iO0("{button}", $_il3l, $_il3n);
                    $_il3n = _iO0("{a}", ($this->CancelButtonText != NULL) ? $_iO40 : "", $_il3n);
                    $_il3n = _iO0("{onclick}", "grid_cancel_edit(this)", $_il3n);
                    $_il3n = _iO0("{title}", $this->CancelButtonToolTip, $_il3n);
                    $_il3n = _iO0("{text}", $this->CancelButtonText, $_il3n);
                    $_il4u = _iO0("{buttons}", $_iO3m . $_il3n, $_il4j);
                    $_il4i = _iO0("{header}", $_iO4m, $_iO4h);
                    switch (strtolower($this->InputFocus)) {
                        case "hidegrid": $_il4i = _iO0("{inputfocus}", "kgrInputFocus kgrHideGrid", $_il4i);
                            break;
                        case "blurgrid": $_il4i = _iO0("{inputfocus}", "kgrInputFocus kgrBlurGrid", $_il4i);
                            break;
                        default : $_il4i = _iO0("{inputfocus}", "", $_il4i);
                            break;
                    } $_il4i = _iO0("{validators}", $_iO4o, $_il4i);
                    $_il4i = _iO0("{bigtable}", $_il4q, $_il4i);
                    $_il4i = _iO0("{footer}", $_il4u, $_il4i);
                    $_il4i = _iO0("{colspan}", sizeof($_il4h->_il27->_iO2k), $_il4i);
                    $_iO2j.=$_il4i;
                    break;
                case "inline": default : $_iO4u = "<tr><td colspan='{colspan}\047><div class=\047kgrInputFocus kgrBlurGrid\047 style=\047width:100%\047><table class='kgrTable' cellspacing=\0470' style=\047table-layout: auto;empty-cells: show;width:100%'><tbody><tr id=\047{rowid}\047 class=\047kgrRow {alt} {selected} kgrRowEdit'>{tds}</tr></tbody></table></div></td></tr>";
                    $_il2i = "<tr id='{rowid}' class=\047kgrRow {alt} {selected} kgrRowEdit\047>{tds}</tr>";
                    $_il4v = "<tr class='kgrValidator'>{valid_tds}</tr>";
                    $_iO4v = "<td class=\047kgrCell\047><div class='kgrIn\047 style='white-space:normal;\047>{divs}</div></td>";
                    $_il4w = "<div><label for='{id}'>{error}</label></div>";
                    $_il2k = "";
                    for ($_iO9 = 0; $_iO9 < sizeof($_il4h->_il27->_iO2k); $_iO9++) {
                        $_il2l = $_il4h->_il27->_iO2k[$_iO9];
                        $_iO2l = $_il2l->_iO30($_il4h);
                        $_il2k.=$_iO2l;
                    } $_iO2j = _iO0("{tds}", $_il2k, ($this->InputFocus == "blurgrid") ? $_iO4u : $_il2i);
                    $_iO2j = _iO0("{colspan}", sizeof($_il4h->_il27->_iO2k), $_iO2j);
                    $_iO4w = "";
                    if ($this->_il4f !== NULL && $this->_il2g != "StartEdit") {
                        $_il4x = "";
                        for ($_iO9 = 0; $_iO9 < sizeof($_il4h->_il27->_iO2k); $_iO9++) {
                            $_il2l = $_il4h->_il27->_iO2k[$_iO9];
                            $_iO4x = "";
                            if (!$_il2l->ReadOnly) {
                                foreach ($_il2l->_iO2s as $_il2v) {
                                    if (!$_il2v->validate($_il4h->DataItem[$_il2l->DataField], $_il4h->DataItem, $this->_iO2d, $_il2l)) {
                                        $_il4y = _iO0("{error}", $_il2v->ErrorMessage, $_il4w);
                                        $_il4y = _iO0("{id}", $_il4h->_il1y . "_" . $_il2l->_il1y . "_input", $_il4y);
                                        $_iO4x.=$_il4y;
                                    }
                                }
                            } $_iO4y = _iO0("{divs}", $_iO4x, $_iO4v);
                            $_il4x.=$_iO4y;
                        } $_iO4w = _iO0("{valid_tds}", $_il4x, $_il4v);
                    } $_iO2j.=$_iO4w;
                    break;
            } return $_iO2j;
        }

    }

    class _il4z extends _il4d {

        var $HeaderCaption = "";

        function _il2d($_il2y = NULL) {
            if ($_il2y === NULL) {
                $_il2y = new _iO4z();
            } parent::_il2d($_il2y);
            return $_il2y;
        }

    }

    class _iO4z extends _iO4d {

        var $_il27;
        var $_il4f;

        function _iO1w($_il29) {
            $this->_il27 = $_il29;
            if ($this->CancelButtonText === NULL) $this->CancelButtonText = $_il29->_il1v->Localization->_il22["Cancel"]; if ($this->ConfirmButtonText === NULL) $this->ConfirmButtonText = $_il29->_il1v->Localization->_il22["Confirm"]; if ($this->CancelButtonToolTip === NULL) $this->CancelButtonToolTip = $_il29->_il1v->Localization->_iO22["InsertForm_CancelButtonToolTip"]; if ($this->ConfirmButtonToolTip === NULL) $this->ConfirmButtonToolTip = $_il29->_il1v->Localization->_iO22["InsertForm_ConfirmButtonToolTip"];
        }

        function _il50() {
            $_il2a = array();
            for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_iO2k); $_iO9++) {
                if ($this->_il27->_iO2k[$_iO9]->DataField != NULL) {
                    $_il2a[$this->_il27->_iO2k[$_iO9]->DataField] = $this->_il27->_iO2k[$_iO9]->DefaultValue;
                }
            } $_iO50 = new gridrow();
            $_iO50->_il1y = $this->_il27->_il1y . "_nr";
            $_iO50->_iO1w($this->_il27);
            $_iO4f = FALSE;
            if (strtolower($this->Mode) == "template") {
                $_il4g = $this->Template->getdata($_iO50);
                foreach ($_il4g as $_iO1r => $_il1s) {
                    $_il2a[$_iO1r] = $_il1s;
                }
            } else {
                foreach ($this->_il27->_iO2k as $_il2l) {
                    if (!$_il2l->ReadOnly) {
                        $_il2a[$_il2l->DataField] = $_il2l->geteditvalue($_iO50);
                    }
                } foreach ($this->_il27->_iO2k as $_il2l) {
                    if (!$_il2l->ReadOnly) {
                        foreach ($_il2l->_iO2s as $_il2v) {
                            if (!$_il2v->validate($_il2a[$_il2l->DataField], $_il2a, $_iO50, $_il2l)) {
                                $_iO4f = TRUE;
                            }
                        }
                    }
                }
            } if ($this->_il27->_il51 !== NULL) {
                foreach ($this->_il27->_iO51 as $_il52) {
                    $_il2a[$_il52["Detail"]] = $this->_il27->_il51->DataItem[$_il52["Master"]];
                }
            } $this->_il4f = $_il2a;
            if (!$_iO4f) {
                if ($this->_il27->_il1v->EventHandler->onbeforeconfirminsert($this->_il27, array("NewDataItem" => &$_il2a)) == TRUE) {
                    $_iO52 = $this->_il27->DataSource->insert($_il2a);
                    $_iO2h = $this->_il27->DataSource->geterror();
                    $this->_il27->_il1z = TRUE;
                    $this->_il27->_il53 = FALSE;
                    if ($_iO2h != "") $this->_il27->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); $this->_il27->_il1v->EventHandler->onconfirminsert($this->_il27, array("NewDataItem" => $_il2a, "Successful" => $_iO52, "Error" => $_iO2h));
                }
            }
        }

        function _iO1z() {
            $_iO53 = "";
            $_il2a = array();
            for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_iO2k); $_iO9++) {
                if ($this->_il27->_iO2k[$_iO9]->DataField != NULL) {
                    $_il2a[$this->_il27->_iO2k[$_iO9]->DataField] = $this->_il27->_iO2k[$_iO9]->DefaultValue;
                }
            } if ($this->_il4f === NULL) {
                $this->_il4f = $_il2a;
            } $_iO50 = new gridrow();
            $_iO50->_il1y = $this->_il27->_il1y . "_nr";
            $_iO50->_iO1w($this->_il27);
            $_iO50->DataItem = $this->_il4f;
            switch (strtolower($this->Mode)) {
                case "template": $_il54 = "<tr><td colspan=\047{colspan}\047><div id='{id}_insertform\047 class=\047kgrInsertForm {inputfocus}'>{content}</div></td></tr>";
                    $_iO53 = _iO0("{content}", ($this->Template === NULL) ? "<b>Notice</b>: Template not found!" : $this->Template->render($_iO50), $_il54);
                    $_iO53 = _iO0("{colspan}", sizeof($this->_il27->_iO2k), $_iO53);
                    $_iO53 = _iO0("{id}", $_iO50->_il1y, $_iO53);
                    switch (strtolower($this->InputFocus)) {
                        case "hidegrid": $_iO53 = _iO0("{inputfocus}", "kgrInputFocus kgrHideGrid", $_iO53);
                            break;
                        case "blurgrid": $_iO53 = _iO0("{inputfocus}", "kgrInputFocus kgrBlurGrid", $_iO53);
                            break;
                        default : $_iO53 = _iO0("{inputfocus}", "", $_iO53);
                            break;
                    } break;
                case "form": default : $_il54 = "<tr><td colspan=\047{colspan}'><div id='{id}_insertform' class=\047kgrInsertForm {inputfocus}\047>{header}{validators}{bigtable}{footer}</div></td></tr>";
                    $_iO54 = "<div class='kgrFormHeader\047>{text}</div>";
                    $_il55 = "<div class='kgrFormFooter'>{buttons}</div>";
                    $_iO55 = "<ul class='kgrValidator\047>{items}</ul>";
                    $_il56 = "<li><label for=\047{id}'>{header}: {error}</label></li>";
                    $_iO56 = "<table style='table-layout:fixed;width:100%;'><tr>{bigtable_tds}</tr></table>";
                    $_il57 = "<td style='vertical-align: top;width:{width}%\047>{table{n}}</td>";
                    $_iO57 = "<table style='height:{height}px;width:100%;'>{ct_trs}</table>";
                    $_il3l = "<input type='button\047 onclick='{onclick}' title='{title}\047 class='nodecor\047/>";
                    $_iO40 = "<a href=\047javascript:void 0\047 onclick=\047{onclick}' title=\047{title}'>{text}</a>";
                    $_il41 = "<span class= '{class}'>{button}{a}</span> ";
                    $_il4m = 043;
                    $_iO4m = "";
                    if ($this->HeaderCaption != NULL) {
                        $_iO4m = _iO0("{text}", $this->HeaderCaption, $_iO54);
                    } $_iO4n = "";
                    if ($this->_il4f !== NULL && $this->_il2g != "StartInsert") {
                        foreach ($this->_il27->_iO2k as $_il2l) {
                            if (!$_il2l->ReadOnly) {
                                foreach ($_il2l->_iO2s as $_il2v) {
                                    if (!$_il2v->validate($_iO50->DataItem[$_il2l->DataField], $_iO50->DataItem, $_iO50, $_il2l)) {
                                        $_il58 = _iO0("{header}", $_il2l->HeaderText, $_il56);
                                        $_il58 = _iO0("{error}", $_il2v->ErrorMessage, $_il58);
                                        $_il58 = _iO0("{id}", $_iO50->_il1y . "_" . $_il2l->_il1y . "_input", $_il58);
                                        $_iO4n.=$_il58;
                                    }
                                }
                            }
                        }
                    } $_iO4o = _iO0("{items}", $_iO4n, $_iO55);
                    $_il4p = "";
                    for ($_iO9 = 0; $_iO9 < $this->ColumnNumber; $_iO9++) {
                        $_iO4p = _iO0("{n}", $_iO9, $_il57);
                        $_iO4p = _iO0("{width}", (0144 / $this->ColumnNumber), $_iO4p);
                        $_il4p.=$_iO4p;
                    } $_il4q = _iO0("{bigtable_tds}", $_il4p, $_iO56);
                    $_iO4q = array();
                    for ($_iO9 = 0; $_iO9 < sizeof($this->_il27->_iO2k); $_iO9++) {
                        $_il2l = $this->_il27->_iO2k[$_iO9];
                        if (!$_il2l->ReadOnly) {
                            $_il4r = $_il2l->_il31($_iO50);
                            array_push($_iO4q, $_il4r);
                        }
                    } $_iO4r = ceil(sizeof($_iO4q) / $this->ColumnNumber);
                    for ($_iO9 = 0; $_iO9 < $this->ColumnNumber; $_iO9++) {
                        $_il4s = "";
                        for ($_iO4s = 0; $_iO4s < $_iO4r; $_iO4s++) {
                            $_il4t = $_iO4r * $_iO9 + $_iO4s;
                            if ($_il4t < sizeof($_iO4q)) {
                                $_il4s.=$_iO4q[$_il4t];
                            }
                        } $_iO58 = _iO0("{ct_trs}", $_il4s, $_iO57);
                        $_iO58 = _iO0("{height}", $_il4m * $_iO4r, $_iO58);
                        if ($_il4s == "") $_iO58 = ""; $_il4q = _iO0("{table" . $_iO9 . "}", $_iO58, $_il4q);
                    } $_iO3m = _iO0("{class}", "kgrConfirm", $_il41);
                    $_iO3m = _iO0("{button}", $_il3l, $_iO3m);
                    $_iO3m = _iO0("{a}", ($this->ConfirmButtonText != NULL) ? $_iO40 : "", $_iO3m);
                    $_iO3m = _iO0("{onclick}", "grid_confirm_insert(this)", $_iO3m);
                    $_iO3m = _iO0("{title}", $this->ConfirmButtonToolTip, $_iO3m);
                    $_iO3m = _iO0("{text}", $this->ConfirmButtonText, $_iO3m);
                    $_il3n = _iO0("{class}", "kgrCancel", $_il41);
                    $_il3n = _iO0("{button}", $_il3l, $_il3n);
                    $_il3n = _iO0("{a}", ($this->CancelButtonText != NULL) ? $_iO40 : "", $_il3n);
                    $_il3n = _iO0("{onclick}", "grid_cancel_insert(this)", $_il3n);
                    $_il3n = _iO0("{title}", $this->CancelButtonToolTip, $_il3n);
                    $_il3n = _iO0("{text}", $this->CancelButtonText, $_il3n);
                    $_il4u = _iO0("{buttons}", $_iO3m . $_il3n, $_il55);
                    $_iO53 = _iO0("{id}", $_iO50->_il1y, $_il54);
                    $_iO53 = _iO0("{header}", $_iO4m, $_iO53);
                    $_iO53 = _iO0("{validators}", $_iO4o, $_iO53);
                    $_iO53 = _iO0("{bigtable}", $_il4q, $_iO53);
                    $_iO53 = _iO0("{footer}", $_il4u, $_iO53);
                    $_iO53 = _iO0("{colspan}", sizeof($this->_il27->_iO2k), $_iO53);
                    switch (strtolower($this->InputFocus)) {
                        case "hidegrid": $_iO53 = _iO0("{inputfocus}", "kgrInputFocus kgrHideGrid", $_iO53);
                            break;
                        case "blurgrid": $_iO53 = _iO0("{inputfocus}", "kgrInputFocus kgrBlurGrid", $_iO53);
                            break;
                        default : $_iO53 = _iO0("{inputfocus}", "", $_iO53);
                            break;
                    } break;
            } return $_iO53;
        }

    }

    class gridgroup {

        var $_il59;
        var $GroupField;
        var $Sort = 1;
        var $Expand = TRUE;
        var $InfoTemplate;
        var $HeaderText;

        function __construct() {
            $this->_il59 = array();
        }

        function addinfofield($_iO59, $_iO1m = NULL) {
            array_push($this->_il59, array("InfoField" => $_iO59, "Aggregate" => $_iO1m));
        }

        function _il2d() {
            $_il2y = new _iO2t();
            $_il2y->_il59 = $this->_il59;
            $_il2y->GroupField = $this->GroupField;
            $_il2y->Sort = $this->Sort;
            $_il2y->Expand = $this->Expand;
            $_il2y->InfoTemplate = $this->InfoTemplate;
            $_il2y->HeaderText = $this->HeaderText;
            return $_il2y;
        }

    }

    class _iO2t extends gridgroup implements _il1t {

        var $_il1y;
        var $_il27;
        var $_iO26;
        var $_iO2u;

        function _iO1w($_il29) {
            if ($this->_iO2u !== NULL) {
                if ($this->GroupField === NULL) $this->GroupField = $this->_iO2u->DataField; if ($this->HeaderText === NULL) $this->HeaderText = $this->_iO2u->HeaderText;
            } $this->_il27 = $_il29;
            $this->_iO26 = $_il29->_iO26;
            if ($this->HeaderText === NULL) $this->HeaderText = $this->GroupField; if ($this->InfoTemplate === NULL) $this->InfoTemplate = $this->HeaderText . ": {" . $this->GroupField . "}"; if (count($this->_il59) == 0) $this->addinfofield($this->GroupField);
        }

        function _iO1t() {
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
                $this->Sort = $_iO29["Sort"];
                $this->GroupField = $_iO29["GroupField"];
                $this->Expand = $_iO29["Expand"];
                $this->InfoTemplate = $_iO29["InfoTemplate"];
                $this->_il59 = $_iO29["InfoFields"];
                $this->HeaderText = $_iO29["HeaderText"];
            }
        }

        function _iO2c() {
            $this->_iO1t();
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
                if ($_iO29["ColumnUniqueID"] != NULL) {
                    for ($_iO9 = 0; $_iO9 < count($this->_il27->_iO2k); $_iO9++) {
                        if ($_iO29["ColumnUniqueID"] == $this->_il27->_iO2k[$_iO9]->_il1y) {
                            $this->_iO2u = $this->_il27->_iO2k[$_iO9];
                        }
                    }
                }
            }
        }

        function _il1u() {
            $this->_iO26->_il1q[$this->_il1y] = array("Sort" => $this->Sort, "Expand" => $this->Expand, "GroupField" => $this->GroupField, "HeaderText" => $this->HeaderText, "InfoFields" => $this->_il59, "InfoTemplate" => $this->InfoTemplate, "ColumnUniqueID" => ($this->_iO2u) ? $this->_iO2u->_il1y : NULL);
        }

        function _il2f($_ilm) {
            if (isset($_ilm->_il22[$this->_il1y])) {
                $_iO2f = $_ilm->_il22[$this->_il1y];
                switch ($_iO2f["Command"]) {
                    case "Sort": $this->Sort = $_iO2f["Args"]["Sort"];
                        $this->_il27->_il1z = TRUE;
                        break;
                }
            }
        }

        function _iO1z() {
            $_il5a = "<th id='{id}\047 class=\047kgrGroupItem\047 title='{title}\047><div class=\047kgrIn'>{text}&#160;{sort}</div></th>";
            $_iO5a = "<input class='nodecor kgrSort{dir}\047 type=\047button\047 title='{title}\047 onclick='grid_groupitem_sort(\042{id}\042,{sort})\047 />";
            $_il5b = ($this->Sort < 0) ? "Desc" : "Asc";
            $_iO1a = _iO0("{id}", $this->_il1y, $_iO5a);
            $_iO1a = _iO0("{dir}", $_il5b, $_iO1a);
            $_iO1a = _iO0("{title}", $this->_il27->_il1v->Localization->_iO22["Sort" . $_il5b . "ToolTip"], $_iO1a);
            $_iO1a = _iO0("{sort}", -$this->Sort, $_iO1a);
            $_iO16 = _iO0("{id}", $this->_il1y, $_il5a);
            $_iO16 = _iO0("{text}", $this->HeaderText, $_iO16);
            $_iO16 = _iO0("{sort}", $_iO1a, $_iO16);
            $_iO16 = _iO0("{title}", $this->_il27->_il1v->Localization->_iO22["GroupItemToolTip"], $_iO16);
            return $_iO16;
        }

        function _iO5b() {
            $_iO1b = new _il5c();
            $_iO1b->Expand = $this->Expand;
            $_iO1b->_iO5c = $this;
            return $_iO1b;
        }

    }

    class _il5c implements _il1t {

        var $_il1y;
        var $_il27;
        var $_il3i;
        var $_il5d;
        var $_iO26;
        var $_iO5d = 0;
        var $_il5e;
        var $_iO5e;
        var $_iO5c;
        var $_il5f;
        var $Expand;

        function _iO1w($_il29) {
            $this->_il27 = $_il29;
            $this->_iO26 = $_il29->_iO26;
            $this->_il3i = array();
            $this->_il5d = array();
        }

        function _iO2c() {
            $this->_iO1t();
            foreach ($this->_il5d as $_iO1b) {
                $_iO1b->_iO2c();
            }
        }

        function _iO5f($_iO1l) {
            array_push($this->_il3i, $_iO1l);
            $this->_il5e = $_iO1l->DataItem[$this->_iO5c->GroupField];
        }

        function _il5g($_il1l) {
            $_iO5g = $this->_iO5d + 1;
            if (isset($this->_il27->_il2x[$_iO5g])) {
                $_il5h = $this->_il27->_il2x[$_iO5g];
                $_iO1b = NULL;
                $_iO5h = 0;
                for ($_iO9 = 0; $_iO9 < sizeof($_il1l); $_iO9++) {
                    if ($_iO1b == NULL) {
                        $_iO1b = $_il5h->_iO5b();
                        $_iO1b->_il1y = $this->_il1y . "_gr" . $_iO5h;
                        $_iO1b->_iO1w($this->_il27);
                        $_iO1b->_iO5d = $_iO5g;
                        $_iO1b->_iO5f($_il1l[$_iO9]);
                        $_iO1b->_iO5e = $this;
                        array_push($this->_il5d, $_iO1b);
                    } else {
                        if ($_iO1b->_il5e == $_il1l[$_iO9]->DataItem[$_iO1b->_iO5c->GroupField]) {
                            $_iO1b->_iO5f($_il1l[$_iO9]);
                        } else {
                            $_iO1b->_il5g($_iO1b->_il3i);
                            $_iO1b = $_il5h->_iO5b();
                            $_iO5h++;
                            $_iO1b->_il1y = $this->_il1y . "_gr" . $_iO5h;
                            $_iO1b->_iO1w($this->_il27);
                            $_iO1b->_iO5d = $_iO5g;
                            $_iO1b->_iO5f($_il1l[$_iO9]);
                            $_iO1b->_iO5e = $this;
                            array_push($this->_il5d, $_iO1b);
                        }
                    } if ($_iO9 == sizeof($_il1l) - 1) {
                        $_iO1b->_il5g($_iO1b->_il3i);
                    }
                }
            }
        }

        function _iO1t() {
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
                $this->Expand = $_iO29["Expand"];
            }
        }

        function _il1u() {
            if ($this->_iO5d > -1) {
                $this->_iO26->_il1q[$this->_il1y] = array("Expand" => $this->Expand);
            } foreach ($this->_il5d as $_iO1b) {
                $_iO1b->_il1u();
            }
        }

        function _il2f($_ilm) {
            if (isset($_ilm->_il22[$this->_il1y])) {
                $_iO2f = $_ilm->_il22[$this->_il1y];
                switch ($_iO2f["Command"]) {
                    case "Expand": $this->Expand = TRUE;
                        break;
                    case "Collapse": $this->Expand = FALSE;
                        break;
                }
            } foreach ($this->_il5d as $_iO1b) {
                $_iO1b->_il2f($_ilm);
            } if ($this->_iO5c !== NULL) {
                $_il5i = array();
                $_iO5i = array();
                for ($_iO9 = 0; $_iO9 < sizeof($this->_iO5c->_il59); $_iO9++) {
                    $_il5j = $this->_iO5c->_il59[$_iO9];
                    if ($_il5j["Aggregate"] == NULL) {
                        $_il5i[$_iO9] = $this->_il3i[0]->DataItem[$_il5j["InfoField"]];
                    } else {
                        $_il5i[$_iO9] = "";
                        array_push($_iO5i, array("Key" => "_" . $_iO9, "Aggregate" => $_il5j["Aggregate"], "DataField" => $_il5j["InfoField"]));
                    }
                } if (sizeof($_iO5i) > 0) {
                    $_iO5j = $this->_il27->DataSource->Filters;
                    $_il5k = $this;
                    while ($_il5k !== $this->_il27->_iO5k) {
                        $this->_il27->DataSource->addfilter(new datasourcefilter($_il5k->_iO5c->GroupField, "Equal", $_il5k->_il5e));
                        $_il5k = $_il5k->_iO5e;
                    } $_il1f = $this->_il27->DataSource->getaggregates($_iO5i);
                    $_iO2h = $this->_il27->DataSource->geterror();
                    if ($_iO2h != "") $this->_il27->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); if ($_il1f !== NULL) {
                        foreach ($_il1f as $_iO1r => $_il1s) {
                            $_il5i[_iO0("_", "", $_iO1r)] = $_il1s;
                        }
                    } $this->_il27->DataSource->Filters = $_iO5j;
                } $this->_il5f = $_il5i;
            }
        }

        function _iO1z() {
            $_il5l = "";
            if ($this->_iO5d > -1) {
                $_il2i = "<tr id='{id}\047 class=\047kgrGroup'>{group_tds}<td class='kgrCell' colspan=\047{colspan}\047><div class=\047kgrIn\047 style=\047white-space:nowrap;'><span class='kgrHeaderText\047 onclick=\047grid_group_toogle(this)\047>{content}</span></div></td></tr>";
                $_iO5l = "<td class='kgrCell\047><div class=\047kgrIn' style='white-space:nowrap;'>{sign}</div></td>";
                $_il5m = "<span class='{status}\047 onclick=\047grid_group_toogle(this)\047></span>";
                $_iO2j = _iO0("{id}", $this->_il1y, $_il2i);
                $_iO5m = "";
                for ($_iO9 = 0; $_iO9 < $this->_iO5d; $_iO9++) {
                    $_il5n = _iO0("{sign}", "&#160;", $_iO5l);
                    $_iO5m.=$_il5n;
                } $_iO5n = _iO0("{status}", $this->Expand ? "kgrExpand" : "kgrCollapse", $_il5m);
                $_il5n = _iO0("{sign}", $_iO5n, $_iO5l);
                $_iO5m.=$_il5n;
                $_il5o = sizeof($this->_il27->_iO2k) - $this->_iO5d - 1;
                $_iO2j = _iO0("{group_tds}", $_iO5m, $_iO2j);
                $_iO2j = _iO0("{colspan}", $_il5o, $_iO2j);
                $_iO5o = $this->_iO5c->InfoTemplate;
                for ($_iO9 = 0; $_iO9 < sizeof($this->_iO5c->_il59); $_iO9++) {
                    $_iO5o = _iO0("{" . $this->_iO5c->_il59[$_iO9]["InfoField"] . "}", ($this->_iO5c->_iO2u !== NULL) ? $this->_iO5c->_iO2u->format($this->_il5f[$_iO9]) : $this->_il5f[$_iO9], $_iO5o);
                } $_iO2j = _iO0("{content}", $_iO5o, $_iO2j);
                $_il5l.=$_iO2j;
                if ($this->Expand) {
                    if (sizeof($this->_il5d) > 0) {
                        foreach ($this->_il5d as $_iO1b) {
                            $_il5l.=$_iO1b->_iO1z();
                        }
                    } else {
                        foreach ($this->_il3i as $_iO1l) {
                            $_il5l.=$_iO1l->_iO1z();
                        }
                    }
                }
            } else {
                foreach ($this->_il5d as $_iO1b) {
                    $_il5l.=$_iO1b->_iO1z();
                }
            } return $_il5l;
        }

    }

    class _il5p {

        var $PanelCssClass = "";
        var $ItemCssClass = "";
        var $ItemConnector = "-";

        function _il2d() {
            $_il2y = new _iO5p();
            $_il2y->PanelCssClass = $this->PanelCssClass;
            $_il2y->ItemCssClass = $this->ItemCssClass;
            $_il2y->ItemConnector = $this->ItemConnector;
            return $_il2y;
        }

    }

    class _iO5p extends _il5p {

        var $_il1y;
        var $_il27;

        function _iO1w($_il29) {
            $this->_il27 = $_il29;
        }

        function _iO1z() {
            $_iO4a = "<div id='{id}' class='kgrGroupPanel\047 style='position:relative;\047><span></span>{indicators}<table class='kgrGroupTable' style=\047width:100%;border-collapse:collapse;'><tr>{ths}<td id='{id}_tail' style='width:100%;\047>{guidetext}</td></tr></table></div>";
            $_il5q = "<td>{ct}</td>";
            $_iO5q = "<div class='kgrTopIndicator\047 style='position:absolute;display:none;\047></div><div class=\047kgrBottomIndicator\047 style=\047position:absolute;display:none;'></div>";
            $_il5r = _iO0("{ct}", $this->ItemConnector, $_il5q);
            $_iO5r = "";
            $_iO1j = $this->_il27->_il2x;
            for ($_iO9 = 0; $_iO9 < sizeof($_iO1j); $_iO9++) {
                $_iO5r.=$_iO1j[$_iO9]->_iO1z();
                if ($_iO9 < sizeof($_iO1j) - 1) {
                    $_iO5r.=$_il5r;
                }
            } $_ilg = _iO0("{id}", $this->_il1y, $_iO4a);
            $_ilg = _iO0("{ths}", $_iO5r, $_ilg);
            $_ilg = _iO0("{indicators}", $_iO5q, $_ilg);
            $_ilg = _iO0("{guidetext}", (sizeof($_iO1j) > 0) ? "&#160;" : $this->_il27->_il1v->Localization->_iO22["GroupPanelGuideText"], $_ilg);
            return $_ilg;
        }

    }

    class gridtableview {

        var $DataSource;
        var $DataKeyNames;
        var $Name;
        var $_iO51 = array();
        var $_iO2k = array();
        var $_il2e = array();
        var $_il2x = array();
        var $_il2n;
        var $Pager;
        var $ShowHeader;
        var $ShowFooter;
        var $Width;
        var $Height;
        var $EditSettings;
        var $InsertSettings;
        var $RowAlternative;
        var $AllowHovering;
        var $AllowSelecting;
        var $AllowMultiSelecting;
        var $AllowEditing;
        var $AllowDeleting;
        var $AllowScrolling;
        var $AllowSorting;
        var $AllowResizing;
        var $AllowFiltering;
        var $AllowGrouping;
        var $SingleColumnSorting;
        var $VirtualScrolling;
        var $FrozenColumnsCount = 0;
        var $PageSize;
        var $ShowFunctionPanel = FALSE;
        var $FunctionPanel;
        var $ShowGroupPanel = FALSE;
        var $GroupPanel;
        var $AutoGenerateRowSelectColumn;
        var $AutoGenerateExpandColumn;
        var $AutoGenerateColumns;
        var $AutoGenerateEditColumn;
        var $AutoGenerateDeleteColumn;
        var $DisableAutoGenerateDataFields;
        var $KeepRowStateOnRefresh;
        var $KeepSelectedRecords;
        var $ColumnWidth;
        var $ColumnWrap;
        var $ColumnAlign;
        var $_il2u;
        var $TableLayout;
        var $FilterOptions;
        var $_il5s;

        function __construct($_iO5s = "") {
            $this->Name = $_iO5s;
            $this->EditSettings = new _il4e();
            $this->InsertSettings = new _il4z();
            $this->FunctionPanel = new _il5t();
            $this->GroupPanel = new _il5p();
        }

        function addgroup($_iO1b) {
            array_push($this->_il2x, $_iO1b);
        }

        function addcolumn($_iO5t) {
            array_push($this->_iO2k, $_iO5t);
        }

        function adddetailtable($_il29, $_iO2m = NULL) {
            $_il29->_il2n = $_iO2m;
            array_push($this->_il2e, $_il29);
        }

        function addrelationfield($_il5u, $_iO5u) {
            array_push($this->_iO51, array("Detail" => $_il5u, "Master" => $_iO5u));
        }

        function _il2d() {
            $_il2y = new _il5v();
            $_il2y->Name = $this->Name;
            for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                $_il2y->_il2x[$_iO9] = $this->_il2x[$_iO9]->_il2d();
            } $_iO5v = array();
            for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2k); $_iO9++) {
                $_il2y->_iO2k[$_iO9] = $this->_iO2k[$_iO9]->createinstance();
                if ($this->_iO2k[$_iO9]->Group) {
                    $_iO5v[$_iO9] = $this->_iO2k[$_iO9]->GroupIndex;
                }
            } asort($_iO5v);
            foreach ($_iO5v as $_iO9 => $_il5w) {
                $_il2y->_il2x[] = $_il2y->_iO2k[$_iO9]->GroupSettings;
            } $_il2y->_il2e = $this->_il2e;
            $_il2y->_iO51 = $this->_iO51;
            $_il2y->_il2n = $this->_il2n;
            if ($this->Pager != NULL) {
                $_il2y->Pager = $this->Pager->_il2d();
            } $_il2y->DataSource = $this->DataSource;
            $_il2y->ShowHeader = $this->ShowHeader;
            $_il2y->ShowFooter = $this->ShowFooter;
            $_il2y->Width = $this->Width;
            $_il2y->Height = $this->Height;
            $_il2y->EditSettings = $this->EditSettings;
            $_il2y->InsertSettings = $this->InsertSettings;
            $_il2y->AllowHovering = $this->AllowHovering;
            $_il2y->AllowEditing = $this->AllowEditing;
            $_il2y->AllowDeleting = $this->AllowDeleting;
            $_il2y->AllowSelecting = $this->AllowSelecting;
            $_il2y->AllowMultiSelecting = $this->AllowMultiSelecting;
            $_il2y->AllowScrolling = $this->AllowScrolling;
            $_il2y->AllowSorting = $this->AllowSorting;
            $_il2y->AllowResizing = $this->AllowResizing;
            $_il2y->AllowFiltering = $this->AllowFiltering;
            $_il2y->AllowGrouping = $this->AllowGrouping;
            $_il2y->SingleColumnSorting = $this->SingleColumnSorting;
            $_il2y->VirtualScrolling = $this->VirtualScrolling;
            $_il2y->FrozenColumnsCount = $this->FrozenColumnsCount;
            $_il2y->RowAlternative = $this->RowAlternative;
            $_il2y->AutoGenerateRowSelectColumn = $this->AutoGenerateRowSelectColumn;
            $_il2y->AutoGenerateExpandColumn = $this->AutoGenerateExpandColumn;
            $_il2y->AutoGenerateColumns = $this->AutoGenerateColumns;
            $_il2y->AutoGenerateEditColumn = $this->AutoGenerateEditColumn;
            $_il2y->AutoGenerateDeleteColumn = $this->AutoGenerateDeleteColumn;
            $_il2y->DisableAutoGenerateDataFields = $this->DisableAutoGenerateDataFields;
            $_il2y->KeepRowStateOnRefresh = $this->KeepRowStateOnRefresh;
            $_il2y->KeepSelectedRecords = $this->KeepSelectedRecords;
            $_il2y->DataKeyNames = $this->DataKeyNames;
            $_il2y->PageSize = $this->PageSize;
            $_il2y->ShowFunctionPanel = $this->ShowFunctionPanel;
            $_il2y->FunctionPanel = $this->FunctionPanel;
            $_il2y->ShowGroupPanel = $this->ShowGroupPanel;
            $_il2y->GroupPanel = $this->GroupPanel->_il2d();
            $_il2y->ColumnWidth = $this->ColumnWidth;
            $_il2y->ColumnWrap = $this->ColumnWrap;
            $_il2y->ColumnAlign = $this->ColumnAlign;
            $_il2y->_il2u = $this->_il2u;
            $_il2y->TableLayout = $this->TableLayout;
            $_il2y->FilterOptions = $this->FilterOptions;
            return $_il2y;
        }

    }

    class _il5v extends gridtableview implements _il1t {

        var $_il1v;
        var $_il51;
        var $_il1y;
        var $_iO26;
        var $Grid;
        var $ParentRow;
        var $_il3i = array();
        var $_iO5w = 0;
        var $_il1z = FALSE;
        var $_il5x = FALSE;
        var $_iO5x = 0;
        var $_il5y = 0;
        var $_iO5y = NULL;
        var $_il53 = FALSE;
        var $_il5z;
        var $_iO5z;
        var $_iO5k;
        var $_il60;
        var $SelectedKeys = array();

        function getunqiueid() {
            return $this->_il1y;
        }

        function _iO1w($_il1x, $_iO60) {
            $this->_il1v = $_il1x;
            $this->_il51 = $_iO60;
            $this->Grid = $_il1x;
            $this->ParentRow = $_iO60;
            $this->_iO26 = $_il1x->_iO26;
            if ($this->KeepSelectedRecords === NULL) $this->KeepSelectedRecords = $this->_il1v->KeepSelectedRecords; if ($this->KeepRowStateOnRefresh === NULL) $this->KeepRowStateOnRefresh = $this->_il1v->KeepRowStateOnRefresh; if ($this->AllowHovering === NULL) $this->AllowHovering = $this->_il1v->AllowHovering; if ($this->AllowEditing === NULL) $this->AllowEditing = $this->_il1v->AllowEditing; if ($this->AllowDeleting === NULL) $this->AllowDeleting = $this->_il1v->AllowDeleting; if ($this->AllowSelecting === NULL) $this->AllowSelecting = $this->_il1v->AllowSelecting; if ($this->AllowMultiSelecting === NULL) $this->AllowMultiSelecting = $this->_il1v->AllowMultiSelecting; if ($this->AllowScrolling === NULL) $this->AllowScrolling = $this->_il1v->AllowScrolling; if ($this->AllowSorting === NULL) $this->AllowSorting = $this->_il1v->AllowSorting; if ($this->AllowResizing === NULL) $this->AllowResizing = $this->_il1v->AllowResizing; if ($this->AllowFiltering === NULL) $this->AllowFiltering = $this->_il1v->AllowFiltering; if ($this->AllowGrouping === NULL) $this->AllowGrouping = $this->_il1v->AllowGrouping; if ($this->SingleColumnSorting === NULL) $this->SingleColumnSorting = $this->_il1v->SingleColumnSorting; if ($this->VirtualScrolling === NULL) $this->VirtualScrolling = $this->_il1v->VirtualScrolling; if ($this->ShowHeader === NULL) $this->ShowHeader = $this->_il1v->ShowHeader; if ($this->ShowFooter === NULL) $this->ShowFooter = $this->_il1v->ShowFooter; if ($this->RowAlternative === NULL) $this->RowAlternative = $this->_il1v->RowAlternative; if ($this->PageSize === NULL) $this->PageSize = $this->_il1v->PageSize; if ($this->DataSource === NULL) $this->DataSource = $this->_il1v->DataSource; $this->DataSource->setcharset($this->_il1v->CharSet);
            if ($this->Width === NULL) $this->Width = "100%"; if ($_iO60 == NULL) {
                if ($this->Height === NULL) $this->Height = $this->_il1v->Height;
            } if ($this->AutoGenerateRowSelectColumn === NULL) $this->AutoGenerateRowSelectColumn = $this->_il1v->AutoGenerateRowSelectColumn; if ($this->AutoGenerateExpandColumn === NULL) $this->AutoGenerateExpandColumn = $this->_il1v->AutoGenerateExpandColumn; if ($this->AutoGenerateColumns === NULL) $this->AutoGenerateColumns = $this->_il1v->AutoGenerateColumns; if ($this->AutoGenerateEditColumn === NULL) $this->AutoGenerateEditColumn = $this->_il1v->AutoGenerateEditColumn; if ($this->AutoGenerateDeleteColumn === NULL) $this->AutoGenerateDeleteColumn = $this->_il1v->AutoGenerateDeleteColumn; if ($this->DisableAutoGenerateDataFields === NULL) $this->DisableAutoGenerateDataFields = $this->_il1v->DisableAutoGenerateDataFields; if ($this->ColumnWrap === NULL) $this->ColumnWrap = $this->_il1v->ColumnWrap; if ($this->ColumnAlign === NULL) $this->ColumnAlign = $this->_il1v->ColumnAlign; if ($this->_il2u === NULL) $this->_il2u = $this->_il1v->_il2u; if ($this->TableLayout === NULL) $this->TableLayout = $this->_il1v->TableLayout; if ($this->FilterOptions === NULL) $this->FilterOptions = $this->_il1v->FilterOptions; if ($this->AllowMultiSelecting) {
                $this->AllowSelecting = TRUE;
            } if ($this->AutoGenerateRowSelectColumn) {
                $_il61 = new gridrowselectcolumn();
                $_il61->Align = "center";
                $_il6 = array($_il61);
                $this->_iO2k = array_merge($_il6, $this->_iO2k);
            } if ($this->AutoGenerateExpandColumn) {
                $_iO61 = new gridexpanddetailcolumn();
                $_iO61->Align = "center";
                $_il6 = array($_iO61);
                $this->_iO2k = array_merge($_il6, $this->_iO2k);
            } if ($this->AutoGenerateColumns) {
                $_il1g = $this->DataSource->getfields();
                $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); $_il62 = $this->DisableAutoGenerateDataFields . ",";
                foreach ($_il1g as $_il17) {
                    if (strpos($_il62, $_il17["Name"] . ",") === FALSE) {
                        $_il2l = new gridboundcolumn();
                        $_il2l->HeaderText = $_il17["Name"];
                        $_il2l->DataField = $_il17["Name"];
                        if ($_il17["Not_Null"] == 1) {
                            $_il2l->addvalidator(new requiredfieldvalidator());
                        } $this->addcolumn($_il2l);
                    }
                }
            } if ($this->AutoGenerateEditColumn) {
                $_iO62 = new grideditdeletecolumn();
                $_iO62->Align = "center";
                $_iO62->ShowDeleteButton = FALSE;
                $this->addcolumn($_iO62);
            } if ($this->AutoGenerateDeleteColumn) {
                $_il63 = new grideditdeletecolumn();
                $_il63->Align = "center";
                $_il63->ShowEditButton = FALSE;
                $this->addcolumn($_il63);
            } for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2k); $_iO9++) {
                $this->_iO2k[$_iO9]->_il1y = $this->_il1y . "_c" . $_iO9;
                $this->_iO2k[$_iO9]->_iO1w($this);
            } if ($this->Pager != NULL) {
                $this->Pager->_il1y = $this->_il1y . "_pg";
                $this->Pager->_iO1w($this);
            } $this->FunctionPanel->_iO1w($this);
            $this->GroupPanel->_il1y = $this->_il1y . "_gp";
            $this->GroupPanel->_iO1w($this);
            for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                $this->_il2x[$_iO9]->_il1y = $this->_il1y . "_gm" . $_iO9;
                $this->_il2x[$_iO9]->_iO1w($this);
            }
        }

        function getparentrow() {
            return $this->_il51;
        }

        function _iO1t() {
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
                $this->Width = $_iO29["Width"];
                $this->_iO5z = $_iO29["TablePartWidth"];
                $this->_iO5w = $_iO29["RowsCount"];
                $this->_il53 = $_iO29["Inserting"];
                $this->_iO5x = $_iO29["scrollTop"];
                $this->_il5y = $_iO29["scrollLeft"];
                if (isset($_iO29["SelectedKeys"])) {
                    $this->SelectedKeys = $_iO29["SelectedKeys"];
                } if (isset($_iO29["PartDataHeight"])) {
                    $this->_iO5y = $_iO29["PartDataHeight"];
                } $this->_il60 = $_iO29["GroupSize"];
            } if ($this->Pager != NULL) {
                $this->Pager->_iO1t();
            } for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2k); $_iO9++) {
                $this->_iO2k[$_iO9]->_iO1t();
            }
        }

        function _il1u() {
            $this->_iO26->_il1q[$this->_il1y] = array("RowsCount" => sizeof($this->_il3i), "Name" => $this->Name, "SelectedKeys" => $this->SelectedKeys, "Inserting" => $this->_il53, "AllowHovering" => $this->AllowHovering, "AllowSelecting" => $this->AllowSelecting, "AllowMultiSelecting" => $this->AllowMultiSelecting, "AllowScrolling" => $this->AllowScrolling, "VirtualScrolling" => $this->VirtualScrolling, "FrozenColumnsCount" => $this->FrozenColumnsCount, "scrollTop" => $this->_iO5x, "scrollLeft" => $this->_il5y, "Width" => $this->Width, "TablePartWidth" => $this->_iO5z, "GroupSize" => sizeof($this->_il2x));
            if ($this->Pager != NULL) {
                $this->Pager->_il1u();
            } for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2k); $_iO9++) {
                $this->_iO2k[$_iO9]->_il1u();
            } for ($_iO9 = 0; $_iO9 < sizeof($this->_il3i); $_iO9++) {
                $this->_il3i[$_iO9]->_il1u();
            } for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                $this->_il2x[$_iO9]->_il1u();
            } if ($this->_iO5k !== NULL) {
                $this->_iO5k->_il1u();
            }
        }

        function _iO5f($_iO1l) {
            $_iO1l->_il1y = $this->_il1y . "_r" . sizeof($this->_il3i);
            $_iO1l->_iO1w($this);
            array_push($this->_il3i, $_iO1l);
        }

        function _iO2c() {
            $this->_iO1t();
            if ($this->_il53) {
                $this->_il5z = $this->InsertSettings->_il2d();
                $this->_il5z->_iO1w($this);
            } for ($_iO9 = 0; $_iO9 < $this->_iO5w; $_iO9++) {
                $_iO1l = new gridrow();
                $this->_iO5f($_iO1l);
                $_iO1l->_iO2c();
            } if ($this->_il60 !== NULL) {
                $this->_il2x = array();
                for ($_iO9 = 0; $_iO9 < $this->_il60; $_iO9++) {
                    $_il5h = new _iO2t();
                    $_il5h->_il1y = $this->_il1y . "_gm" . $_iO9;
                    $_il5h->_iO1w($this);
                    $_il5h->_iO2c();
                    array_push($this->_il2x, $_il5h);
                }
            } else {
                $this->_il60 = sizeof($this->_il2x);
            }
        }

        function refresh() {
            $this->_il5x = TRUE;
            $this->_il1z = TRUE;
        }

        function _il2f($_ilm) {
            if (!isset($this->_iO26->_il1q[$this->_il1y])) {
                $this->_il1z = TRUE;
            } foreach ($this->_il2x as $_iO1b) {
                $_iO1b->_il2f($_ilm);
            } $this->DataSource->clear();
            if (isset($_ilm->_il22[$this->_il1y])) {
                $_iO2f = $_ilm->_il22[$this->_il1y];
                switch ($_iO2f["Command"]) {
                    case "StartInsert": if ($this->_il1v->EventHandler->onbeforestartinsert($this, array()) == TRUE) {
                            $this->_il53 = TRUE;
                            $this->_il5z = $this->InsertSettings->_il2d();
                            $this->_il5z->_iO1w($this);
                            $this->_il5z->_il2g = "StartInsert";
                            $this->_il1v->EventHandler->onstartinsert($this, array());
                        } break;
                    case "ConfirmInsert": $this->_il5z->_il2g = "ConfirmInsert";
                        $this->_il5z->_il50();
                        break;
                    case "CancelInsert": if ($this->_il1v->EventHandler->onbeforecancelinsert($this, array()) == TRUE) {
                            $this->_il53 = FALSE;
                            $this->_il1v->EventHandler->oncancelinsert($this, NULL);
                        } break;
                    case "Refresh": $this->refresh();
                        break;
                    case "AddGroup": $_iO63 = $_iO2f["Args"]["GroupField"];
                        $_il2w = $_iO2f["Args"]["Position"];
                        if ($this->_il1v->EventHandler->onbeforeaddgroup($this, array("Position" => $_il2w)) == TRUE) {
                            $_il64 = TRUE;
                            foreach ($this->_il2x as $_iO1b) {
                                if ($_iO1b->GroupField == $_iO63) {
                                    $_il64 = FALSE;
                                }
                            } if ($_il64) {
                                $_iO2w = new _iO2t();
                                $_iO2w->GroupField = $_iO63;
                                $_iO2w->addinfofield($_iO63);
                                foreach ($this->_iO2k as $_iO5t) {
                                    if ($_iO5t->DataField == $_iO63) {
                                        $_iO2w->HeaderText = $_iO5t->HeaderText;
                                    }
                                } $_iO2w->_iO1w($this);
                                if ($_il2w === NULL || ($_il2w >= sizeof($this->_il2x))) {
                                    array_push($this->_il2x, $_iO2w);
                                } else {
                                    $_iO2x = array();
                                    for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                                        if ($_il2w == $_iO9) {
                                            array_push($_iO2x, $_iO2w);
                                        } array_push($_iO2x, $this->_il2x[$_iO9]);
                                    } $this->_il2x = $_iO2x;
                                } for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                                    $this->_il2x[$_iO9]->_il1y = $this->_il1y . "_gm" . $_iO9;
                                }
                            } $this->_il1v->EventHandler->onaddgroup($this, array("Position" => $_il2w));
                        } break;
                    case "ChangeGroupOrder": $_iO63 = $_iO2f["Args"]["GroupField"];
                        $_iO64 = $_iO2f["Args"]["Position"];
                        if ($this->_il1v->EventHandler->onbeforechangegrouporder($this, array("GroupField" => $_iO63, "Position" => $_iO64)) == TRUE) {
                            $_il65 = 0;
                            for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                                if ($this->_il2x[$_iO9]->GroupField == $_iO63) {
                                    $_il65 = $_iO9;
                                }
                            } if ($_iO64 === NULL || $_iO64 >= sizeof($this->_il2x)) {
                                $_iO64 = sizeof($this->_il2x);
                            } $_iO2x = array();
                            for ($_iO9 = 0; $_iO9 <= sizeof($this->_il2x); $_iO9++) {
                                if ($_iO9 == $_iO64) {
                                    array_push($_iO2x, $this->_il2x[$_il65]);
                                } if ($_iO9 != $_il65 && $_iO9 < sizeof($this->_il2x)) {
                                    array_push($_iO2x, $this->_il2x[$_iO9]);
                                }
                            } $this->_il2x = $_iO2x;
                            for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                                $this->_il2x[$_iO9]->_il1y = $this->_il1y . "_gm" . $_iO9;
                            } $this->_il1v->EventHandler->onchangegrouporder($this, array("GroupField" => $_iO63, "Position" => $_iO64));
                        } break;
                    case "RemoveGroup": $_iO63 = $_iO2f["Args"]["GroupField"];
                        if ($this->_il1v->EventHandler->onbeforeremovegroup($this, array("GroupField" => $_iO63)) == TRUE) {
                            $_iO2x = array();
                            for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                                if ($this->_il2x[$_iO9]->GroupField != $_iO63) {
                                    array_push($_iO2x, $this->_il2x[$_iO9]);
                                }
                            } $this->_il2x = $_iO2x;
                            for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                                $this->_il2x[$_iO9]->_il1y = $this->_il1y . "_gm" . $_iO9;
                            } $this->_il1v->EventHandler->onremovegroup($this, array("GroupField" => $_iO63));
                        } break;
                }
            } if ($this->_il51 !== NULL) {
                if ($this->_il51->_il27->_il5x && $this->_il51->_il27->KeepRowStateOnRefresh) {
                    $this->refresh();
                }
            } $this->_il1v->EventHandler->ontableviewprerender($this, array());
            foreach ($this->_iO2k as $_iO5t) {
                $_iO5t->_il2f($_ilm);
            } if (sizeof($this->_il2x) > 0) {
                $_il6 = array();
                for ($_iO9 = 0; $_iO9 < sizeof($this->_il2x); $_iO9++) {
                    $this->DataSource->addsort(new datasourcesort($this->_il2x[$_iO9]->GroupField, ($this->_il2x[$_iO9]->Sort < 0) ? "DESC" : "ASC"));
                    $_iO65 = new _iO3n();
                    $_iO65->_il1y = $this->_il1y . "_gc" . $_iO9;
                    $_iO65->_iO1w($this);
                    array_push($_il6, $_iO65);
                } $this->_iO2k = array_merge($_il6, $this->_iO2k);
            } foreach ($this->_il3i as $_iO1l) {
                $_iO1l->_il2f($_ilm);
            } if ($this->_il51 != NULL) {
                foreach ($this->_iO51 as $_il17) {
                    $this->DataSource->addfilter(new datasourcefilter($_il17["Detail"], "Equal", $this->_il51->DataItem[$_il17["Master"]]));
                }
            } if ($this->Pager != NULL) {
                $this->Pager->_iO3u = $this->DataSource->count();
                $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); $this->Pager->_il2f($_ilm);
            } $_il66 = array();
            if ($this->KeepSelectedRecords && $this->DataKeyNames !== NULL) {
                foreach ($this->SelectedKeys as $_iO66) {
                    $_il66[_il16($_iO66)] = $_iO66;
                } foreach ($this->_il3i as $_iO1l) {
                    $_iO66 = _iO13($_iO1l->DataItem, $this->DataKeyNames);
                    $_il67 = _il16($_iO66);
                    if ($_iO1l->Selected) {
                        $_il66[$_il67] = $_iO66;
                    } else {
                        if (isset($_il66[$_il67])) {
                            unset($_il66[$_il67]);
                        }
                    }
                }
            } if ($this->_il1z) {
                $_il1r = array();
                if ($this->Pager != NULL) {
                    $_il1r = $this->DataSource->getdata($this->Pager->PageSize * $this->Pager->PageIndex, $this->Pager->PageSize);
                } else {
                    $_il1r = $this->DataSource->getdata();
                } $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); $_iO67 = array();
                if ($this->_il5x && $this->KeepRowStateOnRefresh && $this->DataKeyNames !== NULL) {
                    foreach ($this->_il3i as $_iO1l) {
                        $_iO66 = _iO13($_iO1l->DataItem, $this->DataKeyNames);
                        $_il67 = _il16($_iO66);
                        $_iO67[$_il67] = $_iO1l;
                    }
                } $this->_il3i = array();
                for ($_iO9 = 0; $_iO9 < sizeof($_il1r); $_iO9++) {
                    $_iO1l = new gridrow();
                    $_iO1l->DataItem = $_il1r[$_iO9];
                    if ($this->_il5x && $this->KeepRowStateOnRefresh && $this->DataKeyNames !== NULL) {
                        $_iO66 = _iO13($_iO1l->DataItem, $this->DataKeyNames);
                        $_il67 = _il16($_iO66);
                        if ($_iO67[$_il67] !== NULL) {
                            $_il68 = $_iO1l->DataItem;
                            $_iO1l = $_iO67[$_il67];
                            $_iO1l->DataItem = $_il68;
                        }
                    } $this->_iO5f($_iO1l);
                    $_iO1l->_il2f($_ilm);
                } $_iO5i = array();
                foreach ($this->_iO2k as $_iO5t) {
                    if ($_iO5t->Aggregate !== NULL) {
                        array_push($_iO5i, array("Key" => $_iO5t->_il1y, "Aggregate" => $_iO5t->Aggregate, "DataField" => $_iO5t->DataFieldPrefix . $_iO5t->DataField));
                    }
                } $_il1f = NULL;
                if (sizeof($_iO5i) > 0) {
                    $_il1f = $this->DataSource->getaggregates($_iO5i);
                } $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); if ($_il1f !== NULL) {
                    foreach ($this->_iO2k as $_iO5t) {
                        if (isset($_il1f[$_iO5t->_il1y])) {
                            $_iO5t->_il2t = $_il1f[$_iO5t->_il1y];
                        }
                    }
                }
            } $this->SelectedKeys = array();
            if ($this->KeepSelectedRecords && $this->DataKeyNames !== NULL) {
                if ($this->_il1z) {
                    foreach ($this->_il3i as $_iO1l) {
                        $_iO66 = _iO13($_iO1l->DataItem, $this->DataKeyNames);
                        $_il67 = _il16($_iO66);
                        if (isset($_il66[$_il67])) {
                            $_iO1l->Selected = TRUE;
                        }
                    }
                } foreach ($_il66 as $_iO66) {
                    array_push($this->SelectedKeys, $_iO66);
                }
            } else {
                foreach ($this->_il3i as $_iO1l) {
                    if ($_iO1l->Selected) {
                        $_iO66 = _iO13($_iO1l->DataItem, $this->DataKeyNames);
                        array_push($this->SelectedKeys, $_iO66);
                    }
                }
            } if (sizeof($this->_il2x) > 0) {
                $this->_iO5k = new _il5c();
                $this->_iO5k->_il1y = $this->_il1y . "_rg";
                $this->_iO5k->_iO1w($this);
                $this->_iO5k->_iO5d = -1;
                $this->_iO5k->_il5g($this->_il3i);
                $this->_iO5k->_iO2c();
                $this->_iO5k->_il2f($_ilm);
            }
        }

        function getinstancerows() {
            return $this->_il3i;
        }

        function getinstancecolumns() {
            return $this->_iO2k;
        }

        function exporttocsv() {
            $_iO68 = $this->_il1v->ExportSettings;
            header("Pragma: public");
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Type: application/force-download;");
            header("Content-Disposition: attachment; filename=\042" . $_iO68->FileName . ".csv\042");
            header("Content-Transfer-Encoding: binary");
            $_il69 = TRUE;
            foreach ($this->_iO2k as $_iO5t) {
                if ($_iO5t->AllowExporting) {
                    if (!$_il69) echo ","; echo "\042" . $_iO5t->HeaderText . "\042";
                    $_il69 = FALSE;
                }
            } echo "\015\n";
            if ($_iO68->IgnorePaging) {
                $_iO69 = $this->DataSource->getdata();
                $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); foreach ($_iO69 as $_il2a) {
                    $_iO1l = new gridrow();
                    $_iO1l->DataItem = $_il2a;
                    $_il69 = TRUE;
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            if (!$_il69) echo ","; echo "\042" . $_iO5t->render($_iO1l) . "\042";
                            $_il69 = FALSE;
                        }
                    } echo "\015\n";
                }
            } else {
                foreach ($this->_il3i as $_iO1l) {
                    $_il69 = TRUE;
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            if (!$_il69) echo ","; echo "\042" . $_iO5t->render($_iO1l) . "\042";
                            $_il69 = FALSE;
                        }
                    } echo "\015\n";
                }
            } exit();
        }

        function exporttoexcel() {
            require "library/Excel/Writer.php";
            $_iO68 = $this->_il1v->ExportSettings;
            $_il6a = new spreadsheet_excel_writer();
            $_il6a->setVersion(8, 'utf-8');
            $_il6a->send($_iO68->FileName . ".xls");
            $_iO6a = &$_il6a->addworksheet($_iO68->FileName);
            $_iO6a->setinputencoding('utf-8');
            $_il6b = &$_il6a->addformat();
            $_il6b->setbold();
            $_il6b->setalign("left");
            $_iO6b = &$_il6a->addformat();
            $_iO6b->setalign("left");
            $_il6c = 0;
            $_iO6c = 0;
            $_il6d = array();
            foreach ($this->_iO2k as $_iO5t) {
                if ($_iO5t->AllowExporting) {
                    $_iO6a->write($_iO6c, $_il6c, $_iO5t->HeaderText, $_il6b);
                    $_il6d[$_il6c] = strlen($_iO5t->HeaderText);
                    $_il6c++;
                }
            } $_iO6c++;
            $_il6c = 0;
            if ($_iO68->IgnorePaging) {
                $_iO69 = $this->DataSource->getdata();
                $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); foreach ($_iO69 as $_il2a) {
                    $_iO1l = new gridrow();
                    $_iO1l->DataItem = $_il2a;
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            $_il3 = $_iO5t->render($_iO1l);
                            $_iO6a->write($_iO6c, $_il6c, $_il3, $_iO6b);
                            if ($_il6d[$_il6c] < strlen("$_il3")) {
                                $_il6d[$_il6c] = strlen("$_il3");
                            } $_il6c++;
                        }
                    } $_iO6c++;
                    $_il6c = 0;
                }
            } else {
                foreach ($this->_il3i as $_iO1l) {
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            $_il3 = $_iO5t->render($_iO1l);
                            $_iO6a->write($_iO6c, $_il6c, $_il3, $_iO6b);
                            if ($_il6d[$_il6c] < strlen("$_il3")) {
                                $_il6d[$_il6c] = strlen("$_il3");
                            } $_il6c++;
                        }
                    } $_iO6c++;
                    $_il6c = 0;
                }
            } for ($_iO9 = 0; $_iO9 < sizeof($_il6d); $_iO9++) {
                $_iO6a->setcolumn($_iO9, $_iO9, (($_il6d[$_iO9] < 055) ? $_il6d[$_iO9] : 055) + 5);
            } $_il6a->close();
            exit();
        }

        function exporttoword() {
            $_iO68 = $this->_il1v->ExportSettings;
            header("Pragma: public");
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Type: application/msword");
            header("Content-Disposition: attachment; filename=\042" . $_iO68->FileName . ".doc\042");
            header("Content-Transfer-Encoding: binary");
            echo "<table border='1'>";
            echo "<tr>";
            foreach ($this->_iO2k as $_iO5t) {
                if ($_iO5t->AllowExporting) {
                    echo "<th align='left\047 style='background-color:#EEEEEE;'>" . $_iO5t->HeaderText . "</th>";
                }
            } echo "</tr>";
            if ($_iO68->IgnorePaging) {
                $_iO69 = $this->DataSource->getdata();
                $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); foreach ($_iO69 as $_il2a) {
                    $_iO1l = new gridrow();
                    $_iO1l->DataItem = $_il2a;
                    echo "<tr>";
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            echo "<td>" . $_iO5t->render($_iO1l) . "</td>";
                        }
                    } echo "</tr>";
                }
            } else {
                foreach ($this->_il3i as $_iO1l) {
                    echo "<tr>";
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            echo "<td>" . $_iO5t->render($_iO1l) . "</td>";
                        }
                    } echo "</tr>";
                }
            } echo "</table>";
            exit();
        }

        function exporttopdf() {
            require "library/tcpdf/config/lang/eng.php";
            require "library/tcpdf/tcpdf.php";
            $_iO68 = $this->_il1v->ExportSettings;
            $_iO6d = new tcpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, TRUE, $this->_il1v->CharSet, FALSE);
            $_iO6d->setfont('FreeSans', '', 012);
            $_iO6d->addpage();
            $_il6e = "";
            $_il6e.='<table border="1">';
            $_il6e.="<tr>";
            foreach ($this->_iO2k as $_iO5t) {
                if ($_iO5t->AllowExporting) {
                    $_il6e.='<th align="left" style="background-color: #EEEEEE;"><b>' . $_iO5t->HeaderText . '</b></th>';
                }
            } $_il6e.="</tr>";
            if ($_iO68->IgnorePaging) {
                $_iO69 = $this->DataSource->getdata();
                $_iO2h = $this->DataSource->geterror();
                if ($_iO2h != "") $this->_il1v->EventHandler->ondatasourceerror($this, array("Error" => $_iO2h)); foreach ($_iO69 as $_il2a) {
                    $_iO1l = new gridrow();
                    $_iO1l->DataItem = $_il2a;
                    $_il6e.="<tr>";
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            $_il6e.="<td>" . $_iO5t->render($_iO1l) . "</td>";
                        }
                    } $_il6e.="</tr>";
                }
            } else {
                foreach ($this->_il3i as $_iO1l) {
                    $_il6e.="<tr>";
                    foreach ($this->_iO2k as $_iO5t) {
                        if ($_iO5t->AllowExporting) {
                            $_il6e.="<td>" . $_iO5t->render($_iO1l) . "</td>";
                        }
                    } $_il6e.="</tr>";
                }
            } $_il6e.="</table>";
            $_iO6d->writehtml($_il6e, TRUE, 0, TRUE, 0);
            $_iO6d->output($_iO68->FileName . ".pdf", "D");
            exit();
        }

        function _iO1z() {
            $_iO6e = "<div id=\047{id}' class='kgrTableView' style=\047{width}{height}'><div class='kgrTop'>{grouppanel}{pager_top}{functionpanel_top}</div>{tables}<div class=\047kgrBottom\047>{functionpanel_bottom}{pager_bottom}{status}</div></div>";
            $_il6f = "<table class='kgrTable' cellspacing=\0470' style=\047{style}'>{colgroup}{thead}{tfoot}{tbody}</table>";
            $_iO6f = "<div class='{class}' style='{divstyle}\047><table id=\047{id}_{part}' style=\047{style}\047 class=\047kgrTable'>{colgroup}{tpart}</table></div>";
            $_il6g = "<colgroup>{cols}</colgroup>";
            $_iO6g = "<thead><tr>{ths}</tr>{insertform}{filter}</thead>";
            $_il6h = "<tr>{tds}</tr>";
            $_iO6h = "<tfoot>{tfoot_trs}</tfoot>";
            $_il6i = "<tr>{col_footer_tds}</tr>";
            $_iO6i = "<tbody>{tbody_trs}</tbody>";
            $_il6j = "";
            $_iO5r = "";
            $_iO6j = "";
            $_il6k = sizeof($this->_iO2k);
            for ($_iO9 = 0; $_iO9 < $_il6k; $_iO9++) {
                $_iO6k = $this->_iO2k[$_iO9];
                $_il6j.=$_iO6k->_iO31();
                if ($this->ShowHeader) {
                    $_iO5r.=$_iO6k->renderheader();
                } if ($this->ShowFooter) {
                    $_iO6j.=$_iO6k->renderfooter();
                }
            } $_il6l = _iO0("{cols}", $_il6j, $_il6g);
            $_iO6l = _iO0("{ths}", $_iO5r, $_iO6g);
            $_iO6l = _iO0("{insertform}", ($this->_il53) ? $this->_il5z->_iO1z() : "", $_iO6l);
            $_il6m = FALSE;
            for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2k); $_iO9++) {
                if ($this->_iO2k[$_iO9]->AllowFiltering) {
                    $_il6m = TRUE;
                }
            } if ($_il6m) {
                $_iO6m = "";
                for ($_iO9 = 0; $_iO9 < sizeof($this->_iO2k); $_iO9++) {
                    $_iO6m.=$this->_iO2k[$_iO9]->_iO38();
                } $_il6n = _iO0("{tds}", $_iO6m, $_il6h);
                $_iO6l = _iO0("{filter}", $_il6n, $_iO6l);
            } else {
                $_iO6l = _iO0("{filter}", "", $_iO6l);
            } $_iO6n = "";
            $_il6o = "";
            if (strtolower($this->ShowFunctionPanel)) {
                switch ($this->FunctionPanel->Position) {
                    case "top": $_iO6n = $this->FunctionPanel->_iO1z();
                        break;
                    case "top+bottom": $_iO6n = $this->FunctionPanel->_iO1z();
                        $_il6o = $this->FunctionPanel->_iO1z();
                        break;
                    case "bottom": default : $_il6o = $this->FunctionPanel->_iO1z();
                        break;
                }
            } $_iO6o = "";
            if ($this->ShowGroupPanel) {
                $_iO6o = $this->GroupPanel->_iO1z();
            } $_il6p = "";
            $_iO6p = "";
            if ($this->Pager != NULL) {
                switch (strtolower($this->Pager->Position)) {
                    case "top": $_il6p = $this->Pager->_iO1z();
                        break;
                    case "top+bottom": $_il6p = $this->Pager->_iO1z();
                        $_iO6p = $this->Pager->_iO1z();
                        break;
                    case "bottom": default : $_iO6p = $this->Pager->_iO1z();
                        break;
                }
            } $_il6q = "";
            if ($this->_il1y == $this->_il1v->_il1y . "_mt" && $this->_il1v->ShowStatus) {
                $_il6q = $this->_il1v->Status->_iO1z();
            } $_iO6q = "";
            if ($this->ShowFooter) {
                $_il6r = _iO0("{col_footer_tds}", $_iO6j, $_il6i);
                $_iO6q.=$_il6r;
            } $_iO6r = _iO0("{tfoot_trs}", $_iO6q, $_iO6h);
            $_il6s = "";
            for ($_iO9 = 0; $_iO9 < sizeof($this->_il3i); $_iO9++) {
                if ($this->RowAlternative) {
                    $this->_il3i[$_iO9]->_iO28 = ($_iO9 % 2 != 0);
                }
            } if (sizeof($this->_il2x) > 0) {
                $_il6s = $this->_iO5k->_iO1z();
            } else {
                for ($_iO9 = 0; $_iO9 < sizeof($this->_il3i); $_iO9++) {
                    $_il6s.=$this->_il3i[$_iO9]->_iO1z();
                }
            } $_iO6s = _iO0("{tbody_trs}", $_il6s, $_iO6i);
            $_il6t = _iO0("{id}", $this->_il1y, $_iO6e);
            if ($this->AllowScrolling == TRUE) {
                $_iO6t = "table-layout:fixed; empty-cells: show; overflow:hidden; width:{width};";
                $_iO6t = _iO0("{width}", ($this->_iO5z != NULL) ? $this->_iO5z : "100%", $_iO6t);
                $_il6u = _iO0("{id}", $this->_il1y, $_iO6f);
                $_il6u = _iO0("{part}", "header", $_il6u);
                $_il6u = _iO0("{class}", "kgrPartHeader", $_il6u);
                $_il6u = _iO0("{colgroup}", $_il6l, $_il6u);
                $_il6u = _iO0("{tpart}", $_iO6l, $_il6u);
                $_il6u = _iO0("{style}", $_iO6t, $_il6u);
                $_il6u = _iO0("{divstyle}", "", $_il6u);
                $_iO6u = _iO0("{id}", $this->_il1y, $_iO6f);
                $_iO6u = _iO0("{part}", "data", $_iO6u);
                $_iO6u = _iO0("{class}", "kgrPartData", $_iO6u);
                $_iO6u = _iO0("{colgroup}", $_il6l, $_iO6u);
                $_iO6u = _iO0("{tpart}", $_iO6s, $_iO6u);
                $_iO6u = _iO0("{style}", $_iO6t, $_iO6u);
                $_il6v = "";
                $_il6v.=($this->_iO5y) ? "height:" . $this->_iO5y . "px;" : "";
                $_iO6u = _iO0("{divstyle}", $_il6v, $_iO6u);
                $_iO6v = _iO0("{id}", $this->_il1y, $_iO6f);
                $_iO6v = _iO0("{part}", "footer", $_iO6v);
                $_iO6v = _iO0("{class}", "kgrPartFooter", $_iO6v);
                $_iO6v = _iO0("{colgroup}", $_il6l, $_iO6v);
                $_iO6v = _iO0("{tpart}", $_iO6r, $_iO6v);
                $_iO6v = _iO0("{style}", $_iO6t, $_iO6v);
                $_iO6v = _iO0("{divstyle}", "", $_iO6v);
                $_iO6u = _iO0("{colgroup}", $_il6l, $_iO6u);
                $_iO6u = _iO0("{tpart}", $_iO6s, $_iO6u);
                $_il6t = _iO0("{tables}", $_il6u . $_iO6u . $_iO6v, $_il6t);
            } else {
                $_iO2n = $_il6f;
                $_iO2n = _iO0("{colgroup}", $_il6l, $_iO2n);
                $_iO2n = _iO0("{style}", "table-layout: {layout};empty-cells: show;{width}", $_iO2n);
                $_iO2n = _iO0("{layout}", $this->TableLayout, $_iO2n);
                if ($this->Width !== NULL && strpos($this->Width, "%") !== FALSE) {
                    $_iO2n = _iO0("{width}", "width:100%", $_iO2n);
                } $_iO2n = _iO0("{thead}", ($this->ShowHeader) ? $_iO6l : "", $_iO2n);
                $_iO2n = _iO0("{tfoot}", $_iO6r, $_iO2n);
                $_iO2n = _iO0("{tbody}", $_iO6s, $_iO2n);
                $_il6t = _iO0("{tables}", $_iO2n, $_il6t);
            } $_il6t = _iO0("{width}", ($this->Width != "") ? "width:" . $this->Width . ";" : "", $_il6t);
            $_il6t = _iO0("{height}", ($this->Height != "") ? "height:" . $this->Height . ";" : "", $_il6t);
            $_il6t = _iO0("{grouppanel}", $_iO6o, $_il6t);
            $_il6t = _iO0("{functionpanel_top}", $_iO6n, $_il6t);
            $_il6t = _iO0("{functionpanel_bottom}", $_il6o, $_il6t);
            $_il6t = _iO0("{pager_top}", $_il6p, $_il6t);
            $_il6t = _iO0("{pager_bottom}", $_iO6p, $_il6t);
            $_il6t = _iO0("{status}", $_il6q, $_il6t);
            return $_il6t;
        }

    }

    class _il6w {

        var $LoadingText;
        var $DoneText;

        function _iO1w($_il1x) {
            if ($this->LoadingText === NULL) $this->LoadingText = $_il1x->Localization->_il22["Loading"]; if ($this->DoneText === NULL) $this->DoneText = $_il1x->Localization->_il22["Done"];
        }

        function _iO1z() {
            $_iO6w = "<div class='kgrStatus\047><span class='kgrDoneText'>{donetext}</span><span class='kgrLoadingText'>{loadingtext}</span></div>";
            $_il6q = _iO0("{donetext}", $this->DoneText, $_iO6w);
            $_il6q = _iO0("{loadingtext}", $this->LoadingText, $_il6q);
            return $_il6q;
        }

    }

    class _il6x {

        var $IgnorePaging = FALSE;
        var $FileName = "KoolGridExport";

    }

    class _iO6x {

        var $Resizing;
        var $Selecting;
        var $Scrolling;
        var $ClientMessages;
        var $ClientEvents;
        var $_il1v;

        function __construct() {
            $this->Resizing = array("ResizeGridOnColumnResize" => FALSE);
            $this->Selecting = array();
            $this->Scrolling = array("SaveScrollingPosition" => TRUE);
            $this->ClientMessages = array("DeleteConfirm" => NULL);
            $this->ClientEvents = array();
        }

        function _iO1w($_il1x) {
            $this->_il1v = $_il1x;
            if ($this->ClientMessages["DeleteConfirm"] === NULL) $this->ClientMessages["DeleteConfirm"] = $_il1x->Localization->_iO22["DeleteConfirm"];
        }

        function _il1u() {
            $_il21 = $this->_il1v->_iO26;
            $_il6y = $this->_il1v->_il1y;
            $_il21->_il1q[$_il6y]["ClientSettings"] = array();
            $_il21->_il1q[$_il6y]["ClientSettings"]["Resizing"] = $this->Resizing;
            $_il21->_il1q[$_il6y]["ClientSettings"]["Selecting"] = $this->Selecting;
            $_il21->_il1q[$_il6y]["ClientSettings"]["Scrolling"] = $this->Scrolling;
            $_il21->_il1q[$_il6y]["ClientSettings"]["ClientMessages"] = $this->ClientMessages;
            $_il21->_il1q[$_il6y]["ClientSettings"]["ClientEvents"] = $this->ClientEvents;
        }

    }

    class _il5t {

        var $ShowRefreshButton = TRUE;
        var $ShowInsertButton = TRUE;
        var $RefreshButtonText;
        var $InsertButtonText;
        var $Position = "bottom";
        var $_il27;
        var $PanelTemplate = "{Insert} {Refresh}";

        function _iO1w($_il29) {
            $this->_il27 = $_il29;
            if ($this->RefreshButtonText === NULL) $this->RefreshButtonText = $_il29->_il1v->Localization->_il22["Refresh"]; if ($this->InsertButtonText === NULL) $this->InsertButtonText = $_il29->_il1v->Localization->_il22["Insert"];
        }

        function _iO1z() {
            $_iO6y = "<div class='kgrFunctionPanel\047>{content}</div>";
            $_il3l = "<input class='nodecor\047 type='button' onclick='{onclick}' title='{title}\047/>";
            $_iO40 = "<a href=\047javascript:void 0\047 onclick=\047{onclick}\047 title='{title}\047>{text}</a>";
            $_il41 = "<span class= '{class}'>{button}{a}</span> ";
            $_il6z = _iO0("{class}", "kgrRefresh", $_il41);
            $_il6z = _iO0("{button}", $_il3l, $_il6z);
            $_il6z = _iO0("{a}", ($this->RefreshButtonText != NULL) ? $_iO40 : "", $_il6z);
            $_il6z = _iO0("{onclick}", "tableview_refresh(this)", $_il6z);
            $_il6z = _iO0("{title}", "", $_il6z);
            $_il6z = _iO0("{text}", $this->RefreshButtonText, $_il6z);
            $_iO6z = _iO0("{class}", "kgrInsert", $_il41);
            $_iO6z = _iO0("{button}", $_il3l, $_iO6z);
            $_iO6z = _iO0("{a}", ($this->InsertButtonText != NULL) ? $_iO40 : "", $_iO6z);
            $_iO6z = _iO0("{onclick}", "grid_insert(this)", $_iO6z);
            $_iO6z = _iO0("{title}", "", $_iO6z);
            $_iO6z = _iO0("{text}", $this->InsertButtonText, $_iO6z);
            $_il70 = _iO0("{content}", $this->PanelTemplate, $_iO6y);
            $_il70 = _iO0("{Refresh}", ($this->ShowRefreshButton) ? $_il6z : "", $_il70);
            $_il70 = _iO0("{Insert}", ($this->ShowInsertButton) ? $_iO6z : "", $_il70);
            return $_il70;
        }

    }

    class _iO70 implements _il1t {

        var $_il1y;
        var $_iO26;
        var $MasterTable;
        var $_iO1y;
        var $AjaxEnabled = FALSE;
        var $AjaxHandlePage;
        var $_il2g;
        var $Status;
        var $AllowHovering = FALSE;
        var $AllowSelecting = FALSE;
        var $AllowMultiSelecting = FALSE;
        var $AllowEditing = FALSE;
        var $AllowDeleting = FALSE;
        var $AllowScrolling = FALSE;
        var $AllowSorting = FALSE;
        var $AllowResizing = FALSE;
        var $AllowFiltering = FALSE;
        var $AllowGrouping = FALSE;
        var $VirtualScrolling = FALSE;
        var $SingleColumnSorting = FALSE;
        var $ShowHeader = TRUE;
        var $ShowFooter = FALSE;
        var $RowAlternative = FALSE;
        var $AutoGenerateRowSelectColumn = FALSE;
        var $AutoGenerateExpandColumn = FALSE;
        var $AutoGenerateColumns = FALSE;
        var $AutoGenerateEditColumn = FALSE;
        var $AutoGenerateDeleteColumn = FALSE;
        var $DisableAutoGenerateDataFields = "";
        var $KeepSelectedRecords = FALSE;
        var $ShowStatus = FALSE;
        var $ColumnWrap = FALSE;
        var $ColumnAlign;
        var $_il2u;
        var $KeepRowStateOnRefresh = FALSE;
        var $TableLayout = "auto";
        var $Width;
        var $Height;
        var $FilterOptions;
        var $PageSize = 012;
        var $DataSource;
        var $ClientSettings;
        var $Localization;
        var $CharSet = "UTF-8";
        var $KeepViewStateInSession = FALSE;
        var $KeepGridRefresh = FALSE;
        var $EventHandler;
        var $ExportSettings;

        function __construct($_il71) {
            $this->_il1y = $_il71;
            $this->_iO26 = new _iO1u();
            $this->Localization = new _iO21();
            $this->MasterTable = new gridtableview("MasterTable");
            $this->_il2g = new _il25($this);
            $this->Status = new _il6w();
            $this->ClientSettings = new _iO6x();
            $this->FilterOptions = array("No_Filter", "Equal", "Not_Equal", "Greater_Than", "Less_Than", "Greater_Than_Or_Equal", "Less_Than_Or_Equal", "Contain", "Not_Contain", "Start_With", "End_With");
            $this->ExportSettings = new _il6x();
        }

        function _iO1w() {
            if ($this->EventHandler === NULL) $this->EventHandler = new grideventhandler(); $this->_iO26->_iO1w($this);
            $this->_iO1y->_il1y = $this->_il1y . "_mt";
            $this->_iO1y->_iO1w($this, NULL);
            $this->ClientSettings->_iO1w($this);
            $this->Status->_iO1w($this);
            if ($this->DataSource !== NULL) {
                $this->DataSource->setcharset($this->CharSet);
            }
        }

        function _iO1t() {
            if (isset($this->_iO26->_il1q[$this->_il1y])) {
                $_iO29 = $this->_iO26->_il1q[$this->_il1y];
            }
        }

        function _il1u() {
            $this->_iO26->_il1q = array();
            $this->_iO26->_il1q[$this->_il1y] = array();
            $this->_iO1y->_il1u();
            $this->ClientSettings->_il1u();
        }

        function process() {
            $this->_iO1y = $this->MasterTable->_il2d();
            $this->_iO1w();
            $this->_iO1t();
            $this->_iO1y->_iO2c();
            if (isset($this->_il2g->_il22[$this->_il1y])) {
                $_iO2f = $this->_il2g->_il22[$this->_il1y];
                switch ($_iO2f["Command"]) {
                    case "Refresh": $this->refresh();
                        break;
                }
            } if ($this->KeepGridRefresh) {
                $this->_iO71 = TRUE;
            } $this->EventHandler->ongridprerender($this, array());
            $this->_iO1y->_il2f($this->_il2g);
        }

        function refresh() {
            if ($this->_iO1y !== NULL) {
                $this->_iO1y->refresh();
            }
        }

        function getinstancemastertable() {
            return $this->_iO1y;
        }

        function _il72() {
            $this->_il1u();
            $_iO4a = "{mastertable}{viewstate}{command}";
            $_ilg = _iO0("{mastertable}", $this->_iO1y->_iO1z(), $_iO4a);
            $_ilg = _iO0("{viewstate}", $this->_iO26->_iO1z(), $_ilg);
            $_ilg = _iO0("{command}", $this->_il2g->_iO1z(), $_ilg);
            return $_ilg;
        }

        function registerclientevent($_iO5s, $_iO72) {
            $this->ClientSettings->ClientEvents[$_iO5s] = $_iO72;
        }

    }

    class grideventhandler {

        function onbeforedetailtablesexpand($_il73, $_iO4c) {
            return TRUE;
        }

        function ondetailtablesexpand($_il73, $_iO4c) {
            
        }

        function onbeforedetailtablescollapse($_il73, $_iO4c) {
            return TRUE;
        }

        function ondetailtablescollapse($_il73, $_iO4c) {
            
        }

        function onbeforerowstartedit($_il73, $_iO4c) {
            return TRUE;
        }

        function onrowstartedit($_il73, $_iO4c) {
            
        }

        function onbeforerowcanceledit($_il73, $_iO4c) {
            return TRUE;
        }

        function onrowcanceledit($_il73, $_iO4c) {
            
        }

        function onbeforerowdelete($_il73, $_iO4c) {
            return TRUE;
        }

        function onrowdelete($_il73, $_iO4c) {
            
        }

        function onbeforecolumnsort($_il73, $_iO4c) {
            return TRUE;
        }

        function oncolumnsort($_il73, $_iO4c) {
            
        }

        function onbeforecolumnfilter($_il73, $_iO4c) {
            return TRUE;
        }

        function oncolumnfilter($_il73, $_iO4c) {
            
        }

        function onbeforecolumngroup($_il73, $_iO4c) {
            return TRUE;
        }

        function oncolumngroup($_il73, $_iO4c) {
            
        }

        function onbeforecolumnremovegroup($_il73, $_iO4c) {
            return TRUE;
        }

        function oncolumnremovegroup($_il73, $_iO4c) {
            
        }

        function onbeforeaddgroup($_il73, $_iO4c) {
            return TRUE;
        }

        function onaddgroup($_il73, $_iO4c) {
            
        }

        function onbeforechangegrouporder($_il73, $_iO4c) {
            return TRUE;
        }

        function onchangegrouporder($_il73, $_iO4c) {
            
        }

        function onbeforeremovegroup($_il73, $_iO4c) {
            return TRUE;
        }

        function onremovegroup($_il73, $_iO4c) {
            
        }

        function onbeforepageindexchange($_il73, $_iO4c) {
            return TRUE;
        }

        function onpageindexchange($_il73, $_iO4c) {
            
        }

        function onbeforepagesizechange($_il73, $_iO4c) {
            return TRUE;
        }

        function onpagesizechange($_il73, $_iO4c) {
            
        }

        function onbeforerowconfirmedit($_il73, $_iO4c) {
            return TRUE;
        }

        function onrowconfirmedit($_il73, $_iO4c) {
            
        }

        function onbeforeconfirminsert($_il73, $_iO4c) {
            return TRUE;
        }

        function onconfirminsert($_il73, $_iO4c) {
            
        }

        function onbeforestartinsert($_il73, $_iO4c) {
            return TRUE;
        }

        function onstartinsert($_il73, $_iO4c) {
            
        }

        function onbeforecancelinsert($_il73, $_iO4c) {
            return TRUE;
        }

        function oncancelinsert($_il73, $_iO4c) {
            
        }

        function ondatasourceerror($_il73, $_iO4c) {
            
        }

        function onrowprerender($_il73, $_iO4c) {
            
        }

        function ontableviewprerender($_il73, $_iO4c) {
            
        }

        function ongridprerender($_il73, $_iO4c) {
            
        }

    }

    class koolgrid extends _iO70 {

        var $_il0 = "4.5.0.0";
        var $styleFolder;
        var $_iO6t;
        var $scriptFolder;
        var $id;
        var $AjaxLoadingImage;

        function __construct($_il71) {
            $this->id = $_il71;
            parent:: __construct($_il71);
        }

        function render() {
            $_iO73 = "";
            $_iO73.=$this->registercss();
            $_iO73.=$this->rendergrid();
            $_il74 = isset($_POST["__koolajax"]) || isset($_GET["__koolajax"]);
            $_iO73.=($_il74) ? "" : $this->registerscript();
            $_iO73.="<script type='text/javascript\047>";
            $_iO73.=$this->startupscript();
            $_iO73.="</script>";
            if ($this->AjaxEnabled && class_exists("UpdatePanel")) {
                $_iO74 = new updatepanel($this->id . "_updatepanel");
                $_iO74->content = $_iO73;
                $_iO74->cssclass = $this->_iO6t . "KGR_UpdatePanel";
                if ($this->AjaxLoadingImage) {
                    $_iO74->setloading($this->AjaxLoadingImage);
                } $_iO73 = $_iO74->render();
            } return $_iO73;
        }

        function rendergrid() {
            $this->_il75();
            $_iO75 = "\n<!--KoolGrid version {version} - www.koolphp.net -->\n";
            $_il76 = _iO0("{version}", $this->_il0, $_iO75);
            $_ilg = _iO0("{id}", $this->id, _iOd());
            if (_iOf($_ilg)) {
                $_ilg = _iO0("{style}", $this->_iO6t, $_ilg);
            } $_ilg = _iO0("{trademark}", $_il76, $_ilg);
            $_ilg = _iO0("{width}", ($this->Width !== NULL) ? "width:" . $this->Width : "", $_ilg);
            $_ilg = _iO0("{content}", parent::_il72(), $_ilg);
            $_ilg = _iO0("{version}", $this->_il0, $_ilg);
            return $_ilg;
        }

        function _il75() {
            $this->styleFolder = _iO0("\134", "/", $this->styleFolder);
            $_iO76 = trim($this->styleFolder, "/");
            $_il77 = strrpos($_iO76, "/");
            $this->_iO6t = substr($_iO76, ($_il77 ? $_il77 : -1) + 1);
        }

        function registercss() {
            $this->_il75();
            $_iO77 = "<script type='text/javascript\047>if (document.getElementById(\047__{style}KGR')==null){var _head = document.getElementsByTagName('head\047)[0];var _link = document.createElement(\047link'); _link.id = \047__{style}KGR\047;_link.rel='stylesheet'; _link.href='{stylepath}/{style}/{style}.css\047;_head.appendChild(_link);}</script>";
            $_iO73 = _iO0("{style}", $this->_iO6t, $_iO77);
            $_iO73 = _iO0("{stylepath}", $this->_il78(), $_iO73);
            return $_iO73;
        }

        function registerscript() {
            $_iO77 = "<script type='text/javascript\047>if(typeof _libKGR==\047undefined\047){document.write(unescape(\042%3Cscript type=\047text/javascript\047 src='{src}'%3E %3C/script%3E\042));_libKGR=1;}</script>";
            $_iO73 = _iO0("{src}", $this->_iO78() . "?" . md5("js"), $_iO77);
            return $_iO73;
        }

        function startupscript() {
            $_iO77 = "var {id}; function {id}_init(){ {id}=new KoolGrid('{id}',{AjaxEnabled},'{AjaxHandlePage}');}";
            $_iO77.="if (typeof(KoolGrid)=='function\047){{id}_init();}";
            $_iO77.="else{if(typeof(__KGRInits)=='undefined'){__KGRInits=new Array();} __KGRInits.push({id}_init);{register_script}}";
            $_il79 = "if(typeof(_libKGR)==\047undefined'){var _head = document.getElementsByTagName('head\047)[0];var _script = document.createElement(\047script'); _script.type='text/javascript'; _script.src=\047{src}'; _head.appendChild(_script);_libKGR=1;}";
            $_iO79 = _iO0("{src}", $this->_iO78() . "?" . md5("js"), $_il79);
            $_iO73 = _iO0("{id}", $this->id, $_iO77);
            $_iO73 = _iO0("{AjaxEnabled}", $this->AjaxEnabled ? "1" : "0", $_iO73);
            $_iO73 = _iO0("{AjaxHandlePage}", $this->AjaxHandlePage, $_iO73);
            $_iO73 = _iO0("{register_script}", $_iO79, $_iO73);
            return $_iO73;
        }

        function _iO78() {
            if ($this->scriptFolder == "") {
                $_il5 = _iO3();
                $_il7a = substr(_iO0("\134", "/", __FILE__), strlen($_il5));
                return $_il7a;
            } else {
                $_il7a = _iO0("\134", "/", __FILE__);
                $_il7a = $this->scriptFolder . substr($_il7a, strrpos($_il7a, "/"));
                return $_il7a;
            }
        }

        function _il78() {
            $_iO7a = $this->_iO78();
            $_il7b = _iO0(strrchr($_iO7a, "/"), "", $_iO7a) . "/styles";
            return $_il7b;
        }

    }

} ?>
