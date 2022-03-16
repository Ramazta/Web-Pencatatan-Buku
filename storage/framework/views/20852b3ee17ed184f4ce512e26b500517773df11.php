
<?php $__env->startSection('container'); ?>
    <?php if(session('success')): ?>
        <div class="alert-success">
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="jumbotron">
        <div class="card">
            <div class="card-header card-title">
                <h4>Pencatatan Buku</h4>
            </div>
            <div class="card-body">
                <center>
                <p class="card-text">Laravel CRUD Untuk Mencatat Informasi Buku <br>Mujahid Akbar Ramadhan -
                    XI RPL 2</p></center>
                <a href=" <?php echo e(url('/books/create')); ?> " class="btn btn-warning">Tambah Buku</a>
                <br><br><br>
                <table class="table table-hover table-striped table-bordered">
                    <thead class="table table-dark text-center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <!-- <th scope="col">Sinopsis</th> -->
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = isset($books) ? $books : []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th> <?php echo e($loop->iteration); ?> </th>
                                <td> <?php echo e($item->judul); ?> </td>
                                <td> <?php echo e($item->penulis); ?> </td>
                                <td> <?php echo e($item->penerbit); ?> </td>
                                <!-- <td> <?php echo e($item->sinopsis); ?> </td> -->
                                <td class="text-center">
                                    <a href="<?php echo e(url('/books/' . $item->id)); ?>" class="btn btn-secondary badge rounded-pill"
                                        style="width: 80px; height: 25px;">VIEW</a><br>
                                    <a href="<?php echo e(url('/books/' . $item->id . '/edit')); ?>"
                                        class="btn btn-info badge rounded-pill"
                                        style="width: 80px; height: 25px;">EDIT</a><br>
                                    <form action="<?php echo e(url('/books' . '/' . $item->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("DELETE"); ?>
                                        <button class="btn btn-danger badge rounded-pill"
                                            style="width: 80px; height: 25px;" type="submit" onclick="return confirm(&quot;Apakah yakin dihapus?&quot;)">DELETE</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rama/pencatatan_buku/resources/views/books/home.blade.php ENDPATH**/ ?>