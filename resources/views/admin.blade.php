<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>API National du CESI</title>
    <link rel="stylesheet" href="/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
</head>

<body>
    <!-- form serves to receive auth token -->
    <h1>Sign in to external Server</h1>
        <div>
            <input id="field" type="test" name="event" placeholder="Nom de l'event">
        </div>
        <div id="test">

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
        <script type="text/javascript" src="/js/cookie.js"></script>
        <script type="text/javascript" src="/datatables/datatables.min.js"></script>
        <script type="text/javascript" src="/jquery-ui/jquery-ui.js"></script>
        <script type="text/javascript" src="/js/Jquerycookie/jquery.cookie.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          var arr = [];

          //    alert($.cookie("token"));
              //form validation
                  $.ajax({
                      url: 'http://localhost:3000/api/events/',
                      type: 'GET',
                      dataType: 'json',
                      headers: {"Authorization": $.cookie("token")},

                      success: function(json) {
                        //  console.log(json);
                        //  console.log(json.data[0].name); //list names in json
                        var count = json.data.length; //count length of returned array
                        console.log(count);
                        for (i=0; i<count; i++) {
                           arr.push(json.data[i].name);
                          //console.log(arr[i]);
                        };

                          },
                      error: function(xhr, resp, text) {
                          console.log(xhr, resp, text);
                          console.log('error');
                      }
                  });
              //    var widget = new AutoComplete('test', arr);
                console.log(arr);
                $("#field").autocomplete({
                  source: arr
                })

        })

        </script>

        <script type="text/javascript">
            $(document).ready(function() {

              var table;
              table = $("#example").DataTable({
               "ajax": {
                 "url": 'http://localhost:3000/api/users/',
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
