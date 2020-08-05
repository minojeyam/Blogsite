// custom jQuery script

$(document).ready(function () {
  // password_err validation
  $("#pw2").on("blur", passwordCheck);
});

//passwordCheck Function
function passwordCheck() {
  var p1 = $("#pw1").val();
  var p2 = $("#pw2").val();

  if (p1 != p2) {
    $("#password_err").html("Password Mismatched");

    // Hiding the #password_correct value
    $("#password_correct").hide();
  } else {
    // Hiding the #password_err value
    $("#password_err").hide();

    $("#password_correct").html("Password Matched");
  }
}
