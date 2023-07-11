<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\branches;
use App\Models\orders;

class AdminController extends Controller
{
    public function view_branches()
    {
        $data = branches::all();
        return view('admin.branches', compact('data'));
    }
    public function add_branches(Request $request)
    {
        $data = new branches;

        $data->branch_name = $request->branch_name;

        $data->save();

        return redirect()->back()->with('message', 'Branch Added Successfully');
    }

    public function delete_branches($id)
    {
        $data = branches::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Branch Deleted Successfully');
    }

    public function add_order(Request $request)
    {
        $orders = new orders;
        $orders->Sender = $request->Sender;
        $orders->Receiver = $request->Receiver;
        $orders->receivers_phone = $request->receivers_phone;
        $orders->destination_branch = $request->destination_branch;
        $orders->pstatus = $request->pstatus;
        $orders->dstatus = $request->dstatus;
        $orders->save();
        return redirect()->back()->with('message', 'order Added Successfully');
    }

    public function view_order()
    {
        $branches = branches::all();
        return view('admin.order', compact('branches'));
    }
}
