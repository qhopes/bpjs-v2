<?php
namespace Qhopes\Bpjs\VClaim_v1;

use Qhopes\Bpjs\BpjsService;

class Peserta extends BpjsService
{
    public function getByNoKartu($noKartu, $tglPelayananSEP)
    {
        $response = $this->get('Peserta/nokartu/'.$noKartu.'/tglSEP/'.$tglPelayananSEP);
        return json_decode($response, true);
    }
    public function getByNIK($nik, $tglPelayananSEP)
    {
        $response = $this->get('Peserta/nik/'.$nik.'/tglSEP/'.$tglPelayananSEP);
        return json_decode($response, true);
    }

}