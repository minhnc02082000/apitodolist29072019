<?php
    
    /* 
    1 : Khai bao bien
        2 : Toan tu
        3 : Cau dieu kien
        4 : Vong lap
        5 : Object method
        6 : Array method
        7 : OOP
        8 : Xu ly file 
        Toan tu :
        ++ -- + - * / %
        1 ++ --
        2 * / %
        3 + -
        $a = 5;
        $b = 6;
        $ketqua = ++$a - ++$b * $a % $b;
        6 - 7 * 6 % 7
        6 - 42 % 7
        6 - 0 => 6
        6 - 7 * 5 % 6
        6 - 35 % 6
        6 - 5 => 1
    echo $ketqua;
    */
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "quanlycongviec2907";
    $con = mysqli_connect($hostname , $username,$password,$databasename);
    mysqli_query($con , "SET NAMES 'utf8' ");
    // if(mysqli_connect_errno()){
    //     echo "Loi" . mysqli_connect_error();
    // }else{
    //     echo "Thanh cong";
    // }
?>