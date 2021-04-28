<?php

class DBLibrary implements IDBFunctions{

    private $db;
    private $sql;

    private $whereInstanceCounter = 0;
    private $valueBag = [];
    private $table;
    private $insertValues;

    public function __construct($driver, $user, $password, $options=null){
        try{
            $this->db = new PDO($driver,$user,$password);
        } catch(PDOException $error){
            echo $error->getMessage();
        }
    }

    public function select(Array $fieldList=null){
        $this->sql = 'SELECT ';
        
        if($fieldList === null){
             $fieldList = '*';
             $this->sql .= $fieldList;
        } else {
             $contents = count($fieldList)-1;
             $count = 0; 
             foreach($fieldList as $field){
                $this->sql .= $field;  
                if($count < $contents)
                   $this->sql .= ', ';
                   
                $count++;   
             }  
        }

        $this->sql .= ' ';

        return $this;
    }

    public function table($table){
        $this->table = $table;
        return $this;   
    }


    public function from($table){
        $this->sql .= 'from '.$table;
        return $this;
    }

    public function get(){
        $recordset = $this->_runGetQuery(__METHOD__); 
        return $recordset;
    }

    public function getAll(){    
        $recordset = $this->_runGetQuery(__METHOD__);  
        return $recordset;
    }

    private function _runGetQuery($getMethod){
        $this->sql .= ';';
        $dbStatement = $this->db->prepare($this->sql);
        
        if($this->valueBag){
           $dbStatement->execute($this->valueBag);
           $this->valueBag = [];
        }
        else
           $dbStatement->execute();   
        
        if($getMethod === 'DBLibrary::get')
           $recordset = $dbStatement->fetch(PDO::FETCH_BOTH); 
        elseif($getMethod === 'DBLibrary::getAll')   
           $recordset = $dbStatement->fetchAll(PDO::FETCH_BOTH);

        $whereInstanceCounter = 0;

        return $recordset;
    }

    public function where(){
        if(func_num_args() <= 1){
            throw new Exception('Expecting 2 to 3 parameters. Less than 2 parameters encountered.');
        }

        if(func_num_args() == 2){
            $field = func_get_arg(0);
            $operator = '=';
            $value = func_get_arg(1);
        } elseif(func_num_args() == 3) {
            $field = func_get_arg(0);
            $operator = func_get_arg(1);
            $value = func_get_arg(2);            
        } 
            
        $this->_runWhere($field, $operator, $value, __METHOD__);

        return $this;
    }

    public function whereOr(){
        if(func_num_args() <= 1){
            throw new Exception('Expecting 2 to 3 parameters. Less than 2 parameters encountered.');
        }

        if(func_num_args() == 2){
            $field = func_get_arg(0);
            $operator = '=';
            $value = func_get_arg(1);
        } elseif(func_num_args() == 3) {
            $field = func_get_arg(0);
            $operator = func_get_arg(1);
            $value = func_get_arg(2);            
        }

        $this->_runWhere($field, $operator, $value, __METHOD__);

        return $this; 
    }

    private function _runWhere($field, $operator, $value, $whereMethod){

        if($this->whereInstanceCounter > 0){
            if($whereMethod === 'DBLibrary::where')
                $this->sql .= ' and ';
            elseif($whereMethod === 'DBLibrary::whereOr')
                $this->sql .= ' or ';

            $this->sql .= $field.' '.$operator.' ?';
        } else {
            $this->sql .= ' where '.$field.' '.$operator.' ?';
        }
        
        $this->valueBag[] = $value;
        $this->whereInstanceCounter++;
    }

    public function showQuery(){
        return $this->sql;
    }

    public function showValueBag(){
        return $this->valueBag;
    }




    public function createTableMap(){
        $this->sql = "CREATE TABLE `map`(`mapID` int PRIMARY KEY AUTO_INCREMENT, `mapName` varchar(255));";
        return $this;
    }
    public function createTableTile(){
        $this->sql = "CREATE TABLE `tile`(`tileID` int PRIMARY KEY AUTO_INCREMENT, `mapID` int,`passable` int, `encounter` int);";
        return $this;
    }

    public function addMap(array $mapName)
    {
        $this->sql = "INSERT INTO $this->table VALUES(null,?);";
        
        $dbStatement = $this->db->prepare($this->sql);

        $dbStatement->execute($mapName);
    }
    public function addTile(int $mapID, int $passable, int $encounter, string $imgPath)
    {
        $this->sql = "INSERT INTO $this->table VALUES(null,?,?,?,?);";
        
        $dbStatement = $this->db->prepare($this->sql);
        $res = [$mapID,$passable,$encounter,$imgPath];
        $dbStatement->execute($res);
    }
    public function addSave(int $mapID,int $tileID)
    {
        $this->sql = "INSERT INTO $this->table VALUES(null,?,?);";
        
        $dbStatement = $this->db->prepare($this->sql);
        $res = [$mapID,$tileID];
        $dbStatement->execute($res);
    }
    public function update(array $fieldList, array $valueList)
    {
        
        $this->sql = "UPDATE $this->table SET ";
        for($i=0;$i<=count($fieldList)-1;$i++){
            $this->sql .= "$fieldList[$i]='$valueList[$i]',";
        }
        $this->sql .= "$fieldList[1]='$valueList[1]' ";
        $dbStatement = $this->db->prepare($this->sql);
        $dbStatement->execute();
        return $this;
    }
    public function delete()
    {
        $this->whereInstanceCounter=0;
        $this->sql = "DELETE ";
        return $this;
    }
    public function innerJoin(string $t2, string $column){
        $this->sql = "SELECT * from $this->table INNER JOIN $t2 as table2 on $this->table.$column = table2.$column";
        return $this;
    }
    public function leftJoin(string $t2, string $column){
        $this->sql = "SELECT * from $this->table LEFT JOIN $t2 as table2 on $this->table.$column = table2.$column";
        return $this;
    }
    public function rightJoin(string $t2, string $column){
        $this->sql = "SELECT * from $this->table RIGHT JOIN $t2 as table2 on $this->table.$column = table2.$column";
        return $this;
    }
    
}
