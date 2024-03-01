<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('result.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Escriba la variable a:
    <br>
    <input type="number" name="a">
</label>
<br>
<label>
    Escriba la variable b:
    <br>
    <input type="number" name="b">
</label>
<br>
<label>
    Escriba la variable c:
    <br>
    <input type="number" name="c">
</label>
<br>
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>