<?php

namespace App\Http\Resources\Sid;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtikelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $tgl = \Carbon\Carbon::parse($this->tgl_upload);

        return [
            'id' => $this->id,
            'url' => sprintf(
                'https://mengwi-badung.desa.id/artikel/%s/%s/%s/%s',
                $tgl->format('Y'),
                $tgl->format('m'),
                $tgl->format('d'),
                $this->slug
            ),
            'tipe' => $this->tipe,
            'kategori' => $this->kategori->kategori ?? null,
            'hit' => $this->hit,
            'judul' => $this->judul,
            'isi' => $this->isi,
            'slug' => $this->slug,
            'tgl_upload' => $this->tgl_upload,
            'gambar' => $this->gambar,
            'gambar1' => $this->gambar1,
            'gambar2' => $this->gambar2,
            'gambar3' => $this->gambar3,
            'dokumen' => $this->dokumen,
            'link_dokumen' => $this->link_dokumen,
        ];
    }
}
