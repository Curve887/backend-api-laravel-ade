<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() 
    {
        return response()->json(Skill::all(),200);
    }

    public function store (Request $request) 
    {
        $skill = Skill::create($request->only(['name', 'percentage']));
        return response()->json($skill, 201);
    }
}
