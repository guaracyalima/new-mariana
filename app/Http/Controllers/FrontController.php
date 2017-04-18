<?php

namespace App\Http\Controllers;

use App\Repositories\AssetRepository;
use App\Repositories\UploadRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
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

    public function index()
    {
        $files = $this->repository->paginate(3);
        return view ('index', compact('files'));
    }

    public function show(Request $request)
    {
        $album = DB::table('uploads')->whereDate('created_at',[$request['date']])->get();
        return view('admin.upload.search', compact('album'));
    }

    public function search(Request $request)
    {
        $album = DB::table('uploads')->whereDate('created_at',[$request['date']])->get();
        return view('search', compact('album'));
    }

    public function showGallry($id)
    {
        $album = $this->repository->find($id);
        //$images = DB::table('assets')->select('img')->where('album_id', '=', $id)->get();
        $images = $this->assetRepository->findWhere(['album_id' => $id]);
        //dd($images);
        return view('show', compact('album', 'images'));
    }
}
