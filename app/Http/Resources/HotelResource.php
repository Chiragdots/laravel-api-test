<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
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
            'name' => $this->hotel_name,
            'average_rating' => number_format($this->reviews->avg('rating'),2),         // The average rating behalf on hotel reviews.
            'reviews' => ReviewResource::collection($this->whenLoaded('reviews')),        //Array Data for hotel reviews including ratings.
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}

// Returning format of HotelResource in Json.

// {
//     "success": true,
//     "data": {
//         "name": "Rodrigo Jakubowski I",
//         "average_rating": "3.00",
//         "reviews": [
//             {
//                 "review_title": "Ex sed et qui est.",
//                 "description": "Pigeon in a thick wood. 'The first thing I've got to?' she tried the effect of lying down.",
//                 "author": "Wyman Lebsack III",
//                 "rating": "5",
//                 "created_at": "10/11/2021"
//             }
//         ],
//         "created_at": "10/11/2021",
//         "updated_at": "10/11/2021"
//     },
//     "message": "Data found"
// }
