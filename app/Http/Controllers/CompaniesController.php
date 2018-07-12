<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $company = Company::all();
        return view('pages.company.index')->withCompanys($company);
    }

    public function create()
    {
        return view('pages.company.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'logo' => 'required|image|mimes:jpeg,bmp,png,jpg'
        ));

        $compa = new Company()
        {
            $compa->name = $request->name;
            $compa->email = $request->email;

            if ($request->hasFile('logo')) {
                $image = $request->file('default_image');
                $fileName = Str::random(10).'.'.$image->getClientOriginalExtension();
                $location = 'images/'.$fileName;
                Image::make($image)->insert('images/newmerkov.png')->save($location);

                $compa->default_image = $fileName;
            }

            $compa->save();
        }
    }
}
