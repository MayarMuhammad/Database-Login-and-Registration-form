function validateRegister() {
  var name = document.getElementById("Name")[0].value;
  var password = document.getElementById("Password").value;
  var cpassword = document.getElementById("cPassword").value;
  var email = document.getElementById("Email").value;
  var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
  var result = "";

  if (name.length <= 3 || name == "") {
    result += "Name should be at least three characters.\n";
    document.getElementById("name").style.borderColor = "red";
    return false;
  }
  if (password.length <= 6 || password == "") {
    result += "Password should be at least 6 characters.\n";
    document.getElementById("password").style.borderColor = "red";
    return false;
  }
  if (password != cpassword || cpassword == "") {
    result += "Passwords do not match.\n";
    document.getElementById("password").style.borderColor = "red";
    document.getElementById("cpassword").style.borderColor = "red";
    return false;
  }
  if (email == null || email == "") {
    result += "Email can't be blank";
    document.getElementById("email").style.borderColor = "red";
    return false;
  }
  if (!email.value.match(mailformat)) {
    result += "You have entered an invalid email address!";
    document.getElementById("email").style.borderColor = "red";
    return false;
  }
  if (result != "") {
    alert(result);
  }
  return true;
}

function validateLogin() {
  var email = document.getElementById("Email").value;
  var password = document.getElementById("Password").value;
  var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
  var result = "";

  if (password.length <= 6 || password == "") {
    result += "Password should be at least 6 characters.\n";
    document.getElementById("password").style.borderColor = "red";
    return false;
  }
  if (!email.value.match(mailformat)) {
    result += "You have entered an invalid email address!";
    document.getElementById("email").style.borderColor = "red";
    return false;
  }
  if (result != "") {
    alert(result);
  }
  return true;
}
