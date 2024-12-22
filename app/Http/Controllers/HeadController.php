<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\StaffProvince;
use App\Models\Response;
use App\Models\User;
use App\Models\Report;

class HeadController extends Controller
{
    public function statistics()
    {
        $reports = Report::where('province', Auth::user()->staffProvinces->province)->get();
        $response_count = 0;

        $report_count = count($reports);
        foreach ($reports as $report) {
            $response_count += $report->responses()->count(); 
        }
        return view('headstaff.statistic', compact('report_count', 'response_count'));
    }

    public function management () {
        $user = Auth::user();
        $staffs = StaffProvince::with('user')->where('province', Auth::user()->staffProvinces->province)->get();
        return view('headstaff.manage', compact('staffs'));
    }

    public function makeStaff (Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
            'username' => 'required'
        ], 
        [
            'email.required' => 'Email perlu diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password perlu diisi',
            'name.required' => 'Nama perlu diisi',
            'username.required' => 'Username perlu diisi',
        ]);

        $proses = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'STAFF',
            'password' => Hash::make($request->password),
        ]);

        
        $staff = StaffProvince::create([
            'user_id' => $proses->id,
            'province' => Auth::user()->staffProvinces->province, 
        ]);
        

        if ($staff) {
        return redirect()->route('accounts')->with('success', 'Staff berhasil ditambahkan');
        } else {
            return redirect()->route('accounts')->with('failed', 'Staff gagal ditambahkan');
        }
    }

    public function destroy($id)
    {
        $staff = StaffProvince::where('id', $id)->first();
        $user = User::where('id', $staff->user_id)->first();
        $cek = Response::where('staff_id', $id)->first();
        if (!empty($cek)) {
            return redirect()->back()->with('failed', 'Staff memiliki response, tidak dapat dihapus');
        } else {
            $proses = User::where('id', $user->id)->delete();

            if ($proses) {
                return redirect()->back()->with('success', 'Berhasil menghapus staff');
            } 
        }
        
    }

    public function reset($id)
    {
        $staff = StaffProvince::where('id', $id)->first();
        $user = User::where('id', $staff->user_id)->first();
        $email = $user->email;
        $password = substr($email, 0, 4);

        $proses = User::where('id', $staff->user_id)->update([
            'password' => Hash::make($password)
        ]);

        if ($proses) {
            return redirect()->back()->with('success', 'Password berhasil di reset');
        } else {
            return redirect()->back()->with('failed', 'password gagal di reset');
        }

    }
}
