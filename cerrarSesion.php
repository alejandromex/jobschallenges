
<?php
     require_once 'includes/header.php'; 
?>

<?php
    Session_destroy();
    header("Location: index.php");

?>