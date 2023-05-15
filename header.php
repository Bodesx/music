<?php
$connect = mysqli_connect("localhost", "root", "", "music");
 if ($connect){
    echo "connected";
}else {
    echo "connection failed";
}

?>