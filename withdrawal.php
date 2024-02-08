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
    <title>Withdrawal Page</title>
</head>
<body class="bg-gradient-to-b from-purple-500 to-blue-500 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md">
        <img src="https://img.freepik.com/free-psd/3d-rendering-cash-withdraw-bitcoin-icon_23-2149390404.jpg?w=826&t=st=1698482669~exp=1698483269~hmac=8257471d2d56ab20cea9b412" alt="Page Logo" class="mx-auto mb-4" style="max-width: 150px;">
        <h2 class="text-3xl font-extrabold text-center text-purple-600 mb-4 font-pacifico">WITHDRAWAL PAGE🏧💸</h2>
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-600">Enter Phone Number (in international format, e.g., +254xxxxxxxxx or 07xxxxxxxx)</label>
            <input type="text" id="phoneNumber" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Phone Number">
        </div>
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-600">Enter Withdrawal Amount</label>
            <input type="text" id="withdrawalAmount" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Withdrawal Amount">
        </div>
        <div class="mt-4">
            <button id="withdrawButton" class="bg-red-600 text-white py-2 px-4 rounded-md font-semibold">Process Withdrawal</button>
        </div>
        <p id="withdrawErrorMessage" class="text-red-600 text-sm mt-2 hidden">Please enter a valid phone number and withdrawal amount.</p>
    </div>
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <script>
        const withdrawButton = document.getElementById("withdrawButton");
        const phoneNumber = document.getElementById("phoneNumber");
        const withdrawalAmount = document.getElementById("withdrawalAmount");
        const withdrawErrorMessage = document.getElementById("withdrawErrorMessage");
        const loader = document.getElementById("loader");

        withdrawButton.addEventListener("click", () => {
            const phoneRegex = /^(\+254|0)?[17]\d{8}$/;
            const amountRegex = /^\d+(\.\d{1,2})?/;

            if (!phoneRegex.test(phoneNumber.value) || !amountRegex.test(withdrawalAmount.value)) {
                withdrawErrorMessage.style.display = "block";
            } else {
                withdrawErrorMessage.style.display = "none"; // Corrected the typo here
                loader.style.display = "flex";
                // Simulate a withdrawal request
                setTimeout(() => {
                    loader.style.display = "none";
                    Swal.fire({
                        icon: 'error',
                        title: 'Withdrawal error',
                        text: 'You\'re not eligible for withdrawal. Kindly start investing to be eligible for withdrawal.',
                    });
                }, 3000);
            }
        });
    </script>
</body>
</html>
