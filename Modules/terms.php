<?php include("header.php"); ?>
	
	<section class="terms-area section__bg hover-ctrl fadeft" >
		<div class="container">
			<div class="play-audio-btn hidden-lg mb20 mt20 text-center">
				<button onclick="play('clickhereto')"><i class="fa fa-volume-up"></i>Click here to play the first audio</button>
			</div>
			<div class="terms-box col-sm-12">
				<div class="terms__inr">
					<div class="terms__cont ">
						<h2>What is a DSP</h2>
						<div class="terms__def da mb20">
							<span class="terms__title" id="dspdef-title" onclick="play('dspdefine')" >Direct Support Professional Definition</span>
							<span style="display:none;" id="dspdef"> - Direct support professionals or DSPs are people who work directly with people with physical disabilities and/or intellectual disabilities with the aim of assisting the individual to become integrated into his or her community or the least restrictive environment.</span>
						</div>
						<div class="terms__def terms__mean">
							<span class="terms__title" id="dspmean-title" onclick="play('dspmeaning')">Direct Support Professional Meaning</span>
							<span style="display:none;" id="dspmean"> - Direct support professionals do whatever is necessary to assist the people that they work with to live the best and most independent life they possibly can. They do this by being companions, teachers, chauffeurs, cooks, advisors, assistants, maids, and many other things. DSPs are responsible for listening to the person they are working with, learning what their needs, dreams, and goals are, and then coming up with creative solutions to help that person achieve those goals.</span>
						</div>
					</div>
					
				</div>
				<div class="continue-btn text-center" id="continue-button">
					<div class="mobileplay-holder">
						<!--<a href="#" class="mobile_playSound hidden-lg">More Information</a>-->
						<a class="mobile_cont more-info hidden" target='_self' onclick="play('moreinfo')">More Information</a>
						<a class="mobile_cont more-info-continue hidden" href='socialCheckWaiv.php' target='_self'>Continue</a>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<audio>
	  <source src="AreYouReady/audio-terms.mp3" type="audio/mp3"></source>
	</audio>
	<div class="mobileplay-holder">
		<!--<a href="#" class="mobile_playSound hidden-lg">More Information</a>-->
		<a class="mobile_cont hidden" href='socialCheckWaiv.php' target='_self' >More Information</a>
	</div>
	<div id="playAudioBtns"></div>
	
	
	
	<!--<audio id="laugh">
  <source src="http://upload.wikimedia.org/wikipedia/commons/a/a2/Barking_of_a_dog.ogg" type="audio/ogg">
  Get a new browser!
</audio>   -->

<style>
		/*.terms__def.da:before {
		content: ".";
		position: absolute;
		background-color: transparent;
		width: 100%;
		height: 100%;
	}

	.terms__def {
		position: relative;
	}
	*/

</style>



<script type="text/javascript">

    var a = document.querySelector('audio'),
    bc = document.querySelector('#playAudioBtns'),
    audiosprite = {
      'all': [ 0, 185 ],
	  'clickhereto': [ 0, 5 ],
      'dspdefine': [ 5.5, 22 ],
      'dspmeaning': [ 22.5, 56 ],
	  'moreinfo': [ 56.5, 185.5 ]
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
	$(window).load(function(){
	//var defDesc =  $("#dspdef").hide();
	
	
	var myDefVar = setInterval(function(){
		$("#dspdef-title").parent(".terms__def").addClass("active");
		 $(".terms__def").removeClass('da');			
		}, 5000);
		$("#dspdef-title").on('click', function(){
			var titleClassDef = $("#dspdef-title").parent(".terms__def").hasClass("active");
			if (titleClassDef){
				$("#dspdef").show();
			}
		});
		
		var myMeanVar = setInterval(function(){
		$("#dspmean-title").parent(".terms__def").addClass("active");
		 $(".terms__def").removeClass('da');			
		}, 5000);
		$("#dspmean-title").on('click', function(){
			var titleClassDef = $("#dspmean-title").parent(".terms__def").hasClass("active");
			if (titleClassDef){
				$("#dspmean").show();
			}
		});
		
		(function(){
			var onClickDefFunc = $('#dspdef-title').prop('onclick');
			$('#dspdef-title').removeProp('onclick');
			setTimeout(function(){
				$('#dspdef-title').click(onClickDefFunc);
			}, 5000);
		}());
		
		(function(){
			var onClickMeanFunc = $('#dspmean-title').prop('onclick');
			$('#dspmean-title').removeProp('onclick');
			setTimeout(function(){
				$('#dspmean-title').click(onClickMeanFunc);
				var firstClick = true;
				$(function(){
				  $("#dspmean-title").click(function(){
					if(firstClick)
					{
						var myVar = setInterval(function(){
							$('.more-info').removeClass('hidden');
						},30000);
						setInterval(function(){clearInterval(myVar);},30000);
						firstClick=false;
						$('.more-info').click(function(e) {
							$(this).addClass('hidden');
							var myVar2 = setInterval(function(){
								$('.more-info-continue').removeClass('hidden').addClass('index-class');
							},125000);
						});
					}
				  });
				});
				
				
				}, 5000);
				
		}());
		
		
		
	$(".mobile_playSound").click(function (e) {
		jQuery(this).addClass("hidden");
    });	
		
		

	});
	
	

	
	
</script>	

<script>
window.onload=function(){
play('clickhereto');
};
</script>




	
	
	
	
			
<?php include("footer.php"); ?>
