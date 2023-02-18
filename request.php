<?php
include_once 'database.php';
createUserCSV();
createDiscountCSV();
$requestAction = $_POST['action'];

if($requestAction == 'card'){
    insertCard(getCardRequestData());
    outputMessage();
}elseif($requestAction == 'discount'){
    insertDiscount(getDiscountRequestData());
    outputMessage();
}

function getCardRequestData(){
    $studentId = $_POST['studentid'];
    $department = $_POST['department'];
    $faculty = $_POST['faculty'];
    $expiryDate = $_POST['expirydate'];
    $studentcard=  $studentId.",".$department.",".$faculty.",".$expiryDate."\n";
    return $studentcard;
}
function getDiscountRequestData(){
    $studentId = $_POST['studentid'];
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $discount =  ($amount * $rate);
    $studentDiscount=  $studentId."\t".$amount."\t".$rate."\t".$discount."\n";
    return $studentDiscount;
}
function outputMessage(){
    echo "<script> alert('Successfully added')</script>";
    echo "<script> window.location.href = 'http://localhost/studentapp/cards.html'</script>";
}
?>