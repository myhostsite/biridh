<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory & Tracking Services - UAE</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Cloudflare Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
        }
        .navbar {
            background: linear-gradient(145deg, #444444, #888888);
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #c0c0c0 !important;
        }
        .main-content {
            background-color: #e1e1e1;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card {
            border: none;
            background-color: #444444;
            color: white;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .card i {
            font-size: 50px;
        }
        .footer {
            background-color: #333333;
            padding: 20px;
            text-align: center;
            color: #ffffff;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><i class="fas fa-warehouse"></i> MAJESTIC Inventory Services</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="mainpage.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="inventoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-boxes"></i> Miscellaneous
                    </a>
                    <div class="dropdown-menu" aria-labelledby="inventoryDropdown">
                        <a class="dropdown-item" href="employee.php">Employee Management</a>
                        <a class="dropdown-item" href="materials.php">Item Management</a>
                        <a class="dropdown-item" href="services.php">Services Management</a>
                        <a class="dropdown-item" href="delivery.php">Stocks Management</a>
                        <a class="dropdown-item" href="manpower.php">Manpower Management</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="inventory_settings.php">Inventory Settings</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobestimation.php"><i class="fas fa-boxes"></i> Job Estimation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-truck"></i> Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cogs"></i> Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="main-content">
            <h1 class="text-center mb-5">Welcome to MAJESTIC Inventory & Information Management System</h1>
            <div class="row">
                <!-- Inventory Card -->
                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <i class="fas fa-calculator"></i>
                        <h4 class="mt-3">Job Estimation</h4>
                        <p>Keep track of all the job estimation processed.</p>
                        <a href="jobestimation.php" class="btn btn-outline-light btn-block">Manage Job Estimation</a>
                    </div>
                </div>
                <!-- Tracking Card -->
                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <i class="fas fa-route"></i>
                        <h4 class="mt-3">Track Shipments</h4>
                        <p>Track the real-time location of your goods.</p>
                        <a href="#" class="btn btn-outline-light btn-block">Track Now</a>
                    </div>
                </div>
                <!-- Analytics Card -->
                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <i class="fas fa-chart-pie"></i>
                        <h4 class="mt-3">Data Analytics</h4>
                        <p>Analyze trends and insights from inventory data.</p>
                        <a href="#" class="btn btn-outline-light btn-block">View Analytics</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2024 UAE Inventory & Tracking Services. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
