<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4 text-center">Dashboard</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">Crear un nuevo proyecto</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('project.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <input type="text" name="description" id="description" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Proyecto</button>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">Crear nueva tarea</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('task.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="state" class="form-label">Estado</label>
                        <select name="state" id="state" class="form-select" required>
                            <option value="">Selecciona un estado</option>
                            <option value="Earring">Pendiente</option>
                            <option value="Filled">Completado</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="project_id" class="form-label">Proyecto</label>
                        <select name="project_id" id="project_id" class="form-select" required>
                            <option value="">Selecciona un proyecto</option>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Crear Tarea</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>