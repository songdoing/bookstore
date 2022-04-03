<?php
function getHelloWorld(){
    return '<h1>Hello World! Jenny Song!</h1>';
}

function registerPostType(){
    register_post_type('book', [
        'public' => true,
        'label' => 'Books',
    ]);
}
add_action('init', 'registerPostType'); 

?>