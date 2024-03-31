<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
    ];

    public function listingFaq()
    {
        $arrFaq = $this->get();
        return $arrFaq;
    }

    public function createFaq($input)
    {
        $result = $this->create($input);
        return $result;
    }

    public function updateFaq($input, $faq_id)
    {
        $result = $this->find($faq_id)->update($input);
        return $result;
    }

    public function viewFaq($faq_id)
    {
        $faq = $this->where('id', $faq_id)->first();
        return $faq;
    }

    public function deleteFaq($faq_id)
    {
        $result = $this->where('id', $faq_id)->delete();
        return $result;
    }
}
