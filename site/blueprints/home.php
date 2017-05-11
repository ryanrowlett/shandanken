<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type: text

  modal:
    label: Modal
    type: checkbox
    text: Do you want to display the modal?

  name:
    label: Modal Title
    type: text
    validate: 
      minLength: 10
      maxLength: 100

  text:
    label: Modal Body
    type: textarea

  button:
    type:text
    label: Button CTA
    validate: 
      minLength: 1
      maxLength: 20

  destination:
    label: URL
    type: url

