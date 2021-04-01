<?php

return [

    'elements' => [
        'buttons' => [
            'close' => 'Zamknij',
            'edit' => 'Edytuj',
            'quickEdit' => 'Szybka edycja',
            'remove' => 'Usuń',
            'add' => 'Stwórz',
            'select' => 'Wybierz',
            'show' => 'Podgląd',
        ]
    ],
    'index' => [
        'card' => [

            'title' => 'COVID',
            'content' => 'Pandemia COVID-19 – pandemia zakaźnej choroby COVID-19 wywoływanej przez koronawirusa SARS-CoV-2. Rozpoczęła się jako epidemia 17 listopada 2019 w mieście Wuhan, w prowincji Hubei, w środkowych Chinach, a 11 marca 2020 została uznana przez Światową Organizację Zdrowia (WHO) za pandemię. W okresie od listopada 2019 do stycznia 2020 zachorowania pojawiały się głównie w mieście Wuhan, w środkowych Chinach, ale już w połowie stycznia wirus rozprzestrzenił się w całych Chinach. W drugiej połowie lutego ogniska zakażeń z setkami chorych wybuchły w Korei Południowej, we Włoszech oraz w Iranie. Od 4 marca 2020 są notowane zakażenia wirusem SARS-CoV-2 w Polsce. 13 marca 2020 WHO podała, że centrum pandemii koronawirusa stała się Europa. Później zachorowania rozlały się na pozostałe kontynenty, a ostatnim, na którym stwierdzono zachorowania, stała się w grudniu 2020 Antarktyda.',
            'footer' => 'Źródło: '
        ]
    ],
    'about' => [
        'card' => [
            'title' => "O mnie",
            'content' => "Cześć, jestem Paweł! Jestem na drugim roku informatyki na wydziale WSB w chorzowie.",

        ]
    ],
    'movies' => [
        'create' => [
            'title' => "Nowy film",
            'description' => "Za pomocą tego formularza można dodawać nowe filmy.",
            'fields' => [
                'title' => [
                    'label' => 'Tytuł: ',
                    'placeholder' => "Wpisz tytuł"
                ],
                'genre' => [
                    'label' => 'Gatunek ',
                    'placeholder' => 'Wpisz gatunek',
                ],
                'releaseDate' => [
                    'label' => 'Data wydania',
                    'placeholder' => 'Wpisz datę premiery',
                ],
                'price' => [
                    'label' => 'Cena',
                    'placeholder' => 'Wpisz cenę',
                ]
            ]
        ],
        'update' => [
            'title' => "Edycja filmu",
            'description' => "Za pomocą tego formularza można edytować istniejące już filmy.",
            'fields' => [
                'title' => [
                    'label' => 'Tytuł: ',
                    'placeholder' => "Wpisz tytuł"
                ],
                'genre' => [
                    'label' => 'Gatunek ',
                    'placeholder' => 'Wpisz gatunek',
                ],
                'releaseDate' => [
                    'label' => 'Data wydania',
                    'placeholder' => 'Wpisz datę premiery',
                ],
                'price' => [
                    'label' => 'Cena',
                    'placeholder' => 'Wpisz cenę',
                ]
            ]
        ],
        'datatable' => [
            'title' => 'Filmy',
            'json' => '
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
                                    }',
            'fields' => [
                'id' => 'Id',
                'title' => 'Tytuł',
                'releaseDate' => "Data premiery",
                'genre' => "Gatunek",
                'price' => 'Cena',
                'select' => 'Wybierz'
            ]

        ],
    ]
];