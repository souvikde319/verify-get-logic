<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LogicVerificationService;

class ExcelController extends Controller
{
    protected $service;

    public function __construct(LogicVerificationService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        $results = $this->service->processFile($request->file('file'));

        return view('result', compact('results'));
    }
}