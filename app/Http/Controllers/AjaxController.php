<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function __construct()
    {
        //
    }

    public function GET($url='', $header=array())
	{
		// Example GET
		// $resp = $this->GET($url, array('Authorization: bearer '.$this->session->userdata('api_token').'', 'Content-Type: application/json', 'Accept: application/json'));
		
		$ch = curl_init();
		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_HTTPGET => TRUE,
			CURLOPT_RETURNTRANSFER => TRUE,
			CURLOPT_HTTPHEADER => $header,
			CURLINFO_HEADER_OUT => TRUE
		);
		curl_setopt_array($ch, $options);
		$output = curl_exec($ch);
		curl_close($ch);
		$data_array = json_decode($output, TRUE);
		return $data_array;
	}

    public function POST($url='', $header=array(), $params=array())
	{
		//Convert array to params post
		$data = http_build_query($params);
		
		//inisialisasi
		$ch = curl_init();
		//pengaturan cURL
		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_HTTPHEADER => $header,
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_RETURNTRANSFER => true,
			CURLINFO_HEADER_OUT => true,
		);
		curl_setopt_array($ch, $options);
		
		//Output
		$output = curl_exec($ch);
		//tutup curl
		curl_close($ch);
		//menampilkan hasil ke array
		$data_array = json_decode($output, TRUE);
		return $data_array;
    }
    
    public function GetAllMobil()
    {
        $url = "".url('/api/mobil')."";

        $data = $this->GET($url,array('Content-Type: application/json', 'Accept: application/json'));
        $html="";
        $no=0;
        if (count($data['data']) > 0) {
            foreach ($data['data'] as $key => $value) {
                $html.="<tr><td>".++$no."</td><td>".$value['nmr_kerangka']."</td><td>".$value['nmr_polisi']."</td><td>".$value['merek']."</td><td>".$value['tipe']."</td><td>".$value['tahun']."</td><td><a class='btn btn-success btn-anim'><i class='fa fa-pencil-square-o'></i><span class='btn-text'>edit</span></a><a class='btn btn-danger btn-anim mr-5'><i class='fa fa-trash-o'></i><span class='btn-text'>delete</span></a></td></tr>";
            }
        } else {
            $html.="<tr><td>Data Tidak Ada</td></tr>";
        }

        echo json_encode(array('html'=>$html, 'jmlData'=> count($data['data'])));
    }
    
    
}
