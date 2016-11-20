<?php
session_start();
?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="page-header">
  <h1>Neuronales Netzwerk <small>Tic Tac Toe</small></h1>
</div>


<title> Tic-Tac-Toe </title>    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link type="text/css" rel="stylesheet" href="style.css" />  

<body>

<script>


function python() {

$.ajax({
        type: 'POST',	
        url: "/neuronal_network/python_call.php",
	data: "input="+ ReadInput(),
       success: function(data){
		$("#output").val(data);
		set_output(data);
	        }
});


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



function set_output(val) {
   
   
    var output = val;
    output = output.replace(/\s/g, "") ;
    var splits = output.split(",");

    setval_compute('0', '0', '1',  splits[0]);
    setval_compute('0', '1', '2',  splits[1]);
    setval_compute('0', '2', '3',  splits[2]);
    setval_compute('1', '0', '4',  splits[3]);
    setval_compute('1', '1', '5',  splits[4]);
    setval_compute('1', '2', '6',  splits[5]);
    setval_compute('2', '0', '7',  splits[6]);
    setval_compute('2', '1', '8',  splits[7]);
    setval_compute('2', '2', '9',  splits[8]);
}





function setval_human(row,cell,feld, wert) {
	
	act_field = document.getElementById(feld).value;

    if( act_field == 1.0  && act_field == 0.0) {

    } else if ( wert == 0.0) {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-circle-thin"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else if (wert == 1.0) {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-times"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<input type = "hidden" id="' + feld + '"  value="0.5" >';
    }
}

function setval_compute(row,cell,feld, wert) {
	

    if ( wert == 0.0) {

	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-circle-thin"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else if (wert == 1.0) {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-times"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<input type = "hidden" id="' + feld + '"  value="0.5" >';
}
}

</script>


<table id ='board'>
  <tr>
 <td  onclick="setval_human('0', '0', '1', '1.0')"> <input type="hidden" id="1" value="0.5"> </td>
 <td  onclick="setval_human('0', '1', '2', '1.0')"> <input type="hidden" id="2" value="0.5"> </td>
 <td  onclick="setval_human('0', '2', '3', '1.0')"> <input type="hidden" id="3" value="0.5"> </td>
  </tr>
  <tr>
   <td  onclick="setval_human('1', '0', '4','1.0')">  <input type="hidden" id="4" value="0.5"> </td>
   <td  onclick="setval_human('1', '1', '5', '1.0')">  <input type="hidden" id="5" value="0.5"> </td>
   <td  onclick="setval_human('1', '2', '6', '1.0')">  <input type="hidden" id="6" value="0.5"> </td>
  </tr>
  <tr>
    <td  onclick="setval_human('2', '0', '7', '1.0')"> <input type="hidden" id="7" value="0.5"> </td>
    <td  onclick="setval_human('2', '1', '8', '1.0')"> <input type="hidden" id="8" value="0.5"> </td>
    <td  onclick="setval_human('2', '2', '9', '1.0')"> <input type="hidden" id="9" value="0.5"> </td>
  </tr>
</table>

<input type="text" id="output" value="">

<button type="button" onclick="python()" id="send" >Python</button>
<button onclick="alert(ReadInput())">Zeig Input Parameter</button>
<button onclick="set_output()">Ouput setzen</button>


</div>
