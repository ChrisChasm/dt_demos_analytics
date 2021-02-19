<?php
/**
 * Plugin Name: DT Demos Analytics Code
 * Plugin URI: https://github.com/ChrisChasm/dt_demos_analytics
 * Description:
 */

add_action( 'wp_head', function(){
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2NQW0WF4Q8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-2NQW0WF4Q8');
    </script>
    <?php
});