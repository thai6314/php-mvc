<?php
namespace views;
class ProductView{
    public function show($products){
        echo "<table>";
        echo
        "<tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Action</th>
        </tr>";
        foreach ($products as $product){
            echo
                "<tr>
                    <td>{$product['product_id']}</td>
                    <td><img src='{$product['image']}'/></td>
                    <td>{$product['name']}</td>
                    <td>{$product['price']}</td>
                    <td>{$product['quantity']}</td>
                    <td>{$product['description']}
                    <td>
                        <a href='index.php?controller=product&&action=update&&product_id={$product['product_id']}'>Update</a>
                        <a href='index.php?controller=product&&action=delete'>Delete</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    }

    public function update($product){
        echo "<form method='post' action='' >
              ID <br><input type='text' name='product_id' value='{$product['product_id']}'/><br><br>
              Image <br><input type='text' name='image' value='{$product['image']}'/><br><br>
              Name <br><input type='text' name='name' value='{$product['name']}'/><br><br>
              Price <br><input type='text' name='price' value='{$product['price']}'/><br><br>
              Quantity <br><input type='number' name='quantity' value='{$product['quantity']}'/><br><br>
              Description <br><input type='text' name='description' value='{$product['description']}'/><br><br>
              <button type='submit'>Save</button>
            ";
        echo "</form>";
    }
}