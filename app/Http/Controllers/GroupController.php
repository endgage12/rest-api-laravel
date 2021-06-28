<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Membership;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {

        return Group::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'founder' => 'required',
        ]);
        return Group::create($request->all());
    }

    public function memberships(Group $group) {
        return $group->memberships()->get();
    }
}
