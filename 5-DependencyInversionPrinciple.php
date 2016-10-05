<?php

// Bad Example

// Low Level Class 
class PDFBook {
 
    public function read() {
        return "reading a pdf book.";
    }
}

// High Level Class 
class EBookReader {
 
    private $book;
 
    public function __construct(PDFBook $book) {
        $this->book = $book;
    }
 
    public function read() {
        return $this->book->read();
    }
 
}


$book = new PDFBook();
$read = new EBookReader($b);
 
$read->read();




// Good Example

interface EBook{
    function read();
}

// Low Level Class 
class PDFBook implements EBook{
 
    public function read() {
        return "reading a pdf book.";
    }
}

// High Level Class 
class EBookReader {
 
    private $book;
 
    public function __construct(EBook $book) {
        $this->book = $book;
    }
 
    public function read() {
        return $this->book->read();
    }
 
}


$book = new PDFBook();
$read = new EBookReader($b);
 
$read->read();


?>
