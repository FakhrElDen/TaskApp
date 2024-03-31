<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'size',
    ];

    public function deleteSlider($slider_id)
    {
        $result = $this->where('id', $slider_id)->delete();
        return $result;
    }

    public function createSlider($input)
    {
        $image = $input['image'];
        $imageName = $image->getClientOriginalName();
        $image->move('storage/slider', $imageName);
        $input['image'] = "slider/" . $imageName;
        $result = $this->create($input);
        return $result;
    }

    public function listingSliders()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrSliders = $this->where('size', "1920px")->get();
        foreach ($arrSliders as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        return $arrSliders;
    }
    
    public function listingDesktopSliders()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrSliders = $this->where('size', "1366px")->get();
        foreach ($arrSliders as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        return $arrSliders;
    }
    
    public function listingTabletSliders()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrSliders = $this->where('size', "tablet")->get();
        foreach ($arrSliders as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        return $arrSliders;
    }

    public function listingMobileSliders()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrSliders = $this->where('size', "mobile")->get();
        foreach ($arrSliders as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        return $arrSliders;
    }

    public function viewSlider($slider_id)
    {
        $App_Media_URL = env('App_Media_URL');
        $slider = $this->where('id', $slider_id)->first();
        $slider['image'] = $App_Media_URL . $slider['image'];
        return $slider;
    }

    public function updateSlider($input, $slider_id)
    {
        $image = $input['image'];
        $imageName = $image->getClientOriginalName();
        $image->move('storage/slider', $imageName);
        $input['image'] = "slider/" . $imageName;
        $result = $this->find($slider_id)->update($input);
        return $result;
    }
}
