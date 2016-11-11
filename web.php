<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">




<?php
if($_POST['submit'])
{

$daten = $_POST['tictactoe'];

print_r($daten);
        // Default Value setzen
        if ($daten[1] == '') {
            $daten[1] = 0.5;
             } elseif ($daten[1] == 'x') {
                $daten[1] = 1;
            }  elseif ($daten[1] == 'o') {
                $daten[1] = 0;
            } else {
                $daten[1] = 0.5;
            }
        if ($daten[2]== '') {
            $daten[2] = 0.5;
            } elseif ($daten[2] == 'x') {
                $daten[2] = 1;
            }  elseif ($daten[2] == 'o') {
                $daten[2] = 0;
            } else {
                $daten[2] = 0.5;
            }

        if ($daten[3]== '') {
            $daten[3] = 0.5;
            } elseif ($daten[3] == 'x') {
                $daten[3] = 1;
            }  elseif ($daten[3] == 'o') {
                $daten[3] = 0;
            } else {
                $daten[3] = 0.5;
            }

        if ($daten[4]== '') {
            $daten[4] = 0.5;
            } elseif ($daten[4] == 'x') {
                $daten[4] = 1;
            }  elseif ($daten[4] == 'o') {
                $daten[4] = 0;
            } else {
                $daten[4] = 0.5;
            }

        if ($daten[5]== '') {
            $daten[5] = 0.5;
            } elseif ($daten[5] == 'x') {
                $daten[5] = 1;
            }  elseif ($daten[5] == 'o') {
                $daten[5] = 0;
            } else {
                $daten[5] = 0.5;
            }

        if ($daten[6]== '') {
            $daten[6] = 0.5;
            } elseif ($daten[6] == 'x') {
                $daten[6] = 1;
            }  elseif ($daten[6] == 'o') {
                $daten[6] = 0;
            } else {
                $daten[6] = 0.5;
            }

        if ($daten[7]== '') {
            $daten[7] = 0.5;
            } elseif ($daten[7] == 'x') {
                $daten[7] = 1;
            }  elseif ($daten[7] == 'o') {
                $daten[7] = 0;
            } else {
                $daten[7] = 0.5;
            }

        if ($daten[8]== '') {
            $daten[8] = 0.5;
            } elseif ($daten[8] == 'x') {
                $daten[8] = 1;
            }  elseif ($daten[8] == 'o') {
                $daten[8] = 0;
            } else {
                $daten[8] = 0.5;
            }

        if ($daten[9]== '') {
            $daten[9] = 0.5;
            } elseif ($daten[9] == 'x') {
                $daten[9] = 1;
            }  elseif ($daten[9] == 'o') {
                $daten[9] = 0;
            } else {
                $daten[9] = 0.5;
            }
  
        $command = "python /var/www/html/neuronal_network/tic.py $daten[1] $daten[2] $daten[3] $daten[4] $daten[5] $daten[6] $daten[7] $daten[8] $daten[9] ";
        $temp = passthru($command);
        print $temp;

} else {

?>

<form action="" id="form" name="form" method="post">


<title> Tic-Tac-Toe </title>    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>  
<link type="text/css" rel="stylesheet" href="style.css" />  

<body>

<script>

function setval(input) {
document.getElementById(input).value='x' 
}

</script>


<table id ='board'>
  <tr>
    <td  onclick="setval('1')"> <input id="1" type="text" name="lname">  </td>
 <td  onclick="setval('2')"> <input id="2" type="text" name="lname">  </td>
 <td  onclick="setval('3')"> <input id="3" type="text" name="lname">  </td>
  </tr>
  <tr>
    <td></td>
   <td></td>
   <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td> 
    <td></td>
  </tr>
</table>


<h1><i class="icon-circle-blank"></i></h1>

<h1><i class="icon-circle-romve"></i></h1>
<br>
<button type="submit" name="SubmitButton"  >an Netzwerk senden</button>
</form>


<?php
}
?>
</div>

