<?php

namespace App\Http\Controllers;

use App\Models\ResponseProgress;
use App\Models\Report;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportExport;

class StaffController extends Controller
{
    public function userReports()
    {
        $user = Auth::user();

        $response = Response::where('response_status', '')
            ->where('staff_id', $user->id)
            ->with('report', 'report.user')
            ->first();

        $reports = Report::with('user')
            ->where('province', $user->staffProvinces->province)
            ->orderBy('voting', 'desc')
            ->get();

        return view('staff.reports', compact('reports', 'response'));
    }

    public function reject($reportId)
    {
        $user = Auth::user();
        $response = Response::where('report_id', $reportId)->first();
        if ($response->response_status !== 'ON_PROCESS') {
            
            $proses = Response::create([
                'report_id' => $reportId,
                'staff_id' => $user->staffProvinces->id,
                'response_status' => 'REJECT',
            ]);
            
        if ($proses) {
            return redirect()->back()->with('success', 'Laporan telah ditolak');
        }
        
        return redirect()->back()->with('failed', 'Laporan gagal ditolak');
    } else {
        return redirect()->back()->with('failed', 'Laporan sedang diproses');
    }
    }

    public function showProcess($reportId)
{ 
        $user = Auth::user();

        $report = Report::where('id', $reportId)
            ->where('province', $user->staffProvinces->province)
            ->firstOrFail();

        $responses = Response::where('report_id', $reportId)
            ->where('staff_id', $user->staffProvinces->id)
            ->first();

        if (!$responses || ($responses->response_status !== 'ON_PROCESS' && $responses->response_status !== 'DONE')) {
            $responses = Response::create([
                'report_id' => $reportId,
                'staff_id' => $user->staffProvinces->id,
                'response_status' => 'ON_PROCESS',
            ]);
        }

        $progresses = ResponseProgress::where('response_id', $responses->id)->get();

        return view('staff.process', compact('report', 'responses', 'progresses'));
    }

    public function done($reportId)
    {
        $user = Auth::user();
        $staffId = $user->staffProvinces->id; 

        $responseBefore = Response::where('report_id', $reportId)
            ->where('staff_id', $staffId)
            ->firstOrFail();

        $updated = $responseBefore->update([
            'id' => $responseBefore->id,
            'report_id' => $responseBefore->report_id,
            'response_status' => 'DONE',
            'staff_id' => $responseBefore->staff_id,
        ]);

        if ($updated) {
            return redirect()->back()->with('success', 'Laporan telah diperbarui');
        }

        return redirect()->back()->with('failed', 'Laporan gagal diperbarui');
    }

    public function deleteProgress($progressId)
    {
        $proses = ResponseProgress::where('id', $progressId)->delete();

        if ($proses) {
            return redirect()->back()->with('success', 'User Deleted Successfully');
        }

        return redirect()->back()->with('failed', 'Failed to Delete User');
    }

    public function createProgress(Request $request, $responsesId)
    {
        $validated = $request->validate([
            'histories' => 'required|array',
        ]);

        $response = Response::findOrFail($responsesId);

        $progress = ResponseProgress::create([
            'response_id' => $response->id,
            'histories' => json_encode($validated['histories']),
        ]);

        if ($progress) {
            return redirect()->back()->with('success', 'Laporan telah diperbarui');
        }

        return redirect()->back()->with('failed', 'Laporan gagal diperbarui');
    }

    public function exportall(Request $request)
    {
        return Excel::download(new ReportExport, 'report-all.xlsx');
    }

    public function exportbydate(Request $request) {
        $datefilter = $request->input('date');
        $filename = 'laporan_tanggal_' . ($datefilter ?? 'semua') . '.xlsx';
        return Excel::download(new ReportExport($datefilter), $filename);
    }


}
