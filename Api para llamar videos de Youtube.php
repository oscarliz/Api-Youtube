
<?php

$API_KEY = "AIzaSyBBwlvIE-4ELGTcFyMgdULZek3cVsyE4RE";

$CHANNEL_ID = "UCfag1vW28FRLAp0JC6vKF8Q";

$MAX_RESULTS = "10";

$VideoLista =
    json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$CHANNEL_ID.'&maxResults='.$MAX_RESULTS.'&key='.$API_KEY.''));


    foreach($VideoLista->items as $item) {

        if(isset($item->id->videoId)) {

            echo '<div class="youtube-video">

            <iframe width="280" height="150"

            src="https://www.youtube.com/embed/'.$item->id->videoId.'"

            frameborder="0" allowfullscreen></iframe>

            <h2>'.$item->snippet->title.'</h2>

            </div>';
        }
    }

    ?>