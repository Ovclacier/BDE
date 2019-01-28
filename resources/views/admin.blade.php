@extends('layout')

	@section('title')
    <meta charset="utf-8">
    <title>Administration</title>
    <link rel="stylesheet" href="/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
    @endsection

	@section('contenu')

	<div>
		<div class = "container-fluid container blc text-center">
			<div class="row ble1 ">
            <h1>BDE Administration</h1>
            </div>
        <!--    <div class="row ble2 ">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <button type="button">Download to .csv</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <button type="button">Download to .pdf</button>
          </div> -->
                    <div>
                        <input id="field" type="test" name="event" placeholder="Nom de l'event">
                    </div>
                    <div id="test">

                    </div>
                    <input id="get" type="button" value="Submit" />
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 tableau">
            <table id="example" class="adm" style="width:80%">
              <thead style="color: white">
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

			</div>
    </div>
    <script src="/js/jquery-3.3.1.js"></script>
    <!-- cookie.js is obsolete -->
    <script type="text/javascript" src="/js/cookie.js"></script>
    <script type="text/javascript" src="/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/Jquerycookie/jquery.cookie.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      var arr = [];
      //var test = listCookies();
      //console.log(test);

      //    alert($.cookie("token"));
          //form validation
              $.ajax({
                  url: 'http://localhost:3000/api/users',
                  type: 'GET',
                  dataType: 'json',
                  headers: {"Authorization": $.cookie("token")},

                  success: function(json) {
                    //  console.log(json);
                    //  console.log(json.data[0].name); //list names in json
                    var count = json.data.length; //count length of returned array
                    //console.log(count);
                    for (i=0; i<count; i++) {
                       arr.push(json.data[i].title);
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
            dom: 'Bfrtips',
            buttons: [ {
              extend: 'pdf',
              title: 'Download as PDF',
              filename: 'pdf_data'
            }, {
              extend: 'csv',
              title: 'Download as CSV',
              filename: 'csv_data'
            }, {
              extend: 'excel',
              title: 'Download as Excel',
              filename:'excel_data'
            }],
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

@endsection
