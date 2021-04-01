<?php

namespace App\Http\Controllers\Home;


use App\Http\Requests\UserCreateEmployeesRequest;
use App\Http\Requests\UserDestroyEmployeesRequest;
use App\Http\Requests\UserStoreEmployeesRequest;
use App\Http\Requests\UserUpdateEmployeesRequest;
use App\Http\Requests\UserViewEmployeesRequest;
use App\Models\Employee;

use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{

    public function showData($id)
    {

        $message = new MessageBag();
        if ($employee = Employee::find($id)) {
            return $employee;
        } else return $message->add('error', 'Taki pracownik nie istnieje!')->jsonSerialize();
    }

    public function getData(UserViewEmployeesRequest $request)
    {
        return DataTables::of(Employee::all())->make(true);
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

        $message = new MessageBag();
        if ($employee = Employee::find($id)) {
            $message->add('success', 'Pomyślnie edytowano pracownika!');
            $employee->update($request->validated());
        } else  $message->add('error', 'Taki pracownik nie istnieje!');

        return $message->jsonSerialize();
    }

    public function create(UserCreateEmployeesRequest $request)
    {


    }

    public function destroy($id, UserDestroyEmployeesRequest $request)
    {

        $message = new MessageBag();
        if ($employee = Employee::find($id)) {
            $message->add('success', 'Pomyślnie usunięto pracownika!');
            $employee->delete();
        } else $message->add('error', 'Taki pracownik nie istnieje!');

        return $message->jsonSerialize();
    }

}
