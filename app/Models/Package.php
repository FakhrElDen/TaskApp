<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    public function listingPackage()
    {
        $packages = $this->get();
        return $packages;
    }

    public function listingPackagesCatalogue()
    {
        $packages = $this->with(['catalogues'])->get();
        return $packages;
    }

    public function getPackageWithBenefit($package_id)
    {
        $packages = $this->where('id', $package_id)->with(['benefits'])->get();
        return $packages;
    }

    public function createPackage($input)
    {
        $result = $this->create($input);
        return $result;
    }

    public function updatePackage($input, $package_id)
    {
        $result = $this->find($package_id)->update($input);
        return $result;
    }

    public function viewPackage($package_id)
    {
        $package = $this->where('id', $package_id)->first();
        return $package;
    }

    public function deletePackage($package_id)
    {
        $result = $this->where('id', $package_id)->delete();
        return $result;
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefit::class, 'plans', 'package_id', 'benefit_id')->withPivot('value');
    }

    public function catalogues()
    {
        return $this->hasMany(Catalogue::class);
    }
}
