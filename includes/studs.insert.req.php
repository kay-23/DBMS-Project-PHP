<?php
    require "db.config.php";
    $roll = $_SESSION['login_user_stud'];
    $Vacate_Date = $_POST['Vacate_Date'];
    $Return_Date = $_POST['Return_Date'];

    $diff = abs(strtotime($Return_Date) - strtotime($Vacate_Date));
    $No_of_Days = round($diff / (60 * 60 * 24));

    date_default_timezone_set("Asia/Calcutta");
    $Initiaiton_Date = date('m-d-Y', time());

    $Priority = $_POST['Priority'];

    $Description = $_POST['Description'];

    $sql = "INSERT INTO permissions(Student_Roll_No, Initiaiton_Date, Priority, Vacate_Date,No_of_Days, Description,  Return_Date) VALUES ('$roll',CURDATE(), '$Priority','$Vacate_Date','$No_of_Days','$Description','$Return_Date')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "Error ". mysqli_error($conn);
    } else{
        echo "Success";
        header("Location: ../stud.req.page.php");
    }

?>
