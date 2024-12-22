<?php
namespace App\Exports;

use App\Models\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReportExport implements FromCollection, WithHeadings, WithMapping
{
    private $datefilter;

    public function __construct($datefilter = null)
    {
        $this->datefilter = $datefilter;
    }

    public function collection()
    {
        $query = Report::query();

        if ($this->datefilter) { // Fixed property name from $this->filterdate to $this->datefilter
            $query->whereDate('created_at', $this->datefilter);
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'Email Pelapor',
            'Tanggal Pengaduan',
            'Deskripsi Pengaduan',
            'URL Gambar',
            'Lokasi',
            'Jumlah Voting',
            'Status Pengaduan',
            'Staff Terkait',
        ];
    }

    public function map($report) : array 
    {
        $votingData = json_decode($report->voting, true);
        $totalvotes = is_array($votingData) ? count($votingData) : 0;

        $userEmail = $report->user->email ?? "Email tidak tersedia";

        $location = trim(implode(' ', [
            $report->village ?? '',
            $report->subdistrict ?? '',
            $report->regency ?? '',
            $report->province ?? ''
        ]));

        // Get response details safely (check if responses exists)
        $responseStatus = $report->responses ? $report->responses->response_status : 'Tidak ada status';
        $staffId = $report->responses ? $report->responses->staff_id : 'Tidak ada staff';

        return [
            $report->id,
            $userEmail,
            $report->created_at->format('Y-m-d'),
            $report->description,
            $report->image,
            $location,
            ($totalvotes === 0) ? 'kosong' : $totalvotes, // If no votes, show 'kosong'
            $responseStatus,
            $staffId,
        ];
    }
}
