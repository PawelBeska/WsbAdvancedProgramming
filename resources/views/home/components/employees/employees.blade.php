<div id="form-errors"></div>
<div class="row create mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.employees.create.title')}}
                <div class="float-right">
                    <button type="button"
                            class="btn btn-primary btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button>
                </div>
            </div>
            <div class="card-body">
                <p>{{__('messages.employees.create.description')}}</p>
                {!! Form::open(['class'=>'create','method'=>'post','url'=>route('home.employees.store')]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('first_name',__('messages.employees.create.fields.first_name.label')) !!}
                        {!! Form::text('first_name',null,['class'=>'form-control','required','placeholder'=>__('messages.employees.create.fields.first_name.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('last_name',__('messages.employees.create.fields.last_name.label')) !!}
                        {!! Form::text('last_name',null,['class'=>'form-control','required','placeholder'=>__('messages.employees.create.fields.last_name.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('birth_date',__('messages.employees.create.fields.birth_date.label')) !!}
                        {!! Form::date('birth_date',null,['class'=>'form-control','required','placeholder'=>__('messages.employees.create.fields.birth_date.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('phone',__('messages.employees.create.fields.phone.label')) !!}
                        {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>__('messages.employees.create.fields.phone.placeholder'),'required']) !!}
                    </div>

                </div>
                {!! Form::submit('Stwórz',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row update mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.employees.update.title')}}
                <div class="float-right">
                    <button type="button"
                            class="btn btn-primary btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button>
                </div>
            </div>
            <div class="card-body">

                <p>{{__('messages.employees.update.description')}}</p>
                {!! Form::open(['class'=>'update']) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('first_name',__('messages.employees.update.fields.first_name.label')) !!}
                        {!! Form::text('first_name',null,['class'=>'form-control','required','placeholder'=>__('messages.employees.update.fields.first_name.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('last_name',__('messages.employees.update.fields.last_name.label')) !!}
                        {!! Form::text('last_name',null,['class'=>'form-control','required','placeholder'=>__('messages.employees.update.fields.last_name.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('birth_date',__('messages.employees.update.fields.birth_date.label')) !!}
                        {!! Form::date('birth_date',null,['class'=>'form-control','required','placeholder'=>__('messages.employees.update.fields.birth_date.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('phone',__('messages.employees.update.fields.phone.label')) !!}
                        {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>__('messages.employees.update.fields.phone.placeholder'),'required']) !!}
                    </div>

                </div>
                {!! Form::submit(__('messages.elements.buttons.add'),['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{__('messages.employees.datatable.title')}}
                <div class="float-right">
                    <button type="button" class="btn btn-primary create btn-sm">{{__('messages.elements.buttons.add')}}</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive p-t-10">
                    <table id="" class="table" style="width:100%">
                        <thead>
                        <tr>
                            <th>{{__('messages.employees.datatable.fields.id')}}</th>
                            <th>{{__('messages.employees.datatable.fields.first_name')}}</th>
                            <th>{{__('messages.employees.datatable.fields.last_name')}}</th>
                            <th>{{__('messages.employees.datatable.fields.birth_date')}}</th>
                            <th>{{__('messages.employees.datatable.fields.phone')}}</th>
                            <th>{{__('messages.employees.datatable.fields.select')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            window.datatable = $('.table').DataTable({
                                "language":   { {!!  __('messages.movies.datatable.json')!!}
                                },
                                columns: [
                                    {data: 'id', "sClass": 'id'},
                                    {data: 'first_name', "sClass": 'first_name'},
                                    {data: 'last_name', "sClass": 'last_name'},
                                    {data: 'birth_date', "sClass": 'birth_date'},
                                    {data: 'phone', "sClass": 'phone'},
                                    {
                                        name: "buttons",
                                        "targets": -1,
                                        "data": null,
                                        "defaultContent": `<div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                {{__('messages.elements.buttons.select')}}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                               <a class="dropdown-item view"  href="#">{{__('messages.elements.buttons.show')}}</a>
                                                <a class="dropdown-item update" href="#">{{__('messages.elements.buttons.quickEdit')}}</a>
                                                <a class="dropdown-item remove" href="#"> {{__('messages.elements.buttons.remove')}}</a>
                                            </div>
                                        </div>`
                                    }
                                ],
                                "autoWidth": true,
                                'responsive': true,
                                "processing": true,
                                "serverSide": true,
                                oLanguage: {
                                    sProcessing: `<div class="lime-body">    <div class="container">        <div class="row" style="  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);">            <div class="col-md-8">                <div class="spinner-border" style="color: #00bc8c;" le="status">                    <span class="sr-only">Loading...</span>                </div>            </div>        </div>    </div></div>`
                                },
                                rowId: 'id',
                                ajax: {
                                    "url": "{{Route('home.employees.get')}}",
                                    "type": "POST",
                                    "global": false,
                                    "cache": false,
                                    "data": {"_token": "{{ csrf_token() }}"}
                                }
                            });
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
