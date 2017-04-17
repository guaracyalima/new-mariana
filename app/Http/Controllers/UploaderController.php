<?php

namespace App\Http\Controllers;

use App\Repositories\AssetRepository;
use App\Repositories\UploadRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploaderController extends Controller
{
    /**
     * @var UploadRepository
     */
    private $repository;
    /**
     * @var AssetRepository
     */
    private $assetRepository;

    public function __construct(UploadRepository $repository,
                                AssetRepository $assetRepository)
    {
        $this->repository = $repository;
        $this->assetRepository = $assetRepository;
    }
    public function missingMethod($params = array())
    {
        return view('errors.404');
    }
//sd8jiowasmijoqwasfiolmasfj0iowrhefdasijaoemldwfer0jidfosmlkdgehotinrslkma09gjoids
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
        $files = $request->file('path');
        $file_count = count($files);
        $uploadcount = 0;
       foreach ($files as $file)
       {
           if(is_object($file) and $file->isValid()){ //verifico se o arquivo e valido
               $filename = time(). '-' . $file->getClientOriginalName(); //cato o nome do arquivo
               $file = $file->move(public_path().'/img/uploads/', $filename); //salvo nessa pasta
               $path = $filename; //pego o path
               $data['path']=$path; //coloco de volta no array
               $this->repository->create($data); //salvo no banco
               $uploadcount++; //repito o processo enquanto existir arquivo la
           }
       }
        return redirect()->route('admin.upload'); //retorno a view

    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.upload');
    }

    public function show($id)
    {
        $album = $this->repository->find($id);
        //$images = DB::table('assets')->select('img')->where('album_id', '=', $id)->get();
        $images = $this->assetRepository->findWhere(['album_id' => $id]);
        //dd($images);
        return view('admin.upload.show', compact('album', 'images'));
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.upload');
    }
}
