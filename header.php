 <div id="title">
 
 
<img src="logo.jpg" alt="some_text">
 <div id="menuhead"><ul>

<?php
 if(loggedin()){
 ?>
 <li><a href='index.php'>home</a></li>
 <li><a href='profile.php' >Myprofile</a></li>
  <li><a href='message.php' >Messages</a></li>
     <li><a href='gallery.php' >Gallery</a></li>
     <li><a href='events.php' >Events & News</a></li>
  
  <li><a href='req.php' >Friend request</a></li>
   <li><a href='friends.php' >friends</a></li>
    <li><a href='members.php' >members</a></li>
	 <li><a href='logout.php' >logout</a></li>
<?php 
}else{
?>
  <li><a style="background:#F0F6F7;  color:#F0F6F7;" href='login.php' ></a><li>

<?php
}
?>
 
 
 
 
 
 
 
 
 
 
 </ul>
 </div>
 
 </div>
