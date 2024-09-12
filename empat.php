<?php

require_once 'Author.php';
require_once 'Publisher.php';
require_once 'Book.php';


$author = new Author("J.K. Rowling", "Penulis dari seri Harry Potter");


$publisher = new Publisher("Bloomsbury", "50 Bedford Square, London");
$publisher->setPhone("123456789");

$book = new Book(9780747532743, "Harry Potter and the Philosopher's Stone", "Novel fantasi", "Fantasy", "English", 223, $author->name, $publisher->name);

echo "Informasi Buku:\n";
print_r($book->showAll());

echo "Detail Buku dengan ISBN 9780747532743:\n";
print_r($book->detail(9780747532743));


echo "Informasi Author:\n";
print_r($author->show('name'));

echo "Informasi Publisher dan Nomor Telepon:\n";
echo "Nama: " . $publisher->name . "\n";
echo "Alamat: " . $publisher->address . "\n";
echo "Telepon: " . $publisher->getPhone() . "\n";

?>
