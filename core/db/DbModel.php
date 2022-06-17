<?php

/**
 * User: aslukili
 * Date: 7/10/2020
 * Time: 9:19 AM
 */

namespace app\core\db;

use app\core\Application;
use app\core\Model;

/**
 * Class DbModel
 *
 * @author  Abdeslam Loukili <abdeslam.edu@gmail.com>
 * @package app\core
 */
abstract class DbModel extends Model
{
    public $dataList = [];
    public $count;
    abstract public static function tableName(): string;

    static public function primaryKey(): string
    {
        return 'id';
    }

    static public function role(): string
    {
        return 'role';
    }

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn ($attr) => ":$attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (" . implode(",", $attributes) . ") 
                VALUES (" . implode(",", $params) . ")");
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public static function prepare($sql): \PDOStatement
    {
        return Application::$app->db->prepare($sql);
    }

    public function getAll()
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName ORDER BY id DESC");
        $statement->execute();
        $this->dataList =  $statement->fetchAll();
        return true;
    }

    public function findOne(int $where)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName where id = $where");
        $statement->execute();
        $this->dataList = $statement->fetchALL();
        return true;
    }

    // for selecting with email when logging in
    public static function getOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }

    public function delete(int $id)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("DELETE FROM $tableName WHERE id = $id");
        $statement->execute();
        return true;
    }

    public function update(int $id)
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => "$attr=:$attr", $attributes );
        $statement = self::prepare("UPDATE $tableName SET  
                   ".implode(',', $params)." WHERE id = $id");
        foreach($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }

    public function getCount()
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT count(*) FROM $tableName");
        $statement->execute();
        $this->count =  $statement->fetchColumn();
        return true;
    }
}
