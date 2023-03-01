<?php

namespace App\Http\Controllers;

use App\Models\Content;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan()
    {
        $datacontent = Content::all();
        return view('laporan.cetak_laporan', compact('datacontent'));
    }
}