<?php
session_start();
if(isset($_SESSION['Total_Price']) && $_SESSION['Total_Price'] > 0 )
{
    echo $_SESSION['Total_Price'];
}
else
{
    $_SESSION['Total_Price'] =  0;
    echo $_SESSION['Total_Price'];
}
?>