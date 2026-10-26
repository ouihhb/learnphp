<?php

namespace App\Controllers;

class PublicController {
    public function index() {
        $title = 'World';
        $posts = [
            [
                'title' => 'Some World title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some World body 1',
            ],
            [
                'title' => 'Some World title 2',
                'date' => 'January 4, 2021',
                'author' => 'Jaanus',
                'body' => 'Some World body 2',
            ],
            [
                'title' => 'Some World title 3',
                'date' => 'January 6, 2021',
                'author' => 'Tseburaska',
                'body' => 'Some World body 3',
            ],
            [
                'title' => 'Some World title 4',
                'date' => 'January 8, 2021',
                'author' => 'Gena',
                'body' => 'Some World body 4',
            ],
        ];
        view('index', compact('title', 'posts'));
    }

    public function us() {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some U.S body 1',
            ],
            [
                'title' => 'Some U.S title 2',
                'date' => 'January 4, 2021',
                'author' => 'Jaanus',
                'body' => 'Some U.S body 2',
            ],
            [
                'title' => 'Some U.S title 3',
                'date' => 'January 6, 2021',
                'author' => 'Tseburaska',
                'body' => 'Some U.S body 3',
            ],
            [
                'title' => 'Some U.S title 4',
                'date' => 'January 8, 2021',
                'author' => 'Gena',
                'body' => 'Some U.S body 4',
            ],
        ];
        view('us', compact('posts'));
    }

    public function tech() {
        $title = 'Technology';

        $posts = [
            [
                'title' => 'Artificial Intelligence Is Changing Technology',
                'date' => 'October 6, 2026',
                'author' => 'Maksim',
                'body' => 'Artificial intelligence is becoming more popular and is used in many modern applications.',
            ],
            [
                'title' => 'New Smartphones Are Getting Smarter',
                'date' => 'September 28, 2026',
                'author' => 'Jarik',
                'body' => 'Modern smartphones are becoming faster and more powerful every year.',
            ],
            [
                'title' => 'The Future of Web Development',
                'date' => 'September 25, 2026',
                'author' => 'Ruslan',
                'body' => 'Web technologies continue to develop and make websites faster and easier to use.',
            ],
            [
                'title' => 'How Mobile Apps Are Built',
                'date' => 'September 22, 2026',
                'author' => 'Ilja',
                'body' => 'Mobile apps combine a user interface with application logic and data storage to provide useful tools on a smartphone.',
            ],
        ];

        view('tech', compact('title', 'posts'));
    }

    public function forms() {
        view('forms');
    }

    public function answer() {
        dump($_GET, $_POST);
    }
}