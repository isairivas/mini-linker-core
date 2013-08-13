
<?php 

    include 'mooncake/doctype.php';
    include 'mooncake/header.php';
    include 'mooncake/navigation.php';
    include 'mooncake/menu_sidebar.php';
 
?>

  <h1>mooncake</h1>
  <?php echo Application::$view->getContent(); ?>
  
<?php include 'mooncake/footer.php'; ?>


