<?php

namespace App\Models\Mcqs;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McqHeading extends Model
{
    use HasFactory;
    protected $table = 'mcq_heading';

    protected $primaryKey = 'id';

    //A car model belongs to a car
    public function mcqSubTopic()
    {
        return $this->belongsTo(McqSubTopic::class);
    }
    public function Question()
    {
        return $this->hasMany(Question::class);
    }
}