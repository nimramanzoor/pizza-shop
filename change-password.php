u<?php
// change-password.php
$pageTitle = "Change Password";
require_once 'includes/header.php';

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<section class="content-section section-blue">
    <h2 class="section-heading heading-blue">Change Password</h2>

    <article class="content-article article-blue">
        <h3 class="article-heading">
            <span class="article-icon-blue">▸</span> Update Your Password
        </h3>

        <form action="processing_pages/process-change-password.php" method="POST" class="max-w-md mx-auto space-y-6">
            <div class="form-group">
                <label for="current_password" class="form-label">Current Password:</label>
                <input type="password" id="current_password" name="current_password" required class="form-input">
            </div>

            <div class="form-group">
                <label for="new_password" class="form-label">New Password:</label>
                <input type="password" id="new_password" name="new_password" required minlength="4" class="form-input">
            </div>

            <div class="form-group">
                <label for="confirm_password" class="form-label">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required minlength="4" class="form-input">
            </div>

            <div class="flex space-x-4 pt-4">
                <input type="submit" value="Change Password" class="btn-submit">
                <a href="index.php" class="btn-reset text-center">Cancel</a>
            </div>
        </form>
    </article>
</section>

<?php
require_once 'includes/footer.php';
?>