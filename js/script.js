$(document).ready(function() {
  $(".chk").click(function() {
    if ($(".chk").is(":checked")) {
      alert('In Entwicklung');
      clear_content();
    } else {
      weights()
    }

  });
});


function weights(){
   $.ajax({
      type: 'POST',
      url: "/neuronal_network/ajax/PythonCall_weights.php",
      success: function(data) {
        alert("Gewichtungen errechnet");
        // set_output(data);
      }
    });
}

function python() {

  set_player();

  if ($(".chk").is(":checked")) {

    $.ajax({
      type: 'POST',
      url: "/neuronal_network/ajax/PythonCall_Train.php",
      data: "input=" + $("#input").val() + "&output=" + $("#output").val(),
      success: function(data) {

        // set_output(data);
      }
    });

  } else {

    $.ajax({
      type: 'POST',
      url: "/neuronal_network/ajax/PythonCall_play.php",
      data: "input=" + ReadInput(),
      success: function(data) {
        $("#calc").val(data);
        $("#input").val(data);
        set_output(data);
      }
    });
  }
}






function set_player() {

  player = $("#player").val();

  if (player == "1") {
    $("#player").val("2");
  } else if (player == "2") {
    $("#player").val("1");
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


function clear_content() {

  $("#input").val("0.5,0.5,0.5,0.5,0.5,0.5,0.5,0.5,0.5");
  $("#output").val("");
  $("#calc").val("");
  $("#zug").val("0");
  $("#player").val("1");

  var input = "0.5,0.5,0.5,0.5,0.5,0.5,0.5,0.5,0.5";
  set_output(input);

}


function set_output(val) {

  var output = val;
  output = output.replace(/\s/g, "");
  var splits = output.split(",");

  setval_compute('0', '0', '1', splits[0]);
  setval_compute('0', '1', '2', splits[1]);
  setval_compute('0', '2', '3', splits[2]);
  setval_compute('1', '0', '4', splits[3]);
  setval_compute('1', '1', '5', splits[4]);
  setval_compute('1', '2', '6', splits[5]);
  setval_compute('2', '0', '7', splits[6]);
  setval_compute('2', '1', '8', splits[7]);
  setval_compute('2', '2', '9', splits[8]);
}


function get_zug() {
  return $("#zug").val();
}

function count_Zug() {

  counter = $("#zug").val();
  counter++;
  $("#zug").val(counter);
}

function get_value() {
  var player = $("#player").val();
  if (player == "1") {
    return "1.0";
  } else if (player == "2") {
    return "0.0";
  }

}



function setval_human(row, cell, feld, wert) {

  var wert = get_value();

  act_field = document.getElementById(feld).value;

  // training
  if ($(".chk").is(":checked")) {


    // Play
    if (act_field != '0.5') {

    } else if (wert == '0.0') {
      document.getElementById("board").rows[row].cells[cell].innerHTML = '<h2><i class="fa fa-circle-thin"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else if (wert == '1.0') {
      document.getElementById("board").rows[row].cells[cell].innerHTML = '<h2><i class="fa fa-times"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else {
      document.getElementById("board").rows[row].cells[cell].innerHTML = '<input type = "hidden" id="' + feld + '"  value="0.5" >';
    }

    // aktueller output wird für den nächsten zug zum input
    if (get_zug() != 0) {
      $("#input").val($("#output").val());
    }


    // Output wird neu vom aktuellers Situation gelesen.
    $("#output").val(ReadInput());
    count_Zug();

    // An Python senden
    python()

  } else {



    // Play
    if (act_field != '0.5') {

    } else if (wert == '0.0') {
      document.getElementById("board").rows[row].cells[cell].innerHTML = '<h2><i class="fa fa-circle-thin"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else if (wert == '1.0') {
      document.getElementById("board").rows[row].cells[cell].innerHTML = '<h2><i class="fa fa-times"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
    } else {
      document.getElementById("board").rows[row].cells[cell].innerHTML = '<input type = "hidden" id="' + feld + '"  value="0.5" >';
    }

    $("#output").val(ReadInput());
    count_Zug();
    set_player();
  }

}

function setval_compute(row, cell, feld, wert) {
  if (wert == 0.0) {
    document.getElementById("board").rows[row].cells[cell].innerHTML = '<h2><i class="fa fa-circle-thin"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
  } else if (wert == 1.0) {
    document.getElementById("board").rows[row].cells[cell].innerHTML = '<h2><i class="fa fa-times"></i></h2> <input type = "hidden" id="' + feld + '"  value="' + wert + '" >';
  } else {
    document.getElementById("board").rows[row].cells[cell].innerHTML = '<input type = "hidden" id="' + feld + '"  value="0.5" >';
  }

}