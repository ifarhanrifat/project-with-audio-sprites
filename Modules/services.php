<?php include("header.php"); ?>

<section class="outline-area services-area section__bg hover-ctrl fadeft" >
		<div class="container">
			<div class="outline-box services-box text-center col-sm-12">
				<div class="outline__inr services__inr bg__inr">
					<div class="outline__cont0 services__cont">
						<div class="hed col-sm-12">
							<h2>Residential Services</h2>
						</div>
						<div class="services__lft col-sm-6">
							<ul>
								<li id="residServ" class="serv__def bef"><a href="#" onclick="play('residHabServ')"><i class="fa fa-volume-up hidden"></i>Residential Habilitation and Support Services</a></li>
								<li id="duties" class="serv__def bef"><a href="#" onclick="play('duties')"><i class="fa fa-volume-up hidden"></i>Duties</a></li>
								<li id="experience" class="serv__def bef"><a href="#" onclick="play('experience')"><i class="fa fa-volume-up hidden"></i>Experience</a></li>
							</ul>
						</div>
						<div class="services__rgt col-sm-6">
							<div class="services__img">
								<img src="images/services.png" alt="services" />
							</div>
						</div>
						<div class="continue-btn hidden text-center" id="continue-button">
							<a href="community.php">Continue</a>
						</div>
					</div>
				</div>
				<div class="continue-btn hidden" id="continue-button">
					<div class="mobileplay-holder">
						<a href="#" class="mobile_playSound hidden">Continue</a>
						<a class="mobile_cont hidden" href='terms.html' target='_self' >Continue</a>
					</div>
				</div>
			</div>
		</div>		
	</section>
	
	<audio>
	  <source src="AreYouReady/audio-residential-services.mp3" type="audio/mp3"></source>
	</audio>
	<div class="mobileplay-holder hidden">
		<a href="#" class="mobile_playSound hidden">More Information</a>
		<a class="mobile_cont hidden" href='socialCheckWaiv.html' target='_self' >More Information</a>
	</div>
	<div id="playAudioBtns"></div>
	
	<script type="text/javascript">
		$(".services__lft a").click(function() {
		  //$(".services__lft li").removeClass('selected');
			$(this).parent().addClass('selected');
		});
	</script>
	


<script type="text/javascript">

    var a = document.querySelector('audio'),
    bc = document.querySelector('#playAudioBtns'),
    audiosprite = {
      'all': [ 0, 404],
	  'clickhereto': [ 0, 49.5 ],
      'residHabServ': [ 50, 80.5 ],
      'duties': [ 81, 215 ],
	  'experience': [ 215.5, 404 ]
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

	var myDefVar = setInterval(function(){
		var myServOne = setInterval(function(){
			$('#residServ').removeClass('bef').addClass('selected');
			$('#residServ i').removeClass('hidden');
			},0);
			setInterval(function(){clearInterval(myServOne);},0);
			
			$(function(e){
				var firstClick = true;
				$(function(){
				  $("#residServ").click(function(){
					if(firstClick)
					{
						var myServTwo = setInterval(function(){
							$('#duties').removeClass('bef').addClass('selected');
							$('#duties i').removeClass('hidden');
						},27000);
						setInterval(function(){clearInterval(myServTwo);},27000);
						
						$(function(e){
							var secondClick = true;
							$(function(){
							  $("#duties").click(function(){
								if(secondClick)
								{
									var myServThree = setInterval(function(){
										$('#experience').removeClass('bef').addClass('selected');
										$('#experience i').removeClass('hidden');
									},130000);
									setInterval(function(){clearInterval(myServThree);},130000);
									
									$(function(e){
										var thirdClick = true;
										$(function(){
										  $("#experience").click(function(){
											if(thirdClick)
											{
												var myContBtn = setInterval(function(){
													$('#continue-button').removeClass('hidden');
												},184000);
												setInterval(function(){clearInterval(myContBtn);},184000);
											}
										  });
										});
									});
									
								}
							  });
							});
						});
					}
				  });
				});
			});	
				
			
		}, 46000);
		
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
