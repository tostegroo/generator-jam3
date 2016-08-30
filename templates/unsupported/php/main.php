<!doctype html>
<html>
<head>
  <?php
    require('./lib/Meta.php');
    $meta = new Meta('share.json');
    $meta->write();
  ?>
  <title>{{repoName}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
  <link rel="apple-touch-icon" href="/assets/images/appicon57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/appicon72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/appicon57x57@2x.png">
  <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
  {{#if pushState}}<base href="/">{{/if}}
  <link rel="stylesheet" type="text/css" href="main.css">\{{#is NODE_ENV "production"}}\{{#if vendor}}
  <script type="text/javascript" src="\{{vendor}}"></script>\{{/if}}\{{/is}}
  <script type="text/javascript" src="bundle.js"></script>
</head>
  <body>
  </body>
</html>
