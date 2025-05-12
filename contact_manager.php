<?php

$name1 = "";
$phone1 = "";

$name2 = "";
$phone2 = "";

while(true){

    echo "\n============Contact Manager =============\n";

    echo "1. Add Contacts\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";

    echo "Enter a Choice \n";
    $choice = fgets(STDIN);

    if($choice == 1){

        if($name1 == ""){
            
            echo "Please Enter Name for Contact 1 : \n";
            $name1 = fgets(STDIN);            

            echo "Please Enter Phone Number for Contact 1 : \n";
            $phone1 = fgets(STDIN);

            echo "Contact 1 Added ";
        }
        
        else if($name2 == ""){ 

            echo "Please Enter Name for Contact 2 :  \n";
            $name2 = fgets(STDIN);
            
            echo "Please Enter Phone Number for Contact 2 : \n";
            $phone2 = fgets(STDIN);
        }
        else{
            echo "You have already added 2 contacts \n";
        }
    }

    else if($choice == 2){

        echo "========== Saved Contacts ============== \n";

        if($name1 != ""){
            echo "Contact 1: \n" . "Name: " . $name1 . " | " . "Phone: " . $phone1;
        }

        if($name2 != ""){
            echo "Contact 2: \n" . "Name: " . $name2 . " | " . "Phone: " .$phone2;
        }

        if($name1 == "" && $name2 == ""){
            echo "No Contacts Found ! \n";
        }

    }
    else if($choice == 3){
        echo "Goodbye !";
        break;
    }
    else{
        echo "INVALID CHOICE \n" . "Please Choose a number mentioned above";
    }   
}

?>