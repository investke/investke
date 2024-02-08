<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Register - SecureInvest</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <style>
        /* Custom CSS for the registration page design */
        body {
            font-family: 'Poppins', sans-serif;
        }

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

        main {
            background-color: #f9fafc;
        }

        .registration-form {
            max-width: 400px;
            margin: 2rem auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
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

        .error-message {
            color: #ff0000;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="py-4">
        <div class="flex justify-between items-center container mx-auto">
            <div class="text-3xl font-semibold">SecureInvest</div>
            <nav>
                <!-- Bootstrap Button for Login -->
                <a href="/login.php" class="btn btn-success">Login here</a>
               
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8 flex-grow">
        <section class="registration-form">
            <h1 class="text-2xl font-semibold text-center mb-4">Create Your SecureInvest Account</h1>
            <form action="/dashboard.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-600">Name</label>
                    <input type="text" id="name" class="form-input" placeholder="Enter your name">
                    <p id="name-error" class="text-red-600"></p>
                </div>
                <div class="mb-4">
                    <label for="last_name" class="block text-gray-600">Last Name</label>
                    <input type="text" id="last_name" class="form-input" placeholder="Enter your last name">
                    <p id="last_name-error" class="text-red-600"></p>
                </div>
                <div class="mb-4">
                    <label for="phone_number" class="block text-gray-600">Phone Number (+254)</label>
                    <input type="text" id="phone_number" class="form-input" placeholder="Enter your phone number">
                    <p id="phone_number-error" class="text-red-600"></p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Email</label>
                    <input type="email" id="email" class="form-input" placeholder="Enter your email">
                    <p id="email-error" class="text-red-600"></p>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Password</label>
                    <input type="password" id="password" class="form-input" placeholder="Enter your password">
                    <p id="password-error" class="text-red-600"></p>
                </div>
                <div class="mb-4">
                    <label for="password_repeat" class="block text-gray-600">Repeat Password</label>
                    <input type="password" id="password_repeat" class="form-input" placeholder="Repeat your password">
                    <p id="password_repeat-error" class="text-red-600"></p>
                </div>
                <button type="submit" class="form-button">Register</button>
             </form><br><br>
            <!-- Login Prompt -->
            <div class="login-prompt">
                <p>Already have an account? <a href="/login.php" class="login-link">Login here</a></p>
            </div>
        </section>
    </main>
    <footer class="py-4 text-center">
        <div class="container mx-auto">&copy; 2024 SecureInvest. All rights reserved.</div>
    </footer>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript for Form Validation with Error Display -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            const nameInput = document.getElementById('name');
            const lastNameInput = document.getElementById('last_name');
            const phoneInput = document.getElementById('phone_number');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const passwordRepeatInput = document.getElementById('password_repeat');

            const nameError = document.getElementById('name-error');
            const lastNameError = document.getElementById('last_name-error');
            const phoneError = document.getElementById('phone_number-error');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');
            const passwordRepeatError = document.getElementById('password_repeat-error');

            form.addEventListener('submit', function (event) {
                let hasError = false;

                if (nameInput.value.trim() === '') {
                    nameError.textContent = 'Name is required';
                    nameError.style.display = 'block';
                    hasError = true;
                } else {
                    nameError.style.display = 'none';
                }

                if (lastNameInput.value.trim() === '') {
                    lastNameError.textContent = 'Last Name is required';
                    lastNameError.style.display = 'block';
                    hasError = true;
                } else {
                    lastNameError.style.display = 'none';
                }

                if (phoneInput.value.trim() === '') {
                    phoneError.textContent = 'Phone Number is required';
                    phoneError.style.display = 'block';
                    hasError = true;
                } else {
                    phoneError.style.display = 'none';
                }

                if (emailInput.value.trim() === '') {
                    emailError.textContent = 'Email is required';
                    emailError.style.display = 'block';
                    hasError = true;
                } else if (!isValidEmail(emailInput.value)) {
                    emailError.textContent = 'Invalid email format';
                    emailError.style.display = 'block';
                    hasError = true;
                } else {
                    emailError.style.display = 'none';
                }

                if (passwordInput.value.trim() === '') {
                    passwordError.textContent = 'Password is required';
                    passwordError.style.display = 'block';
                    hasError = true;
                } else {
                    passwordError.style.display = 'none';
                }

                if (passwordRepeatInput.value.trim() === '') {
                    passwordRepeatError.textContent = 'Repeat Password is required';
                    passwordRepeatError.style.display = 'block';
                    hasError = true;
                } else if (passwordInput.value !== passwordRepeatInput.value) {
                    passwordRepeatError.textContent = 'Passwords do not match';
                    passwordRepeatError.style.display = 'block';
                    hasError = true;
                } else {
                    passwordRepeatError.style.display = 'none';
                }

                if (hasError) {
                    event.preventDefault(); // Prevent form submission
                }
            });

            function isValidEmail(email) {
                // You can use a regular expression to validate email format
                // This is a simple example, and you can use a more robust pattern
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return emailPattern.test(email);
            }
        });
    </script>
</body>
</html>
