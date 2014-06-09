 <html>
 <head>
 <title>Welcome to Facebook </title>
 <link rel="stylesheet" href="styles.css"/>
 </head>
 <body>
  <?php include("fuctions.php");  ?>
   <?php include("header.php");  ?>
 <div class="container">

<div style="margin-left:-600px;"class="xx1"">
  <form action="login.php" method="post">
  <table bgcolor="#CCCCCC" width="266" height="284" border="0" align="center">


  <tr>
        <th  bgcolor="#CCCCCC"><h1 style="color:yellow">SIGN IN HERE</h1></th>
  <tr>
        <td  bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp; Username<br><input style=margin-left:20px; name="username" type="text" id="username" v>&nbsp;</td>
  </tr>
  <tr>
   
    <td bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp; Password<br><input style=margin-left:20px; type="password" name="password" id="password"></td>
  </tr>

  <tr bgcolor="#87E3C7" style="text-align: center">
    <td colspan="2" bgcolor="#CCCCCC"><input name="sub" type="submit" id="sub" formaction="login.php" value="Sign in"></td>
    </tr>
</table>

</form>

// i assume you already have database and tables with few records ready to use before you use these php codes.
 <?php 
  include("connect.php");
 if(isset($_POST['sub'])){
 $username=$_POST['username'];
 $password=$_POST['password'];

 
 
$check_login= mysql_query("select id from users where username='$username' and password='$password'");
if(mysql_num_rows($check_login) == 1){
$get = mysql_fetch_array($check_login);
$user_id = $get['id'];
$_SESSION['user_id'] = $user_id;
header('location:index.php');

}

 
 
 

 }
 ?>


</div>



 
</body> 
 </html>
 
