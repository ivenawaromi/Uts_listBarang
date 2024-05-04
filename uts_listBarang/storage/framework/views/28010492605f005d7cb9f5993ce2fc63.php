<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #a6c3e4">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi bi-basket2-fill me-2"></i>Luxe Launderette</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link active">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('laundry.index')); ?>" class="nav-link">Product List</a></li>
            </ul>

            <hr class="d-lg-none text-white-50">
            <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto" ><i class="bi-person-circle me-1"></i>My Profile</a>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\ASUS\framework\uts_listBarang\resources\views/layouts/nav.blade.php ENDPATH**/ ?>