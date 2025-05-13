<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulario course</h1>

    <br>

    <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="title">course_number:</label>
            <input type="text" id="title" name="course_number" >

            <br>
            <br>

            <label for="">day</label>
            <input type="text" name="day">

            <br>
            <br>

        <button type="submit" class="btn btn-outline-success mb-4 ">guardar</button>

    </form>




</body>
</html>
