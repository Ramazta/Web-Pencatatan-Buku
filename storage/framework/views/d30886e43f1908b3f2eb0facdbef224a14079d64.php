;
<?php $__env->startSection('container'); ?>
<?php if($errors->any()): ?>
        <div class="alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">Tambah Data</div>
        <div class="card-body">
            <form action="<?php echo e(url('books')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <label for="">Judul Buku</label><br>
                <input type="text" class="form-control" name="judul" id="judul">
                <br>
                <label for="">Penulis Buku</label><br>
                <input type="text" class="form-control" name="penulis" id="penulis">
                <br>
                <label for="">Penerbit Buku</label><br>
                <input type="text" class="form-control" name="penerbit" id="penerbit">
                <br>
                <label for="">Sinopsis Buku</label><br>
                <input type="text" class="form-control" name="sinopsis" id="sinopsis">

                <br><br>
                <input type="submit" value="Simpan Data" class="btn btn-success"><br>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rama/pencatatan_buku/resources/views/books/add-book.blade.php ENDPATH**/ ?>