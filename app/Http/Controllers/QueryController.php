<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Models\Query;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;

class QueryController extends Controller
{
    /*create*/
    public function create()
    {
        // $forms = Form::all()->pluck('id');
        return view('front.project.project-1.query');
    }
    /*store*/
    public function store(Request $request)
    {
        //$databases = Database::orderby('id', 'ASC')->paginate(20);
        //return view('front.project.project-1.forms', compact('databases'));
        //dd($request->request);
        $messages = [
            'name' => 'فیلد عنوان را وارد نمایید',
            'query' => 'کوئری را وارد نمایید.'
        ];
        $validatedData = $request->validate([
            'name' => 'required|unique:forms',
            'query' => 'required',
        ], $messages);

        $query = new Query();
        try {

            // $sql = "SELECT * FROM $request->database WHERE id=$request->user_id";
            // $query->query = $sql;
            $query->create($request->all());
            //$query->database()->attach($request->database);
        } catch (Exception $exception) {
            return redirect()->back()->with('warning', $exception->getCode());
        }
        $msg = "ذخیره ی کوئری با موفقیت انجام شد.";
        return redirect()->back()->with('success', $msg);
    }

    public function run(Query $query, Database $database)
    {
        $queries = Query::orderby('id', 'ASC')->paginate(20);
        return view('front.project.project-1.database-output', compact('queries', 'database'));
    }
}
