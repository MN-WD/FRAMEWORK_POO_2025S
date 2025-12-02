<?php

namespace Core;
use \PDO, \Core\DB;

abstract class Repository {
    protected static $_table, $_model;

    protected static function init() 
    {
        $root_name = basename(str_replace('\\', '/', static::class), "Repository"); // Books
        static::$_table = strtolower($root_name); // books
        static::$_model = '\App\Models\\' . basename($root_name, 's'); // \App\Models\Book
    }

    public static function findAll (int $limit = 9): array 
    {
        static::init();
        // Accède à une propriété de la classe enfant : table name = books
        $sql = "SELECT *
                FROM " . static::$_table . "
                ORDER BY created_at DESC
                LIMIT :limit;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, static::$_model);
    }

    public static function findOneById (int $id): Object 
    {
        static::init();
        $sql = "SELECT *
                FROM " . static::$_table . "
                WHERE id = :id;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(static::$_model);
    }
}