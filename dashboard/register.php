<?php
    include("config/db.php");

    if(isset($_POST['register'])){
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $insert_query = "INSERT INTO users(user_name, user_email, user_password) VALUES('$name', '$email', '$password')";

        $result = mysqli_query($conn, $insert_query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Screen - Spark Admin Premium Bootstrap 5 Admin Dashboard Template</title>
    
    <!-- SEO Optimization -->
    <meta name="description" content="Login Screen - Spark Admin Premium Bootstrap 5 Admin Dashboard Template">
    <meta name="author" content="Spark Admin Team">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    
    <!-- Local Third-Party Libraries (100% Offline Compatible) -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-icons/bootstrap-icons.css">
    
    <!-- Main Design System & Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- ==========================================
         START: Authentication Container & Login Card
         ========================================== -->
    <div class="login-wrapper">
        <!-- Glowing background shapes for modern visual appearance -->
        <div class="login-bg-shape login-bg-shape-1"></div>
        <div class="login-bg-shape login-bg-shape-2"></div>
        
        <!-- Main centered login card -->
        <div class="login-card">
            
            <!-- Brand Identity -->
            <a href="index.html" class="login-brand text-decoration-none">
                <i class="bi bi-asterisk"></i>
                <span>Spark Admin</span>
            </a>
            
            <p class="login-subtitle">Please sign in to access your dashboard</p>
            
            <!-- Login Form -->
            <form method="POST" id="loginForm" class="needs-validation" novalidate>

             <!-- Name Input Group -->
                <div class="login-form-group">
                    <label for="email" class="login-form-label">Full Name</label>
                    <div class="login-input-group">
                        <i class="bi bi-envelope input-icon"></i>
                        <input type="text" id="name" class="login-input" placeholder="name here..." required name="fullname">
                    </div>
                </div>
                
                <!-- Email Input Group -->
                <div class="login-form-group">
                    <label for="email" class="login-form-label">Email Address</label>
                    <div class="login-input-group">
                        <i class="bi bi-envelope input-icon"></i>
                        <input type="email" id="email" class="login-input" placeholder="name@company.com" required name="email">
                    </div>
                </div>
                
                <!-- Password Input Group -->
                <div class="login-form-group">
                    <label for="password" class="login-form-label">Password</label>
                    <div class="login-input-group">
                        <i class="bi bi-shield-lock input-icon"></i>
                        <input type="password" id="password" class="login-input login-input-password" placeholder="••••••••" required name="password">
                        <button type="button" class="password-toggle-btn" id="toggle-password" aria-label="Show password">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="btn-login" id="btn-submit" name="register">
                    <span>Register</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
                
            </form>
            
            <!-- Divider -->
            <div class="login-divider">Or sign in with</div>
            
            <!-- Social Logins -->
            <div class="social-login-grid">
                <button class="btn-social" type="button" id="btn-google">
                    <i class="bi bi-google text-danger"></i>
                    <span>Google</span>
                </button>
                <button class="btn-social" type="button" id="btn-github">
                    <i class="bi bi-github"></i>
                    <span>GitHub</span>
                </button>
            </div>
            
            <!-- Footer Link -->
            <p class="login-footer-text">
                Don't have an account? <a href="#" id="link-register">Register Now</a>
            </p>
            
        </div>
    </div>
    <!-- END: Authentication Container -->

    <!-- Local Bootstrap bundle -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Authentication interactions script -->
    <script src="assets/js/auth.js"></script>
</body>
</html>
