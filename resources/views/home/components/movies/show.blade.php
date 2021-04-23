<div id="form-errors"></div>
<div class="row update mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.movies.update.title')}}
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['class'=>'show-update','method'=>'put','url'=>route('home.movies.update',['movie'=>$data['id']])]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('title',__('messages.movies.update.fields.title.label')) !!}
                        {!! Form::text('title',$data['title'],['class'=>'form-control','required','placeholder'=>__('messages.movies.update.fields.title.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('genre',__('messages.movies.update.fields.genre.label')) !!}
                        {!! Form::text('genre',$data['genre'],['class'=>'form-control','required','placeholder'=>__('messages.movies.update.fields.genre.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('releaseDate',__('messages.movies.update.fields.releaseDate.label')) !!}
                        {!! Form::date('releaseDate',$data['releaseDate'],['class'=>'form-control','required','placeholder'=>__('messages.movies.update.fields.releaseDate.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('price',__('messages.movies.update.fields.price.label')) !!}
                        {!! Form::number('price',$data['price'],['class'=>'form-control','placeholder'=>__('messages.movies.update.fields.price.placeholder'),'required','step'=>"0.01"]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('rating',__('messages.movies.update.fields.rating.label')) !!}
                        {!! Form::number('rating',$data['rating'],['class'=>'form-control','placeholder'=>__('messages.movies.update.fields.rating.placeholder'),'required','step'=>"1"]) !!}
                    </div>
                </div>
                {!! Form::submit(__('messages.elements.buttons.edit'),['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{__('messages.movies.update.title')}}: {{$data['title']}} ({{$data['id']}})

                <div class="float-right">
                    <button type="button" class="btn mr-1 btn-primary btn-sm btn-edit">{{__('messages.elements.buttons.edit')}}</button>
                    <button type="button" class="btn btn-danger btn-sm btn-delete">{{__('messages.elements.buttons.remove')}}</button>
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
                <p>{{__('messages.movies.datatable.fields.title')}}: {!! $data['title'] !!}</p>
                <p>{{__('messages.movies.datatable.fields.genre')}}: {!! $data['genre'] !!}</p>
                <p>{{__('messages.movies.datatable.fields.releaseDate')}}: {!! $data['releaseDate'] !!}</p>
                <p>{{__('messages.movies.datatable.fields.price')}}: {!! $data['price'] !!}</p>
                <p>{{__('messages.movies.datatable.fields.rating')}}: {!! $data['rating'] !!}</p>
                <hr>
                <p>{{__('messages.movies.datatable.fields.updated_at')}}: {!! $data['updated_at'] !!}</p>
                <p>{{__('messages.movies.datatable.fields.created_at')}}: {!! $data['created_at'] !!}</p>
            </div>
        </div>
    </div>
</div>
