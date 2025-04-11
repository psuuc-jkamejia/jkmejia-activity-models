<h1>All Books</h1>
    <a href="<?php echo e(route('books.create')); ?>">Add New Book</a>
    <ul>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($book->title); ?> by <?php echo e($book->author); ?> (<?php echo e($book->published_date); ?>)
                <a href="<?php echo e(route('books.edit', $book->id)); ?>">Edit</a>
                <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul><?php /**PATH C:\xampp\htdocs\KENN Folder\MejiaJanKenneth\resources\views/books/index.blade.php ENDPATH**/ ?>