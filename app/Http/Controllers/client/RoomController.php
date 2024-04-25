<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Room;
use App\Services\Interfaces\RoomClientServiceInterface;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(public RoomClientServiceInterface $service)
    {

    }
    public function index()
    {
        $rooms = $this->service->all();
        return view('client.reservation.index', compact('rooms'));
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
    public function booking(ReservationRequest $request)
    {
        $this->service->booking($request);
        return redirect()->back()->with([
            'message' => 'Room reserved successfully!',
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        $rooms = $this->service->show($room);
        return view('client.reservation.explore', compact('rooms'));
    }

   

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
