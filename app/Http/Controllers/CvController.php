<?php

namespace App\Http\Controllers;

use App\Cv;
use App\Http\Requests\cvRequest;


class CvController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth');
    }


    //lister les cvs
    public function index()
    {
        $listcv = CV::all();
        return view('cv.index', ['cvs' => $listcv]);

    }

    //Afficher le formulaire de création de cv
    public function create()
    {
        return view("cv.create");
    }

    //Enregistrer un cv

    public function store(cvRequest $request)
    {
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();

        session()->flash('success',"le cv à été bien enregistré !!");

        return redirect('cvs');
    }

    public function edit($id)
    {
        $cv = Cv::find($id);
        return view('cv.edit', ['cv' => $cv]);
    }

    public function update(cvRequest $request, $id)
    {
        $cv = CV::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();
        return redirect('cvs');
    }

    public function destroy($id)
    {
        $cv = Cv::find($id);
        $cv->delete();
        return redirect('cvs');
    }
}
