<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Condition extends Model
{
    use HasFactory;


    protected $fillable = [
        'condition',
    ];

    public function listingCondition()
    {
        $condition = $this->first();
        return $condition;
    }

    public function createCondition($input)
    {
        $result = $this->create($input);
        return $result;
    }

    public function viewCondition()
    {
        $condition = $this->first();
        return $condition;
    }

    public function editCondition($condition_id)
    {
        $condition = $this->where('id', $condition_id)->first();
        return $condition;
    }

    public function updateCondition($input, $condition_id)
    {
        $result = $this->find($condition_id)->update($input);
        return $result;
    }

    public function deleteCondition($condition_id)
    {
        $result = $this->where('id', $condition_id)->delete();
        return $result;
    }
}
