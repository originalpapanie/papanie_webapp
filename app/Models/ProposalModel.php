<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProposalModel extends Model
{
    protected $table = 'proposals';
    protected $fillable = [
        'job_id',
        'user_id',
        'status',
        'amount',
        'message',
    ];
    
    // Get all proposals for a specific job
    public static function getProposalsByJob($jobId)
    {
        return self::where('job_id', $jobId)->get();
    }
    
    // Create a new proposal
    public static function createProposal($data)
    {
        return self::create($data);
    }
    
    // Accept a proposal
    public function accept()
    {
        $this->status = 'accepted';
        $this->save();
    }
    
    // Reject a proposal
    public function reject()
    {
        $this->status = 'rejected';
        $this->save();
    }
}