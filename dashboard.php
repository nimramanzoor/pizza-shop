<?php
session_start();
require_once 'includes/db/database.php';

// 1. Security: Only allow admins
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: index.php");
    exit();
}

$database = new Database();
$db = $database->getConnection();

try {
    // Fetch basic stats for the dashboard
    $total_orders = $db->query("SELECT COUNT(*) FROM orders")->fetchColumn();
    $total_users = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();
    $total_products = $db->query("SELECT COUNT(*) FROM products")->fetchColumn();
    
    // Fetch recent orders
    $recent_orders = $db->query("SELECT o.*, u.username FROM orders o 
                                 JOIN users u ON o.user_id = u.id 
                                 ORDER BY o.created_at DESC LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error fetching dashboard data: " . $e->getMessage();
}

include 'includes/header.php'; 
?>

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
        <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Logout</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
            <h3 class="text-gray-500 text-sm font-semibold uppercase">Total Orders</h3>
            <p class="text-3xl font-bold"><?php echo $total_orders; ?></p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
            <h3 class="text-gray-500 text-sm font-semibold uppercase">Products</h3>
            <p class="text-3xl font-bold"><?php echo $total_products; ?></p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-500">
            <h3 class="text-gray-500 text-sm font-semibold uppercase">Registered Users</h3>
            <p class="text-3xl font-bold"><?php echo $total_users; ?></p>
        </div>
    </div>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h2 class="text-xl font-bold mb-4">Quick Management</h2>
        <div class="flex gap-4">
            <a href="manage-products.php" class="bg-blue-600 text-white px-6 py-3 rounded shadow hover:bg-blue-700 transition">Manage Pizzas</a>
            <a href="view-orders.php" class="bg-green-600 text-white px-6 py-3 rounded shadow hover:bg-green-700 transition">View All Orders</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-bold">Recent Orders</h2>
        </div>
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-gray-600 uppercase text-sm">
                <tr>
                    <th class="px-6 py-3">Order ID</th>
                    <th class="px-6 py-3">Customer</th>
                    <th class="px-6 py-3">Total</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($recent_orders as $order): ?>
                <tr>
                    <td class="px-6 py-4">#<?php echo $order['id']; ?></td>
                    <td class="px-6 py-4"><?php echo htmlspecialchars($order['username']); ?></td>
                    <td class="px-6 py-4">$<?php echo number_format($order['total_amount'], 2); ?></td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-yellow-100 text-yellow-800">
                            <?php echo $order['status']; ?>
                        </span>
                    </td>
                    <td class="px-6 py-4"><?php echo date('M d, Y', strtotime($order['created_at'])); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>