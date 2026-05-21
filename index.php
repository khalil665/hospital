<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
    font-family: 'Poppins', sans-serif;
    background: #f8f9fa;
}

/* ================= NAVBAR ================= */
.custom-navbar{
    background: rgba(13,110,253,0.95);
    backdrop-filter: blur(10px);
    padding: 18px 0;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    position: sticky;
    top: 0;
    z-index: 999;
}

.navbar-brand{
    font-size: 1.8rem;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff !important;
}

.navbar-brand span{
    color: #dff4ff;
}

.navbar-nav .nav-link{
    color: #fff !important;
    font-size: 16px;
    font-weight: 500;
    margin-left: 18px;
    position: relative;
    transition: 0.3s ease;
}

.navbar-nav .nav-link:hover{
    color: #dff4ff !important;
}

.navbar-nav .nav-link::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0%;
    height: 2px;
    background: white;
    transition: 0.3s ease;
}

.navbar-nav .nav-link:hover::after{
    width: 100%;
}

.login-btn{
    margin-left: 25px;
    background: white;
    color: #0d6efd !important;
    border-radius: 30px;
    padding: 10px 22px;
    font-weight: 600;
    transition: 0.3s ease;
    border: none;
}

.login-btn:hover{
    background: #eaf3ff;
    transform: translateY(-2px);
}

/* HERO */
.hero{
    min-height: 92vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg,#0d6efd,#0a58ca);
    color: white;
}

.hero h1{
    font-size: 3.5rem;
    font-weight: 700;
}

.hero p{
    font-size: 18px;
    line-height: 1.8;
}

.card-hover{
    transition: 0.3s ease;
    border-radius: 18px;
}

.card-hover:hover{
    transform: translateY(-10px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.12);
}

footer{
    background:#0d6efd;
    color:white;
    padding:25px 0;
    font-size:15px;
}
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="#">
            🏥 <span>Care</span>HMS
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler text-white border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu">
            <i class="bi bi-list fs-1 text-white"></i>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Doctors</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Departments</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a href="login.php" class="btn login-btn">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-6">
                <h1>Hospital Management System</h1>
                <p class="lead mt-3">
                    Manage patients, doctors, appointments, billing, and reports
                    efficiently with our smart hospital platform.
                </p>

                <a href="register.php" class="btn btn-light btn-lg mt-3">
                    Get Started
                </a>
            </div>

            <div class="col-md-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/4320/4320371.png"
                     class="img-fluid"
                     width="420">
            </div>

        </div>
    </div>
</section>

<!-- Services -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Our Services</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card p-4 shadow-sm border-0 card-hover">
                    <i class="bi bi-person-lines-fill fs-1 text-primary"></i>
                    <h4 class="mt-3">Patient Management</h4>
                    <p>Store and manage patient medical records efficiently.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 shadow-sm border-0 card-hover">
                    <i class="bi bi-calendar-check fs-1 text-success"></i>
                    <h4 class="mt-3">Appointments</h4>
                    <p>Schedule and track doctor-patient appointments easily.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 shadow-sm border-0 card-hover">
                    <i class="bi bi-cash-stack fs-1 text-danger"></i>
                    <h4 class="mt-3">Billing System</h4>
                    <p>Generate invoices and manage billing records securely.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- About -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png"
                     class="img-fluid">
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold">Why Choose Our HMS?</h2>
                <p class="mt-3">
                    Our Hospital Management System improves workflow,
                    reduces paperwork, and increases efficiency for
                    doctors, patients, and hospital staff.
                </p>

                <ul class="list-group list-group-flush mt-4">
                    <li class="list-group-item">✔ Easy Patient Registration</li>
                    <li class="list-group-item">✔ Smart Appointment Scheduling</li>
                    <li class="list-group-item">✔ Billing & Reports</li>
                    <li class="list-group-item">✔ Role-Based Access</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p class="mb-0">© <?php echo date("Y"); ?> Hospital Management System</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>