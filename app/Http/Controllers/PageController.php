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
            return redirect('/login')->with('error', 'Username atau password salah!');
        }
    }

    // showing dashboard
    public function showDashboard(Request $request){

        if (!$request->session()->has('username')) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        $username = $request->session()->get('username');

        return view('dashboard', ['username' => $username]);
    }

    // showing dashboard
    public function showPengelolaan(Request $request){

        if (!$request->session()->has('username')) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        $username = $request->session()->get('username');

        $dataBuku = [
            ['id' => 1, 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'stok' => 195],
            ['id' => 2, 'judul' => 'Norwegian Wood', 'penulis' => 'Haruki Murakami', 'stok' => 8],
            ['id' => 3, 'judul' => 'Little Women', 'penulis' => 'Louisa May Alcott', 'stok' => 20],
            ['id' => 4, 'judul' => 'No Longer Human', 'penulis' => 'Osamu Dazai', 'stok' => 5]
        ];
        
        return view('pengelolaan', ['buku' => $dataBuku]);
    }

    // showing profile
    public function showProfile(Request $request){

        if (!$request->session()->has('username')) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        $username = $request->session()->get('username');
        
        return view('profile', ['username' => $username]);
    }

    // processing logout 
    public function handleLogout(Request $request){
        $request->session()->flush();
        
        return redirect('/login');
    }
}
