<?php

namespace App\Repositories;

use App\Models\FileUpload;
use Illuminate\Http\UploadedFile;

class FileRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return FileUpload::class;
    }

    /**
     * @param UploadedFile $file
     * @param string $folder
     * @return mixed
     *
     * @throws \Exception
     */
    public function uploadAndCreate(UploadedFile $file, string $folder = 'complaints')
    {
        $path = $file->store('public/images/' . $folder);

        return $this->create([
            'filename' => $file->getClientOriginalName(),
            'path' => str_replace('public/', '', $path),
            'type' => FileUpload::getTypeByMimeType($file->getClientMimeType())
        ]);
    }
}
