<?php

namespace App\Services;

use App\Enum\ComplaintStatusesEnum;
use App\Models\Complaint;
use App\Repositories\ComplaintCategoriesRepository;
use App\Repositories\ComplaintFilesRepository;
use App\Repositories\ComplaintRepository;
use App\Repositories\ComplaintTagsRepository;
use App\Repositories\FileRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ComplaintService
{
    /**
     * @var ComplaintRepository
     */
    private ComplaintRepository $repository;

    /**
     * @var ComplaintCategoriesRepository
     */
    private ComplaintCategoriesRepository $complaintCategoriesRepository;

    /**
     * @var ComplaintTagsRepository
     */
    private ComplaintTagsRepository $complaintTagsRepository;

    /**
     * @var ComplaintFilesRepository
     */
    private ComplaintFilesRepository $complaintFilesRepository;

    /**
     * @var FileRepository
     */
    private FileRepository $fileRepository;

    public function __construct(
        ComplaintRepository $repository,
        ComplaintCategoriesRepository $complaintCategoriesRepository,
        ComplaintTagsRepository $complaintTagsRepository,
        ComplaintFilesRepository $complaintFilesRepository,
        FileRepository $fileRepository
    )
    {
        $this->repository = $repository;
        $this->complaintCategoriesRepository = $complaintCategoriesRepository;
        $this->complaintTagsRepository = $complaintTagsRepository;
        $this->complaintFilesRepository = $complaintFilesRepository;
        $this->fileRepository = $fileRepository;
    }

    /**
     * @param array $data
     * @param int $userId
     * @param bool $publish
     *
     * @return Model
     * @throws \Exception
     */
    public function prepareToUpdate(Complaint $complain): Model
    {
        $category = $this->complaintCategoriesRepository->getOneByConditions(['complaint_id' => $complain->id]);
        $complain->category_id = $category ? $category->id : null;

        $tags = $this->complaintTagsRepository->getByConditions(['complaint_id' => $complain->id])->keyBy('tag')->toArray();
        $complain->tags = $tags ? json_encode(array_keys($tags)) : '';

        $complain->files_array = null;
        if ($files = $complain->files->toArray()) {
            $complain->files_array = json_encode(Arr::map($files, function ($value, $key) {
                return $value['filename'];
            }));
        }

        return $complain;
    }

    /**
     * @param array $data
     * @param int $userId
     * @param bool $publish
     *
     * @return Model
     * @throws \Exception
     */
    public function createComplaint(array $data, int $userId, bool $publish = true): Model
    {
        $complaint = $this->repository->create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title'] . '_' . $userId . '_' . $this->repository->getNextId(), '_'),
            'user_id' => $userId,
            'about' => $data['about'],
            'address' => $data['address'],
            'location' => !empty($data['location']) ? $data['location'] : '',
            'status' => $publish ? ComplaintStatusesEnum::STATUS_PENDING : ComplaintStatusesEnum::STATUS_SAVE
        ]);

        $complaintId = $complaint->id;
        $tags = Arr::map(json_decode($data['tags']), function ($value, $key) use ($complaintId) {
            return [
                'complaint_id' => $complaintId,
                'tag' => $value->value
            ];
        });
        $this->complaintTagsRepository->insertBatch($tags);

        // TODO: need change to multiple categories
        $this->complaintCategoriesRepository->create([
            'complaint_id' => $complaintId,
            'category_id' => $data['category_id'],
        ]);

        $files = !empty($data['files']) ? json_decode($data['files']) : null;
        if ($files = $this->fileRepository->getByConditions(['filename' => $files])) {
            $fComplains = Arr::map($files->toArray(), function ($value, $key) use($complaintId) {
                return [
                    'complaint_id' => $complaintId,
                    'file_id' => $value['id']
                ];
            });
            $this->complaintFilesRepository->insertBatch($fComplains);
        }

        return $complaint;
    }

    /**
     * @param Complaint $complaint
     * @param array $data
     * @param bool $publish
     *
     * @return Model
     * @throws \Exception
     */
    public function updateComplaint(Complaint $complaint, array $data, bool $publish = true): Model
    {
        $complaint = $this->repository->update($complaint, [
            'title' => $data['title'],
            'slug' => Str::slug($data['title'] . '_' . $complaint->user_id . '_' . $complaint->id, '_'),
            'about' => $data['about'],
            'address' => $data['address'],
            'location' => !empty($data['location']) ? $data['location'] : '',
            'status' => $publish ? ComplaintStatusesEnum::STATUS_PENDING : ComplaintStatusesEnum::STATUS_SAVE
        ]);

        $complaintId = $complaint->id;
        $this->complaintTagsRepository->deleteByConditions([
            'complaint_id' => $complaintId
        ]);
        $tags = Arr::map(json_decode($data['tags']), function ($value, $key) use ($complaintId) {
            return [
                'complaint_id' => $complaintId,
                'tag' => $value->value
            ];
        });
        $this->complaintTagsRepository->insertBatch($tags);

        // TODO: need change to save multiple categories
        $this->complaintCategoriesRepository->deleteByConditions([
            'complaint_id' => $complaintId
        ]);
        $this->complaintCategoriesRepository->create([
            'complaint_id' => $complaintId,
            'category_id' => $data['category_id'],
        ]);

        $files = !empty($data['files']) ? json_decode($data['files']) : null;
        // TODO: delete only removed in view side with file in storage.
        $this->complaintFilesRepository->deleteByConditions([
            'complaint_id' => $complaintId
        ]);
        if ($files = $this->fileRepository->getByConditions(['filename' => $files])) {
            $fComplains = Arr::map($files->toArray(), function ($value, $key) use($complaintId) {
                return [
                    'complaint_id' => $complaintId,
                    'file_id' => $value['id']
                ];
            });
            $this->complaintFilesRepository->insertBatch($fComplains);
        }

        return $complaint;
    }
}
