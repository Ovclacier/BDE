<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create Event</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form action="/posts" enctype="multipart/form-data" method="POST">

                @csrf
                <h1> Enter Details to create an event</h1>

                <div class="form-input">
                    <label>Title</label> <input type="text" id="title" name="title">
                </div>
                <div class="form-input">
                    <label>Description</label> <input type="text" name="description">
                </div>
                <div class="form-input">
                    <label>Date</label> <input type="date" name="date_event">
                </div>
                <div class="form-input">
                    <label>Author</label> <input type="text" name="author">
                </div>
                

                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
</body>

</html>