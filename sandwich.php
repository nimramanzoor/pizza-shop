<?php   
$pageTitle = "Sandwiches";
?>
<?php
// Include the header file
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>
    <!-- sandwich section -->
      <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
           
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Sandwiches</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Sandwich Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/sandwich1.jpg" alt="Chicken Sandwich" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Chicken Sandwich</h3>
                        <p class="text-gray-600 mb-4">Grilled chicken with fresh veggies and mayo</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">800 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Sandwich Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/sandwich2.jpg" alt="Veggie Sandwich" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Veggie Sandwich</h3>
                        <p class="text-gray-600 mb-4">A healthy mix of fresh vegetables and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold ">750 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Sandwich Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/sandwich3.jpg" alt="Turkey Sandwich" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Turkey Sandwich</h3>
                        <p class="text-gray-600 mb-4">Sliced turkey with lettuce, tomato, and mustard</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">850 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Sandwich Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/sandwich4.jpg" alt="Ham Sandwich" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Ham Sandwich</h3>
                        <p class="text-gray-600 mb-4">Classic ham sandwich with cheese and fresh veggies</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">800 PKR</span>
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