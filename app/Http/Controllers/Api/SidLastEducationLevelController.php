<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FieldResource;
use Illuminate\Http\Request;

class SidLastEducationLevelController extends Controller
{
    // index
    public function index()
    {
        $lastEducationSid = \App\Models\SidLastEducationLevel::all();

        return new FieldResource(true, 'All list of Last Education Field of SID Standards', $lastEducationSid);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'This operation is not permitted through the public API.',
            403
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'This operation is not permitted through the public API.',
            403
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'message' => 'This operation is not permitted through the public API.',
            403
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => 'This operation is not permitted through the public API.',
            403
        ]);
    }
}
