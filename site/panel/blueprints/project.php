<?php if(!defined('KIRBY')) exit ?>

# project blueprint

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
  branch:
    label: Branch
    type: radio
    options:
      work: work
      educational: educational
    default: firstValue
  category:
  	label: Category
  	type: text
  tags: 
    label: Tags
    type:  tags
    index: all
  manufacter:
  	label: Manufacter
  	type: text
  photo:
  	label: Photographer
  	type: text
  materials:
  	label: Materials
  	type: tags
  text: 
    label: Text
    type:  textarea
    size:  large