  <?php $base_url = 'http://'.$_SERVER['SERVER_NAME'];?>
  <?php include('partial/header.php');?>
  <?php include('../database/connect.php');?>
  <?php include('partial/top-nav.php');?>

  <?php
  $sql ="SELECT id,title,description FROM posts ORDER BY id DESC";
  $result = mysqli_query($connection,$sql);
  $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);

  ?>
  <?php foreach($posts as $post){?>
    <h2><a href="<?php echo $base_url;?>/cms/public/single.php?id=<?php echo $post['id'];?>"> <?php echo $post['title'];?> </a></h2>
    <p><?php echo $post['description'];?></p>
    <div class="line"></div>
<?php }?>


<?php include('partial/footer.php');?>
