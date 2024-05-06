<?php

namespace App\Repositories;

use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class ComplaintRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Complaint::class;
    }

    /**
     * @return null|int
     */
    public function getNextId():? int
    {
        $complaints = DB::select("show table status like 'complaints'");
        return $complaints[0]->Auto_increment;
    }
}
