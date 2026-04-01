<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model {
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'title', 'description', 'budget', 'status'];
    protected $useTimestamps = true;

    public function getJobById($id) {
        return $this->find($id);
    }

    public function getJobsByClient($client_id) {
        return $this->where('user_id', $client_id)->findAll();
    }

    public function getOpenJobs() {
        return $this->where('status', 'open')->findAll();
    }

    public function createJob($data) {
        $data['status'] = 'open';
        return $this->insert($data);
    }

    public function updateJob($id, $data) {
        return $this->update($id, $data);
    }

    public function closeJob($id) {
        return $this->update($id, ['status' => 'closed']);
    }

    public function deleteJob($id) {
        return $this->delete($id);
    }

    public function getAllJobs() {
        return $this->findAll();
    }
}