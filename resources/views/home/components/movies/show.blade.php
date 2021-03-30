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
                {!! Form::open(['class'=>'show-update','method'=>'put','url'=>route('home.movies.update',['movie'=>$data['id']])]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('title','Tytuł:') !!}
                        {!! Form::text('title',$data['title'],['class'=>'form-control','required','placeholder'=>'Wpisz tytuł']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('genre','Gatunek:') !!}
                        {!! Form::text('genre',$data['genre'],['class'=>'form-control','required','placeholder'=>'Wpisz gatunek']) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('releaseDate','Data wydania:') !!}
                        {!! Form::date('releaseDate',$data['releaseDate'],['class'=>'form-control','required','placeholder'=>'Wpisz datę wydania']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('price','Cena:') !!}
                        {!! Form::number('price',$data['price'],['class'=>'form-control','placeholder'=>'Wpisz cenę','required','step'=>"0.01"]) !!}
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
                Podgląd filmu id: {{$data['id']}}

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
                            url: "{!! route('home.movies.update',['movie'=>$data['id']]) !!}",
                            type: 'DELETE',
                            data: {'_token': $('meta[name="csrf-token"]').attr('content')},
                            success: function (data) {
                                errors(data, $('#form-errors'));
                                NProgress.done();
                                setTimeout(function () {
                                    changeUrl('{!! route('home.movies.index') !!}', false);
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
                <p>Tytuł: {!! $data['title'] !!}</p>
                <p>Gatunek: {!! $data['genre'] !!}</p>
                <p>Data wydania: {!! $data['releaseDate'] !!}</p>
                <p>Cena: {!! $data['price'] !!}</p>
                <hr>
                <p>Data ostatniej edycji: {!! $data['updated_at'] !!}</p>
                <p>Data utworzenia: {!! $data['created_at'] !!}</p>
            </div>
        </div>
    </div>
</div>
