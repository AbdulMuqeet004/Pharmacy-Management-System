<!DOCTYPE html>
<html lang="en">

<head>

    <title>Medicine Detail</title>
    <style>
    
    
    body {
        display: flexbox;
        background-color: rgb(212, 231, 238);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .container {
        height: 300px;

    }

    .item {
        border: 5px solid black;
        margin: 5px;
        padding: 3px;
        background-color: lightgray;
        box-shadow: 4px 4px;
        border-radius: 8px;
    }

    h1{
        text-align: center;
    }
    h2{
        text-align: center;
    }
    #navbar {
        grid-area: navbar;
    }

    #menue {
        grid-area: menue;
        background-color: lightgray;
        overflow: hidden;
        height: 100%;

    }

    #main {
        grid-area: main;
        border: 2px;
    }

   

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 90%;
    }

    td {
        text-align: left;
        padding: 8px;

        background-color: #d1cdcd;
    }

    th {
        border: 1px solid #a5a4a4;
        color: white;
        text-align: left;
        padding: 8px;

        background-color: maroon;

    }

    .btn-center{
        /* margin: 0; */
        position: absolute;
        top: 15%;
        left: 50%;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .btn {
        background-color: lightseagreen;
        color: white;
        text-decoration: none;
        height: 40px;
        position: relative;
        width: 80px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 25%;
        background-color: #f1f1f1;
        position: relative;
        height: 100%;
        overflow: hidden;
        width: 100%;
    }

    li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
    }

    button{
        border-radius: 10px;
        top: 15%;
        left: 50%;
        border: 2px solid lightskyblue;
    }
    .btn{
        text-align: center;
        transition-duration: 0.001s;
    }

    .btn:hover {
        background-color: #4CAF50;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
    </style>
</head>

<body>


    <div class="container">

        <div class="item" id="main">
            <h1>ADD NEW SALE</h1>
            <button class="btn" style="border-radius: 10px;" type="submit"><a class="btn btn-primary"
                    href="<?php echo e(URL::to('sale/add')); ?>">
                    ADD
                </a></button><br><br>
            <h2>Avalible SALES</h2>
            <table>
                <tr>
                    <!-- <th> Student ID </th> -->
                    <th> NAME </th>

                    <th> QUANTITY </th>
                    <th>CUSTOMER</th>
                    <th>EDIT</th>
                    <th>DELETE</th>



                </tr>

                <!-- Blade For Loop -->
                <?php $__currentLoopData = $sale ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td> <?php echo e($sale->medicine->name); ?> </td>



                    <td> <?php echo e($sale->quantity); ?> </td>
                    <td> <?php echo e($sale->customer->name); ?> </td>
                    <td>
                        <button class="btn" style="border-radius: 10px;" type="submit"><a class="btn btn-primary"
                                href="<?php echo e(URL::to('sale/update', $sale->id)); ?>" title="Edit -> <?php echo e($sale->name); ?>">
                                Update
                            </a></button>
                    </td>
                    <td>
                        <a href="<?php echo e(route('sale.read')); ?>" onclick="event.preventDefault();
                    document.getElementById(
                      'delete-form-<?php echo e($sale->id); ?>').submit();">
                            Delete
                        </a>
                    </td>

                    <form id="delete-form-<?php echo e($sale->id); ?>" + action="<?php echo e(route('sale.destroy', $sale->id)); ?>" method="post">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    </form>




                </tr>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </table><br><br>


        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\sp19-bcs-004\resources\views/sale/read.blade.php ENDPATH**/ ?>