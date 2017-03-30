<?php

namespace App\Http\Controllers;

use App\Repositories\UploadRepository;
use Illuminate\Http\Request;

class UploaderController extends Controller
{
    /**
     * @var UploadRepository
     */
    private $repository;

    public function __construct(UploadRepository $repository)
    {
        $this->repository = $repository;
    }
    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $files = $this->repository->paginate(10);
        return view ('admin.upload.index', compact('files'));
    }


    public function create()
    {
        return view('admin.upload.create');
    }


    public function edit($id)
    {
        $uploads = $this->repository->find($id);
        return view('admin.upload.edit', compact('uploads'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('path');
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/img/uploads/', $filename);
            $path = $filename;
            $data['path']=$path;
            $this->repository->create($data);
        }
        return redirect()->route('admin.upload');

    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.upload');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.upload');
    }
}
