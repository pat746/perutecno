<?php

class Database {
  private static $host = "ws1305067-server.mysql.database.azure.com";
  private static $dbname = "tecnoperu";
  private static $username = "xuqvioqtvv@ws1305067-server";
  private static $password = "mUW7y$BCKojQJf5p";
  private static $charset = "utf8mb4";
  private static $conexion = null;

  public static function getConexion() {
    if (self::$conexion === null) {
      try {
        $ssl_ca = __DIR__ . "/../ssl/BaltimoreCyberTrustRoot.crt.pem";

        
      // Opción sin SSL para prueba temporal
      $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=" . self::$charset;
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
      ];


        self::$conexion = new PDO($dsn, self::$username, self::$password, $options);

      } catch (PDOException $e) {
        throw new PDOException("Error en conexión: " . $e->getMessage());
      }
    }

    return self::$conexion;
  }

  public function desconectar() {
    self::$conexion = null;
  }
}
