<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Models\media;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function indexs()
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response_produk = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getAllProduk');
        $response_foter = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getAllInterface');
        $response_media = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getAllBerita');
        $response_galeri = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getAllGaleri');

        if ($response_produk->successful() && $response_foter->successful() && $response_media->successful() && $response_galeri->successful()) {
            $produk = $response_produk->json()['data'];

            $data_produk = collect($produk)->map(function ($produk) {
                return new Produk((array) $produk);
            });

            $dataFooter = $response_foter->json()['data'];

            $data_foter = collect($dataFooter)->map(function ($dataFooter) {
                return new footer((array) $dataFooter);
            });

            $dataMedia = $response_media->json()['data'];

            $data_media = collect($dataMedia)->map(function ($dataMedia) {
                return new media((array) $dataMedia);
            });

            $dataGaleri = $response_galeri->json()['data'];

            $data_galeri = collect($dataGaleri)->map(function ($dataGaleri) {
                return new media((array) $dataGaleri);
            });

            // Kirim data ke view
            return view('homeScreen', compact('data_produk', 'data_foter', 'data_media', 'data_galeri')); // Di compact, gunakan nama variabel sesuai
        }

        return "Gagal mengambil data dari API.";
    }

    public function index()
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getAllProduk');

        if ($response->successful()) {
            $produk = $response->json()['data'];

            $data_produk = collect($produk)->map(function ($produk) {
                return new Produk((array) $produk);
            });

            // Kirim data ke view
            return view('produk', compact('data_produk'));
        }

        return "Gagal mengambil data dari API.";
    }

    public function produkHome($uid)
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get(
            'https://maggotapi.arriansoft.com/api/getProduk/' . $uid
        );

        if ($response->successful()) {
            $produk = $response->json()['data'];

            // Konversi menjadi objek model
            $data = new Produk((array) $produk);

            // Kirim data ke view
            // return $data;
            return view('detailProduk', compact('data'));
        }

        return "Gagal mengambil data dari API.";
    }

    public function show($id)
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get(
            'https://maggotapi.arriansoft.com/api/getProduk/' . $id
        );

        if ($response->successful()) {
            $produk = $response->json()['data'];

            // Konversi menjadi objek model
            $data = new Produk((array) $produk);

            // Kirim data ke view
            // return $data;
            return view('detailProduk', compact('data'));
        }

        return "Gagal mengambil data dari API.";
    }

    public function footer()
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getAllInterface');

        if ($response->successful()) {
            $dataFooter = $response->json()['data'];

            $data = collect($dataFooter)->map(function ($dataFooter) {
                return new footer((array) $dataFooter);
            });

            // Kirim data ke view
            return view('homeScreen', compact('data'));
        }
        return "Gagal mengambil data dari API.";
    }

    public function mediaAll()
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getAllBerita');

        if ($response->successful()) {
            $dataMediaAll = $response->json()['data'];

            $dataAllmedia = collect($dataMediaAll)->map(function ($dataMediaAll) {
                return new media((array) $dataMediaAll);
            });

            // return $dataAllmedia;
            // Kirim data ke view
            return view('mediaAll', compact('dataAllmedia'));
        }
        return "Gagal mengambil data dari API.";
    }

    public function media($uid)
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get('https://maggotapi.arriansoft.com/api/getBerita/' . $uid);

        if ($response->successful()) {
            $dataMedia = $response->json()['data'];

            $data = new media((array) $dataMedia);

            // Kirim data ke view
            return view('media', compact('data'));
        }
        return "Gagal mengambil data dari API.";
    }
}
