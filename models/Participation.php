<?php
/**
 * User: aslukili
 * Date: 6/10/2022
 * Time: 9:15 AM
 */

namespace app\models;


use app\core\db\DbModel;

/**
 * Class Event
 *
 * @author  Abdeslam Loukili <abdeslam.edu@gmail.com>
 * @package app\models
 */
class Participation extends DbModel
{
    public string $user_fk = '';
    public string $event_fk = '';

    public static function tableName(): string
    {
        return 'participations';
    }

    public function attributes(): array
    {
        return ['user_fk', 'event_fk'];
    }

    public function rules()
    {
        return [
            'user_fk' => [self::RULE_REQUIRED],
            'event_fk' => [self::RULE_REQUIRED],
        ];
    }

    public function countRegisteredMembers($id)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT count(*) FROM $tableName WHERE event_fk = $id");
        $statement->execute();
        $this->count =  $statement->fetchColumn();
        return true;
    }

    public function getRegisteredMembers($id)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE event_fk = $id");
        $statement->execute();
        $this->dataList =  $statement->fetchAll();
        return true;
    }

    public function save()
    {
        return parent::save();
    }

    public function findOne(int $id)
    {
        return parent::findOne($id);
    }

    public function getAll()
    {
        return parent::getAll();
    }

    public function delete(int $id)
    {
        return parent::delete($id);
    }

    public function update(int $id)
    {
        return parent::update($id);
    }

}