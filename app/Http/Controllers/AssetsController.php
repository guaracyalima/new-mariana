<?php

namespace App\Http\Controllers;

use App\Repositories\UploadRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AssetCreateRequest;
use App\Http\Requests\AssetUpdateRequest;
use App\Repositories\AssetRepository;
use App\Validators\AssetValidator;


class AssetsController extends Controller
{
    protected $repository;
    /**
     * @var UploadRepository
     */
    private $uploadRepository;

    public function __construct(AssetRepository $repository,
                                UploadRepository $uploadRepository)
    {
        $this->repository = $repository;
        $this->uploadRepository = $uploadRepository;
    }

    public function create($id)
    {
        $album = $this->uploadRepository->find($id);
        return view('admin.upload.album', compact('album'));
    }
    public function store(Request $request)
    {

        $data = $request->all();
        $files = $request->file('img');
        $file_count = count($files);
        $uploadcount = 0;
        foreach ($files as $file)
        {
            if(is_object($file) and $file->isValid()){ //verifico se o arquivo e valido
                $filename = time(). '-' . $file->getClientOriginalName(); //cato o nome do arquivo
                $file = $file->move(public_path().'/img/uploads/album', $filename); //salvo nessa pasta
                $path = $filename; //pego o path
                $data['img']=$path; //coloco de volta no array
                $this->repository->create($data); //salvo no banco
                $uploadcount++; //repito o processo enquanto existir arquivo la
            }
        }
        return redirect()->route('admin.upload'); //retorno a view

    }
}
