<?php

return [
    'menu' => [
        'login'=>'Accedere',
        'register'=>'Registrati',
        'movies' => "Film",
        'home' => 'Casa',
        'employees' => ' Dipendenti ',
        'about' => "Su di me",
        'logout'=>'Disconnettersi'
    ],
    'elements' => [
        'buttons' => [
            'close' => 'Chiudi',
            'edit' => 'Modifica',
            'quickEdit' => 'Modifica rapida',
            'remove' => 'Rimuovi',
            'add' => 'Crea',
            'select' => 'Seleziona',
            'show' => 'Anteprima',
        ]
    ],
    'index' => [
        'card' => [

            'title' => 'COVID',
            'content' => 'Pandemia COVID-19 - una pandemia della malattia infettiva COVID-19 causata dal coronavirus SARS-CoV-2. È iniziata come un epidemia il 17 novembre 2019 nella città di Wuhan, provincia di Hubei, Cina centrale, ed è stata dichiarata pandemia dall Organizzazione mondiale della sanità (OMS) l11 marzo 2020. Nel periodo da novembre 2019 a gennaio 2020, la malattia è comparsa principalmente nella città di Wuhan, nella Cina centrale, ma già a metà gennaio il virus si è diffuso in tutta la Cina. Nella seconda metà di febbraio sono scoppiati focolai di contagi con centinaia di pazienti in Corea del Sud, Italia e Iran. Dal 4 marzo 2020 sono state registrate infezioni da SARS-CoV-2 in Polonia. Il 13 marzo 2020, l Europa è diventata il centro della pandemia di coronavirus. Successivamente, la malattia si è diffusa in altri continenti e ultima malattia conosciuta nel dicembre 2020. ',
            'footer' => 'Fonte:',
        ]
    ],
    'about' => [
        'card' => [
            'title' => "A proposito di me",
            'content' => "Ciao, sono Paweł! Frequento il secondo anno di informatica presso la Facoltà di WSB di Chorzów.",

        ]
    ],
    'posts' => [
        'create' => [
            'title' => "Nowy post",
            'description' => "Za pomocą tego formularza można dodawać nowe posty.",
            'fields' => [
                'title' => [
                    'label' => 'Tytuł:',
                    'placeholder' => "Wpisz tytuł"
                ],
                'description' => [
                    'label' => 'Opis:',
                    'placeholder' => 'Wpisz opis',
                ],
                'poster' => [
                    'label' => 'Okładka:',
                    'placeholder' => 'Wybierz okładkę',
                ],
            ]
        ],
        'update' => [
            'title' => "Edycja postu",
            'description' => "Za pomocą tego formularza można edytować istniejące już posty.",
            'fields' => [
                'title' => [
                    'label' => 'Tytuł:',
                    'placeholder' => "Wpisz tytuł"
                ],
                'author_id'=>[
                    'label'=>'Autor:',
                    'placeholder'=> 'Wybierz autora',
                ],
                'description' => [
                    'label' => 'Opis:',
                    'placeholder' => 'Wpisz opis',
                ],
                'poster' => [
                    'label' => 'Okładka:',
                    'placeholder' => 'Wybierz okładkę',
                ],
            ]
        ],
        'datatable' => [
            'title' => 'Posty',
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
                'author' => "Autor",
                'select' => 'Wybierz',
                'updated_at' => 'Data ostatniej edycji',
                'created_at' => 'Data utworzenia',
            ]

        ],
    ],
    'movies' => [
        'create' => [
            'title' => "Nuovo film",
            'description' => "Puoi aggiungere nuovi video con questo modulo.",
            'fields' => [
                'title' => [
                    'label' => 'Titolo ',
                    'placeholder' => "Immettere un titolo"
                ],
                'genre' => [
                    'label' => 'Genere ',
                    'placeholder' => 'Inserisci il genere',
                ],
                'releaseDate' => [
                    'label' => 'Data di rilascio',
                    'placeholder' => 'Immettere la data di rilascio',
                ],
                'price' => [
                    'label' => 'Prezzo',
                    'placeholder' => 'Inserisci il prezzo',
                ],
                'rating' => [
                    'label' => 'Valutazione',
                    'placeholder' => 'Immettere una valutazione',
                ]
            ]
        ],
        'update' => [
            'title' => "Modifica del film",
            'description' => "I filmati esistenti possono essere modificati utilizzando questo modulo.",
            'fields' => [
                'title' => [
                    'label' => 'Titolo ',
                    'placeholder' => "Immettere un titolo"
                ],
                'genre' => [
                    'label' => 'Genere ',
                    'placeholder' => 'Inserisci il genere',
                ],
                'releaseDate' => [
                    'label' => 'Data di rilascio',
                    'placeholder' => 'Immettere la data di rilascio',
                ],
                'price' => [
                    'label' => 'Prezzo',
                    'placeholder' => 'Inserisci il prezzo',
                ],
                'rating' => [
                    'label' => 'Valutazione',
                    'placeholder' => 'Immettere una valutazione',
                ]
            ]
        ],
        'datatable' => [
            'title' => 'Film',
            'json' => '
                                    "processing":     "In lavorazione...",
                                    "search":         "Ricerca:",
                                    "lengthMenu":     "Mostra _MENU_ elementi",
                                    "info":           "Articoli da _START_ a _END_ di _TOTAL_ in totale",
                                    "infoEmpty":      "0 articoli su 0 disponibili",
                                    "infoFiltered":   "(filtraggio di _MAX_ articoli disponibili)",
                                    "loadingRecords": "Caricamento in corso ...",
                                    "zeroRecords":    "Nessun elemento corrispondente trovato",
                                    "emptyTable":     "Nessun dato",
                                    "paginate": {
                                        "first":      "Primo",
                                        "previous":   "Precedente",
                                        "next":       "Il prossimo",
                                        "last":       "Finale"
                                    },
                                    "aria": {
                                        "sortAscending": ": attiva per ordinare la colonna in ordine crescente",
                                        "sortDescending": ": attiva per ordinare la colonna in modo discendente"
                                    }',
            'fields' => [
                'id' => 'Id',
                'title' => 'Titolo',
                'releaseDate' => "Data di rilascio",
                'genre' => "Genere",
                'price' => 'Prezzo',
                'select' => 'Seleziona',
                'rating' => 'Valutazione',
                'updated_at' => "Data dell'ultima edizione",
                'created_at' => 'Data di creazione',
            ]

        ],
    ],
    'employees' => [
        'create' => [
            'title' => "Nuovo impiegato",
            'description' => "Con questo modulo puoi aggiungere nuovi dipendenti",
            'fields' => [
                'first_name' => [
                    'label' => 'Nome:',
                    'placeholder' => "Inserisci nome"
                ],
                'last_name' => [
                    'label' => 'Cognome:',
                    'placeholder' => 'Inserisci il cognome',
                ],
                'birth_date' => [
                    'label' => 'Data di nascita:',
                    'placeholder' => 'Inserisci la tua data di nascita',
                ],
                'phone' => [
                    'label' => 'Numero di telefono:',
                    'placeholder' => 'Inserisci numero di telefono'
                ]
            ]
        ],
        'update' => [
            'title' => "Modifica di un dipendente",
            'description' => "Con questo modulo puoi modificare i dipendenti esistenti.",
            'fields' => [
                'first_name' => [
                    'label' => 'Nome:',
                    'placeholder' => "Inserisci nome"
                ],
                'last_name' => [
                    'label' => 'Cognome:',
                    'placeholder' => 'Inserisci il cognome',
                ],
                'birth_date' => [
                    'label' => 'Data di nascita:',
                    'placeholder' => 'Inserisci la tua data di nascita',
                ],
                'phone' => [
                    'label' => 'Numero di telefono:',
                    'placeholder' => 'Inserisci numero di telefono'
                ]
            ]
        ],
        'datatable' => [
            'title' => "Dipendenti",
            'json' => '
                                    "processing":     "In lavorazione...",
                                    "search":         "Ricerca:",
                                    "lengthMenu":     "Mostra _MENU_ elementi",
                                    "info":           "Articoli da _START_ a _END_ di _TOTAL_ in totale",
                                    "infoEmpty":      "0 articoli su 0 disponibili",
                                    "infoFiltered":   "(filtraggio di _MAX_ articoli disponibili)",
                                    "loadingRecords": "Caricamento in corso ...",
                                    "zeroRecords":    "Nessun elemento corrispondente trovato",
                                    "emptyTable":     "Nessun dato",
                                    "paginate": {
                                        "first":      "Primo",
                                        "previous":   "Precedente",
                                        "next":       "Il prossimo",
                                        "last":       "Finale"
                                    },
                                    "aria": {
                                        "sortAscending": ": attiva per ordinare la colonna in ordine crescente",
                                        "sortDescending": ": attiva per ordinare la colonna in modo discendente"
                                    }',
            'fields' => [
                'id' => 'Id',
                'first_name' => 'Nome',
                'last_name' => 'Cognome',
                'birth_date' => 'Data di nascita',
                'phone' => 'Numero di telefono',
                'select' => 'Seleziona',
                'updated_at' => 'Data ultima modifica',
                'created_at' => 'Data di creazione',
            ]

        ],
    ]

];
