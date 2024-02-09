<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: rgb(16, 32, 51);
        margin: 0;
    }
    .middle{
        display: flex;
        flex-direction: row;
    }
    .stats{
        width: 1100px;
        height: auto;
        background-color: rgb(16, 32, 51);
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 50px;
        color: white;
        font-size: 30px;
    }
    .totalusers{
        width: 200px;
        height: 200px;
        background-color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .totalproducts{

        width: 200px;
        height: 200px;
        background-color: black;  
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center; 
    }
</style>
<body>
    <?php 
                   include 'config.php';
                   $query1 = "SELECT * FROM user";
                   $query2 = "SELECT * FROM product";
                   $select = mysqli_query($conn, $query1);
                   $result = mysqli_query($conn, $query2);
                   $total_products = mysqli_num_rows($result);
                   $total_user = mysqli_num_rows($select);
    ?>
    <div class="admin_home">
    <?php include 'header.php'; ?>
        <div class="middle">
            <?php include 'sidebar.php'; ?>
            <div class="stats">
                    <div class="totalusers">
                        <div>Total Users</div>
                        <div><?php echo $total_user; ?></div>
                    </div>
                    <div class="totalproducts">
                        <div>Total Products</div>
                        <div><?php echo $total_products; ?></div>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>