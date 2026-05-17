<?php
$pageTitle = "Deals";
?>
<?php
// Include the header file
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

    <!-- deals section -->
     <section class="pt-24 pb-12 bg-red-50">
        <div class="container mx-auto px-4">
           
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Deals</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Deal Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/deal1.jpg" alt="Deal 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Family Feast</h3>
                        <p class="text-gray-600 mb-4">2 large pizzas for 2500 PKR!</p>
                       <div class="flex items-center justify-between">
    
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="d1"> 
        <input type="hidden" name="product_name" value="family feast">
        <input type="hidden" name="product_price" value="2500">
        
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
          ORDER NOW
        </button>
    </form>
</div>
                    </div>
                </div>
                <!-- Deal Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/deal2.jpeg" alt="Deal 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Lunch Special</h3>
                        <p class="text-gray-600 mb-4">Get a personal median pizza ,5 wings and a drink for just 1100 PKR!</p>
                      <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">1100 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="d2"> 
        <input type="hidden" name="product_name" value="lunch special">
        <input type="hidden" name="product_price" value="1100">
        
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
          ORDER NOW
        </button>
    </form>
</div>
                    </div>
                </div>
                <!-- Deal Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/deal3.jpeg" alt="Deal 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Couple's Combo</h3>
                        <p class="text-gray-600 mb-4">2 small pizzas and 2 345L drinks for just 800 PKR!</p>
                        <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">800 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="d3"> 
        <input type="hidden" name="product_name" value="couple's combo">
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
            ORDER NOW
        </button>
    </form>
</div>
                    </div>
                </div>
                <!-- Deal Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="assets/deal4.jpeg" alt="Deal 4" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Weekend Party Pack</h3>
                        <p class="text-gray-600 mb-4">1 large pizza,1 Half pasta, and a 1L drink for 1500 PKR!</p>
                      <div class="flex items-center justify-between">
    <span class="text-red-600 font-bold">1500 PKR</span>
    <form action="processing_pages/process-cart.php" method="POST" class="flex items-center gap-2">
        <input type="hidden" name="product_id" value="d4"> 
        <input type="hidden" name="product_name" value="weekend party pack">
        <input type="hidden" name="product_price" value="1500">
        
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
           ORDER NOW
        </button>
    </form>
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