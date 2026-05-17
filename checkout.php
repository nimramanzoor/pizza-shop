<?php
session_start();
require_once 'includes/db/database.php';

/* 1. Security checks */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}

$db = (new Database())->getConnection();

$user_id = $_SESSION['user_id'];
$total_amount = 0;

/* 2. Calculate total */
foreach ($_SESSION['cart'] as $item) {
    $total_amount += $item['price'] * $item['quantity'];
}

/* 3. Insert into orders table */
$stmt = $db->prepare("
    INSERT INTO orders (user_id, total_amount, status, created_at)
    VALUES (?, ?, 'Pending', NOW())
");
$stmt->execute([$user_id, $total_amount]);

$order_id = $db->lastInsertId();

/* 4. Insert order items */
$itemStmt = $db->prepare("
    INSERT INTO order_items (order_id, product_id, quantity, price)
    VALUES (?, ?, ?, ?)
");

foreach ($_SESSION['cart'] as $item) {
    $itemStmt->execute([
        $order_id,
        $item['id'],
        $item['quantity'],
        $item['price']
    ]);
}

/* 5. Clear cart */
unset($_SESSION['cart']);

/* 6. Redirect */
header("Location: thank-you.php");
exit();
