<?php
session_start();
if(isset($_SESSION['nume'])){
echo $_SESSION['nume'];
}
else{
    echo 'No data in session';
}
?>