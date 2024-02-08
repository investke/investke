<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add SweetAlert2 CSS and JS links -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
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
    </style>
    <title>Checkout Page</title>
</head>
<body class="bg-gradient-to-b from-purple-500 to-blue-500 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md">
        <img src="https://img.freepik.com/free-vector/digital-money-transfer-technology-background_1017-17454.jpg?w=826&t=st=1698481919~exp=1698482519~hmac=14d980466bb06531875f9ee7cce52f3cf608c48dd96d40f30e208072f21f6f18" alt="Page Logo" class="mx-auto mb-4" style="max-width: 150px;">
        <h2 class="text-3xl font-extrabold text-center text-purple-600 mb-4 font-pacifico">HOW TO DEPOSIT📲💸</h2>
        <ol class="list-decimal list-inside space-y-4">
            <li>Open your MPESA menu 📥</li>
            <li>Select 'Send Money' 📤</li>
            <li>Enter number: 0721404465 📱</li>
            <li>Enter the amount (package amount) 💰</li>
            <li>Confirm NAME: JOYLINE 📝</li>
            <li>Enter your MPESA PIN</li>
        </ol>
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-600">Enter MPESA Transaction Code Received After Payment</label>
            <input type="text" id="transactionId" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Transaction ID">
        </div>
        <div class="mt-4">
            <button id="processButton" class="bg-purple-600 text-white py-2 px-4 rounded-md font-semibold">Process Payment</button>
        </div>
        <p id="errorMessage" class="text-red-600 text-sm mt-2 hidden">No input. Kindly enter input.</p>
        <div class="mt-8">
            <button id="whatsappButton" class="bg-green-600 text-white py-2 px-4 rounded-md font-semibold">CONTACT ADMIN WHATSAPP</button>
        </div>
        <div class="mt-4">
            <button id="telegramButton" class="bg-blue-500 text-white py-2 px-4 rounded-md font-semibold">CONTACT ADMIN TELEGRAM</button>
        </div>
        
    </div>
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <script>
        const processButton = document.getElementById("processButton");
        const transactionId = document.getElementById("transactionId");
        const errorMessage = document.getElementById("errorMessage");
        const loader = document.getElementById("loader");
        const whatsappButton = document.getElementById("whatsappButton");
        const telegramButton = document.getElementById("telegramButton");
        const joinTelegramButton = document.getElementById("joinTelegramButton");

        // Show a notification popup when the page loads
        Swal.fire({
            title: 'Notification',
            text: 'Hello welcome to our website',
            icon: 'info',
            confirmButtonText: 'OK',
            onOpen: () => {
                // Ensure the loader is hidden when the notification is shown
                loader.style.display = "none";
            },
        });

        processButton.addEventListener("click", () => {
            if (transactionId.value.trim() === "") {
                errorMessage.style.display = "block";
            } else {
                errorMessage.style.display = "none";
                // Show the loader after input validation and button click
                loader.style.display = "flex";
                // Simulate an error
                setTimeout(() => {
                    loader.style.display = "none";
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No such transaction exists. Please make the payment and provide the correct transaction code.',
                    });
                }, 3000);
            }
        });

        whatsappButton.addEventListener("click", () => {
            // Handle WhatsApp button click, e.g., open WhatsApp chat link
            window.location.href = "https://api.whatsapp.com/send?phone=YOUR_PHONE_NUMBER";
        });

        telegramButton.addEventListener("click", () => {
            // Handle Telegram button click, e.g., open Telegram chat link
            window.location.href = "https://t.me/YOUR_CHANNEL_OR_USERNAME";
        });

        joinTelegramButton.addEventListener("click", () => {
            // Handle Join Telegram Channel button click, e.g., open Telegram channel link
            window.location.href = "https://t.me/superadmin_2";
        });
    </script>
</body>
</html>
