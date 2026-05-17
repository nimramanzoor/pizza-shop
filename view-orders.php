<?php
session_start();
require_once 'includes/db/database.php';

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: index.php");
    exit();
}

$db = (new Database())->getConnection();

/* Update order status */
if (isset($_POST['order_id'], $_POST['status'])) {
    $stmt = $db->prepare("UPDATE orders SET status = ? WHERE id = ?");
    $stmt->execute([$_POST['status'], $_POST['order_id']]);
}

$orders = $db->query("
    SELECT o.*, u.username 
    FROM orders o 
    JOIN users u ON o.user_id = u.id 
    ORDER BY o.created_at DESC
")->fetchAll(PDO::FETCH_ASSOC);

include 'includes/header.php';
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Manage Orders</h1>

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3">ID</th>
                <th class="p-3">Customer</th>
                <th class="p-3">Total</th>
                <th class="p-3">Status</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($orders as $order): ?>
            <tr class="border-t">
                <td class="p-3">#<?= $order['id'] ?></td>
                <td class="p-3"><?= htmlspecialchars($order['username']) ?></td>
                <td class="p-3">$<?= number_format($order['total_amount'],2) ?></td>
                <td class="p-3"><?= $order['status'] ?></td>
                <td class="p-3">
                    <form method="POST" class="flex gap-2">
                        <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
                        <select name="status" class="border rounded px-2">
                            <option>Pending</option>
                            <option>Preparing</option>
                            <option>Delivered</option>
                            <option>Cancelled</option>
                        </select>
                        <button class="bg-blue-600 text-white px-3 rounded">Update</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
