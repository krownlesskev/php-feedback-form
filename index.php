<?php include 'inc/header.php'; ?>

<img src="/php-feedback-form/img/shiba.jpg" class="w-25 mb-3 rounded" alt="logo">
<h2>Feedback</h2>
<p class="lead text-center">Leave some feedback for Kevin</p>
<form action="" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea name="body" id="body" class="form-control" placeholder="Enter your feedback"></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>

<?php include 'inc/footer.php'; ?>