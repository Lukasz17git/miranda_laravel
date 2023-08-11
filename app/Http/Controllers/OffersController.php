<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class OffersController extends Controller
{
   public function index()
   {
      $roomsWithOffers = Room::whereNotNull('discount')
         ->where('discount', '>', 0)
         ->get();
      // dd($roomsWithOffers);
      return view('offers', ['offerRooms' => $roomsWithOffers]);
   }
}
