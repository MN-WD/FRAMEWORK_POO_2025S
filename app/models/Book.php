<?php

namespace App\Models;

class Book extends \Core\Model
{
    // id, title, resume, author_id, category_id, created_at
    public $isbn, $cover, $title, $resume, $author_id, $category_id;

    // Liaisons 1-N
    protected $author, $category;
}

// Champ générique de la table : echo $book->title;
// Mtn, la requête ne se déclanche qu'une fois si on lui demande : echo $book->author->firstname;
// A faire 02/12 :
// foreach $book->tags (N-M)
// foreach $tag->books (N-M)
// echo $author->books (1-N à l'envers)