<?php
$pageTitle = "Pasta";
<?php
include 'includes/header.php';
include 'includes/navigation.php';
?>
    <!-- pasta section  -->
     <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
           
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Pasta</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Pasta Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pasta1.jpg" alt="Spaghetti Bolognese" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Bolognese</h3>
                        <p class="text-gray-600 mb-4">Classic spaghetti with rich meat sauce</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">900 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pasta Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pasta2.jpg" alt="Fettuccine Alfredo" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Fettuccine Alfredo</h3>
                        <p class="text-gray-600 mb-4">Creamy Alfredo sauce with fettuccine pasta</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">950 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pasta Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pasta3.jpg" alt="Penne Arrabbiata" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Penne Arrabbiata</h3>
                        <p class="text-gray-600 mb-4">Spicy tomato sauce with penne pasta</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">900 PKR</span>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Pasta Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pasta4.jpg" alt="Lasagna" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Lasagna</h3>
                        <p class="text-gray-600 mb-4">Layers of pasta, meat sauce, and cheese baked to perfection</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">1000 PKR</span>
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
    
    