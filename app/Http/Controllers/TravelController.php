<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    use ApiResponseTrait; 

    
    public function index()
    {
        try {
            $travels = Travel::all(); 

            return $this->successResponse($travels, "Travels retrieved successfully!");
        } catch (\Exception $e) {
            return $this->errorResponse("Failed to retrieve travels", 500);
        }
    }
}
