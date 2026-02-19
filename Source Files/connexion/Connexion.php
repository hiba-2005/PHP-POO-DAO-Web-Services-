<?php
class Connexion {

  private PDO $pdo;

  public function __construct() {

    $config = [
      'host' => 'localhost',
      'dbname' => 'school1',
      'user' => 'root',
      'pass' => ''
    ];

    $dsn = sprintf(
      "mysql:host=%s;dbname=%s;charset=utf8mb4",
      $config['host'],
      $config['dbname']
    );

    try {
      $this->pdo = new PDO($dsn, $config['user'], $config['pass']);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
      exit("Connexion échouée : " . $ex->getMessage());
    }
  }

  public function getConnexion(): PDO {
    return $this->pdo;
  }
}
