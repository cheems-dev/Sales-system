<?php

namespace App\Http\Controllers;

use App\Models\Detail;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::select('*')->join('sales', 'sales.id', '=', 'details.sale_id')->where('sales.user_id', Auth()->user()->id)->paginate();

        return view('details.index', compact('details'));
    }
}
