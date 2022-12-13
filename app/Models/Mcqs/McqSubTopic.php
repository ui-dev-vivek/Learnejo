<?php

namespace App\Models\Mcqs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McqSubTopic extends Model
{
    use HasFactory;


    protected $table = 'mcq_sub_topic';

    protected $primaryKey = 'id';

    //A car model belongs to a car
    public function mcqTopic()
    {
        return $this->belongsTo(McqTopic::class);
    }
    public function mcqHeading()
    {
        return $this->hasMany(McqHeading::class);
    }
}