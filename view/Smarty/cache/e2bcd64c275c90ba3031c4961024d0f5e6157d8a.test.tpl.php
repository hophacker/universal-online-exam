<?php /*%%SmartyHeaderCode:824160820510156c246ecc2-37343483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2bcd64c275c90ba3031c4961024d0f5e6157d8a' => 
    array (
      0 => '/home/ark/NetBeansProjects/yangda/view/test.tpl',
      1 => 1359041701,
      2 => 'file',
    ),
    '0dd7cb07d87c9737103c2c6a8ed8d0a175f6b2e6' => 
    array (
      0 => '/home/ark/NetBeansProjects/yangda/view/head.tpl',
      1 => 1359027915,
      2 => 'file',
    ),
    '44f856c28c4af7a21b79856ce2a7b41afde14bc7' => 
    array (
      0 => '/home/ark/NetBeansProjects/yangda/view/CONFIGS',
      1 => 1358561306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824160820510156c246ecc2-37343483',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510156c2535150_88316969',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510156c2535150_88316969')) {function content_510156c2535150_88316969($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="css/common.css" rel="stylesheet" type="text/css" />
        <link href="css/test.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />

        <script type="text/javascript" src="script/jquery-1.9.0.js"></script>
        <script type="text/javascript" src="script/test.js"></script>
        <script type="text/javascript" src="script/common.js"></script>
        
        <title>考试页面</title>
</head>
<body>
    <div class = "container">
         <div class = "test_content">
         	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b> 
         	<form class = "form">
               <div class="sub_title">初级党校考试</div>
            <!--                                         单选题开始                      -->
         		 	<h4>一、单选题</h4>
         		     <ul>
         		     	<li class = "li_odd li_top"  id="q1">
         		     	    <div class = 'q_con'>
                           1、中国共产党第一次全国代表大会通过了党的纲领，确定党的奋斗目标是推翻资产阶级政权，建立无产阶级专政，消灭生产资料私有制，直至消灭贫富差距，实现共产主义。
                         </div>
                         <div class = 's_cho_con'>
                           <input type="radio" name = "an1" value="Y" id="an1" >对
                           <input type="radio" name = "an1" value="N" id="an1" >错
                        </div>
         		     	</li>
         		     	<li class = "li_even"  id ="q2">
         		     	   <div class = 'q_con'>
                           2、随着第一个五年建设计划的实施，我国对农业、手工业和工商业进行了有系统的社会主义改造。
                         </div>
                         <div class = 's_cho_con'>
                           <input type="radio" name = "an2" value="Y" id="an2" >对
                           <input type="radio" name = "an2" value="N" id="an2" >错
                        </div>
         		     	</li>
         		     </ul>
            <!--                               单选题结束                              -->

            <!--                               多选题开始                              -->
               <h4>二、多选题</h4>
               <ul>
                 <li class = "li_odd li_top" id = "q21">
                   <div class = 'q_con'>
                          21、下列关于延安整风运动的表述，不准确的是_______。
                   </div>
                   <div class = 'm_cho_con'>
                           <div><input type="radio" name = "an21" value="A" id="an21" >A、在思想上清算了“左”的和右的错误</div>
                           <div><input type="radio" name = "an21" value="B" id="an21" >B、实行了“惩前毖后，治病救人”的方针</div>
                           <div><input type="radio" name = "an21" value="C" id="an21" >C、确立毛泽东思想为全党的指导思想</div>
                           <div><input type="radio" name = "an21" value="D" id="an21" >D、为新民主主义革命在全国的胜利奠定了思想基础</div>
                   </div>
                 </li>
                 <li class = "li_even" id = "q22">
                   <div class = 'q_con'>
                          21、下列关于延安整风运动的表述，不准确的是_______。
                   </div>
                   <div class = 'm_cho_con'>
                           <div><input type="radio" name = "an22" value="A" id="an22" >A、在思想上清算了“左”的和右的错误</div>
                           <div><input type="radio" name = "an22" value="B" id="an22" >B、实行了“惩前毖后，治病救人”的方针</div>
                           <div><input type="radio" name = "an22" value="C" id="an22" >C、确立毛泽东思想为全党的指导思想</div>
                           <div><input type="radio" name = "an22" value="D" id="an22" >D、为新民主主义革命在全国的胜利奠定了思想基础</div>
                   </div>
                 </li>
               </ul>
               <!--                                     多选题结束                    -->
               <!--                                     解答题开始                    -->
               <ul>
                  <li>
                   <div class = 'q_con'>
                          21、下列关于延安整风运动的表述，不准确的是_______。
                   </div>
                  </li>
               </ul>
               <!--                                     解答题结束                     -->
          	</form>
         	<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>  
         </div>
         <div class = "test_right">
            <div class = "co_part">
            	快速选题块
            </div>
         </div>
    </div>
</body><?php }} ?>