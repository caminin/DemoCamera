<?php
    //turn on php error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    function check_element(){
        $servername = "localhost";
        $username = "pdc_user";
        $password = "displaypdc";
        $dbname = "Pont_de_Ce_test";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
            
        $post_data ="nothing";

        $query = "SELECT * FROM Personne;";
        $result = mysqli_query($conn,$query);
        if($result){
            $numResults = $result->num_rows;
            if( $numResults > 0){
                $element = mysqli_fetch_array($result);
                $post_data = $element["personne_age"]."/".$element["personne_sexe"];
                $sql = "DELETE FROM Personne;";
                mysqli_query($conn, $sql);
            }
        }
        echo $post_data;
        mysqli_close($conn);
    }
        
    function insert_mysql(){
        $servername = "localhost";
        $username = "pdc_user";
        $password = "displaypdc";
        $dbname = "Pont_de_Ce_test";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO Personne (personne_age,personne_sexe) VALUES ('".$_GET["age"]."','".$_GET["sexe"]."');";

        if (mysqli_query($conn, $sql)) {
            echo "inserted";
        } else {
           echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    
    }
    
    if(isset($_GET["age"])){
        insert_mysql();
    }
    else{
        check_element();
    }
    
?>
