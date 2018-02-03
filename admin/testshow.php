<?php

if($_GET ==null and $_GET["date"] == ''){
	$_GET["date"] = 0;
}

$net = <<<ttt
<!DOCTYPE html>
<html>
<head>
	<title>预览页面</title>
</head>
<body>
<a href="../testindex.html" target="view_window">首页</a>
<a href="../news/testindex.html" target="view_window">新闻中心</a>

<a href="../news/detail_{$_GET["date"]}_01.html" target="view_window">详细</a>
<br><br>


<a href="testshow.php?b=true">确定发布</a>
<a href="testshow.php?b=false&date={$_GET["date"]}">撤销发布</a>
</body>
</html>
ttt;



if($_GET!=null and $_GET['b']=="true"){
	$riqi = date('Ymd' , time());
	$path = "../index.html"; //---- 文件或目录路径
	$tmp = "backups/index--".$riqi.".html"; //---- tmp目录（/tmp)
	$wee  = rename($path, $tmp);
	//$wee  = rename("index1.html", "index3333.html");
	if ($wee == 1)
	{
		echo "首页备份成功 /www/admin/".$tmp.'<br>';

		$path1 = "../testindex.html"; //---- 文件或目录路径
		$tmp1 = "../index.html"; //---- tmp目录（/tmp)
		$wee1  = rename($path1, $tmp1);
		//$wee  = rename("index1.html", "index3333.html");
		if ($wee1 == 1)
		{
			echo "首页生成成功 /www/index.html";
			echo "<br>";
		}
		else
		{
			echo "首页生成失败";

		}

		$path2 = "../news/testindex.html"; //---- 文件或目录路径
		$tmp2 = "../news/index.html"; //---- tmp目录（/tmp)
		$wee2  = rename($path2, $tmp2);
		//$wee  = rename("index1.html", "index3333.html");
		if ($wee2 == 1)
		{
			echo "新闻页生成成功 /www/news/index.html"."<br><br><br><br><br><a href='../index.html'>首页</a>";
			exit;
		}
		else
		{
			echo "新闻页生成失败";

		}
	}
	else
	{
		echo "首页备份失败";
		exit;
	}


}else{

}


if($_GET!=null and $_GET['b']=="false"){


	$filee = "view/index_bottm1.html";
	if(!is_readable($filee)){
		die ("$filee 不存在 你是不是点了两次<br><br><br><br><a href=\"article.php\">编辑页</a>");

	}

	$file12 = "view/index_bottm.html";

	if (!unlink($file12))
	{
		echo "删除失败". $file12 ."<br>";
		$file22 = "../news/detail_".$_GET["date"]."_01.html";

		if (!unlink($file22))
		{
			echo "删除失败 /www/admin/news/detail_".$_GET["date"]."_01.html<br>";
		}
		else
		{
			echo "删除成功 /www/admin/news/detail_".$_GET["date"]."_01.html<br>";
		}
	}
	else
	{
		echo "删除成功 ".$file12."<br>";


	}

	$file22 = "../news/detail_".$_GET["date"]."_01.html";

	if (!unlink($file22))
	{
		echo "删除失败 /www/admin/news/detail_".$_GET["date"]."_01.html<br>";
	}
	else
	{
		echo "删除成功 /www/admin/news/detail_".$_GET["date"]."_01.html<br>";
	}

	// 删除图片
	$Y = date('Y' , strtotime($_GET["date"]));
	$m = date('m' , strtotime($_GET["date"]));
	$d = date('d' , strtotime($_GET["date"]));
	$file32 = "../news/images/newsdetailed/".$Y."/".$m."/pict".$m.$d."_01.jpg";

	if (!unlink($file32))
	{
		echo "删除失败 /www/admin/news/images/newsdetailed/".$Y."/".$m."/pict".$m.$d."_01.jpg <br>";
	}
	else
	{
		echo "删除成功 /www/admin/news/images/newsdetailed/".$Y."/".$m."/pict".$m.$d."_01.jpg <br>";
	}

	$path10 = "view/index_bottm1.html"; //---- 文件或目录路径
	$tmp10 = "view/index_bottm.html"; //---- tmp目录（/tmp)
	$wee10  = rename($path10, $tmp10);

	if ($wee10 == 1)
	{
		echo "恢复模版成功 /www/admin/".$tmp10."<br>";

	}
	else
	{
		echo "恢复模版失败";

	}

}else{

}

echo $net;


?>

<br>
<br><br><br>
<a href="article.php">编辑页</a>

