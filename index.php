<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
 */

//require_once("Classes/Autoloader.php");
// These child classes need to include separately

include_once ('classes/person.php');
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

use borrower\borrower as borrower;
use librarian\librarian as librarian;
use accessibility_options\accessibility_options as acc_opt;
use author\author as author;
use book\books as book;
use books_authors\books_authors as books_authors;
use borrowed_items\borrowed_items as b_items;
use borrowed_transactions\borrowed_transactions as b_trans;
use costs\costs as costs;
use genre\genre as genre;
use reader_level\reader_level as reader_level;
use service_charges\service_charges as s_charges;
use service_transactions\service_transactions as s_trans;
?>

<?php
// Test//
// 
//accessibility_options
$new_oprions = new acc_opt(1, 1, 0);
print_r($new_oprions);

// athor class
$TheAutor = new author('J. D. Salinger');
echo "The Author is ".$TheAutor->get_name().PHP_EOL;

//book_authors class
$Thebooks_authors = new books_authors(1, 2);
echo "The book id ".$Thebooks_authors->get_books_id().
     " has authors id of ".$Thebooks_authors->get_author_id().PHP_EOL;

// borrower class
// testing extends
$ichi = new borrower ('ichi', 'password', 'ichi', 'ichimura', '1111-11-11', 'regent street london w1', '222-2222', 'ji@ji.com');
echo "her name is ".$ichi->get_username().PHP_EOL;

// borrowed_items class
$Thebook = new b_items(1,3);
echo "Book's out date is ";
echo $Thebook->get_date_out().PHP_EOL;
echo "Book's return due date is ";
echo $Thebook->get_date_due().PHP_EOL;

// borrowed_transactions class
$Thetransaction = new b_trans(3,3,3);

echo "Borrowed transaction date is ";
echo $Thetransaction->get_transaction_date().PHP_EOL;

// service transaction class
$Theservice = new s_trans(2,4);

echo "Service transaction date is ";
echo $Theservice->get_transaction_date().PHP_EOL;

?>