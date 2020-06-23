<?php

namespace App\Http\Controllers;
use App\Formaggio;

use Illuminate\Http\Request;

class FormaggiController extends Controller
{
    public function index(){
      $formaggi = Formaggio::all();
      return view('home', compact('formaggi'));
    }

    public function showFormaggi($id){
      $formaggio = Formaggio::findOrFail($id);
      return view('showFormaggi', compact('formaggio'));
    }

    public function delete($id){
      $formaggio = Formaggio::findOrFail($id);
      $formaggio -> delete();
      return redirect() -> route('home');
    }

    public function create(){
      return view('formaggio-create');
    }

    public function store(Request $request){
      $data = $request -> all();
      $formaggio = new Formaggio;

      $formaggio -> name = $data['name'];
      $formaggio -> colore = $data['colore'];
      $formaggio -> stagionatura = $data['stagionatura'];
      $formaggio -> provenienza = $data['provenienza'];
      $formaggio -> certBiologica = $data['certBiologica'];

      $formaggio -> save();

      return redirect() -> route('home');
    }

    public function edit($id){
      $formaggio = Formaggio::findOrFail($id);

      return view('formaggio-create', compact("formaggio"));
    }

    public function update(Request $request, $id){
      $data = $request -> all();
      $formaggio = Formaggio::findOrFail($id);

      $formaggio -> name = $data['name'];
      $formaggio -> colore = $data['colore'];
      $formaggio -> stagionatura = $data['stagionatura'];
      $formaggio -> provenienza = $data['provenienza'];
      $formaggio -> certBiologica = $data['certBiologica'];

      $formaggio -> save();

      return redirect() -> route('home');
    }

    }
