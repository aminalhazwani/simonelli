<?php if(!defined('KIRBY')) exit ?>

# news blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
    required: true
  date:
    label: Date
    type: date
    format: dd.mm.yy
    required: true
  category:
    label: Branch
    type: select
    options:
      news: news
    dafault: news
    required: true
  text: 
    label: Text
    type:  textarea
    size:  large
  tags: 
    label: Tags
    type:  tags
    index: all