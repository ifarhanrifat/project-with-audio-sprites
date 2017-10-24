<?php include("header.php"); ?>

<section class="outline-area services-area section__bg hover-ctrl fadeft" >
		<div class="container">
			<div class="outline-box services-box text-center col-sm-12">
				<div class="outline__inr services__inr expect__inr bg__inr">
					<div class="outline__cont0 services__cont">
						<div class="hed col-sm-12">
							<h2>What You Should Expect</h2>
						</div>
						<div class="services__lft col-sm-5">
							<ul>
								<li id="expPeople" class="serv__def bef"><a onclick="play('expectPeople')"><i class="fa fa-volume-up hidden"></i>People</a></li>
								<li id="expSchedule" class="serv__def bef"><a onclick="play('expectSchedule')"><i class="fa fa-volume-up hidden"></i>Schedule</a></li>
								<li id="expWork" class="serv__def bef"><a onclick="play('expectWork')"><i class="fa fa-volume-up hidden"></i>Work</a></li>
								<li id="expChallenges" class="serv__def bef"><a onclick="play('expectChallenges')"><i class="fa fa-volume-up hidden"></i>Challenges</a></li>
							</ul>
						</div>
						<div class="services__rgt col-sm-7">
							<div class="services__img">
								<img src="images/expect.png" alt="community" />
							</div>
						</div>
						<div class="continue-btn hidden text-center" id="continue-button">
							<a href="activity.php">Continue</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="continue-btn hidden" id="continue-button">
					<div class="mobileplay-holder">
						<a href="#" class="mobile_playSound hidden">Continue</a>
						<a class="mobile_cont hidden" href='socialCheckExp.php' target='_self' >Continue</a>
					</div>
				</div>
			</div>
		</div>		
	</section>
	
	<audio>
	  <source src="AreYouReady/audio-expect.mp3" type="audio/mp3"></source>
	</audio>
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
      'all': [ 0, 283],
	  'clickhereto': [ 0, 33.5 ],
      'expectPeople': [ 33.5, 86 ],
      'expectSchedule': [ 86, 159 ],
	  'expectWork': [ 159, 205 ],
	  'expectChallenges': [ 205, 283 ]
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
			$('#expPeople').removeClass('bef').addClass('selected');
			$('#expPeople i').removeClass('hidden');
			},0);
			setInterval(function(){clearInterval(myServOne);},0);
			
			$(function(e){
				var firstClick = true;
				$(function(){
				  $("#expPeople").click(function(){
					if(firstClick)
					{
						var myServTwo = setInterval(function(){
							$('#expSchedule').removeClass('bef').addClass('selected');
							$('#expSchedule i').removeClass('hidden');
						},53000);
						setInterval(function(){clearInterval(myServTwo);},53000);
						
						$(function(e){
							var secondClick = true;
							$(function(){
							  $("#expSchedule").click(function(){
								if(secondClick)
								{
									var myServThree = setInterval(function(){
										$('#expWork').removeClass('bef').addClass('selected');
										$('#expWork i').removeClass('hidden');
									},73000);
									setInterval(function(){clearInterval(myServThree);},73000);
									
									$(function(e){
										var thirdClick = true;
										$(function(){
										  $("#expWork").click(function(){
											if(thirdClick)
											{
												var myServThree = setInterval(function(){
													$('#expChallenges').removeClass('bef').addClass('selected');
													$('#expChallenges i').removeClass('hidden');
												},45000);
												setInterval(function(){clearInterval(myServThree);},45000);
												
												$(function(e){
													var fourthClick = true;
													$(function(){
													  $("#expChallenges").click(function(){
														if(fourthClick)
														{
															var myContBtn = setInterval(function(){
																$('#continue-button').removeClass('hidden');
															},72000);
															setInterval(function(){clearInterval(myContBtn);},72000);
															
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
					}
				  });
				});
			});	
				
			
		}, 33000);
		
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
