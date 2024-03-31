<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'benefit_id',
        'package_id',
    ];

    public function listingPlan()
    {
        $plans = $this->get('value');
        return $plans;
    }

    public function viewPlan($plan_id)
    {
        $plan = $this->where('id', $plan_id)->get();
        return $plan;
    }

    public function getBenefitValueId($benefit_id, $package_id)
    {
        $value = $this->where('benefit_id', $benefit_id)->where('package_id', $package_id)->get('value');
        return $value;
    }

    public function getPlanValue($package_id)
    {
        $value = $this->where('package_id', $package_id)->get('value');
        return $value;
    }

    public function createPlan($input)
    {
        $plan = $this->create($input);
        return $plan;
    }
}
