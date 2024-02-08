<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Affiliate Program</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-gray-800 text-white text-center py-4">
        <h1 class="text-3xl">Affiliate Program</h1>
    </header>

    <section class="mx-auto my-8 p-6 bg-white rounded-lg shadow-md max-w-2xl">
        <h2 class="text-2xl text-gray-800 mb-4">Join Our Affiliate Program</h2>
        <p class="text-gray-600 mb-4">
            Become our affiliate and start earning commissions for every sale referred through your unique affiliate link.
        </p>

        <h3 class="text-lg text-gray-800 mb-2">Affiliate Benefits</h3>
        <ul class="list-disc list-inside text-gray-600 mb-4">
            <li>Earn generous commissions on each sale.</li>
            <li>Access to real-time performance and earnings reports.</li>
            <li>Dedicated support from our affiliate team.</li>
        </ul>

        <h3 class="text-lg text-gray-800 mb-2">Payment Rates</h3>
        <p class="text-gray-600 mb-4">
            We offer competitive payment rates for our affiliates. Your success is our success!
            Earn up to 10% commission on each successful referral.
        </p>

        <h3 class="text-lg text-gray-800 mb-2">How It Works</h3>
        <ol class="list-decimal list-inside text-gray-600 mb-4">
            <li>Sign up for our affiliate program below.</li>
            <li>Receive a unique affiliate link.</li>
            <li>Promote our products using your affiliate link.</li>
            <li>Earn up to 10% commissions for every sale made through your link.</li>
        </ol>

        <h3 class="text-lg text-gray-800 mb-2">Affiliate Registration</h3>
        <form class="max-w-md mx-auto" id="affiliateForm">
            <label for="fullName" class="text-gray-800">Full Name:</label>
            <input type="text" id="fullName" name="fullName" class="p-2 mb-4 border rounded w-full focus:outline-none focus:border-blue-400" required>

            <label for="email" class="text-gray-800">Email:</label>
            <input type="email" id="email" name="email" class="p-2 mb-4 border rounded w-full focus:outline-none focus:border-blue-400" required>

            <label for="website" class="text-gray-800">Website (if applicable):</label>
            <input type="url" id="website" name="website" class="p-2 mb-4 border rounded w-full focus:outline-none focus:border-blue-400">

            <!-- Additional Fields -->
            <label for="phone" class="text-gray-800">Phone:</label>
            <input type="tel" id="phone" name="phone" class="p-2 mb-4 border rounded w-full focus:outline-none focus:border-blue-400" required>

            <label for="company" class="text-gray-800">Company Name:</label>
            <input type="text" id="company" name="company" class="p-2 mb-4 border rounded w-full focus:outline-none focus:border-blue-400" required>

            <button type="button" id="signupButton" onclick="validateAndSignUp()" class="bg-green-500 text-white p-2 rounded w-full cursor-pointer hover:bg-green-600">
                Sign Up
            </button>

            <p id="loadingText" class="loading text-center"></p>
            <p id="errorMessage" class="text-red-500 text-center"></p>
        </form>
    </section>

    <script>
        // Check if the user has already registered
        const isRegistered = localStorage.getItem('isRegistered') === 'true';

        if (isRegistered) {
            replaceWithVerifiedContent();
        }

        function replaceWithVerifiedContent() {
            document.body.innerHTML = `
                <div class="mx-auto my-8 p-6 bg-white rounded-lg shadow-md max-w-2xl">
                    <h2 class="text-2xl text-gray-800 mb-4">Congratulations! You're now a verified affiliate.</h2>
                    <p class="text-gray-600 mb-4">
                        You can start earning 10% of your affiliates' investments.
                    </p>
                    <div class="mb-4">
                        <h3 class="text-lg text-gray-800 mb-2">Your Affiliate Link</h3>
                        <input type="text" value="https://4334939f-a3f8-4f11-9b31-de7ad3e9d5ef-00-dyc9lrxgocly.worf.replit.dev/" class="p-2 border rounded w-full" id="affiliateLink" readonly>
                        <button onclick="copyToClipboard()" class="bg-blue-500 text-white p-2 rounded mt-2 cursor-pointer hover:bg-blue-600">
                            Copy Link
                        </button>
                    </div>
                    <div>
                        <h3 class="text-lg text-gray-800 mb-2">Your Affiliate Statistics</h3>
                        <p>Referral Income: 00 KSH</p>
                        <p>Link Clicks: 0</p>
                        <!-- Add more statistics as needed -->
                        <a href="./dashboard.php" class="bg-green-500 text-white p-2 rounded mt-4 cursor-pointer hover:bg-green-600">
                            Go Back to Dashboard
                        </a>
                    </div>
                </div>
            `;
        }

        function validateAndSignUp() {
            if (isRegistered) {
                document.getElementById('errorMessage').innerText = 'You have already registered.';
                return;
            }

            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const company = document.getElementById('company').value;

            // Validate fields
            if (!fullName || !email || !phone || !company) {
                document.getElementById('errorMessage').innerText = 'Please fill in all fields.';
                return;
            }

            // Simulate a loading state after signup button is clicked
            document.getElementById('signupButton').style.display = 'none';
            document.getElementById('loadingText').innerText = 'Please wait, we are processing your application...';
            document.getElementById('loadingText').style.display = 'block';

            // Simulate checking application status after 3 seconds
            setTimeout(() => {
                // Set isRegistered to true in localStorage
                localStorage.setItem('isRegistered', 'true');

                document.getElementById('loadingText').innerText = 'Your application has been approved! You can now start promoting.';
                document.getElementById('errorMessage').innerText = '';

                // Show Swal.fire popup
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Successful',
                    text: 'Your registration has been submitted successfully.',
                }).then(() => {
                    // Reload the page and replace content with verified content
                    location.reload();
                });
            }, 3000);
        }

        function copyToClipboard() {
            const affiliateLinkInput = document.getElementById('affiliateLink');
            affiliateLinkInput.select();
            document.execCommand('copy');
            Swal.fire({
                icon: 'success',
                title: 'Link Copied',
                text: 'Your affiliate link has been copied to the clipboard.',
            });
        }
    </script>
</body>
</html>
