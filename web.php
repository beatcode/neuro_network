<?php
// Start the session
session_start();
?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script>
</script>

<div class="page-header">
  <h1>Neuronales Netzwerk <small>Tic Tac Toe</small></h1>
</div>


<?php
	

if (!empty($_POST)){

// TOdo übergabe der Inputparamter

// dummy input
$daten[1]= '1';
$daten[2]= '0.5';
$daten[3]= '0.5';
$daten[4]= '0.5';
$daten[5]= '0.5';
$daten[6]= '0.5';
$daten[7]= '0.5';
$daten[8]= '0.5';
$daten[9]= '0.5';

// Aufruf des Python script mit den Inputparameter  
        $command = "python /var/www/html/neuronal_network/tic.py $daten[1] $daten[2] $daten[3] $daten[4] $daten[5] $daten[6] $daten[7] $daten[8] $daten[9] ";
        $temp = passthru($command);
        print $temp;

} else {

?>

<form action="" id="form" name="form" method="post">


<title> Tic-Tac-Toe </title>    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link type="text/css" rel="stylesheet" href="style.css" />  

<body>

<script>

function setval(row,cell,feld, wert, player) {
	
	act_field = document.getElementById(feld).value;
	if( act_field == '1'  && act_field == '0') {
	} else if ( act_field == '0.5') {
	if (player == 'Player 1' ) {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-circle-thin"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
	} else {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-times"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';

	}	

	}
}

function ReadInput() {

feld1 = document.getElementById("1").value;
feld2 = document.getElementById("2").value;
feld3 = document.getElementById("3").value;
feld4 = document.getElementById("4").value;
feld5 = document.getElementById("5").value;
feld6 = document.getElementById("6").value;
feld7 = document.getElementById("7").value;
feld8 = document.getElementById("8").value;
feld9 = document.getElementById("9").value;

var result = [feld1, feld2, feld3, feld4, feld5, feld6, feld7, feld8, feld9];
return result;

}


</script>

<table id ='board'>
  <tr>
 <td  onclick="setval('0', '0', '1', '1', 'Player 1')"> <input type="hidden" id="1" value="0.5"> </td>
 <td  onclick="setval('0', '1', '2', '1', 'Player 2')"> <input type="hidden" id="2" value="0.5"> </td>
 <td  onclick="setval('0', '2', '3', '1', 'Player 1')"> <input type="hidden" id="3" value="0.5"> </td>
  </tr>
  <tr>
   <td  onclick="setval('1', '0', '4', '1')">  <input type="hidden" id="4" value="0.5"> </td>
   <td  onclick="setval('1', '1', '5', '1')">  <input type="hidden" id="5" value="0.5"> </td>
   <td  onclick="setval('1', '2', '6', '1')">  <input type="hidden" id="6" value="0.5"> </td>
  </tr>
  <tr>
    <td  onclick="setval('2', '0', '7', '1')"> <input type="hidden" id="7" value="0.5"> </td>
    <td  onclick="setval('2', '1', '8', '1')"> <input type="hidden" id="8" value="0.5"> </td>
    <td  onclick="setval('2', '2', '9', '1')"> <input type="hidden" id="9" value="0.5"> </td>
  </tr>
</table>

<br>
<button type="submit" name="SubmitButton"  >an Netzwerk senden</button>
</form>

<button onclick="alert(ReadInput())">Zeig Input Parameter</button>
<?php
}
?>
</div>

