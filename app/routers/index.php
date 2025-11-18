<?php

//ROUTE PAR DÉFAUT
// PATTERN: /
// CTLR: pagesController
// ACTION: home

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($conn);