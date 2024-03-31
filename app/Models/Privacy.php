<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Privacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'privacy',
    ];

    public function listingPrivacy()
    {
        $privacy = $this->first();
        return $privacy;
    }

    public function createPrivacy($input)
    {
        $result = $this->create($input);
        return $result;
    }

    public function viewPrivacy()
    {
        $privacy = $this->first();
        return $privacy;
    }

    public function editPrivacy($privacy_id)
    {
        $privacy = $this->where('id', $privacy_id)->first();
        return $privacy;
    }

    public function updatePrivacy($input, $privacy_id)
    {
        $result = $this->find($privacy_id)->update($input);
        return $result;
    }

    public function deletePrivacy($privacy_id)
    {
        $result = $this->where('id', $privacy_id)->delete();
        return $result;
    }
}
