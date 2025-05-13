<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulario Teacher</h1>

    <br>

    <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="title">Name:</label>
            <input type="text" id="title" name="name" >

            <br>
            <br>

            <label for="">ingresa tu correo</label>
            <input type="email" name="email" placeholder="Correo electrónico">

            <br>
            <br>
            
        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

    </form>




</body>
</html>
