<?php

echo page('blog')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => 'Aktuelle Artikel',
  'description' => '',
  'link'        => 'blog'
));
