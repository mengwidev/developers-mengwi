<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FieldResource;
use Illuminate\Http\Request;
use App\Models\Religion;

class ReligionController extends Controller
{
    // index
    public function index()
    {
        $religion = Religion::all();

        return new FieldResource(true, 'All list of Religion fields', $religion);
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
