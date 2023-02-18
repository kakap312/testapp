<?php

function createUserCSV(){
    if(! file_exists("user.csv")){
        $tableFormat = "StudentId,Department,Faculty,ExpiryDate\n";
        $fileOpen = fopen('user.csv','a+');
        fwrite($fileOpen,$tableFormat);
        fclose($fileOpen);
        return true;
    }else{
        return false;
    }

}
function createDiscountCSV(){
    if(! file_exists("user.tsv")){
        $tableFormat = "StudentId\tAmount\tRate\tDiscount\n";
        $fileOpen = fopen('user.tsv','a+');
        fwrite($fileOpen,$tableFormat);
        fclose($fileOpen);
        return true;
    }else{
        return false;
    }

}
function insertCard($data){
    if(file_exists("user.csv")){
        $fileOpen = fopen('user.csv','a+');
        fwrite($fileOpen,$data);
        fclose($fileOpen);
        return true;
    }else{
        return false;
    }
}
function insertDiscount($data){
    if(file_exists("user.tsv")){
        $fileOpen = fopen('user.tsv','a+');
        fwrite($fileOpen,$data);
        fclose($fileOpen);
        return true;
    }else{
        return false;
    }
}