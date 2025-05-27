<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sid\Artikel;

class SidArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::with('kategori')->where('enabled', 1);

        if ($request->has('tipe') && !empty($request->tipe)) {
            $query->where('tipe', $request->tipe);
        }

        $artikels = $query->paginate(10);

        return \App\Http\Resources\Sid\ArtikelResource::collection($artikels);
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
