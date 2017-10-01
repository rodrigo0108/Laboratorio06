<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio</title>
</head>
<body>
<h1>Gaseosas y sus costos</h1>

<form method="post" action="ejercicio2post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <pre>Gaseosa     Precio</pre>
    <pre>Inka Kola    $3.0</pre>
    <pre>Coca Kola    $3.0</pre>
    <pre>Guaraná      $1.5</pre>
    <pre>Pepsi        $1.8</pre>
    <pre>Sprite       $2.0</pre>

    <br>
    <pre>Ingrese la cantidad</pre>
    <br>
    <pre>Inka Kola  <input type="number" name="quantity_inka" min="0" max="90"></pre>
    <pre>Coca Kola  <input type="number" name="quantity_coca" min="0" max="80"></pre>
    <pre>Guaraná    <input type="number" name="quantity_guar" min="0" max="86"></pre>
    <pre>Pepsi      <input type="number" name="quantity_peps" min="0" max="65"></pre>
    <pre>Sprite     <input type="number" name="quantity_spri" min="0" max="45"></pre>

    <br>
    Introduzca su monto <input  name="monto" >
    <br>
    <br>
    <input value="Pedir" type="submit">

</form>

</body>
</html>