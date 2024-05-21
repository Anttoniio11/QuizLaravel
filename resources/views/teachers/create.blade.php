<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <div>Crear Profesor</div> <br>
    
                    <div>
                        <form action="{{ route('teachers.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="Dni">DNI:</label> <br>
                                <input type="text" class="" name="Dni" />
                            </div>
                            <br>
                            <div>
                                <label for="Nombre">Nombre:</label> <br>
                                <input type="text" class="" name="Nombre" />
                            </div>
                            <br>
                            <div>
                                <label for="Telefono">Telefono:</label><br>
                                <input type="text" class="" name="Telefono" />
                            </div>
                            <br>
                            <div>
                                <label for="Direccion">Direccion:</label><br>
                                <input type="text" class="" name="Direccion" />
                            </div>
                            <br>
                            <button type="submit" class="">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>