<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="page-header">
  <h1>Neuronales Netzwerk <small>Tic Tac Toe</small></h1>
</div>

<?php
if($_POST['submit'])
{
echo "laasdfh";
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link type="text/css" rel="stylesheet" href="style.css" />  

<body>

<script>

function setval(row,cell) {
document.getElementById("board").rows[row].cells[cell].innerHTML='<h2><i class="fa fa-circle-thin"></i></h2>';
}

</script>

<table id ='board'>
  <tr>
 <td  onclick="setval('0', '0')"></td>
 <td  onclick="setval('0', '1')"></td>
 <td  onclick="setval('0', '2')"></td>
  </tr>
  <tr>
    <td  onclick="setval('1', '0')"></td>
   <td  onclick="setval('1', '1')"></td>
   <td  onclick="setval('1', '2')"></td>
  </tr>
  <tr>
    <td  onclick="setval('2', '0')"></td>
    <td  onclick="setval('2', '1')"></td> 
    <td  onclick="setval('2', '2')"></td>
  </tr>
</table>

<br>
<button type="submit" name="SubmitButton"  >an Netzwerk senden</button>
</form>


<?php
}
?>
</div>

