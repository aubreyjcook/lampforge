<?php
/* this gets the current working document name and extension as a variable, eg. "index.php" */
$current_page = basename($_SERVER['PHP_SELF']);
/* this gets the page name without the extension: eg. 'index.php' = 'index' */
$current_doc_name = preg_replace('/\.[^.]+$/','',$current_page);

function loadCSSFile($fileName){
  if (file_exists("css/" . $fileName . '.css')){
    echo '<link href="css/' . $fileName . '.css " rel="stylesheet">';
  }
}

?>
