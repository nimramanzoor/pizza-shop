<?php
$pageTitle = "Shawarma";
?>
<?php
include 'includes/header.php';
include 'includes/navigation.php';
?>
    <!-- shawarma-section -->
     <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
           
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Shawarmas</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Shawarma Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/shawarma1.jpg" alt="Chicken Shawarma" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Chicken Shawarma</h3>
                        <p class="text-gray-600 mb-4">Marinated chicken with garlic sauce and fresh veggies</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">400 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Shawarma Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/shawarma2.jpg" alt="Beef Shawarma" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Beef Shawarma</h3>
                        <p class="text-gray-600 mb-4">Tender beef with tahini sauce and fresh vegetables</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">450 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Shawarma Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/shawarma3.jpg" alt="Veggie Shawarma" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Veggie Shawarma</h3>
                        <p class="text-gray-600 mb-4">Grilled vegetables with hummus and fresh greens</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">350 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Shawarma Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/shawarma4.jpg" alt="Mixed Shawarma" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Mixed Shawarma</h3>
                        <p class="text-gray-600 mb-4">A delicious mix of chicken and beef shawarma</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">500 PKR</span>
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
