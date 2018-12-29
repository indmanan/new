<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Happy New Year</title>
    <style>
        #fromtextn{
	 position:absolute;
	 top: 150px;
	 left: 200px;
     animation:anim2 3.5s infinite;}
        @keyframes anim2{
	0%{color:#03A9F1;}
	25%{color:#44F103; transform:scale(1);}
	50%{color:#0C40E3;transform:scale(1);}
	75%{color:#1B0EE7;transform:scale(1);}
	100%{color:#DAE30C;transform:scale(1);}
}
    
    
    
    
    </style>
</head>
<body background="images/hny4.jpg" style="background-size:1366px 680px;">

	<form action="diwali.php" method="get">
    	<h1 id="fromtextn"><center><label for="name">Enter your name:</label>
        <input type="text" name="name" id="name">
       
        <input type="submit" name="submit"value="Let's Go">
            </center></h1>
    </form>
	
</body>
</html>