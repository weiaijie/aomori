<?php
if($_GET["ne"] == "1"){
	echo "<script language=\"javascript\"> alert('内容不能为空');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>预览页面</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<form class="form-horizontal" action="mode.php" method="post"  enctype="multipart/form-data">
	<div style="width: 500px; margin: auto;">
	<div style="margin-top:100px;text-align: center;">
<h1>编辑消息</h1>
	<input name="title" type="text" class="form-control" placeholder="输入标题 ">
</div>
<div style="margin-top:20px;text-align: center;" class="col-sm-6">
	<input name="date" type="text" class="form-control" placeholder="输入日期 格式如：20170801">
</div>
<div style="margin-top:20px;text-align: center;" class="col-sm-5">
	<input name="keyword" type="text" class="form-control" placeholder="写一个搜索关键词">
</div>
<div style="margin-top:80px;text-align: center;">
 <textarea name="content" class="form-control" rows="10" placeholder="输入内容"></textarea>
</div>
<div style="margin-top:20px;text-align: center;" class="col-sm-8">
	<input name="ck" type="text" class="form-control" placeholder="参考网站网址">
</div>
<div style="margin-top:20px;text-align: center;" class="col-sm-4">
	<input name="znjp" type="text" class="form-control" placeholder="中文还是日文">
</div>
<div style="margin-top:20px;text-align: center;" >
	
</div>
<div class="form-group" style="margin-top:50px;text-align: center;">
    <label for="exampleInputFile">插入图片1</label>
    <input  type="file" id="exampleInputFile" name="file" style="margin: auto;">
	
    <p class="help-block">只支持  .jpg  </p>
 </div>
<div style="margin-top:100px;text-align: center;">

<button type="submit" class="btn btn-primary">提交</button>
</div>

</div>
</form>

<a href="./mode.php?i=1">测试</a>
</div>
</body>
</html>