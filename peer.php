<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add SweetAlert2 CSS and JS links -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
        /* Styling for balance icons and blinking dot */
        .balance-icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 16px;
        }
        .online-dot {
            width: 8px;
            height: 8px;
            background-color: #2ecc71;
            border-radius: 50%;
            margin-left: 4px;
            animation: blink 1s infinite;
        }
        @keyframes blink {
            50% {
                opacity: 0;
            }
        }
    </style>
    <title>P2P Page</title>
</head>
<body class="bg-gradient-to-b from-purple-500 to-blue-500 h-screen flex flex-col items-center justify-center">
   
<br><br><br><br>
    <!-- Crypto Balance Icon -->
    <div class="balance-icons">
        <div>
            <i class="fas fa-coins"></i>
            <span>Crypto Balance: 00KSH</span>
        </div>
    </div>

    <!-- Overall Balance Icon -->
    <div class="balance-icons">
        <div>
            <i class="fas fa-balance-scale"></i>
            <span>Overall Balance: 00KSH</span>
        </div>
    </div>

    <!-- People Online Icon -->
    <div class="balance-icons">
        <div>
            <i class="fas fa-users"></i>
            <span>People Online: <span id="online-users">100</span></span>
            <span class="online-dot"></span>
        </div>
    </div>

    <!-- Your existing content here -->

    <div class="bg-white p-8 rounded-lg shadow-md max-w-3xl mt-16">
        <img src="https://img.freepik.com/free-vector/return-investment-landing-page_107791-5300.jpg?w=1380&t=st=1698483230~exp=1698483830~hmac=56cee782ebd225a5350199a3" alt="Page Logo" class="mx-auto mb-4" style="max-width: 150px;">
      
        <h2 class="text-3xl font-extrabold text-center text-purple-600 mb-4 font-pacifico">PEER-TO-PEER (P2P) TRADING💰</h2>
      <!-- "Go Home" button -->
      <a href="/dashboard.php/index.html" class="text-white text-base py-2 px-4 rounded-md bg-blue-600 absolute top-8 left-4">Go Home</a>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- P2P Option 1 -->
            <div class="bg-purple-100 p-4 rounded-lg shadow-md text-center">
                <h3 class="text-2xl font-bold text-purple-600">Buy Bitcoin</h3>
                <p>Get Bitcoin instantly</p>
                <button class="bg-purple-600 text-white py-2 px-4 rounded-md p2p-button">Buy Now</button>
            </div>
            <!-- P2P Option 2 -->
            <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center">
                <h3 class="text-2xl font-bold text-blue-600">Sell Bitcoin</h3>
                <p>Sell your Bitcoin</p>
                <button class="bg-blue-600 text-white py-2 px-4 rounded-md p2p-button">Sell Now</button>
            </div>
            <!-- P2P Option 3 -->
            <div class="bg-green-100 p-4 rounded-lg shadow-md text-center">
                <h3 class="text-2xl font-bold text-green-600">Exchange Crypto</h3>
                <p>Trade between cryptocurrencies</p>
                <button class="bg-green-600 text-white py-2 px-4 rounded-md p2p-button">Exchange Now</button>
            </div>
        </div>
    </div>
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <script>
        const p2pButtons = document.querySelectorAll(".p2p-button");
        const loader = document.getElementById("loader");
        const onlineUsersSpan = document.getElementById("online-users");

        p2pButtons.forEach((button) => {
            button.addEventListener("click", () => {
                loader.style.display = "flex";
                // Simulate a P2P process
                setTimeout(() => {
                    loader.style.display = "none";
                    Swal.fire({
                        icon: 'error',
                        title: 'P2P Error',
                        text: `Your P2P transaction cannot be completed at the moment. Please try again later.`,
                    });
                }, 3000);
            });
        });

        // Update online users every 5 seconds with a random number between 100 and 3000
        setInterval(() => {
            const randomUsers = Math.floor(Math.random() * (3000 - 100 + 1)) + 100;
            onlineUsersSpan.textContent = randomUsers;
        }, 5000);
    </script>
</body>
</html>
