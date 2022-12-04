<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index(){
        
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));

    }
    public function create(){
        return view('medicines.create');
    }
    public function store(Request $request){
        Medicine::create([

            'idname' => $request->idname,
            'medname' => $request->medname,
            'perboxes' => $request->perboxes,
            'persheet' => $request->persheet,
            'perpiece' => $request->perpiece,
            'amount' => $request->amount,
            'category' => $request->category,
            'deliverydate' => $request->deliverydate,
            'expirationdate' => $request->expirationdate

        ]);

        return redirect()->back()->with('create','Medicine Added Successfully');
    }
}
