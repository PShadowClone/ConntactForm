<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     *
     * contact's view package name
     */
    const PACKAGE_NAME = 'contact';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(ContactController::PACKAGE_NAME . '.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(ContactController::PACKAGE_NAME . '.create');
    }

    /**
     * Store a newly created contact in storage.
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        ContactUs::create($request->all());
        return redirect()->back()->with(SUCCESS, 'your message received');
    }

    public function fillDataTable(Request $request)
    {
        $contactUs = ContactUs::all();
        return response()->ajax(SUCCESS, 'data fetched successfully', $contactUs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
