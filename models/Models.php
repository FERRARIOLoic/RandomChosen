<?php

require_once(__DIR__ . '/../utils/connect.php');

class Model
{

    private int $id_model;
    private string $brand_name;
    private string $model_technical_name;
    private string $model_commercial_name;
    private string $model_common_name;
    private $pdo;
    private string $search;

    public function __construct()
    {
        $this->pdo = Database::DBconnect();
    }


    //------------- SETTERS ---------//
    public function setID(int $id_carrier): void
    {
        $this->id_carrier = $id_carrier;
    }
    public function setBrandName(string $brand_name): void
    {
        $this->brand_name = $brand_name;
    }
    public function setModelTechnicalName(string $model_technical_name): void
    {
        $this->model_technical_name = $model_technical_name;
    }
    public function setModelCommercialName(string $model_commercial_name): void
    {
        $this->model_commercial_name = $model_commercial_name;
    }
    public function setModelCommonName(string $model_common_name): void
    {
        $this->model_common_name = $model_common_name;
    }
    public function setSearch(int $search): void
    {
        $this->search = $search;
    }

    //------------- GETTERS ---------//
    public function getID(): int
    {
        return $this->id_carrier;
    }
    public function getBrandName(): string
    {
        return $this->brand_name;
    }
    public function getModelTechnicalName(): string
    {
        return $this->model_technical_name;
    }
    public function getModelCommercialName(): string
    {
        return $this->model_commercial_name;
    }
    public function getModelCommonName(): string
    {
        return $this->model_common_name;
    }


    //------------- SAVE CREATE carrier ---------//
    public static function save(string $carriers_name, string $carriers_phone, string $carriers_email, string $carriers_ship_follow)
    {
        $pdo = Database::DBconnect();
        $carrier_new = Model::isCarrierExist($carriers_name);
        if ($carrier_new == 0) {

            try {
                $sql = "INSERT INTO `carriers` (`carriers_name`,`carriers_phone`,`carriers_email`,`carriers_ship_follow`) 
                                    VALUES (:carriers_name,:carriers_phone,:carriers_email,:carriers_ship_follow)";
                $sth = $pdo->prepare($sql);
                $sth->bindValue(':carriers_name', $carriers_name, PDO::PARAM_STR);
                $sth->bindValue(':carriers_phone', $carriers_phone, PDO::PARAM_STR);
                $sth->bindValue(':carriers_email', $carriers_email, PDO::PARAM_STR);
                $sth->bindValue(':carriers_ship_follow', $carriers_ship_follow, PDO::PARAM_STR);
                // var_dump($sth->execute());die;
                $result = $sth->execute();

                if (!$result) {
                    throw new PDOException();
                }
                unset($carriers_name, $carriers_phone, $carriers_email, $carriers_ship_follow);
            } catch (PDOException $e) {
                // var_dump($e);die;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    //------------- CHECK carrier EXIST ---------//
    public static function isCarrierExist(string $carriers_name): int
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `carriers_name` FROM `carriers` WHERE `carriers_name`=:carriers_name";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':carriers_name', $carriers_name, PDO::PARAM_STR);
            if ($sth->execute()) {
                $checkedCarrier = $sth->fetch();
                return $checkedCarrier ? 1 : 0;
            } else {
                return 2;
            }
        } catch (PDOException $e) {
            return 2;
        }
    }

    //------------- UPDATE carrier DATA ---------//
    public static function update(int $id_carrier, string $carriers_name, string $carriers_phone, string $carriers_email, string $carriers_ship_follow)
    {
        // var_dump($id_wood);die;
        $pdo = Database::DBconnect();
        try {
            $sql = "UPDATE `carriers` SET `carriers_name`=:carriers_name, `carriers_phone`=:carriers_phone, `carriers_email`=:carriers_email, `carriers_ship_follow`=:carriers_ship_follow WHERE `id_carrier`=:id_carrier";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_carrier', $id_carrier, PDO::PARAM_STR);
            $sth->bindValue(':carriers_name', $carriers_name, PDO::PARAM_STR);
            $sth->bindValue(':carriers_phone', $carriers_phone, PDO::PARAM_STR);
            $sth->bindValue(':carriers_email', $carriers_email, PDO::PARAM_STR);
            $sth->bindValue(':carriers_ship_follow', $carriers_ship_follow, PDO::PARAM_STR);
            $result = $sth->execute();

            if (!$result) {
                throw new PDOException();
            } else {
                return 2;
            }
            return true;
        } catch (PDOException $e) {
            // var_dump($e);die;
            return false;
        }
    }

    

    //------------- GET BRAND NAME ---------//
    public static function getBrand()
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT brand FROM `carriers` GROUP BY `carriers_name`";
            $sth = $pdo->prepare($sql);
            if ($sth->execute()) {
                $categories_list = $sth->fetchAll();
                return $categories_list;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            var_dump($e);
            die;
            return false;
        }
    }

    //------------- GET ALL products ---------//
    public static function getAll()
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `carriers` GROUP BY `carriers_name`";
            $sth = $pdo->prepare($sql);
            if ($sth->execute()) {
                $categories_list = $sth->fetchAll();
                return $categories_list;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            var_dump($e);
            die;
            return false;
        }
    }



    //------------- GET carrier ---------//
    public static function getCarrier(int $id_carrier = 0)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `carriers`";
            if ($id_carrier != 0) {
                $sql .= " WHERE `id_carrier` = :id_carrier";
            }
            $sql .= " ORDER BY `carriers_name`";
            $sth = $pdo->prepare($sql);

            if ($id_carrier != 0) {
                $sth->bindValue(':id_carrier', $id_carrier, PDO::PARAM_INT);
            }
            if ($sth->execute()) {
                if ($id_carrier != 0) {

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
    public static function getByID(int $id_carrier_price)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_price` = :id_carrier_price); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_carrier_price', $id_carrier_price, PDO::PARAM_INT);

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
    public static function getPrice(int $id_carrier, int $order_weight)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_carrier` = :id_carrier AND `carriers_max_weight`>=:order_weight); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_carrier', $id_carrier, PDO::PARAM_INT);
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
    public static function delete(int $id_carrier)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "DELETE FROM `users` WHERE `id`=:id_carrier ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_carrier', $id_carrier, PDO::PARAM_INT);
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
