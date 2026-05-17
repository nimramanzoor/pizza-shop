<?php
session_start();
$pageTitle = "Order Successful";

// Include header and navigation
require_once 'includes/header.php';
require_once 'includes/navigation.php';

// Get Order ID from URL
$order_id = isset($_GET['order_id']) ? htmlspecialchars($_GET['order_id']) : 'N/A';

// Secure the page: If no order ID is present and user isn't logged in, send them home
if ($order_id === 'N/A' && !isset($_SESSION['logged_in'])) {
    header("Location: index.php");
    exit();
}
?>

<section class="pt-32 pb-12 bg-red-50 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-xl p-8 text-center">
            
            <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <h1 class="text-3xl font-bold text-gray-800 mb-2">Order Placed Successfully!</h1>
            <p class="text-gray-600 mb-6">Thank you for choosing <span class="text-red-600 font-semibold">Pizza.com</span>. Your meal is being prepared with love.</p>

            <div class="bg-gray-50 border border-gray-100 rounded-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-gray-500">Order Number:</span>
                    <span class="font-bold text-gray-800">#<?php echo $order_id; ?></span>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-gray-500">Status:</span>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold uppercase">Pending</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500">Estimated Delivery:</span>
                    <span class="font-semibold text-gray-800">30-45 Mins</span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="index.php" class="bg-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300 shadow-md">
                    Return Home
                </a>
                <button onclick="window.print()" class="bg-white border border-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition duration-300">
                    Print Receipt
                </button>
            </div>

            <p class="mt-8 text-sm text-gray-400">
                A confirmation email has been sent to your registered email address.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>