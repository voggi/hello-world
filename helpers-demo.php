<?php

// Import the helper functions
require 'helpers.php';

//Then test them out:
dump('hi');

dump (['apples', 'oranges', 'pears']);

dump(sanitize('<script>alert("Hi!")</script'>));

?>
