<?php

namespace App\Repository\Eloquent;

use App\Models\Employee;
use App\Repository\EmployeeRepositoryInterface;
use Illuminate\Support\Collection;

class EmployeeRepository extends BaseRepository implements EmployeeRepositoryInterface
{

    /**
     * EmployeeRepository constructor.
     *
     * @param Employee $model
     */
    public function __construct(Employee $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }
}