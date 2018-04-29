# Exercise20
Exercise20 Classes




- A class on each table have been created, stored in classes folder
- Each class has private variable, public getter and setter of all the fields of the corresponding table

## Class will be used for data to be insert into SQL, such as add books or new user registration


### Constructor
 
    * All variables declared are in as parameter of the constructor
      EXCEPT:
        If $id is a primary key on the table
        Any variable from Date (timestamps and relation to it)
        $amount on borrowed_transaction class and service_transaction class (as it will be calculated)
        
    * Special attentions to those which can be null
        $email from borrower table
        they set default value as '' on constructor;



### timestamp

- service_transactions

        transaction_date: it will get timestamped the date when the object is created 
        
- borrowed_transactions

        transaction_date: it will get timestamped the date when the object is created 

- borrowed_items

        date_out: it will get timestamped the date when the object is created 

        date_due: date of date_out + 7 days (you can change it on the class file)

        date_in: this will be set by setter

 ### $amount
 
    This will be calculated 
    
    
 ### Data as Booleans

    If you see the comment below on the script
        // bool using int
    This means that we expect 1 for TRUE, 0 for FALSE as data
  



