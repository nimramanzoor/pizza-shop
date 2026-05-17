<?php
session_start();
$pageTitle = "Your Cart";

// Include header and navigation
require_once 'includes/header.php';
require_once 'includes/navigation.php';

// Handle removing an item (optional functionality)
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['id'] == $remove_id) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index array
            header("Location: cart.php");
            exit();
        }
    }
}
?>

<section class="pt-24 pb-12 bg-red-50 min-h-screen">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-red-600 mb-8 text-center">Your Shopping Cart</h1>

        <?php if (!empty($_SESSION['cart'])): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl mx-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-red-600 text-white">
                            <th class="py-4 px-6">Product</th>
                            <th class="py-4 px-6 text-center">Price</th>
                            <th class="py-4 px-6 text-center">Quantity</th>
                            <th class="py-4 px-6 text-center">Total</th>
                            <th class="py-4 px-6 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $grand_total = 0;
                        foreach ($_SESSION['cart'] as $item): 
                            $item_total = $item['price'] * $item['quantity'];
                            $grand_total += $item_total;
                        ?>
                        <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-gray-800"><?php echo htmlspecialchars($item['name']); ?></td>
                            <td class="py-4 px-6 text-center text-gray-600"><?php echo number_format($item['price']); ?> PKR</td>
                            <td class="py-4 px-6 text-center">
                                <span class="bg-gray-100 px-3 py-1 rounded-full border text-gray-700">
                                    <?php echo $item['quantity']; ?>
                                </span>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-red-600">
                                <?php echo number_format($item_total); ?> PKR
                            </td>
                            <td class="py-4 px-6 text-center">
                                <a href="cart.php?remove=<?php echo $item['id']; ?>" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="p-6 bg-gray-50 flex flex-col md:flex-row justify-between items-center">
                    <div class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">
                        Total Amount: <span class="text-red-600"><?php echo number_format($grand_total); ?> PKR</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="menu.php" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition">Continue Shopping</a>
                        <form action="checkout.php" method="post">
    <button type="submit"
        class="bg-red-600 text-white px-8 py-2 rounded font-bold hover:bg-red-700 transition shadow-md">
        Checkout
    </button>
</form>

                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="text-center py-12 bg-white rounded-lg shadow max-w-2xl mx-auto">
                <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                <h2 class="text-2xl font-semibold text-gray-600 mb-4">Your cart is empty!</h2>
                <a href="menu.php" class="inline-block bg-red-600 text-white px-8 py-3 rounded-lg hover:bg-red-700 transition">
                    Browse Menu
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>