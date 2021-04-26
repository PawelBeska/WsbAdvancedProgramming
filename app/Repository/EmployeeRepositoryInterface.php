<?php

namespace App\Repository;

use App\Models\Employee;
use Illuminate\Support\Collection;

interface EmployeeRepositoryInterface
{
    public function all(): Collection;
}