<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nueva encuesta</title>
</head>
<body>
    Hola {{$egresado->nombre}}
    <br>
    Este correo es para invitarte a contestar la siguiente encuesta <a href="{{$encuesta->link}}">{{$encuesta->nombre}}</a>
</body>
</html>