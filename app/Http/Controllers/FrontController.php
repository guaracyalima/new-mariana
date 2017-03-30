<?php

namespace App\Http\Controllers;

use App\Repositories\UploadRepository;
use Illuminate\Http\Request;

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
}
