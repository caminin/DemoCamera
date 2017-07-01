<?php require("include/header.php"); ?>
<link href="css/list_category.css" rel="stylesheet">
<script type="text/javascript">
    function goto(name){
        var url = 'pmr_list_sous_theme.php';
        var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="theme" value="' + name + '" />' +
        '</form>');
        $('body').append(form);
        form.submit();
    };
</script>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="height:1410px; padding-top:700px;">
               
<?php 
    $post_data ="";
    
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

    $query = "SELECT DISTINCT(categories_second_category) AS categories_second_category FROM Categories WHERE categories_first_category = \"".$_POST["category"]."\" ORDER BY categories_second_category ASC;";
    mysqli_query($conn,"SET NAMES UTF8");
    $result = mysqli_query($conn,$query);
    $data = array(); 
    if($result){
        $numResults = $result->num_rows;
        if( $numResults > 1){
            while($row= mysqli_fetch_assoc($result)){
                echo '<div class="col-lg-4 col-md-4 col-xs-4 col-sm0-4 box_category" onclick="goto(\''.addslashes($row["categories_second_category"]).'\');">
                        <img class="icon" src="img/elections.png" alt="Mountain View">
                        <p class="text">'.$row["categories_second_category"].'</p>
                    </div>';
            }
        }
        else if($numResults <= 1){
            session_start();
            $_SESSION['category'] = $_POST["category"];
            header( 'Location: ./pmr_list_files.php') ;
        }
        else{
            header( 'Location: ./pmr_index.php' ) ;
        }
    }
    else{
        header( 'Location: ./pmr_index.php' ) ;
    }
    mysqli_close($conn);
?>
    </div>
<?php require("include/footer.php");?>
