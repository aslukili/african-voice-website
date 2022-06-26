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
class NatRep extends DbModel
{
    public int $id = 0;
    public string $username = '';
    public string $full_name = '';
    public string $email = '';
    public string $country = '';
    public string $add_date = '';

    public static function tableName(): string
    {
        return 'responsibles';
    }

    public function attributes(): array
    {
        return ['username', 'full_name', 'email', 'country', 'add_date'];
    }

//    public function labels(): array
//    {
//        return [
//            'firstname' => 'First name',
//            'lastname' => 'Last name',
//            'email' => 'Email',
//            'password' => 'Password',
//            'passwordConfirm' => 'Password Confirm'
//        ];
//    }

    public function rules()
    {
        return [
            'username' => [self::RULE_REQUIRED],
            'full_name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'country' => [self::RULE_REQUIRED],
            'add_date' => [self::RULE_REQUIRED],
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

    public function delete(int $id)
    {
        return parent::delete($id);
    }

    public function update(int $id)
    {
        return parent::update($id);
    }

}