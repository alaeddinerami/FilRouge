<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use App\Repositories\Interfaces\RoomInterface;
use App\Services\Interfaces\RoomServiceInterface;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
   
    public function __construct(public RoomServiceInterface $service)
    {

    }
    public function index()
    {
        $rooms = $this->service->all();
        return view('dashboard.logement.index',compact('rooms'));

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
    public function store(RoomRequest $request)
    {
        

        $room = $this->service->store($request);
        
            return redirect()->back()->with([
                'message' => 'Room created successfully!',
                'operationSuccessful' => $this->operationSuccessful = true,
            ]);
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomRequest $request, Room $room)
    {
        // dd($roomData);
        $this->service->update($request, $room);
        if ($request->hasFile('image')) {
            $this->updateImg($request->file('image'), $room);
        }
        return redirect()->back()->with([
            'message' => 'room updated successfully!',
            'operationSuccessful' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        // $this->deleteImg($room);

        // Delete the meal
         $this->service->delete($room);
        
        return redirect()->back()->with([
            'message' => 'Meal deleted successfully!',
            'operationSuccessful' => true,
        ]);
    }

    public function roomResirvation()
    {
        return view('dashboard.reservation.index');
    }
}
