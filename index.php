<?php
/**
 * @author      Whyildan Wahyu Pratama <whyldan.9g@gmail.com>
 * @link        https://github.com/whyldan
 *
 */

include 'makul.php';
include 'docs.php';
include 'helper/helper.php';

$helper = new Helper();
$segment = $helper->getUrlSegment();
$method = $helper->getMethod();

switch ($segment) {
    case '/':
        echo htmlspecialchars_decode($html);
        break;

    case '/api/makul':
        header('Content-Type: application/json; charset=utf-8');
        $makul = new Makul();

        if ($method == 'GET') {
            echo json_encode($makul->get(), JSON_PRETTY_PRINT);
        } else if ($method == 'POST') {
            $req = [
                'kdmk' => $_POST['kdmk'] ?? '',
                'nama' => $_POST['nama'] ?? '',
                'sks_teori' => $_POST['sks_teori'] ?? '',
                'sks_praktek' => $_POST['sks_praktek'] ?? '',
            ];

            echo json_encode($makul->store($req), JSON_PRETTY_PRINT);
        }

        break;

    default:
        echo "Halaman yang anda cari tidak ditemukan!";
        break;
}
