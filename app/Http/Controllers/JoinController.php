<?php

namespace App\Http\Controllers;

use App\Jobs\UserHasRequestInvite;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function index()
    {
        return view('join.slack');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName'  => 'required',
            'emaild'    => 'required|email',
        ]);

         dispatch(new UserHasRequestInvite($request->emaild, $request->firstName, $request->lastName));

         return view('join.slack')->with(['invitedMessage'=>'An Email with invite will be sent to you shortly.']);

    }
}
