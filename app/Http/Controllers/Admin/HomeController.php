<?php

namespace App\Http\Controllers\Admin;
use App\Models\Member;
use App\Models\Share;
use App\Models\Saving;
use Carbon\Carbon;

class HomeController
{
    public function index()
    {
        $fromDate = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $tillDate = Carbon::now()->subMonth()->endOfMonth()->toDateString();
        $lastmmembers = Member::whereBetween('created_at',[$fromDate,$tillDate])->count();
        $lastmshares = Share::whereBetween('created_at',[$fromDate,$tillDate])->sum('amount');
        $lastmsavings = Saving::whereBetween('created_at',[$fromDate,$tillDate])->sum('amount_saved');

        $members = Member::whereMonth('created_at', date('m'))
                           ->count();
        $savings = Saving::whereMonth('created_at', date('m'))
                           ->sum('amount_saved');
        $shares = Share::whereMonth('created_at', date('m'))
                           ->sum('amount');
        // $sharesperc = $shares - $lastmshares;
        // $sharesincdec = ($sharesperc/$lastmshares?:1)*100;

        // $savingsperc = $savings - $lastmsavings;
        // $savingsincdec = ($savingsperc/$lastmsavings?:1)*100;
                          // dd($members);
        $month = Carbon::now()->format('M');
        return view('home',compact('savings','shares','members','month'));
    }
}
