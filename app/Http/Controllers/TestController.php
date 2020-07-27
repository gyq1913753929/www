<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Cache;
use Illuminate\Support\Facades\Redis;
use App\GoodsModel;
use DB;
class TestController extends Controller{

	

	public function sign1(Request $request)
	{

		$key = '1911api';		//计算签名的key

		//接收数据
		$data = $request->get('data');
		$sign = $request->get('sign');
		

		//计算签名
		$sign_str1=md5($data . $key);	//接收计算的签名
		if($sign_str1 == $sign)
		{
			echo "验签通过";
		}else{
			echo "验签失败";
		}

	}


}
