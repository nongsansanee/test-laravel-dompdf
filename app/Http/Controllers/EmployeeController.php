<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
       return view('index', ['employees'=>$employees]);
    }
    public function viewPDF() 
    {
     
        $employees = Employee::all();
        $pdf = FacadePdf::loadView('employee_pdf', ['employees'=>$employees])
                            ->setPaper('a4','landscape');
        return $pdf->stream('pdf_file.pdf');
    }
    public function downloadPDF() 
    {
        $employees = Employee::all();
        $pdf = FacadePdf::loadView('employee_pdf', ['employees'=>$employees])
                            ->setPaper('a4','landscape');
        return $pdf->download('pdf_file.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
