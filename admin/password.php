  <?php 
if ($_POST!=null and $_POST["name"]!=null) {
  if($_POST["name"]=='aomori'){
    if ($_POST["pwd"]=='luc123456') {
      header("location:article.php");
    }else{
      echo "管理员密码错误";
      exit();
    }
  }else {
    # code...
    echo "没有这个管理员";
    exit();
  }
}
 ?>