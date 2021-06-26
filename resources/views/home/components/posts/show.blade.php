<div id="form-errors"></div>
<div class="row update mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.posts.update.title')}}
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['class'=>'show-update','method'=>'post','url'=>route('home.posts.update',['post'=>$data['id']])]) !!}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('title',__('messages.posts.create.fields.title.label')) !!}
                        {!! Form::text('title',$data->title,['class'=>'form-control','required','placeholder'=>__('messages.posts.create.fields.title.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('poster',__('messages.posts.create.fields.poster.label')) !!}
                        {!! Form::file('poster',['class'=>'form-control','placeholder'=>__('messages.posts.create.fields.poster.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('description',__('messages.posts.create.fields.description.label')) !!}
                        {!! Form::textarea('description',$data->description,['class'=>'form-control','name'=>'description','id'=>'description','required','placeholder'=>__('messages.posts.create.fields.description.placeholder')]) !!}
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
                {{__('messages.posts.update.title')}} {{$data->id}}

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
                            url: "{!! route('home.posts.update',['post'=>$data->id]) !!}",
                            type: 'DELETE',
                            data: {'_token': $('meta[name="csrf-token"]').attr('content')},
                            success: function (data) {
                                errors(data, $('#form-errors'));
                                NProgress.done();
                                setTimeout(function () {
                                    changeUrl('{!! route('home.posts.index') !!}', false);
                                }, 1000);
                            },
                            error: function (data) {
                                errors(data, $('#form-errors'));
                            }
                        });
                    });

                </script>
            </div>
            <div class="card-body">
                <p>{{__('messages.posts.update.fields.title.label')}} {!! $data->title !!}</p>
                <p>{{__('messages.posts.update.fields.description.label')}} {!! $data->description !!}</p>
                <p>{{__('messages.posts.update.fields.author_id.label')}} {!! $data->author['email'] !!}</p>
                <p>{{__('messages.posts.update.fields.poster.label')}} <img style="height:20%;width:20%" src="{{URL::asset($data->poster)}}"/> </p>
                <hr>
                <p>{{__('messages.posts.datatable.fields.updated_at')}} {!! $data->updated_at !!}</p>
                <p>{{__('messages.posts.datatable.fields.created_at')}} {!! $data->created_at !!}</p>

            </div>
        </div>
    </div>
</div>
