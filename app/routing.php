<!-- implementation de FastRoutes pour SimpleMVC -->
<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['add', '/item/add', ['GET', 'POST']], // action, url, method
        ['edit', '/item/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['delete', '/item/delete/{id:\d+}', 'GET'], // action, url, method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Category' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], 
    ],
    
];
