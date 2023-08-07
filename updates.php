
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "Pharmacy";

$connect = mysqli_connect($host, $user, $password);
mysqli_select_db($connect,$db);

if(isset($_POST['customer_id'])){
  $uname = $_POST['customer_id'];
  $password = $_POST['password'];

  $sql = "select*from Pharmacy where firstname='" . $uname . "'AND password='" . $password . "'
  limit 1";

  $result = mysqli_query($connect,$sql);

  if(mysqli_num_rows($result)==1){
    echo "You have succesfully logged in";
    exit();
  }
  else{
    echo "you have entered incorrect password";
    exit();
  }
}
?>
<!doctype html>
<HTML>
    <head>
        <link rel="stylesheet" href="/Pharmacy/css/default.css" type="text/css"/>
        <style>
        li{ 
            list-style: none;
             padding:3px;    
        }
        a{
  text-decoration:none;
}
a:visited{
  color:white;
}
a:hover{
  color:yellow;
}
        </style>
    </head>
<!-- Updates and News Box for our site -->
<li id="news">
    <h2 style="color:orange"><u>Updates</u></h2>
    <ul>
        <li> 
            <p><a href="/Pharmacy/pharmacy/drugs1.php"><?php echo "Please click to <b>check drugs</b>  in
            our store."; ?></a></p>
        </li>

</html>