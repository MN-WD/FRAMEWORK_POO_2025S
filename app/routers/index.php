<?php

if (isset($_GET['books'])):
    include_once '../app/routers/books/books.php';

elseif (isset($_GET['authors'])):
    include_once '../app/routers/authors/authors.php';

//ROUTE PAR DÉFAUT
// PATTERN: /
// CTLR: pagesController
// ACTION: home
else:
    \App\Controllers\PagesController::homeAction();
endif;