<?php
include("../src/Model/Tools.php");
include("../src/Model/Address.php");
include("../src/Model/Cart.php");
include("../src/Model/Customer.php");
include("../src/Model/Item.php");

$address_1 = new Address(
    "line fake",
    "line fake",
    "Medellin",
    "Antioquia",
    "051050",
    "home"
);
$customer = new Customer("Andres Felipe", "Gutierrrez Jimenez", $address_1);

$address_2 = new Address(
    "line fake 2",
    "line fake 2",
    "Medellin",
    "Antioquia",
    "473910",
    "office"
);

$address_3 = new Address(
    "line fake 3",
    "line fake 3",
    "Bello",
    "Antioquia",
    "79472",
    "mother"
);

// Setting Addresses
$customer->addAddress($address_2);
$customer->addAddress($address_3);

// Items List
$item_1 = new Item(1, "t-shirt", 2, 50);
$item_2 = new Item(2, "shoes", 4, 1200);
$item_3 = new Item(3, "pants", 2, 120);

// Setting Items to cart
$cart = new Cart();
$cart->setCustomerName($customer);
$cart->setShippingAddress($customer->getCustomerAddress()["home"]);
$cart->addItem($item_1);
$cart->addItem($item_2);
$cart->addItem($item_3);
