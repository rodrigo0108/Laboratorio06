<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio</title>
</head>
<body>
<h1>Hotel en Laravel </h1>
<form method="post" action="ejercicio3post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <pre>Habitación     Tiempo      Costo por día</pre>
    <pre>Simple         1 a 5 días       $70</pre>
    <pre>Doble          1 a 5 días       $80</pre>
    <pre>Matrimonial    1 a 5 días       $120</pre>
    <pre>Simple         6 a más días     $50</pre>
    <pre>Doble          6 a más días     $60</pre>
    <pre>Matrimonial    6 a más días     $100</pre>

    <br>
    <pre>Escoja el tipo de habitacion</pre>
    <select name="habitacion">
        <option value="simple">Simple</option>
        <option value="doble">Doble</option>
        <option value="matrimonial">Matrimonial</option>
    </select>
    <br>
    <pre>Elija la cantidad de días</pre>

    <pre>Días        <input type="number" name="quantity_dias" min="0" max="100"></pre>
    <br>
    <pre>Ingrese la cantidad de personas según la habitación</pre>

    <pre>Personas    <input type="number" name="quantity_personas" min="0" max="6"></pre>

    <br>


    <input value="Pedir" type="submit">

</form>

</body>
</html>