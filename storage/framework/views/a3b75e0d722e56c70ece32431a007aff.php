<!-- edit.blade.php -->


<?php $__env->startSection('content'); ?>
    <h1>Edit Post</h1>
    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo e($post->title); ?>">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content" class="form-control"><?php echo e($post->content); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\Laravel-Course\resources\views/posts/edit.blade.php ENDPATH**/ ?>