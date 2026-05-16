<?php

namespace App\Controllers;

class Doa extends BaseController
{
    private $baseUrl = 'https://doa-doa-api-ahmadramadhan.fly.dev';

    /*
    |--------------------------------------------------------------------------
    | Home
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        try {

            $client = \Config\Services::curlrequest([
                'verify' => false,
                'timeout' => 30
            ]);

            $response = $client->request(
                'GET',
                $this->baseUrl . '/api'
            );

            $doa = json_decode(
                $response->getBody(),
                true
            );

            return view('doa/index', [
                'doa' => $doa
            ]);

        } catch (\Throwable $e) {

            return view('doa/index', [
                'error' => 'Gagal mengambil data API.',
                'doa' => []
            ]);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Detail
    |--------------------------------------------------------------------------
    */

    public function detail($id)
    {
        try {

            $client = \Config\Services::curlrequest([
                'verify' => false,
                'timeout' => 30
            ]);

            $response = $client->request(
                'GET',
                $this->baseUrl . '/api/' . $id
            );

            $result = json_decode(
                $response->getBody(),
                true
            );

            $detail = $result[0] ?? null;

            return view('doa/detail', [
                'detail' => $detail
            ]);

        } catch (\Throwable $e) {

            return view('doa/detail', [
                'error' => 'Gagal mengambil detail doa.'
            ]);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Random Doa
    |--------------------------------------------------------------------------
    */

    public function random()
    {
        try {

            $client = \Config\Services::curlrequest([
                'verify' => false,
                'timeout' => 30
            ]);

            // Ambil semua data
            $response = $client->request(
                'GET',
                $this->baseUrl . '/api'
            );

            $doa = json_decode(
                $response->getBody(),
                true
            );

            // Random manual
            $random = $doa[array_rand($doa)];

            return view('doa/random', [
                'random' => $random
            ]);

        } catch (\Throwable $e) {

            return view('doa/random', [
                'error' => 'Random doa gagal dimuat.'
            ]);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Search Multi Result
    |--------------------------------------------------------------------------
    */

    public function search()
    {
        $keyword = strtolower(
            trim(
                $this->request->getGet('q')
            )
        );

        if(empty($keyword)){

            return view('doa/search', [
                'error' => 'Masukkan kata pencarian.'
            ]);
        }

        try {

            $client = \Config\Services::curlrequest([
                'verify' => false,
                'timeout' => 30
            ]);

            // Ambil semua doa
            $response = $client->request(
                'GET',
                $this->baseUrl . '/api'
            );

            $doa = json_decode(
                $response->getBody(),
                true
            );

            $hasil = [];

            foreach($doa as $item){

                // Pakai strpos agar support semua PHP
                if(
                    strpos(
                        strtolower($item['doa']),
                        $keyword
                    ) !== false
                ){

                    $hasil[] = $item;

                }
            }

            return view('doa/search', [
                'hasil' => $hasil,
                'keyword' => $keyword
            ]);

        } catch (\Throwable $e) {

            return view('doa/search', [
                'error' => 'Pencarian gagal.'
            ]);
        }
    }
}