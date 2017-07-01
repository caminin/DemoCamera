<?php require("include/header.php"); ?>
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <link href="css/youtube.css" rel="stylesheet">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 keep_height">
        <div class="invisible_block"></div>
        <div class="player" id="player"></div>
        
        

        <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
            height: '490',
            width: '960',
            videoId: 'Yyrm5h-w25U',
            playerVars: {
                fs:0,
                autoplay: 1, // Auto-play the video on load
                controls: 0, // Show pause/play buttons in player
                showinfo: 0, // Hide the video title
                modestbranding: 1, // Hide the Youtube Logo
                loop: 1, // Run the video in a loop
                fs: 0, // Hide the full screen button
                cc_load_policty: 0, // Hide closed captions
                iv_load_policy: 3, // Hide the Video Annotations
                autohide: 1 // Hide video controls when playing
            },
            events: {
                'onReady': onPlayerReady
            }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        </script>
    </div>

<?php require("include/footer.php"); ?>


