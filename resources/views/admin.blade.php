<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>API National du CESI</title>
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
</head>

<body>
    <!-- form serves to receive auth token -->
    <h1>Sign in to external Server</h1>
    <form id="frm" name="myForm" method="get">
        {{ csrf_field() }}
        <input id="get" type="button" value="GET" />
    </form>


    <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Mail</th>
          <th>Prenom</th>
          <th>Nom</th>
          <th>Centre</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
      </tbody>

        <script src="/js/jquery-3.3.1.js"></script>
        <!-- cookie.js is obsolete -->
        <script src="/js/cookie.js"></script>
        <script type="text/javascript" src="datatables/datatables.min.js"></script>
        <script src="/js/Jquerycookie/jquery.cookie.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              $("#example").DataTable({
                "ajax": {
                  "url": 'http://localhost:3000/api/users',
                  "dataType": "json",
                  "type": "GET",
                  "beforeSend":function(xhr) {
                    xhr.setRequestHeader("Authorization", $.cookie("token"));
                  }
                },
                "columns": [
                  {"data":"Mail"},
                  {"data":"Prenom"},
                  {"data":"Nom"},
                  {"data":"Centre"},
                  {"data":"Grade"}

                ]
              });
            })
        </script>
</body>

</html>
