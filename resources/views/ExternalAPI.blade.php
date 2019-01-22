<!doctype html>
<html>
<head>
<title>API National du CESI</title>

</script>
</head>
<body>
  <!-- form serves to receive auth token -->
    <h1>Sign in to external Server</h1>
    <form id="frm" name="myForm" onsubmit = "return(validate());" method="post">
    @csrf
        <div>
            <input type="test" name="Name" placeholder="Ville de votre centre">
        </div>

        <div>
            <input name="Password" placeholder="Mot de Passe">
        </div>

        <div>
            <input id="submit" type="button" value="Submit"/>
        </div>
    </form>
    <script src="/js/jquery-3.3.1.js"></script>
    <script type = "text/javascript">
    $(document).ready(function() {
      //form validation
      $("#submit").on('click', function () {
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
        //send data to API
        $.ajax({
          url:'http://localhost:3000/auth/signin',
          type : 'POST',
          dataType : 'json',
          data : $("#frm").serialize(),
          success : function(result) {
            console.log("success");
            console.log(result);
          },
          error : function(xhr,resp, text) {
            console.log(xhr, resp, text);
            console.log('error');
          }
        })
      })
    });
    </script>

</body>
</html>
