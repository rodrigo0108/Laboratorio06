<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio</title>
</head>
<body>

<form method="post" action="ejercicio1post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <br>
    Introduzca su edad <input  name="edad" >
    <br>
    Seleccione si es estudiante o no
    <br>
    <input type="radio" name="gender" value="si" checked> Si<br>
    <input type="radio" name="gender" value="no"> No<br>
    <br>
    <input value="Calcular" type="submit">

</form>

</body>
</html>