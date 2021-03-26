<?php
session_start();
require __DIR__ . '/./../bootstrap.php';
// echo session_id() . '<br>';

// $_SESSION['fff'] = 'aaa';

// use App\TesteOne;

// $servername = "db";
// $username = "ht2ml_user";
// $password = "password";
// $testWatch = 1;

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=ht2ml", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected Mysql successfully<br>";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

// define('DB_HOST'        , "mssql");
// define('DB_USER'        , "sa");
// define('DB_PASSWORD'    , "Admin@12345");
// define('DB_NAME'        , "demo");
// define('DB_DRIVER'      , "sqlsrv");

// class Conexao
// {
//     private static $connection;

//     private function __construct(){}

//     public static function getConnection() {

//         $pdoConfig  = DB_DRIVER . ":". "Server=" . DB_HOST . ";";
//         $pdoConfig .= "Database=".DB_NAME.";";

//         try {
//             if(!isset($connection)){
//                 $connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD);
//                 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             }
//             return $connection;
//          } catch (PDOException $e) {
//             $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
//             $mensagem .= "\nErro: " . $e->getMessage();
//             throw new Exception($mensagem);
//          }
//      }
// }

// try{

//     $Conexao    = Conexao::getConnection();
//     $rs = $Conexao->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
//     // var_dump($rs);
//     echo 'Conexão Mssql ok!<br>';
//     // $query      = $Conexao->query("SELECT nome, preco, quantidade FROM produto");
//     // $produtos   = $query->fetchAll();

//  }catch(Exception $e){

//     echo $e->getMessage();
//     exit;

//  }

//  $testWatch = 2;
//  var_dump($testWatch);
 
//  $a = new TesteOne();

// var_dump($_SESSION);
var_dump($_GET);

echo "AAA888";

// phpinfo();