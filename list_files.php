<?php require("include/header.php"); ?>
<link href="css/list_files.css" rel="stylesheet">
<script type="text/javascript">

    function goto(name){
        var url = 'list_theme.php';
        var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="category" value="' + name + '" />' +
        '</form>');
        $('body').append(form);
        form.submit();
    };
    
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
    
    
    
    var current_line=0;
    function show_line(line){
        var count=parseInt(document.getElementById("count").innerHTML);
        var number_inline=12;
        for (var i = (current_line*number_inline); i < ((current_line+1)*number_inline); i++) {
            var element=document.getElementById(""+i);
            if(element != null){
                element.style.display="none";
            }
        }
        
        line = current_line+line;
        current_line=line;
        
        
        
        for (var i = (line*number_inline); i < ((line+1)*number_inline); i++) {
            var element=document.getElementById(""+i);
            if(element != null){
                element.style.display="";
            }
            if(line!=0){
                document.getElementById("btn-top").disabled=false;
            }
            else{
                document.getElementById("btn-top").disabled=true;
            }
            var div=count/12;
            if( div > (line+1) ){
                document.getElementById("btn-bottom").disabled=false;
            }
            else{
                document.getElementById("btn-bottom").disabled=true;
            }
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
        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 remove_all">
            <div class="list_files">
            
                <button type="button" id="btn-top" class="btn btn-default btn-transparent btn-top remove_all" onclick="show_line(-1);" disabled>
                    <span class="glyphicon glyphicon-triangle-top btn-icon" aria-hidden="true" ></span>
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
                $count=0; 
                $first=true;
                if($result){
                    $numResults = $result->num_rows;
                    if( $numResults > 0){
                        while($row= mysqli_fetch_assoc($result)){
                            $first=false;
                            echo '<div id="'.$count.'" class="col-lg-4 col-md-4 col-xs-4 col-sm-4 box_list box_'.$i.'" onclick="read(\''.$row["objects_path"].'\',\''.$row["objects_extension"].'\');" remove_all style="display:none;"';
                            
                            echo '>
                                    <p class="text">'.$row["objects_name"].'</p>
                                </div>';
                            if($i==0){
                                $i=1;
                            }
                            else{
                                $i=0;
                            }
                            $count+=1;
                        }
                    }
                    else{
                    }
                }
                mysqli_close($conn);
                echo "<div id=\"count\" style=\"display:none;\" value=\"".$count."\">".$count."</div>"
?>
                <button type="button" id="btn-bottom" class="btn btn-default btn-transparent btn-bottom remove_all" onclick="show_line(1);" disabled>
                    <span class="glyphicon glyphicon-triangle-bottom btn-icon" aria-hidden="true" ></span>
                </button>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-xs-9 col-sm-9">
            <div class="read">
                <iframe id="read_pdf" src="" width="745" height="1020" style="display:none;"></iframe>
                <img id="read_img" src="" width="745" height="1020" style="display:none;"/>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 footer remove_all">
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 box_dark_blue footer_big remove_all" onclick="location.href='website_pdc.php';">
                <img class="footer_big_icon" src="img/world-wide-web.svg" alt="Mountain View">
                <p class="footer_big_text">Site Web</p>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 remove_all">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_light_blue footer_medium remove_all" onclick="goto('elections');">
                    <img class="footer_medium_icon" src="img/voting.svg" alt="Mountain View">
                    <p class="footer_medium_text">élections</p>
                </div> 
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_light_blue footer_medium footer_box_bottom remove_all" onclick="goto('mariages');">
                    <img class="footer_medium_icon" src="img/couple.svg" alt="Mountain View">
                    <p class="footer_medium_text">mariages</p>
                </div> 
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 remove_all">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_light_blue footer_medium remove_all" onclick="goto('urbanisme');">
                    <img class="footer_medium_icon" src="img/skyline.svg" alt="Mountain View">
                    <p class="footer_medium_text">Urbanisme</p>
                </div> 
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_light_blue footer_medium footer_box_bottom remove_all" onclick="goto('conseil municipal - Direction Générale');">
                    <img class="footer_medium_icon" src="img/teamwork.svg" alt="Mountain View">
                    <p class="footer_medium_text">Conseil Municipal</p>
                </div> 
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 remove_all">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_medium_blue footer_medium remove_all"  onclick="goto('Environnement et Sécurité du Territoire');">
                    <img class="footer_medium_icon" src="img/traffic-cone.svg" alt="Mountain View">
                    <p class="footer_medium_text">Environnement et Travaux</p>
                </div> 
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_green footer_medium footer_box_bottom footer_large_box remove_all" onclick="alert('En cours d\'implémentation');">
                    <img class="footer_large_icon" src="img/communication.svg" alt="Mountain View">
                    <p class="footer_large_text">Espace citoyen</p>
                </div> 
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 remove_all">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_medium_blue footer_medium remove_all" onclick="goto('Etat Civil');">
                    <img class="footer_medium_icon" src="img/form.svg" alt="Mountain View">
                    <p class="footer_medium_text">Etat civil</p>
                </div>
            </div>
        </div>
    </div>
    

<?php require("include/footer.php");?>

<?php

    if($first==false){
        echo '<script type="text/javascript">
                window.onload = function(){
                    document.getElementsByClassName("text")[0].click();
                    
                    show_line(0);
                }

            </script>';
    }
    
?>



