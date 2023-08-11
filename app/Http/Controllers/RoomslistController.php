<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomslistController extends Controller
{
   public function index()
   {
      $rooms = Room::all();
      return view('roomslist', ['rooms' => $rooms]);
   }
}
