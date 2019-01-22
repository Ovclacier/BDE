<!doctype html>
<html>
<head>
<title>API National du CESI</title>
<script type = "text/javascript">
//Form validation code will go here
function validate() {
console.log(0.1 + 0.2);
if (document.myForm.Name.value == "") {
  alert("please provide your name!");
  document.myForm.Name.focus();
  return false;
}
if (document.myForm.Password.value == "") {
  alert("Password field is empty!");
  document.myForm.Password.focus();
  return false;
}
  return(true);
};
</script>
</head>
<body>
  <!-- form serves to receive auth token -->
    <h1>Sign in to external Server</h1>
    <form method="post" name="myForm" onsubmit = "return(validate());" action="http://localhost:3000/auth/signin">
    @csrf
        <div>
            <input type="test" name="Name" placeholder="Ville de votre centre">
        </div>

        <div>
            <input name="Password" placeholder="Mot de Passe">
        </div>

        <div>
            <input type="submit" value="Submit"/>
        </div>
    </form>
</body>
</html>
