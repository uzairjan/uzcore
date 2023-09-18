<?php

declare(string_types =1);

namespace Magma\DatabaseConnection;
use PDO;

interface DatabaseConnectionInterface 
{
    /**
     * create a new database connection
     * 
     * @return PDO
     */
    public function open() : PDO;

    /**
     * Close database connection
     */

     public function close() : void;
}