<?php if(!defined('KIRBY')) exit ?>

title: Blogpost
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  tags:
    label: Tags
    type:  tags
  excerpt:
    label: Excerpt
    type:  textarea
  text:
    label: Content
    type:  textarea
