<!doctype html>
<html>

<head>
    <title>API National du CESI</title>
</head>

<body>
    <!-- form serves to receive auth token -->
    <h1>Sign in to external Server</h1>
    <form id="frm" name="myForm" method="get">
        {{ csrf_field() }}
            <input id="get" type="button" value="GET" />
    </form>

    <!-- form to access API -->

    <script src="/js/jquery-3.3.1.js"></script>
    <!-- cookie.js is obsolete -->
    <script src="/js/cookie.js"></script>
    <script src="/js/Jquerycookie/jquery.cookie.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        //    alert($.cookie("token"));

            //form validation
            $("#get").on('click', function() {
                //send data to API
                $.ajax({
                    url: 'http://localhost:3000/api/users',
                    type: 'GET',
                    dataType: 'json',
                    headers: {"Authorization": $.cookie("token")},
                    success: function(json) {
                        //    alert("success");
                        console.log("success");
                        var Users = json;
                        console.log(Users);
                        //    console.log(Jtoken);
                    },
                    error: function(xhr, resp, text) {
                        console.log(xhr, resp, text);
                        console.log('error');
                    }
                })
            })
        });
    </script>

</body>

</html>
