<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Shelter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('admin_assets/css/style.css')); ?>">
    <link href="<?php echo e(asset('admin_assets/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <?php echo $__env->make('layout2.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <div class="dashboard-banner2">
        <img src="<?php echo e(asset('admin_assets/img/cutecat.jpg')); ?>">
    </div>

    <div class="description">
        <h2>SINGARAJA SHELTER</h2>
        <p>Alamat: Desa Nagasepaha, Kecamatan Buleleng, Kabupaten Buleleng, Bali</p>
        <p>Buka: 09.00-20.00</p>
        <hr color="black">
        <br>
    </div>
    <div class="dashboard-card-side">
        <div class="card mb-3" style="max-width: 1250px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo e(asset('admin_assets/img/little-cat-relaxing-outdoors-concept.jpg')); ?>" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">TENTANG KAMI</h3>
                  <br>
                  <h6 class="card-text">Hello Pet Lovers! </h6>
                  <br>
                  <h6 class="card-text">Singaraja Shelter merupakan salah satu shelter hewan yang di dalamnya terdapat kucing dan anjing. 
                    Kami menerima request adopsi dan juga penyelamatan anjing serta kucing terlantar </h6>
                <h6 class="card-text">Kami bertekad untuk dapat menjadi rumah bagi kucing dan anjing terlantar, serta membantu meminimalisir 
                    kucing dan anjing liar yang berkeliaran di jalan yang dapat membahayakan diri mereka sendiri maupun manusia
                </h6>
                <br>
                    <a href="<?php echo e(route('toShelter')); ?>" class="btn btn-dark">Kirim Hewan</a>
                    <span><a href="#" class="btn btn-dark">Donasi Shelter</a></span>
                    <hr color="black">
                  <p class="card-text">Instagram: @singarajashelter</p>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="dashboard-card-side">
        <div class="addopt-gallery">
            <h2>Addopt Us!</h2>
        </div>
        <div class="dashboard-content">
            <?php $__currentLoopData = $hewan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul>
                <div class="dashboard-card">
                    <img src="<?php echo e(asset('admin_assets/img/close-up-woman-playing-with-cat-sitting-chair.jpg')); ?>" class="card-image">
                    <div class="card-detail">
                        <h4><?php echo e($h->nama_hewan); ?> (<?php echo e($h->umur_hewan); ?>)</h4>
                        <hr color="black">
                        <p> <?php echo e($h->jenis_hewan); ?></p>
                        <p><b>Kondisi:</b> <?php echo e($h->deskripsi); ?></p>
                        <p><b>Syarat Adopsi:</b> <?php echo e($h->syarat); ?></p>
                    </div>
                    <div class="adoptbutton">
                        <a class="btn btn-dark" href="<?php echo e(route('toAddopt')); ?>">Adopsi</a>
                    </div>
                    <br>
                </div>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>
    </div>
</div>
<footer>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
</body>
</html><?php /**PATH D:\Chintya\KULIAH\SMT 6\PEMWEB\Project\webpetshelter\resources\views/user/detailShelter.blade.php ENDPATH**/ ?>