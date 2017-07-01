<?php require("include/header.php"); ?>
<link href="css/pmr_list_files.css" rel="stylesheet">
<script type="text/javascript">
    function read(path,extension){
        var img=document.getElementById("read_img");
        var pdf=document.getElementById("read_pdf");
        if(extension=="pdf"){
            pdf.src="plugins/pdf.js/web/viewer.html?file=../../../../uploads/"+path;
            pdf.style.display="inline";
            img.style.display="none";
            
        }
        else if(extension == "jpg" || extension == "jpeg" || extension == "png"){
            img.src="../uploads/"+path;
            pdf.style.display="none";
            img.style.display="inline";
            
        }
    }
   
</script>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="height:1410px;">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 header">
            <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 remove_all">
                <button type="button" class="btn btn-default btn-back remove_all" onclick="window.history.back();">
                    <span class="glyphicon glyphicon-arrow-left " aria-hidden="true" ></span>
                </button>
            </div>
            <div class="col-lg-11 col-md-11 col-xs-11 col-sm-11 remove_all">
                <p class="entete_text">
                    <?php 
                    
                        session_start();
                    
                        if(isset($_POST["sous_theme"])){
                            $_SESSION["sous_theme"]=$_POST["sous_theme"];
                        }
                        if(isset($_SESSION["sous_theme"])){
                            $title = $_SESSION["sous_theme"];
                        }
                        elseif(isset($_SESSION["theme"])){
                            $title = $_SESSION["theme"];
                        }
                        else{
                            $title = $_SESSION["category"];
                        } 
                        
                        echo $title;
                    ?>
                </p>
            </div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 image">
            <div class="read">
                <iframe id="read_pdf" src="" width="745" height="1020" style="display:none;"></iframe>
                <img id="read_img" src="" width="745" height="1020" style="display:none;"/>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 remove_all">
            <div class="list_files">
            
                <button type="button" class="btn btn-default btn-transparent remove_all" disabled>
                    <span class="glyphicon glyphicon-triangle-top btn-icon" aria-hidden="true" disabled></span>
                </button>
                
               
<?php 
                $post_data ="";
                $i=0;
                
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
                if(isset($_SESSION["sous_theme"])){
                    $query = "SELECT objects_extension,objects_path,objects_name,objects_time_creation FROM Objects WHERE objects_third_category = \"".$_SESSION["sous_theme"]."\" ORDER BY objects_time_creation ASC;";
                    unset($_SESSION["sous_theme"]);
                }
                elseif(isset($_SESSION["theme"])){
                    $query = "SELECT objects_extension,objects_path,objects_name,objects_time_creation FROM Objects WHERE objects_second_category = \"".$_SESSION["theme"]."\" ORDER BY objects_time_creation ASC;";
                    unset($_SESSION["theme"]);
                }
                else{
                    $query = "SELECT objects_extension,objects_path,objects_name,objects_time_creation FROM Objects WHERE objects_first_category = \"".$_SESSION["category"]."\" ORDER BY objects_time_creation ASC;";
                    unset($_SESSION["category"]);
                }
                
                $result = mysqli_query($conn,$query);
                $data = array(); 
                $first=true;
                if($result){
                    $numResults = $result->num_rows;
                    if( $numResults > 0){
                        while($row= mysqli_fetch_assoc($result)){
                            echo '<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 box_list box_'.$i.'" onclick="read(\''.$row["objects_path"].'\',\''.$row["objects_extension"].'\');" remove_all';
                            if($first == true){$first=false; echo ' id="first" ';}
                            echo '>
                                    <p class="text" >'.$row["objects_name"].'</p>
                                </div>';
                            if($i==0){
                                $i=1;
                            }
                            else{
                                $i=0;
                            }
                        }
                    }
                    else{
                    }
                }
                mysqli_close($conn);
?>
                <button type="button" class="btn btn-default btn-transparent btn-bottom remove_all" disabled>
                    <span class="glyphicon glyphicon-triangle-bottom btn-icon" aria-hidden="true" disabled></span>
                </button>
            </div>
        </div>
        
    </div>
    

<?php require("include/footer.php");?>

<?php

    if($first==false){
        echo '<script type="text/javascript">
                window.onload = function(){
                    document.getElementById("first").click();
                }

            </script>';
    }
    
?>



