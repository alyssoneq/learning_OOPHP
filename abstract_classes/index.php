<?php

//including the needed files 

include_once "abstract/PaymentType.abstract.php";
include_once "classes/BuyProduct.class.php";

//creating objects based on the classes defined
$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
?>