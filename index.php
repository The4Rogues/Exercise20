<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<?php
include('classes/accessibility_options.php');
include('classes/author.php');
include('classes/books.php');
include('classes/books_authors.php');
include('classes/borrowed_items.php');
include('classes/borrowed_transactions.php');
include('classes/borrower.php');
include('classes/costs.php');
include('classes/genre.php');
include('classes/librarian.php');
include('classes/reader_level.php');
include('classes/service_charges.php');
include('classes/service_transactions.php');
?>

<?php
// Test//

// athor class
$TheAutor = new author('J. D. Salinger');
echo "The Author is ".$TheAutor->get_name().PHP_EOL;

//book_authors class
$Thebooks_authors = new books_authors(1, 2);
echo "The book id ".$Thebooks_authors->get_books_id().
     " has authors id of ".$Thebooks_authors->get_author_id().PHP_EOL;

// borrowed_items class
$Thebook = new borrowed_items(1,3);
echo "Book's out date is ";
echo $Thebook->get_date_out().PHP_EOL;
echo "Book's return due date is ";
echo $Thebook->get_date_due().PHP_EOL;

// borrowed_transactions class
$Thetransaction = new borrowed_transactions(3,3,3);

echo "Borrowed transaction date is ";
echo $Thetransaction->get_transaction_date().PHP_EOL;

// service transaction class
$Theservice = new service_transactions(2,4);

echo "Service transaction date is ";
echo $Theservice->get_transaction_date().PHP_EOL;


?>