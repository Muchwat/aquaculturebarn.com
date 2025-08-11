<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\WorkRecord;
use Illuminate\Http\Request;

class WorkRecordController extends Controller
{
    public function show(Request $request, WorkRecord $workrecord) {
        $workrecords = $workrecord::all();
        return view('work-record', compact('workrecords'));
    }
}
