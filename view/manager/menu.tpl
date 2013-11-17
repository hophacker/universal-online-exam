{include file="head.tpl"}
{php}
    $isManager = true;
    $docRoot = getenv("DOCUMENT_ROOT");
    include_once($docRoot . "/logic/private/class/session.php");
    if (!session::check($isManager))
        header("Location: ". $docRoot . "/logic/public/Login.php");
    
{/php}
<link href="{$pubDir}/css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{$pubDir}/script/menu.js"></script>
</head>
<body>
    <style type="text/css">

    </style>
    <div class="menu_top">
        <div  class="log_info"><span>陈 同学，您好</span><img src="images/log_out.png" title="退出" class="log_out"></img></a>
        </div>
    </div>
    <div id="menu">
        <ul class="menu">
            <!-- 学生导航  
            <li><a href="" class="parent"><span >&nbsp;&nbsp;首页通知&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span >&nbsp;&nbsp;个人资料&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span>&nbsp;&nbsp;修改密码&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span >&nbsp;&nbsp;参加考试&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span >&nbsp;&nbsp;成绩查询&nbsp;&nbsp;</span></a></li>
           结束 -->


            <!-- 管理员导航 -->
            <li><a href="" class="parent"><span >&nbsp;&nbsp;首页通知&nbsp;&nbsp;</span></a>
            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;用户设定&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="" ><span>添加管理员</span></a>
                    </li>
                    <li><a href=""><span>删除管理员</span></a>
                    </li>
                    <li><a href=""><span>查看管理员</span></a>
                    </li>          
                </ul>

            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;学员管理&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="" ><span>考试分配</span></a>
                    </li>
                    <li><a href=""><span>查看修改</span></a>
                    </li>        
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;试题维护&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="javascript:void(0);" class="parent" ><span>选择题维护</span></a>
                        <ul>
                            <li><a href="" ><span>添加选择题</span></a>
                            </li>
                            <li><a href=""><span>查询选择题</span></a>
                            </li>        
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="parent" ><span>判断题维护</span></a>
                        <ul>
                            <li><a href="" ><span>添加判断题</span></a>
                            </li>
                            <li><a href=""><span>查询判断题</span></a>
                            </li>        
                        </ul>
                    </li> 
                    <li><a href="javascript:void(0);" class="parent" ><span>解答题维护</span></a>
                        <ul>
                            <li><a href=""><span>添加解答题</span></a>
                            </li>
                            <li><a href=""><span>查看解答题</span></a>
                            </li>        
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="" ><span>添加下载中级试卷</span></a>
                    </li>           
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;考试管理&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="" ><span>考试设定</span></a>
                    </li>
                    <li><a href=""><span>考试查看</span></a>
                    </li>
                    <li><a href="" ><span>试卷批阅</span></a>
                    </li>
                    <li><a href=""><span>成绩统计</span></a>
                    </li>             
                </ul>
            </li>
            <li><a href="" class="" ><span>修改密码</span></a>
            </li>
            <li><a href="" class="" ><span>学院更改</span></a>
            </li> 
            <li><a href="" class="" ><span>通知发布</span></a>
            </li>  
            <li><a href=""><span>&nbsp;&nbsp;问题反馈&nbsp;&nbsp;</span></a></li>
            <!-- 结束 -->
        </ul>

    </div>
    <br/>
    <a  style="display:none" href="http://apycom.com/"></a>
