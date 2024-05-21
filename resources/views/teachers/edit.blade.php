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
                    <div>Editar Profesor</div>
                    
                    <br>
                    
                    <div>
                        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="Dni">DNI:</label><br>
                                <input type="text" class="" name="Dni" value="{{ $teacher->Dni }}" />
                            </div>
                            <br>
                            <div>
                                <label for="Nombre">Nombre:</label><br>
                                <input type="text" class="" name="Nombre" value="{{ $teacher->Nombre }}" />
                            </div>
                            <br>
                            <div>
                                <label for="Telefono">Telefono:</label><br>
                                <input type="text" class="" name="Telefono" value="{{ $teacher->Telefono }}" />
                            </div>
                            <br>
                            <div>
                                <label for="Direccion">Direccion:</label><br>
                                <input type="text" class="" name="Direccion" value="{{ $teacher->Direccion }}" />
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