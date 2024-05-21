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
                    <div>PROFESORES</div>
                    <br>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Dni</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>{{ $teacher->Dni }}</td>
                                    <td>{{ $teacher->Nombre }}</td>
                                    <td>{{ $teacher->Telefono }}</td>
                                    <td>{{ $teacher->Direccion }}</td>
                                    <td>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                                            <a href="{{ route('teachers.show', $teacher->id) }}" class="">Ver</a>
                                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <a href="{{ route('teachers.create') }}" class="">Crear Nuevo Profesor</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>