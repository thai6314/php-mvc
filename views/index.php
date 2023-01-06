<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        td{
            width: 80px;
        }
    </style>
</head>
<body>
<a href='index.php?controller=product&&action=add'>Add</a>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data as $product) { ?>
            <tr>
                <td>
                    <a href="index.php?controller=product&&action=getDetail&&id=<?php echo $product['product_id'];?>">
                        <?php echo $product['product_id']; ?>
                    </a>
                </td>
                <td>
                    <a href="index.php?controller=product&&action=getDetail&&id=<?php echo $product['product_id'];?>">
                        <img src='<?php echo $product['image'];?>'/>
                    </a>
                </td>

                <td>
                    <a href="index.php?controller=product&&action=getDetail&&id=<?php echo $product['product_id'];?>">
                        <?php echo $product['name']; ?>
                    </a>
                </td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td>
                    <a href='index.php?controller=product&&action=update&&id=<?php echo $product['product_id'];?>'>Update</a>

                    <a href='index.php?controller=product&&action=delete&&id=<?php echo $product['product_id'];?>')'> Delete</a>
                </td>
            </tr>
        </a>
    <?php } ?>
</table>
</body>
<script type='text/javascript'>
    function showAlert() {
        if (confirm('Are you sure you want to delete?')) {
            alert('Deleted!')
        }
    }
   // document.getElementById('delete').onclick = showAlert;
</script>
</html>
