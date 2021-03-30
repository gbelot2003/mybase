<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{


    public function index()
    {
        $invitations = Invitation::where('registered_at', null)->orderBy('created_at', 'desc')->get();
        return view('invitations.index', compact('invitations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:invitations'
        ]);

        $invitation = new Invitation($request->all());
        $invitation->generateInvitationToken();
        $invitation->save();

        return redirect()->route('requestInvitation')
            ->with('success', 'Invitation to register successfully requested. Please wait for registration link.');
        }
}
