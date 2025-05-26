<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulario computer</h1>

    <br>

    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="title">number:</label>
            <input type="text" id="title" name="number" >

            <br>
            <br>

            <label for="">brand</label>
            <input type="text" name="brand">

            <br>
            <br>

        <button type="submit" class="btn btn-outline-success mb-4 ">guardar</button>

    </form>




</body>
</html>
