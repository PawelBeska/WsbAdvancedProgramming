<?php

return [
    'menu' => [
        'movies' => "Film",
        'home' => 'Casa',
        'employees' => ' Dipendenti ',
        'about' => "Su di me"
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