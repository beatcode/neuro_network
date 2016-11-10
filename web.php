
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>


function setTableCellVal(input) {
document.getElementById(input).value='x' 
}



</script>



<div class="page-header">
  <h1>Neuronales Netzwerk <small>Tic Tac Toe</small></h1>
</div>

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
  
        $command = "python /var/www/html/tic.py $daten[1] $daten[2] $daten[3] $daten[4] $daten[5] $daten[6] $daten[7] $daten[8] $daten[9] ";

        $temp = passthru($command);
     
        print $temp;

} else {

?>
<form action="" id="form" name="form" method="post">
<table id="table1">
    <tr>
        <td onclick="setTableCellVal('1')">
            <input id="1"  type="text" name="tictactoe[1]" input="1"  maxlength="1" size="1"></td>
        </td>
        <td onclick="setTableCellVal('2')">
            <input id="2" type="text" name="tictactoe[2]"  maxlength="1" size="1" > </td>
        </td>
        <td onclick="setTableCellVal('3')">
            <input id="3" type="text" name="tictactoe[3]"  maxlength="1" size="1"></td>
        </td>
   </tr>
   <tr>
       <td onclick="setTableCellVal('4')">
            <input id="4" type="text" name="tictactoe[4]"  maxlength="1" size="1"></td>
        </td>
       <td onclick="setTableCellVal('5')">
            <input id="5" type="text" name="tictactoe[5]"  maxlength="1" size="1"></td>
        </td>
        <td onclick="setTableCellVal('6')">
            <input id="6" type="text" name="tictactoe[6]"  maxlength="1" size="1"></td>
        </td>
    </tr>
    <tr>
        <td onclick="setTableCellVal('7')">
            <input id="7" type="text" name="tictactoe[7]"  maxlength="1" size="1"></td>
        </td>
       <td onclick="setTableCellVal('8')">
            <input id="8" type="text" name="tictactoe[8]"  maxlength="1" size="1"></td>
        </td>
       <td onclick="setTableCellVal('9')">
            <input id="9" type="text" name="tictactoe[9]"  maxlength="1" size="1"></td>
            <input type="hidden" name="submit"  value="x" input="1"  maxlength="1" size="1"></td>

        </td>
     </tr>
            
    
</tr>

</table>
<br>
<button type="submit" name="SubmitButton"  >an Netzwerk senden</button>
</form>
<?php
}
?>
</div>

