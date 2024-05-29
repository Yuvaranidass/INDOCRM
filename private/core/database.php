<?php

/**
 * Database  Conntection
 */

class Database
{
    private function connect()
    {
        $string = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
        if (!$conn = new PDO($string, DB_USER, DB_PASSWORD)) {
            die('Connection Error');
        }
        return $conn;
    }

    public function query($sql, $data = array(), $data_type = "object")
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        if ($stmt) { 
            $check = $stmt->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }
        return false;
    }
}
