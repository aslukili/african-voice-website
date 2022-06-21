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
class Newsletter extends DbModel
{
    public string $email = '';

    public static function tableName(): string
    {
        return 'newsletter';
    }

    public function attributes(): array
    {
        return ['email'];
    }


    public function rules()
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
        ];
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

}