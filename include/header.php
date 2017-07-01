<!DOCTYPE html>
<html lang="fr">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Borne les Ponts de Cé</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <script type="text/javascript">
        function actualiser() {
            var dayNames = ["Dimanche","Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
            var monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin","Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
            
            var hour = document.getElementById("hour");
            var day = document.getElementById("day_and_month");
            var date = new Date();
            
            var hours_string = (date.getHours()<10?'0':'')+date.getHours();
            hours_string += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
            hour.innerHTML = hours_string;
            
            var day_string = dayNames[date.getDay()];
            var month_string = monthNames[date.getMonth()];
            day_string += " "+(date.getDate()<10?'0':'')+date.getDate();
            day.innerHTML = day_string+" "+month_string;
            
            
        }
        window.onload=function() {
            setInterval(actualiser,50000);
        };    
//         document.addEventListener('contextmenu', event => event.preventDefault());
        
        
    </script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container-fluid"> <!-- If Needed Left and Right Padding in 'md' and 'lg' screen means use container class -->
        <div class="row">
            <!-- LIGNE 1-->
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 row_1">
            
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4" onclick="location.href='index.php';">
                    <img class="top_icon" src="img/saint_bar.png" alt="Mountain View">
                </div>
                
                <div class="col-lg-8 col-md-8 col-xs-8 col-sm-8 remove_all">
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 remove_all">
                        <div id="hour" class="hour">
                            <?php 
                                $jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
                                $mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); 
                                
                                echo strftime("%H:%M");
                            ?> 
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-8 col-sm-8 box_date">
                        <div class="col-xs-12">
                            <div id="day_and_month" class="date">
                                <?php 
                                    echo $jour[date("w")]." ".date("d")." ".$mois[date("n")];
                                ?> 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>  

    

   
