<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Luxe Launderette</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Luxe Launderette</h1>
                <p class="lead">
                    Get all your laundry needs in one place, from washing equipment to special care products,
                    we are ready to meet your needs
                </p>
                <div class="d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="<?php echo e(route('home')); ?>" class="btn btn-md" style="background-color: #78a3d4">See All</a>
                </div>
            </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
            <img src="<?php echo e(Vite::asset('resources/img/cover.png')); ?>" alt="cover" width="550">
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>

<?php /**PATH C:\Users\ASUS\framework\uts_listBarang\resources\views/welcome.blade.php ENDPATH**/ ?>