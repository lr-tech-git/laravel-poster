<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Sort\DefaultSort;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;

class UserService
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param bool $archived
     * @return LengthAwarePaginator
     */
    public function sortable(bool $archived = false): LengthAwarePaginator
    {
        $filters = [
            AllowedFilter::scope('fullName'),
            AllowedFilter::scope('role'),
            'type',
            'created_at',
        ];

        return $this->userRepository->getWithQueryBuilder(
            $filters,
            ['keywords', 'status', 'role', 'type'],
            20,
            AllowedSort::custom('created_at', new DefaultSort())->defaultDirection('desc')
        );
    }
}
