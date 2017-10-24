<?php include("header.php"); ?>

	<section class="waivers-area section__bg hover-ctrl fadeft" >
		<div class="container">
			<div class="waivers-box col-sm-12">
				<div class="waivers__inr bg__inr">
					<div class="waivers__cont">
						<h2>Waivers</h2>
						<div class="waivers-inr-main">
							<div class="waivers__inr__box">
								<h3>Agency</h3>
								<div id="imageBox" class="waivers__inr__img">
									<img src="images/agency.jpg" alt="agency" />
								</div>
							</div>
							
							<div class="gallery-box">
								<div class="gallery-click">
									<h4>Click all images as they appear below</h4>
								</div>
								<div class="gallery-wrap">
									<div class="gallery galleryid-45 selector" id="gallery-1">
										<dl class="gallery-item gallery-item--one hidden">
											<dt class="gallery-icon"> <a href="images/family.jpg"><img onclick="play('family')" class="attachment-thumbnail selectme" id="familyImage" src="images/family.jpg"></a> </dt>
										</dl>
										<dl class="gallery-item gallery-item--two hidden">
											<dt class="gallery-icon"> <a href="images/government.jpg"><img onclick="play('government')" class="attachment-thumbnail selectme" id="govImage" src="images/government.jpg"></a> </dt>
										</dl>
										<dl class="gallery-item gallery-item--three hidden">
											<dt class="gallery-icon"> <a href="images/money.jpg"><img onclick="play('money')" class="attachment-thumbnail selectme" id="moneyImage" src="images/money.jpg"></a> </dt>
										</dl>
										<br style="clear: both">
									</div>
								</div>
							</div>
							<div class="continue-btn hidden text-center" id="continue-button">
								<a href="services.php">Continue</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>		
	</section>
	<audio>
	  <source src="AreYouReady/audio-waivers.mp3" type="audio/mp3"></source>
	</audio>
	<div class="mobileplay-holder">
		<a href="#" class="mobile_playSound hidden">More Information</a>
		<a class="mobile_cont hidden" href='socialCheckWaiv.html' target='_self' >More Information</a>
	</div>
	<div id="playAudioBtns"></div>

	
<script>
	 $(".gallery-item a").click(function(evt) {
		evt.preventDefault();
		$("#imageBox").empty().append(
			$("<img>", { src: this.href})
		);
	});				
</script>
<script type="text/javascript">

    var a = document.querySelector('audio'),
    bc = document.querySelector('#playAudioBtns'),
    audiosprite = {
      /*'all': [ 0, 239 ],
	  'clickhereto': [ 0, 28 ],
      'family': [ 28, 106.5 ],
      'government': [ 107, 183 ],
	  'money': [ 183, 239 ]*/
	  
	  'all': [ 0, 239 ],
	  'clickhereto': [ 0, 27.5 ],
      'family': [ 27.5, 106 ],
      'government': [ 106, 182 ],
	  'money': [ 182, 239 ]
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

<script type="text/javascript">
	$(".gallery-icon img").click(function() {
	  $(".gallery-icon a").removeClass('selected');
		$(this).parent().addClass('selected');
	});
</script>

	
<script>

$(window).load(function(){

	var myDefVar = setInterval(function(){
		var myGallOne = setInterval(function(){
			$('.gallery-item--one').removeClass('hidden');
			},0);
			setInterval(function(){clearInterval(myGallOne);},0);
			
			$(function(e){
				var firstClick = true;
				$(function(){
				  $("#familyImage").click(function(){
					if(firstClick)
					{
						var myGallTwo = setInterval(function(){
							$('.gallery-item--two').removeClass('hidden');
						},78000);
						setInterval(function(){clearInterval(myGallTwo);},78000);
						
						$(function(e){
							var secondClick = true;
							$(function(){
							  $("#govImage").click(function(){
								if(secondClick)
								{
									var myGallThree = setInterval(function(){
										$('.gallery-item--three').removeClass('hidden');
									},76000);
									setInterval(function(){clearInterval(myGallThree);},76000);
									
									$(function(e){
										var thirdClick = true;
										$(function(){
										  $("#moneyImage").click(function(){
											if(thirdClick)
											{
												var myContBtn = setInterval(function(){
													$('#continue-button').removeClass('hidden');
												//},75000);
												},54000);
												setInterval(function(){clearInterval(myContBtn);},54000);
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
				
			
		}, 27000);
		
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