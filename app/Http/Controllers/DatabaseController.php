<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Models\Query;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databases = Database::orderby('id', 'ASC')->paginate(20);
        return view('front.project.project-1.project', compact('databases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('front.project.project-1.create-database');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'host' => 'required', //|unique:databases
            'port' => 'required',
            'dbname' => 'required|unique:databases',
            'username' => 'required',
            //'password' => 'required',
        ]);
        $database = new Database();
        try {
            $database->create($request->all());
        } catch (Exception $exception) {

            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "ذخیره ی دیتابیس کار جدید با موفقیت انجام شد";
        return redirect()->back()->with('success', $msg);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function show(Database $database)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function edit(Database $database)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Database $database)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function destroy(Database $database)
    {
        //
    }

    public function select(Database $database)
    {
        //
        return view('front.project.project-1.database', compact('database'));
    }

    public function storequery(Request $request, Database $database)
    {
        //dd($request->request);
        $query = new Query();

        try {
            $query->create($request->all());
        } catch (Exception $exception) {

            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "ذخیره ی کوئری با موفقیت انجام شد";
        return redirect()->back()->with('success', $msg);
        //$query2 = Query::orderby('id', 'ASC')->paginate(20);
        //$query2 = $request;
        //return view('front.project.project-1.database-output', compact('query1', 'database'));
    }
    public function runquery(Query $query, Database $database)
    {

        return view('front.project.project-1.database-output', compact('query', 'database'));
    }
}
