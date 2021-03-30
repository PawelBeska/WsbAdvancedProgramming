<div id="form-errors"></div>
<div class="row update mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                Edycja
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-sm btn-close">Zamknij</button>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['class'=>'show-update','method'=>'put','url'=>route('home.employees.update',['employee'=>$data['id']])]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('first_name','Imie:') !!}
                        {!! Form::text('first_name',$data['first_name'],['class'=>'form-control','required','placeholder'=>'Wpisz imie']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('last_name','Nazwisko:') !!}
                        {!! Form::text('last_name',$data['last_name'],['class'=>'form-control','required','placeholder'=>'Wpisz nazwisko']) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('birth_date','Data urodzenia:') !!}
                        {!! Form::date('birth_date',$data['birth_date'],['class'=>'form-control','required','placeholder'=>'Wpisz datę urodzenia']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('phone','Numer telefonu:') !!}
                        {!! Form::number('phone',$data['phone'],['class'=>'form-control','placeholder'=>'Wpisz numer telefonu','required']) !!}
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
                Podgląd pracownika id: {{$data['id']}}

                <div class="float-right">
                    <button type="button" class="btn mr-1 btn-primary btn-sm btn-edit">Edytuj</button>
                    <button type="button" class="btn btn-danger btn-sm btn-delete">Usuń</button>
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
                <p>Imie: {!! $data['first_name'] !!}</p>
                <p>Nazwisko: {!! $data['last_name'] !!}</p>
                <p>Data urodzenia: {!! $data['birth_date'] !!}</p>
                <p>Numer telefonu: {!! $data['phone'] !!}</p>
                <hr>
                <p>Data ostatniej edycji: {!! $data['updated_at'] !!}</p>
                <p>Data utworzenia: {!! $data['created_at'] !!}</p>

            </div>
        </div>
    </div>
</div>
