<?php if(!defined('KIRBY')) exit ?>

title: Video
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
  tags:
    label: Tags
    type: tags
  youtube:
    label: YouTube
    width: 1/2
    icon: youtube
  vimeo:
    label: Vimeo
    width: 1/2
  text:
    label: Text
    type:  textarea
