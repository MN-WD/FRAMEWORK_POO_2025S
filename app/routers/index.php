<?php

if (isset($_GET['books'])):
    include_once '../app/routers/books/books.php';

//ROUTE PAR DÉFAUT
// PATTERN: /
// CTLR: pagesController
// ACTION: home
else:
    \App\Controllers\PagesController::homeAction();
endif;