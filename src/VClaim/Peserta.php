<?php
namespace Qhopes\Bpjs\VClaim;

use Qhopes\Bpjs\BpjsService;

class Peserta extends BpjsService
{
    public function getByNoKartu($noKartu, $tglPelayananSEP)
    {
        return $this->get('Peserta/nokartu/'.$noKartu.'/tglSEP/'.$tglPelayananSEP);
    }
    
    public function getByNIK($nik, $tglPelayananSEP)
    {
        return $this->get('Peserta/nik/'.$nik.'/tglSEP/'.$tglPelayananSEP);
    }

}
