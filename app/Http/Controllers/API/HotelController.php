<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\HotelResource;
use App\Models\Hotel;

class HotelController extends BaseController
{

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * this method use for get hotel details with reviews
     */
    public function getHotel($id)
    {
        $hotel = Hotel::active()->find($id);

        if ($hotel) return $this->sendResponse(new HotelResource($hotel), 'Data found');
        else return $this->sendError('Data not found.', ['error'=>'Unauthorised']);
    }

}
