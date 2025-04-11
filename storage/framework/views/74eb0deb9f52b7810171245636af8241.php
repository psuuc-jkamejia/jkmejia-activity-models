<h1>Edit Book</h1>
    <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo e($book->title); ?>" required>
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="<?php echo e($book->author); ?>" required>
        <br>
        <label for="published_date">Published Date:</label>
        <input type="date" id="published_date" name="published_date" value="<?php echo e($book->published_date); ?>" required>
        <br>
        <button type="submit">Save Changes</button>
    </form>
<?php /**PATH C:\xampp\htdocs\KENN Folder\MejiaJanKenneth\resources\views/books/edit.blade.php ENDPATH**/ ?>