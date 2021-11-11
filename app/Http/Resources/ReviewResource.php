<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'review_title' => $this->review_title,
            'description' => $this->description,
            'author' => $this->author,
            'rating' => $this->rating,
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
