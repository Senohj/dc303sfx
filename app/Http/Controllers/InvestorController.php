<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index()
    {

        $investors = Investor::orderBy('last_name', 'asc')->paginate(10);

        return inertia('Investor/Index', ['investors' => $investors]);
    }
    public function create()
{
    return inertia('Investor/Create');
}

public function store(Request $request)
{

    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone' => 'required|string',
        'address' => 'required|string|max:255',
        'investment_type' => 'required|string|in:micro,sponsor,benefactor',
    ]);

    Investor::create($request->all());

    return redirect('/investors')->with('success', 'Investor created successfully!');
}

}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class InvestorController extends Controller
// {
//     public function index() {

//         return inertia('Investor/Index');
//     }
// }
