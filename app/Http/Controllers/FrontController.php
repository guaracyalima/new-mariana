<?php

namespace App\Http\Controllers;

use App\Repositories\UploadRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    /**
     * @var UploadRepository
     */
    private $repository;

    public function __construct(UploadRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $files = $this->repository->paginate(10);
        return view ('index', compact('files'));
    }

    public function show(Request $request)
    {
        $album = DB::table('uploads')->whereDate('created_at',[$request['date']])->get();
        return view('admin.upload.search', compact('album'));
        //return $album;
    }
}
