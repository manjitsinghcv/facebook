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



</div>



<div style="margin-top:-300px;margin-left:550px;"class="xx1"">
  <form action="login.php" method="post">
  <table bgcolor="#CCCCCC" width="266" height="284" border="0" align="center">


  <tr>
        <th  bgcolor="#CCCCCC"><h1 style="color:yellow">New to Facebook? Register Here</h1></th>
  <tr>
        <td  bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp; Username<br><input style=margin-left:20px; name="username" type="text" id="u_name" v>&nbsp;</td>
  </tr>
  <tr>
   
    <td bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp; Password<br><input style=margin-left:20px; type="password" name="password" id="u_pass"></td>
  </tr>
  <tr>
    
    <td bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp;Email<br><input style=margin-left:20px; type="text" name="email" id="u_email"></td>
  </tr>
  <tr bgcolor="#87E3C7" style="text-align: center">
    <td colspan="2" bgcolor="#CCCCCC"><input name="submit" type="submit" id="submit" formaction="login.php" value="Sign up"></td>
    </tr>
</table>

</div>
</form>



</div>
 
</body> 
 </html>
 