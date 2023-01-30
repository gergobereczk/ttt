<?php


class Game {


    public $table = array(
        array("", "", ""),
        array("", "", ""),
        array("", "", "")
    );
    
 

    function __construct()
    {
        $this->clearTable();

    }
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Game();

        }

        return self::$instance;
    }
    public $currentPlayer = "";


    public function clearTable()
    {
        for ($currentRow = 0; $currentRow < count($this->table); $currentRow++) {
            for ($currentColumn = 0; $currentColumn < count($this->table[$currentRow]); $currentColumn++) {
                $this->table[$currentRow][$currentColumn] = "E";
            }
        }
    }
    public function addTable($table)
    {
        $this->table = $table;
    }
    public function getTable()
    {
        return $this->table;
    }
    public function getBlock($row, $column)
    {
        return $this->table[$row][$column];
    }
    public function setBlock($row, $column, $player)
    {
        if ($this->table[$row][$column] == "E") {
            $this->table[$row][$column] = $player;
            return true;
        } else {
            return false;
        }
    }

    public function gameLoop()
    {
        //here comes the loop
    }

}




?>
