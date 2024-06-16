<?php
if($_GET['mod']=='home') {
    include "template/home.php";
    
}elseif($_GET["mod"]== "smartphone") {
    include "template/smartphone.php";

}elseif($_GET["mod"]== "contact") {
    include "template/contact.php";

}elseif($_GET["mod"]== "accessories") {
    include "template/accessories.php";

}elseif($_GET["mod"]== "technology") {
    include "template/technology.php";

}elseif($_GET["mod"]== "sports") {
    include "template/sports.php";

}elseif($_GET["mod"]== "login") {
    include "login.php";
}
?>
