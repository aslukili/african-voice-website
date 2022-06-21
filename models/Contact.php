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
class Contact extends DbModel
{
    public int $id = 0;
    public string $full_name = '';
    public string $email = '';
    public string $message = '';

    public static function tableName(): string
    {
        return 'messages';
    }

    public function attributes(): array
    {
        return ['full_name', 'email', 'message' ];
    }

    public function rules()
    {
        return [
            'full_name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'message' => [self::RULE_REQUIRED],
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