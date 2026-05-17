<?php
session_start();
require_once 'includes/db/database.php';

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: index.php");
    exit();
}

$db = (new Database())->getConnection();

/* Add product */
if (isset($_POST['name'], $_POST['price'])) {
    $stmt = $db->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
    $stmt->execute([$_POST['name'], $_POST['price']]);
}

/* Delete product */
if (isset($_GET['delete'])) {
    $stmt = $db->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
}

$products = $db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);

include 'includes/header.php';
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Manage Pizzas</h1>

    <form method="POST" class="bg-white p-4 rounded shadow mb-6 flex gap-4">
        <input name="name" placeholder="Pizza Name" required class="border p-2 flex-1">
        <input name="price" type="number" step="0.01" placeholder="Price" required class="border p-2">
        <button class="bg-green-600 text-white px-4 rounded">Add</button>
    </form>

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3">Name</th>
                <th class="p-3">Price</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $p): ?>
            <tr class="border-t">
                <td class="p-3"><?= htmlspecialchars($p['name']) ?></td>
                <td class="p-3">$<?= number_format($p['price'],2) ?></td>
                <td class="p-3">
                    <a href="?delete=<?= $p['id'] ?>" 
                       class="text-red-600"
                       onclick="return confirm('Delete pizza?')">
                        Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
