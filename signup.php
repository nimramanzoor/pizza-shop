<?php
// Include header
require_once 'includes/header.php';

// Redirect if already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    if ($_SESSION['is_admin'] == 1) {
        header("Location: dashboard.php");
    } else {
        header("Location: index.php");
    }
    exit();
}

// Set page title
$pageTitle = "Sign Up";
?>

<body class="bg-red-50 flex items-center justify-center min-h-screen">

<div class="w-full max-w-6xl bg-white rounded-2xl shadow-xl overflow-hidden grid md:grid-cols-2">

    <!-- LEFT SIDE -->
    <div class="p-10 flex flex-col justify-center">
        <img src="assets/logo1.png" alt="Pizza.com" class="h-16 mx-auto mb-6">

        <h1 class="text-3xl font-bold text-red-600 mb-4 text-center">Create Your Account</h1>

        <!-- SIGNUP FORM -->
        <form action="processing_pages/process-signup.php" method="POST" class="space-y-4">

            <input
                type="text"
                name="fullname"
                placeholder="Full Name"
                required
                class="w-full border border-red-200 rounded-lg p-3 focus:border-red-500"
            />

            <input
                type="email"
                name="email"
                placeholder="Email Address"
                required
                class="w-full border border-red-200 rounded-lg p-3 focus:border-red-500"
            />

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
                class="w-full border border-red-200 rounded-lg p-3 focus:border-red-500"
            />

            <button
                type="submit"
                class="w-full bg-red-600 text-white p-3 rounded-lg font-semibold hover:bg-red-700"
            >
                Create Account
            </button>
        </form>

        <p class="text-center mt-4">
            Already have an account?
            <a href="login.php" class="text-red-600 font-semibold">Login</a>
        </p>
    </div>

    <!-- RIGHT SIDE IMAGE -->
    <div class="hidden md:block">
        <img src="assets/pizza1.jpeg" alt="Pizza" class="w-full h-full object-cover">
    </div>

</div>

</body>

<?php
// Include footer
require_once 'includes/footer.php';
?>
