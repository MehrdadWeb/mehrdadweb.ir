<?php
// portfolios بخش مدیریت 
//back end
namespace App\Http\Controllers\back;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::orderBy('id', 'ASC')->paginate(20);
        return view('back.services.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'فیلد نام خدمات را وارد نمایید'
        ];
        $validatedData = $request->validate([
            'name' => 'required',
        ], $messages);

        $service = new Service();
        try {
            $service->create($request->all());
        } catch (Exception $exception) {

            return redirect(route('admin.services.create'))->with('warning', $exception->getCode());
        }

        $msg = "ذخیره ی  خدمات جدید با موفقیت انجام شد";
        return redirect(route('admin.services'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('back.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {


        $messages = [
            'name.required' => 'فیلد نام خدمات را وارد نمایید'
        ];
        $validatedData = $request->validate([
            'name' => 'required',
        ], $messages);

        try {
            $service->update($request->all());
        } catch (Exception $exception) {

            return redirect(route('admin.services.edit'))->with('warning', $exception->getCode());
        }

        $msg = "بروزرسانی نمونه کار با موفقیت انجام شد";
        return redirect(route('admin.services'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        try {
            $service->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.services'))->with('warning', $exception->getCode());
        }

        $msg = "آیتم مورد نظر حذف گردید";
        return redirect(route('admin.services'))->with('success', $msg);
    }
    public function updatestatus(Service $service)
    {
        //
        if ($service->status == 1) {
            $service->status = 0;
        } else {
            $service->status = 1;
        }
        $service->save();
        $msg = " بروزرسانی با موفقیت انجام گردید .";
        return redirect(route('admin.services'))->with('success', $msg);
    }
}
