<?php

    /*
    
    author: BFHUI Network

    project_name: BetterAPlayer

    useage: Put down in website location, and write include ("aplayer.php") in header.php

    */

>

<div id="player"  class="aplayer"></div>
<link href="./mp-css/style.css" rel="stylesheet">
<script src="./mp-js/mp.js"></script> 
 
<script type="text/javascript">
var ap = new APlayer({
    element: document.getElementById('player'),
    narrow: false,
    autoplay: false,
    showlrc: true,
    fixed:1,
    theme: '#F5F5F5',
    music: [{
            title: 'Five Hundred Miles',
            author: 'The Journeymen',
            url: './mp-music/Five-hundred-miles.mp3',
            pic: './mp-img/Five-hundred-miles.png'
        }
    ]
});
ap.init();
</script>
