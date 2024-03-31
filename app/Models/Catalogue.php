<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catalogue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'for',
        'language',
        'color',
        'discount',
        'responsive_switch',
        'label',
        'desktop_image',
        'tablet_image',
        'mobile_image',
        'package_id',
        'catalogue_link'
    ];

    public function listingCatalogues()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrCatalogues = $this->with(['package'])->get();
        foreach ($arrCatalogues as $value) {
            $value['desktop_image'] = $App_Media_URL . $value['desktop_image'];
            $value['tablet_image'] = $App_Media_URL . $value['tablet_image'];
            $value['mobile_image'] = $App_Media_URL . $value['mobile_image'];
        }
        return $arrCatalogues;
    }

    public function catalogueCategories()
    {
        $categories = array();
        $arrCatalogues = $this->get('for')->toArray();
        foreach ($arrCatalogues as $value) {
            array_push($categories, explode(",", $value['for']));
        }
        return $categories;
    }

    public function listingPersonalCatalogues()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrCatalogues = $this->where('package', "personal")->get();
        foreach ($arrCatalogues as $value) {
            $value['desktop_image'] = $App_Media_URL . $value['desktop_image'];
            $value['tablet_image'] = $App_Media_URL . $value['tablet_image'];
            $value['mobile_image'] = $App_Media_URL . $value['mobile_image'];
        }
        return $arrCatalogues;
    }
    public function listingBusinessCatalogues()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrCatalogues = $this->where('package', "business")->get();
        foreach ($arrCatalogues as $value) {
            $value['desktop_image'] = $App_Media_URL . $value['desktop_image'];
            $value['tablet_image'] = $App_Media_URL . $value['tablet_image'];
            $value['mobile_image'] = $App_Media_URL . $value['mobile_image'];
        }
        return $arrCatalogues;
    }
    public function listingEcommerceCatalogues()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrCatalogues = $this->where('package', "ecommerce")->get();
        foreach ($arrCatalogues as $value) {
            $value['desktop_image'] = $App_Media_URL . $value['desktop_image'];
            $value['tablet_image'] = $App_Media_URL . $value['tablet_image'];
            $value['mobile_image'] = $App_Media_URL . $value['mobile_image'];
        }
        return $arrCatalogues;
    }

    public function viewCatalogue($catalogue_id)
    {
        $App_Media_URL = env('App_Media_URL');
        $catalogue = $this->where('id', $catalogue_id)->first();
        $catalogue['desktop_image'] = $App_Media_URL . $catalogue['desktop_image'];
        $catalogue['tablet_image'] = $App_Media_URL . $catalogue['tablet_image'];
        $catalogue['mobile_image'] = $App_Media_URL . $catalogue['mobile_image'];
        return $catalogue;
    }

    public function showCatalogue($catalogue_id)
    {
        $App_Media_URL = env('App_Media_URL');
        $catalogue = $this->where('id', $catalogue_id)->first();
        $catalogue['color'] = explode(",", $catalogue['color']);
        $catalogue['for'] = explode(",", $catalogue['for']);
        $catalogue['desktop_image'] = $App_Media_URL . $catalogue['desktop_image'];
        $catalogue['tablet_image'] = $App_Media_URL . $catalogue['tablet_image'];
        $catalogue['mobile_image'] = $App_Media_URL . $catalogue['mobile_image'];
        return $catalogue;
    }

    public function createCatalogue($input)
    {

        $image = $input['desktop_image'];
        $imageName = $image->getClientOriginalName();
        $image->move('storage/catalogue', $imageName);
        $input['desktop_image'] = "catalogue/" . $imageName;

        $image = $input['tablet_image'];
        $imageName = $image->getClientOriginalName();
        $image->move('storage/catalogue', $imageName);
        $input['tablet_image'] = "catalogue/" . $imageName;

        $image = $input['mobile_image'];
        $imageName = $image->getClientOriginalName();
        $image->move('storage/catalogue', $imageName);
        $input['mobile_image'] = "catalogue/" . $imageName;

        $result = $this->create($input);
        return $result;
    }

    public function updateCatalogue($input, $catalogue_id)
    {
        if (array_key_exists('desktop_image', $input)) {
            $image = $input['desktop_image'];
            $imageName = $image->getClientOriginalName();
            $image->move('storage/catalogue', $imageName);
            $input['desktop_image'] = "catalogue/" . $imageName;
        }
        if (array_key_exists('tablet_image', $input)) {
            $image = $input['tablet_image'];
            $imageName = $image->getClientOriginalName();
            $image->move('storage/catalogue', $imageName);
            $input['tablet_image'] = "catalogue/" . $imageName;
        }
        if (array_key_exists('mobile_image', $input)) {
            $image = $input['mobile_image'];
            $imageName = $image->getClientOriginalName();
            $image->move('storage/catalogue', $imageName);
            $input['mobile_image'] = "catalogue/" . $imageName;
        }
        $result = $this->find($catalogue_id)->update($input);
        return $result;
    }

    public function deleteCatalogue($catalogue_id)
    {
        $result = $this->where('id', $catalogue_id)->delete();
        return $result;
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
