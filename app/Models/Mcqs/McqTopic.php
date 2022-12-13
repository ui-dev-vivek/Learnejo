<?php

namespace App\Models\Mcqs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McqTopic extends Model
{
    use HasFactory;
    protected $table = 'mcq_topic';

    protected $primaryKey = 'id';

    public function mcqSubTopic()
    {
        return $this->hasMany(McqSubTopic::class);
    }
}