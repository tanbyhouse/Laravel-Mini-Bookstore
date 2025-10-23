<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // showing login
    public function showLogin(){
        return view('login');
    }

    // processing login 
    public function handleLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        $usernameBenar = 'captain';
        $passwordBenar = 'capt123';

        if ($username === $usernameBenar && $password === $passwordBenar) {
            $request->session()->put('username', $username);
            
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Username or password is incorrect!');
        }
    }

    // showing dashboard
    public function showDashboard(Request $request){

        if (!$request->session()->has('username')) {
            return redirect('/login')->with('error', 'Login first pleaseee!');
        }

        $username = $request->session()->get('username');
        $allBooks = self::getBookData();

        $totalJudul = count($allBooks);
        $totalStok = array_sum(array_column($allBooks, 'stok'));

        $stokMenipis = 0;
        foreach ($allBooks as $buku) {
            if ($buku['stok'] < 10) {
                $stokMenipis++;
            }
        }

            return view('dashboard', [
            'username' => $username,
            'totalJudul' => $totalJudul,
            'totalStok' => $totalStok,
            'stokMenipis' => $stokMenipis
        ]);
    }

    // showing pengelolaan
    public function showPengelolaan(Request $request){

        if (!$request->session()->has('username')) {
            return redirect('/login')->with('error', 'Login first pleaseee!');
        }

        $allBooks = self::getBookData();
        $searchTerm = $request->query('search');

        if ($searchTerm) {
            $filteredBooks = array_filter($allBooks, function($buku) use ($searchTerm) {
                return stripos($buku['judul'], $searchTerm) !== false;
            });
            $dataBuku = $filteredBooks;
        } else {
            $dataBuku = $allBooks;
        }
        
        return view('pengelolaan', [
            'buku' => $dataBuku,
            'searchTerm' => $searchTerm
        ]);
    }

    // showing profile
    public function showProfile(Request $request){

        if (!$request->session()->has('username')) {
            return redirect('/login')->with('error', 'Login first pleaseee!');
        }

        $username = $request->session()->get('username');
        
        return view('profile', ['username' => $username]);
    }
    
    // processing logout 
    public function handleLogout(Request $request){
        $request->session()->flush();
        
        return redirect('/login');
    }

    private function getBookData(){
        return [
            ['id' => 1, 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'stok' => 195],
            ['id' => 2, 'judul' => 'Norwegian Wood', 'penulis' => 'Haruki Murakami', 'stok' => 8],
            ['id' => 3, 'judul' => 'Little Women', 'penulis' => 'Louisa May Alcott', 'stok' => 20],
            ['id' => 4, 'judul' => 'No Longer Human', 'penulis' => 'Osamu Dazai', 'stok' => 5]
        ];
    }
}