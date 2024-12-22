<?php

namespace App\Http\Controllers;

use App\Models\ResponseProgress;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Response;
use illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function storeReport(Request $request)
    {

        $validatedData = $request->validate([
            'description' => 'required|string',
            'type' => 'required|in:KEJAHATAN,PEMBANGUNAN,SOSIAL|string',
            'title' => 'required|string',
            'province' => 'required|string',
            'regency' => 'required|string',
            'subdistrict' => 'required|string',
            'village' => 'required|string',
            'statement' => 'required|accepted',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'description.required' => 'Deskripsi laporan harus diisi.',
            'type.required' => 'Jenis laporan harus dipilih.',
            'title.required' => 'Judul laporan harus diisi.',
            'province.required' => 'Provinsi harus dipilih.',
            'regency.required' => 'Kabupaten/Kota harus dipilih.',
            'subdistrict.required' => 'Kecamatan harus dipilih.',
            'village.required' => 'Kelurahan harus dipilih.',
            'statement.required' => 'Persetujuan harus dipilih.',
            'image.required' => 'Gambar harus diunggah.',
            'image.mimes' => 'File yang diunggah harus berupa JPEG, PNG, atau JPG.',
            'image.max' => 'Ukuran file gambar maksimal 2MB.',
        ]);
    
        $statementValue = $request->has('statement') ? true : false;
    
        $filePath = $request->file('image')->store('reports/' . auth()->id(), 'public');
    
        Report::create([
            'user_id' => auth()->id(),
            'description' => $validatedData['description'],
            'type' => $validatedData['type'],
            'title' => $validatedData['title'],
            'province' => $validatedData['province'],
            'regency' => $validatedData['regency'],
            'subdistrict' => $validatedData['subdistrict'],
            'village' => $validatedData['village'],
            'image' => $filePath,
            'statement' => $statementValue, 
        ]);
    
        return redirect()->route('report')->with('success', 'Laporan berhasil disimpan.');
    }
    
    public function toggleVote(Request $request, $reportId)
    {
        $userId = Auth::user()->id;
        $report = Report::findOrFail($reportId);
    
        $voting = json_decode($report->voting, true) ?? [];
    
        if (in_array($userId, $voting)) {
            $voting = array_filter($voting, fn($id) => $id != $userId);
        } else {
            $voting[] = $userId;
        }
    
        $report->voting = json_encode($voting);
        $report->save();
    
        return response()->json([
            'message' => 'Vote toggled successfully',
            'votingCount' => count($voting),
            'hasVoted' => in_array($userId, $voting),
        ]);
    }



    public function myreport(Request $request)
    {
        $sortOrder = $request->input('sortOrder', 'asc'); 

        $reports = Report::where('user_id', Auth::id())
        ->orderBy('voting', $sortOrder) 
        ->get();
        $progresses = collect(); 
        foreach ($reports as $report) {
            $id = $report->id;
            $responses = Response::where('report_id', $id)->get();

            foreach ($responses as $response) {
                
                $progresses = ResponseProgress::where('response_id', $response->id)->get()->filter(function($progress) {
                    return !is_null($progress->id); 
                });


            }
        }

        return view('user.information', compact('reports', 'progresses'));
    }

    public function deleteReport($id)
    {
        $report = Report::findOrFail($id);

        if ($report->user_id == Auth::id()) {
            $response = $report->responses()->first(); 
    
            if (empty($response) && empty($response->response_status)) {
                $report->delete();
                return redirect()->route('myreport')->with('success', 'Laporan berhasil dihapus.');
            } else {
                return redirect()->route('myreport')->with('failed', 'Laporan tidak dapat dihapus karena status tanggapan bukan "ON_PROCESS".');
            }
        }
    
        return redirect()->route('myreport')->with('failed', 'Anda tidak memiliki izin untuk menghapus laporan ini.');
    }

    public function provinceSearch(Request $request)
    {
        $province = $request->get('province');

        if (!$province) {
            return redirect()->back()->with('error', 'Provinsi tidak ditemukan.');
        }

        $reports = Report::where('province', $province)->get();

        return view('pages.report', compact('reports'));
    }

        public function incrementViewers(Request $request, $id)
    {
        $report = Report::findOrFail($id);

        $sessionKey = 'viewed_reports_' . $id . '_user_' . (auth()->check() ? auth()->id() : 'guest');

        if (!session()->has($sessionKey)) {
            if (auth()->check()) {
                $report->increment('viewers');
            }
            session([$sessionKey => true]);
        }

        return response()->json([
            'success' => true,
            'new_count' => $report->viewers,
        ]);
    }

    
    


}
