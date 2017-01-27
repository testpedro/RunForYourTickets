/*------------Validation Function-----------------*/
var count = 0; // To count blank fields.
function validation(event) {
  var input_field = document.getElementsByClassName('login_input'); // Fetching all inputs with same class name text_field and an html tag textare
  // For loop to count blank inputs.
  for (var i = input_field.length; i > count; i--) {
    if (input_field[i - 1].value == '') {
      count++;
    } else {
      count = 0;
    }
  }
  if (count != 0 || y == 0) {
    alert("*Preencha todos os Campos*"); // Notifying validation
    event.preventDefault();
  } else {
    return true;
  }
}
/*---------------------------------------------------------*/
// Function that executes on click of first next button.
function next_step1() {
  document.getElementById("first").style.display = "none";
  document.getElementById("second").style.display = "block";

}

// Function that executes on click of second next button.
function next_step2() {
  document.getElementById("second").style.display = "none";
  document.getElementById("third").style.display = "block";

}
// Function that executes on click of second previous button.
function prev_step2() {
  document.getElementById("third").style.display = "none";
  document.getElementById("second").style.display = "block";
}
