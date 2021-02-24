<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    private $objTicket;

    public function __construct()
    {
        $this->objTicket = new Ticket();
    }

    public function index()
    {
        return view('ticket.index');
    }


    public function create()
    {
        return view('ticket.create');
    }

    public function store(Request $request)
    {
        $cad=$this->objTicket->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request['password']),
            'prontuario'=>$request->prontuario,
            'nivel'=>$request->nivel,
            'status'=>$request->status
        ]);
        if($cad){return redirect('ticket');}
    }

    public function show(Ticket $ticket)
    {
        return view('ticket.show')->with('ticket', $ticket);
    }

    public function edit(int $id)
    {
        $ticket=$this->objTicket->find($id);
        return view('ticket.edit', compact('ticket'));
    }

    public function update(Request $request, int $id)
    {
        $this->objTicket->where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request['password']),
            'prontuario'=>$request->prontuario,
            'nivel'=>$request->nivel,
            'status'=>$request->status
        ]);
        return redirect('ticket');
    }
}
