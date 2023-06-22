<?php
$username = filter_input(INPUT_POST, 'username');
$cig = filter_input(INPUT_POST, 'cig');
$cib = filter_input(INPUT_POST, 'cib');
$cip = filter_input(INPUT_POST, 'cip');
$ciw = filter_input(INPUT_POST, 'ciw');
        $host = "localhost";
        $dbusername = "metrolife_DB";
        $dbpassword = "Coffee$1Time";
        $dbname = "metrolife_DB";
    //creating a connection :
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        
            $sql = "UPDATE `login` SET `farm`=`farm`+$cib,`gold`=`gold`+$cig,`oil`=`oil`+$cip,
            `pharmaceuticals`=`pharmaceuticals`+$ciw WHERE `username`= '$username'";

            if($conn->query($sql))
            {
                                
                echo '<script>alert("New record inserted")</script>';
                echo ' <script> window.location.assign("admin.php")</script>';
            } else {
                
                echo "Error : ".$sql."<br>".$conn->error;}
        
        $conn->close();

?>
