<?php

namespace App\Models;

class Book 
{
    // id, title, resume, author_id, category_id, created_at
    public $id, $isbn, $cover, $title, $resume, $author_id, $category_id, $created_at;

    // Liaisons
    private $author, $category;

    // public function __construct ()
    // {
    //     $this->setAuthor();
    // }

    public function __get (string $prop): mixed
    {
        // 1. Si le setter setProp existe (method_exists(objet, nom méthode))
        // 2. Je le lance et je retourne l'objet
        $setterName = "set" . ucFirst($prop); // set category (prop) / $setterName = setCategory
        if (method_exists($this, $setterName)):
            $this->$setterName(); // $this->setCategory()
            return $this->$prop; // this->category
        endif;
        return true;
    }

    public function setAuthor (): void
    {
        if (!$this->author):
            $this->author = AuthorsRepository::findOneById($this->author_id);
        endif;
    }

    public function setCategory (): void
    {
        if (!$this->category):
            $this->category = CategoriesRepository::findOneById($this->category_id);
        endif;
    }
}