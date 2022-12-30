<?php
/**
 * @author      Whyildan Wahyu Pratama <whyldan.9g@gmail.com>
 * @link        https://github.com/whyldan
 *
 */

$uri = sprintf(
  '%s://%s/%s',
  isset($_SERVER['HTTPS']) ? 'https' : 'http',
  $_SERVER['HTTP_HOST'],
  trim($_SERVER['REQUEST_URI'], '/\\')
);

$server = sprintf('%s', $_SERVER['HTTP_HOST']);

if(strpos($server, '.') !== false){
  $api = 'api/makul';
}else{
  $api = '/api/makul';
}

$html = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dokumentasi API Makul - 20.240.0147</title>
    <style>
      @import url(\'https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap\');

      body{
        font-family: \'JetBrains Mono\', monospace;
      }

      .container {
        margin: 0 auto;
        max-width: 48rem;
        width: 90%;
      }

      .code-url{
        display: inline-block;
        width: 30rem !important;
        color: limegreen;
        background-color: black;
        padding: 8px 8px;
        font-size: 1rem;
        border-radius: 0.5em;
      }

      .code-curl{
        display: inline-block;
        width: 30rem !important;
        color: yellow;
        background-color: black;
        padding: 8px 8px;
        font-size: 1rem;
        border-radius: 0.5em;
      }

      .mb-0{
        margin-bottom: 0;
      }

      .mt-0{
        margin-top: 0;
      }

      .center{
        display: grid;
        place-items: center;
        align-content: center;
      }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="center">
            <h1 class="mb-0">UTS Web Service Application</h1>
            <h3 class="mb-0 mt-0">20.240.0147 - Whyildan Wahyu Pratama</h3>
            <h3 class="mb-0">List Endpoint API:</h3>
            <h3>&bull; Melihat Data Mata Kuliah (JSON): </h3>
            <code class="code-url">  GET: ' . $uri . $api . ' </code>
            <h3>Contoh URL Mengambil Data (cURL): </h3>
            <code class="code-curl">
              ' . "curl --location --request GET '". $uri . $api ."'" . '
            </code>
            <h3>&bull; Menambahkan Data Mata Kuliah: </h3>
            <code class="code-url">  POST: ' . $uri . $api . ' </code>
            <h3>Contoh URL Menambahkan Data (cURL): </h3>
            <code class="code-curl">
              ' . "curl --location --request POST '". $uri . $api ."'" . '
            </code>
          </div>
      </div>
  </body>
</html>';
