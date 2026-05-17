<?php
$pageTitle = "Burgers";
?>
<?php
// Include the header file
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

    <!-- burger section -->
     <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
           
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Burgers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Burger Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/burger1.jpg" alt="Classic Beef Burger" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Classic Beef Burger</h3>
                        <p class="text-gray-600 mb-4">Juicy beef patty with lettuce, tomato, and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">350 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Burger Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/burger2.jpg" alt="Chicken Burger" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Chicken Burger</h3>
                        <p class="text-gray-600 mb-4">Grilled chicken patty with fresh veggies and mayo</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">300 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Burger Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden"> 
                    <img src="assets/burger3.jpg" alt="Veggie Burger" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Veggie Burger</h3>
                        <p class="text-gray-600 mb-4">Delicious veggie patty with lettuce, tomato, and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">550 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Burger Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/burger4.jpg" alt="Cheeseburger" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Cheeseburger</h3>
                        <p class="text-gray-600 mb-4">Beef patty topped with melted cheese and fresh veggies</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">400 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section -->
<?php
include 'includes/footer.php';
?>