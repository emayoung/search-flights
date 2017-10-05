<?php 

namespace App\Transformers;

use App\Models\APIResultModels\IATAModel;
use League\Fractal\TransformerAbstract;

class IATATransformer extends TransformerAbstract
{
    public function transform(array $iata)
    {
        $result = [
            'cityCode' => $iata['id'],
            'cityName' => $iata['title'],
            'airport' => $iata['yr'],
            'country' => $iata['author_name']
  ];
    }
}