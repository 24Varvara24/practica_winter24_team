<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Performance;
use Illuminate\Http\Request;
use App\Dictionaries\TicketStatus;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::with(['user', 'performance'])->get();

        return view('dashboard', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create(Request $request, User $user_id, Performance $performance_id)
    {
        
        
        //получаем параметр запроса(методом input) и потом переедаем полученные параметры (айди юзера и перформанса передаем в криэйт)
        $user_id = $request->input('user_id');
        $performance_id = $request->input('performance_id');

        //статусы заказа передаются на стр с формой где они и используются
        $statuses = TicketStatus::statuses();
        return view('ticket.create', compact('user_id', 'performance_id', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        Ticket::create([
            'row' => $request->row,
            'seat' => $request->seat,
            'user_id' => $request->user_id,
            'performance_id' => $request->performance_id,
            'status_id' => $request->status_id

        ]);
        


        return redirect()->route('afisha.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {

        $statuses = TicketStatus::statuses();//у нас есть протектед словать (Dictionaries\TicketStatus) оттуда берем наши статусы массивом
        return view('ticket.edit', compact('ticket', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update([
            'status_id' => $request->status_id,
        ]);
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('dashboard');
    }
}
