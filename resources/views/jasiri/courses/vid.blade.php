<!doctype html>
<html>
    <head>
        <title>Dash.js Rocks</title>
        <style>
            video {
                width: 640px;
                height: 360px;
            }
        </style>
    </head>
    <body>
        <div>
            <video id="videoPlayer" controls></video>
        </div>
        <script src="http://cdn.dashjs.org/v3.1.3/dash.all.min.js"></script>
        <script>
            (function(){
                var url = "{{url('/')}}/vids/hamo2.m3u8";
                var player = dashjs.MediaPlayer().create();
                player.initialize(document.querySelector("#videoPlayer"), url, true);
            })();
        </script>
    </body>
</html>