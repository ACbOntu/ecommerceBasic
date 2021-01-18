

<a class="btn btn-primary mr-auto" href="addProduct.php">Add New product</a>
<table align="center" class="table table-bordered table-hover ml-2 mt-2">
  <thead>
    <tr>
      
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  include 'config.php';
$query = "SELECT * FROM products;";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0) {
 while( $row = mysqli_fetch_array($result)){
 echo '<tr>
 <td scope="row">'.$row['product_name'].'</td><td>'.$row['product_description'].'</td><td>'.$row['price'].'</td>
 <td>'.$row['image'].'</td>';
 echo '<form action="edit.php" method="post">';
 echo '<input type="hidden" name="id" value="'.$row['id'].'">';
echo '<td><input type="submit" class="btn btn-success" value="Edit"></form>';
echo '<form action="deleteProduct.php" method="post">';
 echo '<input type="hidden" name="id" value="'.$row['id'].'">';
echo '&nbsp;<input type="submit" class="btn btn-danger" value="Delete"></td></tr></form>';

}
}

else{
  echo '<tr><td colspan="5" align="center">No data found!</td></tr>';
}
   ?>
  </tbody>
</table>