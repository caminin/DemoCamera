<?php 
    
    session_start();
    if(isset($_SESSION["PMR"])){
        header("Location:pmr_index.php");
    }
    $veille=false;
?>
<?php require("include/header.php"); ?>

<!-- Sweetalert -->
<link href="./plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />

                  
            <!-- FIN LIGNE 1-->
        
            <!-- LIGNE 2-->
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 row_2">
                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 box_5 remove_all">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 big_box remove_all"  onclick="location.href='website_pdc.php';">
                        <img class="big_icon" src="img/world-wide-web.svg" alt="Mountain View">
                        <p class="big_text">Site Web</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 group_box_1">
                    <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 remove_all">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box box_1 remove_all" onclick="goto('elections');">
                            <img class="medium_icon" src="img/voting.svg" alt="Mountain View" >
                            <p class="medium_text">Elections</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box box_2 remove_all" onclick="goto('urbanisme');">
                            <img class="medium_icon" src="img/skyline.svg" alt="Mountain View" >
                            <p class="medium_text">Urbanisme</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 remove_all">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box box_3 remove_all" onclick="goto('mariages');">
                            <img class="medium_icon" src="img/couple.svg" alt="Mountain View" >
                            <p class="medium_text">Mariages</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box box_4 remove_all" onclick="goto('conseil municipal - Direction Générale');">
                            <img class="medium_icon" src="img/teamwork.svg" alt="Mountain View" >
                            <p class="medium_text">Conseil Municipal</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN LIGNE 2-->     
            
            
            <!-- LIGNE 3-->
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 row_3 remove_all group_box_2">
                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 box_7 remove_all" onclick="alert('En cours d\'implémentation');">
                            <img class="large_icon" src="img/communication.svg" alt="Mountain View" >
                            <p class="large_text">Espace citoyen</p>
                        </div>
                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 box box_8 remove_all" onclick="goto('Etat Civil');">
                            <img class="medium_icon" src="img/form.svg" alt="Mountain View" >
                            <p class="medium_text">Etat civil</p>
                        </div>
                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 box box_9 remove_all" onclick="goto('Environnement et Sécurité du Territoire');">
                            <img class="medium_icon" src="img/traffic-cone.svg" alt="Mountain View" >
                            <p class="medium_text">Environnements et travaux</p>
                        </div>
            </div>
            <!-- FIN LIGNE 3-->   
            
            <!-- LIGNE 4-->
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 row_4">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 box_10 remove_all">
                    <div class="box box-solid image_paysage remove_all">
                        <!-- /.box-header -->
                        <div class="box-body image_paysage">
                            <div id="carousel-example-generic" class="carousel slide image_paysage" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="item active image_paysage">
                                    <img id="first_slide" src="../presentation/Diapositive1.JPG" alt="First slide">

                                    <div class="carousel-caption">
                                    Exposition
                                    </div>
                                </div>
                                <div class="item image_paysage">
                                    <img id="second_slide" src="../presentation/Diapositive2.JPG" alt="Second slide">

                                    <div class="carousel-caption">
                                    Les Traver'Ce
                                    </div>
                                </div>
                                <div class="item image_paysage">
                                    <img id="third_slide" src="../presentation/Diapositive3.JPG" alt="Third slide">

                                    <div class="carousel-caption">
                                   Exposition et parcours
                                    </div>
                                </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
<!--                     <img class="image_paysage" src="img/paysage_1.jpg" alt="Mountain View"> -->
                </div>
            </div>
            <!-- FIN LIGNE 4-->   
            
<!-- Sweetalert -->
<script src="./plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>

<script type="text/javascript">
    function goto(name){
        var url = 'list_theme.php';
        var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="category" value="' + name + '" />' +
        '</form>');
        $('body').append(form);
        form.submit();
    };
        
    
    
    function timer_veille(){
        return setTimeout(function() {
            window.location.href = "veille.php";
        }, 300000);
    }
    
    var timer=timer_veille();
    
    document.onmousemove = function () {
        clearTimeout(timer);
        timer = timer_veille();
    }
    
    function getNew(url) {
        var result = "";
        $.ajax({
            url: url,
            type: 'get',
            async: true,
            success: function(data) {
                if(data!="nothing"){
                    var data_array=data.split("/");
                    var age=data_array[0];
                    var sexe=data_array[1];
                    var genre;
                    if(sexe=="male"){
                        genre="Monsieur";
                    }
                    else{
                        genre="Madame";
                    }
                    swal("Bonjour "+genre,"Je vous estime un âge de "+age+" ans\n L'affichage va être optimisé en fonction de cela");
                    if(age<35){
                        document.getElementById("first_slide").src="../presentation/jeune_1.jpg";
                        document.getElementById("second_slide").src="../presentation/jeune_2.jpg";
                        document.getElementById("third_slide").src="../presentation/jeune_3.jpg";
                        
                        document.getElementsByClassName("large_text")[0].innerHTML = "Compte Etudiant"
                        document.getElementsByClassName("large_icon")[0].src="../presentation/female-graduate-student.svg"
                    }
                    else{
                        document.getElementById("first_slide").src="../presentation/vieux_1.jpg";
                        document.getElementById("second_slide").src="../presentation/vieux_2.jpg";
                        document.getElementById("third_slide").src="../presentation/vieux_3.jpg";
                        
                        document.getElementsByClassName("large_text")[0].innerHTML = "Compte Citoyen"
                        document.getElementsByClassName("large_icon")[0].src="../presentation/manager.svg"
                    }
                    
                }
            }
        });
    }
    
    
    window.onload=function(){
        setInterval(function() {
            getNew("controller/check.php");
        }, 1000);
    }
</script>


<?php require("include/footer.php");?>
