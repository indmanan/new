<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Happy New Year</title>
 <style type="text/css">
 #fromtext{
	 position:absolute;
	 top: 160px;
	 left: 568px;
	 color:#fff;
	 animation:anim 3.5s infinite;
}
     #fromtext1{
	 position:absolute;
	 top: 80px;
	 left: 370px;
	 color:#F00;
	 animation:anim 3.5s infinite;
}
      #fromtextn{
	 position:absolute;
	 bottom: 50px;
	 left: 730px;
	 color:#F00;
     }
          
@keyframes anim{
	0%{color:#F00;}
	25%{color:#080B0B; transform:scale(1.3);}
	50%{color:#FF0080;transform:scale(0.8);}
	75%{color:#1B0EE7;transform:scale(1.9);}
	100%{color:#F00;transform:scale(1);}
}
 </style>
</head>
<body background="images/hny3.jpg" style="background-size:1366px 760px;">
   <center><h3>(touch anywhere on screen)</h3></center>
    <h1 id="fromtext1">manan is wishing you a very happy new year</h1>
    <h1 id="fromtext">to my dear...<?php echo $_GET['name']; ?> </h1>
    <canvas id="canvas"></canvas>
 <script type="text/javascript" src="js/crackers.js"></script>
   <center><h3 id="fromtextn">contact<br>manan@asia.com<br>7653075590</h3></center>
</body>
</html>