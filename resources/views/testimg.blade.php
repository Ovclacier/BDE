<!doctype html>
<html>



<body>
            <form action="" method="POST" enctype="multipart/form-data">

                @csrf
                <h1> Enter Details to create a product</h1>        

                    <label>Image</label><input type="file" name="image" id="image">
 
                <button type="submit">Submit</button>
            </form><br><br><br><br><br><br>
            
            @foreach( $tests as $test )
                {{ $test->react }}
                {{ $test->id_user }}
                {{ $test->id_image }}
            @endforeach

      
</body>

</html>