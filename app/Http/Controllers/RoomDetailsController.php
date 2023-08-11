<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomDetailsController extends Controller
{
   public function index($id)
   {
      $room = Room::find($id);
      return view('details', ['room' => $room]);
   }
}
