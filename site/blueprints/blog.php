<?php if(!defined('KIRBY')) exit ?>

title: Home
pages:
  limit: 10
  sort: flip
  template:
    - article.text
    - article.link
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
