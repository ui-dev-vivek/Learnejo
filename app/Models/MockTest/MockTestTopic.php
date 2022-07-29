<?php

namespace App\Models\MockTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockTestTopic extends Model
{
    use HasFactory;
    protected $table = 'mock_test_topic';

    protected $primaryKey = 'id';

    public function mockTestSubTopic()
    {
        return $this->hasMany(MockTestSubTopic::class);
    }
}