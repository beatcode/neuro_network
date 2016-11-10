
<?php
if($_POST['submit'])
{

$daten = $_POST['tictactoe'];

print_r($daten);

        //  $command = "python /var/www/html/test/tic.py";
        $command = "python /var/www/html/test/tic.py $daten[1] $daten[2] $daten[3] $daten[4] $daten[5] $daten[6] $daten[7] $daten[8] $daten[9]";

        $temp = passthru($command);
        print $temp;

} else {

?>
<form action="" id="form" name="form" method="post">
<table>
    <tr>
        <td>
            <input type="text" name="tictactoe[1]" input="1"  maxlength="1" size="1"></td>
        </td>
        <td>
            <input type="text" name="tictactoe[2]"  maxlength="1" size="1"></td>
        </td>
        <td>
            <input type="text" name="tictactoe[3]"  maxlength="1" size="1"></td>
        </td>
   </tr>
   <tr>
        <td>
            <input type="text" name="tictactoe[4]"  maxlength="1" size="1"></td>
        </td>
        <td>
            <input type="text" name="tictactoe[5]"  maxlength="1" size="1"></td>
        </td>
        <td>
            <input type="text" name="tictactoe[6]"  maxlength="1" size="1"></td>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="tictactoe[7]"  maxlength="1" size="1"></td>
        </td>
        <td>
            <input type="text" name="tictactoe[8]"  maxlength="1" size="1"></td>
        </td>
        <td>
            <input type="text" name="tictactoe[9]"  maxlength="1" size="1"></td>
            <input type="hidden" name="submit"  value="x" input="1"  maxlength="1" size="1"></td>

        </td>
     </tr>
            <button type="submit" name="SubmitButton"  >an Netzwerk senden</button>
    
</tr>

</table>

</form>
<?php
}
?>



