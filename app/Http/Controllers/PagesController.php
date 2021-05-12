<?php

namespace App\Http\Controllers;
use Illuminate\Http\middleware;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        return view(pages.register);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function jobs()
    {
        return view('pages.jobs');
    }

    public function login()
    {
        return view('pages.login');
    }
    public function register()
    {
        return view('pages.register');
    }
    public function howit()
    {
        return view('pages.howitworks');
    }

    public function faq()
    {
        return view('pages.faq');
    }
    
    public function regions()
    {
        return view('pages.regions');
    }
    
    public function terms()
    {
        return view('pages.terms');
    }
    
    public function privacy()
    {
        return view('pages.privacy');
    }
    
    public function sitemap()
    {
        return view('pages.sitemap');
    }
    
    public function post()
    {
        return view('pages.post-ad')->middleware('auth');
    }
    
    public function categories()
    {
        return view('pages.categories');
    }
    
    public function classified()
    {
        return view('pages.all-classifieds');
    }
    
    public function single()
    {
        return view('pages.single');
    }
    
    public function mobile()
    {
        return view('pages.mobileapp');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
