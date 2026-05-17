<?php
// Include the header file
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

// Set the page title
$pageTitle = "Sign In";
?>

<body class="bg-red-50 flex items-center justify-center min-h-screen">

<div class="w-full max-w-6xl bg-white rounded-2xl shadow-xl overflow-hidden grid md:grid-cols-2">

    <!-- LEFT SIDE -->
    <div class="p-10 flex flex-col justify-center">
        <img src="assets/logo1.png" alt="Pizza.com" class="h-16 mx-auto mb-6">

        <h1 class="text-3xl font-bold text-red-600 mb-4 text-center">Welcome Back</h1>

        <!-- Display Errors -->
        <?php
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
                echo "<p class='text-red-600 mb-2 p-2 bg-red-50 rounded'>{$error}</p>";
            }
            unset($_SESSION['errors']);
        }
        ?>

        <!-- LOGIN FORM -->
        <form action="processing_pages/process-login.php" method="POST" class="space-y-4">

            <input 
                type="text"
                name="username"
                placeholder="Email or Username"
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
                Login
            </button>
        </form>

        <p class="text-center mt-4">
            Don't have an account? 
            <a href="signup.php" class="text-red-600 font-semibold">Sign Up</a>
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