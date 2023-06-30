

<?php $__env->startSection('title', 'Data Hewan'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Hewan</h6>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('hewan.tambah')); ?>" class="btn btn-primary mb-3">Tambah Hewan</a>
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kode Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Umur</th>
                            <th>Deskripsi</th>
                            <th>Syarat Adopsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($hewan->count() > 0): ?>
                        <?php $__currentLoopData = $hewan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                                <td class="align-middle"><?php echo e($h->nama_hewan); ?></td>
                                <td class="align-middle"><?php echo e($h->kode_hewan); ?></td>
                                <td class="align-middle"><?php echo e($h->jenis_hewan); ?></td>
                                <td class="align-middle"><?php echo e($h->umur_hewan); ?></td>  
                                <td class="align-middle"><?php echo e($h->deskripsi); ?></td>  
                                <td class="align-middle"><?php echo e($h->syarat); ?></td> 
                                <td class="align-middle"><?php echo e($h->foto); ?></td> 
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?php echo e(route('hewan.edit', $h->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                        <form action="<?php echo e(route('hewan.destroy', $h->id)); ?>" method="POST" type="button" class="btn btn-danger 
                                        p-0" onsubmit="return confirm('Delete?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger m-0">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td class="text-center" colspan="5">Hewan not found</td>
                            </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Chintya\KULIAH\SMT 6\PEMWEB\Project\webpetshelter\resources\views/hewan/index.blade.php ENDPATH**/ ?>