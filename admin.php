<?php
session_start();
if(isset($_SESSION['giris'])){
	echo "hello admin";
    // $_SESSION['indexerror']=true;
}else{
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


    <?php
 //   session_start();
  
// if (isset($_SESSION['indexerror'])) {
// 	header('Location:admin.php');
// }


    // if(isset($_SESSION['toadmin'])){
    // 	$_SESSION['toadmin']=true;
    // 	echo "hello";
	   //  if (isset($_POST['logOut'])) {
	    	
	   //  	if($_SESSION['logOut']){
	   //  	header('Location: logout.php');
	   // 	 }else{
	   // 	 	header('Location:index.php');
	   // 	 }
	   //  }
    // }
    // else{
    // 	header('Location:index.php');
    // }


    ?>
    <br>
    <br>
    <br>
<h1>    <a href="logout.php">LogOut</a></h1>
</body>
</html>