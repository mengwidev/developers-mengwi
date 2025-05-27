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

        if ($request->filled('tipe')) {
            $query->where('tipe', $request->tipe);
        }

        if ($request->has('exclude_latest')) {
            $count = (int) $request->exclude_latest;
            if ($count > 0) {
                $latestQuery = Artikel::where('enabled', 1);

                if ($request->filled('tipe')) {
                    $latestQuery->where('tipe', $request->tipe);
                }

                $latestIds = $latestQuery
                    ->orderByDesc('tgl_upload')
                    ->limit($count)
                    ->pluck('id');

                if ($latestIds->isNotEmpty()) {
                    $query->whereNotIn('id', $latestIds);
                }
            }
        }

        $query->orderByDesc('tgl_upload');

        if ($request->filled('limit') && is_numeric($request->limit)) {
            $artikels = $query->limit((int) $request->limit)->get();
            return \App\Http\Resources\Sid\ArtikelResource::collection($artikels);
        }

        $artikels = $query->paginate(10);
        return \App\Http\Resources\Sid\ArtikelResource::collection($artikels);
    }

    public function latest(Request $request)
    {
        $query = Artikel::with('kategori')->where('enabled', 1);

        if ($request->filled('tipe')) {
            $query->where('tipe', $request->tipe);
        }

        $artikel = $query->orderByDesc('tgl_upload')->first();

        return new \App\Http\Resources\Sid\ArtikelResource($artikel);
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
