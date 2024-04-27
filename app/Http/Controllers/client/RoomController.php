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

    public function myReservation(){
        $reservations = $this->service->myReservation();
        // dd($reservations);
        return view('client.reservation.myReservation',compact('reservations'));
    }

    public function booking(ReservationRequest $request)
    {
        // dd('here');
        $result = $this->service->booking($request);
        return redirect()->back()->with($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        $rooms = $this->service->show($room);
    //    dd($rooms);
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
