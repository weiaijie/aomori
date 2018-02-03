<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<style media="screen"></style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css"></meta>
<meta name="author" content="青森旅游信息官方网站">
<?php 
echo '<meta name="Keywords" content="日本,青森,灵魂,JAL,弘前,煎饼汁,教室,枫叶,十和田湖游船,'.$keyword.'"/>';
 ?>
<meta name="Description" content="News详细 | 玩转青森 青森旅游信息官方网站"/>
<link rel="stylesheet" type="text/css" media="screen,print" href="../css/import.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../js/DropDownMenu.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33157173-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<title>News详细 | 玩转青森 青森旅游信息官方网站</title>
</head>
<body class="top">
<div id="wrapper"><!--wrapper-->
	<div id="container"><!--container-->
		<div id="header"><!--header-->	
			
		</div><!--header [End]-->	
		
		<div id="contents" class="news"><!--contents-->
			<div class="detailBox">
              <h2 class="detailHead">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="borderNone" >
				  <tr>
				    <td width="888">
				    <?php 
				    	echo '<span class="year">'.$time1.'</span>';
				    	echo '<span class="title">【'.$title.'】</span>';
				     ?>
						<span class="text"></span>           	      </td>
                    <td width="200">
						<a href="index.html"><span class="title">新闻一览</span></a>
                    </td>
			      </tr>
			  	 </table>
			  </h2>

				<!--div class="contentBox"-->
					<div align="center">
<br /><br />
<table width="462" border="0" cellspacing="0" cellpadding="0" class="borderNone">
<tr>
	<td align="left">
<?php echo $_POST['content']; ?>
<br />
<?php 
if ($_POST["ck"]!=null and $_POST['ck']!="") {
	echo '【参考网站】<a href="'.$ck.'" target="_blank"><font color="#0000FF"><u>'.$title.'</u></font></a>【'.$znjp.'】';
}else{}
 ?>
    </td>
</tr>
<tr>
<?php 
if ($_POST["ck"]!=null and $_POST['ck']!="") { 
echo '<td width="462" height="" align="left" valign="top"><a href="'.$ck.'" target="_blank"><img src="'.$path1.'" alt="'.$title.'" class="hoverFade" style="max-width: 600px;"/></a></td>';
//echo '<td width="462" height="" align="left" valign="top"><a href="'.$ck.'" target="_blank"><img src="images/newsdetailed/'.$Y.'"/"'.$m.'"/"'.$date .'"."'. $name[1].'" alt="'.$title.'" class="hoverFade" /></a></td>';
}else{
echo '<td width="462" height="" align="left" valign="top"><a href="#" target="_blank"><img src="'.$path1.'" alt="'.$title.'" style="max-width: 600px;"/></a></td>';
	//echo '<td width="462" height="" align="left" valign="top"><a href="#" target="_blank"><img src="images/newsdetailed/'.$Y.'"/"'.$m.'"/"'.$date .'"."'. $name[1].'" alt="'.$title.'" /></a></td>';
}
 ?>
  <!--<td width="462" height="" align="left" valign="top"><a href="http://www.scn-aomori.com/scenery-006.html" target="_blank"><img src="images/newsdetailed/2017/08/pict0821_01.jpg" alt="十和田湖游船" class="hoverFade" style="max-width: 600px;" /></a></td>-->
</tr>
</table>

<br />
<br />

</div>
</div>
<!--/div-->

	  </div>
<!--contents [End]-->

		<div id="footer"><!--footer-->
			
		</div><!--footer [End]-->
  </div><!--container [End]-->
</div><!--wrapper [End]-->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F068d4bdc662de70ae89bff7c0a637984' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
	$(function(){
			$("#header").load("../include/header.html",function(){
				hoverFade();
				imageOver();
				wechatTk();
			});
	     $("#footer").load("../include/footer.html",function(){
	     	hoverFade();
				imageOver();
	     });
  });
</script>
</body></html>