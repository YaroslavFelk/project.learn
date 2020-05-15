<?php

namespace App\Http\Controllers;

use App\Callback;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function index()
    {
        $callbacks = Callback::latest()->get();
        return view('admin.feedbacks', compact('callbacks'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        $request = $this->validate(
            $request,
            [
                'email' => 'required|email',
                'text' => 'required',
            ]
        );

        Callback::create($request);

        return redirect('/');
    }
}
