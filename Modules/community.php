<?php include("header.php"); ?>

<section class="outline-area services-area section__bg hover-ctrl fadeft" >
		<div class="container">
			<div class="outline-box services-box text-center col-sm-12">
				<div class="outline__inr services__inr bg__inr">
					<div class="outline__cont0 services__cont">
						<div class="hed col-sm-12">
							<h2>Community Services</h2>
						</div>
						<div class="services__lft col-sm-6">
							<ul>
								<li id="comServ" class="serv__def bef"><a onclick="play('comBasedServ')"><i class="fa fa-volume-up hidden"></i>Community Based Habilitation-Individual</a></li>
								<li id="duties" class="serv__def bef"><a onclick="play('duties')"><i class="fa fa-volume-up hidden"></i>Duties</a></li>
								<li id="experience" class="serv__def bef"><a onclick="play('experience')"><i class="fa fa-volume-up hidden"></i>Experience</a></li>
							</ul>
						</div>
						<div class="services__rgt col-sm-6">
							<div class="services__img">
								<img src="images/community.png" alt="community" />
							</div>
						</div>
						<div class="continue-btn hidden text-center" id="continue-button">
							<a href="respite.php">Continue</a>
						</div>
					</div>
				</div>
				<div class="continue-btn hidden" id="continue-button">
					<div class="mobileplay-holder">
						<a href="#" class="mobile_playSound hidden">Continue</a>
						<a class="mobile_cont hidden" href='respite.php' target='_self' >Continue</a>
					</div>
				</div>
			</div>
		</div>		
	</section>
	
	<audio>
	  <source src="AreYouReady/audio-community.mp3" type="audio/mp3"></source>
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
      'all': [ 0, 163],
	  'clickhereto': [ 0, 17 ],
      'comBasedServ': [ 17, 55 ],
      'duties': [ 55, 95 ],
	  'experience': [ 95, 163 ]
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
			$('#comServ').removeClass('bef').addClass('selected');
			$('#comServ i').removeClass('hidden');
			},0);
			setInterval(function(){clearInterval(myServOne);},0);
			
			$(function(e){
				var firstClick = true;
				$(function(){
				  $("#comServ").click(function(){
					if(firstClick)
					{
						var myServTwo = setInterval(function(){
							$('#duties').removeClass('bef').addClass('selected');
							$('#duties i').removeClass('hidden');
						},37000);
						setInterval(function(){clearInterval(myServTwo);},37000);
						
						$(function(e){
							var secondClick = true;
							$(function(){
							  $("#duties").click(function(){
								if(secondClick)
								{
									var myServThree = setInterval(function(){
										$('#experience').removeClass('bef').addClass('selected');
										$('#experience i').removeClass('hidden');
									},40000);
									setInterval(function(){clearInterval(myServThree);},40000);
									
									$(function(e){
										var thirdClick = true;
										$(function(){
										  $("#experience").click(function(){
											if(thirdClick)
											{
												var myContBtn = setInterval(function(){
													$('#continue-button').removeClass('hidden');
												},64000);
												setInterval(function(){clearInterval(myContBtn);},64000);
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
				
			
		}, 17000);
		
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
