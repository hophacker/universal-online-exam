<?php $_ll0 = "1.9.0.0";

function _lO0($_ll1, $_lO1, $_ll2) {
    return str_replace($_ll1, $_lO1, $_ll2);
}

function _lO2($_ll3) {
    return md5($_ll3);
}

function _lO3() {
    $_ll4 = _lO0("\134", "/", strtolower($_SERVER["SCRIPT_NAME"]));
    $_ll4 = _lO0(strrchr($_ll4, "/"), "", $_ll4);
    $_lO4 = _lO0("\134", "/", realpath("."));
    $_ll5 = _lO0($_ll4, "", strtolower($_lO4));
    return $_ll5;
}

class _li10 {

    static $_li10 = "{0}{trademark}<div id=\047{id}' style class=\047{style}KCD'>{view}{viewstate}{settings}{QMS}{1}</div>{2}";

}

function _lO5() {
    $_ll6 = _lO6();
    _ll7($_ll6, 0153);
    _ll7($_ll6, 0113);
    _ll7($_ll6, 0121);
    _ll7($_ll6, -014);
    _ll7($_ll6, 050);
    _ll7($_ll6, 052);
    _ll7($_ll6, 034);
    _ll7($_ll6, (_lO7() || _ll8() || _lO8()) ? -050 : -011);
    _ll7($_ll6, -062);
    _ll7($_ll6, -061);
    _ll7($_ll6, -0111);
    _ll7($_ll6, -0111);
    $_ll9 = "";
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_ll9.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } echo $_ll9;
    return $_ll9;
}

function _llb() {
    $_ll6 = _lO6();
    $_lOb = "";
    _ll7($_ll6, 0151);
    _ll7($_ll6, 0123);
    _ll7($_ll6, 0114);
    _ll7($_ll6, 071);
    _ll7($_ll6, -017);
    _ll7($_ll6, -031);
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_lOb.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } return _llc($_lOb);
}

function _lO7() {
    $_lOc = "";
    $_ll6 = _lO6();
    _ll7($_ll6, 045);
    _ll7($_ll6, 032);
    _ll7($_ll6, 027);
    _ll7($_ll6, 071);
    _ll7($_ll6, 053);
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_lOc.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } return (substr(_lO2(_lld()), 0, 5) != $_lOc);
}

class _li11 {

    static $_li11 = 017;

}

function _ll8() {
    $_lOc = "";
    $_ll6 = _lO6();
    _ll7($_ll6, 0126);
    _ll7($_ll6, 043);
    _ll7($_ll6, 023);
    _ll7($_ll6, 070);
    _ll7($_ll6, 055);
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_lOc.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } return (substr(_lO2(_lOd()), 0, 5) != $_lOc);
}

function _lO8() {
    $_ll6 = _lO6();
    _ll7($_ll6, 0124);
    _ll7($_ll6, 0126);
    _ll7($_ll6, 0110);
    _ll7($_ll6, 5);
    _ll7($_ll6, -6);
    $_lle = "";
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_lle.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } $_lOe = _llf($_lle);
    return (( isset($_lOe[$_lle]) ? $_lOe[$_lle] : 0) != 01053 / 045);
}

function _lOf(&$_llg) {
    $_ll6 = _lO6();
    _ll7($_ll6, 0124);
    _ll7($_ll6, 0126);
    _ll7($_ll6, 0110);
    _ll7($_ll6, 5);
    _ll7($_ll6, -6);
    $_lOg = "";
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_lOg.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } $_lOe = _llf($_lOg);
    $_llh = $_lOe[$_lOg];
    $_llg = _lO0(_lOa(0173) . (_llb() % 3) . _lOa(0175), (!(_llb() % _lOh())) ? _lld() : _lOi(), $_llg);
    for ($_lO9 = 0; $_lO9 < 3; $_lO9++)
        if ((_llb() % 3) != $_lO9) $_llg = _lO0(_lOa(0173) . $_lO9 . _lOa(0175), _lOi(), $_llg); $_llg = _lO0(_lOa(0173) . (_llb() % 3) . _lOa(0175), (!(_llb() % $_llh)) ? _lld() : _lOi(), $_llg);
    return ($_llh == _lOh());
}

function _lld() {
    $_ll6 = _lO6();
    _ll7($_ll6, 0124);
    _ll7($_ll6, 0126);
    _ll7($_ll6, 0110);
    _ll7($_ll6, 4);
    _ll7($_ll6, -6);
    $_llj = "";
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_llj.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } $_lOe = _llf($_llj);
    return isset($_lOe[$_llj]) ? $_lOe[$_llj] : "";
}

function _lOd() {
    $_ll6 = _lO6();
    _ll7($_ll6, 0124);
    _ll7($_ll6, 0126);
    _ll7($_ll6, 0110);
    _ll7($_ll6, 5);
    _ll7($_ll6, -7);
    $_lOj = "";
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_lOj.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } $_lOe = _llf($_lOj);
    return isset($_lOe[$_lOj]) ? $_lOe[$_lOj] : "";
}

function _lOh() {
    $_ll6 = _lO6();
    _ll7($_ll6, 0124);
    _ll7($_ll6, 0126);
    _ll7($_ll6, 0110);
    _ll7($_ll6, 5);
    _ll7($_ll6, -6);
    $_lOg = "";
    for ($_lO9 = 0; $_lO9 < _lla($_ll6); $_lO9++) {
        $_lOg.=_lOa($_ll6[$_lO9] + 013 * ($_lO9 + 1));
    } $_lOe = _llf($_lOg);
    return isset($_lOe[$_lOg]) ? $_lOe[$_lOg] : (0207 / 011);
}

function _lO6() {
    return array();
}

function _llf($_llk) {
    $_lOk = _lOa(044);
    $_lll = _lOa(072);
    return array($_llk => _llc($_llk . $_lll . $_lll . $_lOk . $_llk));
}

function _llc($_llm) {
    return eval("return " . $_llm . ";");
}

function _lla($_lOm) {
    return sizeof($_lOm);
}

function _lOi() {
    return "";
}

function _lln() {
    header("Content-type: text/javascript");
}

function _ll7(&$_lOm, $_lOn) {
    array_push($_lOm, $_lOn);
}

function _llo() {
    return exit();
}

function _lOa($_lOo) {
    return chr($_lOo);
}

class _li01 {

    static $_li01 = "<div style='font-family:Arial;font-size:10pt;background-color:#FEFFDF;color:black;display:block;visibility:visible;'><span style='font-family:Arial;font-size:10pt;font-weight:bold;color:black;display:inline;visibility:visible;'>KoolCalendar</span> - Trial version {version} - Copyright (C) KoolPHP .Inc - <a style='font-family:Arial;font-size:10pt;display:inline;visibility:visible;' href='http://www.koolphp.net\047>www.koolphp.net</a>. <span style='font-family:Arial;color:black;font-size:10pt;display:inline;visibility:visible;'>To remove</span> this message, please <a style='font-family:Arial;font-size:10pt;display:inline;visibility:visible;' href='http://www.koolphp.net/?mod=purchase\047>purchase a license</a>.</div>";

}

if (isset($_GET[_lO2("js")])) {
    _lln(); ?> function _lO(_lo){if (typeof(_lo)=="undefined"){return false; }return (_lo!=null); }function _lY(_ly){return document.getElementById(_ly); }function _lI(_li,_lA){var _la=document.createElement(_li); _lA.appendChild(_la); return _la; }function _lE(_lo,_le){if (!_lO(_le))_le=1; for (var i=0; i<_le; i++)_lo=_lo.firstChild; return _lo; }function _lU(_lo,_le){if (!_lO(_le))_le=1; for (var i=0; i<_le; i++)_lo=_lo.nextSibling; return _lo; }function _lu(_lo,_le){if (!_lO(_le))_le=1; for (var i=0; i<_le; i++)_lo=_lo.parentNode; return _lo; }function _lZ(){return (typeof(_liO1)=="undefined");}function _lz(_lo,_lX){_lo.style.top=_lO(_lX)?_lX+"px": ""; }function _lx(_lo){return parseInt(_lo.style.top); }function _lW(_lo,_lX){_lo.style.left=_lO(_lX)?_lX+"px": ""; }function _lw(_lo){return parseInt(_lo.style.left); }function _lV(_lo,_lX){_lo.style.height=_lX+"px"; }function _lv(_lo,_lX){_lo.style.width=_lX+"px"; }function _lT(_lo){return parseInt(_lo.style.width); }function _lt(_lo){return parseInt(_lo.style.height); }function _lS(_lo,_lX){_lo.style.zIndex=_lO(_lX)?_lX:null; }function _ls(_lo){if (_lo.style.zIndex!=null)return parseInt(_lo.style.zIndex); else return 0; }function _lR(_lr,_lQ,_lq){_lq=_lO(_lq)?_lq:document.body; var _lP=_lq.getElementsByTagName(_lr); var _lp=new Array(); for (var i=0; i<_lP.length; i++)if (_lP[i].className.indexOf(_lQ)>=0){_lp.push(_lP[i]); }return _lp; }function _lN(_lo,_lX){_lo.style.display=(_lX)?"": "none"; }function _ln(_lo){return (_lo.style.display!="none"); }function _lM(_lo){return _lo.className; }function _lm(_lo,_lX){_lo.className=_lX; }function _lL(_ll,_lK,_lk){_lm(_lk,_lM(_lk).replace(_ll,_lK)); }function _lJ(_lo,_lQ){if (_lo.className.indexOf(_lQ)<0){var _lj=_lo.className.split(" "); _lj.push(_lQ); _lo.className=_lj.join(" "); }}function _lH(_ll,_lK,_lh){return _lh.replace(eval("/"+_ll+"/g"),_lK); }function _lG(_lh,_lg){_lh+=""; return _lF(_lf(_lh,_lg),_lg); }function _lF(_lh,_lg){_lh+=""; _lg=_lg || "\\s"; return _lh.replace(new RegExp("^["+_lg+"]+","g"),""); }function _lf(_lh,_lg){_lh+=""; _lg=_lg || "\\s"; return _lh.replace(new RegExp("["+_lg+"]+$","g"),""); }function _lD(_lo,_lQ){if (_lo.className.indexOf(_lQ)>-1){_lL(_lQ,"",_lo);var _lj=_lo.className.split(" "); _lo.className=_lj.join(" "); }}function _ld(_lh){while (_lh.charAt(0)=="0" && _lh.length>1){_lh=_lh.substring(1); }return parseInt(_lh); }function _lC(_lc,_lB,_lb,_lo0){if (_lc.addEventListener){_lc.addEventListener(_lB,_lb,_lo0); return true; }else if (_lc.attachEvent){if (_lo0){return false; }else {var _lO0= function (){_lb.apply(_lc,[window.event]); };if (!_lc["ref"+_lB])_lc["ref"+_lB]=[]; else {for (var _ll0 in _lc["ref"+_lB]){if (_lc["ref"+_lB][_ll0]._lb === _lb)return false; }}var _li0=_lc.attachEvent("on"+_lB,_lO0); if (_li0)_lc["ref"+_lB].push( {_lb:_lb,_lO0:_lO0 } ); return _li0; }}else {return false; }}function _lI0(_lo1){if (_lo1.stopPropagation)_lo1.stopPropagation(); else _lo1.cancelBubble= true; }function _lO1(_lo1){if (_lo1.preventDefault)_lo1.preventDefault(); else event.returnValue= false; return false; }function _ll1(d){var a=d.attributes,i,l,n; if (a){l=a.length; for (i=0; i<l; i+=1){if (a[i])n=a[i].name; if (typeof d[n] === "function"){d[n]=null; }}}a=d.childNodes; if (a){l=a.length; for (i=0; i<l; i+=1){_ll1(d.childNodes[i]); }}}function _li1(_lk){var _lI1=""; for (var _lo2 in _lk){switch (typeof(_lk[_lo2])){case "string":_lI1+="\""+_lo2+"\":\""+_lk[_lo2]+"\","; break; case "number":_lI1+="\""+_lo2+"\":"+_lk[_lo2]+","; break; case "boolean":_lI1+="\""+_lo2+"\":"+(_lk[_lo2]?"true": "false")+","; break; case "object":_lI1+="\""+_lo2+"\":"+_li1(_lk[_lo2])+","; break; }}if (_lI1.length>0)_lI1=_lI1.substring(0,_lI1.length-1); _lI1="{"+_lI1+"}"; if (_lI1=="{}")_lI1="null"; return _lI1; }function _lO2(_ll,_ll2){return _ll2.indexOf(_ll); }function _li2(_lI2){if (_lI2.pageX || _lI2.pageY){return {_lo3:_lI2.pageX,_lO3:_lI2.pageY } ; }else if (_lI2.clientX || _lI2.clientY){return {_lo3:_lI2.clientX+(document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft),_lO3:_lI2.clientY+(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)} ; }else {return {_lo3:null,_lO3:null } ; }}function _ll3(){var _li3=navigator.userAgent.toLowerCase(); if (_lO2("opera",_li3)!=-1){return "opera"; }else if (_lO2("firefox",_li3)!=-1){return "firefox"; }else if (_lO2("safari",_li3)!=-1){return "safari"; }else if ((_lO2("msie 6",_li3)!=-1) && (_lO2("msie 7",_li3)==-1) && (_lO2("msie 8",_li3)==-1) && (_lO2("opera",_li3)==-1)){return "ie6"; }else if ((_lO2("msie 7",_li3)!=-1) && (_lO2("opera",_li3)==-1)){return "ie7"; }else if ((_lO2("msie 8",_li3)!=-1) && (_lO2("opera",_li3)==-1)){return "ie8"; }else if ((_lO2("msie",_li3)!=-1) && (_lO2("opera",_li3)==-1)){return "ie"; }else if (_lO2("chrome",_li3)!=-1){return "chrome"; }else {return "firefox"; }}function _lI3(_lo2){switch (_lo2.toLowerCase()){case "linear":return function (t,b,c,d){return c*t/d+b; } ; break; case "easein":return function (t,b,c,d){return c*(t /= d)*t+b; } ; break; case "easeout":return function (t,b,c,d){return -c*(t /= d)*(t-2)+b; } ; break; case "easeboth":return function (t,b,c,d){if ((t /= d/2)<1)return c/2*t*t+b; return -c/2*(( --t)*(t-2)-1)+b; } ; break; case "easeinstrong":return function (t,b,c,d){return c*(t /= d)*t*t*t+b; } ; break; case "easeoutstrong":return function (t,b,c,d){return -c*((t=t/d-1)*t*t*t-1)+b; } ; break; case "easebothstrong":return function (t,b,c,d){if ((t /= d/2)<1){return c/2*t*t*t*t+b; }return -c/2*((t-=2)*t*t*t-2)+b; } ; break; case "bouncein":return function (t,b,c,d){return c-(_lI3("bounceout"))(d-t,0,c,d)+b; } ; break; case "bounceout":return function (t,b,c,d){if ((t /= d)<(1/.275e1)){return c*(.75625e1*t*t)+b; }else if (t<(2/.275e1)){return c*(.75625e1*(t-=(.15e1/.275e1))*t+.75)+b; }else if (t<(.25e1/.275e1)){return c*(.75625e1*(t-=(.225e1/.275e1))*t+.9375)+b; }return c*(.75625e1*(t-=(.2625e1/.275e1))*t+.984375)+b; } ; break; case "bounceboth":return function (t,b,c,d){if (t<d/2){return (_lI3("bouncein"))(t*2,0,c,d)*.5+b; }return (_lI3("bounceout"))(t*2-d,0,c,d)*.5+c*.5+b; } ; break; case "elasticin":return function (t,b,c,d,a,p){if (t==0){return b; }if ((t /= d)==1){return b+c; }if (!p){p=d*.3; }if (!a || a<Math.abs(c)){a=c; var s=p/4; }else {var s=p/(2*Math.PI)*Math.asin(c/a); }return -(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b; } ; break; case "elasticout":return function (t,b,c,d,a,p){if (t==0){return b; }if ((t /= d)==1){return b+c; }if (!p){p=d*.3; }if (!a || a<Math.abs(c)){a=c; var s=p/4; }else {var s=p/(2*Math.PI)*Math.asin(c/a); }return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b; } ; break; case "elasticboth":return function (t,b,c,d,a,p){if (t==0){return b; }if ((t /= d/2)==2){return b+c; }if (!p){p=d*(.3*.15e1); }if (!a || a<Math.abs(c)){a=c; var s=p/4; }else {var s=p/(2*Math.PI)*Math.asin(c/a); }if (t<1){return -.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b; }return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b; } ; break; case "backin":return function (t,b,c,d,s){if (typeof s=="undefined"){s=.170158e1; }return c*(t /= d)*t*((s+1)*t-s)+b; } ; break; case "backout":return function (t,b,c,d){if (typeof s=="undefined"){s=.170158e1; }return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b; } ; break; case "backboth":return function (t,b,c,d,s){if (typeof s=="undefined"){s=.170158e1; }if ((t /= d/2)<1){return c/2*(t*t*(((s *= (.1525e1))+1)*t-s))+b; }return c/2*((t-=2)*t*(((s *= (.1525e1))+1)*t+s)+2)+b; } ; break; case "none":default:return function (t,b,c,d){return c+b; } ; break; }}function _lo4(_lO4){return new Date(_lO4.getTime()); }function _ll4(_lO4,_li4){var _lI4=_lo4(_lO4); _lI4.setDate(_lI4.getDate()+_li4); return _lI4; }Date.prototype._lo5= function (){var _lO5=new Date(this.getFullYear(),0,1); return Math.ceil((((this -_lO5)/86400000)+_lO5.getDay()+1)/7); };Date.prototype._ll5= function (_ll5){var _li5=""; var replace=Date._lI5; for (var i=0; i<_ll5.length; i++){var _lo6=_ll5.charAt(i); if (replace[_lo6]){_li5+=replace[_lo6].call(this ); }else {_li5+=_lo6; }}return _li5; } ; Date._lI5= {_lO6: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],_ll6: ["January","February","March","April","May","June","July","August","September","October","November","December"],_li6: ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],_lI6: ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],d:function (){return (this.getUTCDate()<10?"0": "")+this.getUTCDate(); } ,D:function (){return Date._lI5._li6[this.getUTCDay()]; } ,j:function (){return this.getUTCDate(); } ,l:function (){return Date._lI5._lI6[this.getUTCDay()]; } ,N:function (){return this.getUTCDay()+1; } ,S:function (){return (this.getUTCDate()%10==1 && this.getUTCDate()!=11?"st": (this.getUTCDate()%10==2 && this.getUTCDate()!=12?"nd": (this.getUTCDate()%10==3 && this.getUTCDate()!=13?"rd": "th"))); } ,w:function (){return this.getUTCDay(); } ,z:function (){return "Not Yet Supported"; } ,W:function (){return "Not Yet Supported"; } ,F:function (){return Date._lI5._ll6[this.getUTCMonth()]; } ,m:function (){return (this.getUTCMonth()<9?"0": "")+(this.getUTCMonth()+1); } ,M:function (){return Date._lI5._lO6[this.getUTCMonth()]; } ,n:function (){return this.getUTCMonth()+1; } ,t:function (){return "Not Yet Supported"; } ,L:function (){return "Not Yet Supported"; } ,o:function (){return "Not Supported"; } ,Y:function (){return this.getUTCFullYear(); } ,y:function (){return (""+this.getUTCFullYear()).substr(2); } ,a:function (){return this.getUTCHours()<12?"am": "pm"; } ,A:function (){return this.getUTCHours()<12?"AM": "PM"; } ,B:function (){return "Not Yet Supported"; } ,g:function (){return this.getUTCHours()%12 || 12; } ,G:function (){return this.getUTCHours(); } ,h:function (){return ((this.getUTCHours()%12 || 12)<10?"0": "")+(this.getUTCHours()%12 || 12); } ,H:function (){return (this.getUTCHours()<10?"0": "")+this.getUTCHours(); } ,i:function (){return (this.getUTCMinutes()<10?"0": "")+this.getUTCMinutes(); } ,s:function (){return (this.getUTCSeconds()<10?"0": "")+this.getUTCSeconds(); } ,e:function (){return "Not Yet Supported"; } ,I:function (){return "Not Supported"; } ,O:function (){return (-this.getTimezoneOffset()<0?"-": "+")+(Math.abs(this.getTimezoneOffset()/60)<10?"0": "")+(Math.abs(this.getTimezoneOffset()/60))+"00"; } ,T:function (){var m=this.getMonth(); this.setMonth(0); var _lo7=this.toTimeString().replace(/^.+ \(?([^)]+)\)?$/,"$1"); this.setMonth(m); return _lo7; } ,Z:function (){return -this.getTimezoneOffset()*60; } ,c:function (){return "Not Yet Supported"; } ,r:function (){return this.toString(); } ,U:function (){return this.getTime()/1000; }} ; function KoolCalendar(_ly){ this._ly=_ly; this._lO7=new Array(); this._ll7(); }KoolCalendar.prototype= {_ll7:function (){var _li7=_lY(this._ly); var _lI7=this._lo8(); var _lO8=_lR("span","kcdNext",_li7)[0]; if (_lO8){_lC(_lE(_lO8),"click",_ll8, false); }var _li8=_lR("span","kcdPrev",_li7)[0]; if (_li8){_lC(_lE(_li8),"click",_lI8, false); }var _lo9=_lR("span","kcdFastNext",_li7)[0]; if (_lo9){_lC(_lE(_lo9),"click",_lO9, false); }var _ll9=_lR("span","kcdFastPrev",_li7)[0]; if (_ll9){_lC(_lE(_ll9),"click",_li9, false); }var _lI9=_lR("span","kcdQMSNav",_li7)[0]; if (_lI9){_lC(_lI9,"click",_loa, false); }var _lOa=_lY(this._ly+"_qms"); if (_lO(_lOa)){var _lla=_lR("td","kcdMonth",_lOa); for (var i=0; i<_lla.length; i++){_lC(_lE(_lla[i]),"click",_lia, false); }var _lIa=_lR("td","kcdYear",_lOa); for (var i=0; i<_lIa.length; i++){_lC(_lE(_lIa[i]),"click",_lob, false); }_lC(_lE(_lY(this._ly+"_qms_Next")),"click",_lOb, false); _lC(_lE(_lY(this._ly+"_qms_Prev")),"click",_lOb, false); _lC(_lY(this._ly+"_qms_Today"),"click",_llb, false); _lC(_lY(this._ly+"_qms_OK"),"click",_llb, false); _lC(_lY(this._ly+"_qms_Cancel"),"click",_llb, false); _lC(_lOa,"mouseup",_lib, false); _lIb.push(this._ly); }var _loc=_lI7["ClientEvents"]; for (var _lo2 in _loc){if (typeof _loc[_lo2]!="function"){if (eval("typeof "+_loc[_lo2]+" =='function'")){ this._lO7[_lo2]=eval(_loc[_lo2]); }}}if (!_lO(_lOc[this._ly])){try { this._llc("OnInit", {} ); }catch (_lic){}}try { this._llc("OnLoad", {} ); }catch (_lic){}if (_lO(_lOc[this._ly])){_lIc=_lOc[this._ly]["PostLoadEvent"]; for (_lo2 in _lIc){if (typeof _lIc[_lo2]!="function"){try { this._llc(_lo2,_lIc[_lo2]); }catch (_lic){}}}}_lOc[this._ly]= { "PostLoadEvent":{}} ; this._lod(); } ,_lod:function (){var _li7=_lY(this._ly); var _lI7=this._lo8(); if (_lI7["EnableSelect"]){var _lOd=_lR("td","kcdDay",_li7); for (var i=0; i<_lOd.length; i++){_lC(_lOd[i],"mouseover",_lld, false); _lC(_lOd[i],"mouseout",_lid, false); _lC(_lOd[i],"click",_lId, false); }if (_lI7["EnableMultiSelect"]){var _loe=_lR("th","kcdColHeader",_li7); for (var i=0; i<_loe.length; i++){if (_lO2("ViewSelector",_lM(_loe[i]))>0){_lC(_loe[i],"mouseover",_lOe, false); _lC(_loe[i],"mouseout",_lle, false); _lC(_loe[i],"click",_lie, false); }else {if (_lI7["UseColumnHeadersAsSelectors"]){_lC(_loe[i],"mouseover",_lIe, false); _lC(_loe[i],"mouseout",_lof, false); _lC(_loe[i],"click",_lOf, false); }}}if (_lI7["UseRowHeadersAsSelectors"]){var _lIf=_lR("th","kcdRowHeader",_li7); for (var i=0; i<_lIf.length; i++){_lC(_lIf[i],"mouseover",_log, false); _lC(_lIf[i],"mouseout",_lOg, false); _lC(_lIf[i],"click",_llg, false); }}}}} ,get_selected_dates:function (){var _lig=this._lIg(); var _loh=_lig["SelectedDates"]; if (!_lO(_loh)){_loh=new Array(); }var _lI1=new Array(); for (var _lOh in _loh){if (typeof _loh[_lOh]!="function"){_lI1.push(new Date(_lOh+" UTC")); }}return _lI1; } ,commit:function (){if (!this._llc("OnBeforeCommit", {} )){return; } ; var _lI7=this._lo8(); if (_lI7["AjaxEnabled"]){var _llh=eval(this._ly+"_updatepanel"); _llh.update((_lI7["AjaxHandlePage"]!="")?_lI7["AjaxHandlePage"]:null); this._lih("OnCommit", {} ); }else {var _lIh=_lY(this._ly); while (_lIh.nodeName!="FORM"){if (_lIh.nodeName=="BODY")return; _lIh=_lu(_lIh); }_lIh.submit(); }} ,select:function (_lO4){var _li7=_lY(this._ly); var _lig=this._lIg(); var _lI7=this._lo8(); var _loh=_lig["SelectedDates"]; var _loi=_lO4._ll5("n/j/Y"); var _lOi=new Date(_loi+" UTC"); if (!this._llc("OnBeforeSelect", { "Date":_lOi } )){return; } ; if (!_lO(_loh)){_loh=new Array(); }_loh[_loi]=1; _lig["SelectedDates"]=_loh; this._lli(_lig); var _lOd=_lR("td","kcdDay",_li7); for (var i=0; i<_lOd.length; i++){if (_lOd[i].abbr==_loi){_lJ(_lOd[i],"kcdSelected"); }}if (_lI7["ClientMode"]){ this._llc("OnSelect", { "Date":_lOi } ); }else { this._lih("OnSelect", { "Date":_lOi } ); }} ,deselect:function (_lO4){var _li7=_lY(this._ly); var _lig=this._lIg(); var _lI7=this._lo8(); var _loh=_lig["SelectedDates"]; var _loi=_lO4._ll5("n/j/Y"); if (!this._llc("OnBeforeDeselect", { "Date":_lO4 } )){return; } ; if (!_lO(_loh)){_loh=new Array(); }if (_loh[_loi]){ delete _loh[_loi]; }_lig["SelectedDates"]=_loh; this._lli(_lig); var _lOd=_lR("td","kcdDay",_li7); for (var i=0; i<_lOd.length; i++){if (_lOd[i].abbr==_loi){_lD(_lOd[i],"kcdSelected"); }}if (_lI7["ClientMode"]){ this._llc("OnDeselect", { "Date":_lO4 } ); }else { this._lih("OnDeselect", { "Date":_lO4 } ); }} ,deselect_all:function (){var _li7=_lY(this._ly); var _lig=this._lIg(); var _loh=_lig["SelectedDates"]; if (_lO(_loh)){for (var _lOh in _loh){if (typeof _loh[_lOh]!="function"){ this.deselect(new Date(_lOh+" UTC")); }}}} ,navigate:function (_lii,_lIi){if (!this._llc("OnBeforeNavigate", { "Date":_lii } )){return; } ; var _li7=_lY(this._ly); if (_lO2("Navigating",_lM(_lE(_li7)))>0){ this._loj(); }var _lI7=this._lo8(); var _lig=this._lIg(); var _lOj=new Date(_lig["FocusedDate"]+" UTC"); if (_lI7["ClientMode"]){var _llj=_lI7["MultiViewRows"]*_lI7["MultiViewColumns"]; var _lij=""; if (_llj>1){_lij=this._lIj(_lii); }else {_lij=this._lok(_lii); }var _lOk="left"; if (_lii<_lOj){_lOk="right"; }var _llk=_lI7["NavigateAnimation"]["Type"].toLowerCase(); var _lik=_lI7["NavigateAnimation"]["Duration"]; var _lIk=_lik/20; var _lol=_lR("table","kcdTableSlide",_li7)[0]; if (_lol){var _lll=_lu(_lol); _lv(_lll,_lll.offsetWidth); _lll.style.overflow="hidden"; var _lil=_lE(_lol,2); var _lIl=_lE(_lil,2); var _lom=_lIl.offsetWidth; var _lOm=null; if (_lOk=="left"){_lOm=_lI("td",_lil); }else {_lOm=document.createElement("td"); _lil.insertBefore(_lOm,_lu(_lIl)); }_lOm.innerHTML=_lij; var _lIm=_lE(_lOm); _lv(_lIl,_lom); _lv(_lIm,_lom); var _lon=_lu(_lIl); _lon.id=this._ly+"_oldtd"; if (_lOk=="right"){_lll.scrollLeft=_lon.offsetWidth; }_lJ(_lE(_li7),"kcdNavigating"); if (_lO(_lIi)){ this._loj(); }else { this._lOn( { "direction":_lOk,"type":_llk,"duration":_lik,"steps":_lIk,"current_step": 0 } ); }}var _lIn=_lR("span","kcdNavText",_li7)[0]; if (_llj>1){var _loo=_lii; var _lOo=_lo4(_loo); _lOo.setUTCMonth(_lOo.getUTCMonth()+_llj-1); _lIn.innerHTML=_lI7["MonthsFull"][_loo._ll5("F")]+" "+_loo._ll5("Y")+_lI7["DateRangeSeparator"]+_lI7["MonthsFull"][_lOo._ll5("F")]+" "+_lOo._ll5("Y"); }else {_lIn.innerHTML=_lI7["MonthsFull"][_lii._ll5("F")]+" "+_lii._ll5("Y"); }}_lig["FocusedDate"]=_lii._ll5("n/j/Y"); this._lli(_lig); if (!_lI7["ClientMode"]){ this._lih("OnNavigate", { "Date":_lii } ); }} ,_loj:function (){var _li7=_lY(this._ly); var _lig=this._lIg(); var _lIo=new Date(_lig["FocusedDate"]+" UTC"); var _lop=_lY(this._ly+"_oldtd"); var _lol=_lu(_lop,3); var _lll=_lu(_lol); _ll1(_lop); _lu(_lop).removeChild(_lop); _lll.scrollLeft=0; _lll.style.overflow=""; _lll.style.width=""; this._lod(); _ll1(_lll); _lD(_lE(_li7),"kcdNavigating"); this._llc("OnNavigate", { "Date":_lIo } ); } ,next:function (){var _lI7=this._lo8(); var _lig=this._lIg(); var _lIo=new Date(_lig["FocusedDate"]+" UTC"); var _lOp=_lI7["MultiViewRows"]*_lI7["MultiViewColumns"]; _lIo.setUTCMonth(_lIo.getUTCMonth()+_lOp); this.navigate(_lIo); } ,prev:function (){var _lI7=this._lo8(); var _lig=this._lIg(); var _lIo=new Date(_lig["FocusedDate"]+" UTC"); var _lOp=_lI7["MultiViewRows"]*_lI7["MultiViewColumns"]; _lIo.setUTCMonth(_lIo.getUTCMonth()-_lOp); this.navigate(_lIo); } ,fast_next:function (){var _lI7=this._lo8(); var _lig=this._lIg(); var _lIo=new Date(_lig["FocusedDate"]+" UTC"); var _lOp=_lI7["FastNavigationStep"]; _lIo.setUTCMonth(_lIo.getUTCMonth()+_lOp); this.navigate(_lIo); } ,fast_prev:function (){var _lI7=this._lo8(); var _lig=this._lIg(); var _lIo=new Date(_lig["FocusedDate"]+" UTC"); var _lOp=_lI7["FastNavigationStep"]; _lIo.setUTCMonth(_lIo.getUTCMonth()-_lOp); this.navigate(_lIo); } ,_lIj:function (_lO4){var _lI7=this._lo8(); var _llp=_lI7["MultiViewRows"]; var _lip=_lI7["MultiViewColumns"]; var _lIp=_llp*_lip; var _loo=new Date(_lO4._ll5("n/1/Y")+" UTC"); var _lOo=_lo4(_loo); _lOo.setUTCMonth(_lOo.getUTCMonth()+_lIp-1); var _loq="<table cellspacing='0' border='0' style='width:100%;'>{body}</table>"; var _lOq="<tbody>{trs}</tbody>"; var _llq="<tr>{tds}</tr>"; var _liq="<td class='kcdMonthContainer {rowpos} {colpos}'>{monthview}</td>"; var _lIq=""; for (var r=0; r<_llp; r++){var _lor=""; for (var c=0; c<_lip; c++){var _lOr=_lo4(_loo); _lOr.setUTCMonth(_lOr.getUTCMonth()+r*_lip+c); var _llr=_lH("{monthview}",this._lir(_lOr),_liq); _llr=_lH("{rowpos}",(r==0)?"kcdFirstRow {rowpos}": "{rowpos}",_llr); _llr=_lH("{rowpos}",(r==_llp-1)?"kcdLastRow {rowpos}": "{rowpos}",_llr); _llr=_lH("{rowpos}","",_llr); _llr=_lH("{colpos}",(c==0)?"kcdFirstCol {colpos}": "{colpos}",_llr); _llr=_lH("{colpos}",(c==_lip-1)?"kcdLastCol {colpos}": "{colpos}",_llr); _llr=_lH("{colpos}","",_llr); _lor+=_llr; }var _lIr=_lH("{tds}",_lor,_llq); _lIq+=_lIr; }_los=_lH("{trs}",_lIq,_lOq); _lOs=_lH("{body}",_los,_loq); return _lOs; } ,_lir:function (_lO4){var _lI7=this._lo8(); var _loq="<table cellspacing='0' cellpadding='0' border='0' class='kcdMonthView' style='{width}{height}'>{head}{body}{foot}</table>"; var _lls="<thead>{trs}</thead>"; var _lis="<tr><th class='kcdTopHeader'>{text}</th></tr>"; var _lOq="<tbody><tr><td class='kcdMain' style='overflow:hidden'>{detail}</td></tr></tbody>"; var _lIs="<tfoot>{trs}</tfoot>"; var _lot="<tr>{tds}</tr>"; var _lOt="<td>{ct}</td>"; var _llt=_lH("{text}",_lI7["MonthsFull"][_lO4._ll5("F")],_lis); var _lit=""; _lit+=_llt; _lIt=_lH("{trs}",_lit,_lls); var _los=_lH("{detail}",this._lok(_lO4),_lOq); _lou=""; _lOs=_loq; _lOs=_lH("{width}",(_lI7["Width"])?"width:"+_lI7["Width"]+";": "",_lOs); _lOs=_lH("{height}",(_lI7["Height"])?"height:"+_lI7["Height"]+";": "",_lOs); _lOs=_lH("{head}",_lIt,_lOs); _lOs=_lH("{body}",_los,_lOs); _lOs=_lH("{foot}",_lou,_lOs); return _lOs; } ,_lok:function (_lO4){var _lI7=this._lo8(); var _lig=this._lIg(); var _loh=_lig["SelectedDates"]; if (!_loh){_loh=new Array(); }var _lOu=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"); var _llu=(_lI7["Orientation"].toLowerCase()=="vertical"); var _liu=7; var _lIu=6; switch (_lI7["MonthLayout"]){case "21x2":_liu=21; _lIu=2; break; case "14x3":_liu=14; _lIu=3; break; case "7x6":_liu=7; _lIu=6; default:break; }var _lov=_lI7["DayName"]; if (_llu){var _lOv=_liu; _liu=_lIu; _lIu=_lOv; }var _llv=new Date(_lO4._ll5("n/1/Y")+" UTC"); _llv.setTime(_llv.getTime()+12*60*60*1000); var _liv=_llv.getUTCDay()-_lI7["FirstDayOfWeek"]; if (_liv<0)_liv+=7; var _lIv=_ll4(_llv,-_liv); var _loq="<table cellspacing='0' border='0' class='kcdMainTable'>{head}{body}</table>"; var _lls="<thead><tr>{th_selector}{ths}</tr></thead>"; var _low="<th class='kcdColHeader' title='{title}'>{text}</th>"; var _lOw="<th class='kcdColHeader kcdViewSelector'>{text}</th>"; var _lOq="<tbody>{trs}</tbody>"; var _llq="<tr>{th}{tds}</tr>"; var _llw="<th class='kcdRowHeader' title='{title}'>{text}</th>"; var _liq="<td abbr='{abbr}' class='{class}' {title}><a>{text}</a></td>"; var _liw=""; for (var c=0; c<_liu; c++){var _lIw=""; if (_llu){var _lox=_ll4(_lIv,c*_lIu); var _lOx=_lox._lo5(); if (_lOx>52){_lOx=1; }_lIw=_lH("{text}",_lOx,_low); _lIw=_lH("{title}",_lOx,_lIw); }else {var _llx=(_lI7["FirstDayOfWeek"]+c)%7; _lIw=_lH("{title}",_lI7["DayNameFull"][_lOu[_llx]],_low); _lIw=_lH("{text}",_lI7["DayName"][_lOu[_llx]],_lIw); }_liw+=_lIw; }var _lix=""; if (_lI7["ShowRowHeader"]){if (_lI7["ShowViewSelector"]){_lix=_lH("{text}",_lI7["ViewSelectorText"],_lOw); }else {_lix=_lH("{text}","",_low); _lix=_lH("{title}","",_lix); }}var _lIt=_lH("{ths}",_liw,_lls); _lIt=_lH("{th_selector}",_lix,_lIt); var _lIq=""; for (var r=0; r<_lIu; r++){var _lor=""; for (var c=0; c<_liu; c++){var _lox=_ll4(_lIv,r*_liu+c); if (_llu){_lox=_ll4(_lIv,c*_lIu+r); }var _lIx=(_lox.getUTCMonth()!=_lO4.getUTCMonth())?(_lI7["ShowOtherMonthsDays"]? true : false): true; var _llr=_lH("{abbr}",_lIx?_lox._ll5("n/j/Y"): "",_liq); _llr=_lH("{text}",_lIx?_lox.getUTCDate(): "",_llr); _llr=_lH("{class}",_lIx?"kcdDay {class}": "",_llr); _llr=_lH("{class}",(_lox.getUTCMonth()!=_lO4.getUTCMonth())?"kcdOtherMonth {class}": "{class}",_llr); _llr=_lH("{class}",(_lox.getUTCDay()==0 || _lox.getUTCDay()==6)?"kcdWeekend {class}": "{class}",_llr); _llr=_lH("{class}",(_lI7["ShowToday"] && _lox._ll5("n/j/Y")==_lI7["Today"])?"kcdToday {class}": "{class}",_llr); if (_lO(_lI7["RangeMinDate"])){var _loy=new Date(_lI7["RangeMinDate"]+" UTC"); if (_lox<_loy){_llr=_lH("{class}","kcdDisabled {class}",_llr); }}if (_lO(_lI7["RangeMaxDate"])){var _lOy=new Date(_lI7["RangeMaxDate"]+" UTC"); if (_lox>_lOy){_llr=_lH("{class}","kcdDisabled {class}",_llr); }}_llr=_lH("{class}",(_loh[_lox._ll5("n/j/Y")])?"kcdSelected {class}": "{class}",_llr); _llr=_lH("{class}","",_llr); _llr=_lH("{title}",_lI7["ShowDayCellToolTips"]?"title='"+_lI7["DayNameFull"][_lox._ll5("l")]+", "+_lI7["MonthsFull"][_lox._ll5("F")]+_lox._ll5(" d, Y")+"'": "",_llr); _lor+=_llr; }var _lly=""; if (_lI7["ShowRowHeader"]){if (_llu){var _llx=(_lI7["FirstDayOfWeek"]+r)%7; _lly=_lH("{title}",_lI7["DayNameFull"][_lOu[_llx]],_llw); _lly=_lH("{text}",_lI7["DayName"][_lOu[_llx]],_lly); }else {var _lox=_ll4(_lIv,r*_liu); var _lOx=_lox._lo5(); if (_lOx>52){_lOx=1; }_lly=_lH("{text}",_lOx,_llw); _lly=_lH("{title}",_lOx,_lly); }}var _lIr=_lH("{tds}",_lor,_llq); _lIr=_lH("{th}",_lly,_lIr); _lIq+=_lIr; }var _los=_lH("{trs}",_lIq,_lOq); var _lOs=_lH("{head}",_lI7["ShowColumnHeader"]?_lIt: "",_loq); _lOs=_lH("{body}",_los,_lOs); return _lOs; } ,_liy:function (_lIy){var _li7=_lY(this._ly); var _loz=_lR("span","kcdQMSNav",_li7)[0]; if (_loz){var _lOa=_lY(this._ly+"_qms"); var _lig=this._lIg(); if (!_lIy){_lN(_lOa,_lIy); if (_lO(_lig["QMSDate"])){ delete _lig["QMSDate"]; } this._lli(_lig); return; }var _lOz=_loz; var _top=0; var _llz=0; while (_lOz.nodeName!="DIV" || _lO2("KCD",_lM(_lOz))<0){_top+=isNaN(_lOz.offsetTop)?0:_lOz.offsetTop; _llz+=isNaN(_lOz.offsetLeft)?0:_lOz.offsetLeft; _lOz=_lu(_lOz); if (_lOz.nodeName=="BODY"){_top=0; _llz=0; }}_lz(_lOa,_top+_loz.offsetHeight); _lW(_lOa,_llz); _lig=this._lIg(); _lIo=new Date(_lig["FocusedDate"]+" UTC"); var _lla=_lR("td","kcdMonth",_lOa); for (var i=0; i<_lla.length; i++){_lD(_lla[i],"kcdSelected"); }_lJ(_lY(this._ly+"_qms_"+_lIo._ll5("F")),"kcdSelected"); var _lIa=_lR("td","kcdYear",_lOa); for (var i=0; i<_lIa.length; i++){_lD(_lIa[i],"kcdSelected"); }var _liz=_lY(this._ly+"_qms_"+_lIo.getUTCFullYear()); if (_lO(_liz)){_lJ(_liz,"kcdSelected"); }else {var _lIz=parseInt(_lH(this._ly+"_qms_","",_lIa[0].id)); var _lo10=(_lIo.getUTCFullYear()-4)-_lIz; for (var i=0; i<_lIa.length; i++){var _lO10=_lH(this._ly+"_qms_","",_lIa[i].id); _lIa[i].id=_lH(_lO10,parseInt(_lO10)+_lo10,_lIa[i].id); _lE(_lIa[i]).innerHTML=parseInt(_lO10)+_lo10; }_liz=_lY(this._ly+"_qms_"+_lIo.getUTCFullYear()); _lJ(_liz,"kcdSelected"); }_lig["QMSDate"]=_lig["FocusedDate"]; this._lli(_lig); _lN(_lOa,_lIy); }} ,_ll10:function (_li10,_lo1){var _lOm=_lu(_li10); var _lOa=_lY(this._ly+"_qms"); var _lIa=_lR("td","kcdYear",_lOa); for (var i=0; i<_lIa.length; i++){_lD(_lIa[i],"kcdSelected"); }_lJ(_lOm,"kcdSelected"); var _lO10=parseInt(_lH(this._ly+"_qms_","",_lOm.id)); var _lig=this._lIg(); var _lI10=new Date(_lig["QMSDate"]+" UTC"); _lI10.setUTCFullYear(_lO10); _lig["QMSDate"]=_lI10._ll5("n/j/Y"); this._lli(_lig); } ,_lo11:function (_li10,_lo1){var _lOm=_lu(_li10); var _lOa=_lY(this._ly+"_qms"); var _lla=_lR("td","kcdMonth",_lOa); var _lO11=0; for (var i=0; i<_lla.length; i++){_lD(_lla[i],"kcdSelected"); if (_lOm.id==_lla[i].id){_lO11=i; }}_lJ(_lOm,"kcdSelected"); var _lig=this._lIg(); var _lI10=new Date(_lig["QMSDate"]+" UTC"); _lI10.setUTCMonth(_lO11); _lig["QMSDate"]=_lI10._ll5("n/j/Y"); this._lli(_lig); } ,_ll11:function (_li11,_lo1){var _lI11=_lH(this._ly+"_qms_","",_li11.id); var _lI7=this._lo8(); var _lig=this._lIg(); switch (_lI11){case "Today":var _lo12=new Date(_lI7["Today"]+" UTC"); var _lIo=new Date(_lig["FocusedDate"]+" UTC"); if (!_lI7["ClientMode"]){ this.navigate(new Date(_lo12._ll5("n/1/Y")+" UTC")); this.commit(); }else if (_lo12._ll5("Y_n")!=_lIo._ll5("Y_n")){ this.navigate(new Date(_lo12._ll5("n/1/Y")+" UTC")); }break; case "OK":var _lI10=new Date(_lig["QMSDate"]+" UTC"); var _lIo=new Date(_lig["FocusedDate"]+" UTC"); if (!_lI7["ClientMode"]){ this.navigate(_lI10); this.commit(); }else if (_lI10._ll5("Y_n")!=_lIo._ll5("Y_n")){ this.navigate(_lI10); }break; case "Cancel":break; } this._liy(0); } ,_lO12:function (_li10,_lo1){var _lOa=_lY(this._ly+"_qms"); var _lIa=_lR("td","kcdYear",_lOa); var _lOm=_lu(_li10); var _ll12=_lH(this._ly+"_qms_","",_lOm.id); var _lo10=10; if (_ll12=="Prev"){_lo10=-10; }for (var i=0; i<_lIa.length; i++){var _lO10=_lH(this._ly+"_qms_","",_lIa[i].id); _lIa[i].id=_lH(_lO10,parseInt(_lO10)+_lo10,_lIa[i].id); _lE(_lIa[i]).innerHTML=parseInt(_lO10)+_lo10; _lD(_lIa[i],"kcdSelected"); }var _lig=this._lIg(); var _lI10=new Date(_lig["QMSDate"]+" UTC"); var _liz=_lY(this._ly+"_qms_"+_lI10.getUTCFullYear()); if (_lO(_liz)){_lJ(_liz,"kcdSelected"); }} ,_lOn:function (_li12){var _lOk=_li12["direction"]; var _llk=_li12["type"]; var _lIk=_li12["steps"]; var _lI12=_li12["current_step"]; var _lop=_lY(this._ly+"_oldtd"); var _lll=_lu(_lop,4); var _lo13=_lop.offsetWidth; if (_lI12>_lIk || _llk=="none"){ this._loj(); }else {if (typeof _lO13!="undefined"){clearTimeout(_lO13); }var _ll13=_lI3(_llk); if (_lOk=="left"){_lll.scrollLeft=_ll13(_lI12,0,_lo13,_lIk); }else {_lll.scrollLeft=_ll13(_lI12,_lo13,-_lo13,_lIk); }_li12["current_step"]=_lI12+1; _lO13=setTimeout("kcd_animate('"+this._ly+"',"+_li1(_li12)+")",20); }} ,_li13:function (_lo1){var _lI7=this._lo8(); if (_lZ())return; this.next(); if (!_lI7["ClientMode"]){ this.commit(); }} ,_lI13:function (_lo1){var _lI7=this._lo8(); if (_lZ())return; this.prev(); if (!_lI7["ClientMode"]){ this.commit(); }} ,_lo14:function (_lo1){var _lI7=this._lo8(); if (_lZ())return; this.fast_next(); if (!_lI7["ClientMode"]){ this.commit(); }} ,_lO14:function (_lo1){var _lI7=this._lo8(); if (_lZ())return; this.fast_prev(); if (!_lI7["ClientMode"]){ this.commit(); }} ,_ll14:function (_li14,_lo1){if (_lZ())return; if (_lO2("kcdDisabled",_lM(_li14))<0){var _lI7=this._lo8(); var _lOh=_li14.abbr; if (_lO2("kcdSelected",_lM(_li14))<0){if (!_lI7["EnableMultiSelect"]){ this.deselect_all(); } this.select(new Date(_lOh+" UTC")); }else { this.deselect(new Date(_lOh+" UTC")); }if (!_lI7["ClientMode"]){ this.commit(); }}} ,_lI14:function (_li14,_lo1){if (_lO2("kcdDisabled",_lM(_li14))<0){_lJ(_li14,"kcdOver"); this._llc("OnDayMouseOver", {} ); }} ,_lo15:function (_li14,_lo1){if (_lZ())return; if (_lO2("kcdDisabled",_lM(_li14))<0){_lD(_li14,"kcdOver"); this._llc("OnDayMouseOut", {} ); }} ,_lO15:function (_ll15,_lo1){var _lI7=this._lo8(); var _lOs=_lu(_ll15,3); var _lOd=_lR("td","kcdDay",_lOs); for (var i=0; i<_lOd.length; i++){if (_lO2("kcdDisabled",_lM(_lOd[i]))<0){var _lOh=_lOd[i].abbr; this.select(new Date(_lOh+" UTC")); }}if (!_lI7["ClientMode"]){ this.commit(); }} ,_li15:function (_ll15,_lo1){var _lOs=_lu(_ll15,3); var _lOd=_lR("td","kcdDay",_lOs); for (var i=0; i<_lOd.length; i++){ this._lI14(_lOd[i],_lo1); }} ,_lI15:function (_ll15,_lo1){var _lOs=_lu(_ll15,3); var _lOd=_lR("td","kcdDay",_lOs); for (var i=0; i<_lOd.length; i++){ this._lo15(_lOd[i],_lo1); }} ,_lo16:function (_ll15,_lo1){if (_lZ())return; var _lI7=this._lo8(); var _lil=_lu(_ll15); var _lO16=null; for (var i=0; i<_lil.childNodes.length; i++){if (_ll15==_lil.childNodes[i]){_lO16=i; break; }}if (_lO16){var _lOs=_lu(_ll15,3); var _ll16=_lOs.lastChild; for (var i=0; i<_ll16.childNodes.length; i++){_lil=_ll16.childNodes[i]; var _lOm=_lil.childNodes[_lO16]; if (_lO2("kcdDay",_lM(_lOm))>-1 && _lO2("kcdDisabled",_lM(_lOm))<0){var _lOh=_lOm.abbr; this.select(new Date(_lOh+" UTC")); }}}if (!_lI7["ClientMode"]){ this.commit(); }} ,_li16:function (_ll15,_lo1){var _lil=_lu(_ll15); var _lO16=null; for (var i=0; i<_lil.childNodes.length; i++){if (_ll15==_lil.childNodes[i]){_lO16=i; break; }}if (_lO16){var _lOs=_lu(_ll15,3); var _ll16=_lOs.lastChild; for (var i=0; i<_ll16.childNodes.length; i++){_lil=_ll16.childNodes[i]; var _lOm=_lil.childNodes[_lO16]; if (_lO2("kcdDay",_lM(_lOm))>-1){ this._lI14(_lOm,_lo1); }}}} ,_lI16:function (_ll15,_lo1){var _lil=_lu(_ll15); var _lO16=null; for (var i=0; i<_lil.childNodes.length; i++){if (_ll15==_lil.childNodes[i]){_lO16=i; break; }}if (_lO16){var _lOs=_lu(_ll15,3); var _ll16=_lOs.lastChild; for (var i=0; i<_ll16.childNodes.length; i++){_lil=_ll16.childNodes[i]; var _lOm=_lil.childNodes[_lO16]; if (_lO2("kcdDay",_lM(_lOm))>-1){ this._lo15(_lOm,_lo1); }}}} ,_lo17:function (_ll15,_lo1){if (_lZ())return; var _lI7=this._lo8(); var _lil=_lu(_ll15); var _lOd=_lR("td","kcdDay",_lil); for (var i=0; i<_lOd.length; i++){if (_lO2("kcdDay",_lM(_lOd[i]))>-1 && _lO2("kcdDisabled",_lM(_lOd[i]))<0){var _lOh=_lOd[i].abbr; this.select(new Date(_lOh+" UTC")); }}if (!_lI7["ClientMode"]){ this.commit(); }} ,_lO17:function (_ll15,_lo1){var _lil=_lu(_ll15); var _lOd=_lR("td","kcdDay",_lil); for (var i=0; i<_lOd.length; i++){if (_lO2("kcdDay",_lM(_lOd[i]))>-1){ this._lI14(_lOd[i],_lo1); }}} ,_ll17:function (_ll15,_lo1){var _lil=_lu(_ll15); var _lOd=_lR("td","kcdDay",_lil); for (var i=0; i<_lOd.length; i++){if (_lO2("kcdDay",_lM(_lOd[i]))>-1){ this._lo15(_lOd[i],_lo1); }}} ,_li17:function (_lo1){ this._liy(1); } ,_lI17:function (_lo1){if (_lY(this._ly)==null)return; this._liy(0); } ,_lIg:function (){var _lo18=_lY(this._ly+"_viewstate"); return eval("__="+_lo18.value); } ,_lli:function (_lig){var _lo18=_lY(this._ly+"_viewstate"); _lo18.value=_li1(_lig); } ,_lo8:function (){var _lo18=_lY(this._ly+"_settings"); return eval("__="+_lo18.value); } ,registerEvent:function (_lo2,_lO18){ this._lO7[_lo2]=_lO18; } ,_llc:function (_lo2,_ll18){return (_lO(this._lO7[_lo2]))?this._lO7[_lo2](this,_ll18): true; } ,_lih:function (_lo2,_ll18){_lOc[this._ly]["PostLoadEvent"][_lo2]=_ll18; }};var _lOc=new Array(); function KoolTimeView(_ly){ this._ly=_ly; this._lO7=new Array(); this._ll7(); }KoolTimeView.prototype= {_ll7:function (){var _li7=_lY(this._ly); var _lI7=this._lo8(); var _li18=_lR("td","ktmTime",_li7); for (var i=0; i<_li18.length; i++){_lC(_li18[i],"mouseover",_lI18, false); _lC(_li18[i],"mouseout",_lo19, false); _lC(_li18[i],"click",_lO19, false); }var _loc=_lI7["ClientEvents"]; for (var _lo2 in _loc){if (typeof _loc[_lo2]!="function"){if (eval("typeof "+_loc[_lo2]+" =='function'")){ this._lO7[_lo2]=eval(_loc[_lo2]); }}}} ,_lo8:function (){var _lo18=_lY(this._ly+"_settings"); return eval("__="+_lo18.value); } ,_ll19:function (_lOm,_lo1){_lJ(_lOm,"ktmOver"); var _li19=new Date("1/1/1970 "+_lOm.abbr+" UTC"); this._llc("OnMouseOver", { "Time":_li19 } ); } ,_lI19:function (_lOm,_lo1){_lD(_lOm,"ktmOver"); var _li19=new Date("1/1/1970 "+_lOm.abbr+" UTC"); this._llc("OnMouseOut", { "Time":_li19 } ); } ,_lo1a:function (_lOm,_lo1){var _li19=new Date("1/1/1970 "+_lOm.abbr+" UTC"); if (!this._llc("OnBeforeSelect", { "Time":_li19 } ))return; this._llc("OnSelect", { "Time":_li19 } ); } ,registerEvent:function (_lo2,_lO18){ this._lO7[_lo2]=_lO18; } ,_llc:function (_lo2,_ll18){return (_lO(this._lO7[_lo2]))?this._lO7[_lo2](this,_ll18): true; }};function KoolDateTimePicker(_ly,_lO1a,_ll1a){ this._ly=_ly; this._lO7=new Array(); this._lO1a=_lO1a; this._ll1a=_ll1a; this._lOi=new Date((new Date())._ll5("n/j/Y")+" UTC"); this._li1a=new Date("1/1/1970 00:00:00 UTC"); this._lI1a= false; this._ll7(); }KoolDateTimePicker.prototype= {_ll7:function (){var _lI7=this._lo8(); if (this._lO1a){var _lo1b=_lY(this._ly+"_dateopener"); _lC(_lo1b,"click",_lO1b, false); }if (this._ll1a){var _ll1b=_lY(this._ly+"_timeopener"); _lC(_ll1b,"click",_li1b, false); }_lC(_lY(this._ly+"_bound"),"mouseup",_lib, false); _lIb.push(this._ly); var _loc=_lI7["ClientEvents"]; for (var _lo2 in _loc){if (typeof _loc[_lo2]!="function"){if (eval("typeof "+_loc[_lo2]+" =='function'")){ this._lO7[_lo2]=eval(_loc[_lo2]); }}}if (this._lO1a){var _lI1b=eval(this._ly+"_calendar"); _lI1b.registerEvent("OnSelect",_lo1c); }if (this._ll1a){var _lO1c=eval(this._ly+"_timeview"); _lO1c.registerEvent("OnSelect",_ll1c); }if (_ll3()=="ie6"){var _li1c=document.createElement("div"); _li1c.innerHTML="\x3ciframe src=\"javascript:\'\';\" tabindex=\'-1\' style=\'position:absolute;display:none;border:0px;z-index:500;filter:progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)\'>Your browser does not support inline iframe.\x3c/frame>"; var _lI1c=_lE(_li1c); var _lo1d=_lY(this._ly+"_bound");var _lO1d=_lU(_lE(_lo1d)); _lo1d.insertBefore(_lI1c,_lO1d); }} ,_ll1d:function (){var _li1d=_lY(this._ly+"_datepicker"); if (_lO(_li1d)){return _ln(_li1d); }return false; } ,_lI1d:function (){var _lo1e=_lY(this._ly+"_timepicker"); if (_lO(_lo1e)){return _ln(_lo1e); }return false; } ,get_value:function (){return (_lY(this._ly)).value; } ,_lO1e:function (_ll1e){_ll1e=_lG(_ll1e," "); if (_ll1e=="")return "Invalid Date"; _ll1e+=" "; var _lI7=this._lo8(); var _li1e=""; if (this._lO1a && this._ll1a){_li1e=_lI7["DateFormat"]+" "+_lI7["TimeFormat"]; }else if (this._lO1a){_li1e=_lI7["DateFormat"]; }else if (this._ll1a){_li1e=_lI7["TimeFormat"]; }_li1e=_lG(_li1e," ")+" "; var _lI1e=new Array("d","D","j","l","N","S","w","z","W","F","m","M","n","t","L","o","Y","y","a","A","B","g","G","h","H","i","s","u","e","I","O","P","T","Z","c","r","U"); var _lo1f=""; for (var i=0; i<_lI1e.length; i++){_lo1f+="["+_lI1e[i]+"]"; }var _lO1f=new Array(); for (var i=0; i<_li1e.length; i++){if (_lO2("["+_li1e.charAt(i)+"]",_lo1f)<0){_lO1f.push(_li1e.charAt(i)); }}var _ll1f=_li1e; var _li1f=_ll1e; var _liz=0; var _lOr=0; var _lO4=0; var _lI1f=0; var _lo1g=0; var _lO1g=0; var _ll1g=null; var _lla=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]; var _li1g=new Array(); for (var i=0; i<_lla.length; i++){_li1g[_lla[i]]=i+1; }var _lla=["January","February","March","April","May","June","July","August","September","October","November","December"]; var _lI1g=new Array(); for (var i=0; i<_lla.length; i++){_lI1g[_lla[i]]=i+1; }for (var i=0; i<_lO1f.length; i++){var _lo1h=_lO2(_lO1f[i],_ll1f); var _lO1h=_lO2(_lO1f[i],_li1f); var _ll1h=_ll1f.substring(0,_lo1h); var _li1h=(_lO1h<0)?_li1f.substring(0):_li1f.substring(0,_lO1h); switch (_ll1h){case "d":_lO4=_ld(_li1h); break; case "j":case "jS":_lO4=parseInt(_li1h); break; case "m":_lOr=_ld(_li1h); break; case "n":_lOr=parseInt(_li1h); break; case "F":_lOr=_lI1g[_li1h]; break; case "M":_lOr=_li1g[_li1h]; break; case "o":case "Y":_liz=parseInt(_li1h); break; case "y":_liz=_ld(_li1h); break; case "a":case "A":_ll1g=_li1h.toLowerCase(); break; case "g":case "G":_lI1f=parseInt(_li1h); break; case "h":case "H":_lI1f=_ld(_li1h); break; case "i":_lo1g=_ld(_li1h); break; case "s":_lO1g=_ld(_li1h); break; }if (_lO1h<_li1f.length-1){_ll1f=_ll1f.substring(_lo1h+1); _li1f=_li1f.substring(_lO1h+1); }else {break; }}if (_ll1g==null)_ll1g="am"; if (_lI1f==12 && _ll1g=="am"){_lI1f=0; }else if (0<_lI1f && _lI1f<12 && _ll1g=="pm"){_lI1f+=12; }return (new Date(_lOr+"/"+_lO4+"/"+_liz+" "+_lI1f+":"+_lo1g+":"+_lO1g+" UTC")); } ,show_datepicker:function (_lIy){var _li1d=_lY(this._ly+"_datepicker"); if (_lO(_li1d)){if (_lIy){if (!this._ll1d()){if (!this._llc("OnBeforeDatePickerOpen", {} ))return; var _lo1d=_lY(this._ly+"_bound"); if (!isNaN(_lo1d.offsetHeight)){var _lI7=this._lo8(); _lz(_li1d,_lo1d.offsetHeight+_lI7["OffsetTop"]-1); _lW(_li1d,_lI7["OffsetLeft"]); }var _lI1b=eval("__="+this._ly+"_calendar"); _lI1b.deselect_all(); var _lI1h=_lI1b._lIg(); var _lo1i=new Date(_lI1h["FocusedDate"]+" UTC"); var _lo18=_lY(this._ly); var _lO1i=this._lO1e(_lo18.value); if (!isNaN(_lO1i) && _lO1i!="Invalid Date"){ this._lOi=new Date(_lO1i._ll5("n/j/Y")+" UTC"); this._lI1a= true; _lI1b.select(this._lOi); this._lI1a= false; if (_lo1i._ll5("Y_n")!=_lO1i._ll5("Y_n")){_lN(_li1d,1); _lI1b.navigate(this._lOi,1); }}_lN(_li1d,1); if (_ll3()=="ie6"){var _lI1c=_lU(_lE(_lo1d)); _lz(_lI1c,_lx(_li1d)); _lW(_lI1c,_lw(_li1d)); _lv(_lI1c,_li1d.offsetWidth); _lV(_lI1c,_li1d.offsetHeight); _lN(_lI1c,1); }_lJ(_lo1d,"kcdOpening"); this._llc("OnDatePickerOpen", {} ); }}else {if (this._ll1d()){if (!this._llc("OnBeforeDatePickerClose", {} ))return; var _lo1d=_lY(this._ly+"_bound"); _lN(_li1d,0); if (_ll3()=="ie6"){var _lI1c=_lU(_lE(_lo1d)); _lN(_lI1c,0); }_lD(_lo1d,"kcdOpening"); this._llc("OnDatePickerClose", {} ); }}}} ,show_timepicker:function (_lIy){var _lo1e=_lY(this._ly+"_timepicker"); if (_lO(_lo1e)){if (_lIy){if (!this._lI1d()){if (!this._llc("OnBeforeTimePickerOpen", {} ))return; var _lo1d=_lY(this._ly+"_bound"); if (!isNaN(_lo1d.offsetHeight)){var _lI7=this._lo8(); _lz(_lo1e,_lo1d.offsetHeight+_lI7["OffsetTop"]-1); _lW(_lo1e,_lI7["OffsetLeft"]); }_lN(_lo1e,1); if (_ll3()=="ie6"){var _lI1c=_lU(_lE(_lo1d)); _lz(_lI1c,_lx(_lo1e)); _lW(_lI1c,_lw(_lo1e)); _lv(_lI1c,_lo1e.offsetWidth); _lV(_lI1c,_lo1e.offsetHeight); _lN(_lI1c,1); }_lJ(_lo1d,"kcdOpening"); this._llc("OnTimePickerOpen", {} ); }}else {if (this._lI1d()){if (!this._llc("OnBeforeTimePickerClose", {} ))return; var _lo1d=_lY(this._ly+"_bound"); _lN(_lo1e,0); if (_ll3()=="ie6"){var _lI1c=_lU(_lE(_lo1d)); _lN(_lI1c,0); }_lD(_lo1d,"kcdOpening"); this._llc("OnTimePickerClose", {} ); }}}} ,_lo8:function (){var _lo18=_lY(this._ly+"_settings"); return eval("__="+_lo18.value); } ,_ll1i:function (_lO4){if (this._lI1a)return; if (_lZ())return; var _lI7=this._lo8(); var _lo18=_lY(this._ly); var _lOh=_lO4._ll5(_lI7["DateFormat"]); var _lO1i=this._lO1e(_lo18.value); if (!isNaN(_lO1i) && _lO1i!="Invalid Date"){ this._li1a=new Date("1/1/1970 "+_lO1i._ll5("H:i")+" UTC"); }var _li1i=this._li1a._ll5(_lI7["TimeFormat"]); if (this._lO1a && this._ll1a){_lo18.value=_lOh+" "+_li1i; }else if (this._lO1a){_lo18.value=_lOh; }else if (this._ll1a){_lo18.value=_li1i; } this._lOi=_lO4; this.show_datepicker(0); this._llc("OnDateSelect", {} ); this._llc("OnSelect", {} ); } ,_lI1i:function (_li19){if (this._lI1a)return; var _lI7=this._lo8(); var _lo18=_lY(this._ly); var _li1i=_li19._ll5(_lI7["TimeFormat"]); var _lO1i=this._lO1e(_lo18.value); if (!isNaN(_lO1i) && _lO1i!="Invalid Date"){ this._lOi=new Date(_lO1i._ll5("n/j/Y")+" UTC"); }var _lOh=this._lOi._ll5(_lI7["DateFormat"]); if (this._lO1a && this._ll1a){_lo18.value=_lOh+" "+_li1i; }else if (this._lO1a){_lo18.value=_lOh; }else if (this._ll1a){_lo18.value=_li1i; } this._li1a=_li19; this.show_timepicker(0); this._llc("OnTimeSelect", {} ); this._llc("OnSelect", {} ); } ,_lo1j:function (_lo1){ this.show_timepicker(0); this.show_datepicker(!this._ll1d()); } ,_lO1j:function (_lo1){ this.show_datepicker(0); this.show_timepicker(!this._lI1d()); } ,_lI17:function (_lo1){if (_lY(this._ly)==null)return; this.show_datepicker(0); this.show_timepicker(0); } ,registerEvent:function (_lo2,_lO18){ this._lO7[_lo2]=_lO18; } ,_llc:function (_lo2,_ll18){return (_lO(this._lO7[_lo2]))?this._lO7[_lo2](this,_ll18): true; }};function _lo1c(_ll1j,_li1j){var _lI1j=eval("__="+_lH("_calendar","",_ll1j._ly)); _lI1j._ll1i(_li1j["Date"]); }function _ll1c(_ll1j,_li1j){var _lI1j=eval("__="+_lH("_timeview","",_ll1j._ly)); _lI1j._lI1i(_li1j["Time"]); }function _lib(_lo1){_lI0(_lo1); return _lO1(_lo1); }var _lIb=new Array(); function _lo1k(_lo1){for (var i=0; i<_lIb.length; i++){var _lO1k=eval("__="+_lIb[i]); if (_lO(_lO1k)){_lO1k._lI17(); }}}_lC(document,"mouseup",_lo1k, false); function _ll1k(_li7){var _lOz=_lu(_li7); while (_lOz.nodeName!="DIV" || _lO2("KCD",_lM(_lOz))<0){_lOz=_lu(_lOz); if (_lOz.nodeName=="BODY")return null; }return eval(_lOz.id); }function _ll8(_lo1){var _li1k=_ll1k(this ); _li1k._li13(_lo1); }function _lI8(_lo1){var _li1k=_ll1k(this ); _li1k._lI13(_lo1); }function _lO9(_lo1){var _li1k=_ll1k(this ); _li1k._lo14(_lo1); }function _li9(_lo1){var _li1k=_ll1k(this ); _li1k._lO14(_lo1); }function _lId(_lo1){var _li1k=_ll1k(this ); _li1k._ll14(this,_lo1); }function _lld(_lo1){var _li1k=_ll1k(this ); _li1k._lI14(this,_lo1); }function _lid(_lo1){var _li1k=_ll1k(this ); _li1k._lo15(this,_lo1); }function _lOe(_lo1){var _li1k=_ll1k(this ); _li1k._li15(this,_lo1); }function _lle(_lo1){var _li1k=_ll1k(this ); _li1k._lI15(this,_lo1); }function _lie(_lo1){var _li1k=_ll1k(this ); _li1k._lO15(this,_lo1); }function _lIe(_lo1){var _li1k=_ll1k(this ); _li1k._li16(this,_lo1); }function _lof(_lo1){var _li1k=_ll1k(this ); _li1k._lI16(this,_lo1); }function _lOf(_lo1){var _li1k=_ll1k(this ); _li1k._lo16(this,_lo1); }function _log(_lo1){var _li1k=_ll1k(this ); _li1k._lO17(this,_lo1); }function _lOg(_lo1){var _li1k=_ll1k(this ); _li1k._ll17(this,_lo1); }function _llg(_lo1){var _li1k=_ll1k(this ); _li1k._lo17(this,_lo1); }function _loa(_lo1){var _li1k=_ll1k(this ); _li1k._li17(this,_lo1); }function _lia(_lo1){var _li1k=_ll1k(this ); _li1k._lo11(this,_lo1); }function _lob(_lo1){var _li1k=_ll1k(this ); _li1k._ll10(this,_lo1); }function _llb(_lo1){var _li1k=_ll1k(this ); _li1k._ll11(this,_lo1); }function _lOb(_lo1){var _li1k=_ll1k(this ); _li1k._lO12(this,_lo1); }function _lI18(_lo1){var _lI1k=_ll1k(this ); _lI1k._ll19(this,_lo1); }function _lo19(_lo1){var _lI1k=_ll1k(this ); _lI1k._lI19(this,_lo1); }function _lO19(_lo1){var _lI1k=_ll1k(this ); _lI1k._lo1a(this,_lo1); }function _lO1b(_lo1){var _lO1d=eval("__="+_lH("_dateopener","",this.id)); _lO1d._lo1j(_lo1); }function _li1b(_lo1){var _lO1d=eval("__="+_lH("_timeopener","",this.id)); _lO1d._lO1j(_lo1); }function kcd_animate(_ly,_li12){var _li1k=eval("__="+_ly); _li1k._lOn(_li12); }if (typeof(__KCDInits)!="undefined" && _lO(__KCDInits)){for (var i=0; i<__KCDInits.length; i++){__KCDInits[i](); }} <?php _lO5();
    _llo();
} if (!class_exists("KoolCalendar", FALSE)) {

    function _llp($_lOp, $_llq) {
        $_ll6 = getdate($_lOp);
        return mktime(0, 0, 0, $_ll6["mon"], $_ll6["mday"] + $_llq, $_ll6["year"]);
    }

    class _lOq {

        var $Type = "EaseBoth";
        var $Duration = 0536;

    }

    class _llr {

        var $_lls;
        var $_lOs;
        var $_llt;
        var $_lOt;
        var $_llu;
        var $_lOu;
        var $_llv;
        var $_lOv;

        function __construct() {
            $this->_lls = array("Today" => "Today", "OK" => "OK", "Cancel" => "Cancel");
            $this->_lOs = array("January" => "January", "February" => "February", "March" => "March", "April" => "April", "May" => "May", "June" => "June", "July" => "July", "August" => "August", "September" => "September", "October" => "October", "November" => "November", "December" => "December");
            $this->_llt = array("January" => "Jan", "February" => "Feb", "March" => "Mar", "April" => "Apr", "May" => "May", "June" => "Jun", "July" => "Jul", "August" => "Aug", "September" => "Sep", "October" => "Oct", "November" => "Nov", "December" => "Dec");
            $this->_lOt = array("Sunday" => "Sunday", "Monday" => "Monday", "Tuesday" => "Tuesday", "Wednesday" => "Wednesday", "Thursday" => "Thursday", "Friday" => "Friday", "Saturday" => "Saturday");
            $this->_llu = array("Sunday" => "Sun", "Monday" => "Mon", "Tuesday" => "Tue", "Wednesday" => "Wed", "Thursday" => "Thu", "Friday" => "Fri", "Saturday" => "Sat");
            $this->_lOu = array("Sunday" => "S", "Monday" => "M", "Tuesday" => "T", "Wednesday" => "W", "Thursday" => "T", "Friday" => "F", "Saturday" => "S");
            $this->_llv = array();
            $this->_lOv = array();
            foreach ($this->_lOt as $_llw => $_lOw) {
                $this->_llv[$_llw] = substr($_lOw, 0, 1);
                $this->_lOv[$_llw] = substr($_lOw, 0, 2);
            }
        }

        function load($_llx) {
            $_lOx = new domdocument();
            $_lOx->load($_llx);
            $_lly = $_lOx->getelementsbytagname("Commands");
            if ($_lly->length > 0) {
                foreach ($_lly->item(0)->attributes as $_lOy) {
                    $this->_lls[$_lOy->name] = $_lOy->value;
                }
            } $_lly = $_lOx->getelementsbytagname("Months_Full");
            if ($_lly->length > 0) {
                foreach ($_lly->item(0)->attributes as $_lOy) {
                    $this->_lOs[$_lOy->name] = $_lOy->value;
                }
            } $_lly = $_lOx->getelementsbytagname("Months_Short");
            if ($_lly->length > 0) {
                foreach ($_lly->item(0)->attributes as $_lOy) {
                    $this->_llt[$_lOy->name] = $_lOy->value;
                }
            } $_lly = $_lOx->getelementsbytagname("DaysOfWeek_Full");
            if ($_lly->length > 0) {
                foreach ($_lly->item(0)->attributes as $_lOy) {
                    $this->_lOt[$_lOy->name] = $_lOy->value;
                }
            } $_lly = $_lOx->getelementsbytagname("DaysOfWeek_Short");
            if ($_lly->length > 0) {
                foreach ($_lly->item(0)->attributes as $_lOy) {
                    $this->_llu[$_lOy->name] = $_lOy->value;
                }
            } $_lly = $_lOx->getelementsbytagname("DaysOfWeek_Shortest");
            if ($_lly->length > 0) {
                foreach ($_lly->item(0)->attributes as $_lOy) {
                    $this->_lOu[$_lOy->name] = $_lOy->value;
                }
            } $this->_llv = array();
            $this->_lOv = array();
            foreach ($this->_lOt as $_llw => $_lOw) {
                $this->_llv[$_llw] = substr($_lOw, 0, 1);
                $this->_lOv[$_llw] = substr($_lOw, 0, 2);
            }
        }

    }

    class _llz {

        var $_lOz;
        var $_ll10;
        var $_lO10 = FALSE;

        function _ll11($_lO11) {
            $this->_lOz = $_lO11;
            $this->_lO10 = $_lO11->_ll12;
            $_lO12 = ( isset($_POST[$this->_lOz->id . "_viewstate"])) ? $_POST[$this->_lOz->id . "_viewstate"] : "";
            if ($this->_lO10 && $_lO12 == "") {
                $_lO12 = ( isset($_SESSION[$this->_lOz->id . "_viewstate"])) ? $_SESSION[$this->_lOz->id . "_viewstate"] : "";
            } $_lO12 = _lO0("\134", "", $_lO12);
            $this->_ll10 = json_decode($_lO12, TRUE);
        }

        function _ll13() {
            $_lO13 = json_encode($this->_ll10);
            if ($this->_lO10) {
                $_SESSION[$this->_lOz->id . "_viewstate"] = $_lO13;
            } $_ll14 = "<input id='{id}' name=\047{id}\047 type=\047hidden' value='{value}' autocomplete=\047off\047 />";
            $_lO14 = _lO0("{id}", $this->_lOz->id . "_viewstate", $_ll14);
            $_lO14 = _lO0("{value}", $_lO13, $_lO14);
            return $_lO14;
        }

    }

    class koolcalendar {

        var $id;
        var $_ll0 = "1.9.0.0";
        var $styleFolder;
        var $scriptFolder;
        var $_ll15;
        var $ClientMode = FALSE;
        var $AjaxEnabled = FALSE;
        var $AjaxLoadingImage;
        var $AjaxHandlePage = "";
        var $Orientation = "Horizontal";
        var $MonthLayout = "7x6";
        var $ShowOtherMonthsDays = TRUE;
        var $ShowDayCellToolTips = TRUE;
        var $ShowToday = TRUE;
        var $ShowRowHeader = TRUE;
        var $UseRowHeadersAsSelectors = FALSE;
        var $ShowColumnHeader = TRUE;
        var $UseColumnHeadersAsSelectors = FALSE;
        var $DayNameFormat = "Shortest";
        var $ShowViewSelector = TRUE;
        var $ViewSelectorText = "x";
        var $EnableSelect = TRUE;
        var $EnableMultiSelect = FALSE;
        var $SelectedDates;
        var $_lO15;
        var $MultiViewColumns = 1;
        var $MultiViewRows = 1;
        var $NavigateAnimation;
        var $TitleFormat;
        var $TitleStyle;
        var $CalendarTableStyle;
        var $DateRangeSeparator = " - ";
        var $FirstDayOfWeek = 0;
        var $FocusedDate;
        var $RangeMinDate;
        var $RangeMaxDate;
        var $ShowNavigation = TRUE;
        var $ShowFastNavigation = TRUE;
        var $FastNavigationStep;
        var $Width;
        var $Height;
        var $EnableQuickMonthSelect = TRUE;
        var $Localization;
        var $ClientEvents;
        var $_ll16;
        var $_lO16;
        var $_ll17 = TRUE;

        function __construct($_lO17 = "kcd") {
            $this->id = $_lO17;
            $this->TitleStyle = array();
            $this->_lO16 = new _llz();
            $this->SelectedDates = array();
            $this->_ll18 = array();
            $this->Localization = new _llr();
            $this->NavigateAnimation = new _lOq();
            $this->ClientEvents = array();
        }

        function init() {
            if ($this->MultiViewColumns * $this->MultiViewRows < 1) {
                $this->MultiViewColumns = 1;
                $this->MultiViewRows = 1;
            } if ($this->FocusedDate === NULL) $this->FocusedDate = time(); if ($this->SelectedDates === NULL) $this->SelectedDates = array(); if ($this->FastNavigationStep === NULL) $this->FastNavigationStep = 3 * $this->MultiViewColumns * $this->MultiViewRows; $this->_lO18();
        }

        function _lO18() {
            $_lO12 = ( isset($_POST[$this->id . "_viewstate"])) ? $_POST[$this->id . "_viewstate"] : "";
            $_lO12 = _lO0("\134", "", $_lO12);
            $_lO14 = json_decode($_lO12, TRUE);
            $_ll19 = array();
            if (isset($_lO14["SelectedDates"])) {
                foreach ($_lO14["SelectedDates"] as $_lO19 => $_lOw) {
                    array_push($_ll19, strtotime($_lO19));
                }
            } $this->SelectedDates = $_ll19;
            if (isset($_lO14["FocusedDate"])) {
                $this->FocusedDate = strtotime($_lO14["FocusedDate"]);
            }
        }

        function addspecialdate($_ll1a, $_lO1a = FALSE, $_ll1b = NULL, $_lO1b = NULL) {
            $_ll6 = array("Disabled" => $_lO1a, "CssClass" => $_ll1b, "ToolTip" => $_lO1b,);
            $this->_ll16[date("n/j/Y", $_ll1a)] = $_ll6;
        }

        function render() {
            $_ll1c = "";
            $_ll1c.=$this->registercss();
            $_ll1c.=$this->rendercalendar();
            $_lO1c = isset($_POST["__koolajax"]) || isset($_GET["__koolajax"]);
            $_ll1c.=($_lO1c) ? "" : $this->registerscript();
            $_ll1c.="<script type='text/javascript\047>";
            $_ll1c.=$this->startupscript();
            $_ll1c.="</script>";
            if ($this->AjaxEnabled && class_exists("UpdatePanel")) {
                $_ll1d = new updatepanel($this->id . "_updatepanel");
                $_ll1d->content = $_ll1c;
                $_ll1d->cssclass = $this->_ll15 . "KCD_UpdatePanel";
                if ($this->AjaxLoadingImage) {
                    $_ll1d->setloading($this->AjaxLoadingImage);
                } $_ll1c = $_ll1d->render();
            } return $_ll1c;
        }

        function rendercalendar() {
            $_lO1d = "\n<!--KoolCalendar version {version} - www.koolphp.net -->\n";
            $_llg = _lO0("{id}", $this->id, _lOd());
            if (_lOf($_llg)) {
                $_llg = _lO0("{style}", $this->_ll15, $_llg);
                $_llg = _lO0("{trademark}", $this->_ll17 ? $_lO1d : "", $_llg);
                $_llg = _lO0("{settings}", $this->_ll1e(), $_llg);
                $_llg = _lO0("{viewstate}", $this->_lO1e(), $_llg);
                $_llg = _lO0("{view}", ($this->MultiViewColumns * $this->MultiViewRows > 1) ? $this->_ll1f() : $this->_lO1f(), $_llg);
                $_llg = _lO0("{QMS}", ($this->EnableQuickMonthSelect) ? $this->_ll1g() : "", $_llg);
                $_llg = _lO0("{version}", $this->_ll0, $_llg);
            } return $_llg;
        }

        function _ll1e() {
            $_lO1g = array("Width" => $this->Width, "Height" => $this->Height, "Today" => date("n/j/Y"), "EnableSelect" => $this->EnableSelect, "EnableMultiSelect" => $this->EnableMultiSelect, "UseRowHeadersAsSelectors" => $this->UseRowHeadersAsSelectors, "UseColumnHeadersAsSelectors" => $this->UseColumnHeadersAsSelectors, "MultiViewColumns" => $this->MultiViewColumns, "MultiViewRows" => $this->MultiViewRows, "RangeMinDate" => ($this->RangeMinDate !== NULL) ? date("n/j/Y", $this->RangeMinDate) : NULL, "RangeMaxDate" => ($this->RangeMaxDate !== NULL) ? date("n/j/Y", $this->RangeMaxDate) : NULL, "FastNavigationStep" => $this->FastNavigationStep, "ClientMode" => $this->ClientMode, "AjaxEnabled" => $this->AjaxEnabled, "AjaxHandlePage" => $this->AjaxHandlePage, "ClientEvents" => $this->ClientEvents,);
            if ($this->ClientMode) {
                $_ll1h = $this->Localization->_lOt;
                switch (strtolower($this->DayNameFormat)) {
                    case "short": $_ll1h = $this->Localization->_llu;
                        break;
                    case "firstletter": $_ll1h = $this->Localization->_llv;
                        break;
                    case "firsttwoletters": $_ll1h = $this->Localization->_lOv;
                        break;
                    case "shortest": $_ll1h = $this->Localization->_lOu;
                        break;
                } $_lO1g["ShowToday"] = $this->ShowToday;
                $_lO1g["Orientation"] = $this->Orientation;
                $_lO1g["MonthLayout"] = $this->MonthLayout;
                $_lO1g["ShowOtherMonthsDays"] = $this->ShowOtherMonthsDays;
                $_lO1g["ShowDayCellToolTips"] = $this->ShowDayCellToolTips;
                $_lO1g["ShowColumnHeader"] = $this->ShowColumnHeader;
                $_lO1g["ShowRowHeader"] = $this->ShowRowHeader;
                $_lO1g["ShowViewSelector"] = $this->ShowViewSelector;
                $_lO1g["ViewSelectorText"] = $this->ViewSelectorText;
                $_lO1g["NavigateAnimation"] = $this->NavigateAnimation;
                $_lO1g["DateRangeSeparator"] = $this->DateRangeSeparator;
                $_lO1g["FirstDayOfWeek"] = $this->FirstDayOfWeek;
                $_lO1g["DayName"] = $_ll1h;
                $_lO1g["DayNameFull"] = $this->Localization->_lOt;
                $_lO1g["MonthsFull"] = $this->Localization->_lOs;
            } $_lO1h = "<input id=\047{id}_settings' type='hidden\047 value='{value}' autocomplete='off\047 />";
            $_ll1i = _lO0("{id}", $this->id, $_lO1h);
            $_ll1i = _lO0("{value}", json_encode($_lO1g), $_ll1i);
            return $_ll1i;
        }

        function _lO1e() {
            $this->_lO15 = array();
            for ($_lO9 = 0; $_lO9 < sizeof($this->SelectedDates); $_lO9++) {
                $this->_lO15[date("n/j/Y", $this->SelectedDates[$_lO9])] = 1;
            } $_lO14 = array("FocusedDate" => date("n/j/Y", $this->FocusedDate), "SelectedDates" => $this->_lO15);
            $_lO1h = "<input id=\047{id}_viewstate\047 name='{id}_viewstate\047 type=\047hidden' value='{value}' autocomplete='off' />";
            $_ll1i = _lO0("{id}", $this->id, $_lO1h);
            $_ll1i = _lO0("{value}", json_encode($_lO14), $_ll1i);
            return $_ll1i;
        }

        function _ll1g() {
            $_lO1i = array();
            $_ll1j = getdate($this->FocusedDate);
            for ($_lO9 = 1; $_lO9 < 015; $_lO9++) {
                array_push($_lO1i, date("F", mktime(0, 0, 0, $_lO9, 1, 03720)));
            } $_lO1j = "<div id='{id}' class=\047kcdQMS' style='display:none;'><table border=\0470' cellspacing='0' ><tbody>{trs}</tbody></table></div>";
            $_ll1k = "<tr>{tds}</tr>";
            $_lO1k = "<td id='{id}' class=\047kcdMonth\047><a>{text}</a></td>";
            $_ll1l = "<td id=\047{id}\047 class='kcdMonth kcdSeparate\047><a>{text}</a></td>";
            $_lO1l = "<td id='{id}' class=\047kcdYear\047><a>{text}</a></td>";
            $_ll1m = "<td id='{id}_qms_{dir}\047><a>{text}</a></td>";
            $_lO1m = "<tr><td class=\047kcdButtons' colspan=\0474'>{today}{ok}{cancel}</td></tr>";
            $_ll1n = "<input id='{id}_qms_{button}'type='button\047 value='{value}' class=\047kcdButton{button}' />";
            $_lO1n = $_ll1j["year"] - 4;
            $_ll1o = "";
            for ($_lO1o = 0; $_lO1o < 6; $_lO1o++) {
                $_ll1p = "";
                for ($_lO1p = 0; $_lO1p < 2; $_lO1p++) {
                    $_ll1q = _lO0("{id}", $this->id . "_qms_" . $_lO1i[$_lO1o * 2 + $_lO1p], ($_lO1p == 1) ? $_ll1l : $_lO1k);
                    $_ll1q = _lO0("{text}", $this->Localization->_llt[$_lO1i[$_lO1o * 2 + $_lO1p]], $_ll1q);
                    $_ll1p.=$_ll1q;
                } if ($_lO1o < 5) {
                    $_ll1q = _lO0("{id}", $this->id . "_qms_" . ($_lO1n + $_lO1o), $_lO1l);
                    $_ll1q = _lO0("{text}", $_lO1n + $_lO1o, $_ll1q);
                    $_ll1p.=$_ll1q;
                    $_ll1q = _lO0("{id}", $this->id . "_qms_" . ($_lO1n + $_lO1o + 5), $_lO1l);
                    $_ll1q = _lO0("{text}", $_lO1n + $_lO1o + 5, $_ll1q);
                    $_ll1p.=$_ll1q;
                } else {
                    $_ll1q = _lO0("{dir}", "Prev", $_ll1m);
                    $_ll1q = _lO0("{id}", $this->id, $_ll1q);
                    $_ll1q = _lO0("{text}", "\046lt;&lt;", $_ll1q);
                    $_ll1p.=$_ll1q;
                    $_ll1q = _lO0("{dir}", "Next", $_ll1m);
                    $_ll1q = _lO0("{id}", $this->id, $_ll1q);
                    $_ll1q = _lO0("{text}", "&gt;&gt;", $_ll1q);
                    $_ll1p.=$_ll1q;
                } $_lO1q = _lO0("{tds}", $_ll1p, $_ll1k);
                $_ll1o.=$_lO1q;
            } $_ll1n = _lO0("{id}", $this->id, $_ll1n);
            $_ll1r = _lO0("{value}", $this->Localization->_lls["Today"], $_ll1n);
            $_ll1r = _lO0("{button}", "Today", $_ll1r);
            $_lO1r = _lO0("{value}", $this->Localization->_lls["OK"], $_ll1n);
            $_lO1r = _lO0("{button}", "OK", $_lO1r);
            $_ll1s = _lO0("{value}", $this->Localization->_lls["Cancel"], $_ll1n);
            $_ll1s = _lO0("{button}", "Cancel", $_ll1s);
            $_lO1q = _lO0("{today}", $_ll1r, $_lO1m);
            $_lO1q = _lO0("{ok}", $_lO1r, $_lO1q);
            $_lO1q = _lO0("{cancel}", $_ll1s, $_lO1q);
            $_ll1o.=$_lO1q;
            $_lO1s = _lO0("{id}", $this->id . "_qms", $_lO1j);
            $_lO1s = _lO0("{style}", $this->_ll15, $_lO1s);
            $_lO1s = _lO0("{trs}", $_ll1o, $_lO1s);
            return $_lO1s;
        }

        function _ll1f() {
            $_ll1t = $this->MultiViewColumns * $this->MultiViewRows;
            $_lOp = $this->FocusedDate;
            $_ll6 = getdate($_lOp);
            $_lO1t = mktime(0, 0, 0, $_ll6["mon"], 1, $_ll6["year"]);
            $_ll1u = mktime(0, 0, 0, $_ll6["mon"] + $_ll1t - 1, 1, $_ll6["year"]);
            $_lO1u = getdate($_lO1t);
            $_ll1v = getdate($_ll1u);
            $_lO1j = "<table cellspacing=\0470' border=\0470' class='kcdMultiView' style='{width}{height}'>{head}<tbody><tr><td class='kcdMultiViewContainer' style=\047overflow:hidden;'>{subtable}</td></tr></tbody>{foot}</table>";
            $_lO1v = "<thead>{trs}</thead>";
            $_ll1w = "<tr><th colspan=\047{colspan}\047 class=\047kcdTopHeader'>{fastnav}{nav}<span class=\047kcdNavText {qms}\047>{from_month}{sep}{to_month}</span></th></tr>";
            $_lO1w = "<span class=\047kcdFastPrev'><a>&lt;&lt;</a></span><span class=\047kcdFastNext'><a>\046gt;\046gt;</a></span>";
            $_ll1x = "<span class=\047kcdPrev'><a>\046lt;</a></span><span class='kcdNext'><a>&gt;</a></span>";
            $_lO1x = "<table cellspacing='0\047 border='0\047 style=\047width:100%;\047>{body}</table>";
            $_ll1y = "<tbody>{trs}</tbody>";
            $_lO1y = "<tr>{tds}</tr>";
            $_ll1z = "<td class='kcdMonthContainer {rowpos} {colpos}'>{monthview}</td>";
            $_lO1z = _lO0("{from_month}", $this->Localization->_lOs[$_lO1u["month"]] . " " . $_lO1u["year"], $_ll1w);
            $_lO1z = _lO0("{sep}", $this->DateRangeSeparator, $_lO1z);
            $_lO1z = _lO0("{to_month}", $this->Localization->_lOs[$_ll1v["month"]] . " " . $_ll1v["year"], $_lO1z);
            $_lO1z = _lO0("{colspan}", $this->MultiViewColumns, $_lO1z);
            $_lO1z = _lO0("{qms}", $this->EnableQuickMonthSelect ? "kcdQMSNav" : "", $_lO1z);
            $_lO1z = _lO0("{fastnav}", ($this->ShowFastNavigation) ? $_lO1w : "", $_lO1z);
            $_lO1z = _lO0("{nav}", ($this->ShowNavigation) ? $_ll1x : "", $_lO1z);
            $_ll20 = "";
            $_ll20.=$_lO1z;
            $_lO20 = _lO0("{trs}", $_ll20, $_lO1v);
            $_ll21 = "";
            for ($_lO1o = 0; $_lO1o < $this->MultiViewRows; $_lO1o++) {
                $_lO21 = "";
                for ($_lO1p = 0; $_lO1p < $this->MultiViewColumns; $_lO1p++) {
                    $_ll22 = mktime(0, 0, 0, $_lO1u["mon"] + $_lO1o * $this->MultiViewColumns + $_lO1p, 1, $_lO1u["year"]);
                    $_lO22 = _lO0("{monthview}", $this->_lO1f($_ll22, FALSE), $_ll1z);
                    $_lO22 = _lO0("{rowpos}", ($_lO1o == 0) ? "kcdFirstRow {rowpos}" : "{rowpos}", $_lO22);
                    $_lO22 = _lO0("{rowpos}", ($_lO1o == $this->MultiViewRows - 1) ? "kcdLastRow {rowpos}" : "{rowpos}", $_lO22);
                    $_lO22 = _lO0("{rowpos}", "", $_lO22);
                    $_lO22 = _lO0("{colpos}", ($_lO1p == 0) ? "kcdFirstCol {colpos}" : "{colpos}", $_lO22);
                    $_lO22 = _lO0("{colpos}", ($_lO1p == $this->MultiViewColumns - 1) ? "kcdLastCol {colpos}" : "{colpos}", $_lO22);
                    $_lO22 = _lO0("{colpos}", "", $_lO22);
                    $_lO21.=$_lO22;
                } $_ll23 = _lO0("{tds}", $_lO21, $_lO1y);
                $_ll21.=$_ll23;
            } $_lO23 = _lO0("{trs}", $_ll21, $_ll1y);
            $_ll24 = _lO0("{body}", $_lO23, $_lO1x);
            $_lO24 = "";
            $_lO1s = $_lO1j;
            $_lO1s = _lO0("{width}", ($this->Width) ? "width:" . $this->Width . ";" : "", $_lO1s);
            $_lO1s = _lO0("{height}", ($this->Height) ? "height:" . $this->Height . ";" : "", $_lO1s);
            $_lO1s = _lO0("{head}", $_lO20, $_lO1s);
            if ($this->ClientMode) {
                $_lO1s = _lO0("{subtable}", "<div><table class=\047kcdTableSlide\047 style='width:100%;' border=\0470\047 cellpadding='0' cellspacing='0'><tr><td>{subtable}</td></tr></table></div>", $_lO1s);
            } $_lO1s = _lO0("{subtable}", $_ll24, $_lO1s);
            $_lO1s = _lO0("{foot}", $_lO24, $_lO1s);
            return $_lO1s;
        }

        function _lO1f($_lOp = NULL, $_ll25 = TRUE) {
            if (!$_lOp) {
                $_lOp = $this->FocusedDate;
            } $_lO25 = getdate($_lOp);
            $_lO1j = "<table cellspacing='0\047 cellpadding='0\047 border=\0470' class='kcdMonthView' style='{width}{height}\047>{head}{body}{foot}</table>";
            $_lO1v = "<thead>{trs}</thead>";
            $_ll26 = "<tr><th class='kcdTopHeader\047>{fastnav}{nav} {text}</th></tr>";
            $_lO26 = "<span class='kcdNavText {qms}\047>{text}</span>";
            $_lO1w = "<span class='kcdFastPrev\047><a>\046lt;&lt;</a></span><span class='kcdFastNext'><a>&gt;\046gt;</a></span>";
            $_ll1x = "<span class=\047kcdPrev\047><a>\046lt;</a></span><span class=\047kcdNext\047><a >&gt;</a></span>";
            $_ll1y = "<tbody><tr><td class=\047kcdMain\047 style=\047overflow:hidden\047>{detail}</td></tr></tbody>";
            $_ll27 = "<tfoot>{trs}</tfoot>";
            $_lO27 = "<tr>{tds}</tr>";
            $_ll28 = "<td>{ct}</td>";
            $_lO28 = $_ll26;
            if ($_ll25) {
                $_lO28 = _lO0("{text}", $_lO26, $_lO28);
                $_lO28 = _lO0("{text}", "{text} " . $_lO25["year"], $_lO28);
                $_lO28 = _lO0("{qms}", $this->EnableQuickMonthSelect ? "kcdQMSNav" : "", $_lO28);
            } $_lO28 = _lO0("{text}", $this->Localization->_lOs[$_lO25["month"]], $_lO28);
            $_lO28 = _lO0("{fastnav}", ($_ll25 && $this->ShowFastNavigation) ? $_lO1w : "", $_lO28);
            $_lO28 = _lO0("{nav}", ($_ll25 && $this->ShowNavigation) ? $_ll1x : "", $_lO28);
            $_ll20 = "";
            $_ll20.=$_lO28;
            $_lO20 = _lO0("{trs}", $_ll20, $_lO1v);
            $_lO23 = $_ll1y;
            if ($_ll25) {
                $_lO23 = _lO0("{detail}", "<div><table class='kcdTableSlide'  border='0' cellpadding='0\047 cellspacing='0' style=\047width:100%;\047><tr><td>{detail}</td></tr></table></div>", $_lO23);
            } $_lO23 = _lO0("{detail}", $this->_ll29($_lO25), $_lO23);
            $_lO24 = "";
            $_lO1s = $_lO1j;
            $_lO1s = _lO0("{width}", ($this->Width) ? "width:" . $this->Width . ";" : "", $_lO1s);
            $_lO1s = _lO0("{height}", ($this->Height) ? "height:" . $this->Height . ";" : "", $_lO1s);
            $_lO1s = _lO0("{head}", $_lO20, $_lO1s);
            $_lO1s = _lO0("{body}", $_lO23, $_lO1s);
            $_lO1s = _lO0("{foot}", $_lO24, $_lO1s);
            return $_lO1s;
        }

        function _ll29($_lO29) {
            $_ll2a = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            $_lO2a = (strtolower($this->Orientation) == "vertical");
            $_ll2b = 7;
            $_lO2b = 6;
            switch ($this->MonthLayout) {
                case "21x2": $_ll2b = 025;
                    $_lO2b = 2;
                    break;
                case "14x3": $_ll2b = 016;
                    $_lO2b = 3;
                    break;
                case "7x6": $_ll2b = 7;
                    $_lO2b = 6;
                default : break;
            } $_ll1h = $this->Localization->_lOt;
            switch (strtolower($this->DayNameFormat)) {
                case "short": $_ll1h = $this->Localization->_llu;
                    break;
                case "firstletter": $_ll1h = $this->Localization->_llv;
                    break;
                case "firsttwoletters": $_ll1h = $this->Localization->_lOv;
                    break;
                case "shortest": $_ll1h = $this->Localization->_lOu;
                    break;
            } if ($_lO2a) {
                $_ll2c = $_ll2b;
                $_ll2b = $_lO2b;
                $_lO2b = $_ll2c;
            } $_lO2c = mktime(0, 0, 0, $_lO29["mon"], 1, $_lO29["year"]);
            $_ll2d = getdate($_lO2c);
            $_lO2d = $_ll2d["wday"] - $this->FirstDayOfWeek;
            if ($_lO2d < 0) $_lO2d += 7; $_ll2e = _llp($_lO2c, -$_lO2d);
            $_lO1j = "<table cellspacing='0\047 border=\0470\047 class='kcdMainTable\047>{head}{body}</table>";
            $_lO1v = "<thead><tr>{th_selector}{ths}</tr></thead>";
            $_lO2e = "<th class='kcdColHeader\047 title=\047{title}\047>{text}</th>";
            $_ll2f = "<th class='kcdColHeader kcdViewSelector\047>{text}</th>";
            $_ll1y = "<tbody>{trs}</tbody>";
            $_lO1y = "<tr>{th}{tds}</tr>";
            $_lO2f = "<th class='kcdRowHeader\047 title='{title}'>{text}</th>";
            $_ll1z = "<td abbr='{abbr}\047 class='{class}' {title}><a>{text}</a></td>";
            $_ll2g = "";
            for ($_lO1p = 0; $_lO1p < $_ll2b; $_lO1p++) {
                $_lO2g = "";
                if ($_lO2a) {
                    $_llq = _llp($_ll2e, $_lO1p * $_lO2b);
                    $_ll2h = getdate($_llq);
                    $_lO2h = ceil($_ll2h["yday"] / 7) + 1;
                    if ($_lO2h > 064) {
                        $_lO2h = 1;
                    } $_lO2g = _lO0("{text}", $_lO2h, $_lO2e);
                    $_lO2g = _lO0("{title}", $_lO2h, $_lO2g);
                } else {
                    $_ll2i = ($this->FirstDayOfWeek + $_lO1p) % 7;
                    $_lO2g = _lO0("{title}", $this->Localization->_lOt[$_ll2a[$_ll2i]], $_lO2e);
                    $_lO2g = _lO0("{text}", $_ll1h[$_ll2a[$_ll2i]], $_lO2g);
                } $_ll2g.=$_lO2g;
            } $_lO2i = "";
            if ($this->ShowRowHeader) {
                if ($this->ShowViewSelector) {
                    $_lO2i = _lO0("{text}", $this->ViewSelectorText, $_ll2f);
                } else {
                    $_lO2i = _lO0("{text}", "", $_lO2e);
                    $_lO2i = _lO0("{title}", "", $_lO2i);
                }
            } $_lO20 = _lO0("{ths}", $_ll2g, $_lO1v);
            $_lO20 = _lO0("{th_selector}", $_lO2i, $_lO20);
            $_ll21 = "";
            for ($_lO1o = 0; $_lO1o < $_lO2b; $_lO1o++) {
                $_lO21 = "";
                for ($_lO1p = 0; $_lO1p < $_ll2b; $_lO1p++) {
                    $_llq = _llp($_ll2e, $_lO1o * $_ll2b + $_lO1p);
                    if ($_lO2a) {
                        $_llq = _llp($_ll2e, $_lO1p * $_lO2b + $_lO1o);
                    } $_ll2h = getdate($_llq);
                    $_ll2j = ($_ll2h["mon"] != $_lO29["mon"]) ? ($this->ShowOtherMonthsDays ? TRUE : FALSE) : TRUE;
                    $_lO22 = _lO0("{abbr}", $_ll2j ? date("n/j/Y", $_llq) : "", $_ll1z);
                    $_lO22 = _lO0("{text}", $_ll2j ? $_ll2h["mday"] : "", $_lO22);
                    $_lO22 = _lO0("{class}", $_ll2j ? "kcdDay {class}" : "", $_lO22);
                    $_lO22 = _lO0("{class}", ($_ll2h["mon"] != $_lO29["mon"]) ? "kcdOtherMonth {class}" : "{class}", $_lO22);
                    $_lO22 = _lO0("{class}", ($_ll2h["wday"] == 0 || $_ll2h["wday"] == 6) ? "kcdWeekend {class}" : "{class}", $_lO22);
                    $_lO22 = _lO0("{class}", isset($this->_lO15[date("n/j/Y", $_llq)]) ? "kcdSelected {class}" : "{class}", $_lO22);
                    $_lO22 = _lO0("{class}", ($this->ShowToday && date("n/j/Y", $_llq) == date("n/j/Y")) ? "kcdToday {class}" : "{class}", $_lO22);
                    if ($this->RangeMaxDate !== NULL) {
                        if ($_llq > $this->RangeMaxDate) {
                            $_lO22 = _lO0("{class}", "kcdDisabled {class}", $_lO22);
                        }
                    } if ($this->RangeMinDate !== NULL) {
                        if ($_llq < $this->RangeMinDate) {
                            $_lO22 = _lO0("{class}", "kcdDisabled {class}", $_lO22);
                        }
                    } if (isset($this->_ll16[date("n/j/Y", $_llq)])) {
                        $_lO2j = $this->_ll16[date("n/j/Y", $_llq)];
                        $_lO22 = _lO0("{class}", ($_lO2j["Disabled"]) ? "kcdDisabled {class}" : "{class}", $_lO22);
                        $_lO22 = _lO0("{class}", ($_lO2j["CssClass"] !== NULL) ? $_lO2j["CssClass"] . " {class}" : "{class}", $_lO22);
                        $_lO22 = _lO0("{title}", ($_lO2j["ToolTip"] !== NULL) ? "title='" . $_lO2j["ToolTip"] . "\047" : "", $_lO22);
                    } $_lO22 = _lO0("{class}", "", $_lO22);
                    $_lO22 = _lO0("{title}", $this->ShowDayCellToolTips ? "title='" . date("l, F d, Y", $_llq) . "'" : "", $_lO22);
                    $_lO21.=$_lO22;
                } $_ll2k = "";
                if ($this->ShowRowHeader) {
                    if ($_lO2a) {
                        $_ll2i = ($this->FirstDayOfWeek + $_lO1o) % 7;
                        $_ll2k = _lO0("{title}", $this->Localization->_lOt[$_ll2a[$_ll2i]], $_lO2f);
                        $_ll2k = _lO0("{text}", $_ll1h[$_ll2a[$_ll2i]], $_ll2k);
                    } else {
                        $_llq = _llp($_ll2e, $_lO1o * $_ll2b);
                        $_ll2h = getdate($_llq);
                        $_lO2h = ceil($_ll2h["yday"] / 7) + 1;
                        if ($_lO2h > 064) {
                            $_lO2h = 1;
                        } $_ll2k = _lO0("{text}", $_lO2h, $_lO2f);
                        $_ll2k = _lO0("{title}", $_lO2h, $_ll2k);
                    }
                } $_ll23 = _lO0("{tds}", $_lO21, $_lO1y);
                $_ll23 = _lO0("{th}", $_ll2k, $_ll23);
                $_ll21.=$_ll23;
            } $_lO23 = _lO0("{trs}", $_ll21, $_ll1y);
            $_lO1s = _lO0("{head}", $this->ShowColumnHeader ? $_lO20 : "", $_lO1j);
            $_lO1s = _lO0("{body}", $_lO23, $_lO1s);
            return $_lO1s;
        }

        function registerscript() {
            $_lO2k = "<script type='text/javascript\047>if(typeof _libKCD==\047undefined\047){document.write(unescape(\042%3Cscript type=\047text/javascript' src='{src}\047%3E %3C/script%3E\042));_libKCD=1;}</script>";
            $_ll1c = _lO0("{src}", $this->_ll2l() . "?" . md5("js"), $_lO2k);
            return $_ll1c;
        }

        function _lO2l() {
            $this->styleFolder = _lO0("\134", "/", $this->styleFolder);
            $_ll2m = trim($this->styleFolder, "/");
            $_lO2m = strrpos($_ll2m, "/");
            $this->_ll15 = substr($_ll2m, ($_lO2m ? $_lO2m : -1) + 1);
        }

        function registercss() {
            $this->_lO2l();
            $_lO2k = "<script type=\047text/javascript'>if (document.getElementById('__{style}KCD\047)==null){var _head = document.getElementsByTagName('head\047)[0];var _link = document.createElement('link\047); _link.id = '__{style}KCD\047;_link.rel=\047stylesheet'; _link.href=\047{stylepath}/{style}/{style}.css';_head.appendChild(_link);}</script>";
            $_ll1c = _lO0("{style}", $this->_ll15, $_lO2k);
            $_ll1c = _lO0("{stylepath}", $this->_ll2n(), $_ll1c);
            return $_ll1c;
        }

        function startupscript() {
            $_lO2k = "var {id}; function {id}_init(){ {id}= new KoolCalendar('{id}');}";
            $_lO2k.="if (typeof(KoolCalendar)==\047function'){{id}_init();}";
            $_lO2k.="else{if(typeof(__KCDInits)=='undefined'){__KCDInits=new Array();} __KCDInits.push({id}_init);{register_script}}";
            $_lO2n = "if(typeof(_libKCD)==\047undefined'){var _head = document.getElementsByTagName('head\047)[0];var _script = document.createElement(\047script\047); _script.type=\047text/javascript'; _script.src=\047{src}'; _head.appendChild(_script);_libKCD=1;}";
            $_ll2o = _lO0("{src}", $this->_ll2l() . "?" . md5("js"), $_lO2n);
            $_ll1c = _lO0("{id}", $this->id, $_lO2k);
            $_ll1c = _lO0("{register_script}", $_ll2o, $_ll1c);
            return $_ll1c;
        }

        function _ll2l() {
            if ($this->scriptFolder == "") {
                $_ll5 = _lO3();
                $_lO2o = substr(_lO0("\134", "/", __FILE__), strlen($_ll5));
                return $_lO2o;
            } else {
                $_lO2o = _lO0("\134", "/", __FILE__);
                $_lO2o = $this->scriptFolder . substr($_lO2o, strrpos($_lO2o, "/"));
                return $_lO2o;
            }
        }

        function _ll2n() {
            $_ll2p = $this->_ll2l();
            $_lO2p = _lO0(strrchr($_ll2p, "/"), "", $_ll2p) . "/styles";
            return $_lO2p;
        }

    }

    class kooltimeview {

        var $id;
        var $_ll0 = "1.9.0.0";
        var $styleFolder;
        var $scriptFolder;
        var $_ll15;
        var $StartTime;
        var $EndTime;
        var $Interval;
        var $NumberOfColumns = 4;
        var $HeaderText = "Time View";
        var $Orientation = "Horizontal";
        var $TimeFormat = "g:i A";
        var $ClientEvents;
        var $_ll17 = TRUE;

        function __construct($_lO17 = "ktview") {
            $this->id = $_lO17;
            $this->StartTime = mktime(0, 0, 0);
            $this->EndTime = mktime(027, 0, 0);
            $this->Interval = mktime(1, 0, 0);
            $this->ClientEvents = array();
        }

        function render() {
            $_ll1c = "";
            $_ll1c.=$this->registercss();
            $_ll1c.=$this->rendertimeview();
            $_lO1c = isset($_POST["__koolajax"]) || isset($_GET["__koolajax"]);
            $_ll1c.=($_lO1c) ? "" : $this->registerscript();
            $_ll1c.="<script type='text/javascript'>";
            $_ll1c.=$this->startupscript();
            $_ll1c.="</script>";
            return $_ll1c;
        }

        function _ll1e() {
            $_lO1g = array("ClientEvents" => $this->ClientEvents);
            $_lO1h = "<input id=\047{id}_settings' type='hidden\047 value='{value}' autocomplete=\047off\047 />";
            $_ll1i = _lO0("{id}", $this->id, $_lO1h);
            $_ll1i = _lO0("{value}", json_encode($_lO1g), $_ll1i);
            return $_ll1i;
        }

        function rendertimeview() {
            $_ll2q = "{0}{trademark}<div id='{id}' style class=\047{style}KCD'>{table}{settings}{1}</div>{2}";
            $_lO1d = "\n<!--KoolTimeView version {version} - www.koolphp.net -->\n";
            $_lO1j = "<table class='ktmTable\047 border=\0470\047 cellspacing=\0470\047>{head}{body}</table>";
            $_lO1v = "<thead><tr><th class='ktmHeader' colspan='{colspan}\047>{text}</th></tr></thead>";
            $_ll1y = "<tbody>{trs}</tbody>";
            $_ll1k = "<tr>{tds}</tr>";
            $_lO1k = "<td class=\047{time} {colpos}' abbr=\047{abbr}'><a>{text}</a></td>";
            $_lO20 = _lO0("{text}", $this->HeaderText, $_lO1v);
            $_lO20 = _lO0("{colspan}", $this->NumberOfColumns, $_lO20);
            $_lO2q = mktime(0, 0, 0);
            $_ll2r = floor(($this->EndTime - $this->StartTime) / ($this->Interval - $_lO2q)) + 1;
            $_lO2r = ceil($_ll2r / $this->NumberOfColumns);
            $_ll1o = "";
            for ($_lO1o = 0; $_lO1o < $_lO2r; $_lO1o++) {
                $_ll1p = "";
                for ($_lO1p = 0; $_lO1p < $this->NumberOfColumns; $_lO1p++) {
                    $_ll2s = $this->StartTime + ($_lO1o * $this->NumberOfColumns + $_lO1p) * ($this->Interval - $_lO2q);
                    if (strtolower($this->Orientation) == "vertical") {
                        $_ll2s = $this->StartTime + ($_lO1p * $_lO2r + $_lO1o) * ($this->Interval - $_lO2q);
                    } $_ll2j = ($_ll2s <= $this->EndTime);
                    $_ll1q = _lO0("{text}", $_ll2j ? date($this->TimeFormat, $_ll2s) : "", $_lO1k);
                    $_ll1q = _lO0("{abbr}", $_ll2j ? date("H:i:s", $_ll2s) : "", $_ll1q);
                    $_ll1q = _lO0("{time}", $_ll2j ? "ktmTime" : "ktmNoTime", $_ll1q);
                    if ($_lO1p == 0) {
                        $_ll1q = _lO0("{colpos}", "ktmFirst", $_ll1q);
                    } else if ($_lO1p == $this->NumberOfColumns - 1) {
                        $_ll1q = _lO0("{colpos}", "ktmLast", $_ll1q);
                    } else {
                        $_ll1q = _lO0("{colpos}", "", $_ll1q);
                    } $_ll1p.=$_ll1q;
                } $_lO1q = _lO0("{tds}", $_ll1p, $_ll1k);
                $_ll1o.=$_lO1q;
            } $_lO23 = _lO0("{trs}", $_ll1o, $_ll1y);
            $_lO1s = _lO0("{head}", $_lO20, $_lO1j);
            $_lO1s = _lO0("{body}", $_lO23, $_lO1s);
            $_llg = _lO0("{id}", $this->id, $_ll2q);
            $_llg = _lO0("{style}", $this->_ll15, $_llg);
            $_llg = _lO0("{trademark}", $this->_ll17 ? $_lO1d : "", $_llg);
            $_llg = _lO0("{table}", $_lO1s, $_llg);
            if (_lOf($_llg)) {
                $_llg = _lO0("{settings}", $this->_ll1e(), $_llg);
            } $_llg = _lO0("{version}", $this->_ll0, $_llg);
            return $_llg;
        }

        function registerscript() {
            $_lO2k = "<script type=\047text/javascript\047>if(typeof _libKCD==\047undefined\047){document.write(unescape(\042%3Cscript type=\047text/javascript' src=\047{src}'%3E %3C/script%3E\042));_libKCD=1;}</script>";
            $_ll1c = _lO0("{src}", $this->_ll2l() . "?" . md5("js"), $_lO2k);
            return $_ll1c;
        }

        function _lO2l() {
            $this->styleFolder = _lO0("\134", "/", $this->styleFolder);
            $_ll2m = trim($this->styleFolder, "/");
            $_lO2m = strrpos($_ll2m, "/");
            $this->_ll15 = substr($_ll2m, ($_lO2m ? $_lO2m : -1) + 1);
        }

        function registercss() {
            $this->_lO2l();
            $_lO2k = "<script type='text/javascript'>if (document.getElementById('__{style}KCD')==null){var _head = document.getElementsByTagName(\047head')[0];var _link = document.createElement('link\047); _link.id = '__{style}KCD\047;_link.rel='stylesheet'; _link.href='{stylepath}/{style}/{style}.css';_head.appendChild(_link);}</script>";
            $_ll1c = _lO0("{style}", $this->_ll15, $_lO2k);
            $_ll1c = _lO0("{stylepath}", $this->_ll2n(), $_ll1c);
            return $_ll1c;
        }

        function startupscript() {
            $_lO2k = "var {id}; function {id}_init(){ {id}= new KoolTimeView('{id}');}";
            $_lO2k.="if (typeof(KoolTimeView)==\047function'){{id}_init();}";
            $_lO2k.="else{if(typeof(__KCDInits)==\047undefined'){__KCDInits=new Array();} __KCDInits.push({id}_init);{register_script}}";
            $_lO2n = "if(typeof(_libKCD)=='undefined\047){var _head = document.getElementsByTagName(\047head')[0];var _script = document.createElement(\047script\047); _script.type='text/javascript\047; _script.src='{src}';_head.appendChild(_script);_libKCD=1;}";
            $_ll2o = _lO0("{src}", $this->_ll2l() . "?" . md5("js"), $_lO2n);
            $_ll1c = _lO0("{id}", $this->id, $_lO2k);
            $_ll1c = _lO0("{register_script}", $_ll2o, $_ll1c);
            return $_ll1c;
        }

        function _ll2l() {
            if ($this->scriptFolder == "") {
                $_ll5 = _lO3();
                $_lO2o = substr(_lO0("\134", "/", __FILE__), strlen($_ll5));
                return $_lO2o;
            } else {
                $_lO2o = _lO0("\134", "/", __FILE__);
                $_lO2o = $this->scriptFolder . substr($_lO2o, strrpos($_lO2o, "/"));
                return $_lO2o;
            }
        }

        function _ll2n() {
            $_ll2p = $this->_ll2l();
            $_lO2p = _lO0(strrchr($_ll2p, "/"), "", $_ll2p) . "/styles";
            return $_lO2p;
        }

    }

    class _lO2s {

        var $Orientation = "Horizontal";
        var $MonthLayout = "7x6";
        var $ShowOtherMonthsDays = TRUE;
        var $ShowDayCellToolTips = TRUE;
        var $ShowToday = TRUE;
        var $ShowColumnHeader = TRUE;
        var $ShowRowHeader = TRUE;
        var $ShowNavigation = TRUE;
        var $ShowFastNavigation = TRUE;
        var $FastNavigationStep = 3;
        var $MultiViewColumns = 1;
        var $MultiViewRows = 1;
        var $FirstDayOfWeek = 0;
        var $FocusedDate;
        var $RangeMinDate;
        var $RangeMaxDate;
        var $NavigateAnimation;

        function __construct() {
            $this->NavigateAnimation = new _lOq();
        }

    }

    class _ll2t {

        var $StartTime;
        var $EndTime;
        var $Interval;
        var $NumberOfColumns = 3;
        var $HeaderText = "Time Picker";
        var $Orientation = "Horizontal";
        var $TimeFormat = "g:i A";

        function __construct() {
            $this->StartTime = mktime(0, 0, 0);
            $this->EndTime = mktime(027, 0, 0);
            $this->Interval = mktime(1, 0, 0);
        }

    }

    class kooldatetimepicker {

        var $id;
        var $_ll0 = "1.9.0.0";
        var $styleFolder;
        var $scriptFolder;
        var $_ll15;
        var $CalendarSettings;
        var $TimeViewSettings;
        var $_lO2t = TRUE;
        var $_ll2u = TRUE;
        var $_lO2u;
        var $_ll2v;
        var $Width = "160px";
        var $CssStyles;
        var $OffsetLeft = 0;
        var $OffsetTop = 0;
        var $DateFormat = "m/d/Y";
        var $TimeFormat = "g:i A";
        var $Value = "";
        var $ClientEvents;
        var $Localization;

        function __construct($_lO17 = "kdtp") {
            $this->id = $_lO17;
            $this->CssStyles = array();
            $this->CalendarSettings = new _lO2s();
            $this->TimeViewSettings = new _ll2t();
            $this->ClientEvents = array();
            $this->Localization = new _llr();
        }

        function init() {
            if ($this->_lO2t) {
                $this->_lO2u = new koolcalendar($this->id . "_calendar");
                $this->_lO2u->ClientMode = TRUE;
                $this->_lO2u->styleFolder = $this->styleFolder;
                $this->_lO2u->scriptFolder = $this->scriptFolder;
                $this->_lO2u->_ll17 = FALSE;
                $this->_lO2u->ClientMode = TRUE;
                $this->_lO2u->ShowViewSelector = FALSE;
                $this->_lO2u->ViewSelectorText = "";
                $this->_lO2u->Orientation = $this->CalendarSettings->Orientation;
                $this->_lO2u->MonthLayout = $this->CalendarSettings->MonthLayout;
                $this->_lO2u->ShowOtherMonthsDays = $this->CalendarSettings->ShowOtherMonthsDays;
                $this->_lO2u->ShowDayCellToolTips = $this->CalendarSettings->ShowDayCellToolTips;
                $this->_lO2u->ShowColumnHeader = $this->CalendarSettings->ShowColumnHeader;
                $this->_lO2u->ShowRowHeader = $this->CalendarSettings->ShowRowHeader;
                $this->_lO2u->ShowNavigation = $this->CalendarSettings->ShowNavigation;
                $this->_lO2u->ShowFastNavigation = $this->CalendarSettings->ShowFastNavigation;
                $this->_lO2u->FastNavigationStep = $this->CalendarSettings->FastNavigationStep;
                $this->_lO2u->FirstDayOfWeek = $this->CalendarSettings->FirstDayOfWeek;
                $this->_lO2u->FocusedDate = $this->CalendarSettings->FocusedDate;
                $this->_lO2u->RangeMinDate = $this->CalendarSettings->RangeMinDate;
                $this->_lO2u->RangeMaxDate = $this->CalendarSettings->RangeMaxDate;
                $this->_lO2u->ShowToday = $this->CalendarSettings->ShowToday;
                $this->_lO2u->MultiViewColumns = $this->CalendarSettings->MultiViewColumns;
                $this->_lO2u->MultiViewRows = $this->CalendarSettings->MultiViewRows;
                $this->_lO2u->NavigateAnimation = $this->CalendarSettings->NavigateAnimation;
                $this->_lO2u->Localization = $this->Localization;
                $this->_lO2u->init();
            } if ($this->_ll2u) {
                $this->_ll2v = new kooltimeview($this->id . "_timeview");
                $this->_ll2v->styleFolder = $this->styleFolder;
                $this->_ll2v->scriptFolder = $this->scriptFolder;
                $this->_ll2v->_ll17 = FALSE;
                $this->_ll2v->StartTime = $this->TimeViewSettings->StartTime;
                $this->_ll2v->EndTime = $this->TimeViewSettings->EndTime;
                $this->_ll2v->Interval = $this->TimeViewSettings->Interval;
                $this->_ll2v->NumberOfColumns = $this->TimeViewSettings->NumberOfColumns;
                $this->_ll2v->HeaderText = $this->TimeViewSettings->HeaderText;
                $this->_ll2v->Orientation = $this->TimeViewSettings->Orientation;
                $this->_ll2v->TimeFormat = $this->TimeViewSettings->TimeFormat;
            } if (isset($_POST[$this->id])) {
                $this->Value = $_POST[$this->id];
            }
        }

        function render() {
            $_ll1c = "";
            $_ll1c.=$this->registercss();
            $_ll1c.=$this->renderdatetimepicker();
            $_lO1c = isset($_POST["__koolajax"]) || isset($_GET["__koolajax"]);
            $_ll1c.=($_lO1c) ? "" : $this->registerscript();
            $_ll1c.="<script type='text/javascript\047>";
            $_ll1c.=$this->startupscript();
            $_ll1c.="</script>";
            return $_ll1c;
        }

        function _ll1e() {
            $_lO1g = array("OffsetLeft" => $this->OffsetLeft, "OffsetTop" => $this->OffsetTop, "DateFormat" => $this->DateFormat, "TimeFormat" => $this->TimeFormat, "ClientEvents" => $this->ClientEvents);
            $_lO1h = "<input id='{id}_settings\047 type=\047hidden' value='{value}' autocomplete='off\047 />";
            $_ll1i = _lO0("{id}", $this->id, $_lO1h);
            $_ll1i = _lO0("{value}", json_encode($_lO1g), $_ll1i);
            return $_ll1i;
        }

        function renderdatetimepicker() {
            $_ll2q = "{0}{trademark}<div id='{id}_bound\047 style='{stylecss}\047 class='{style}KCD\047>{view}{datepicker}{timepicker}{settings}{1}</div>{2}";
            $_lO1d = "\n<!--KoolDateTimePicker version {version} - www.koolphp.net -->\n";
            $_lO2v = "<div id=\047{id}_datepicker\047 class=\047kcdDatePicker\047 style='display:none;position:absolute;\047>{calendar}</div>";
            $_ll2w = "<div id=\047{id}_timepicker\047 class=\047kcdTimePicker' style='display:none;position:absolute;\047>{timeview}</div>";
            $_lO2w = "<table border='0\047 cellpadding='0' cellspacing=\0470\047 style='width:100%;'><tr><td class='kcdInput\047><div><input id='{id}\047 name=\047{id}' value='{value}' style=\047width:100%;{style}' type='text' autocomplete=\047off'/></div></td>{dateopener}{timeopener}</tr></table>";
            $_ll2x = "";
            $_lO2x = "";
            if ($this->_lO2t) {
                $_ll2x = _lO0("{id}", $this->id, $_lO2v);
                $_ll2x = _lO0("{calendar}", $this->_lO2u->render(), $_ll2x);
                $_lO2x = "<td class='kcdPicker'><a id='{id}_dateopener' class='kcdDateOpener'></a></td>";
                $_lO2x = _lO0("{id}", $this->id, $_lO2x);
            } $_ll2y = "";
            $_lO2y = "";
            if ($this->_ll2u) {
                $_ll2y = _lO0("{id}", $this->id, $_ll2w);
                $_ll2y = _lO0("{timeview}", $this->_ll2v->render(), $_ll2y);
                $_lO2y = "<td class='kcdPicker'><a id=\047{id}_timeopener\047 class='kcdTimeOpener\047></a></td>";
                $_lO2y = _lO0("{id}", $this->id, $_lO2y);
            } $_ll2z = _lO0("{id}", $this->id, $_lO2w);
            $_ll2z = _lO0("{dateopener}", $_lO2x, $_ll2z);
            $_ll2z = _lO0("{timeopener}", $_lO2y, $_ll2z);
            foreach ($this->CssStyles as $_llw => $_lOw) {
                $_ll2z = _lO0("{style}", $_llw . ":" . $_lOw . ";{style}", $_ll2z);
            } $_ll2z = _lO0("{style}", "", $_ll2z);
            $_ll2z = _lO0("{value}", $this->Value, $_ll2z);
            $_llg = _lO0("{id}", $this->id, $_ll2q);
            $_llg = _lO0("{style}", $this->_ll15, $_llg);
            $_llg = _lO0("{view}", $_ll2z, $_llg);
            $_llg = _lO0("{datepicker}", $_ll2x, $_llg);
            $_llg = _lO0("{timepicker}", $_ll2y, $_llg);
            if (_lOf($_llg)) {
                $_llg = _lO0("{settings}", $this->_ll1e(), $_llg);
            } $_llg = _lO0("{stylecss}", ($this->Width !== NULL) ? "width:" . $this->Width . ";" : "", $_llg);
            $_llg = _lO0("{trademark}", $_lO1d, $_llg);
            $_llg = _lO0("{version}", $this->_ll0, $_llg);
            return $_llg;
        }

        function registerscript() {
            $_lO2k = "<script type='text/javascript\047>if(typeof _libKCD==\047undefined'){document.write(unescape(\042%3Cscript type=\047text/javascript' src=\047{src}\047%3E %3C/script%3E\042));_libKCD=1;}</script>";
            $_ll1c = _lO0("{src}", $this->_ll2l() . "?" . md5("js"), $_lO2k);
            return $_ll1c;
        }

        function _lO2l() {
            $this->styleFolder = _lO0("\134", "/", $this->styleFolder);
            $_ll2m = trim($this->styleFolder, "/");
            $_lO2m = strrpos($_ll2m, "/");
            $this->_ll15 = substr($_ll2m, ($_lO2m ? $_lO2m : -1) + 1);
        }

        function registercss() {
            $this->_lO2l();
            $_lO2k = "<script type='text/javascript\047>if (document.getElementById('__{style}KCD\047)==null){var _head = document.getElementsByTagName(\047head')[0];var _link = document.createElement('link\047); _link.id = \047__{style}KCD';_link.rel='stylesheet\047; _link.href='{stylepath}/{style}/{style}.css';_head.appendChild(_link);}</script>";
            $_ll1c = _lO0("{style}", $this->_ll15, $_lO2k);
            $_ll1c = _lO0("{stylepath}", $this->_ll2n(), $_ll1c);
            return $_ll1c;
        }

        function startupscript() {
            $_lO2k = "var {id}; function {id}_init(){ {id}= new KoolDateTimePicker('{id}',{EnableDatePicker},{EnableTimePicker});}";
            $_lO2k.="if (typeof(KoolDateTimePicker)=='function'){{id}_init();}";
            $_lO2k.="else{if(typeof(__KCDInits)==\047undefined\047){__KCDInits=new Array();} __KCDInits.push({id}_init);{register_script}}";
            $_lO2n = "if(typeof(_libKCD)==\047undefined\047){var _head = document.getElementsByTagName(\047head')[0];var _script = document.createElement(\047script\047); _script.type='text/javascript'; _script.src=\047{src}';_head.appendChild(_script);_libKCD=1;}";
            $_ll2o = _lO0("{src}", $this->_ll2l() . "?" . md5("js"), $_lO2n);
            $_ll1c = _lO0("{id}", $this->id, $_lO2k);
            $_ll1c = _lO0("{EnableDatePicker}", $this->_lO2t ? "1" : "0", $_ll1c);
            $_ll1c = _lO0("{EnableTimePicker}", $this->_ll2u ? "1" : "0", $_ll1c);
            $_ll1c = _lO0("{register_script}", $_ll2o, $_ll1c);
            return $_ll1c;
        }

        function _ll2l() {
            if ($this->scriptFolder == "") {
                $_ll5 = _lO3();
                $_lO2o = substr(_lO0("\134", "/", __FILE__), strlen($_ll5));
                return $_lO2o;
            } else {
                $_lO2o = _lO0("\134", "/", __FILE__);
                $_lO2o = $this->scriptFolder . substr($_lO2o, strrpos($_lO2o, "/"));
                return $_lO2o;
            }
        }

        function _ll2n() {
            $_ll2p = $this->_ll2l();
            $_lO2p = _lO0(strrchr($_ll2p, "/"), "", $_ll2p) . "/styles";
            return $_lO2p;
        }

    }

    class kooldatepicker extends kooldatetimepicker {

        var $_ll2u = FALSE;
        var $TimeFormat = "";

        function init() {
            parent::init();
            $this->TimeFormat = "";
        }

    }

    class kooltimepicker extends kooldatetimepicker {

        var $_lO2t = FALSE;
        var $DateFormat = "";

        function init() {
            parent::init();
            $this->DateFormat = "";
        }

    }

} ?>