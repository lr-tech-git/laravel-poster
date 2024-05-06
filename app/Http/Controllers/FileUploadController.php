<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Repositories\FileRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    /**
     * @var FileRepository
     */
    private FileRepository $fileRepository;

    public function __construct(FileRepository $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    /**
     * TODO: need move to tenant folder and code to service.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function fileStore(Request $request): JsonResponse
    {
        $image = $request->file('file');
        $model = $this->fileRepository->uploadAndCreate($image);

        return response()->json(['success' => $model->filename]);
    }

    /**
     * TODO: need move to tenant folder and code to service.
     *
     * @param Request $request
     * @return string
     */
    public function fileDestroy(Request $request)
    {
        $filename = $request->get('filename');
        FileUpload::where('filename', $filename)->delete();
        $path = public_path() . '/images/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }

        return $filename;
    }
}
