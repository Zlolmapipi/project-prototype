<?php
include("connection.php");
if( isset($_POST['submit'])) {

    if (strlen($_POST['name']) < 1 || strlen($_POST['password']) < 1 || strlen($_POST['fname']) < 1||trim($_POST['address']) < 1||strlen($_POST['pnumber']) < 1) {
        header("Location: Booking.php");
    }
    if ( strpos($_POST['email'],'@') === false ) {
       
        header("Location: Booking.php");
    }
     if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['fphone']))
    {
     header("Location: Booking.php");
    }


    ///end of validation
   
    $sql = "INSERT INTO customer( Name, Address,Phone_number,Email)
              VALUES ( :cname, :c_ad,:cphone,:cemail)";
    $req = $conn->prepare($sql);
    $req->execute(array(
        ':cname' => $_POST['fname'],
        ':c_ad' => $_POST['address'],
        ':cphone' => $_POST['fphone'],
        ':cemail' => $_POST['email']
    ));
    $Cus_id=$conn->lastInsertId();
    
    echo $Rid=$_POST['Rout_id'];
   
   $sql2 = "INSERT INTO booking(People,Customer_id,Rout_id)VALUES ( :pnumber,:Cus_id,:R_id)";
    $req2 = $conn->prepare($sql2);
    $req2->execute(array(':pnumber' => $_POST['pnumber'],'Cus_id'=>$Cus_id,':R_id'=>$Rid));
    $Booking_id=$conn->lastInsertId();
   

    $role='customer';
    $sql3 = "INSERT INTO user(username,password,role)VALUES ( :uname,:pass,:role)";
    $req3 = $conn->prepare($sql3);
    $req3->execute(array(':uname'=>$_POST['name'],':pass'=>$_POST['password'],':role'=>$role));
    $_id=$conn->lastInsertId();
  
    


}

?>