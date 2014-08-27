<?php if(!defined('KIRBY')) exit ?>

# online blueprint

title: Page
pages: 
  template: online
files: false
fields:
  title: 
    label: Website name
    type:  text
  date:
    label: Date
    type: date
    format: dd.mm.yy
  link:
  	label: Link
  	type: text