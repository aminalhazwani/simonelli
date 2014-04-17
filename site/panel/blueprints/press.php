<?php if(!defined('KIRBY')) exit ?>

# press blueprint

title: Page
pages: false
files: true
fields:
  title: 
    label: Magazine name
    type:  text
  date:
    label: Date
    type: date
    format: dd.mm.yy
  tags: 
    label: Tags
    type:  tags
    index: all
  	