  <?php $base_url = 'http://'.$_SERVER['SERVER_NAME'];?>
  <?php include('partial/header.php');?>
  <?php include('../database/connect.php');?>
  <?php include('partial/top-nav.php');?>

  <?php
  extract($_GET);

  $sql ="SELECT id,title,description,image FROM posts WHERE id=$id";
  $result = mysqli_query($connection,$sql);
  $post = mysqli_fetch_assoc($result);
  extract($post);
  ?>

  <h2><?php echo $title;?></h2>
  <img src="uploads/<?php echo $image; ?>" />
  <p><?php echo $description;?></p>

  <?php include('partial/footer.php');?>
