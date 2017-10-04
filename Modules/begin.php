<?php include("header.php"); ?>

	<section class="begin-area section__bg hover-ctrl fadeft " >
		<div class="container">
			<div class="play-audio-btn hidden-lg mb20 mt20 text-center">
				<button onclick="play('clickhereto')"><i class="fa fa-volume-up"></i>Click here to play the first audio</button>
			</div>
			<div class="begin-box text-center col-sm-12">
				<div class="begin__img">
					<img src="images/begin.png" alt="begin" />
				</div>
				<div class="continue-btn" id="continue-button">
					<div class="mobileplay-holder">
						<!--<a href="#" class="mobile_playSound hidden-lg">Continue</a>-->
						<a class="mobile_cont hidden" href='outline.php' target='_self' >Continue</a>
					</div>
				</div>
			</div>
		</div>		
	</section>
	
	<audio class="hidden-lg"> 
	   <source src="AreYouReady/Are You Ready Slide 1.mp3" type="audio/mpeg">
	</audio>
	
	<!--<audio class="playSound" controls preload="none"> 
	   <source src="AreYouReady/Are You Ready Slide 3 Part 1.mp3" type="audio/mpeg">
	</audio>-->
	<!--<audio id="myAudio" src="AreYouReady/Are You Ready Slide 1.mp3" preload="auto"></audio>-->
	
	
	<!--<script>
		$(".myAudio").trigger('load');
	</script>-->
	<div class="mobileplay-holder">
		<!--<a href="#" class="mobile_playSound hidden-lg">Continue</a>-->
		<a class="mobile_cont hidden" href='outline.php' target='_self' >Continue</a>
	</div>
	
	
<script>
 
    $(document).ready(function() {
	
        /*var obj = document.createElement("audio");
        //obj.src="AreYouReady/Are You Ready Slide 1.mp3";
       // obj.autoPlay=true;
       // obj.preLoad=true;*/
	
	$(function() {
			//$('.playSound').click();
			//obj.play();
			var myVar = setInterval(function(){document.getElementById("continue-button").innerHTML = "<a href='outline.php' target='_self' >Continue</a>";},59000);
		setInterval(function(){clearInterval(myVar);},59000);
    });
		
		
	
    $(".mobile_playSound").click(function (e) {
        
		//obj.play();
		jQuery(this).addClass("hidden");
		setInterval(function(){
			$(".mobile .mobile_cont").removeClass("hidden");
		},59000);
    });
	});
  	
 
</script>

<script type="text/javascript">

    var a = document.querySelector('audio'),
    bc = document.querySelector('#playAudioBtns'),
    audiosprite = {
      'all': [ 0, 59 ],
	  'clickhereto': [ 0, 59 ],
    },
    end = 0;
	
	a.addEventListener('loadeddata', function(ev) {
	  for (var i in audiosprite) {
		//bc.innerHTML += '<button onclick="play(\'' +
						// i + '\')">' + i + '</button>';
	  }
	}, false);

	a.addEventListener('timeupdate', function(ev) {
	  if (a.currentTime > end) { a.pause(); }
	},false);

	function play(sound) {
	  if ( audiosprite[sound] ) {
		a.currentTime = audiosprite[sound][0];
		end = audiosprite[sound][1];
		a.play();
	  }
	}

</script>

<script>
	window.onload=function(){
	play('clickhereto');
	};
</script>
	
	<!--<script>

   
	/*	$(document).ready(function(){
			$('#playAudio').trigger('myAudio');
		});*/
	</script>-->
	
	
	
	
			
<?php include("footer.php"); ?>
