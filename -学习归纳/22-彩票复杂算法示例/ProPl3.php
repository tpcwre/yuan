<?php
namespace App\Library;

class ProPl3
{
	const sanxzhixfs_high=1914.000;		//三码  直选  复式
	const sanxzhixfs_low=1670.000;

	const sanxzhixds_high=1914.000;		//三码  直选  单式
	const sanxzhixds_low=1670.000;

	const sanxzhixhz_high=1914.000;		//三码  直选  直选和值
	const sanxzhixhz_low=1670.000;

        const sanxzs_high =638.000;             //三码组三
	const sanxzs_low = 556.667;             
        
	const sanxzl_high= 319.000;             //三码组六
	const sanxzl_low=278.333;

        const erxzhix_high= 191.400;             //二码直选  
	const erxzhix_low= 167.000;

        const erxzux_high= 95.700;             //二码组选  
	const erxzux_low= 83.500;
        
        const dwd_high= 19.140;             //定位胆  
	const dwd_low= 16.700;
        
        const yimabdw_high= 19.140;             //一码不定位 
	const yimabdw_low= 16.700;
	/**
	* Analysis user form request(pl3)
	*
	*@param string $lottery_number  本期的开奖号码
	*
	*/


	static $lottery_number;


	 
	/**
	* 三码 直选复式 sanxzhixfs
	*投注号码格式:"codes":"56789,01234,13579"
	*
	*@param string $codes 用户自己投注号码,需要在方法里面进行处理
	*@param int $multiple 投注倍数
	*@param string $code 投注赔率
	*@param int $num   注数
	 *
	 *@result array $result['money'] 本次投注的奖金
	 *@result array $result['backMoney'] 本次投注的返回奖金
	*/
	static function sanxzhixfs($codes,$multiple,$code,$num)
	{
		$result=array();
		$records=array();

		$array = explode(",", $codes);
	 	foreach ($array as $k => $v) {
			$lottery_num[$k] = str_split($v,1);
	 	}

		foreach($lottery_num[0] as $k1=>$v1){
			foreach($lottery_num[1] as $k2=>$v2){
				foreach($lottery_num[2] as $k3=>$v3){
					$records[]=(string)$v1.$v2.$v3;				//in case 0 in first place
				}
			}
		}
		//var_dump(count($records));

		$diff=(ProPl3::sanxzhixfs_high-ProPl3::sanxzhixfs_low);
		$backPoint=((1914-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);


		//组合的方式只有一种可能中奖
		if(in_array(self::$lottery_number,$records)){
			$result['money']=round((self::sanxzhixfs_low+((($code-1670)/244)*$diff))*$num*$multiple,3);
		}else{
			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;
	}









	//三码 直选单式 sanxzhixds (手写 可以一次投多个)
	//"codes":"123"
	static function sanxzhixds($codes,$multiple,$code,$num)
	{
		$result=array();
		$records=  explode(" ", $codes);
		$diff=(ProPl3::sanxzhixds_high-ProPl3::sanxzhixds_low);
		$backPoint=((1914-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);


		//组合的方式只有一种可能中奖
		if(in_array(self::$lottery_number, $records)){
			$result['money']=round((self::sanxzhixds_low+((($code-1670)/244)*$diff))*$num*$multiple,3);
		}else{
			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	 }
         
	 //三码_直选_直选和值  sanxzhixhz
	 //"codes":"0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27"
	static function sanxzhixhz($codes,$multiple,$code,$num)
	{
		 $result=array();

		 $records=explode(',',$codes);
		 //var_dump($records);
		 $sum = self::$lottery_number[0]+self::$lottery_number[1]+self::$lottery_number[2];

		 $diff=(ProPl3::sanxzhixhz_high-ProPl3::sanxzhixhz_low);
		 $backPoint=((1914-$code)/244)*0.122;
		 $result['backMoney']=round(2*$num*$multiple*$backPoint,3);


		 //组合的方式只有一种可能中奖
		 if(in_array( $sum,$records)){
			 $result['money']=round((self::sanxzhixhz_low+((($code-1670)/244)*$diff))*$num*$multiple,3);
		 }else{
			 $result['money']=0.000;
		 }
//		 var_dump($result);
		 return $result;

	}




         //三码 组三
        public static function sanxzs_des($codes,$multiple,$code,$num)
        {
                $array[] = self::$lottery_number[0].self::$lottery_number[1].self::$lottery_number[2];
                $array[] = self::$lottery_number[0].self::$lottery_number[2].self::$lottery_number[1];
                $array[] = self::$lottery_number[1].self::$lottery_number[0].self::$lottery_number[2];
                $array[] = self::$lottery_number[1].self::$lottery_number[2].self::$lottery_number[0];
                $array[] = self::$lottery_number[2].self::$lottery_number[1].self::$lottery_number[0];
                $array[] = self::$lottery_number[2].self::$lottery_number[0].self::$lottery_number[1];
                $diff=(ProPl3::sanxzs_high-ProPl3::sanxzs_low);
                $backPoint=((1914-$code)/244)*0.122;
                $result['backMoney']=round(2*$num*$multiple*$backPoint,3);

                if(in_array($codes,$array)){
                    $result['money'] = round((self::sanxzs_low + round($diff/0.122,3)*(0.122-$backPoint)),3);
                }else{
                    $result['money'] = 0.000;
                }
                return $result;
        }
        //三码 组六
        public static function sanxzl_des($codes,$multiple,$code,$num)
        {
                $array[] = self::$lottery_number[0].self::$lottery_number[1].self::$lottery_number[2];
                $array[] = self::$lottery_number[0].self::$lottery_number[2].self::$lottery_number[1];
                $array[] = self::$lottery_number[1].self::$lottery_number[0].self::$lottery_number[2];
                $array[] = self::$lottery_number[1].self::$lottery_number[2].self::$lottery_number[0];
                $array[] = self::$lottery_number[2].self::$lottery_number[1].self::$lottery_number[0];
                $array[] = self::$lottery_number[2].self::$lottery_number[0].self::$lottery_number[1];
                $diff=(ProPl3::sanxzl_high-ProPl3::sanxzl_low);
                $backPoint=((1914-$code)/244)*0.122;
                $result['backMoney']=round(2*$num*$multiple*$backPoint,3);

                if(in_array($codes,$array)){
                    $result['money'] = round((self::sanxzl_low + round($diff/0.122,3)*(0.122-$backPoint)),3);
                }else{
                    $result['money'] = 0.000;
                }
                return $result;
        }

        //三码 混合组选
        public static function sanxhhzx($codes,$multiple,$code,$num)
        {
            $balls = explode(" ", $codes);
            $array[] = self::$lottery_number[0].self::$lottery_number[1].self::$lottery_number[2];
            $array[] = self::$lottery_number[0].self::$lottery_number[2].self::$lottery_number[1];
            $array[] = self::$lottery_number[1].self::$lottery_number[0].self::$lottery_number[2];
            $array[] = self::$lottery_number[1].self::$lottery_number[2].self::$lottery_number[0];
            $array[] = self::$lottery_number[2].self::$lottery_number[1].self::$lottery_number[0];
            $array[] = self::$lottery_number[2].self::$lottery_number[0].self::$lottery_number[1];
            $diff=(ProPl3::sanxzl_high-ProPl3::sanxzl_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);
            $sum = 0;
            foreach($balls as $value){
                if(in_array($codes,$array)){
                   $sum++;
                }
            }
            if($sum >0){
                $result['money'] = round((self::sanxzl_low + round($diff/0.122,3)*(0.122-$backPoint))*$sum,3);
            }else{
                $result['money'] = 0.000;
            }
        }
        //后二码 单式
        public static function exzhixdsh($codes,$multiple,$code,$num)
        {
            $result=array();
            $records=  explode(" ", $codes);
            $diff=(ProPl3::erxzhix_high-ProPl3::erxzhix_low_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);
            $lottery_ball = self::$lottery_number[1].self::$lottery_number[2];

            //组合的方式只有一种可能中奖
            if(in_array($lottery_ball, $records)){
                    $result['money']=round((self::erxzhix_low+((($code-1670)/244)*$diff))*$num*$multiple,3);
            }else{
                    $result['money']=0.000;
            }
            //var_dump($result);
            return $result;
        }
        
        //后二码 直选和值
        public static  function exzhixhzh($codes,$multiple,$code,$num)
        {
            $result=array();

            $records=explode(',',$codes);
            //var_dump($records);
            $sum = self::$lottery_number[1]+self::$lottery_number[2];

            $diff=(ProPl3::erxzhix_high-ProPl3::erxzhix_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);


            //组合的方式只有一种可能中奖
            if(in_array( $sum,$records)){
                    $result['money']=round((self::erxzhix_low+((($code-1670)/244)*$diff))*$num*$multiple,3);
            }else{
                    $result['money']=0.000;
            }
            //var_dump($result);
            return $result;
        }
        
        //后二码 组选单式
        public static  function exzuxdsh($codes,$multiple,$code,$num)
        {
            $array[] = self::$lottery_number[1].self::$lottery_number[2];
            $array[] = self::$lottery_number[2].self::$lottery_number[1];
            $diff=(ProPl3::erxzux_high-ProPl3::erxzux_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);

            if(in_array($codes,$array)){
                $result['money'] = round((self::erxzux_low + round($diff/0.122,3)*(0.122-$backPoint)),3);
            }else{
                $result['money'] = 0.000;
            }
            return $result;
        }
        
        //前二码 单式
        public static function exzhixdsq($codes,$multiple,$code,$num)
        {
            $result=array();
            $records=  explode(" ", $codes);
            $diff=(ProPl3::erxzhix_high-ProPl3::erxzhix_low_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);
            $lottery_ball = self::$lottery_number[0].self::$lottery_number[1];

            //组合的方式只有一种可能中奖
            if(in_array($lottery_ball, $records)){
                    $result['money']=round((self::erxzhix_low+((($code-1670)/244)*$diff))*$num*$multiple,3);
            }else{
                    $result['money']=0.000;
            }
            //var_dump($result);
            return $result;
        }
          //前二码 直选和值
        public static  function exzhixhzq($codes,$multiple,$code,$num)
        {
            $result=array();

            $records=explode(',',$codes);
            //var_dump($records);
            $sum = self::$lottery_number[0]+self::$lottery_number[1];

            $diff=(ProPl3::erxzhix_high-ProPl3::erxzhix_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);


            //组合的方式只有一种可能中奖
            if(in_array( $sum,$records)){
                    $result['money']=round((self::erxzhix_low+((($code-1670)/244)*$diff))*$num*$multiple,3);
            }else{
                    $result['money']=0.000;
            }
            //var_dump($result);
            return $result;
        }
        //前二码 组选单式
        public static  function exzuxdsq($codes,$multiple,$code,$num)
        {
            $array[] = self::$lottery_number[1].self::$lottery_number[2];
            $array[] = self::$lottery_number[2].self::$lottery_number[1];
            $diff=(ProPl3::erxzux_high-ProPl3::erxzux_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);

            if(in_array($codes,$array)){
                $result['money'] = round((self::erxzux_low + round($diff/0.122,3)*(0.122-$backPoint)),3);
            }else{
                $result['money'] = 0.000;
            }
            return $result;
        }
        //定位胆
        public static function dwd($codes,$multiple,$code,$num)
        {
            $sum  =0;
            for($i=0;$i<3;$i++){
                if($code[$i]!="-" && $code[$i] == self::$lottery_number[$i]){
                    $sum++;
                }
            }
            $diff=(ProPl3::dwd_high-ProPl3::dwd_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);
            if($sum > 0){
                $result['money'] = round((self::erxzux_low + round($diff/0.122,3)*(0.122-$backPoint))*$sum,3);
            }else{
                $result['money'] = 0.000;
            }
        }


        //不定胆
        public static function yimabdw($codes,$multiple,$code,$num)
        {
            $array = explode(",", $codes);
            $lottery_balls = str_split(self::$lottery_number, 1);
            $sum = 0;
            foreach ($array as $value) {
                if(in_array($value, $lottery_balls)){
                    $sum++;
                }
            }
            $diff=(ProPl3::yimabdw_high-ProPl3::yimabdw_low);
            $backPoint=((1914-$code)/244)*0.122;
            $result['backMoney']=round(2*$num*$multiple*$backPoint,3);
            if($sum > 0){
                $result['money'] = round((self::yimabdw_low + round($diff/0.122,3)*(0.122-$backPoint))*$sum,3);
            }else{
                $result['money'] = 0.000;
            }
        }
        /*
		// 三码 组三

		public static function sanxzs($codes,$multiple,$code,$num)
		{
			 $store = array();
			 $balls = explode(",", $codes);
			 $array[] = self::$lottery_number[0].self::$lottery_number[1].self::$lottery_number[2];
			 $array[] = self::$lottery_number[0].self::$lottery_number[2].self::$lottery_number[1];
			 $array[] = self::$lottery_number[1].self::$lottery_number[0].self::$lottery_number[2];
			 $array[] = self::$lottery_number[1].self::$lottery_number[2].self::$lottery_number[0];
			 $array[] = self::$lottery_number[2].self::$lottery_number[1].self::$lottery_number[0];
			 $array[] = self::$lottery_number[2].self::$lottery_number[0].self::$lottery_number[1];
			 $total = $num*2*$multiple;
			 $p = (1914-$code)/(244/0.122);
			 foreach ($balls as $key1 => $val1) {
				 $num = $val1.$val1;
				 $a = $num;
				 foreach ($balls as $key2 => $val2) {
					 $num .=$val2;
					 if($key2 != $key1){
						 if(in_array($num,$array)){
							 $store['money'] = round((self::sanxzs_low + round((self::sanxzs_high - self::sanxzs_low)/0.122,3)*(0.122-$p)),3);
							$store['backMoney'] = round($total*$p,3);
							return $store;
						 }else{
							 $store['money'] = 0.000;
						 }
					 }
					 $num = $a;
				 }

			 }
			 $store['backMoney'] = round($total*$p,3);
			 return $store;
		}
        
		//三码  组六
		public static function sanxzl($codes,$multiple,$code,$num)
		{
			 $store = array();
			 $balls = explode(",",$codes);
			 $total = $num*2*$multiple;
			 $array[] = self::$lottery_number[0].self::$lottery_number[1].self::$lottery_number[2];
			 $array[] = self::$lottery_number[0].self::$lottery_number[2].self::$lottery_number[1];
			 $array[] = self::$lottery_number[1].self::$lottery_number[0].self::$lottery_number[2];
			 $array[] = self::$lottery_number[1].self::$lottery_number[2].self::$lottery_number[0];
			 $array[] = self::$lottery_number[2].self::$lottery_number[1].self::$lottery_number[0];
			 $array[] = self::$lottery_number[2].self::$lottery_number[0].self::$lottery_number[1];
			 $p = (1914-$code)/(244/0.122);
			 foreach ($balls as $val1) {
				 $num = $val1;
				 $a = $num;
				 foreach ($balls as $val2) {
					 if($val2 != $val1 && $val2>$val1){
						 $num.= $val2;
						 $b = $num;
						 foreach ($balls as  $val3) {
							 if($val3 != $val1 && $val3 != $val2 && $val3>$val2){
								 $num .=$val3;
								 if(in_array($num,$array)){
									 $store['money'] = round((self::sanxzl_low + round( (self::sanxzl_high - self::sanxzl_low)/0.122,3)*(0.122-$p)),3);
									$store['backMoney'] = round($total*$p,3);
									return $store;
								 }else{
									 $store['money'] = 0.000;
								 }
							 }
							 $num = $b;
						 }
					 }
					 $num = $a;
				 }
			 }
			 $store['backMoney'] = round($total*$p,3);
			 return $store;
		}

		//三码 混合组选
		public static function sanxhhzx($codes,$multiple,$code,$num)
		{
			$store = array();
			 $balls = explode("+",$codes);
			 $total = $num*2*$multiple;
			 $array[] = self::$lottery_number[0].self::$lottery_number[1].self::$lottery_number[2];
			 $array[] = self::$lottery_number[0].self::$lottery_number[2].self::$lottery_number[1];
			 $array[] = self::$lottery_number[1].self::$lottery_number[0].self::$lottery_number[2];
			 $array[] = self::$lottery_number[1].self::$lottery_number[2].self::$lottery_number[0];
			 $array[] = self::$lottery_number[2].self::$lottery_number[1].self::$lottery_number[0];
			 $array[] = self::$lottery_number[2].self::$lottery_number[0].self::$lottery_number[1];
			 $p = (1914-$code)/(244/0.122);
			 foreach ($balls as  $value) {
				 if(in_array($value,$array)){
					$store['money'] = round((self::sanxzl_low + round( (self::sanxzl_high - self::sanxzl_low)/0.122,3)*(0.122-$p)),3);
					$store['backMoney'] = round($total*$p,3);
					 return $store;
				}else{
					$store['money'] = 0.000;
				}
			 }
			 $store['backMoney'] = round($total*$p,3);
			 return $store;
		}

	*/

}