<!DOCTYPE html>
<html>
<head>
    <title>Azure Cloud Developer Academy</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>"/>
</head>
<body>
 
    <div class="container">
		<div class="card">
			<div class="card-body">

                <h2 class="text-center">Submission 1 Azure Cloud Developer Academy - Mei Rusfandi</h2>
                <hr>
                <h3>Data Pengguna</h3>
                    
                <form action="<?php echo e(url('/home/cari')); ?>" method="GET" class="form-inline" >
                    <a href="<?php echo e(url('/home/tambah')); ?>" class="btn btn-success">+ Tambah User Baru</a>
                    <input class="form-control ml-3" type="text" name="cari" placeholder="Cari User .." value="<?php echo e(old('cari')); ?>">
                    <input class="btn btn-primary ml-3" type="submit" value="CARI">
                </form>
                    
                <br/>
            
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Nama Sekolah</th>
                        <th width="135px">Opsi</th>
                    </tr>
                    <?php $i=0; ?>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$i); ?></td>
                        <td><?php echo e($p->username); ?></td>
                        <td><?php echo e($p->name); ?></td>
                        <td><?php echo e($p->email); ?></td>
                        <td><?php echo e($p->no_hp); ?></td>
                        <td><?php echo e($p->sekolah); ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="<?php echo e(url('/home/edit')); ?>/<?php echo e($p->id); ?>">Edit</a>
                            |
                            <a class="btn btn-danger btn-sm" href="<?php echo e(url('/home/hapus')); ?>/<?php echo e($p->id); ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                
                <br/>
                Halaman : <?php echo e($user->currentPage()); ?> <br/>
                Jumlah Data : <?php echo e($user->total()); ?> <br/>
                Data Per Halaman : <?php echo e($user->perPage()); ?> <br/>
            
                <?php echo e($user->links()); ?>

            
            </div>
        </div>
    </div>
 
</body>
</html>
<?php /* C:\xampp\htdocs\azureHTML\resources\views/index.blade.php */ ?>