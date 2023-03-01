<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funnel;
use App\Models\Content;

date_default_timezone_set('Asia/Jakarta');

class FunnelController extends Controller
{
    public function marketing()
    {
        $marketing = Funnel::with('id_data_content')->get();
        $content = Content::all();
        return view('marketing.funnel', compact('content', 'marketing'));
    }

    public function store(Request $request)
    {
        Funnel::create ([
            'id_data_content'     => $request->id_data_content,
            'level_content'       => $request->level_content,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        return redirect('funnel')
        ->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $marketing = Funnel::find($id);

        $marketing->id_data_content      = $request->id_data_content;
        $marketing->level_content        = $request->level_content;
        $marketing->updated_at           = date('Y-m-d H:i:s');

        $marketing->save();

        return redirect('/marketing')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $marketing = Funnel::find($id);

        $marketing->delete();

        return redirect('/marketing')->with('success', 'Data Berhasil Dihapus');
    }
}
