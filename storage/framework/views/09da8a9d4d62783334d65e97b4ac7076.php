<?php $__env->startSection('content'); ?>
    <h1><?php echo e($post->title); ?></h1>
    <p><?php echo e($post->content); ?></p>

    <hr>
    <h4>Comments</h4> 

    <?php if($post->count()): ?>
        <ul class="list-group mb-3">
            <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item"><?php echo e($comment->body); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No comments yet.</p>
    <?php endif; ?>

    <form action="<?php echo e(route('comments.store', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="body">Add Comment:</label>
            <textarea name="body" id="body" rows="3" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Post Comment</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\Laravel-Course\resources\views/posts/show.blade.php ENDPATH**/ ?>