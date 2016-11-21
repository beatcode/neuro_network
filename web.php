<!DOCTYPE html>
<html lang="de">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script language="javascript" type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/style.css" />


    <title> Tic-Tac-Toe </title>

    <div class="page-header">
        <h1>Neuronales Netzwerk</h1>
    </div>


<body>


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

            <div class="center-block">
                <br><br><button type="button" class="btn btn-success"  onclick="python()" id="send" >senden</button>
                <button onclick="clear_content()" class="btn btn-danger " >Clear</button>

                <br> <h2>Trainingsmodus </h2>
                <input type="checkbox" class="chk">
                <p>Im Trainingsmodus werden Trainingssätze für das Neuronale Netzwerk erzeugt. Diese Trainingssätze bilden die Grundlage für das selbständige Training und das gewichten der Neuronen. </p>
            </div>

        </div>

        </form>

    </div>

</div>
<div class="row">
    <div class="col-sm-6"> </div>

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
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="zug" value="0" placeholder="Zug">
                </div>
            </div>
            <div class="form-group">
                <label for="player" class="col-sm-2 control-label">Mensch</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="player" value="-"  placeholder="">
                </div>
            </div>
    </div>

</div>
</div>

<input type="hidden" class="form-control" id="gezogen" value="0"  placeholder="">
<!-- <button onclick="alert(ReadInput())">Zeig Input Parameter</button> -->
</div>
