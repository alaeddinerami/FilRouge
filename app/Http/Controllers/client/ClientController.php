<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showProfileImg()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        // dd($profileData);
        return view('client.profile.index', compact('profileData'));
    }
    public function storeProfileImg(Request $request)
    {
        $profileId = $request->id;
        $profile = User::find($profileId);
        if ($profile->image == null) {
            $this->storeImg($request->file('image'), $profile);
            $this->updateImg($request->file('image'), $profile);
            return redirect()->back()->with([
                'message' => 'Image stored successfully!',
                'operationSuccessful' => $this->operationSuccessful = true,
            ]);
        } else {

            $this->updateImg($request->file('image'), $profile);
            return redirect()->back()->with([
                'message' => 'Image updated successfully!',
                'operationSuccessful' => $this->operationSuccessful = true,
            ]);
        }

    }
}
