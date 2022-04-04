<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('Comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();

        $request->validate(
            [
                'thumb' => 'required|url',
                'title' => 'required|min:5',
                'series' => 'required',
                'type' => 'required|min:5',
                'description' => 'required|min:20|max:255',
                'price' => 'required|numeric|min:0.00',
            ]
        );

        /*
        $comic->thumb = $data['thumb'];
        $comic->series = $data['series'];
        $comic->type = $data['type'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];
        */

        $comic->fill($data);
        $comic->save();
        return redirect()->route('comic.show', ['comic' => $comic->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic) // dependency injection
    {
        
        return view('comic.card',compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // senza dependency injection
    {
        $comic = Comic::find($id);

        if($comic) {
            return view('comic.edit', compact('comic'));
        }else{
            abort(404);
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        
        $data = $request->all();
       
        $comic->thumb = $data['thumb'];
        $comic->series = $data['series'];
        $comic->type = $data['type'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];
        $comic->save();

        return redirect()->route('comic.show', ['comic' => $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index')->with('status', 'Elemento correttamente cancellato.');
    }
}
