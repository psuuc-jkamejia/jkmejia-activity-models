<h1>Add New Book</h1>
    <form action="<?php echo e(route('books.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>
        <br>
        <label for="published_date">Published Date:</label>
        <input type="date" id="published_date" name="published_date" required>
        <br>
        <button type="submit">Save</button>    </form>
<?php /**PATH C:\xampp\htdocs\KENN Folder\MejiaJanKenneth\resources\views/books/create.blade.php ENDPATH**/ ?>