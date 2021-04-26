<?php

namespace App\Http\Controllers\Home;


use App\Http\Requests\UserDestroyEmployeesRequest;
use App\Http\Requests\UserStoreEmployeesRequest;
use App\Http\Requests\UserUpdateEmployeesRequest;
use App\Http\Requests\UserViewEmployeesRequest;
use App\Models\Employee;

use App\Repository\Eloquent\EmployeeRepository;
use App\Repository\EmployeeRepositoryInterface;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{

    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }


    public function showData($id)
    {
        if ($employee = Employee::find($id)) {
            return $employee;
        } else abort(404);
    }

    public function getData(UserViewEmployeesRequest $request)
    {
        $employees = $this->employeeRepository->all();
        return DataTables::of($employees)->make(true);
    }

    public function store(UserStoreEmployeesRequest $request)
    {
        $input = $request->validated();
        $message = new MessageBag();
        $message->add('success', 'Pomyślnie dodano pracownika!');
        Employee::create($input);
        return $message->jsonSerialize();

    }

    public function update($id, UserUpdateEmployeesRequest $request)
    {
        if ($employee = Employee::find($id)) {
            $message = new MessageBag();
            $message->add('success', 'Pomyślnie edytowano pracownika!');
            $employee->update($request->validated());
            return $message->jsonSerialize();
        } else return abort(404);
    }

    public function destroy($id, UserDestroyEmployeesRequest $request)
    {
        if ($employee = Employee::find($id)) {
            $message = new MessageBag();
            $message->add('success', 'Pomyślnie usunięto pracownika!');
            $employee->delete();
            return $message->jsonSerialize();
        } else return abort(404);

    }

}
