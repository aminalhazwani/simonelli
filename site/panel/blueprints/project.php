<?php if(!defined('KIRBY')) exit ?>

# project blueprint

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
  branch:
    label: Branch
    type: radio
    options:
      work: Work
      educational: Educational
    required: true
  category:
    required: true
  	label: Category
  	type: text
  orientation:
    label: Info
    type: radio
    default: top
    options:
      top: Top
      bottom: Bottom
  tags: 
    label: Tags
    type:  tags
    index: all
  manufacter:
    required: true
  	label: Manufacter
  	type: text
  manufacterurl:
    label: Manufacter Url
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
    buttons: true