<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Shoes list</div>

                    <div class="card-body">

                        <a href="<?php echo e(route('shoes.create')); ?>" class="btn btn-primary">Add new Shoe</a>
                        <br /><br />

                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Download file</th>
                                <th>Delete file</th>
                            </tr>
                            <?php $__empty_1 = true; $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($shoe->title); ?></td>
                                
                                <td><a href="<?php echo e(route('shoes.download', $shoe->uuid)); ?>"><?php echo e($shoe->cover); ?></a></td>
                                <td><a href="<?php echo e(route('shoes.delete', $shoe->uuid)); ?>"><?php echo e($shoe->cover); ?></a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="2">No books found.</td>
                            </tr>
                            <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\sp19-bcs-044(pharmacy)\resources\views/shoes/index.blade.php ENDPATH**/ ?>