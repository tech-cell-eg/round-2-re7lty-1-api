<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    use ApiResponseTrait;
    public function index()
    {
        try {
            $services = Service::all();

            return $this->successResponse($services, "Services retrieved successfully!");
        } catch (\Exception $e) {
            return $this->errorResponse("Failed to retrieve services", 500);
        }
    }
}
