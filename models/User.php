<?php
/**
 * User: aslukili
 * Date: 6/10/2022
 * Time: 9:15 AM
 */

namespace app\models;


use app\core\db\DbModel;
use app\core\UserModel;

/**
 * Class User
 *
 * @author  Abdeslam Loukili <abdeslam.edu@gmail.com>
 * @package app\models
 */
class User extends UserModel
{
    public int $id = 0;
    public string $full_name = '';
    public string $email = '';
    public string $username = '';
    public string $country = '';
    public string $password = '';
    public string $password_confirm = '';
    public string $join_date = '';
    public string $role = '';

    public static function tableName(): string
    {
        return 'users';
    }

    public function attributes(): array
    {
        return ['full_name', 'email', 'username', 'country', 'password', 'join_date'];
    }


    public function rules()
    {
        return [
            'full_name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'username' => [self::RULE_REQUIRED, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'country' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'password_confirm' => [[self::RULE_MATCH, 'match' => 'password']],
            'join_date' => [self::RULE_REQUIRED],
        ];
    }

    public function save()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }



    public function findOne(int $id)
    {
        return parent::findOne($id);
    }

    public static function getOne($where)
    {
        return parent::getOne($where);
    }

    public function getCount()
    {
        return parent::getCount();
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

    public function getDisplayName(): string
    {
        return $this->username;
    }

    public function getDisplayFullName(): string
    {
        return $this->full_name;
    }
}