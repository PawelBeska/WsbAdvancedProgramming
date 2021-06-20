<div id="form-errors"></div>
<div class="row create mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                {{__('messages.posts.create.title')}}
                <div class="float-right">
                    <button type="button"
                            class="btn btn-danger btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button>
                </div>
            </div>
            <div class="card-body">
                <p>{{__('messages.posts.create.description')}}</p>
                {!! Form::open(['class'=>'create','method'=>'post','url'=>route('home.posts.store')]) !!}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('title',__('messages.posts.create.fields.title.label')) !!}
                        {!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>__('messages.posts.create.fields.title.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('poster',__('messages.posts.create.fields.poster.label')) !!}
                        {!! Form::file('poster',null,['class'=>'form-control','placeholder'=>__('messages.posts.create.fields.poster.placeholder'),'required']) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('description',__('messages.posts.create.fields.description.label')) !!}
                        {!! Form::textarea('description',null,['class'=>'form-control','required','placeholder'=>__('messages.posts.create.fields.description.placeholder')]) !!}
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
                            class="btn btn-danger btn-sm btn-close">{{__('messages.elements.buttons.close')}}</button>
                </div>
            </div>
            <div class="card-body">

                <p>{{__('messages.posts.update.description')}}</p>
                {!! Form::open(['class'=>'update']) !!}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('title',__('messages.posts.create.fields.title.label')) !!}
                        {!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>__('messages.posts.create.fields.title.placeholder')]) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('poster',__('messages.posts.create.fields.poster.label')) !!}
                        {!! Form::file('poster',null,['class'=>'form-control','placeholder'=>__('messages.posts.create.fields.poster.placeholder'),'required']) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('description',__('messages.posts.create.fields.description.label')) !!}
                        {!! Form::textarea('description',null,['class'=>'form-control','required','placeholder'=>__('messages.posts.create.fields.description.placeholder')]) !!}
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
                {{__('messages.posts.datatable.title')}}
                <div class="float-right">
                    <button type="button" class="btn btn-primary create btn-sm">{{__('messages.elements.buttons.add')}}</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive p-t-10">
                    <table id="" class="table" style="width:100%">
                        <thead>
                        <tr>
                            <th>{{__('messages.posts.datatable.fields.id')}}</th>
                            <th>{{__('messages.posts.datatable.fields.title')}}</th>
                            <th>{{__('messages.posts.datatable.fields.author')}}</th>
                            <th>{{__('messages.posts.datatable.fields.select')}}</th>
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
                                    {data: 'title', "sClass": 'title'},
                                    {data: 'author.email', "sClass": 'author.email'},
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
                                    "url": "{{Route('home.posts.get')}}",
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
