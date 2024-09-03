<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        // return redirect("https://google.com.br");
        // return response('', 201, ['Location' => "https://google.com.br"]);
        //  return $request->get('id');   
        $series = DB::select('SELECT nome FROM series;');
        dd($series);

        return view("series.index")->with('series', $series);

    }


    public function create(){
        return view('series.create');
        
    } 

    public function store(Request $request){
        $nomeSerie = $request->input('nome');
            if (DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
                return 'ok';
        }  else {
            return 'Erro';
        } 
    }
}
