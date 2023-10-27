<?php
class Database {
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = "roundhouse.proxy.rlwy.net";
        $this->db = "railway";
        $this->user = "root";
        $this->password  = "14-1fdfa2A4AC3-5fc2HBhE2Hg4GdC1c";
        $this->charset = "utf8mb4";
    }

    function conect() {
        try {
            
            $connection = "mysql://root:14-1fdfa2A4AC3-5fc2HBhE2Hg4GdC1c@mysql.railway.internal:3306/railway";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error conexion: ' . $e->getMessage());
        }
    }
}
