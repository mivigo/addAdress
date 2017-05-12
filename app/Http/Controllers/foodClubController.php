<?php

namespace App\Http\Controllers;

use App\Addresses;
use Validator;
use Illuminate\Http\Request;

class foodClubController extends Controller
{
    public function  index () {
        return view('foodClub.index');
    }

    public function store (Request $request) {

        $rules = [
            'name'  => 'required|min:3',
            'city' => 'required',
            'area'  => 'required',
        ];

        $validate = Validator::make($request->input(), $rules);

        if ( $validate->fails() ) {
            flash()->error('Validate errors');
            return view('foodClub.index')->with('flash_message');
        }

        $food = Addresses::create($request->all());
        flash()->success('Successfully Created');

        return view ('foodClub.index', compact('food'));
    }
}
