<?php

require_once(__DIR__ . '/../utils/connect.php');

class Category
{

    private int $id_categories;
    private string $categories_name;
    private $pdo;
    private string $search;

    public function __construct()
    {
        $this->pdo = Database::DBconnect();
    }


    //------------- SETTERS ---------//
    public function setID(int $id_categories): void
    {
        $this->id_categories = $id_categories;
    }
    public function setCategory(string $categories_name): void
    {
        $this->categories_name = ucfirst($categories_name);
    }
    public function setSearch(int $search): void
    {
        $this->search = $search;
    }

    //------------- GETTERS ---------//
    public function getID(): int
    {
        return $this->id_categories;
    }
    public function getCategory(): string
    {
        return $this->categories_name;
    }


    //------------- SAVE CREATE CATEGORIES ---------//
    public function save()
    {
        $pdo = Database::DBconnect();
        $category_new = Category::isCategoryExist($this->getCategory());
        if ($category_new == 0) {

            try {
                $sql = "INSERT INTO `models_categories` (`categories_name`) VALUES (:categories_name)";
                $sth = $pdo->prepare($sql);
                $sth->bindValue(':categories_name', $this->getCategory(), PDO::PARAM_STR);
                // var_dump($sth->execute());die;
                $result = $sth->execute();

                if (!$result) {
                    throw new PDOException();
                }
                unset($categories_name);
            } catch (PDOException $e) {
                // var_dump($e);die;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    //------------- CHECK CATEGORIES EXIST ---------//
    public static function isCategoryExist(string $categories_name): int
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `categories_name` FROM `models_categories` WHERE `categories_name`=:categories_name";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':categories_name', $categories_name, PDO::PARAM_STR);
            if ($sth->execute()) {
                $checkedBrand = $sth->fetch();
                return $checkedBrand ? 1 : 0;
            } else {
                return 2;
            }
        } catch (PDOException $e) {
            return 2;
        }
    }

    //------------- UPDATE BRAND DATA ---------//
    public static function update(int $id_categories, string $categories_name)
    {
        $pdo = Database::DBconnect();
        try {
            $sql = "UPDATE `brands` SET `brands_name`=:brands_name WHERE `id_categories`=:id_categories";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_categories', $id_categories, PDO::PARAM_INT);
            $sth->bindValue(':brands_name', $categories_name, PDO::PARAM_STR);
            $result = $sth->execute();

            if (!$result) {
                throw new PDOException();
            } else {
                return 2;
            }
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }


    //------------- GET ALL BRAND ---------//
    public static function getAll()
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `id_category`, `categories_name` FROM `models_categories` ORDER BY `categories_name`";
            $sth = $pdo->prepare($sql);
            if ($sth->execute()) {
                $brands_list = $sth->fetchAll();
                return $brands_list;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            var_dump($e);die;
            return false;
        }
    }




    //------------- DELETE PATIENT ---------//
    public static function delete(int $id_categories)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "DELETE FROM `models_categories` WHERE `id_category`=:id_categories ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_categories', $id_categories, PDO::PARAM_INT);
            $result = $sth->execute();
            if (!$result) {
                throw new PDOException();
                return true;
            } else {
                return false;
            }
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
