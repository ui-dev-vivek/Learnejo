<?php

namespace App\Models;

use App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';

    protected $primaryKey = 'id';

    //A car model belongs to a car
    public function mcqHeading()
    {
        return $this->belongsTo(McqHeading::class);
    }
    public function mockTestHeading()
    {
        return $this->belongsTo(McqHeading::class);
    }
}