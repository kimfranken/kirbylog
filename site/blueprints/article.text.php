<?php if(!defined('KIRBY')) exit ?>

title: Artikel
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  date:
    label: Date
    type: date
    width: 1/2
    format: DD.MM.YYYY
    required: true  
  text:
    label: Text
    type:  textarea
