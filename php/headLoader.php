<link rel="manifest" href="site.webmanifest">
<link rel="icon" type="image/png" href="img/favicon.png">
<!-- CSS CDNs -->

<?php  /* This file is responisible for loading functions and methods that appear in the head section of the document, it should appear in every page.
        * This file should primarily be used to load CSS files, it uses a function that will automatically load the CSS file named after the current document, eg 'index.html', or 'about.php' will have 'index.css', or 'about.css' loaded, respectively, and IF they exist in your /css directory.
        *
        */

        loadCSSCDN('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', 'sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=');
        loadCSSCDN('https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css', 'sha256-/8+sU56ayrJGahG9mmcUaNEghbavaceGybkdqO96Kk0=');

        loadCSSFile($current_doc_name);
        loadCSSFile('main');

?>
