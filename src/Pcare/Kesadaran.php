<?php
	
	namespace Qhopes\Bpjs\Pcare;
	
	use Qhopes\Bpjs\BpjsService;
	
	class Kesadaran extends BpjsService {
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function getKesadaran () {
			$response = $this->get('kesadaran');
			return json_decode($response, TRUE);
		}
	}