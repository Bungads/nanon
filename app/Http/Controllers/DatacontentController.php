<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

date_default_timezone_set('Asia/Jakarta');

class DatacontentController extends Controller
{
    public function content()
    {
        $datacontent = Content::all();
        return view('content.data', compact('datacontent'));
    }

    public function store(Request $request)
    {
        Content::create ([
            'nama_content'   => $request->nama_content,
            'deskripsi_content'   => $request->deskripsi_content,
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s'),
        ]);
        return redirect('data')
        ->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $datacontent = Content::find($id);
        $datacontent->nama_content          = $request->nama_content;
        $datacontent->deskripsi_content     = $request->deskripsi_content;
        $datacontent->updated_at            = date('Y-m-d H:i:s');
        $datacontent->save();
        return redirect('data')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $datacontent = Content::find($id);
        $datacontent->delete();
        return redirect('data')->with('success', 'Data Berhasil Dihapus');
    }
}
