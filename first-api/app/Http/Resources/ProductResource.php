<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    { //name representa o atributo do produto nesse caso.
        // então essa função serve como CONTROLE DE RETORNO, ou seja,
        // define o que vai retornar no array json.
         return [
            'name' => $this->name,
            'price' => $this->price,
            'slug' => $this->slug
        ];

        //retorna tudo que o json tem:
        //return $this->resource->toArray();
    }

    public function with($request) {
        return ['extra-single-data' => 'Retornar nesta chamada...'];
    }
  }

