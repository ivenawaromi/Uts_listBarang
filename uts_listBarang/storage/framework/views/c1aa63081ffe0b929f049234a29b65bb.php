<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="<?php echo e(route('laundry.create')); ?>" class="btn" style="background-color: #78a3d4">Create Product List</a>
                    </div>
                </div>
            </div>
        </div>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($product->name_product); ?></h5>
                <p class="card-text">
                    Kode Produk : <?php echo e($product->code_product); ?> <br>
                    Satuan : <?php echo e($product->unit->code_unit); ?> <br>
                    Description : <?php echo e($product->description); ?> <br>
                    Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?>

                </p>
                <a href="<?php echo e(route('laundry.show', ['laundry'=> $product->id])); ?>" class="btn btn-outline-primary btn-sm me-1" >See</a>
                <a href="<?php echo e(route('laundry.edit', ['laundry'=> $product->id])); ?>" class="btn btn-outline-primary btn-sm me-1">Edit</a>
                <form action="<?php echo e(route('laundry.destroy', ['laundry'=> $product->id])); ?>" method="POST" class="btn row">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-outline-primary btn-sm me-1">Delete</button>
                </form>
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\framework\uts_listBarang\resources\views/laundry/index.blade.php ENDPATH**/ ?>