<?php

class QueryBuilder
{

    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function selectAll($table)
    {

        $statement = $this->conn->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', : ', array_keys($parameters)),
        );

        try {

            $statement = $this->conn->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            echo "Something worng";
        }
    }
}
