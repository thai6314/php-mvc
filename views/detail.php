<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .img{
            height: 20%;
            width: 30%;
            float: left;
        }
        .content{
            float: left;
        }
    </style>
</head>
<body>
    <div class="img">
        <img src="<?php echo $data['image'];?>"/>
    </div>
    <div class="content">
        <p><?php echo $data['name'];?></p>
        <p>Quantity: <?php echo $data['quantity'];?></p>
        <p>Price: <?php echo $data['price'];?></p>
        <p>Description: <?php echo $data['price'];?> </p>
    </div>
</body>
</html>