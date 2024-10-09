<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Alumni;
use CodeIgniter\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        $alumniModel = new Alumni();

        $data = $alumniModel->select('tahun_lulus, COUNT(*) as jumlah')
            ->groupBy('tahun_lulus')
            ->orderBy('tahun_lulus', 'ASC')
            ->findAll();

        return view('admin/laporan/laporan', ['data' => $data]);
    }

    public function cetakPDF()
    {
        $alumniModel = new Alumni();

        $data = $alumniModel->select('tahun_lulus, COUNT(*) as jumlah')
            ->groupBy('tahun_lulus')
            ->orderBy('tahun_lulus', 'ASC')
            ->findAll();

        $html = view('admin/laporan/laporan_pdf', ['data' => $data]);

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("Laporan_Jumlah_Alumni.pdf", array("Attachment" => 0));
    }
}
