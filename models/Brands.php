<?php

require_once(__DIR__ . '/../utils/connect.php');

class Brand
{

    private int $id_brand;
    private string $brand_name;
    private $pdo;
    private string $search;

    public function __construct()
    {
        $this->pdo = Database::DBconnect();
    }


    //------------- SETTERS ---------//
    public function setID(int $id_brand): void
    {
        $this->id_brand = $id_brand;
    }
    public function setBrand(string $brand_name): void
    {
        $this->brand_name = ucfirst($brand_name);
    }
    public function setSearch(int $search): void
    {
        $this->search = $search;
    }

    //------------- GETTERS ---------//
    public function getID(): int
    {
        return $this->id_brand;
    }
    public function getBrand(): string
    {
        return $this->brand_name;
    }


    //------------- SAVE CREATE BRAND ---------//
    public function save()
    {
        $pdo = Database::DBconnect();
        $cbrand_new = Brand::isBrandExist($this->getBrand());
        if ($cbrand_new == 0) {

            try {
                $sql = "INSERT INTO `brands` (`brands_name`) VALUES (:brands_name)";
                $sth = $pdo->prepare($sql);
                $sth->bindValue(':brands_name', $this->getBrand(), PDO::PARAM_STR);
                // var_dump($sth->execute());die;
                $result = $sth->execute();

                if (!$result) {
                    throw new PDOException();
                }
                unset($brands_name);
            } catch (PDOException $e) {
                // var_dump($e);die;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    //------------- CHECK BRAND EXIST ---------//
    public static function isBrandExist(string $brand_name): int
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `brands_name` FROM `brands` WHERE `brands_name`=:brands_name";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':brands_name', $brand_name, PDO::PARAM_STR);
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
    public static function update(int $id_brand, string $brand_name)
    {
        $pdo = Database::DBconnect();
        try {
            $sql = "UPDATE `brands` SET `brands_name`=:brands_name WHERE `id_brand`=:id_brand";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_brand', $id_brand, PDO::PARAM_INT);
            $sth->bindValue(':brands_name', $brand_name, PDO::PARAM_STR);
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
            $sql = "SELECT `id_brand`, `brands_name` FROM `brands` ORDER BY `brands_name`";
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



    //------------- GET carrier ---------//
    public static function getCarrier(int $id_brand = 0)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `carriers`";
            if ($id_brand != 0) {
                $sql .= " WHERE `id_brand` = :id_brand";
            }
            $sql .= " ORDER BY `carriers_name`";
            $sth = $pdo->prepare($sql);

            if ($id_brand != 0) {
                $sth->bindValue(':id_brand', $id_brand, PDO::PARAM_INT);
            }
            if ($sth->execute()) {
                if ($id_brand != 0) {

                    $carriers_list = $sth->fetch();
                } else {
                    $carriers_list = $sth->fetchAll();
                }
                return $carriers_list;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            return false;
        }
    }


    //------------- GET PRICE ---------//
    public static function getByID(int $id_brand_price)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_price` = :id_brand_price); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_brand_price', $id_brand_price, PDO::PARAM_INT);

            if ($sth->execute()) {
                    $CarrierPrice = $sth->fetch();
                return $CarrierPrice;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            var_dump($e);die;
            return false;
        }
    }


    //------------- GET PRICE ---------//
    public static function getPrice(int $id_brand, int $order_weight)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_brand` = :id_brand AND `carriers_max_weight`>=:order_weight); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_brand', $id_brand, PDO::PARAM_INT);
            $sth->bindValue(':order_weight', $order_weight, PDO::PARAM_INT);

            if ($sth->execute()) {
                    $carriers_price = $sth->fetch();
                return $carriers_price;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            var_dump($e);die;
            return false;
        }
    }



    //------------- DELETE PATIENT ---------//
    public static function delete(int $id_brand)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "DELETE FROM `users` WHERE `id`=:id_brand ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_brand', $id_brand, PDO::PARAM_INT);
            $result = $sth->execute();
            if (!$result) {
                throw new PDOException();
                $resultView = 'Erreur lors de la suppression du patient';
                return $resultView;
            } else {
                $resultView = "Le patient a été supprimé";
                return $resultView;
            }
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
