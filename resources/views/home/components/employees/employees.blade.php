

<div id="form-errors"></div>
<div class="row create mb-5" style="display: none">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                Nowy pracownik
                <div class="float-right"><button type="button" class="btn btn-primary btn-sm btn-close">Zamknij</button></div>
            </div>
            <div class="card-body">
                <p>Za pomocą tego formularza można dodawać nowych pracowników.</p>
                {!! Form::open(['class'=>'create','method'=>'post','url'=>route('home.employees.store')]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('first_name','Imie:') !!}
                        {!! Form::text('first_name',null,['class'=>'form-control','required','placeholder'=>'Wpisz imie']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('last_name','Nazwisko:') !!}
                        {!! Form::text('last_name',null,['class'=>'form-control','required','placeholder'=>'Wpisz nazwisko']) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('birth_date','Data urodzenia:') !!}
                        {!! Form::date('birth_date',null,['class'=>'form-control','required','placeholder'=>'Wpisz datę urodzenia']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('phone','Numer telefonu:') !!}
                        {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>'Wpisz numer telefonu','required']) !!}
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
                Edycja pracownika
                <div class="float-right"><button type="button" class="btn btn-primary btn-sm btn-close">Zamknij</button></div>
            </div>
            <div class="card-body">

                <h5 class="card-title">Szybka edycja</h5>
                <p>Za pomocą tego formularza można edytować istniejących już pracowników.</p>
                {!! Form::open(['class'=>'update']) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('first_name','Imie:') !!}
                        {!! Form::text('first_name',null,['class'=>'form-control','required','placeholder'=>'Wpisz imie']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('last_name','Nazwisko:') !!}
                        {!! Form::text('last_name',null,['class'=>'form-control','required','placeholder'=>'Wpisz nazwisko']) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('birth_date','Data urodzenia:') !!}
                        {!! Form::date('birth_date',null,['class'=>'form-control','required','placeholder'=>'Wpisz datę urodzenia']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('phone','Numer telefonu:') !!}
                        {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>'Wpisz numer telefonu','required']) !!}
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
               Lista pracowników
                <div class="float-right"><button type="button" class="btn btn-primary create btn-sm">Dodaj pracownika</button></div>
            </div>
            <div class="card-body">
                <div class="table-responsive p-t-10">
                    <table id="" class="table" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Data urodzenia</th>
                            <th>Numer telefonu</th>
                            <th>Wybierz</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            window.datatable = $('.table').DataTable({
                                "language":{
                                    "processing":     "Przetwarzanie...",
                                    "search":         "Szukaj:",
                                    "lengthMenu":     "Pokaż _MENU_ pozycji",
                                    "info":           "Pozycje od _START_ do _END_ z _TOTAL_ łącznie",
                                    "infoEmpty":      "Pozycji 0 z 0 dostępnych",
                                    "infoFiltered":   "(filtrowanie spośród _MAX_ dostępnych pozycji)",
                                    "loadingRecords": "Wczytywanie...",
                                    "zeroRecords":    "Nie znaleziono pasujących pozycji",
                                    "emptyTable":     "Brak danych",
                                    "paginate": {
                                        "first":      "Pierwsza",
                                        "previous":   "Poprzednia",
                                        "next":       "Następna",
                                        "last":       "Ostatnia"
                                    },
                                    "aria": {
                                        "sortAscending": ": aktywuj, by posortować kolumnę rosnąco",
                                        "sortDescending": ": aktywuj, by posortować kolumnę malejąco"
                                    }
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
                                                Wybierz
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item view"  href="#">Podgląd</a>
                                                <a class="dropdown-item update" href="#">Szybka edycja</a>
                                                <a class="dropdown-item remove" href="#">Usuń</a>
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
