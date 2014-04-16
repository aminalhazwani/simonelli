<?php if(!defined('KIRBY')) exit ?>

# about blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  mail:
    label: E-mail
    type: text
  phone:
    label: Phone Number
    type: text
  street:
    label: Street
    type: text
  city:
    label: City
    type: text
  state:
    label: State
    type: text
  clients:
    label: Clients
    type: tags
  text: 
    label: Text
    type:  textarea
    size:  large