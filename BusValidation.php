<?php
include ("connection.php");
session_start();
if (  isset($_POST['bname'])&& isset($_POST['btype'])&& isset($_POST['blevel'])) {
    // Data validation
    if ( strlen($_POST['bname']) < 1 || strlen($_POST['btype']) < 1 || strlen($_POST['level']) < 1) {
        header("Location: addbus.php");
    }
    $sql = "INSERT INTO buses ( Bus_name, Bus_type,Bus_level)
              VALUES ( :bname, :btype,:blevel)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        ':bname' => $_POST['bname'],
        ':btype' => $_POST['btype'],
        ':blevel' => $_POST['blevel']));
    header( 'Location: index.php?add' ) ;
    
}


?>
