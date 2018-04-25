<?php

include_once 'dbh.php'

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<title>SP500 Crawler</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<p id="heading"> <img src='images/stk3.png' style='width:50%'>  </p>
<center>


<p style="color:white;font-size:15px">Search for a keyword or SP500 Twitter Handle: </p>



<div id="select_box">

<form method="post">
<input type="submit" id='choice1' name='choice1'  value="Search Handle" style="float:left;margin-top:20px;margin-left:50px"/>
</form>


<form method="post">
<input type="submit" id='choice2' name='choice2'  value="Search Keyword" style="float:right;margin-top:-45px;margin-right:50px;"/>
</form>


<br><br><br>



<?php if(isset($_POST['choice1'])) {

echo'
<form method="GET" action="results.php">



<div class="prompt">Choose a Twitter handle:</div>
<option value=""></option>


</select><br>
<select name="q">';

 $options2=$conn->query("select handle from 500List");



 while($row=$options2->fetch_assoc())
  {
   echo "<option>".$row['handle']."</option>";
  }


echo '</select>

    <input type="submit" style="margin-right:260px" />
</form>
';


}

?>


<?php if(isset($_POST['choice2'])) {

 echo '<form method="get" action="results.php">
<div class="prompt">Enter keywords to search:</div>
<input type="text" name="q" />
<input type="submit" style="margin-top:180px"/>
</form>';
}

?>



</div>

</center>  

</body>
</html>
