<?php
    function Process(){
        $date = date("Y-m-d G-i-s");

        $contactFile = fopen("bookings/Contact Info " . $date . ".txt", "w");

        if(isset($_POST['txtName']))
        {
            fwrite($contactFile, "Full name: " . $_POST['txtName'] . "\n");
        }

        if(isset($_POST['txtPhone']))
        {
            fwrite($contactFile, "Phone no: " . $_POST['txtPhone'] . "\n");
        }

        if(isset($_POST['txtEmail']))
        {
            fwrite($contactFile, "Email: " . $_POST['txtEmail'] . "\n");
        }

        if(isset($_POST['txtPersons']))
        {
            fwrite($contactFile, "Persons: " . $_POST['txtPersons'] . "\n");
        }

        if(isset($_POST['txtDate']))
        {
            fwrite($contactFile, "Date/time: " . $_POST['txtDate'] . "\n");
        }

        if(isset($_POST['txtfi']))
        {
            fwrite($contactFile, "Further information: " . $_POST['txtfi'] . "\n");
        }

        fclose($contactFile);

        echo '<script language="javascript">';
        echo 'alert("Booking created")';
        echo '</script>';
        
    }

    if(array_key_exists('btnSubmit', $_POST)){
        Process();
    }
?>