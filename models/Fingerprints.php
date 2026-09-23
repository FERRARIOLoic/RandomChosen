<?php

require_once(__DIR__ . '/../utils/connect.php');

class Fingerprint
{

    private int $id_fingerprint;
    private string $fingerprints_name;
    private $pdo;
    private string $search;

    public function __construct()
    {
        $this->pdo = Database::DBconnect();
    }


    //------------- SETTERS ---------//
    public function setID(int $id_fingerprint): void
    {
        $this->id_fingerprint = $id_fingerprint;
    }
    public function setFingerprint(string $fingerprints_name): void
    {
        $this->fingerprints_name = ucfirst($fingerprints_name);
    }
    public function setSearch(int $search): void
    {
        $this->search = $search;
    }

    //------------- GETTERS ---------//
    public function getID(): int
    {
        return $this->id_fingerprint;
    }
    public function getFingerprint(): string
    {
        return $this->fingerprints_name;
    }


    //------------- SAVE CREATE fingerprint ---------//
    public function save()
    {
        $pdo = Database::DBconnect();
        $cfingerprint_new = fingerprint::isFingerprintExist($this->getfingerprint());
        if ($cfingerprint_new == 0) {

            try {
                $sql = "INSERT INTO `fingerprints` (`fingerprints_name`) VALUES (:fingerprints_name)";
                $sth = $pdo->prepare($sql);
                $sth->bindValue(':fingerprints_name', $this->getfingerprint(), PDO::PARAM_STR);
                // var_dump($sth->execute());die;
                $result = $sth->execute();

                if (!$result) {
                    throw new PDOException();
                }
                unset($fingerprints_name);
            } catch (PDOException $e) {
                // var_dump($e);die;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    //------------- CHECK fingerprint EXIST ---------//
    public static function isFingerprintExist(string $fingerprints_name): int
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `fingerprints_name` FROM `fingerprints` WHERE `fingerprints_name`=:fingerprints_name";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':fingerprints_name', $fingerprints_name, PDO::PARAM_STR);
            if ($sth->execute()) {
                $checkedfingerprint = $sth->fetch();
                return $checkedfingerprint ? 1 : 0;
            } else {
                return 2;
            }
        } catch (PDOException $e) {
            return 2;
        }
    }

    //------------- UPDATE fingerprint DATA ---------//
    public static function update(int $id_fingerprint, string $fingerprints_name)
    {
        $pdo = Database::DBconnect();
        try {
            $sql = "UPDATE `fingerprints` SET `fingerprints_name`=:fingerprints_name WHERE `id_fingerprint`=:id_fingerprint";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_fingerprint', $id_fingerprint, PDO::PARAM_INT);
            $sth->bindValue(':fingerprints_name', $fingerprints_name, PDO::PARAM_STR);
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


    //------------- GET ALL fingerprint ---------//
    public static function getAll()
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `id_fingerprint`, `fingerprints_name` FROM `fingerprints` ORDER BY `fingerprints_name`";
            $sth = $pdo->prepare($sql);
            if ($sth->execute()) {
                $fingerprints_list = $sth->fetchAll();
                return $fingerprints_list;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            var_dump($e);die;
            return false;
        }
    }



    //------------- GET carrier ---------//
    public static function getCarrier(int $id_fingerprint = 0)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `carriers`";
            if ($id_fingerprint != 0) {
                $sql .= " WHERE `id_fingerprint` = :id_fingerprint";
            }
            $sql .= " ORDER BY `carriers_name`";
            $sth = $pdo->prepare($sql);

            if ($id_fingerprint != 0) {
                $sth->bindValue(':id_fingerprint', $id_fingerprint, PDO::PARAM_INT);
            }
            if ($sth->execute()) {
                if ($id_fingerprint != 0) {

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
    public static function getByID(int $id_fingerprint_price)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_price` = :id_fingerprint_price); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_fingerprint_price', $id_fingerprint_price, PDO::PARAM_INT);

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
    public static function getPrice(int $id_fingerprint, int $order_weight)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_fingerprint` = :id_fingerprint AND `carriers_max_weight`>=:order_weight); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_fingerprint', $id_fingerprint, PDO::PARAM_INT);
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
    public static function delete(int $id_fingerprint)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "DELETE FROM `users` WHERE `id`=:id_fingerprint ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_fingerprint', $id_fingerprint, PDO::PARAM_INT);
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
