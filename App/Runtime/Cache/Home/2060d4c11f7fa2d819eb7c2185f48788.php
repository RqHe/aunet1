<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/general.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/top.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/banner.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/buttom.css">
    <script type="text/javascript" src="/AUNET/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/AUNET/Public/NewsSrc/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/AUNET/Public/NewsSrc/js/jquery.easing.min.js"></script>


    <style>

        .slideimgs {
            height: 600px;
            overflow: hidden;
        }

        #flexsliderarea {
            width: 100%;
            height: 600px;
        }
    </style>




    <script>

        $(function () {
            $(".flexslider").flexslider({
                animation: "slide",
                slideshowSpeed: 4000, //展示时间间隔ms
                animationSpeed: 400, //滚动时间ms
                touch: true, //是否支持触屏滑动

            });
        });

        $(document).ready(
                function () {

                    $(".a-top").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });

                    $("#downlist").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });


                    $("#downlist").mouseleave(
                            function (e) {
                                $("#downlist").slideUp("fast");
                            });

                });
    </script>
    <script>
        $(document).ready(
                function () {

                    $(".a-top").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });

                    $("#downlist").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });


                    $("#downlist").mouseleave(
                            function (e) {
                                $("#downlist").slideUp("fast");
                            });

                });
    </script>
    <style>
        .slidebarlink {
            padding: 12px 12px;
            font-size: 22px;
            margin: 15px;
            display: block;
            color: #444e41;
            transition: .2s;
            border-radius: 3px;

        }

        .now {
            color: #FFFFFF;
            background-color: #74b05c;
        }

        .slidebarlink:hover {
            color: #FFFFFF;
            background-color: #74b05c;
        }

        .photos {
            height: 180px;
            width: 180px;
            border: 1px solid #74B05C;
        }

    </style>
</head>
<body>
<div id="header">

    <table width="1200px" border="0" style="background:#74b05c;margin:0px auto;">
        <tbody>
        <tr>
            <td width="33%" align="center" valign="middle"><img src="/AUNET/Public/NewsSrc/im/dh.png" width="380" height="106"
                                                                alt=""/>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('Home/Index/index');?>"
                                                                                        style="color: #FFFFFF">首页</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">新闻</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">社联</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">社团</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">其他</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="downlist" style="display:none;">
    <table width="1200px" border="0" style="margin:0px auto;">
        <tbody>
        <tr>
            <td width="36%" align="center" valign="middle">&nbsp;


            </td>
            <td width="13%" align="left" valign="top">
                <p><a href="<?php echo U('/Grade/Index/index');?>" class="downlistlink">评分系统</a></p>

                <p><a href="<?php echo U('/Material/Index/index');?>" class="downlistlink">资源申请</a></p>

                <p>
                    <a href="<?php echo U('/Design/Index/index');?>" class="downlistlink">设计委任栏</a></p>

                <p>
                    <a href="" class="downlistlink">资料下载</a></p>
            </td>
            <td width="13%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/News/index');?>" class="downlistlink">最新动态</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Activity/index');?>" class="downlistlink">活动预告</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/BroadCast/index');?>" class="downlistlink">通告栏</a>
                </p>

            </td>
            <td width="13%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/AU/index');?>" class="downlistlink">社联简介</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/AU/department');?>" class="downlistlink">社联机构</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/AU/regulation');?>" class="downlistlink">制度汇编</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/AU/event');?>" class="downlistlink">社联大事记</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/WeiZai/index');?>" class="downlistlink">微仔说</a>
                </p>

                <p>&nbsp;</p>

            </td>
            <td width="13%" align="left" valign="top">&nbsp;

            </td>
            <td width="10%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/Other/member');?>" class="downlistlink">会员维权</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Other/advice');?>" class="downlistlink">投诉建议</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Other/contact');?>" class="downlistlink">联系我们</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/FAQ/index');?>" class="downlistlink">FAQ</a>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="wrap">
    <table width="99%" border="0" style="margin:25px 0px">
        <tbody>
        <tr>
            <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;社联&nbsp;&nbsp;</span><span
                    style="font-size:24px">Association Union</span></td>
        </tr>
        <tr>
            <td width="27%" valign="top">
                <p><a href="<?php echo U('/Home/AU/index');?>" class="slidebarlink">&gt;社联简介</a></p>

                <p><a href="<?php echo U('/Home/AU/department');?>" class="slidebarlink">&gt;社联机构</a></p>

                <p><a href="<?php echo U('/Home/AU/regulation');?>" class="slidebarlink">&gt;制度汇编</a></p>

                <p><a href="<?php echo U('/Home/AU/event');?>" class="slidebarlink">&gt;社联大事记</a></p>

                <p><a href="<?php echo U('/Home/WeiZai/index');?>" class="slidebarlink now">▶&nbsp;微仔说</a></p>
            </td>
            <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>微仔说</title>
 <script type="text/javascript">
  $(document).ready(
	   function() {
		 
		   $(".a-top").mouseenter(
		   function(e) {
            $("#downlist").slideDown("fast");	
        });
		
		$("#downlist").mouseenter(
		   function(e) {
            $("#downlist").slideDown("fast");	
        });
		
	
		
		$("#downlist").mouseleave(
		   function(e) {
            $("#downlist").slideUp("fast");	
        });
		
    });
 </script>
 <script type="text/javascript">
 function showPic(){
 	var picnames = new Array("0","0船","566轮滑社0","A+U协会0","is口语协会","爱唱歌协会0","爱心协会","安全知识普及协会0","碧水环保","泊心瑜伽协会0","创业者协会","大学生辩论社0","德语协会0","笛箫协会","电脑DIY协会0","电影协会0","电子商务协会0","读书会0","铎声文学社","法律协会0","法语协会0","风岚动漫社","服装设计与剪裁协会","国防协会","海之盾0","红十字队0","华中篆刻","滑板社0","吉他协会","计算机协会0","记忆协会0","经济与实践协会","科幻协会0","口语沙龙","蓝天剧社","篮球协会0","美食协会0","魔术协会","排球协会","乒乓球协会0","桥牌协会0","日语协会0","摄影协会","市场营销协会","手绘POP协会0","书画协会","数学建模协会0","台球协会0","跆拳道","陶艺学社0","图书馆学生管理委员会0","网球协会","微梦社会工作者空间协会0","未来精英俱乐部0","未来领导者","武术协会","夏雨诗社0","象棋人生","心语手语协会0","星空网球俱乐部0","学生国际交流协会0","演讲与口才协会0","英语协会","瑜山国学社2","羽毛球协会0","喻家山棋友会0","喻园舞社","援之缘支教协会0","远征协会","职业发展互动营0","自行车协会0","足球协会0");
 	var lists = document.getElementById("piclists");
	for(var i=0;i<picnames.length;i++){
		var picnode = document.createElement("div");
		picnode.className = "photolists";
		picname = picnames[i];
		picnode.innerHTML = "<a href='/AUNET/Public/AUSrc/shetuan/"+picname+".jpg' target='_blank/'><img src='/AUNET/Public/AUSrc/shetuan/"+picname+".jpg'/></a>";
		lists.appendChild(picnode);
	}
 }
 </script>
 <style>
 .slidebarlink{
	 padding:12px 12px;
	 font-size:22px;
	 margin:15px;
	 display:block;
	 color:#444e41;
	 transition:.2s;
	 border-radius:3px;
	 
	 }
	 
	 .now{color:#FFFFFF;
	background-color:#74b05c;}
	 
.slidebarlink:hover{
	color:#FFFFFF;
	background-color:#74b05c;
}

.photolists{
	height:180px;
	width:180px;
	border:1px solid #74B05C;
	display:inline-block;
	margin:10px;
}

.photolists img{
	width:180px;
	height:180px;
}

 </style>
 
</head>

<body onload="showPic();">

      <td width="73%" align="center" valign="top" id="piclists">
	  <div style="text-align:right; margin-right:70px;"><a href="index.html" >&lt;&lt;返回</a><br/></div>
      </td>





</body>
</html>

        </tr>
        </tbody>
    </table>


</div>
<div id="footer">
    <p class="friendlink">友情链接</p>
</div>

</body>
</html>