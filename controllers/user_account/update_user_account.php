<?php
session_start();
?>
<?php
// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
// Split action
$action = explode('-',$_POST['submit'])[0];
$table = explode('-',$_POST['submit'])[1];


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
    }
    
    
}
// Redirect to login page if user not logged in
else{
    header("Location: login");
}