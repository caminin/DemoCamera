    <!-- LIGNE 5-->
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 row_5">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 bottom_bar remove_all">
                    <img class="small_icon" src="img/home.svg" alt="Mountain View" onclick="location.href='index.php';">
                    <img class="small_icon" src="img/facebook.svg" alt="Mountain View" onclick="location.href='facebook.php';">
                    <img class="small_icon" src="img/twitter.svg" alt="Mountain View" onclick="location.href='twitter.php';">
                    <img class="small_icon" src="img/youtube.svg" alt="Mountain View" onclick="location.href='youtube.php';">
                    <div class="journal_mensuel_text" onclick="location.href='youtube.php';">Journal Mensuel</div>
                    <div class="pmr_text" onclick="location.href='controller/pmr.php';">PMR</div>
                    <img class="small_icon reduce" src="img/order.svg" alt="Mountain View" onclick="location.href='controller/pmr.php';">>
                </div>
                <?php
                    session_start();
                    if(isset($_SESSION["PMR"])==true){
                        echo '<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 bottom_bar_pmr remove_all">
                        Activé
                        </div>';
                    }
                ?>
            </div>
            <!-- FIN LIGNE 5-->   
            
        </div>
    </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<?php
    if(isset($veille) == false){
        echo '<script type="text/javascript">
        function timer_veille(){
            return setTimeout(function() {
                window.location.href = "index.php";
            }, 60000);
        };
        
        var timer=timer_veille();;
        
        document.onmousemove = function () {
            clearTimeout(timer);
            timer = timer_veille 
        };</script>';
    }
?>
    

</body>

</html>
