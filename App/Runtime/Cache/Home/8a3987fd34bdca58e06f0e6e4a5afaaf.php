<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

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
    <title></title>
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>财监委</title>
  <link type="text/css" rel="stylesheet" href="/AUNET/Public/FAQSrc/content.css">
 <script>
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

#note{
	width:80%;
	border:none;
	margin-left:10px;
	font-size:25px;
	}

</style>
 
</head>

<body>


 
 <div id="wrap">
 <table width="99%" border="0" style="margin:25px 0px">
  <tbody>
    <tr>
      <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;FAQ&nbsp;&nbsp;</span><span style="font-size:24px">常见问题&amp;解答</span></td>
      </tr>
    <tr>
      <td width="27%" valign="top">
        <p><a href="index.html" class="slidebarlink">&gt;FAQ首页</a></p>
        <p><a href="faq_question.html" class="slidebarlink">&gt;常见问题</a></p>
        <p><a href="faq_financial.html" class="slidebarlink">&gt;财务部</a></p>
        <p><a href="faq_secretary.html" class="slidebarlink">&gt;秘书部</a></p>
        <p><a href="faq_media.html" class="slidebarlink">&gt;新媒体工作室</a></p>
        <p><a href="faq_art.html" class="slidebarlink">&gt;文艺拓展部</a></p>
        <p><a href="faq_supervise.html" class="slidebarlink now">▶&nbsp;财监委</a></p>
        <p><a href="faq_guide.html" class="slidebarlink">&gt;社团成立指南</a></p>
        </td>
      <td width="73%" align="left" valign="top"> 
      <div class="content_container">
      	<div class="content_title">Q：财监委的职能是什么？</div>
        <div class="content_text">A：社团财务监督委员会（以下简称财监委）是在校团委指导下，社团委员会的下设机构。 财监委负责监督社团活动的财务收支，但不干涉社团的规范运营。管理社团发展基金。</div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">Q：什么是社团发展基金？</div>
        <div class="content_text">A：社团发展基金由全校社团由全校社团每次招新所收会费的40%组成，是全校社团发展的一份重要保障，是社团组织活动所资金的主要来源。</div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">Q：怎样才能申请社团发展基金？</div>
        <div class="content_text">A：申请社团发展基金的活动必须是具有一定影响力、不只是面对协会内部成员的活动。社团文化节以及风采月的活动以及子活动不在申请范围内。</div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">Q：申请社团发展基金的步骤是什么？</div>
        <div class="content_text">
        A：1.协会在邮箱cwjd_2@163.com (密码dajiade）自行下载社团发展基金申请表，在活动一周前按申请表格要求填好后连同活动策划书、预算表交给财监委在该社团联系人，同时把此三项的电子档发到社团财务监督委员会公邮cwjd_1@163.com<br>
2.活动时由财监委在该社团联系人去监督活动效果。<br>
3.协会需在活动结束后一周内把活动发票及决算表交给财监委在该社团联系人。发票和决算表由财监委在该社团联系人收齐后，交给财监委报账，报账通过后经由财监委发放社团发展基金。（注意：发放时财监委会发放收据，请协会妥善保管，这会作为协会现金流水账的记账凭证。）
        </div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">Q：社团参加校外高水平竞赛如何申请社团发展基金？</div>
        <div class="content_text">A：社团参加比赛的资金只予以参赛费用补助。只有在参赛前，主办方向校团委发送邀请函，得到社团联合会审查通过和校团委的审核通过与支持的参赛活动才允许在比赛结束后申请参赛费用补助。社团联合会在社团参赛之前须通过财监委、社团联合会和校团委的预算审核，确定社团参赛的等级与规模（例如参赛人数），并与社团协商做好参赛费用的预算。</div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">Q： 社团的财务负责人换届了怎么办？</div>
        <div class="content_text">A：协会在邮箱cwjd_2@163.com (密码dajiade）下载换届表格，将电子档发至社团财务监督委员会公邮cwjd_1@163.com，并将纸质档表格交给财监委在该社团联系人。</div>
      </div>
      </td>
    </tr>
    </tbody>
</table>

 
 </div>

</body>
</html>

<div id="footer">
    <p class="friendlink">友情链接</p>
</div>
</body>
</html>