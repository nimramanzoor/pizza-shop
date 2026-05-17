<?php
session_start();
$pageTitle = "Thank You";

require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<section class="pt-24 pb-12 bg-green-50 min-h-screen flex items-center justify-center">
    <div class="bg-white p-10 rounded-lg shadow-lg text-center max-w-xl">
        <i class="fas fa-check-circle text-6xl text-green-500 mb-4"></i>
        <h1 class="text-3xl font-bold text-green-600 mb-4">
            Thank You for Shopping!
        </h1>
        <p class="text-gray-600 mb-6">
            Your order has been placed successfully.
        </p>
        <a href="menu.php"
           class="inline-block bg-green-600 text-white px-8 py-3 rounded hover:bg-green-700 transition">
            Continue Shopping
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
