<?php

    if (!isDatabaseExists()) createDatabase();



    function isDatabaseExists()
    {
        $con = new PDO(DB_DRIVER . ':host=' . DB_HOST, DB_USER, DB_PASSWORD);
        $result = $con->query('SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = "' . DB_NAME . '"');
        return (bool) $result->fetchColumn();
    }

    function createDatabase()
    {
        $con = new PDO(DB_DRIVER . ':host=' . DB_HOST, DB_USER, DB_PASSWORD);
        $con->exec('CREATE DATABASE ' . DB_NAME);
    }

    function dbQuery($query, $data = array())
    {
        $con = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            if ($stm = $con->prepare($query)) {
            if ($stm->execute($data)) {
                $result = $stm->fetchAll(PDO::FETCH_ASSOC);
                if (is_array($result) && count($result) > 0) {
                    return $result;
                }
            }
        }
        return $con->lastInsertId();
    }

    function isTableExists($tablename)
    {
        return dbQuery(
            'SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = "' . DB_NAME . '" AND TABLE_NAME = "' . $tablename . '"'
        );
    }
