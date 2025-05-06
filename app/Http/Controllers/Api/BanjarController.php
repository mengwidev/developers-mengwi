<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FieldResource;
use App\Models\Banjar;
use Illuminate\Http\Request;

class BanjarController extends Controller
{
    // GET all banjar lists
    public function index()
    {
        $banjar = Banjar::all();

        return new FieldResource(true, 'All list of banjars', $banjar);
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
