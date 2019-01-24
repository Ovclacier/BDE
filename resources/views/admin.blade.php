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
        <div>
            <input id="field" type="test" name="event" placeholder="Id de l'event">
        </div>
        <input id="get" type="button" value="Submit" />


    <table id="example" class="display" style="width:80%">
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
              var table;
              table = $("#example").DataTable({
               "ajax": {
                 "url": 'http://localhost:3000/api/participate/1',
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

              $("#get").on('click', function() {
                  var data = $('#field').val();
                  console.log(data);
                  if (data == "") {
                    alert('please specify an event!');
                    return false;
                  }
              //    console.log(data);
                  table.destroy();
                   table = $("#example").DataTable({
                    "ajax": {
                      "url": 'http://localhost:3000/api/participate/' + data,
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
                });
            });

        </script>
</body>

</html>
