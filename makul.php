<?php
/**
 * @author      Whyildan Wahyu Pratama <whyldan.9g@gmail.com>
 * @link        https://github.com/whyldan
 *
 */

include 'config/database.php';

class Makul extends Database
{

    public function get(): array
    {
        $query = "SELECT * FROM makul ORDER BY kdmk ASC";

        try {
            $data = $this->db->query($query);
            $data = $data->fetch_all(MYSQLI_ASSOC);

            $res = [
                'status' => 200,
                'success' => true,
                'data' => $data
            ];
        } catch (\Throwable $th) {
            $res = [
                'status' => 500,
                'success' => false,
                'message' => $th->getMessage()
            ];
        }

        return $res;
    }

    public function store($req): array
    {
        // return $req;

        if ($req['kdmk'] != '') {
            if ($req['kdmk'] != '' && $req['nama'] != '' && $req['sks_teori'] != '' && $req['sks_praktek'] != '') {
                try {
                    $stmt = $this->db->prepare("INSERT INTO makul VALUES(?,?,?,?)");
                    $stmt->bind_param('ssii', $kdmk, $nama, $sks_teori, $sks_praktek);

                    $kdmk = $req['kdmk'];
                    $nama = $req['nama'];
                    $sks_teori = $req['sks_teori'];
                    $sks_praktek = $req['sks_praktek'];

                    $stmt->execute();

                    $res = [
                        'status' => 200,
                        'success' => true,
                        'message' => "Data berhasil ditambahkan!"
                    ];
                } catch (\Throwable $th) {
                    $res = [
                        'status' => 500,
                        'success' => false,
                        'message' => $th->getMessage()
                    ];
                }
            } else {
                http_response_code(400);
                $res = [
                    'status' => 400,
                    'success' => false,
                    'message' => "Pastikan data yang diinputkan sudah diisi!"
                ];
            }
        } else {
            http_response_code(400);
            $res = [
                'status' => 400,
                'success' => false,
                'message' => "Pastikan data yang diinputkan sudah benar!"
            ];
        }

        return $res;
    }
}
