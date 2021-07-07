<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class("relative"); ?>>
<?php wp_body_open(); ?>
<div id="page" class="flex flex-col min-h-screen font-general bg-[#E5E5E5]">
  <?php get_template_part( 'template-parts/header/site-header' ); ?>

  <main id="main" class="flex-grow" role="main">