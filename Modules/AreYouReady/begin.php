<?php
session_start();
if(isset($_SESSION['auth_user'])){
  $username = $_SESSION['auth_user'];
  $loginFlag = '1';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>I-TRAIN | Are You Ready (Module 0)</title>
<?php 
	include ('../includes/header.php');
?>

</head>

<body>
<?php

if($loginFlag == '1'){
  include ('../includes/authMenu.php');
}else{
  include ('../includes/notAuthMenu.php');
}
?>	
    <!-- Page Content -->
    	
    <div class="container contentContainer">
      <div class="buffer lengthen-it">
        <!-- <a id="play">Definition</a>
	    <i id="pause" class="fa fa-fw fa-pause"></i><br /><br />
	    <div id="display"></div> -->
		
		<button type="button" class="btn btn-sm btn-default" id="play"><i class="fa fa-volume-up"></i></button>
		
	  </div>
	  <div id="display"></div>
    </div>
    <!-- /.container -->
	
	<?php include ('../includes/footer.php'); ?>
	
	<div style="visibility: hidden;"></div>
</body>

<script type="text/javascript">
$(document).ready(function() {
	var slideName = 'Are You Ready Slide 1.mp3';
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', slideName);
    //audioElement.setAttribute('src', '../Modules/AreYouReady/Work Slide 8.mp3');
    
    audioElement.addEventListener('ended', function() {
        this.currentTime = 0;
        this.play();
    }, false);
    
    $('#play').click(function() {
        audioElement.play();
       // alert('test message');
       var myVar = setInterval(function(){document.getElementById("display").innerHTML = "<a href='community.php'><button type='button' class='btn btn-sm btn-default'>Continue >></button></a>";},2000);
		setInterval(function(){clearInterval(myVar);},3000);
    });
    
    $('#pause').click(function() {
        audioElement.pause();
    });
});
</script>

</html>
