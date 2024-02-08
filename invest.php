<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add SweetAlert2 CSS and JS links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        body {
            background-color: #f0f0f0;
        }
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            display: none; /* Initially hidden */
            justify-content: center;
            align-items: center;
        }
        .spinner {
            width: 88px;
            height: 88px;
            display: grid;
            border-radius: 50%;
            -webkit-mask: radial-gradient(farthest-side, #0000 40%, #474bff 41%);
            background: linear-gradient(0deg, rgba(71, 75, 255, 0.5) 50%, rgba(71, 75, 255, 1) 0) center/7px 100%,
            linear-gradient(90deg, rgba(71, 75, 255, 0.25) 50%, rgba(71, 75, 255, 0.75) 0) center/100% 7px;
            background-repeat: no-repeat;
            animation: spinner-d3o0rx 1s infinite steps(12);
        }
        .spinner::before,
        .spinner::after {
            content: "";
            grid-area: 1/1;
            border-radius: 50%;
            background: inherit;
            opacity: 0.915;
            transform: rotate(30deg);
        }
        .spinner::after {
            opacity: 0.83;
            transform: rotate(60deg);
        }
        @keyframes spinner-d3o0rx {
            100% {
                transform: rotate(1turn);
            }
        }
        .invest-card {
            margin-top: 20px;
        }
    </style>
    <title>Investment Page</title>
</head>
<body class="bg-gradient-to-b from-purple-500 to-blue-500 h-screen flex flex-col items-center justify-center">
    <!-- "Go Home" button -->
  <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
    <div class="text-white text-base py-2 px-4 rounded-md bg-blue-600 absolute top-8 left-4">
        <a href="/dashboard.php/index.html">Go Home</a>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-md max-w-3xl mt-16">
        <img src="https://img.freepik.com/free-vector/return-investment-landing-page_107791-5300.jpg?w=1380&t=st=1698483230~exp=1698483830~hmac=56cee782ebd225a5350199a3" alt="Page Logo" class="mx-auto mb-4" style="max-width: 150px;">
        <h2 class="text-3xl font-extrabold text-center text-purple-600 mb-4 font-pacifico">INVESTMENT OPTIONS💰</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Pricing Card 1 -->
            <div class="bg-purple-100 p-4 rounded-lg shadow-md text-center invest-card">
                <h3 class="text-2xl font-bold text-purple-600">Invest Ksh 1,000</h3>
                <p>Get Ksh 1,500 after 24 hours</p>
                <button class="bg-purple-600 text-white py-2 px-4 rounded-md font-semibold invest-button" data-amount="1000">Invest Now</button>
            </div>
            <!-- Pricing Card 2 -->
            <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center invest-card">
                <h3 class="text-2xl font-bold text-blue-600">Invest Ksh 2,000</h3>
                <p>Get Ksh 3,000 after 24 hours</p>
                <button class="bg-blue-600 text-white py-2 px-4 rounded-md font-semibold invest-button" data-amount="2000">Invest Now</button>
            </div>
            <!-- Pricing Card 3 -->
            <div class="bg-green-100 p-4 rounded-lg shadow-md text-center invest-card">
                <h3 class="text-2xl font-bold text-green-600">Invest Ksh 3,000</h3>
                <p>Get Ksh 4,500 after 24 hours</p>
                <button class="bg-green-600 text-white py-2 px-4 rounded-md font-semibold invest-button" data-amount="3000">Invest Now</button>
            </div>
            <!-- Additional Pricing Cards -->
            <div class="bg-yellow-100 p-4 rounded-lg shadow-md text-center invest-card">
                <h3 class="text-2xl font-bold text-yellow-600">Invest Ksh 5,000</h3>
                <p>Get Ksh 7,500 after 24 hours</p>
                <button class="bg-yellow-600 text-white py-2 px-4 rounded-md font-semibold invest-button" data-amount="5000">Invest Now</button>
            </div>
            <div class="bg-pink-100 p-4 rounded-lg shadow-md text-center invest-card">
                <h3 class="text-2xl font-bold text-pink-600">Invest Ksh 10,000</h3>
                <p>Get Ksh 15,000 after 24 hours</p>
                <button class="bg-pink-600 text-white py-2 px-4 rounded-md font-semibold invest-button" data-amount="10000">Invest Now</button>
            </div>
            <div class="bg-indigo-100 p-4 rounded-lg shadow-md text-center invest-card">
                <h3 class="text-2xl font-bold text-orange-600">Invest Ksh 20,000</h3>
                <p>Get Ksh 30,000 after 24 hours</p>
                <button class="bg-indigo-600 text-white py-2 px-4 rounded-md font-semibold invest-button" data-amount="20000">Invest Now</button>
            </div>
        </div>
    </div>
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>
    <script>
        const investButtons = document.querySelectorAll(".invest-button");
        const loader = document.getElementById("loader");

        investButtons.forEach((button, index) => {
            button.addEventListener("click", () => {
                loader.style.display = "flex";
                // Simulate an investment process
                setTimeout(() => {
                    loader.style.display = "none";
                    Swal.fire({
                        icon: 'error',
                        title: 'Investment Error',
                        text: `Your attempt to purchase the package of Ksh ${button.getAttribute("data-amount")} cannot be completed due to insufficient funds. Kindly top-up and try again.`,
                    });
                }, 3000);
            });
        });
    </script>
</body>
</html>
