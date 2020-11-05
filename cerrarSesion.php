<?php session_start(); ?>
<?php
    $url = "http://localhost/JobsChallenge/"; 

     require_once 'includes/header.php'; 
?>

<?php
    Session_destroy();
    header("Location: index.php");

?>