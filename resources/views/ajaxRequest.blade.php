<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="_token" content="{{csrf_token()}}" />
        <title>Grocery Store</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
      <div class="container">
         <div class="alert alert-success" style="display:none"></div>
         <form id="myForm">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="user_id">
            </div>
            <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" id="cart_data">
            </div>
            <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
          </form>
      </div>
      <div id="content"></div>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
             type: 'get',
             url: "{{ url('/ajaxRequest') }}",
             dataType: 'html',

             success: function(content) {
                 
                 $("#content").html(jQuery('#user_id').val());

             },
             error: function(xhr, status, text) {
                 $("#content").text(text);
             }
         });
               jQuery.ajax({
                  url: "{{ url('/products/post') }}",
                  method: 'post',
                  data: {
                     user_id: jQuery('#user_id').val(),
                     cart_data: jQuery('#cart_data').val(),
                     
                  },
                  success: function(result){
                    jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });
      </script>
    </body>
</html>