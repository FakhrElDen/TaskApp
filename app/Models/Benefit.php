<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Benefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'demand'
    ];

    public function listingBenefit()
    {
        $benefits = $this->with(['packages'])->get();
        return $benefits;
    }

    public function createBenefit($input)
    {
        $result = $this->create($input);
        return $result;
    }

    public function updateBenefit($input, $benefit_id)
    {
        $result = $this->find($benefit_id)->update($input);
        return $result;
    }

    public function viewBenefit($benefit_id)
    {
        $benefit = $this->where('id', $benefit_id)->first();
        return $benefit;
    }

    public function deleteBenefit($benefit_id)
    {
        $result = $this->where('id', $benefit_id)->delete();
        return $result;
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'plans', 'benefit_id', 'package_id')->withPivot('value');
    }
}
