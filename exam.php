<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> Test </title>
    </head>
    <body>
        <h1> Test PHP </h1>
        <!-- -->
        <!-- <h1> Test FROM GET </h1>
        <form action="exam.php" method="GET">
            Firstname <input type="text" name="Firstname" autofocus placeholder="Enter Your Name"><br>
            Lastname <input type="text" name="Lastname" placeholder="Enter Your Lastname"><br>
            Password <input type="password" name="Password" placeholder="Enter Your Password"><br>
            Comment <textarea name="Comment" placeholder="Write Your Comment"></textarea><br>
            <input type="submit"value="SEND">
        </form> -->
        <!--  -->
        <h1> Test FORM POST </h1>
        <form action="exam.php" method="POST">
            Firstname <input type="text" name="Firstname" autofocus placeholder="Enter Your Name"><br>
            Lastname <input type="text" name="Lastname" placeholder="Enter Your Lastname"><br>
            Password <input type="password" name="Password" placeholder="Enter Your Password"><br>
            Comment <textarea name="Comment" placeholder="Write Your Comment"></textarea><br>
            <input type="submit"value="SEND">
        <!--  -->
<?php
    /*$name = "Torsak";
    echo "$name"; echo"<br>"; //print value in var
    echo '$name'; echo"<br>"; //print message in ' '*/
    //-----------------------------------------------------------
    /*date_default_timezone_set("Asia/Bangkok"); //กำหนด timezone 
    $date = date("D.d / M.m / Y.y");
    echo $date . "<br>";*/
    /*echo $x + $y ; echo '<br>';
    //-----------------------------------------------------------
    echo $x - $y ; echo '<br>';
    echo $x * $y ; echo '<br>';
    echo $x / $y ; echo '<br>'; */
    //-----------------------------------------------------------
    /*for($i=0 ; $i<10 ; $i++){ //for loop
        echo "$i";
        echo "<br>";
    }*/
    //-----------------------------------------------------------
    /*for($i=0 ; $i<=10 ;$i++){
        echo "$i" . " ";
        if($i%2 == 0){
            echo "เลขคู่" . "<br>" ;
        }
        else if($i%2 == 1){
            echo "เลขคี่" . "<br>" ;
        }
    }*/
    //-----------------------------------------------------------
    /*for($i=0 ; $i < 3 ; $i++){ //for for
        echo "$i" . " ";
        for($j=0 ; $j < 3 ; $j++){
            echo "$j" . " ";
        }
        echo "<br>";
    }*/
    //-----------------------------------------------------------
    /*$sum = 0; //find sum and avg
    for($i=0 ; $i <=200 ; $i++){
        $sum += $i;
    }
    $avg = $sum/200;
    echo "sum of 1-200 = " . " " . "$sum" . "<br>";
    echo "avg = " . " " . "$avg" . "<br>";*/
    //-----------------------------------------------------------
    /*$i = array(2,4,6,8,10,12,14,16,18,20); //array
    for($a=0 ; $a <= count($i) ; $a++){
        echo $i["$a"] . " ";
    } */
    //-----------------------------------------------------------
    /*$firstname =  $_GET["Firstname"]; //test get
    $lastname = $_GET["Lastname"];
    $password = $_GET["Password"];
    $comment = $_GET["Comment"];
    if(isset($firstname)){
        echo "<br>";
        echo "$firstname" . "<br>" . "<br>";
        echo "$lastname" . "<br>" . "<br>";
        echo "$password" . "<br>" . "<br>";
        echo "$comment" . "<br>" . "<br>";
    }
    else{
        echo "<br>";
        echo "ไม่มีข้อมูล";
    }*/
    //-----------------------------------------------------------
    $firstname =  $_POST["Firstname"]; //test post
    $lastname = $_POST["Lastname"];
    $password = $_POST["Password"];
    $comment = $_POST["Comment"];
    if(isset($firstname)){
        echo "<br>";
        echo "$firstname" . "<br>" . "<br>";
        echo "$lastname" . "<br>" . "<br>";
        echo "$password" . "<br>" . "<br>";
        echo "$comment" . "<br>" . "<br>";
    }
    else{
        echo "<br>";
        echo "ไม่มีข้อมูล";
    }
?>
</body>
</html>