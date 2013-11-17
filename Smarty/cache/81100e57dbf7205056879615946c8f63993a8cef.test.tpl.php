<?php /*%%SmartyHeaderCode:18804939155103fb7adf06a4-21653295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81100e57dbf7205056879615946c8f63993a8cef' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/test.tpl',
      1 => 1359215044,
      2 => 'file',
    ),
    'e79f370a80cd415eb56511e46f9306b3bd1718f5' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/head.tpl',
      1 => 1359132757,
      2 => 'file',
    ),
    '78686fa2a0fe7a42155e70500fb2cee0762b3d9e' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/CONFIGS',
      1 => 1358561695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18804939155103fb7adf06a4-21653295',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5103fb7af2b8c1_98616779',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5103fb7af2b8c1_98616779')) {function content_5103fb7af2b8c1_98616779($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="./css/common.css" rel="stylesheet" type="text/css" />
        <link href="./css/test.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/ico" />

        
        
        <script type="text/javascript" src="./script/jquery.js"></script> 
        <script type="text/javascript" src="./script/test.js"></script>
        <script type="text/javascript" src="./script/common.js"></script>
        
        <title>考试页面</title>

        
</head>
<body>
    <div class = "container">
         <div class = "test_content">
         	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b> 
         	<form class = "form" id = 'form' name = 'form' action = 'asd.php' method = 'post'>
               <div class="sub_title">初级党校考试</div>
            <!--                                         单选题开始                      -->
         		 	<h4>一、判断题</h4>
         		     <ul>
         		     	<li class = "li_odd li_top"  id="q1">
         		     	    <div class = 'q_con'>
                           1、中国共产党第一次全国代表大会通过了党的纲领，确定党的奋斗目标是推翻资产阶级政权，建立无产阶级专政，消灭生产资料私有制，直至消灭贫富差距，实现共产主义。
                         </div>
                         <div class = 'j_con'>
                           <input type="radio" name = "an1" value="Y" id="an1" >对
                           <input type="radio" name = "an1" value="N" id="an1" >错
                        </div>
         		     	</li>
         		     	<li class = "li_even"  id ="q2">
         		     	   <div class = 'q_con'>
                           2、随着第一个五年建设计划的实施，我国对农业、手工业和工商业进行了有系统的社会主义改造。
                         </div>
                         <div class = 'j_con'>
                           <input type="radio" name = "an2" value="Y" id="an2" >对
                           <input type="radio" name = "an2" value="N" id="an2" >错
                        </div>
         		     	</li>
         		     </ul>
            <!--                               单选题结束                              -->

            <!--                               多选题开始                              -->
               <h4>二、单选题</h4>
               <ul>
                 <li class = "li_odd li_top" id = "q11">
                   <div class = 'q_con'>
                          11、下列关于延安整风运动的表述，不准确的是_______。
                   </div>
                   <div class = 's_cho_con'>
                           <div><input type="radio" name = "an11" value="A" id="an11" >A、在思想上清算了“左”的和右的错误</div>
                           <div><input type="radio" name = "an11" value="B" id="an11" >B、实行了“惩前毖后，治病救人”的方针</div>
                           <div><input type="radio" name = "an11" value="C" id="an11" >C、确立毛泽东思想为全党的指导思想</div>
                           <div><input type="radio" name = "an11" value="D" id="an11" >D、为新民主主义革命在全国的胜利奠定了思想基础</div>
                   </div>
                 </li>
                 <li class = "li_even" id = "q12">
                   <div class = 'q_con'>
                          12、下列关于延安整风运动的表述，不准确的是_______。
                   </div>
                   <div class = 's_cho_con'>
                           <div><input type="radio" name = "an12" value="A" id="an12" >A、在思想上清算了“左”的和右的错误</div>
                           <div><input type="radio" name = "an12" value="B" id="an12" >B、实行了“惩前毖后，治病救人”的方针</div>
                           <div><input type="radio" name = "an12" value="C" id="an12" >C、确立毛泽东思想为全党的指导思想</div>
                           <div><input type="radio" name = "an12" value="D" id="an12" >D、为新民主主义革命在全国的胜利奠定了思想基础</div>
                   </div>
                 </li>
               </ul>
               <!--                                     多选题结束                    -->
               <!--                                     解答题开始                    -->
              <h4>三、简答题</h4>
               <ul>
                  <li class = "li_even"  id = "q21" >
                      <div class = 'q_con'>
                             21、关于延安整风运动。
                      </div>
                      <div class = 'a_con'>
                        <!--<textarea> </textarea>  这个标签要紧挨在一起不然会出现一些问题-->
                          <textarea id = 'an21' ></textarea>
                      </div>
                  </li>
               </ul>
               <!--                                     解答题结束                     -->
          	</form>
         	<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>  
         </div>
         <div class = "test_right">
            <div class = "co_part">
              <div class = 'info_part'>
                <div class = 'time_left'>
                </div>
                <div class = 'per_info'>
                 <span>姓名:</span>asd 
                </div>
                <div class = 'per_info'>
                  <span>院系:</span>计算机科学与技术学院的名字
                </div>
                <div class = 'per_info'>
                  <span>专业:</span>asd asd
                </div>
                <div class = 'per_info'>
                  <span>班级:</span>阿斯顿啊说
                </div>
              </div>
              <p>判断题</p>
              <table >
                <tbody>
                    <tr>
                        <td id = 'b1'>1</td>
                        <td id = 'b2'>2</td>
                        <td id = 'b3'>3</td>
                        <td id = 'b4'>4</td>
                        <td id = ''>5</td>
                        <td id = ''>6</td>
                        <td id = ''>7</td>
                        <td id = ''>8</td>
                        <td id = ''>9</td>
                        <td id = ''>10</td>
                     </tr>
                </tbody>
              </table>
              <p>选择题</p>
              <table >
                <tbody>
                    <tr>
                        <td id = 'b11'>11</td>
                        <td id = 'b12'>12</td>
                        <td id = ''>13</td>
                        <td id = ''>14</td>
                        <td id = ''>15</td>
                        <td id = ''>16</td>
                        <td id = ''>17</td>
                        <td id = ''>18</td>
                        <td id = ''>19</td>
                        <td id = ''>20</td>
                    </tr> 
                </tbody>
              </table>
              <p>解答题</p>
              <table >
                <tbody>
                    <tr>
                        <td id = 'b21' >21</td>
                        <td id = 'b22' >22</td>
                        <td id = ''>23</td>
                        <td id = ''>24</td>
                        <td id = ''>25</td>
                        <td id = ''>26</td>
                        <td id = ''>27</td>
                        <td id = ''>28</td>
                        <td id = ''>29</td>
                        <td id = ''>30</td>
                    </tr> 
                </tbody>
              </table>
              <div class = 'quick_help'>
                <span>&nbsp;</span>未答题 <span class = 'has_an'>&nbsp;</span>已答题
              </div>
              <div class = 'submit_part'>
                 <input type = 'button' value = '提交试卷' id = 'submit_bt'>
              </div>
            </div>
         </div>
    </div>
</body><?php }} ?>