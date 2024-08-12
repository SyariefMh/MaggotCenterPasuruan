<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get('https://maggotapi.arriansoft.com/public/api/getAllProduk');

        if ($response->successful()) {
            $produk = $response->json()['data'];

            $data = collect($produk)->map(function ($produk) {
                return new Produk((array) $produk);
            });

            // Kirim data ke view
            return view('produk', compact('data'));
        }

        return "Gagal mengambil data dari API.";
    }

    public function indexs()
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get('https://maggotapi.arriansoft.com/public/api/getAllProduk');

        if ($response->successful()) {
            $produk = $response->json()['data'];

            $data = collect($produk)->map(function ($produk) {
                return new Produk((array) $produk);
            });

            // Kirim data ke view
            return view('homeScreen', compact('data'));
        }

        return "Gagal mengambil data dari API.";
    }

    public function produkHome($uid)
    {
        $token = 'a8F5h72kL9dG2eX3mQ0pZ4rC6vN1jT7bY8wU5sV9xD2gK1oL0tR4qW3mF7yH2uI8zO5pJ1vM3nE0cR6aQ9lX5r';
        $response = Http::withToken($token)->get(
            'https://maggotapi.arriansoft.com/public/api/getProduk/' . $uid
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
            'https://maggotapi.arriansoft.com/public/api/getProduk/' . $id
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
}
