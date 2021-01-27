<?php
namespace App\Http\Controllers;


use App\Task;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function main()
  {
    return view('tasks', [
        'tasks' => Task::orderBy('created_at', 'asc')->get()
    ]);
  }

  public function create(Request $request)
  {

 $this->validate($request, [
      'name' => 'required|max:255',
  ]);

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');

    }


  public function delete($id)
  {
    Task::findOrFail($id)->delete();

    return redirect('/');
  }


}
