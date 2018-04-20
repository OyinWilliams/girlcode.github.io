<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "images");
  $msg = "";

  if (isset($_POST['image_upload'])) {
    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images");

    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      echo "<img src='images/".$row['image']."' >";
      echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }

// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from book where title LIKE '%$search%' OR author LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
        echo "Search found :<br/>";
        echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Title Books</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Author</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Price</td></tr>";       
            while ($results = $query->fetch()) {
        echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";      
                echo $results['title'];
        echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['author'];
        echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo "$".$results['price'];
        echo "</td></tr>";        
            }
        echo "</table>";    
        } else {
            echo 'Nothing found';
        }
?>
  ?>