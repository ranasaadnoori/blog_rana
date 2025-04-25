<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>List of Posts</h1>
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">Create New Post</a>
    </div>

    <?php if($posts->count()): ?>
        <ul class="list-group">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <a href="<?php echo e(route('posts.show', $post->id)); ?>"><?php echo e($post->title); ?></a>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-secondary">Edit</a>
                        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No posts found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\Laravel-Course\resources\views/posts/index.blade.php ENDPATH**/ ?>