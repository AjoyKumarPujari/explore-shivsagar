<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>feedback</title>
</head>
<body background="rangghar.jpg">
<img src="feedback.jpg" width="1334" height="130"/>
<div style="height:500px; width:850px; font-size: 20px ; background:white; padding-left:30px; padding-top:20px; margin-left:250px; margin-top:20px  ">

                <form method="post" action="feedback.php">
                  Id: <br><input name="id" type="text" class="input" size="130" id="name"><br><br>
                  Name: <br><input name="name" type="text" class="input" size="130" id="name"><br><br>
                  Phone Number:<br><input name="pno" type="text" class="input" size="130" id="pno"><br><br>
                  E-mail:<br><input name="mail" type="text" class="input" size="130" id="mail"><br><br>
                  Date:<br><input name="date" type="date" class="input" size="130" id="date"> <br><br>
                  Details:<br><input name="detail" type="text" class="input" size="130" id="detail" ><br><br>
                 <input type="submit" name="submit" class="input" value="Submit"  style="padding: 5px 10px;">
                  <br>
                  </p>
                </form>
</div>
</body>
</html>

<?php
	if(isset($_GET["ok"]))
		{
			echo '<script>alert("record submitted");</script>';
		}
 ?>