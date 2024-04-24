<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Services\Interfaces\RoomClientServiceInterface;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(public RoomClientServiceInterface $service){

    }
    public function index()
    {
        $rooms = $this->service->all();
        return view('client.reservation.index',compact('rooms'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
     return $this->service->show($room);   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
