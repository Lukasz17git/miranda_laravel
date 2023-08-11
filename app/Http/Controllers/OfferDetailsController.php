<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class OfferDetailsController extends Controller
{
   public function index($id)
   {
      $room = Room::find($id);
      return view('offersdetails', ['room' => $room]);
   }
}
