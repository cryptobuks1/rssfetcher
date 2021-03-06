<?php

return [
    'plugin' => [
        'name' => 'RSS Fetcher',
        'description' => 'Sammel RSS Feeds aus unterschiedlichen Quellen um sie in deine Seite einzubinden',
    ],
    'permissions' => [
        'access_sources' => 'Quellen verwalten',
        'access_items' => 'Artikel verwalten',
        'access_import_export' => 'Imports und Exports erlauben',
    ],
    'navigation' => [
        'menu_label' => 'RSS Fetcher',
        'side_menu_label_sources' => 'Quellen',
        'side_menu_label_items' => 'Artikel',
        'side_menu_label_feeds' => 'Feeds',
    ],
    'source' => [
        'source' => 'Quelle',
        'sources' => 'Quellen',
        'name' => 'Name',
        'source_url' => 'Quellen-URL',
        'source_id' => 'Quellen ID',
        'description' => 'Beschreibung',
        'enabled' => 'Aktiviert',
        'enabled_comment' => 'Schalter umlegen um diese RSS Quelle zu aktivieren',
        'items_count' => 'Artikelnummer',
        'last_fetched' => 'Zuletzt empfangen',
        'max_items' => 'Max. Artikel',
        'max_items_description' => 'Maximum der zu empfangenen Artikel aus der Quelle',
        'publish_new_items' => 'Veröffentliche frisch empfangene Artikel',
        'source_not_enabled' => 'Die Quelle ist nicht aktiviert, bitte vorher aktivieren',
        'items_fetch_success' => 'Artikel erfolgreich für diese Quelle empfangen',
        'items_fetch_fail' => 'Es ist ein Fehler beim Abrufen der Artikel aufgetreten: :error',
        'new_source' => 'Neue Quelle',
        'create_source' => 'Quelle anlegen',
        'edit_source' => 'Quelle bearbeiten',
        'manage_sources' => 'Quellen verwalten',
        'return_to_sources' => 'Zurück zur Quellenübersicht',
        'fetch_items' => 'Artikel abrufen',
        'fetching_items' => 'Artikel werden abgerufen...',
        'delete_confirm' => 'Bist du sicher?',
        'import_sources' => 'Quellen importieren',
        'export_sources' => 'Quellen exportieren',
        'update_existing_sources' => 'Vorhandene Quelle aktualisieren',
        'update_existing_sources_comment' => 'Aktiviere dieses Kontrollkästchen um Quellen mit exakt der gleichen ID zu aktualisieren.',
    ],
    'item' => [
        'item' => 'Artikel',
        'items' => 'Artikel',
        'items_per_page' => 'Anzahl der Artikel pro Seite',
        'items_per_page_validation' => 'Ungültiger Wert für die Anzahl der Artikel pro Seite',
        'new_item' => 'Neuer Artikel',
        'create_item' => 'Artikel erstellen',
        'edit_item' => 'Artikel bearbeiten',
        'manage_items' => 'Artikel verwalten',
        'return_to_items' => 'Zurück zur Artikelübersicht',
        'delete_confirm' => 'Bist du sicher?',
        'hide_published' => 'Veröffentlichte ausblenden',
        'import_sources' => 'Import sources', // TODO: translate to Deutsch
        'export_sources' => 'Export sources', // TODO: translate to Deutsch
        'publish' => 'Veröffentlicht',
        'unpublish' => 'Unveröffentlicht',
        'enclosure_url' => 'Enclosure URL', // TODO: translate to Deutsch
        'enclosure_length' => 'Enclosure length', // TODO: translate to Deutsch
        'enclosure_type' => 'Enclosure type', // TODO: translate to Deutsch
        'title' => 'Titel',
        'link' => 'Link',
        'description' => 'Beschreibung',
        'author' => 'Autor',
        'category' => 'Kategorie',
        'comments' => 'Kommentare',
        'published_at' => 'Veröffentlicht am',
        'is_published' => 'Veröffentlicht',
        'is_published_comment' => 'Schalter umlegen um den Artikel zu Veröffentlichen',
    ],
    'feed' => [
        'feed' => 'Feed',
        'feeds' => 'Feeds',
        'title' => 'Titel',
        'type' => 'Art',
        'description' => 'Beschreibung',
        'path' => 'Pfad',
        'path_placeholder' => 'pfad/zum/feed',
        'path_comment' => 'Gebe einen relativen Pfad ein über den das Feed erreichbar sein soll, z.B. neuigkeiten/lieblingsinfos/aktuell',
        'sources' => 'Quellen',
        'sources_comment' => 'Wähle Quellen die in diesem Feed einbezogen werden sollen',
        'enabled' => 'Aktiviert',
        'enabled_comment' => 'Schalter umlegen um diesen Feed zu aktivieren Flick',
        'max_items' => 'Maximale Artikelanzahl im Feed',
        'new_feed' => 'Neuer Feed',
        'return_to_feeds' => 'Zurück zur Feedübersicht',
        'delete_confirm' => 'Bist du sicher?',
        'manage_feeds' => 'Feeds verwalten',
        'create_feed' => 'Feed erzeugen',
        'edit_feed' => 'Feed bearbeiten',
    ],
    'component' => [
        'item_list' => [
            'name' => 'Artikelübersicht',
            'description' => 'Übersicht der letzten RSS Artikel.',
        ],
        'paginatable_item_list' => [
            'name' => 'Umblätterbare Artikelübersicht',
            'description' => 'Umblätterbare Übersicht der RSS Artikel.',
        ],
        'source_list' => [
            'name' => 'Quellenübersicht',
            'description' => 'Übersicht der Quellen.',
        ],
    ],
    'report_widget' => [
        'headlines' => [
            'name' => 'RSS Artikel Widget',
            'description' => 'Zeige die zuletzt empfangenen RSS Artikel',
            'title_title' => 'Widget Titel',
            'title_default' => 'Neuste Schlagzeilen',
            'title_required' => 'Widget Titel ist erforderlich',
            'max_items_title' => 'Anzahl der anzuzeigenden Artikel',
            'date_format_title' => 'Datumsformat',
            'date_format_description' => 'Bitte beachte die offizielle PHP-Dokumentation zur Datumsformatierung auf php.net.',
        ],
    ],
];
