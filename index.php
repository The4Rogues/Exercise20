<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
 */

require_once("Classes/Autoloader.php");

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

// borrower class
// testing extends
$ichi = new borrower ('ichi', 'password', 'ichi', 'ichimura', '1111-11-11', 'regent street london w1', '222-2222', 'ji@ji.com');
echo "her name is ".$ichi->get_username().PHP_EOL;

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