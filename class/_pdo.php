<?php

/**
 * Classe implémentant le singleton pour PDO

 */

class PDO2 extends PDO {

    private static $_instance_global;

    /* Constructeur : héritage public obligatoire par héritage de PDO */
    public function __construct( ) {

    }
    // End of PDO2::__construct() */

    /* Singleton */
    public static function getInstanceGlobal() {

        if (!isset(self::$_instance_global)) {

            try {
                $opt = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                );
                self::$_instance_global = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD, $opt);

            } catch (PDOException $e) {

                echo $e;
            }
        }
        return self::$_instance_global;
    }


    // End of PDO2::getInstance() */
}