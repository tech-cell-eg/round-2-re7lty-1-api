<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    use ApiResponseTrait; 
  
    public function index()
    {
        try {
            $plans = Plan::all(); 

            return $this->successResponse($plans, "Plans retrieved successfully!");
        } catch (\Exception $e) {
            return $this->errorResponse("Failed to retrieve plans", 500);
        }
    }
}


