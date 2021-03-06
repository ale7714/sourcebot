<?php
require '../src/app.php';
use Michelf\Markdown;

$html=Markdown::defaultTransform(file_get_contents('../README.md'));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sourcebot</title>
    <link rel="stylesheet" href="github-markdown.css">
    <style>
      .markdown-body {
        box-sizing: border-box;
        min-width: 200px;
        max-width: 980px;
        margin: 0 auto;
        padding: 45px;
      }

      @media (max-width: 767px) {
        .markdown-body {
          padding: 15px;
        }
      }
    </style>
  </head>
  <body>
    <article class="markdown-body">
        <?=$html?>
    </article>
  </body>
</html>
