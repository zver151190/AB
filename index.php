<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Artiom Bublik</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
</head>
<style>
#keyart-0 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax0.png);
    background-color: #ffaf1b;
    background-position-y: -100px;
}
#keyart-1 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax1.png);
    background-position-y: -100px;
}
#keyart-2 {
    background-image: url(https://sortexpress.com/images/parallax_2.png);
    background-position-y: -100px;
}
#keyart-3 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax3.png);
    background-position-y: -100px;
}
#keyart-4 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax4.png);
    background-position-y: -100px;
}
#keyart-5 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax5.png);
    background-position-y: -100px;
}
#keyart-6 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax6.png);
    background-position-y: -100px;
}
#keyart-7 {
    background-image: url(https://sortexpress.com/images/parallax_7a.png);
    background-position-y: 0px;
    background-size: auto 1838px;
}
#keyart-8 {
    background-image: url(https://sortexpress.com/images/parallax_8.png);
    background-position-y: -100px;
    background-size: auto 1838px;
}
.keyart_layer {
    background-position: bottom center;
    background-size: auto 1038px;
    background-repeat: repeat-x;
    width: 100%;
    position: absolute;
}
.keyart, .keyart_layer {
    height: 1200px;
}
 .keyart_layer.parallax {
    position: fixed;
	transform:translate3d(0px,0px,0px);
	transition:transform 0.3s ease;
}
	
@media only screen and (max-width: 1800px) {
	#q .col-md-3 h3 {min-height: 90px;}
}
</style>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.js"  integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js" crossorigin="anonymous"></script>
  <script src="https://fatlinesofcode.github.io/jquery.smoothwheel/src/jquery.smoothwheel.js" crossorigin="anonymous"></script>
  <script>



		$(document).ready(function () {

			var lastScrollTop = 0;
			var distance = 0;
			$(window).on('mousewheel', function(event) {
					var st = $(this).scrollTop();
					if( $(this).scrollTop() < 800){
						if (event.deltaY == -1){
							var layers = $('.parallax');
							$.each(layers,function(index,value){
								$(value).attr("clicks",parseInt($(value).attr("clicks"))+1);
								var matrix = $(value).css('transform').replace(/[^0-9\-.,]/g, '').split(',');
								var y = parseInt($(value).attr('clicks'));
								var multiplier = parseInt($(value).attr('data-speed'));
								var result = ((parseInt(multiplier)*parseInt(y)));
								$(value).css("transform","translate3d(0px,-"+result+"px,0px)");
								
								
							});
						} else if( $(this).scrollTop() > 0 && event.deltaY == 1 && $(this).scrollTop() < 1000){

							var layers = $('.parallax');
							$.each(layers,function(index,value){
								if( parseInt($(value).attr("clicks")) <= 0){
									if($(this).scrollTop()==0){
										$(value).attr("clicks","0");
									}
								}else{
									$(value).attr("clicks",parseInt($(value).attr("clicks"))-1);
								}
								var matrix = $(value).css('transform').replace(/[^0-9\-.,]/g, '').split(',');
								var y = parseInt($(value).attr('clicks'));
								var multiplier = parseInt($(value).attr('data-speed')); 
								var result = ((parseInt(multiplier)*parseInt(y)));
								
								$(value).css("transform","translate3d(0px,-"+result+"px,0px)");
								
							});
						}
					}else if( $(this).scrollTop() >= 800 ){
						var layers = $('.parallax');
							$.each(layers,function(index,value){
								$(value).attr("clicks","4");
								var y = parseInt($(value).attr('clicks'));
								var multiplier = parseInt($(value).attr('data-speed')); 
								var result = ((parseInt(multiplier)*parseInt(y)));
								$(value).css("transform","translate3d(0px,-"+result+"px,0px)");
							});
										
					}
					distance+=event.deltaY;
					if( $(this).scrollTop() == 0){
						distance = 0;
					}
			});

              $(window).scroll(function(){
				  var layers = $('.parallax');
				  if( $(this).scrollTop() == 0 ){
					  $.each(layers,function(index,value){
						$(value).attr("clicks","0");
						$(value).css("transform","translate3d(0px,0px,0px)");
					  });
				  }
			  });
		});

	
</script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<body>

<style>
  #about-me{text-align: center;font-size: 60px; margin: 0px; color: white; font-weight: bold; border-bottom: 1px solid #ffffff36;}
  #about-me span{color: #4CAF50;}
  #_about_me{height:1000px;width:  100%;background: #210002;z-index: 10;position: relative;    padding: 0px 50px;}
  #introduce{text-align: center;color: white;font-size: 20px;letter-spacing: 4px;}
  #_about-cont .col-md-4 div{display:  inline-block;background:  white;padding: 15px;transform: rotate(-7deg);margin-top: 60px;}
  #_about-cont .col-md-4 div img{width:100%;}
  #_about-cont .col-md-8 p{color: white;font-size: 20px;font-family:Lato}
  #_about-cont .col-md-8 h2{color: white;font-family: Lato;margin-bottom: 40px;text-align: left;}
  #_about-cont .col-md-8 h2 span{border-bottom: 5px solid white;padding-bottom: 10px;-right: 20px;}
  #q{width:  100%;height:  150px;display:  inline-block;margin-top: 50px;border-top: 1px solid #ffffff36;}
  #q .col-md-3{font-family: Lato;background: #ffaf1b;margin-top: 20px;padding: 20px;min-height: 290px;border-right: 5px solid black;border-radius: 10px;}
  #q .col-md-3 h3 { margin: 0px; min-height: 70px; color: black; }
</style>
  <div class="keyart" id="parallax">
				<div class="keyart_layer parallax" id="keyart-0" data-speed="2" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>		<!-- 00.0 -->
				<div class="keyart_layer parallax" id="keyart-1" data-speed="5" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>	<!-- 12.5 -->
				<div class="keyart_layer parallax" id="keyart-2" data-speed="11" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>		<!-- 25.0 -->
				<div class="keyart_layer parallax" id="keyart-3" data-speed="16" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>	<!-- 37.5 -->
				<div class="keyart_layer parallax" id="keyart-4" data-speed="26" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>		<!-- 50.0 -->
				<div class="keyart_layer parallax" id="keyart-5" data-speed="36" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>	<!-- 62.5 -->
				<div class="keyart_layer parallax" id="keyart-6" data-speed="49" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>		<!-- 75.0 -->
				<div class="keyart_layer" id="keyart-scrim"></div>
				<div class="keyart_layer parallax" id="keyart-7" data-speed="69" clicks="0" style="transform: translate3d(0px, 0px, 0px);"></div>		<!-- 87.5 -->
				<div class="keyart_layer " id="keyart-8" data-speed="100">
				</div>		<!-- 100. -->
</div>
  
<div id="_about_me">
	<h1 id="about-me">ABOUT <span>ME</span></h1>
	<h1 id="introduce">ALLOW ME TO INTRODUCE MYSELF</h1>
	<div id="_about-cont" class="col-xs-12" style="padding-top: 50px;">
		<div class="col-md-4 col-xs-12">
			<div><img src="https://scontent.ftlv2-1.fna.fbcdn.net/v/t1.0-9/934972_10200537557913799_948793363_n.jpg?oh=8baf2a3d86f2821e816e176b8b6dc08c&oe=5AE8697B"></div>
		</div>
		<div class="col-md-8 col-xs-12" style="padding: 0px 50px;">
			<p>Hi, my name is Artiom Bublik</p>
			<p>I am a Full Stack Web Developer living in Rishon Lezion, Israel, with experience in coding:</p>
				<ul style="font-family:  Lato;color: white;font-size: 18px;">
					<li>HTML</li>
					<li>CSS</li>
					<li>jQuery</li>
					<li>Javascript</li>
					<li>PHP</li>
					<li>Java</li>
					<li>And still learning more...</li>
				</ul>
			<p>My passion for coding started when i was studying animation in HackerU college, in 3D animation you are bound to use code for simulations and verious things, so i started to learn.</p>
			<p>After graduating the animation course i went to learn code in John Bryce College.</p>			
			<p>I now know i enjoy both design and development, front end and backend. I enjoy every aspect of it.</p>
			
		</div>
	</div>

	<div id="q">
		<div class="col-md-3 col-xs-12">
			<h3>What are you most passionate about these days?</h3>
			<p style="font-size: 16px;">I consider myself as a creative person, i enjoy creating things from scratch, disassembling things to see how they work so that i would have the knowledge to recreate them. I am very passionate about learning new things and developing myself.</p>
		</div>
		<div class="col-md-3 col-xs-12">
			<h3>What would be your ideal position?</h3>
			<p style="font-size: 16px;">I think it is important to love what you're doing or else you won't succeed. This position would have to exite me and keep me wanting more.</p>
		</div>
		<div class="col-md-3 col-xs-12">
			<h3>Why do you think you would be a good fit for a web developer position at BrainPOP?</h3>
			<p style="font-size: 16px;">I think my skill set is very relevant for this position, my knowledge in web development and my creativity.</p>
		</div>
		<div class="col-md-3 col-xs-12">
			<h3>If you had to choose, what is the one thing you do best? Explain why do you feel that way</h3>
			<p style="font-size: 16px;">
				In the field of web development you must stay up to date with the current technology so you can stay relevant.
    				I think one of the things i do best is studying by myself. I love coding so i am very passionate about it, i can spend many hours sitting on the computer trying to learn new things or developing existing skills.</p>
		</div>
	</div>

</div>
  

</body>

</html>
