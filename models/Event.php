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
class Event extends DbModel
{
    public int $id = 0;
    public string $title = '';
    public string $sub_title = '';
    public string $description = '';
    public string $responsible = '';
    public string $seats = '';
    public string $starting_date = '';

    public static function tableName(): string
    {
        return 'events';
    }

    public function attributes(): array
    {
        return ['title', 'sub_title', 'description', 'responsible', 'seats', 'starting_date'];
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
            'title' => [self::RULE_REQUIRED],
            'sub_title' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED],
            'starting_date' => [self::RULE_REQUIRED],
        ];
    }

    public function save()
    {
        return parent::save();
    }

    public function getAll()
    {
        return parent::getAll();
    }

//    public function getDisplayName(): string
//    {
//        return $this->firstname . ' ' . $this->lastname;
//    }
}