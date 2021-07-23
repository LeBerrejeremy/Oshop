<?php

use Utils\Database;

class CoreModel{

    protected static $table;
    protected int $id;
    protected string $name;
    protected $created_at;
    protected $updated_at;
     

    public function __construct(array $data)
    {

        foreach($data as $key => $value) :
            if($value == null) :
                $value="champ à compléter";
            endif;
            $this->$key = $value;
        endforeach;
    }

    public static function find( int $id )
    {

        $pdo = Database::getPDO();
        $sql = "SELECT * FROM ". static::$table ." WHERE id =".$id;
        $statement = $pdo->query($sql);
        $model = $statement->fetch(PDO::FETCH_ASSOC);

        if($model === false) : 
            exit( static::$table ." not found !");
        endif;
        
        return new static($model);
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM ".static::$table ;
        $statement = $pdo->query($sql);
        $models = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($models === false) : 
            exit(static::$table ." not found !");
        endif;

        $listModelsArray = [];
        foreach($models as $model){
            $listModelsArray[] = new static($model);
        }

        return $listModelsArray;
    }

    public static function findLastFive()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM ". static::$table ." ORDER BY id DESC LIMIT 5";
        $statement = $pdo->query($sql);
        $models = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($models === false) : 
            exit(static::$table ." not found !");
        endif;

        $listModelsArray = [];
        foreach($models as $model){
            $listModelsArray[] = new static($model);
        }

        return $listModelsArray;
    }

    //Getters
    public function getId()          { return $this->id; }
    public function getName()        { return $this->name; }
    public function getCreatedAt()   { return $this->created_at; }
    public function getUpdatedAt()   { return $this->updated_at; }

    //Setter
    //A Conserver dans les models

}