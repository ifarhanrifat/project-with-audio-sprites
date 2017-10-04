<?php include("header.php"); ?>

	<section class="outline-area section__bg hover-ctrl fadeft" >
		<div class="container">
			<div class="play-audio-btn hidden-lg mb20 mt20 text-center">
				<button onclick="play('clickhereto')"><i class="fa fa-volume-up"></i>Click here to play the first audio</button>
			</div>
			<div class="outline-box text-center col-sm-12">
				<div class="outline__inr">
					<div class="outline__cont">
						<h2>In this module you will learn:</h2>
						<ul>
							<li>What a DSP is</li>
							<li>Some of the things you can expect as a Direct Support Professional</li>
							<li>What you can do to deal with issues that arise while you are doing your job</li>
							<li>What a waiver is</li>
							<li>Why waiver services are important to those individuals receiving them</li>
							<li>What waiver services you will have to perform as a DSP</li>
						</ul>
					</div>
					<div class="continue-btn" id="continue-button">
						<div class="mobileplay-holder">
							<!--<a href="#" class="mobile_playSound hidden-lg">Continue</a>-->
							<a class="mobile_cont hidden" href='terms.html' target='_self' >Continue</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>		
	</section>
	
	<audio class="hidden-lg"> 
	   <source src="AreYouReady/Are You Ready Slide 2.mp3" type="audio/mpeg">
	</audio>
	
	<div class="mobileplay-holder">
		<!--<a href="#" class="mobile_playSound hidden-lg">Continue</a>-->
		<a class="mobile_cont hidden" href='terms.html' target='_self' >Continue</a>
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
			var myVar = setInterval(function(){document.getElementById("continue-button").innerHTML = "<a href='terms.php' target='_self' >Continue</a>";},84000);
		setInterval(function(){clearInterval(myVar);},84000);
    });
		
		
	
    $(".mobile_playSound").click(function (e) {
        
		//obj.play();
		jQuery(this).addClass("hidden");
		setInterval(function(){
			$(".mobile .mobile_cont").removeClass("hidden");
		},84000);
    });
	
	
		
	});
	</script>
	
<script type="text/javascript">

    var a = document.querySelector('audio'),
    bc = document.querySelector('#playAudioBtns'),
    audiosprite = {
      'all': [ 0, 88 ],
	  'clickhereto': [ 0, 88 ],
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
	
	
	
	
			
<?php include("footer.php"); ?>