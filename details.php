<!DOCTYPE html>
<html>
<body>
<?php
{
    echo $_GET["FIRST_NAME"]."<br>";
    echo $_GET["LAST_NAME"]."<br>";
    echo $_GET["DOB"]."<br>";
    echo $_GET["STUDENT_NO"]."<br>";
    echo $_GET["EMAIL"]."<br>";
    echo $_GET["PHONE_NO"]."<br>";
    echo $_GET["YEAR"]."<br>";
    if($_GET["CSE"]=="on"){
        echo "CSE"."<br>";
    }elseif($_GET["ECE"]=="on"){
        echo "ECE"."<br>";
    }elseif($_GET["EEE"]=="on"){
        echo "EEE"."<br>";
    }elseif($_GET["MECH"]=="on"){
        echo "MECH"."<br>";
    }elseif($_GET["CIVIL"]=="on"){
        echo "CIVIL"."<br>";
    }
    
    

    if($_GET["FRONTEND"]=="on"){
        echo "FRONTEND"."<br>";
    }elseif($_GET["BACKEND"]== "on"){
        echo "BACKEND"."<br>";
    }elseif($_GET["DATA_SCIENCE"]== "on"){
        echo "DATA SCIENCE"."<br>";
    }elseif($_GET["BLOCK_CHAIN"]=="on"){
        echo "BLOCK CHAIN"."<br>";
    }elseif($_GET["APP_DEVELOPMENT"]=="on"){
        echo "APP DEVELOPMENT"."<br>";
    }elseif($_GET["CLOUD_COMPUTING"]=="on"){
        echo "CLOUD COMPUTING";
    }
}
?>
</body>
</html>

