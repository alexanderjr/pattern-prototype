<?php

require("vendor/autoload.php");
use App\BookPrototype;

$customers = ["Alexander", "Junior", "Costa", "Afonso"];

$bookPrototype = new BookPrototype("Livro de PHP","Um livro bacana", 100);

$books = [];

foreach ($customers as $customer){
    $customBook = clone $bookPrototype;
    $customBook->setNameOwner($customer);

    $books[] = $customBook;
}

print_r($books);