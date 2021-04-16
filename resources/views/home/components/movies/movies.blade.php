

<div id="form-errors"></div>
<div class="row create mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.movies.create.title')}}
                <div class="float-right"><button type="button" class="btn btn-primary btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button></div>
            </div>
            <div class="card-body">
                <p>{{__('messages.movies.create.description')}}</p>
                {!! Form::open(['class'=>'create','method'=>'post','url'=>route('home.movies.store')]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('title',__('messages.movies.create.fields.title.label')) !!}
                        {!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>__('messages.movies.create.fields.title.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('genre',__('messages.movies.create.fields.genre.label')) !!}
                        {!! Form::text('genre',null,['class'=>'form-control','required','placeholder'=>__('messages.movies.create.fields.genre.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('releaseDate',__('messages.movies.create.fields.releaseDate.label')) !!}
                        {!! Form::date('releaseDate',null,['class'=>'form-control','required','placeholder'=>__('messages.movies.create.fields.releaseDate.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('price',__('messages.movies.create.fields.price.label')) !!}
                        {!! Form::number('price',null,['class'=>'form-control','placeholder'=>__('messages.movies.create.fields.price.placeholder'),'required','step'=>"0.01"]) !!}
                    </div>

                </div>
                {!! Form::submit(__('messages.elements.buttons.add'),['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row update mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.movies.update.title')}}
                <div class="float-right"><button type="button" class="btn btn-primary btn-sm btn-close">Zamknij</button></div>
            </div>
            <div class="card-body">

                <h5 class="card-title">
                <p>{{__('messages.movies.update.description')}}</p>
                {!! Form::open(['class'=>'update']) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('title',__('messages.movies.update.fields.title.label')) !!}
                        {!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>__('messages.movies.update.fields.title.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('genre',__('messages.movies.update.fields.genre.label')) !!}
                        {!! Form::text('genre',null,['class'=>'form-control','required','placeholder'=>__('messages.movies.update.fields.genre.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('releaseDate',__('messages.movies.update.fields.releaseDate.label')) !!}
                        {!! Form::date('releaseDate',null,['class'=>'form-control','required','placeholder'=>__('messages.movies.update.fields.releaseDate.placeholder')]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('price',__('messages.movies.update.fields.price.label')) !!}
                        {!! Form::number('price',null,['class'=>'form-control','placeholder'=>__('messages.movies.update.fields.price.placeholder'),'required','step'=>"0.01"]) !!}
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

                {{__('messages.movies.datatable.title')}}
                <div class="float-right"><button type="button" class="btn btn-primary create btn-sm">{{__('messages.elements.buttons.add')}}</button></div>
            </div>
            <div class="card-body">
                <div class="table-responsive p-t-10">
                    <table id="" class="table" style="width:100%">
                        <thead>
                        <tr>
                            <th>{{__('messages.movies.datatable.fields.id')}}</th>
                            <th>{{__('messages.movies.datatable.fields.title')}}</th>
                            <th>{{__('messages.movies.datatable.fields.releaseDate')}}</th>
                            <th>{{__('messages.movies.datatable.fields.genre')}}</th>
                            <th>{{__('messages.movies.datatable.fields.price')}}</th>
                            <th>{{__('messages.movies.datatable.fields.select')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            window.datatable = $('.table').DataTable({
                                "language":
                                    { {!!  __('messages.movies.datatable.json')!!}

                                },
                                columns: [
                                    {data: 'id', "sClass": 'id'},
                                    {data: 'title', "sClass": 'title'},
                                    {data: 'releaseDate', "sClass": 'releaseDate'},
                                    {data: 'genre', "sClass": 'genre'},
                                    {data: 'price', "sClass": 'price'},
                                    {
                                        name: "buttons",
                                        "targets": -1,
                                        "data": null,
                                        "defaultContent": `<div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Wybierz
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
                                    "url": "{{Route('home.movies.get')}}",
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
