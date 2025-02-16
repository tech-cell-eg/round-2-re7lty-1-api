<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    use ApiResponseTrait; 

    
    public function index()
    {
        try {
            $comments = Comment::with('user')->latest()->get(); 

            return $this->successResponse($comments, "Comments retrieved successfully!");
        } catch (\Exception $e) {
            return $this->errorResponse("Failed to retrieve comments", 500);
        }
    }
}
