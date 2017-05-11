<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  intro:
    label: Pullout
    type:  textarea
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
  coverImage:
    label: Cover Image
    type: image