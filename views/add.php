<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<form method='post' action=''>
    Image <br><input type='text' name='image' /><br><br>
    Name <br><input type='text' name='name' /><br><br>
    Price <br><input type='text' name='price'/><br><br>
    Quantity <br><input type='number' name='quantity'/><br><br>
    Description <br><input type='text' name='description'/><br><br>
    Category <a href="index.php?controller=category&&action=add">+</a> <br>
    <select name="category">
        <?php foreach ($data1 as $category){?>
            <option name="<?php echo $category['category_id'];?>"><?php echo $category['name'];?></option>
        <?php } ?>
    </select>
    <br><br>
    <button type='submit'>Create</button>
</form>
</body>
</html>