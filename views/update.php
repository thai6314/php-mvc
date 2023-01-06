<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<form method='post' action='' >
    ID <br><input type='text' name='product_id' value='<?php echo $data['product_id'];?>'/><br><br>
    Image <br><input type='text' name='image' value='<?php echo $data['image'];?>'/><br><br>
    Name <br><input type='text' name='name' value='<?php echo $data['name'];?>'/><br><br>
    Price <br><input type='text' name='price' value='<?php echo $data['price'];?>'/><br><br>
    Quantity <br><input type='number' name='' value='<?php echo $data['quantity'];?>'/><br><br>
    Description <br><input type='text' name='description' value='<?php echo $data['description'];?>'/><br><br>
    <button type='submit'>Save</button>
</form>
</body>
</html>