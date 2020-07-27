<?php
class db {
    protected $database_credentials = [
        'host'=>'localhost',
        'database_name'=>'intl_conference',
        'username'=>'root',
        'password'=>'',
        'charset'=>'utf8mb4'
    ];
    public $pdo;
    public $execute_result;
    public function __construct(){
        /**
         * mysql database connection established
         */
        $dsn = "mysql:host={$this->database_credentials['host']}; dbname={$this->database_credentials['database_name']}; charset={$this->database_credentials['charset']}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $this->database_credentials['username'], $this->database_credentials['password'],  $options);
            // $check_connection = $pdo ?  "Connection established successfully":"Connection not established successfully";
            // echo $check_connection;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
       
    }
    public function execute($query_statement, $value = []){
        /**
         * using positional placeholder
         * @query_statement 
         * @value array 
         */
        $this->execute_result = $this->pdo->prepare($query_statement);
        $this->execute_result->execute($value);
        return $this->execute_result;
    }
    public function fetch_all(){
        return $this->execute_result->fetchAll();
    }
    public function f_all(){
        return $this->execute_result->fetchAll(PDO::FETCH_OBJ);
    }
    public function f_one(){
        return $this->execute_result->fetch(PDO::FETCH_OBJ);
    }
    public function fetch(){
        return $this->execute_result->fetchColumn();
    }
    public function row_count(){
        return $this->execute_result->rowCount();
    }
    public static function Validate($val){
        return filter_var(trim($val), FILTER_VALIDATE_INT);
    }

    public static function text_val($val){
        return filter_var(trim($val), FILTER_SANITIZE_STRING);
    }

    public static function email_val($val){
        return filter_var(trim($val), FILTER_VALIDATE_EMAIL);
    }

}

// $db = new db;
// $a = $db->execute('INSERT INTO `about`(`about`, `created_at`, `updated_at`) VALUES (?,NOW(),NOW())', ['Hello']);
 
