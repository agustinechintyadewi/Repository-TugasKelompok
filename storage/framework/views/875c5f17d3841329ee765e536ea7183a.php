

<?php $__env->startSection('title', 'Edit Data Hewan'); ?>

<?php $__env->startSection('contents'); ?>
    <form action="<?php echo e(route('hewan.update', $hewan->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama_hewan">Nama Hewan</label>
                            <input type="text" name="nama_hewan" class="form-control" value="<?php echo e($hewan->nama_hewan); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kode_hewan">Kode Hewan</label>
                            <input type="text" name="kode_hewan" class="form-control" value="<?php echo e($hewan->kode_hewan); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_hewan">Jenis Hewan</label>
                            <input type="text" name="jenis_hewan" class="form-control" value="<?php echo e($hewan->jenis_hewan); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="umur_hewan">Umur</label>
                            <input type="text" name="umur_hewan" class="form-control" value="<?php echo e($hewan->umur_hewan); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"><?php echo e($hewan->deskripsi); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="syarat">Syarat Adopsi</label>
                            <textarea name="syarat" class="form-control"><?php echo e($hewan->syarat); ?></textarea>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Chintya\KULIAH\SMT 6\PEMWEB\Project\webpetshelter\resources\views/hewan/edit.blade.php ENDPATH**/ ?>