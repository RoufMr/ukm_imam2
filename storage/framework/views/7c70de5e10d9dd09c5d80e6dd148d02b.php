<?php $__env->startSection('content'); ?>
<section>
    <div class="container col-xxl-8">
        <h4>Halaman Blog Artikel</h4>

        <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-success">Buat Artikel</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                    ?>
                    <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td>
                            <img src="<?php echo e(asset('storage/artikel/'. $item-image)); ?>" height="100" alt="">
                        </td>
                        <td>
                            <?php echo e($artikel->judul); ?>

                        </td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <form action=""  method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="bt btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester_4\Laravel\UKMIMAM\resources\views/dashboard/blog/index.blade.php ENDPATH**/ ?>