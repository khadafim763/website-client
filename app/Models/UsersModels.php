<?php

namespace App\Models;

use CodeIgniter\Model;
// use \config\Database;

class UsersModels extends Model
{
    protected $table = 'Users';
    protected $useTimestamps = true;
    // public function get_Users($username, $password)
    // {
    //     return $this->db->table('Users')
    //         ->where(array('username' => $username, 'password' => $password))
    //         ->get()->getRowArray();
    // }
}
