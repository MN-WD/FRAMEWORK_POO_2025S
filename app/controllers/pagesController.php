<?php

namespace App\Controllers;
use \PDO, \App\Models\BooksRepository;

abstract class PagesController 
{
    public static function homeAction (PDO $conn) {
        $books = BooksRepository::findAll($conn, 3);
        // Limite de 3

        GLOBAL $content, $title;
        ob_start();
        include '../app/views/pages/home.php';
        $content = ob_get_clean();
    }
}