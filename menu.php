<?php
$pageTitle = "Menu";
?>
<?php
// Include the header file
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>
    <!-- menu -->
    <!-- pizza-section -->
    <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-red-600 mb-8">Our Menu</h2>
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Pizzas</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Pizza Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pizza1.jpeg" alt="Margherita Pizza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Margherita Pizza</h3>
                        <p class="text-gray-600 mb-4">Classic delight with 100% real mozzarella cheese</p>
                       <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">1550 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p1"> 
        <input type="hidden" name="product_name" value="Margherita Pizza">
        <input type="hidden" name="product_price" value="1550">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <span class="text-red-600 font-bold">1600 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p2"> 
        <input type="hidden" name="product_name" value="pepperoni Pizza">
        <input type="hidden" name="product_price" value="1600">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <span class="text-red-600 font-bold">1650 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p3"> 
        <input type="hidden" name="product_name" value="Veggie Supreme  Pizza">
        <input type="hidden" name="product_price" value="1650">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p4"> 
        <input type="hidden" name="product_name" value="BBQ Chicken Pizza">
        <input type="hidden" name="product_price" value="1700">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p5"> 
        <input type="hidden" name="product_name" value="Hawaiian Pizza">
        <input type="hidden" name="product_price" value="1750">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p6"> 
        <input type="hidden" name="product_name" value="Meat Lovers Pizza">
        <input type="hidden" name="product_price" value="1800">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p7"> 
        <input type="hidden" name="product_name" value="Four Cheese Pizza">
        <input type="hidden" name="product_price" value="1850">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p8"> 
        <input type="hidden" name="product_name" value="Spicy Italian Pizza">
        <input type="hidden" name="product_price" value="1900">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sandwich section -->
     <section class="pb-12 bg-red-50">
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p9"> 
        <input type="hidden" name="product_name" value="Chicken Sandwich">
        <input type="hidden" name="product_price" value="800">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <span class="text-red-600 font-bold">750 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="p10"> 
        <input type="hidden" name="product_name" value="Veggie Sandwich">
        <input type="hidden" name="product_price" value="750">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s1"> 
        <input type="hidden" name="product_name" value="Turkey Sandwich">
        <input type="hidden" name="product_price" value="850">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s2"> 
        <input type="hidden" name="product_name" value="Ham Sandwich">
        <input type="hidden" name="product_price" value="800">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pasta section  -->
    <section class="pb-12 bg-red-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Pastas</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Pasta Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/pasta1.jpg" alt="Spaghetti Bolognese" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Bolognese</h3>
                        <p class="text-gray-600 mb-4">Classic spaghetti with rich meat sauce</p>
                        <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">900 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s3"> 
        <input type="hidden" name="product_name" value="Spaghetti Bolognese">
        <input type="hidden" name="product_price" value="900">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s4"> 
        <input type="hidden" name="product_name" value="Fettuccine Alfredo">
        <input type="hidden" name="product_price" value="950">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s5"> 
        <input type="hidden" name="product_name" value="Penne Arrabbiata">
        <input type="hidden" name="product_price" value="900">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s6"> 
        <input type="hidden" name="product_name" value="Lasagna">
        <input type="hidden" name="product_price" value="1000">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- burger section -->
    <section class="pb-12 bg-red-50">
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s7"> 
        <input type="hidden" name="product_name" value="Classic Beef Burger">
        <input type="hidden" name="product_price" value="350">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s8"> 
        <input type="hidden" name="product_name" value="Chicken Burger">
        <input type="hidden" name="product_price" value="300">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s9"> 
        <input type="hidden" name="product_name" value="Veggie Burger">
        <input type="hidden" name="product_price" value="550">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s10"> 
        <input type="hidden" name="product_name" value="Cheeseburger">
        <input type="hidden" name="product_price" value="400">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shawarma-section -->
    <section class="pb-12 bg-red-50">
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s11"> 
        <input type="hidden" name="product_name" value="Chicken Shawarma">
        <input type="hidden" name="product_price" value="400">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s12"> 
        <input type="hidden" name="product_name" value="Beef Shawarma">
        <input type="hidden" name="product_price" value="450">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s13"> 
        <input type="hidden" name="product_name" value="Veggie Shawarma">
        <input type="hidden" name="product_price" value="350">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
                <!-- Shawarma Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/shawarma4.jpg" alt="mixed Shawarma" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Mixed Shawarma</h3>
                        <p class="text-gray-600 mb-4">A delicious mix of chicken and beef shawarma</p>
                       <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">500 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s14"> 
        <input type="hidden" name="product_name" value="mixed Shawarma">
        <input type="hidden" name="product_price" value="500">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- speggitis-section -->
    <section class="pb-12 bg-red-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Spaghetti</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">


                <!-- Spaghetti Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/spaghetti1.jpg" alt="Spaghetti Carbonara" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Carbonara</h3>
                        <p class="text-gray-600 mb-4">Creamy sauce with pancetta and Parmesan cheese</p>
                       <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">950 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s14"> 
        <input type="hidden" name="product_name" value="Spaghetti Carbonara">
        <input type="hidden" name="product_price" value="950">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s15"> 
        <input type="hidden" name="product_name" value="Spaghetti Pesto">
        <input type="hidden" name="product_price" value="900">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
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
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s16"> 
        <input type="hidden" name="product_name" value="Spaghetti Marinara">
        <input type="hidden" name="product_price" value="950">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
                <!-- Spaghetti Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/spaghetti4.jpg" alt="Spaghetti Aglio e Olio" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Spaghetti Aglio e Olio</h3>
                        <p class="text-gray-600 mb-4">Simple yet flavorful garlic and olive oil sauce</p>
                        <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">850 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s17"> 
        <input type="hidden" name="product_name" value="Spaghetti Aglio e Olio">
        <input type="hidden" name="product_price" value="850">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>  
        
        </div>
    </section>
    <!-- beverages-section -->
     <section class="pb-12 bg-red-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Beverages</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Beverage Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/beverage1.jpg" alt="Coca-Cola" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Coca-Cola</h3>
                      <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">150 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s18"> 
        <input type="hidden" name="product_name" value="Coca-Cola">
        <input type="hidden" name="product_price" value="150">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
</div>
                </div>
                <!-- Beverage Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/beverage2.jpg" alt="Orange Juice" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Orange Juice</h3>
                       <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">200 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s19"> 
        <input type="hidden" name="product_name" value="Orange Juice">
        <input type="hidden" name="product_price" value="200">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
                <!-- Beverage Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/beverage3.jpg" alt="Lemonade" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Lemonade</h3>
                       <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">180 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s20"> 
        <input type="hidden" name="product_name" value="Lemonade">
        <input type="hidden" name="product_price" value="180">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
                <!-- Beverage Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/beverage4.jpg" alt="Iced Tea" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Iced Tea</h3>
                       <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">170 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="s21"> 
        <input type="hidden" name="product_name" value="Iced Tea">
        <input type="hidden" name="product_price" value="170">
        
        <div class="flex items-center border border-gray-300 rounded overflow-hidden">
            <label for="quantity_p1" class="sr-only">Quantity</label>
            <input 
                type="number" 
                id="quantity_p1" 
                name="quantity" 
                value="1" 
                min="1" 
                max="10" 
                class="w-12 text-center py-1 px-1 focus:outline-none bg-white text-gray-800"
            >
        </div>

        <button type="submit" name="add_to_cart" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors duration-300">
            Add to Cart
        </button>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- back to top button -->
    <button id="back-to-top"
        class="fixed bottom-4 right-4 bg-red-600 text-white p-3 rounded-full shadow-lg hover:bg-red-700 transition-colors duration-300 hidden">
        <i class="fas fa-arrow-up"></i>
    </button>
  <!-- footer section -->

<?php
include 'includes/footer.php';
?>