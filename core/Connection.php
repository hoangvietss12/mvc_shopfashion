<?php
class Connection{
    private static $instance = null, $conn = null;

    private function __construct(){

        //Kết nối database
        try{

            //Cấu hình dsn
            $dsn = 'mysql:dbname=fashion_shop;host=localhost';

            //Cấu hình $options
            /*
             * - Cấu hình utf8
             * - Cấu hình ngoại lệ khi truy vấn bị lỗi
             * */
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            //Câu lệnh kết nối
            $con=new PDO($dsn, 'root', '', $options);

            self::$conn = $con;

        }catch (Exception $exception){
            $mess = $exception->getMessage();
            die();
        }
    }

    public static function getInstance(){
        if (self::$instance == null)
        {
            $connection = new Connection();
            self::$instance = self::$conn;
        }

        return self::$instance;
    }
}