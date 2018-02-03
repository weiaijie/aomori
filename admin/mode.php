<?php 

if($_GET["i"] == "1"){
	index();
	exit();
}


if ($_POST!=null and $_POST["title"]!=null and $_POST["date"]!=null and $_POST["content"]!=null) {
	nene();//新闻中心备份
	newindex();//新闻中心的更新
	img();//对图片的处理
	news();//新的新闻
	index();//首页新闻的更新
	}else{


	header("location:article.php?ne=1");

	}


//首页新闻的更新
function index(){
	//$fh= file_get_contents('http://www.aomori.cn/news/index.html');
$fh= file_get_contents('./view/index_bottm.html');
preg_match_all('|<h2>【(.*?)】<\/h2>|i',$fh,$e);
//preg_match('|<strong>(.*?)<\/strong>|i',$fh,$m);
preg_match_all('|<strong>(.*?)<\/strong>|i',$fh,$m);
for ($i=0; $i < 3; $i++) { 
	# code...
	preg_match_all('/\d+/',$m[1][$i],$arr);
	$m[1][$i] = join('',$arr[0]);
}
for ($i=0; $i < 3; $i++) { 
	# code...
	$a[$i] = date( 'Y/m/d' , strtotime($m[1][$i]));
}
ob_start();
include("indexview.php");
//$content = ob_get_contents();//取得php页面输出的全部内容

$fp = fopen("../testindex.html", "w");
fwrite($fp, $indeex1);
fclose($fp);
header("location:testshow.php?date=".$_POST['date']."");
}


//新闻中心备份
function nene(){
	$file = 'view/index_bottm1.html';
	if (is_readable($file) == false) {
		$file21 = 'view/index_bottm.html';
		$newfile = 'view/index_bottm1.html'; //必须有写入权限
		if (file_exists($file21) == false)
		{
			die ('备份失败 请手动操作 路径为 /www/admin/view/index_bottm.html');
		}
		$result = copy($file21, $newfile);
		if ($result != false)
		{
			echo '备份成功'.$newfile;
		}

	} else {
		$file13 = "view/index_bottm1.html";
		if (!unlink($file13))
		{
			echo ("删除失败 $file13");
		}
		else
		{
			echo ("删除成功 ".$file13."<br>");
			$file21 = 'view/index_bottm.html';
			$newfile = 'view/index_bottm1.html'; //必须有写入权限
			if (file_exists($file21) == false)
			{
				die ('备份失败 请手动操作 路径为 /www/admin/view/index_bottm.html');
			}
			$result = copy($file21, $newfile);
			if ($result != false)
			{
				echo '备份成功'.$newfile."   时间为：".date('H:i' , time());
			}
		}
	}
}


//新闻中心的更新
function newindex(){

	$lll1 = $_POST['date'];
	$date12 = date( 'Y-m-d' , strtotime($lll1));
    //echo $lll1.'<br>'.$date12.'<br>'.$_POST["title"];

	$txt = <<<hhh
				<li class="clearfix half_940_50">
							<span class="c1 block">
								<span class="date"><strong>・{$date12}</strong> | </span>
	<a href="./detail_{$lll1}_01.html"><h2>【{$_POST["title"]}】</h2></a>
							</span>
						</li>
hhh;
$abcd = file_get_contents('./view/index_bottm.html');
 //echo $txt."\n".$abcd;

$fp1 = fopen("./view/index_bottm.html", "w");
fwrite($fp1,$txt."\n".$abcd);
fclose($fp1);
ob_start();
include("./view/index_top.html");

include("./view/index_bottm.html");
$content2 = ob_get_contents();//取得php页面输出的全部内容
$fp2 = fopen("../news/testindex.html", "w");
fwrite($fp2, $content2);
fclose($fp2);

//header("location:testshow.php");

}
//每次插入到index_bottm.html的内容

//新的新闻
function news(){

	session_start();
	$_SESSION['date'] = $_POST['date'];
    $time1 = date( 'Y.m.d' , strtotime($_POST['date']));
	$title = $_POST['title'];
	$keyword = $_POST['keyword'];
	$content = $_POST['content'];
	$ck = $_POST['ck'];
	$znjp = $_POST['znjp'];
	$Y1 = date('Y' , strtotime($_POST['date']));
	$m1 = date('m' , strtotime($_POST['date']));
	$d1 = date('d' , strtotime($_POST['date']));
	$path1 = "images/newsdetailed/".$Y1."/".$m1."/pict".$m1.$d1."_01.jpg";
ob_start();
include("./view/news.php");
$content3 = ob_get_contents();//取得php页面输出的全部内容
$fp3 = fopen("../news/detail_".$_POST['date']."_01.html", "w");
fwrite($fp3, $content3);
fclose($fp3);
header("location:testshow.php");

}


//对图片的处理  只能用jpg 其他格式不能用  模板里图片格式是.jpg
function img(){
	// 允许上传的图片后缀

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
//echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 704800)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		//echo "错误：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		/*
		echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
		*/
		
		$Y = date('Y' , strtotime($_POST['date']));
		$m = date('m' , strtotime($_POST['date']));
		$d = date('d' , strtotime($_POST['date']));
		$path = "../news/images/newsdetailed/".$Y."/".$m;
		if (!file_exists($path)){
            mkdir($path,0777,true); 
        }
            
		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
		if (file_exists($path."/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " 文件已经存在。 ";
		}
		else
		{
      
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			//move_uploaded_file($_FILES["file"]["tmp_name"], $path."/" . $_FILES["file"]["name"]);
			$date= "pict".$m.$d."_01";//得到当前时间,如;20070705163148
		
     $fileName = $_FILES['file']['name'];//得到上传文件的名字
     $name = explode('.',$fileName);//将文件名以'.'分割得到后缀名,得到一个数组
     $newPath = $path ."/" . $date .'.'. $name[1];//得到一个新的文件为'20070705163148.jpg',即新的路径
     $oldPath = $_FILES["file"]["tmp_name"];//临时文件夹,即以前的路径
			rename($oldPath , $newPath);
			echo "文件存储在: " . $path."/" . $_FILES["file"]["name"];
			//$name10 = $path."/".$date.".jpg";
			chmod($newPath, 0644);
		}
	}
}
else
{
	echo "非法的文件格式";
}
}
?>