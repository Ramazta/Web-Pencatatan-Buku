;
<?php $__env->startSection('container'); ?>
    <div class="card">
        <div class="card-header">
            Detail Buku
        </div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Judul : <?php echo e($books->judul); ?></h5>
                <br>
                <p class="card-text">Penulis : <?php echo e($books->penulis); ?> </p>
                <p class="card-text">Penerbit : <?php echo e($books->penerbit); ?> </p>
                <p class="card-text">Sinopsis : <?php echo e($books->sinopsis); ?> </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rama/pencatatan_buku/resources/views/books/show-book.blade.php ENDPATH**/ ?>