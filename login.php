<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login - SecureInvest</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Google Fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette&display=swap">
    <style>
        /* Custom CSS for the login page design */
        body {
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-form {
            max-width: 400px;
            padding: 2rem;
            margin: 2rem auto;
            background-color: #f9fafc;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            margin: 1rem 0;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            border-color: #2563eb;
        }

        .form-button {
            width: 100%;
            padding: 1.5rem;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #1e40af;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            transition: transform 0.3s;
        }

        .social-icons a:hover {
            transform: scale(1.2);
        }

        .social-icons i {
            font-size: 2rem;
            color: #333;
        }

        /* Header and Footer Styles */
        header, footer {
            background-color: #2563eb;
            color: white;
        }

        footer a {
            border-b: 1px solid white;
            transition: border-color 0.3s;
        }

        footer a:hover {
            border-color: #1e40af;
        }

        .register-text {
            text-align: center;
            margin-top: 1.5rem;
            color: #333;
        }

        .register-link {
            color: #2563eb;
            text-decoration: underline;
            cursor: pointer;
        }

        .register-link:hover {
            color: #1e40af;
        }

        /* Image on top */
        .top-image {
            width: 80px; /* Adjust the width as needed */
            height: auto;
            margin: 1rem auto; /* Center the image */
            display: block;
        }

        /* Error Message Styles */
        .error-message {
            color: #ff0000;
            margin-top: 0.5rem;
        }

        /* Additional Styles */
        .color-variation-1 {
            background-color: #f3f4f6;
            color: #333;
        }

        .color-variation-2 {
            background-color: #e2e8f0;
            color: #2d3748;
        }

        .color-variation-3 {
            background-color: #cbd5e0;
            color: #4a5568;
        }

        .font-variation-1 {
            font-family: 'Montserrat', sans-serif;
        }

        .font-variation-2 {
            font-family: 'Open Sans', sans-serif;
        }

        .font-variation-3 {
            font-family: 'Roboto', sans-serif;
        }

        .font-variation-4 {
            font-family: 'Courgette', cursive;
        }

    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="py-4">
        <div class="flex justify-between items-center container mx-auto">
            <div class="text-3xl font-semibold">SecureInvest</div>
            <nav>
                <!-- Bootstrap Button for Register -->
                <a href="/register.php" class="btn btn-success">Register</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8 flex-grow">
        <section class="login-container">

            <div class="login-form color-variation-1 font-variation-1">
              <img src="https://img.freepik.com/free-vector/investment-data-concept-illustration_114360-5159.jpg?w=826&t=st=1706946565~exp=1706947165~hmac=97356a391f5012bf1c18671a575b956b8c057e4321a1864d768a71e290b94159" alt="Investment" class="top-image">
                <h1 class="text-3xl font-semibold text-center mb-6 text-blue-600">Login to SecureInvest</h1>
                <!-- Error Message Area -->
                <div id="error-message" class="error-message"></div>
                <form action="/dashboard.php" method="post" onsubmit="return validateForm()">
                    <div class="mb-6">
                        <input type="email" id="email" class="form-input" placeholder="Your Email">
                    </div>
                    <div class="mb-6">
                        <input type="password" id="password" class="form-input" placeholder="Your Password">
                    </div>
                    <button type="submit" class="form-button">Login</button>
                </form>
                <div class="social-icons mt-8">
                    <a href="#" title="Google"><i class="fab fa-google"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <!-- Register Text and Link -->
                <div class="register-text">
                    <p>No account? <a href="/register.php" class="register-link">Create one now!</a></p>
                </div>
            </div>
        </section>
    </main>
    <footer class="py-4 text-center color-variation-2 font-variation-2">
        <div class="container mx-auto">&copy; 2024 SecureInvest. All rights reserved.</div>
    </footer>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript for Form Validation with Error Display -->
    <script>
        function validateForm() {
            // Reset error message
            document.getElementById("error-message").innerHTML = "";

            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var errorMessage = "";

            if (email.trim() === "") {
                errorMessage += "Please enter your email.<br>";
            }

            if (password.trim() === "") {
                errorMessage += "Please enter your password.<br>";
            }

            if (errorMessage !== "") {
                // Display error message
                document.getElementById("error-message").innerHTML = errorMessage;
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
