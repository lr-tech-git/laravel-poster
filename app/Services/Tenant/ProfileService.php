<?php

namespace App\Services\Tenant;

use App\Models\User;
use App\Repositories\FileRepository;
use App\Repositories\UserInfoRepository;
use App\Repositories\UserRepository;

class ProfileService
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * @var UserInfoRepository
     */
    private UserInfoRepository $userInfoRepository;

    /**
     * @var FileRepository
     */
    private FileRepository $fileRepository;

    public function __construct(UserRepository $userRepository, UserInfoRepository $userInfoRepository, FileRepository $fileRepository)
    {
        $this->userRepository = $userRepository;
        $this->userInfoRepository = $userInfoRepository;
        $this->fileRepository = $fileRepository;
    }

    /**
     * @param User $user
     * @param array $data
     * @return void
     */
    public function saveProfile(User $user, array $data):void
    {
        if (!empty($data['avatar'])) {
            $file = $this->fileRepository->uploadAndCreate($data['avatar'], 'avatar');
            $data['avatar_id'] = $file->id;
        }

        $this->userInfoRepository->updateOrCreate(['user_id' => $user->id], $data);
    }
}
