<!DOCTYPE html>
<html lang="en">

<head>

    <title>Medicine Detail</title>
    <style>
    body {
        background-color: rgb(212, 231, 238);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .container {
        display: grid;

        grid-template-areas:
            "navbar navbar navbar navbar navbar"
            "menue create create create create"
            "menue create create create create"
            "menue main main main main"
            "menue main main main main";
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

    #create {
        grid-area: create;
    }

    #footer {
        grid-area: footer;
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

        background-color: #222222;

    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .btn {
        background-color: lightseagreen;
        color: white;
        text-decoration: none;
        height: 40px;
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

    li a.active {
        background-color: #04AA6D;
        color: white;
    }

    li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
    </style>
</head>

<body>


    <div class="container">

        <div class="item" id="main">
            <h1>ADD NEW Company</h1>
            <button class="btn" style="border-radius: 10px;" type="submit"><a class="btn btn-primary"
                    href="<?php echo e(URL::to('company/add')); ?>">
                    ADD
                </a></button><br><br>
            <h2>Avalible Companies</h2>
            <table>
                <tr>
                    <!-- <th> Student ID </th> -->
                    <th> NAME </th>
                    <th> REG NO </th>
                    <th> HQ </th>
                    <th>EDIT</th>


                </tr>

                <!-- Blade For Loop -->
                <?php $__currentLoopData = $company ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($company->name); ?> </td>
                    <td> <?php echo e($company->reg); ?> </td>
                    <td> <?php echo e($company->hq); ?> </td>

                    <td>
                        <button class="btn" style="border-radius: 10px;" type="submit"><a class="btn btn-primary"
                                href="<?php echo e(URL::to('company/update', $company->id)); ?>" title="Edit -> <?php echo e($company->name); ?>">
                                Update
                            </a></button>
                    </td>

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\sp19-bcs-044(pharmacy)\resources\views/company/read.blade.php ENDPATH**/ ?>