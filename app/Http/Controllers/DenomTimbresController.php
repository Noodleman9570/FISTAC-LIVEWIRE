<?php

namespace App\Http\Controllers;

use App\Models\DenomTimbre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class DenomTimbresController extends Controller
{
    
    public function index()
    {
            $denomTimbres = DenomTimbre::paginate();

            return view('denomTimbres.index', compact('denomTimbres'))
                  ->with('i', (request()->input('page', 1) - 1) * $denomTimbres->perPage());
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {

        dd($request);

        $date = date('d-m-Y-H:i:s');
        $date = str_replace(':', "", $date);

        $validated = $request->validate([
            'cant_ut' => 'required|max:50|',
            'img' => 'required|max:50|',
            'tipo' => 'required'
        ]);

        if ($request->hasFile("img")) {
            $file = $request->file('img');
            $img = $request->file("img");
            $nameImg = Str::slug($request->titulo) . "{$date}." . $img->guessExtension();
            $slash = Controller::returnSlashes();
            $route = public_path("images{$slash}news{$slash}");
            // $img->move($route, $nameImg);
            $file->storeAs('public/images/news', $nameImg);
            $news->img = $nameImg;
        }

        $request->DenomTimbres()->create($validated);

        // $denomTimbre = new DenomTimbre($request->input());
        // $denomTimbre->save();
        return redirect(route('denomTimbres.index'));
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        $denomTimbre = DenomTimbre::find($id);
        $denomTimbre->fill($request->input())->saveOrFail();
        return redirect('denomTimbres');

    }

    
    public function destroy(string $id)
    {
        $denomTimbre = DenomTimbre::find($id);
        $denomTimbre->delete();
        return redirect('denomTimbres');
    }
}
