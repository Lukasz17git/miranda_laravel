<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use DateTime;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ContactController extends Controller
{
   public function index()
   {
      return view('contact');
   }

   public function store()
   {
      $review = new Review();
      $fullnameParts = explode(' ', request('fullname'), 2);

      $review->id =  Uuid::uuid4()->toString();
      $review->personName = $fullnameParts[0];
      $review->personLastname = $fullnameParts[1] ?? '';
      $review->personPhone = request('phone');
      $review->personEmail = request('email');
      $review->subject = request("Subject A");
      $review->comment = request('description');
      $review->sentAt = (new DateTime())->format('Y-m-d\TH:i:s.v\Z');
      error_log($review);
      $review->save();
      return;
   }
}
