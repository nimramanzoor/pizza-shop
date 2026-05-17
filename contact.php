<?php
$pageTitle = "Contact Us";
session_start();

// connect database
require_once 'includes/db/database.php';

// Get any stored form data or errors
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$form_data = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : [];
$success_message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : '';

// Clear session messages
unset($_SESSION['errors']);
unset($_SESSION['form_data']);
unset($_SESSION['success_message']);

require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<section class="text-gray-600 body-font relative bg-red-50">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <!-- Display Success Message -->
    <?php if (!empty($success_message)): ?>
        <div class="alert-success">
            <?php echo htmlspecialchars($success_message); ?>
        </div>
    <?php endif; ?>

    <!-- Display Error Messages -->
    <?php if (!empty($errors)): ?>
        <div class="alert-error">
            <h4 class="alert-heading">Please fix the following errors:</h4>
            <ul class="alert-list">
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
        "Your perfect pizza is just a message away. Get in touch!"
      </p>
    </div>

    <form action="processing_pages/process-contact.php" method="POST">
  <div class="lg:w-1/2 md:w-2/3 mx-auto">
    <div class="flex flex-wrap -m-2">

      <div class="p-2 w-1/2">
        <label for="name">Name</label>
        <input type="text" id="name" name="contact-name" class="w-full bg-gray-100 rounded border border-gray-300 focus:ring-2 focus:ring-red-300 focus:bg-white text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>

      <div class="p-2 w-1/2">
        <label for="email">Email</label>
        <input type="email" id="email" name="contact-email" class="w-full bg-gray-100 rounded border border-gray-300 focus:ring-2 focus:ring-red-300 focus:bg-white text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>

      <div class="p-2 w-full">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="contact-subject" class="w-full bg-gray-100 rounded border border-gray-300 focus:ring-2 focus:ring-red-300 focus:bg-white text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>

      <div class="p-2 w-full">
        <label for="message">Message</label>
        <textarea id="message" name="contact-message" class="w-full bg-gray-100 rounded border border-gray-300 focus:ring-2 focus:ring-red-300 focus:bg-white h-32 text-base outline-none py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>

      <div class="p-2 w-full">
        <button class="mx-auto text-white bg-[#da241c] py-2 px-8 rounded text-lg">
          Submit
        </button>
      </div>

    </div>
  </div>
</form>


  </div>
</section>

<?php include 'includes/footer.php'; ?>
