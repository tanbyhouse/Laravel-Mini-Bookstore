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
        return redirect('/dashboard?username=' . $username);
    }

    // showing dashboard
    public function showDashboard(){
        return view('dashboard');
    }

    // showing dashboard
    public function showPengelolaan(){
        $dataBuku = [
            ['id' => 1, 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'stok' => 195],
            ['id' => 2, 'judul' => 'Norwegian Wood', 'penulis' => 'Haruki Murakami', 'stok' => 8],
            ['id' => 3, 'judul' => 'Little Women', 'penulis' => 'Louisa May Alcott', 'stok' => 20],
            ['id' => 4, 'judul' => 'No Longer Human', 'penulis' => 'Osamu Dazai', 'stok' => 5]
        ];
        
        return view('pengelolaan', ['buku' => $dataBuku]);
    }

    // showing profile
    public function showProfile(){
        return view('profile');
    }
}
