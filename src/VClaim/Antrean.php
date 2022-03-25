<?php
namespace Qhopes\Bpjs\VClaim;

use Qhopes\Bpjs\BpjsService;

class Antrean extends BpjsService
{
    public function getPoli()
    {
        return $this->get('ref/poli');
    }

    public function getDokter()
    {
        return $this->get('ref/dokter');
    }
    
    public function getJadwalDokter($kodepoli, $tanggal)
    {
        return $this->get('jadwaldokter/kodepoli/'.$kodepoli.'/tanggal/'.$tanggal);
    }

    public function updateJadwalDokter($data = [])
    {
        return $this->post('jadwaldokter/updatejadwaldokter', $data);
    }

    public function tambahAntriean($data = [])
    {
        return $this->post('antrean/add', $data);
    }

    public function updateWaktuAntrean($data = [])
    {
        return $this->post('antrean/updatewaktu', $data);
    }

    public function batalAntrean($data = [])
    {
        return $this->post('antrean/batal', $data);
    }

    public function listWaktuTaskId($data = [])
    {
        return $this->post('antrean/getlisttask', $data);
    }

    public function getDashboardByTanggal($tanggal, $waktu)
    {
        return $this->get('dashboard/waktutunggu/tanggal/'.$tanggal.'/waktu/'.$waktu);
    }

    public function getDashboardByBulan($bulan, $tahun, $waktu)
    {
        return $this->get('dashboard/waktutunggu/bulan/'.$bulan.'/tahun/'.$tanggal.'/waktu/'.$waktu);
    }

}
