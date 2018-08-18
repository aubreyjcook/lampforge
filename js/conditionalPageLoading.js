/* variable declarations
 ------------------------------------------------------------- */
/* this gets the current working document name and extension as a variable, eg. "index.php" */
let current_page = window.location.pathname.split("/").pop();
/* this gets the page name without the extension: eg. 'index.php' = 'index' */
let current_doc_name = current_page.split(".").slice(0, -1).join(".");


/* function/method declarations
 ------------------------------------------------------------- */