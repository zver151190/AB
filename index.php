
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
</head>
<style>
  #keyart-0 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax0.png);
    background-color: #ffaf1b;
}
  #keyart-1 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax1.png);
}
  #keyart-2 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax2.png);
}
  #keyart-3 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax3.png);
}
  #keyart-4 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax4.png);
}
   #keyart-5 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax5.png);
}
     #keyart-6 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax6.png);
}
     #keyart-7 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax7.png);
}
    #keyart-8 {
    background-image: url(http://www.firewatchgame.com/images/parallax/parallax8.png);
}
  .keyart_layer {
    background-position: bottom center;
    background-size: auto 1038px;
    background-repeat: repeat-x;
    width: 100%;
    position: absolute;
}
  .keyart, .keyart_layer {
    height: 1000px;
}
 .keyart_layer.parallax {
    position: fixed;
}
</style>
<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.js"  integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <div class="keyart" id="parallax">
				<div class="keyart_layer parallax" id="keyart-0" data-speed="2"></div>		<!-- 00.0 -->
				<div class="keyart_layer parallax" id="keyart-1" data-speed="5"></div>	<!-- 12.5 -->
				<div class="keyart_layer parallax" id="keyart-2" data-speed="11"></div>		<!-- 25.0 -->
				<div class="keyart_layer parallax" id="keyart-3" data-speed="16"></div>	<!-- 37.5 -->
				<div class="keyart_layer parallax" id="keyart-4" data-speed="26"></div>		<!-- 50.0 -->
				<div class="keyart_layer parallax" id="keyart-5" data-speed="36"></div>	<!-- 62.5 -->
				<div class="keyart_layer parallax" id="keyart-6" data-speed="49"></div>		<!-- 75.0 -->
				<div class="keyart_layer" id="keyart-scrim"></div>
				<div class="keyart_layer parallax" id="keyart-7" data-speed="69"></div>		<!-- 87.5 -->
				<div class="keyart_layer" id="keyart-8" data-speed="100"></div>		<!-- 100. -->
</div>
  
  
  </body>

</html>
