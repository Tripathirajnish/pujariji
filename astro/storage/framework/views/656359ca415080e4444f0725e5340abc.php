<!DOCTYPE html>
<html lang="en">

<head>
    <title>Astrologer Earning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    
    <div style=" display: grid;
    grid-template-columns: auto auto ;">
        <div style="display: inline-block">
            <div style="height:100px;width:100px;margin-bottom:10px">
                <img alt="AstroGuru image" class="logo__image w-6" src=""
                    style="height:100%;width:100%;object-fit:cover">
            </div>
        </div>
        <div style="display: inline-block;float:right">
            <h4><?php echo e($title); ?></h4>
            <p><?php echo e($date); ?></p>
        </div>
    </div>
    <div class="row">
        <h6 class="ml-2">Astrologer Name: <?php echo e($astrologerName); ?></h6>
    </div>
    <table class="table table-bordered" aria-label="astrologer-list">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Order Type</th>
            <th>Order Amount</th>
            <th>Total Min</th>
            <th>Charge</th>
            <th>Order Date</th>
        </tr>
        <?php
            $no = 0;
        ?>
        <?php $__currentLoopData = $astrologerEarning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $earning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$no); ?></td>
                <td><?php echo e($earning->userName); ?></td>
                <td><?php echo e($earning->orderType); ?></td>
                <td><?php echo e($earning->totalPayable); ?></td>
                <td><?php echo e($earning->totalMin); ?></td>
                <td><?php echo e($earning->charge); ?></td>
                <td> <?php echo e(date('d-m-Y', strtotime($earning->created_at)) ? date('d-m-Y h:i', strtotime($earning->created_at)) : '--'); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

</body>

</html>
<?php /**PATH /home/u844460753/domains/pujariji.com/public_html/astro/resources/views/pages/astrologer-earning-report.blade.php ENDPATH**/ ?>