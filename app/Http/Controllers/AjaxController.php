<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getBranches(Request $request)
    {
        $branches = Company::find($request->company)->branches;
        return response()->json(['branches' => $branches]);
    }

    public function getWorkers(Request $request)
    {
        $workers = Branch::find($request->branch)->workers->load('rank');
        return response()->json(['workers' => $workers]);
    }
}
