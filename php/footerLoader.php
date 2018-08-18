<?php  /* This file is responisible for loading functions and methods that appear at the end of section of the document, it should appear in every page. 
        * This file should primarily be used to load JavaScript files.
        */

        loadJSFile('main');
        echo ('<script src="src/js/conditionalPageLoading.js"></script>');
        loadJSFile($current_doc_name);
?>