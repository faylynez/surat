<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;
use App\Models\Disposition;
use App\Models\Send;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function index()
    {
        $inbox = Inbox::count();
        $dispo = Disposition::count();
        $send = Send::count();
        $user = User::count();


        return view('home.index', compact('inbox', 'dispo', 'send', 'user'));
    }
    public function inbox()
    {
        $data=Inbox::all();
        $pdf = Pdf::loadView('home.inbox', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->stream('inbox.pdf');
    }
    public function send()
    {
        $data=Send::all();
        $pdf = Pdf::loadView('home.send', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->stream('send.pdf');
    }
    public function dispo()
    {
        $data=Disposition::all();
        $pdf = Pdf::loadView('home.dispo', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->stream('dispo.pdf');
    }
    public function user()
    {
        $data=User::all();
        $pdf = Pdf::loadView('home.user', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->stream('user.pdf');
    }
}