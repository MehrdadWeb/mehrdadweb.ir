<?php

namespace App\Http\Controllers;

use App\Models\Project1;
use App\Models\Form;
use App\Models\Database;
use App\Models\Query;
use Illuminate\Http\Request;
use Exception;

class Project1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $queries = Query::all()->pluck('name', 'id');
        $forms = Form::all()->pluck('name', 'id');
        return view('front.project.project-1.register-query-form', compact('forms', 'queries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Form $form, Query $query)
    {
        //store in  form_query table in DataBase
        $messages = [
            'queries.required' => 'کوئری را انتخاب کنید.',
            'forms.required' => 'فرم را انتخاب کنید.',
        ];
        $validatedData = $request->validate([
            'queries' => 'required',
            'forms' => 'required'
        ], $messages);
        // dd($request);
        // dd($request->forms);
        // $form = new Form();
        // $i = 0;
        // do {
        //     $form->id = $request->forms[$i];
        //     $i = $i + 1;
        // } while ($request->forms[$i]);

        // $form->id = $request->forms[0];
        // $query->forms()->attach($request->forms);
        // $form->id = $query;
        // $form = $request->forms;
        // $form->id = $query->forms()->attach($request->forms);
        // $form->id = "7";
        try {
            // $form = $form->create($request->all());
            // $form->update($request->all());
            // $form->form_id = $request->forms;
            $arrlength = count($request->forms);
            for ($i = 0; $i < $arrlength; $i++) {
                $form->id = $request->forms[$i];
                $form->queries()->attach($request->queries);
            }

            // dd($form->id);
            // dd($request->forms);
            // $form->update($request->all());
            // $form->id = $request->forms;
            // $form->forms()->attach($request->forms);
            // $query->forms()->attach($request->forms);
            // $project->forms()->attach($request->forms);
        } catch (Exception $exception) {
            return redirect(route('project1.create'))->with('warning', $exception->getCode());
        }
        $msg = "ذخیره ی کوئری در فرم با موفقیت انجام شد.";
        return redirect(route('project1.create'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project1  $project1
     * @return \Illuminate\Http\Response
     */
    public function show(Project1 $project1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project1  $project1
     * @return \Illuminate\Http\Response
     */
    public function edit(Project1 $project1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project1  $project1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project1 $project1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project1  $project1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project1 $project1)
    {
        //
    }
}
