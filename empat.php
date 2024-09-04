<?php

class Author {
    public $name;
    public $description;

}

class Publisher {
    public $name;
    public $address;
    public$phone;

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }

}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Language' => $this->language,
            'Number of Page' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher,
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
        return null;
    }
}

$author = new Author();
$author->name = "Elex Media Komputindo";
$author->description = "Penulis komik";

$publisher = new Publisher();
$publisher->name = "Gramedia";
$publisher->address = "Jakarta";
$publisher->setPhone("+62 21 548 3008");

$book = new Book();
$book->ISBN = 9786230048975;
$book->title = "Blue Lock 10";
$book->description = "Blue Lock tidak menceritakan kisah pemain di suatu turnamen sepakbola seperti pada umumnya. Blue Lock memiliki sedikit kesamaan dengan Squid Game. Yaitu menyeleksi 300 peserta, melakukan serangkaian permainan dengan sistem gugur, sehingga akan tersisa 1 orang sebagai pemenang";
$book->category = "Komik";
$book->language = "Indonesia";
$book->numberOfPage = 200;
$book->author = $author->name;
$book->publisher = $publisher->name;

print_r($book->showAll());