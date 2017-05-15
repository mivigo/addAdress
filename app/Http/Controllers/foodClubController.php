<?php

namespace App\Http\Controllers;

use App\Addresses;
use Validator;
use Illuminate\Http\Request;

class foodClubController extends Controller
{
    public function  index () {
        $addresses = Addresses::orderBy('name')->get();
//        $addresses = Addresses::orderBy('name_id')->get();
        return view('foodClub.index', compact('addresses'));
    }

    public function store (Request $request) {

//        $rules = [
//            'name'  => 'required|min:3',
//            'city' => 'required',
//            'area'  => 'required',
//        ];
//        $validate = Validator::make($request->input(), $rules);
//
//        if ( $validate->fails() ) {
//            flash()->error('Validate errors');
//            return view('foodClub.index')->with('flash_message');
//        }

//        flash()->success('Successfully Created');

        Addresses::create($request->all());

        return $this->index();
    }
}
