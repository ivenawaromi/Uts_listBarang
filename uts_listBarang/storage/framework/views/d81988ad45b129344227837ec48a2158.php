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
    <div class="container-sm my-5 card border-secondary">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo e(Vite::asset('resources/img/laundry.jpg')); ?>" class="img-fluid rounded-strart" alt="Gambar Detail">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <?php if($product): ?>
                        <h5 class="card-title"><?php echo e($product->name_product); ?></h5>
                        <p class="card-text">
                            Kode Produk : <?php echo e($product->code_product); ?> <br>
                            Satuan : <?php echo e($product->unit->code_unit); ?> <br>
                            Description : <?php echo e($product->description); ?> <br>
                            Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?>

                        </p>
                        <p class="card-text d-grid gap-2 d-md-flex justify-content-md-end">
                            <small>
                                <a href="<?php echo e(route('laundry.index')); ?>" class="btn me-md-2" style="background-color: #78a3d4">Back</a>
                                <a href="<?php echo e(route('laundry.edit', [ $product->id])); ?>" class="btn me-md-2" style="background-color: #78a3d4">Edit</a>
                            </small>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\framework\uts_listBarang\resources\views/laundry/show.blade.php ENDPATH**/ ?>