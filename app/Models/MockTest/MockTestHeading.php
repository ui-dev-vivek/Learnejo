<?php

namespace App\Models\MockTest;

use App\Models\Question;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MockTestHeading extends Model
{
    use HasFactory;
    protected $table = 'mock_test_heading';

    protected $primaryKey = 'id';

    //A car model belongs to a car
    public function mockTestSubTopic()
    {
        return $this->belongsTo(MockTestSubTopic::class);
    }
    public function Question()
    {
        return $this->hasMany(Question::class);
    }
}