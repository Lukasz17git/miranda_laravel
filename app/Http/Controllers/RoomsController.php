<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{

   public function home()
   {
      $rooms = Room::all();
      //findorfail
      return view('index', ['rooms' => $rooms]);
   }

   public function rooms()
   {
      $rooms = Room::all();
      return view('rooms', ['rooms' => $rooms]);
   }

   public function room($id)
   {
      $room = Room::find($id);
      return view('details', ['room' => $room]);
   }

   public function roomslist()
   {
      $rooms = Room::all();
      return view('roomslist', ['rooms' => $rooms]);
   }

   public function offers()
   {
      $roomsWithOffers = Room::whereNotNull('discount')
         ->where('discount', '>', 0)
         ->get();
      // dd($roomsWithOffers);
      return view('offers', ['offerRooms' => $roomsWithOffers]);
   }

   public function offer($id)
   {
      $room = Room::find($id)
         ->where('discount', '>', 0)
         ->get();
      return view('offersdetails', ['room' => $room]);
   }
}
