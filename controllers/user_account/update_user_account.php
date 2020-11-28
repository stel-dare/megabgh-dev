<?php
session_start();
?>
<?php
// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
// Split action
$action = explode('-',$_POST['submit'])[0];
$table = explode('-',$_POST['submit'])[1];
// die(var_dump($action));

    // Addresss
    if($table==='address'){
        //Add
        if($action==='add'){
            //Insert into table
            $app['queryBuilder']->theInsertExecutioner("
            insert into customer_address (customer_id, address, address_city, address_region) values ('{$_SESSION['id']}', '{$_POST['address']}', '{$_POST['address_city']}', '{$_POST['address_region']}')
                ");
            //Redirect to user account 
            header("Location: user_account");
        }

        //Select
        else if($action==='select'){
            //Deselect address already selected
            $app['queryBuilder']->theInsertExecutioner("
           update customer_address set selected_address=0 where customer_id={$_POST['customer_id']}
               ");
            // update selected_address field in table
            $app['queryBuilder']->theInsertExecutioner("
           update customer_address set selected_address=1 where id={$_POST['id']}
               ");
               echo 'success';
        }

        // Delete
        else if($action==='delete'){
            //Delete Address
            $app['queryBuilder']->theInsertExecutioner("
           delete from customer_address where id = {$_POST['id']}
               ");

            //Redirect to user account 
            echo 'Delete Successful';
        }

         // No Match
        else{
            header("Location: 404");
        }
    }
    
    // Payment
    else if($table==='payment'){
        //Add
        if($action==='add'){
           //Insert into table
           $app['queryBuilder']->theInsertExecutioner("
           insert into customer_payment_methods (customer_id, payment_id, phone_number) values ('{$_SESSION['id']}', '{$_POST['payment_id']}', '{$_POST['phone_number']}');
               ");
           //Redirect to user account 
           header("Location: user_account"); 
        }

        //Select
        else if($action==='select'){
            //Deselect payment method already selected
            $app['queryBuilder']->theInsertExecutioner("
           update customer_payment_methods set selected_payment=0 where customer_id={$_POST['customer_id']}
               ");
            // update selected_payment field in table
            $app['queryBuilder']->theInsertExecutioner("
           update customer_payment_methods set selected_payment=1 where id={$_POST['id']}
               ");
               echo 'success';
        }

         // No Match
        else{
            header("Location: 404");
        }
    }


    // No Match
    else{
        header("Location: 404");
    }
    
    
}
// Redirect to login page if user not logged in
else{
    header("Location: login");
}