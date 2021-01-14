<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrillsController extends Controller
{
  public function index(){
        $drills = Drill::all();
        return view('drills.index', ['drills' => $drills]);
    }

  public function new()
  {
      return view('drills.new');
  }


public function create(Request $request)
  {
      $request->validate([
          'title' => 'required|string|max:255',
          'category_name' => 'required|string|max:255',
          'problem0' => 'required|string|max:255',
          'problem1' => 'string|max:255',
          'problem2' => 'string|max:255',
          'problem3' => 'string|max:255',
          'problem4' => 'string|max:255',
          'problem5' => 'string|max:255',
          'problem6' => 'string|max:255',
          'problem7' => 'string|max:255',
          'problem8' => 'string|max:255',
          'problem9' => 'string|max:255',
      ]);
  }
}

public function destroy($id)
{
    // GETパラメータが数字かどうかをチェックする
    if(!ctype_digit($id)){
        return redirect('/drills/new')->with('flash_message', __('Invalid operation was performed.'));
    }

    $drill = Drill::find($id);
     $drill->delete();

    // こう書いた方がスマート
    Drill::find($id)->delete();

    return redirect('/drills')->with('flash_message', __('Deleted.'));
}
