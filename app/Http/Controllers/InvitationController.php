<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class InvitationController extends Controller
{


    public function index()
    {
        $invitations = Invitation::where('registered_at', null)->orderBy('created_at', 'desc')->get();
        $roles = Role::where('name', '!=', 'administrador')->orderBy('id', 'ASC')->pluck('name', 'id');
        return view('invitations.index', compact('invitations', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:invitations',
            'role_id' => 'required'
        ]);

        $invitation = new Invitation($request->all());
        $invitation->generateInvitationToken();
        $invitation->save();

        return redirect()->back()->with('success', 'Invitation to register successfully requested. Please wait for registration link.');
        //return redirect()->route('requestInvitation')
        //    ->with('success', 'Invitation to register successfully requested. Please wait for registration link.');
        }
}
