<?php

namespace App\Models\MockTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockTestSubTopic extends Model
{
    use HasFactory;

    protected $table = 'mock_test_sub_topic';

    protected $primaryKey = 'id';

    //A car model belongs to a car
    public function mockTestTopic()
    {
        return $this->belongsTo(MockTestTopic::class);
    }
    public function mockTestHeading()
    {
        return $this->hasMany(MockTestHeading::class);
    }
}
// NMG-I431-MH8P-4149