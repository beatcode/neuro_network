<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8"/>

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


if ( $(".chk").is(":checked")) {

} else {

	$("#output").val(ReadInput());
	$.ajax({
        	type: 'POST',	
        	url: "/neuronal_network/PythonCall_play.php",
		data: "input="+ ReadInput(),
       		success: function(data){
			$("#calc").val(data);
			$("#input").val(data);
			set_output(data);
	        }
	});

 	count();
}}

$(document).ready(function(){


$(".chk").click(function() {
  clear_content();
});
});


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

var result = [feld1,feld2,feld3,feld4,feld5,feld6,feld7,feld8,feld9];


return result;

}


function clear_content() {


  $("#input").val("0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5");
  $("#output").val("");
  $("#calc").val("");
  $("#zug").val("");

 var input = "0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5"; 
 set_output(input);


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

function count() {

   counter = $("#zug").val();
   counter++;
   $("#zug").val(counter);

}
function setval_human(row,cell,feld, wert) {
	

    act_field = document.getElementById(feld).value;

    if( act_field != '0.5' ) {

    } else if ( wert == '0.0') {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-circle-thin"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else if (wert == '1.0') {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-times"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else {
	document.getElementById("board").rows[row].cells[cell].innerHTML='<input type = "hidden" id="' + feld + '"  value="0.5" >';
    }

   $("#output").val(ReadInput());
   count();
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



<div class="container">
  <div class="row">


    <div class="col-sm-6">
<table id ='board'>
  <tr>
 <td before="test()"  onclick="setval_human('0', '0', '1', '1.0')"> <input type="hidden" id="1" value="0.5"> </td>
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

  </div>
 <div class="col-sm-6">

<h2>Rückgabewert</h2>
<form class="form-horizontal">
  <div class="form-group">
    <label for="calc" class="col-sm-2 control-label">Berechnet</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="calc" placeholder="Berechnet">
    </div>
  </div>

<h2>Trainingsätze</h2>
  <div class="form-group">
    <label for="input" class="col-sm-2 control-label">Input</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="input" placeholder="Input">
    </div>
  </div>

  <div class="form-group">
    <label for="output" class="col-sm-2 control-label">Output</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="output" placeholder="Output">
    </div>
  </div>
  <div class="form-group">
    <label for="zug" class="col-sm-2 control-label">Zug</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="zug" value="0"  placeholder="Zug">
    </div>
  </div>

</form>

</div>

  </div>
  <div class="row">
    <div class="col-sm-6"> </div>

    <div class="col-sm-6">
	<div class="center-block">
    <br><br><button type="button" class="btn btn-success"  onclick="python()" id="send" >senden</button>
     <button onclick="clear_content()" class="btn btn-danger " >Clear</button>

<br> <h2>Trainingsmodus </h2>
<input type="checkbox" class="chk">
<p>Im Trainingsmodus werden Trainingssätze für das Neuronale Netzwerk erzeugt. Diese Trainingssätze bilden die Grundlage für das selbständige Training und das gewichten der Neuronen. </p>
 	</div>
	</div>
  
 </div>
</div>



<!-- <button onclick="alert(ReadInput())">Zeig Input Parameter</button> -->


</div>
