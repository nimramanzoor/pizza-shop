<?php
// Set the page title for this specific page
$pageTitle = "Pizzas";
?>
<?php
// Include the header file
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>
    <!-- pizza-section -->
    <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
           
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Pizzas</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Pizza Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza1.jpeg" alt="Margherita Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Margherita Pizza</h3>
                        <p class="text-gray-600 mb-4">Classic delight with 100% real mozzarella cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1500 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pizza Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza1.jpg" alt="Pepperoni Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Pepperoni Pizza</h3>
                        <p class="text-gray-600 mb-4">Loaded with pepperoni and cheese for a classic taste</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1550 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pizza Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza2.jpg" alt="Veggie Supreme Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Veggie Supreme Pizza</h3>
                        <p class="text-gray-600 mb-4">A delightful mix of fresh veggies and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1600 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pizza Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza3.jpg" alt="BBQ Chicken Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">BBQ Chicken Pizza</h3>
                        <p class="text-gray-600 mb-4">Tangy BBQ sauce with grilled chicken and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1700 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pizza Item 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza4.jpg" alt="Hawaiian Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Hawaiian Pizza</h3>
                        <p class="text-gray-600 mb-4">A tropical blend of ham, pineapple, and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1750 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pizza Item 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza5.jpg" alt="Meat Lovers Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Meat Lovers Pizza</h3>
                        <p class="text-gray-600 mb-4">A hearty pizza loaded with various meats and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1800 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            <!-- Pizza Items 7 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza6.jpg" alt="Four Cheese Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Four Cheese Pizza</h3>
                        <p class="text-gray-600 mb-4">A rich blend of four different cheeses for cheese lovers</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1850 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pizza Item 8   -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza7.jpg" alt="Spicy Italian Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spicy Italian Pizza</h3>
                        <p class="text-gray-600 mb-4">A fiery mix of Italian sausage, peppers, and cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1900 PKR</span>
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