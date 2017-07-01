<?php require("include/header.php"); ?>
<script type="text/javascript">
    function goto(name){
        var url = 'pmr_list_theme.php';
        var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="category" value="' + name + '" />' +
        '</form>');
        $('body').append(form);
        form.submit();
    };
</script>
            <!-- FIN LIGNE 1-->
            
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
                                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="item active image_paysage">
                                    <img src="../presentation/Diapositive1.JPG" alt="First slide">

                                    <div class="carousel-caption">
                                    Exposition
                                    </div>
                                </div>
                                <div class="item image_paysage">
                                    <img src="../presentation/Diapositive2.JPG" alt="Second slide">

                                    <div class="carousel-caption">
                                    Les Traver'Ce
                                    </div>
                                </div>
                                <div class="item image_paysage">
                                    <img src="../presentation/Diapositive3.JPG" alt="Third slide">

                                    <div class="carousel-caption">
                                   Exposition et parcours
                                    </div>
                                </div>
                                <div class="item image_paysage">
                                    <img src="../presentation/Diapositive4.JPG" alt="Third slide">

                                    <div class="carousel-caption">
                                    Exposition Estivale
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
                            <img class="medium_icon" src="img/form.svg" alt="Mountain View" >c
                            <p class="medium_text">Etat civil</p>
                        </div>
                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 box box_9 remove_all" onclick="goto('Environnement et Sécurité du Territoire');">
                            <img class="medium_icon" src="img/traffic-cone.svg" alt="Mountain View" >
                            <p class="medium_text">Environnements et travaux</p>
                        </div>
            </div>
            <!-- FIN LIGNE 3-->   
        
            
            

<?php require("include/footer.php");?>
