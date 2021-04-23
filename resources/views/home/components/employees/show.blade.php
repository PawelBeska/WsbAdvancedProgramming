<div id="form-errors"></div>
<div class="row update mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.employees.update.title')}}
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['class'=>'show-update','method'=>'put','url'=>route('home.employees.update',['employee'=>$data['id']])]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('first_name',__('messages.employees.update.fields.first_name.label')) !!}
                        {!! Form::text('first_name',$data['first_name'],['class'=>'form-control','required','placeholder'=>__('messages.employees.update.fields.first_name.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('last_name',__('messages.employees.update.fields.last_name.label')) !!}
                        {!! Form::text('last_name',$data['last_name'],['class'=>'form-control','required','placeholder'=>__('messages.employees.update.fields.last_name.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('birth_date',__('messages.employees.create.fields.birth_date.label')) !!}
                        {!! Form::date('birth_date',$data['birth_date'],['class'=>'form-control','required','placeholder'=>__('messages.employees.create.fields.birth_date.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('phone',__('messages.employees.create.fields.phone.label')) !!}
                        {!! Form::number('phone',$data['phone'],['class'=>'form-control','placeholder'=>__('messages.employees.create.fields.phone.placeholder'),'required']) !!}
                    </div>

                </div>
                {!! Form::submit('Edytuj',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{__('messages.employees.update.title')}} {{$data['id']}}

                <div class="float-right">
                    <button type="button" class="btn mr-1 btn-primary btn-sm btn-edit">{{__('messages.elements.buttons.close')}}</button>
                    <button type="button" class="btn btn-danger btn-sm btn-delete">{{__('messages.elements.buttons.remove')}}</button>
                </div>
                <script>
                    $('button.btn-edit').on('click', function () {
                        $('div.update').show();
                    });
                    $('button.btn-delete').on('click', function () {
                        $.ajax({
                            url: "{!! route('home.employees.update',['employee'=>$data['id']]) !!}",
                            type: 'DELETE',
                            data: {'_token': $('meta[name="csrf-token"]').attr('content')},
                            success: function (data) {
                                errors(data, $('#form-errors'));
                                NProgress.done();
                                setTimeout(function () {
                                    changeUrl('{!! route('home.employees.index') !!}', false);
                                }, 1000);
                            },
                            error: function (data) {
                                errors(data, $('#form-errors'));
                            }
                        });
                    });
                    $('form.show-update').on('submit', function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'PUT',
                            global: false,
                            cache: false,
                            data: $(this).serialize(),
                            success: function (data) {
                                errors(data, $('#form-errors'));
                                $("form.update select option").each(function ($ez) {
                                    $(this).removeAttr('selected')
                                });
                            },
                            error: function (data) {
                                errors(data, $('#form-errors'));
                            }
                        });
                    });
                </script>
            </div>
            <div class="card-body">
                <p>{{__('messages.employees.update.fields.first_name.label')}}: {!! $data['first_name'] !!}</p>
                <p>{{__('messages.employees.update.fields.last_name.label')}}: {!! $data['last_name'] !!}</p>
                <p>{{__('messages.employees.update.fields.birth_date.label')}}: {!! $data['birth_date'] !!}</p>
                <p>{{__('messages.employees.update.fields.phone.label')}}: {!! $data['phone'] !!}</p>
                <hr>
                <p>{{__('messages.employees.datatable.fields.updated_at')}}: {!! $data['updated_at'] !!}</p>
                <p>{{__('messages.employees.datatable.fields.created_at')}}: {!! $data['created_at'] !!}</p>

            </div>
        </div>
    </div>
</div>
