<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
public function create()
{
    return view('create');

}
    public function Store(Request $request)
    {
      $election=Election::create($request->all());
      return redirect('Index');

    }
    public function Index()
    {
        $data=Election::all();
        return view ('Index',compact('data'));

    }
    public function edit($id)
    {
        $data=Election::find($id);
        return view('edit',compact('data'));

    }
    public function update(Request $request , Election $election)
    {

        $election->update($request->all());
        return redirect('Index');

    }
    public function delete(Election $election)
    {

        $election->delete();
        return redirect('Index');

    }
}
