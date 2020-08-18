<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class fungsi{
	
	public function rupiah($rupiah = null){
		$rp = number_format($rupiah,2,",",".");
		return $rp;

	}

	public function random($length = 8){
			$data = 'ABCDEFGHIJKLMNOPQRSTU1234567890';
		    $string = '';
		    for($i = 0; $i < $length; $i++) {
		        $pos = rand(0, strlen($data)-1);
		        $string .= $data{$pos};
		    }
		    return $string;
			
		}

	public function acak($str) {
            $kunci = '979a218e0632df2935317f98d47956c7';
            $hasil = '';
            for ($i = 0; $i < strlen($str); $i++) {
                $karakter = substr($str, $i, 1);
                $kuncikarakter = substr($kunci, ($i % strlen($kunci))-1, 1);
                $karakter = chr(ord($karakter)+ord($kuncikarakter));
                $hasil .= $karakter;
            }
            return urlencode(base64_encode($hasil));
        }
    public function susun($str) {
            $str = base64_decode(urldecode($str));
            $hasil = '';
            $kunci = '979a218e0632df2935317f98d47956c7';
            for ($i = 0; $i < strlen($str); $i++) {
                $karakter = substr($str, $i, 1);
                $kuncikarakter = substr($kunci, ($i % strlen($kunci))-1, 1);
                $karakter = chr(ord($karakter)-ord($kuncikarakter));
                $hasil .= $karakter;
            }
            return $hasil;
        }
    public function tgl($tgl){
        $tn = explode('/', $tgl);
        $tn = $tn[2].'-'.$tn[0].'-'.$tn[1];
        return $tr;
    }
		
}