<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'pinned_topics' => 'Angepinnte Threads',
    'slogan' => "es ist gefährlich, alleine zu spielen.",
    'subforums' => 'Subforen',
    'title' => 'Foren',

    'covers' => [
        'edit' => 'Cover bearbeiten',

        'create' => [
            '_' => 'Banner festlegen',
            'button' => 'Bild hochladen',
            'info' => 'Das Banner sollte :dimensions groß sein. Du kannst dein Bild auch hier ablegen, um es hochzuladen.',
        ],

        'destroy' => [
            '_' => 'Banner entfernen',
            'confirm' => 'Bist du dir sicher, dass du das Banner entfernen willst?',
        ],
    ],

    'forums' => [
        'forums' => 'Foren',
        'latest_post' => 'Neuester Beitrag',

        'index' => [
            'title' => 'Forum-Startseite',
        ],

        'topics' => [
            'empty' => 'Keine Threads!',
        ],
    ],

    'mark_as_read' => [
        'forum' => 'Forum als gelesen markieren',
        'forums' => 'Foren als gelesen markieren',
        'busy' => 'Als gelesen markieren...',
    ],

    'post' => [
        'confirm_destroy' => 'Beitrag wirklich entfernen?',
        'confirm_restore' => 'Beitrag wirklich wiederherstellen?',
        'edited' => 'Zuletzt von :user :when bearbeitet, insgesamt :count_delimited Mal bearbeitet.',
        'posted_at' => 'erstellt :when',
        'posted_by_in' => 'gepostet von :username in :forum',

        'actions' => [
            'destroy' => 'Beitrag löschen',
            'edit' => 'Beitrag bearbeiten',
            'report' => 'Beitrag melden',
            'restore' => 'Beitrag wiederherstellen',
        ],

        'create' => [
            'title' => [
                'reply' => 'Neue Antwort',
            ],
        ],

        'info' => [
            'post_count' => ':count_delimited Beitrag|:count_delimited Beiträge',
            'topic_starter' => 'Thread-Starter',
        ],
    ],

    'search' => [
        'go_to_post' => 'Gehe zu Beitrag',
        'post_number_input' => 'beitragsnummer hier eingeben',
        'total_posts' => 'insgesamt :posts_count Beiträge',
    ],

    'topic' => [
        'confirm_destroy' => 'Thread wirklich löschen?',
        'confirm_restore' => 'Thread wirklich wiederherstellen?',
        'deleted' => 'gelöschter Thread',
        'go_to_latest' => 'letzte Antwort anschauen',
        'go_to_unread' => 'Zeige ersten ungelesenen Beitrag',
        'has_replied' => 'Du hast auf diesen Thread geantwortet',
        'in_forum' => 'in :forum',
        'latest_post' => ':when von :user',
        'latest_reply_by' => 'letzte Antwort von :user',
        'new_topic' => 'Neuen Thread erstellen',
        'new_topic_login' => 'Melde dich an, um einen neuen Thread zu erstellen',
        'post_reply' => 'Antworten',
        'reply_box_placeholder' => 'Zum Antworten hier Text eingeben',
        'reply_title_prefix' => 'Re',
        'started_by' => 'von :user',
        'started_by_verbose' => 'gepostet von :user',

        'actions' => [
            'destroy' => 'Thread löschen',
            'restore' => 'Thread wiederherstellen',
        ],

        'create' => [
            'close' => 'Schließen',
            'preview' => 'Vorschau',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => 'Bearbeiten',
            'submit' => 'Erstellen',

            'necropost' => [
                'default' => 'Dieser Thread ist seit längerer Zeit inaktiv. Poste nur, wenn du einen wichtigen Grund dazu hast.',

                'new_topic' => [
                    '_' => "Dieser Thread ist seit längerer Zeit inaktiv. :create, wenn du keinen wichtigen Grund zum Antworten hast.",
                    'create' => 'Erstelle einen neuen Thread',
                ],
            ],

            'placeholder' => [
                'body' => 'Inhalt hier eingeben',
                'title' => 'Hier klicken, um eine Überschrift festzulegen',
            ],
        ],

        'jump' => [
            'enter' => 'klicke, um die Nummer eines bestimmten Beitrags einzugeben',
            'first' => 'zum ersten Beitrag',
            'last' => 'zur letzten Antwort',
            'next' => '10 Antworten überspringen',
            'previous' => '10 Antworten zurückgehen',
        ],

        'logs' => [
            '_' => 'Thread-Logs',
            'button' => 'Thread-Logs durchsuchen',

            'columns' => [
                'action' => 'Action',
                'date' => 'Datum',
                'user' => 'User',
            ],

            'data' => [
                'add_tag' => 'Tag ":tag" hinzugefügt',
                'announcement' => 'Thread wurde angeheftet und als Ankündigung markiert',
                'edit_topic' => 'nach :title',
                'fork' => 'von :topic',
                'pin' => 'Thread angeheftet',
                'post_operation' => 'gepostet von :username',
                'remove_tag' => 'Tag ":tag" entfernt',
                'source_forum_operation' => 'von :forum',
                'unpin' => 'Thread gelöst',
            ],

            'no_results' => 'keine Logs gefunden...',

            'operations' => [
                'delete_post' => 'Beitrag gelöscht',
                'delete_topic' => 'Thread gelöscht',
                'edit_topic' => 'Thread-Überschrift geändert',
                'edit_poll' => 'Thread-Umfrage bearbeitet',
                'fork' => 'Thread kopiert',
                'issue_tag' => 'Tag erstellt',
                'lock' => 'Thread gesperrt',
                'merge' => 'Beiträge zu diesem Thread hinzugefügt',
                'move' => 'Thread verschoben',
                'pin' => 'Thread angeheftet',
                'post_edited' => 'Beitrag bearbeitet',
                'restore_post' => 'Beitrag wiederhergestellt',
                'restore_topic' => 'Thread wiederhergestellt',
                'split_destination' => 'Aufgeteilte Beiträge verschoben',
                'split_source' => 'Beiträge aufgeteilt',
                'topic_type' => 'Thread-Typ festgelegt',
                'topic_type_changed' => 'Thread-Typ geändert',
                'unlock' => 'Thread entsperrt',
                'unpin' => 'Thread gelöst',
                'user_lock' => 'Eigenen Thread gesperrt',
                'user_unlock' => 'Eigenen Thread entsperrt',
            ],
        ],

        'post_edit' => [
            'cancel' => 'Abbrechen',
            'post' => 'Speichern',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title_compact' => 'Foren-Threads Merkliste',

            'box' => [
                'total' => 'Abonnierte Threads',
                'unread' => 'Threads mit neuen Antworten',
            ],

            'info' => [
                'total' => 'Du hast :total Threads abonniert.',
                'unread' => 'Du hast :unread ungelesene Antworten in abonnierten Threads.',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => 'Thread nicht mehr abonnieren?',
                'title' => 'Nicht mehr abonnieren',
            ],
        ],
    ],

    'topics' => [
        '_' => 'Threads',

        'actions' => [
            'login_reply' => 'Melde dich an, um zu antworten',
            'reply' => 'Antworten',
            'reply_with_quote' => 'Beitrag in der Antwort zitieren',
            'search' => 'Suchen',
        ],

        'create' => [
            'create_poll' => 'Abstimmung erstellen',

            'preview' => 'Beitragsvorschau',

            'create_poll_button' => [
                'add' => 'Erstelle eine Abstimmung',
                'remove' => 'Abstimmungs-Erstellung abbrechen',
            ],

            'poll' => [
                'hide_results' => 'Ergebnisse der Umfrage verstecken.',
                'hide_results_info' => 'Sie werden erst nach Abschluss der Umfrage angezeigt.',
                'length' => 'Abstimmung offen für',
                'length_days_suffix' => 'Tage',
                'length_info' => 'Nichts eingeben für eine nie endende Abstimmung',
                'max_options' => 'Antworten pro User',
                'max_options_info' => 'Dies ist die Anzahl an Antworten, die jeder User maximal wählen kann.',
                'options' => 'Antworten',
                'options_info' => 'Platziere jede Antwort in einer neuen Zeile. Du kannst maximal 10 Antworten eingeben.',
                'title' => 'Frage',
                'vote_change' => 'Erlaube wiederholte Abstimmungen.',
                'vote_change_info' => 'Wenn aktiv, können Benutzer ihre Antworten ändern.',
            ],
        ],

        'edit_title' => [
            'start' => 'Titel bearbeiten',
        ],

        'index' => [
            'feature_votes' => 'Stern-Priorität',
            'replies' => 'Antworten',
            'views' => 'Aufrufe',
        ],

        'issue_tag_added' => [
            'to_0' => 'Tag "added" entfernen',
            'to_0_done' => 'Tag "added" entfernt',
            'to_1' => 'Tag "added" hinzufügen',
            'to_1_done' => 'Tag "added" hinzugefügt',
        ],

        'issue_tag_assigned' => [
            'to_0' => 'Tag "assigned" entfernen',
            'to_0_done' => 'Tag "assigned" entfernt',
            'to_1' => 'Tag "assigned" hinzufügen',
            'to_1_done' => 'Tag "assigned" hinzugefügt',
        ],

        'issue_tag_confirmed' => [
            'to_0' => 'Tag "confirmed" entfernen',
            'to_0_done' => 'Tag "confirmed" entfernt',
            'to_1' => 'Tag "confirmed" hinzufügen',
            'to_1_done' => 'Tag "confirmed" hinzugefügt',
        ],

        'issue_tag_duplicate' => [
            'to_0' => 'Tag "duplicate" entfernen',
            'to_0_done' => 'Tag "duplicate" entfernt',
            'to_1' => 'Tag "duplicate" hinzufügen',
            'to_1_done' => 'Tag "duplicate" hinzugefügt',
        ],

        'issue_tag_invalid' => [
            'to_0' => 'Tag "invalid" entfernen',
            'to_0_done' => 'Tag "invalid" entfernt',
            'to_1' => 'Tag "invalid" hinzufügen',
            'to_1_done' => 'Tag "invalid" hinzugefügt',
        ],

        'issue_tag_resolved' => [
            'to_0' => 'Tag "resolved" entfernen',
            'to_0_done' => 'Tag "resolved" entfernt',
            'to_1' => 'Tag "resolved" hinzufügen',
            'to_1_done' => 'Tag "resolved" hinzugefügt',
        ],

        'issue_tag_osulazer' => [
            'to_0' => '"osu!lazer"-Tag entfernen',
            'to_0_done' => '"osu!lazer" Tag entfernt',
            'to_1' => 'Tag "osu!lazer" hinzufügen',
            'to_1_done' => '"osu!lazer" Tag hinzugefügt',
        ],

        'issue_tag_osustable' => [
            'to_0' => '"osu!stable" Tag entfernen',
            'to_0_done' => '"osu!stable"-Tag entfernt',
            'to_1' => '"osu!stable"-Tag hinzufügen',
            'to_1_done' => '"osu!stable"-Tag hinzugefügt',
        ],

        'issue_tag_osuweb' => [
            'to_0' => '"osu!web"-Tag entfernen',
            'to_0_done' => '"osu!web"-Tag entfernt',
            'to_1' => '"osu!web"-Tag hinzufügen',
            'to_1_done' => '"osu!web"-Tag hinzugefügt',
        ],

        'lock' => [
            'is_locked' => 'Dieser Thread ist gesperrt und erlaubt keine weiteren Antworten',
            'to_0' => 'Thread entsperren',
            'to_0_confirm' => 'Thread entsperren?',
            'to_0_done' => 'Thread wurde entsperrt',
            'to_1' => 'Thread sperren',
            'to_1_confirm' => 'Thread sperren?',
            'to_1_done' => 'Thread wurde gesperrt',
        ],

        'moderate_move' => [
            'title' => 'In ein anderes Forum verschieben',
        ],

        'moderate_pin' => [
            'to_0' => 'Thread von den angepinnten Threads lösen',
            'to_0_confirm' => 'Thread lösen?',
            'to_0_done' => 'Thread wurde von den angepinnten Threads entfernt',
            'to_1' => 'Thread anpinnen',
            'to_1_confirm' => 'Thread anpinnen?',
            'to_1_done' => 'Thread wurde angepinnt',
            'to_2' => 'Thread anpinnen und als Ankündigung markieren',
            'to_2_confirm' => 'Thread anpinnen und als Ankündigung markieren?',
            'to_2_done' => 'Thread wurde angepinnt und als Ankündigung markiert',
        ],

        'moderate_toggle_deleted' => [
            'show' => 'Gelöschte Beiträge anzeigen',
            'hide' => 'Gelöschte Beiträge ausblenden',
        ],

        'show' => [
            'deleted-posts' => 'Gelöschte Beiträge',
            'total_posts' => 'Beiträge insgesamt',

            'feature_vote' => [
                'current' => 'Aktuelle Priorität: +:count',
                'do' => 'Bringe dieses Request voran',

                'info' => [
                    '_' => 'Dies ist ein :feature_request. Über Funktionsvorschläge können nur :supporters abstimmen.',
                    'feature_request' => 'Funktionsvorschlag',
                    'supporters' => 'Supporter',
                ],

                'user' => [
                    'count' => '{0} Keine Stimme|{1} :count_delimited Stimme|[2,*] :count_delimited Stimmen',
                    'current' => 'Du hast noch :votes.',
                    'not_enough' => "Du hast keine Stimmen mehr",
                ],
            ],

            'poll' => [
                'edit' => 'Umfrage bearbeiten',
                'edit_warning' => 'Bearbeiten der Umfrage wird die derzeitigen Ergebnisse entfernen!',
                'vote' => 'Abstimmung',

                'button' => [
                    'change_vote' => 'Stimme ändern',
                    'edit' => 'Umfrage bearbeiten',
                    'view_results' => 'Zu Ergebnissen springen',
                    'vote' => 'Abstimmen',
                ],

                'detail' => [
                    'end_time' => 'Abstimmung endet am :time',
                    'ended' => 'Abstimmung wurde am :time beendet',
                    'results_hidden' => 'Ergebnisse werden nach dem Abstimmungsende angezeigt.',
                    'total' => 'Stimmen insgesamt: :count',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => 'Kein Lesezeichen gesetzt',
            'to_watching' => 'Lesezeichen setzen',
            'to_watching_mail' => 'Lesezeichen mit Benachrichtigung',
            'tooltip_mail_disable' => 'Benachrichtigungen sind aktiviert. Zum Deaktivieren klicken',
            'tooltip_mail_enable' => 'Benachrichtigungen sind deaktiviert. Zum Aktivieren klicken',
        ],
    ],
];
