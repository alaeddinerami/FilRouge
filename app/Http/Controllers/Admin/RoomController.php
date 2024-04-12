<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use App\Repositories\Interfaces\RoomInterface;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    protected $roomRepository;
    public function __construct(RoomInterface $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }
    public function index()
    {
        $rooms = $this->roomRepository->all();
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
        $roomData = $request->all();
        // dd($roomData);
        if ($request->hasFile('image')) {
            $room = $this->roomRepository->create($roomData);
            $this->storeImg($request->file('image'), $room);
            return redirect()->back()->with([
                'message' => 'Room created successfully!',
                'operationSuccessful' => $this->operationSuccessful = true,
            ]);
        }else{
            return redirect()->back()->with([
                'message' => 'You forgot an image',
                'operationSuccessful' => $this->operationSuccessful = false,
            ]);
        }
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
        $roomData = $request->all(); // Get all request data

        // dd($roomData);
        $this->roomRepository->update($roomData, $room);
    
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
        $this->deleteImg($room);

        // Delete the meal
        $this->roomRepository->delete($room);

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
