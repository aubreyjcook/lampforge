<?php  /* This file is responisible for loading functions and methods that appear at the end of section of the document, it should appear in every page.
        * This file should primarily be used to load JavaScript files.
        */

        loadJSFile('conditionalPageLoading');
        loadJSCDN('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', 'sha256-0rguYS0qgS6L4qVzANq4kjxPLtvnp5nn2nB5G1lWRv4=');
        loadJSCDN('https://code.jquery.com/jquery-3.2.1.min.js', 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=');
        loadJSFile('plugins');
        loadJSFile($current_doc_name);
        loadJSFile('main');
?>

<!-- <script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script> -->

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
