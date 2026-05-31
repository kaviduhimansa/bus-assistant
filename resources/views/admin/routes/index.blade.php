<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Routes Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Bus Routes Management</h2>
            <button class="btn btn-primary">+ Add New Route</button>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Route Name</th>
                            <th>Start Location</th>
                            <th>End Location</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($busRoutes as $route)
                            <tr>
                                <td>{{ $route->id }}</td>
                                <td><span class="badge bg-secondary">{{ $route->route_name }}</span></td>
                                <td>{{ $route->start_location }}</td>
                                <td>{{ $route->end_location }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info text-white">Stops</button>
                                    <button class="btn btn-sm btn-warning text-white">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">
                                    <em>No routes found in the database. Please add one!</em>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>