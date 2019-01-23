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



        <script src="/js/jquery-3.3.1.js"></script>
        <!-- cookie.js is obsolete -->
        <script src="/js/cookie.js"></script>
        <script type="text/javascript" src="datatables/datatables.min.js"></script>
        <script src="/js/Jquerycookie/jquery.cookie.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              $.ajax({
                  'url': "http://localhost:3000/api/users",
                  'method': "GET",
                  'contentType': 'application/json',
                  'headers': {
                  'Authorization': $.cookie("token")
                  },
              }).done(function(data) {
                console.log(data);
                  $('#example').dataTable({
                      "sDom": 'frtip',
                      "bServerSide": true,
                      "bProcessing" : true,
                      "aaData": data,
                      "columns": [{
                              "data": "Mail"
                          },
                          {
                              "data": "Nom"
                          },
                          {
                              "data": "Prenom"
                          },
                          {
                              "data": "Centre"
                          }
                      ]
                  });
              })
          })
        </script>

</body>

</html>
