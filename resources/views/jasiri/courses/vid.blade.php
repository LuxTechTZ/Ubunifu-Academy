<!doctype html>
<html>
    <head>
        <video data-dashjs-player autoplay src="{{url('/')}}/vids/hamo.mpd" controls>
</video>
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
        <script src="http://demo.unified-streaming.com/players/dash.js-2.6.6/contrib/akamai/controlbar/ControlBar.js"></script>
        <script src="{{url('/')}}/dash.js-3.1.3/dist/dash.all.min.js"></script>
        <script>
            (function(){
                var url = "{{url('/')}}/vids/hamo.mpd";
                var player = dashjs.MediaPlayer().create();
                player.initialize(document.querySelector("#videoPlayer"), url, true);
            })();
        </script>

        <script>
            function init() {
                var video,
                    player,
                    url = "https://dash.akamaized.net/akamai/bbb_30fps/bbb_30fps.mpd";

                video = document.querySelector("video");
                player = dashjs.MediaPlayer().create();

                /* Extend RequestModifier class and implement our own behaviour */
                player.extend("RequestModifier", function () {
                    return {
                        modifyRequestHeader: function (xhr) {
                            /* Add custom header. Requires to set up Access-Control-Allow-Headers in your */
                            /* response header in the server side. Reference: https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/setRequestHeader */
                            /* xhr.setRequestHeader('DASH-CUSTOM-HEADER', 'MyValue'); */
                            return xhr;
                        },
                        modifyRequestURL: function (url) {
                            /* Modify url adding a custom query string parameter */
                            return url + '?customQuery=value';
                        }
                    };
                });
                player.initialize(video, url, true);
            }
        </script>

        <script>
            function applySettings() {
                var stableBuffer = parseInt(document.getElementById('stableBuffer').value, 10);
                var bufferAtTopQuality = parseInt(document.getElementById('topQualityBuffer').value, 10);
                var minBitrate = parseInt(document.getElementById('minBitrate').value, 10);
                var maxBitrate = parseInt(document.getElementById('maxBitrate').value, 10);
                var limitByPortal = document.getElementById('limitByPortal').checked;

                player.updateSettings({
                    'streaming': {
                        'stableBufferTime': stableBuffer,
                        'bufferTimeAtTopQualityLongForm': bufferAtTopQuality,
                        'abr': {
                            'minBitrate': {
                                'video': minBitrate
                            },
                            'maxBitrate': {
                                'video': maxBitrate
                            },
                            'limitBitrateByPortal': limitByPortal
                        }
                    }
                })
            }
        </script>



    </body>
</html>