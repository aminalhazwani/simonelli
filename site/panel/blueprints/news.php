<?php if(!defined('KIRBY')) exit ?>

# news blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  date:
    label: Date
    type: date
    format: dd.mm.yy
  category:
  	label: Category
  	type: text
  text: 
    label: Text
    type:  textarea
    size:  large
  tags: 
    label: Tags
    type:  tags
    index: all