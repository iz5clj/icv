<?php

namespace App\Http\Controllers;

use App\Message;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $messages = Message::latest()->get();

    return view('admin.messages.index', compact('messages'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('admin.messages.create', [
      'message' => new Message,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'text'  => 'required'
    ]);

    $message          = new Message;
    $message->name    = $request->name;
    $message->text    = $request->text;
    $message->updated = Carbon::now();

    $message->save();

    return redirect()->route('message.index')->with('success', 'Message saved');
  }

  /**
   * Display the specified resource.
   *
   * @param  Post $post
   * @return Response
   */
  public function show(Message $message)
  {
    return view('admin.messages.show', [
      'message' => $message
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Message $message)
  {
    return view('admin.messages.edit', compact('message'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, Message $message)
  {
    $this->validate($request, [
      'name' => 'required',
      'text' => 'required'
    ]);

    $message->name    = $request->name;
    $message->text    = $request->text;
    $message->updated = Carbon::now();

    $message->save();

    return redirect()->route('message.index')->with('success', 'Message updated.');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Message::destroy($id);
    return back()->with('success', 'Message successfuly deleted.');
  }
}
