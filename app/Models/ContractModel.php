<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class ContractModel extends Model {
    protected $table = 'contracts';
    protected $fillable = ['freelancer_id', 'client_id', 'status', 'details'];

    public function getContract($id) {
        return $this->find($id);
    }

    public function createContract($data) {
        return $this->create($data);
    }

    public function complete($id) {
        $contract = $this->find($id);
        if ($contract) {
            $contract->status = 'completed';
            $contract->save();
            return $contract;
        }
        return null;
    }

    public function cancel($id) {
        $contract = $this->find($id);
        if ($contract) {
            $contract->status = 'canceled';
            $contract->save();
            return $contract;
        }
        return null;
    }

    public function getByFreelancer($freelancerId) {
        return $this->where('freelancer_id', $freelancerId)->get();
    }

    public function getByClient($clientId) {
        return $this->where('client_id', $clientId)->get();
    }
}