<?php  /* This file is responsible for loading functions and methods that appear at the end section of the document, it should appear in every page.
        * This file should primarily be used to load JavaScript files.
        */

        loadJSFile('conditionalPageLoading');
        loadJS('vendor/modernizr-3.5.0.min','https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', 'sha256-0rguYS0qgS6L4qVzANq4kjxPLtvnp5nn2nB5G1lWRv4=');
        loadJS('vendor/jquery-3.2.1.min.js','https://code.jquery.com/jquery-3.2.1.min.js', 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=');
        loadJSFile('plugins');
        loadJSFile($current_doc_name);
        loadJSFile('main');
?>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
