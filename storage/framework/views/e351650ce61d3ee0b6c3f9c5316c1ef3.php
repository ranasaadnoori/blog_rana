<?php $__env->startSection('content'); ?>
    <h1>Create a New Post</h1>

    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\Laravel-Course\resources\views/posts/create.blade.php ENDPATH**/ ?>