<?php  /* This file is responisible for loading functions and methods that appear in the head section of the document, it should appear in every page.
        * This file should primarily be used to load CSS files, it uses a function that will automatically load the CSS file named after the current document, eg 'index.html', or 'about.php' will have 'index.css', or 'about.css' loaded, respectively, and IF they exist in your /css directory.
        *
        */

        loadCSSFile('main');
        loadCSSFile($current_doc_name);

?>
