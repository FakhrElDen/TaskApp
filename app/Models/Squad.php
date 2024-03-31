<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Squad extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'position',
    ];

    public function listingSquad()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrSquad = $this->get();
        foreach ($arrSquad as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        return $arrSquad;
    }

    public function createSquad($input)
    {
        $image = $input['image'];
        $imageName = $image->getClientOriginalName();
        $image->move('storage/squad', $imageName);
        $input['image'] = "squad/" . $imageName;
        $result = $this->create($input);
        return $result;
    }

    public function updateSquad($input, $squad_id)
    {
        if (array_key_exists('image', $input)) {
            $image = $input['image'];
            $imageName = $image->getClientOriginalName();
            $image->move('storage/squad', $imageName);
            $input['image'] = "squad/" . $imageName;
        }
        $result = $this->find($squad_id)->update($input);
        return $result;
    }

    public function viewSquad($squad_id)
    {
        $App_Media_URL = env('App_Media_URL');
        $squad = $this->where('id', $squad_id)->first();
        $squad['image'] = $App_Media_URL . $squad['image'];
        return $squad;
    }

    public function deleteSquad($squad_id)
    {
        $result = $this->where('id', $squad_id)->delete();
        return $result;
    }
}
