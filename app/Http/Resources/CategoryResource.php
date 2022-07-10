<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => new BlobResource($this->whenLoaded('image')),
            'visible' => $this->visible,
            'products' => ProductResource::collection($this->whenLoaded('products')),
        ];
    }
}
