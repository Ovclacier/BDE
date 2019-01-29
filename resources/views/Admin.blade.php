@extends('layout')

@section('title')
<title>Administration</title>
<link rel="stylesheet" href="/jquery-ui/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
@endsection

@section('contenu')

<div>
	<div class="container-fluid container blc text-center">
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
			<input id="field" name="event" style="width:20%">
		</div>
		<div id="test">
			<!--	<input id="get" type="button" value="Submit" style="width:20%"/> -->
			<button id="get" type="button" name="button" style="width:20%"> Get event members </button>
		</div>
	</div>
	<div class="container" style="background-color:white">
		<button id="All" type="button" name="button-edit"> Get all users </button>


		<div class="col-lg-12 col-md-12 col-sm-12 tableau ">
			<table id="example" style="width:80%">
				<thead style="color:black">
					<tr>
						<th>id</th>
						<th>Mail</th>
						<th>Prenom</th>
						<th>Nom</th>
						<th>Centre</th>
						<th>Grade</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>

			<button id="edit" type="button" name="button-edit"> Edit </button>
			<!--	<button id="new" type="button" name="button-new"> New </button> -->
			<button id="del" type="button" name="button-del"> Delete selected </button>


			<div class="container">
				<form id="pop">
					<input id="mailForm"  name="Mail" placeholder="Mail">
					<input id="prenomForm" name="Prenom" placeholder="Prenom">
					<input id="nomForm" name="Nom" placeholder="Nom">
					<input id="centreForm" name="Centre" placeholder="Centre">
					<input id="gradeForm" name="Grade" placeholder="Grade">
					<input id="CRUD" type="button" name="submit" value="Submit">
				</form>
			</div>

		</div>
	</div>
</div>
<!-- cookie.js is obsolete -->
<script src="{{ asset('/js/cookie.js') }}"></script>
<script src="{{ asset('/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('/js/Jquerycookie/jquery.cookie.js') }}"></script>
<script>
	$(document).ready(function() {
		//fonction autocompletion

		var arr = [];
		//autocompletion for search
		$.ajax({
			url: 'http://localhost:3000/api/events',
			type: 'GET',
			dataType: 'json',
			headers: {
				"Authorization": $.cookie("token")
			},

			success: function(json) {
				//  console.log(json);
				//  console.log(json.data[0].name); //list names in json
				var count = json.data.length; //count length of returned array
				//console.log(count);
				for (i = 0; i < count; i++) {
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
<script>
//Fonctions dataTables
	$(document).ready(function() {
		$("#pop").hide();
		var id;
		var Mail;
		var Nom;
		var Prenom;
		var Centre;
		var Grade;
		var table;
		var target_url;
		var method;

		function drawAll() {
			table = $("#example").DataTable({
				dom: 'Bfrtips',

				buttons: [{
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
					filename: 'excel_data'
				}],
				"ajax": {
					"url": 'http://localhost:3000/api/users',
					"dataType": "json",
					"type": "GET",
					"beforeSend": function(xhr) {
						xhr.setRequestHeader("Authorization", $.cookie("token"));
					}
				},
				"columns": [{
						"data": "id"
					},
					{
						"data": "Mail"
					},
					{
						"data": "Prenom"
					},
					{
						"data": "Nom"
					},
					{
						"data": "Centre"
					},
					{
						"data": "Grade"
					}
				],
			});
		}

		function getEvents() {
			var data = $('#field').val();
			console.log(data);
			if (data == "") {
				alert('please specify an event!');
				return false;
			}
			//    console.log(data);
			table.destroy();
			table = $("#example").DataTable({
				dom: 'Bfrtips',

				buttons: [{
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
					filename: 'excel_data'
				}],
				"ajax": {
					"url": 'http://localhost:3000/api/events/' + data,
					"dataType": "json",
					"type": "GET",
					"beforeSend": function(xhr) {
						xhr.setRequestHeader("Authorization", $.cookie("token"));
					}
				},
				"columns": [{
						"data": "id"
					},
					{
						"data": "Mail"
					},
					{
						"data": "Prenom"
					},
					{
						"data": "Nom"
					},
					{
						"data": "Centre"
					},
					{
						"data": "Grade"
					}
				]
			});
		}
		drawAll();
		//row selection
		$('#example tbody').on('click', 'tr', function() {
			if ($(this).hasClass('selected')) {
				$(this).removeClass('selected');
				id = null;
				Mail = null;
				Nom = null;
				Prenom = null;
				Centre = null;
				Grade = null;
				$("#pop").hide();
			} else {
				$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
				id = (table.row(this).data().id);
				Mail = (table.row(this).data().Mail);
				Nom = (table.row(this).data().Nom);
				Prenom = (table.row(this).data().Prenom);
				Centre = (table.row(this).data().Centre);
				Grade = (table.row(this).data().Grade);
			}
		});
		//destory table and fetch new data
		$("#get").on('click', function() {
			getEvents();
		});
		$("#new").on('click', function() {
			$("#pop").show();
			target_url = "http://localhost:3000/api/users";
			method = "POST";
		});
		$("#edit").on('click', function() {
			if (table.row('.selected').count() > 0) {
				target_url = "http://localhost:3000/api/users/" + id;
				method = "PUT";
				$("#mailForm").val(Mail);
				$("#nomForm").val(Nom);
				$("#prenomForm").val(Prenom);
				$("#centreForm").val(Centre);
				$("#gradeForm").val(Grade);
				$("#pop").show();
			} else {
				//console.log(table.row('.selected').count());
				alert("select an user");
			}
		});
		$("#CRUD").on('click', function() {
			console.log(method);
			//console.log(id);
			$.ajax({
				url: target_url,
				type: method,
				dataType: "json",
				headers: {
					"Authorization": $.cookie("token")
				},
				data: $('#pop').serializeArray(),
				success: function(result) {
					//	console.log("succes update");
					//	console.log(result);
					table.destroy();
					$("#pop").hide();
					drawAll();
				},
				error: function(xhr, resp, text) {
					console.log(xhr, resp, text);
				}
			})
		});
		$("#All").on('click', function() {
			table.destroy();
			drawAll();
		});

		$("#del").on('click', function() {
			if (id == null) {
				alert("no user selected");
			} else {
				confirm("Are you sure you want to delete?");
				confirm("Are you ABSOLUTELY sure? this action is not reversible.");
				$.ajax({
					url: "http://localhost:3000/api/users/" + id,
					type: "DELETE",
					dataType: "json",
					headers: {
						"Authorization": $.cookie("token")
					},
					//data:$('#pop').serializeArray(),
					success: function(result) {
						console.log(result);
						table.destroy();
						drawAll();
						id = null;
					},
					error: function(xhr, resp, text) {
						console.log(xhr, resp, text);
					}
				})

			}
		})
	});
</script>
@endsection
