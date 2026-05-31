<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Assistant - Find Your Route</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🚌 Bus Assistant</a>
            
            <!-- Link to your Admin Panel -->
            <div class="d-flex">
                <a href="{{ route('routes.index') }}" class="btn btn-outline-light btn-sm fw-bold">Admin Panel</a>
            </div>
        </div>
    </nav>

    <!-- Hero / Search Section -->
    <div class="container mt-5 pt-5 text-center">
        <h1 class="display-4 fw-bold text-dark mb-3">Where are you heading today?</h1>
        <p class="lead text-muted mb-5">Search for bus routes, stops, and schedules across the country.</p>

        <!-- Search Box -->
        <div class="card shadow-lg border-0 mx-auto" style="max-width: 700px; border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
                <form action="#" method="GET">
                    <div class="row g-2">
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter starting location or destination..." name="query">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>