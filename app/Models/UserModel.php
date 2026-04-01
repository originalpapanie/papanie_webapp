<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'role'];
    protected $beforeInsert = ['hashPassword'];

    public function hashPassword(array $data) {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
        }
        return $data;
    }

    public function createUser($data) {
        return $this->insert($data);
    }

    public function getUser($id) {
        return $this->where('id', $id)->first();
    }

    public function updateUser($id, $data) {
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        }
        return $this->update($id, $data);
    }

    public function deleteUser($id) {
        return $this->delete($id);
    }

    public function authenticate($username, $password) {
        $user = $this->where('username', $username)->first();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public function getUsers() {
        return $this->findAll();
    }
}