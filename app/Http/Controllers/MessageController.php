<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('panel.messages.index');
    }

    public function table()
    {
        return datatables()
            ->eloquent(Message::query()
                // ->select('products.*')
                ->orderByDesc('created_at'))
            // ->addColumn('actions', 'panel.messages._actions')
            // ->rawColumns(['actions'])
            ->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'message' => 'required',
            ],
            [
                'name.required' => 'Ingrese su nombre',
                'email.required' => 'Ingrese un correo electrónico',
                'phone.required' => 'Ingrese un número telefónico',
                'message.required' => 'Ingrese un mensaje',
            ]
        );

        Message::create($data);
        return back()->with('success','Mensaje Enviado Correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
        return view('panel.messages.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
        $message->delete();
    }
}
