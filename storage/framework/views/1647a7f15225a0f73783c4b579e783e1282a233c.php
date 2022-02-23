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
        display: flexbox; 
        height: 300px;
    }
    h1{
        text-align: center;
    }
    h2{
        text-align: center;
    }

    .item {
        border: 5px solid black;
        margin: 5px;
        padding: 3px;
        background-color: lightgray;
        box-shadow: 4px 4px;
        border-radius: 8px;
    }
/* 
    #navbar {
        grid-area: navbar;
    } */

    #menue {
        grid-area: menue;
        background-color: lightyellow;
        overflow: hidden;
        height: 100%;

    }

    table {
        font-family: sans-serif;
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

    tr:nth-child(even) {
        background-color: #dddddd;
    }
/* 
    .btn {
        background-color: lightslategray;
        color: white;
        border: 2px solid black;
        /* text-decoration: none; */
        /* height: 40px;
        width: 80px; */
        /*position: absolute;
        left: 50%;
        top: 15%;

        
         */
    /* } 
    */


    .btn {
        background-color: lightseagreen;
        color: white;
        text-decoration: none;
        height: 40px;
        width: 80px;
        position: relative;
        left: 50%;
        top: 15%;


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

     /* li a.active {
        background-color: #04AA6D;
        color: white;
    }

    li a:hover:not(.active) {
        background-color: #555;
        color: white;}
     */

        button{
        border-radius: 10px;
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
            <h1>ADD NEW CUSTOMER</h1>
            <button class="btn" type="submit">
            <a class="btn btn-primary"
                    href="<?php echo e(URL::to('customer/add')); ?>">
                    ADD
                </a></button><br><br>
            <h2>Avalible customers</h2>
            <table>
                <tr>
                    <!-- <th> Student ID </th> -->
                    <th> NAME </th>
                    <th> CNIC </th>
                    <th> PHONE </th>
                    <th> ADRESS </th>
                    <th>EDIT</th>

                </tr>

                <!-- Blade For Loop -->
                <?php $__currentLoopData = $customer ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($customer->name); ?> </td>
                    <td> <?php echo e($customer->cnic); ?> </td>
                    <td> <?php echo e($customer->phone); ?> </td>
                    <td> <?php echo e($customer->adress); ?> &nbsp;&nbsp;</td>
                    <td>
                        <button class="btn"  type="submit"><a class="btn btn-primary"
                                href="<?php echo e(URL::to('customer/update', $customer->id)); ?>"
                                title="Edit -> <?php echo e($customer->name); ?>">
                                Update
                            </a></button>
                    </td>

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\sp19-bcs-004\resources\views/customer/read.blade.php ENDPATH**/ ?>