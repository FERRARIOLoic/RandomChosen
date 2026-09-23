<?php

require_once(__DIR__ . '/../utils/connect.php');

class Network
{

    private int $id_network;
    private string $networks_name;
    private $pdo;
    private string $search;

    public function __construct()
    {
        $this->pdo = Database::DBconnect();
    }


    //------------- SETTERS ---------//
    public function setID(int $id_network): void
    {
        $this->id_network = $id_network;
    }
    public function setNetwork(string $networks_name): void
    {
        $this->networks_name = ucfirst($networks_name);
    }
    public function setSearch(int $search): void
    {
        $this->search = $search;
    }

    //------------- GETTERS ---------//
    public function getID(): int
    {
        return $this->id_network;
    }
    public function getNetwork(): string
    {
        return $this->networks_name;
    }


    //------------- SAVE CREATE network ---------//
    public function save()
    {
        $pdo = Database::DBconnect();
        $cnetwork_new = network::isnetworkExist($this->getnetwork());
        if ($cnetwork_new == 0) {

            try {
                $sql = "INSERT INTO `networks` (`networks_name`) VALUES (:networks_name)";
                $sth = $pdo->prepare($sql);
                $sth->bindValue(':networks_name', $this->getnetwork(), PDO::PARAM_STR);
                // var_dump($sth->execute());die;
                $result = $sth->execute();

                if (!$result) {
                    throw new PDOException();
                }
                unset($networks_name);
            } catch (PDOException $e) {
                // var_dump($e);die;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    //------------- CHECK network EXIST ---------//
    public static function isnetworkExist(string $network_name): int
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `networks_name` FROM `networks` WHERE `networks_name`=:networks_name";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':networks_name', $network_name, PDO::PARAM_STR);
            if ($sth->execute()) {
                $checkednetwork = $sth->fetch();
                return $checkednetwork ? 1 : 0;
            } else {
                return 2;
            }
        } catch (PDOException $e) {
            return 2;
        }
    }

    //------------- UPDATE network DATA ---------//
    public static function update(int $id_network, string $network_name)
    {
        $pdo = Database::DBconnect();
        try {
            $sql = "UPDATE `networks` SET `networks_name`=:networks_name WHERE `id_network`=:id_network";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_network', $id_network, PDO::PARAM_INT);
            $sth->bindValue(':networks_name', $network_name, PDO::PARAM_STR);
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


    //------------- GET ALL network ---------//
    public static function getAll()
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT `id_network`, `networks_name` FROM `networks` ORDER BY `networks_name` DESC";
            $sth = $pdo->prepare($sql);
            if ($sth->execute()) {
                $networks_list = $sth->fetchAll();
                return $networks_list;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            var_dump($e);die;
            return false;
        }
    }



    //------------- GET carrier ---------//
    public static function getCarrier(int $id_network = 0)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `carriers`";
            if ($id_network != 0) {
                $sql .= " WHERE `id_network` = :id_network";
            }
            $sql .= " ORDER BY `carriers_name`";
            $sth = $pdo->prepare($sql);

            if ($id_network != 0) {
                $sth->bindValue(':id_network', $id_network, PDO::PARAM_INT);
            }
            if ($sth->execute()) {
                if ($id_network != 0) {

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
    public static function getByID(int $id_network_price)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_price` = :id_network_price); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_network_price', $id_network_price, PDO::PARAM_INT);

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
    public static function getPrice(int $id_network, int $order_weight)
    {
        // var_dump('order_weight',$order_weight);die;
        try {
            $pdo = Database::DBconnect();
            $sql = "SELECT * FROM `prices` WHERE (`id_network` = :id_network AND `carriers_max_weight`>=:order_weight); ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_network', $id_network, PDO::PARAM_INT);
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
    public static function delete(int $id_network)
    {
        try {
            $pdo = Database::DBconnect();
            $sql = "DELETE FROM `users` WHERE `id`=:id_network ";
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_network', $id_network, PDO::PARAM_INT);
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
