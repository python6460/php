<?php
$x = tidy_parse_string("<body><div>Content</div></body>");
var_dump($x->body()->child[0]->name);
var_dump($x->body()->child[0]->getParent()->name);
var_dump($x->root()->getParent());
?>
