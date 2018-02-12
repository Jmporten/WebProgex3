<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 2/12/2018
 * Time: 9:10 AM
 */

function my_autoloader() {
    include 'classes/Users.class.php';
    include 'classes/regUser.class.php';
    include 'classes/adminUser.class.php';
}
spl_autoload_register('my_autoloader');

$formUser = new regUser(1, "newuser");
$formUser->setUser($_POST["firstname"], $_POST["lastname"], $_POST["email"]);

function testType($formUser){
    if($formUser->getUserLevel() == 1){
        echo "This is a registered user.";
    }else if($formUser->getUserLevel() == 2){
        echo "This is an admin user.";
    }else{
        echo "This is an invalid entry.";
    }
}
?>
<html>
    <head>
    </head>
    <body>
        Test: <?php testType($formUser); ?><br>
        <hr>
        User Level:<?php echo $formUser->getUserLevel(); ?><br>
        Registered User ID: <?php echo $formUser->getUserID(); ?><br>
        Registered User Type: <?php echo $formUser->getUserType(); ?><br>
        Registered First Name: <?php echo $formUser->getFirstName(); ?><br>
        Registered Last Name: <?php echo $formUser->getLastName(); ?><br>
        Registered Email: <?php echo $formUser->getEmailAddress(); ?><br>
    </body>
</html>
<?php

