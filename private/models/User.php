<?php

/**
 * User Model
 */

class User extends Model
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'gender',
        'rank',
        'password',
        'date'
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_department_id',
        'hash_password'
    ];
    public function validate($data)
    {
        $this->errors = array();
        if (empty($data['firstname']) || !preg_match('/^[a-zA-Z]+$/', $data['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name";
        }
        if (empty($data['lastname']) || !preg_match('/^[a-zA-Z]+$/', $data['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in last name";
        }
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }
        if (empty($data['phone']) || !filter_var($data['phone'], FILTER_VALIDATE_INT)) {
            $this->errors['phone'] = "Phone is not valid";
        }
        if (strlen($data['phone']) < 10) {
            $this->errors['phone'] = "Phone number must be at least 10 characters";
        }
        $genders = ['Male', 'Female'];
        if (empty($data['gender']) || !in_array($data['gender'], $genders)) {
            $this->errors['gender'] = "Gender is not valid";
        }
        $ranks = ['student', 'staff', 'admin', 'master'];
        if (empty($data['rank']) || !in_array($data['rank'], $ranks)) {
            $this->errors['rank'] = "Rank is not valid";
        }
        if (empty($data['password']) || $data['password'] != $data['password2']) {
            $this->errors['password'] = "The passwords do not match";
        }
        if (strlen($data['password']) <= 8) {
            $this->errors['password'] = "Passwords must be at least 8 characters";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data)
    {
        $data['user_id'] = strtolower($data['firstname'] . "." . $data['lastname']);
        while ($this->where('user_id', $data['user_id'])) {
            $data['user_id'] .= rand(10, 9999);
        }
        return $data;
    }
    public function make_department_id($data)
    {
        if (isset($_SESSION['USER']->department_id)) {
            $data['department_id'] = $_SESSION['USER']->department_id;
        }
        return $data;
    }
    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
