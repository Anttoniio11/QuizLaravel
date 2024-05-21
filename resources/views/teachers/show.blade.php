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
                    <div>Profesor</div>
                    
                    <div>
                        <table>
                            <tr>
                                <th>ID</th>
                                <td>{{ $teacher->id }}</td>
                            </tr>
                            <tr>
                                <th>DNI</th>
                                <td>{{ $teacher->Dni }}</td>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <td>{{ $teacher->Nombre }}</td>
                            </tr>
                            <tr>
                                <th>Telefono</th>
                                <td>{{ $teacher->Telefono }}</td>
                            </tr>
                            <tr>
                                <th>Direccion</th>
                                <td>{{ $teacher->Direccion }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>