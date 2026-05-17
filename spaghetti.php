<?php
$pageTitle = "Spaghettis";
?>
<?php
include 'includes/header.php';
include 'includes/navigation.php';
?>
    <!-- speggitis-section -->
     <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
           
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Spaghettis</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Spaghetti Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/spaghetti1.jpg" alt="Spaghetti Carbonara" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Carbonara</h3>
                        <p class="text-gray-600 mb-4">Creamy sauce with pancetta and Parmesan cheese</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">950 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Spaghetti Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/spaghetti2.jpg" alt="Spaghetti Pesto" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Pesto</h3>
                        <p class="text-gray-600 mb-4">Fresh basil pesto sauce with pine nuts and Parmesan</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">900 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Spaghetti Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/spaghetti3.jpg" alt="Spaghetti Marinara" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Marinara</h3>
                        <p class="text-gray-600 mb-4">Classic tomato sauce with garlic, herbs, and seafood</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">950 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Spaghetti Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/spaghetti4.jpg" alt="Spaghetti Aglio e Olio" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Aglio e Olio</h3>
                        <p class="text-gray-600 mb-4">Simple yet flavorful garlic and olive oil sauce</p>
                        <div class="flex items -center justify-between">
                            <span class="text-red-600 font-bold">850 PKR</span>
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
