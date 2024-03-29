<?php

date_default_timezone_set("Asia/Taipei");

session_start();

class DB
{

    protected $dsn = "mysql:host=127.0.0.1;charset=utf8;dbname=school";
    protected $pdo;

    function __construct()
    {
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function dd($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    function _count($table, ...$arg)
    {
        $sql = "select count(*) from $table ";

        if (!empty($arg)) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {

                    $tmp[] = "`$key`='$value'";
                }

                $sql = $sql . " where " . join(" && ", $tmp);
            } else {

                $sql = $sql .  " where " . $arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql = $sql . " where " . $arg[1];
        }

        $rows = $this->pdo->query($sql)->fetchColumn();

        return $rows;
    }


    function getStudentData($school_num)
    {
        $sql = "SELECT * FROM `images` INNER JOIN `students` 
            ON `images`.`school_num` = `students`.`school_num` 
            WHERE `students`.`school_num` = {$school_num}";

        $sql_scores = "SELECT scores FROM `scores`,`students` 
                   WHERE `scores`.`school_num`=`students`.`school_num` 
                   AND `scores`.`school_num` = {$school_num}";

        $scores = $this->pdo->query($sql_scores)->fetchAll(PDO::FETCH_ASSOC);
        $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return [$rows, $scores];
    }

    function select_scores($math, $score_value, $school_num)
    {
        $sql = "SELECT `school_num`, `scores` 
        FROM scores 
        WHERE `scores` $math $score_value
        AND LEFT(`school_num`, 6) = LEFT('$school_num', 6);
    ";
        $select = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($select as $key => $value) {
            $_SESSION['select'][] = $value['school_num'];
        }
    }
}
