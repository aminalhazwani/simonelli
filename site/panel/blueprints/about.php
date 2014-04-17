<?php if(!defined('KIRBY')) exit ?>

# about blueprint

title: Page
pages: false
files: false
fields:
  title: 
    label: Title
    type:  text
  mail:
    label: E-mail
    type: text
    validate: email
  mailintern:
    label: E-mail Intership
    type: text
    validate: email
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