<?php
namespace App\Library;
  
class Pro11x5
{
		const sanmzhixfsq_high=1924.752;
		const sanmzhixfsq_low=1683.168;

		const sanmzhixdsq_high=1924.752;
		const sanmzhixdsq_low=1683.168;

		const sanmzuxfsq_high=320.792;
		const sanmzuxfsq_low=281.188;

		const sanmzuxdsq_high=320.792;
		const sanmzuxdsq_low=281.188;

		const ermzhixfsq_high=213.861;
		const ermzhixfsq_low=187.019;

		const ermzhixdsq_high=213.861;
		const ermzhixdsq_low=187.019;

		const ermzuxfsq_high=106.919;
		const ermzuxfsq_low=93.499;

		const ermzuxdsq_high=106.919;
		const ermzuxdsq_low=93.499;

		const bdw_high=7.128;
		const bdw_low=6.233;

		const dwd_high=21.384;
		const dwd_low=18.7;

		const dds_5_high=121.500;
		const dds_5_low=106.250;

		const dds_4_high=9.483;
		const dds_4_low=8.293;

		const dds_3_high=3.429;
		const dds_3_low=2.998;

		const dds_2_high=4.629;
		const dds_2_low=4.048;

		const dds_1_high=23.143;
		const dds_1_low=20.238;

		const dds_0_high=694.286;
		const dds_0_low=607.143;

		const czw_03_09_high=24.923;
		const czw_03_09_low=21.795;

		const czw_04_08_high=13.135;
		const czw_04_08_low=11.486;

		const czw_05_07_high=9.170;
		const czw_05_07_low=8.019;

		const czw_06_high=8.237;
		const czw_06_low=7.203;

		const rx1fs_high=4.277;
		const rx1fs_low=3.74;

		const rx2fs_high=10.692;
		const rx2fs_low=9.350;

		const rx3fs_high=32.079;
		const rx3fs_low=28.053;

		const rx4fs_high=128.317;
		const rx4fs_low=112.211;

		const rx5fs_high=897.921;
		const rx5fs_low=785.219;

		const rx6fs_high=149.654;
		const rx6fs_low=130.870;

		const rx7fs_high=42.768;
		const rx7fs_low=37.400;

		const rx8fs_high=16.037;
		const rx8fs_low=14.024;


		const rx1ds_high=4.277;
		const rx1ds_low=3.74;

		const rx2ds_high=10.692;
		const rx2ds_low=9.350;

		const rx3ds_high=32.079;
		const rx3ds_low=28.053;

		const rx4ds_high=128.317;
		const rx4ds_low=112.211;

		const rx5ds_high=897.921;
		const rx5ds_low=785.219;

		const rx6ds_high=149.654;
		const rx6ds_low=130.870;

		const rx7ds_high=42.768;
		const rx7ds_low=37.400;

		const rx8ds_high=16.037;
		const rx8ds_low=14.024;



		/**
		* Analysis user form request(11x5)
		*
		* @param  string $lottery_number   本期开奖号码
		*
		*/

		static $lottery_number;



		/**
		 * 前三直选复式(sanmzhixfsq)
		 *
		 * @param  string $codes 用户的投注号码
		 * @param  string $multiple 倍率
		 * @param  string $code 赔率
		 *
		 * @return array $result['money']   根据开奖结果计算出来的赢输值
		 * @return array $result['backMoney']   本次投注用户的返回奖金
		 */
		static function sanmzhixfsq($codes,$multiple,$code,$num)
        {
        	$records=array();
        	$result=array();

            //拆分$codes为数组$list
            $list = explode(",",$codes);

            //拆分$list每个数组
            $lottery_num = array();
            foreach($list as $k => $v){
                $lottery_num[$k] = explode(" ",$v);
            }

            //排列组合所有可能中奖的结果
            $i = 0;
            foreach($lottery_num[0] as $ak => $av){
                foreach($lottery_num[1] as $bk => $bv){
                    foreach($lottery_num[2] as $ck => $cv){
                        if($av == $bv || $av == $cv || $bv == $cv){
                            continue;
                        }
						 echo $records[$i] = $av.' '.$bv.' '.$cv.'<br>';
                        $i++;
                    }
                }
            }



			//保证每种情况下，都有对应返回值，不能为空值
			/*
			 ** @return array $result['record']   记录十一选5的万位
             */
			$backpoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backpoint,3);
			if($records){
				//判断是否中奖
				$res_num = substr(Pro11x5::$lottery_number, 0,6);			//取出开奖结果前6位;
				$diff=(Pro11x5::sanmzhixfsq_high-Pro11x5::sanmzhixfsq_low);
				foreach($records as $k => $v){

					if($v == $res_num){
						$result['money']=round((Pro11x5::sanmzhixfsq_low+(($code-1700)/244))*$multiple,3);
					}else{
						$result['money']=0.000;
					}
				}

			}else{
				$result['money']=0.000;
			}

			return $result;
        }





        //前三直选单式 sanmzhixdsq ,现在久游的js只能提交单注数据，提交不了多注数据，这个要在后面改
        static function sanmzhixdsq($codes,$multiple,$code,$num)
        {
        	$result=array();
        	$records=array();

			$records = str_replace(" ","",$codes);
            $res_num = substr(Pro11x5::$lottery_number,0,6);//取出开奖结果前6位
			$diff=(Pro11x5::sanmzhixdsq_high-Pro11x5::sanmzhixdsq_low);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);

			if($records==$res_num){

				$result['money']=round((Pro11x5::sanmzhixdsq_low+($code-1700)/244*$diff)*$multiple,3);
			}else{
				$result['money']=0.000;

			}

			return $result;
        }






		//前三组选复式 sanmzuxfsq
		static function sanmzuxfsq($codes,$multiple,$code,$num)
		{
			$records = array();
			$result=array();

			//拆分$codes为数组$lottery_num
			$lottery_num = explode(",",$codes);

			//排列组合
			foreach($lottery_num as $k1 => $v1){
				foreach($lottery_num as $k2 => $v2){
					foreach($lottery_num as $k3 => $v3){
						if($v1 == $v2 || $v1 == $v3 || $v2 == $v3){
							continue;
						}
						if($k1<$k2 && $k2<$k3){
							$records[] = $v1.$v2.$v3;
							$records[] = $v1.$v3.$v2;
							$records[] = $v2.$v1.$v3;
							$records[] = $v2.$v3.$v1;
							$records[] = $v3.$v1.$v2;
							$records[] = $v3.$v2.$v1;
						}
					}
				}
			}

			$res_num = substr(Pro11x5::$lottery_number, 0,6);
			$diff=(Pro11x5::sanmzuxfsq_high-Pro11x5::sanmzuxfsq_low);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if(in_array($res_num,$records)){

				$result['money']=round((Pro11x5::sanmzuxfsq_low+(($code-1700)/244)*$diff)*$multiple,3);
			}else{
				$result['money']=0.000;

			}

			return $result;
		}




		//313:前三组选单式(sanmzuxdsq)    现在久游的js只能提交单注数据，提交不了多注数据，这个要在后面改
		static function sanmzuxdsq($codes,$multiple,$code,$num)
		{
			$records = array();
			$result=array();

			//通用的排列方法
			$lottery_num = explode(" ", $codes);
			foreach($lottery_num as $k1 => $v1){
				foreach($lottery_num as $k2 => $v2){
					foreach($lottery_num as $k3 => $v3){
						if($v1 == $v2 || $v1 == $v3 || $v2 == $v3){
							continue;
						}
						if($k1<$k2 && $k2<$k3){
							$records[] = $v1.$v2.$v3;
							$records[] = $v1.$v3.$v2;
							$records[] = $v2.$v1.$v3;
							$records[] = $v2.$v3.$v1;
							$records[] = $v3.$v1.$v2;
							$records[] = $v3.$v2.$v1;
						}
					}
				}
			}

			$res_num = substr(Pro11x5::$lottery_number, 0,6);
			$diff=(Pro11x5::sanmzuxdsq_high-Pro11x5::sanmzuxdsq_low);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if(in_array($res_num,$records)){

				$result['money']=round((Pro11x5::sanmzuxdsq_low+((($code-1700)/244)*$diff))*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			return $result;
		}




		//前二直选复式(ermzhixfsq)
		static function ermzhixfsq($codes,$multiple,$code,$num)
		{
			$records = array();
			$result=array();

			//拆分$codes为数组$list
			$list = explode(",",$codes);

			//只有只有前面两个有数据，后面的值均用'-'表示
			$lottery_num = array();
			for($i=0;$i<=1;$i++){
				$lottery_num[$i]=explode(' ',$list[$i]);
			}


			$i = 0;
			foreach($lottery_num[0] as $ak => $av){
				foreach($lottery_num[1] as $bk => $bv){
					if($av == $bv || $av=='' ||$bv==''){
						continue;
					}
					$records[$i] = (string)$av.$bv;
					$i++;

					//只保留投注结果的万位
					$result['record'][$i]=(string)$av;
				}
			}

			$res_num = substr(Pro11x5::$lottery_number, 0,4);			//4
			$diff=(Pro11x5::ermzhixfsq_high-Pro11x5::ermzhixfsq_low);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if(in_array($res_num,$records)){

				$result['money']=round((Pro11x5::ermzhixfsq_low+((($code-1700)/244)*$diff))*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			return $result;

		}






		//315:前二直选单式  现在久游的js只能提交单注数据，提交不了多注数据，这个要在后面改
		static function ermzhixdsq($codes,$multiple,$code,$num)
		{
			$records = array();
			$result=array();

			$records=str_replace(' ','',$codes);
			$res_num = substr(Pro11x5::$lottery_number, 0,4);			//4
			$diff=(Pro11x5::ermzhixdsq_high-Pro11x5::ermzhixdsq_low);
            
            //只保留投注号码的万位
            $result['record'][]=substr($records,0,2);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($records==$res_num){

				$result['money']=round((Pro11x5::ermzhixdsq_low+((($code-1700)/244)*$diff))*$multiple,3);
			}else{

				$result['money']=0.000;
			}

			return $result;
		}






		//前二组选复式(ermzuxfsq)
		//格式（"01,02,03,04,05,06,07,08,09,10,11"） 不重复
		static function ermzuxfsq($codes,$multiple,$code,$num)
		{
			$records = array();
			$result=array();
			$lottery_num = explode(",",$codes);

			//排列组合
			foreach($lottery_num as $k1 => $v1){
				foreach($lottery_num as $k2=> $v2){
					if($v1 == $v2){
						continue;
					}
					//选择其中的一种组合
					if($k1 < $k2){
						$records[] = $v1.$v2;
						$records[] = $v2.$v1;

						//只保留计算结果的万位
						$result['record'][]=(string)$v1;
						$result['record'][]=(string)$v2;
					}
				}
			}

			$res_num = substr(Pro11x5::$lottery_number, 0,4);			//4
			$diff=(Pro11x5::ermzuxfsq_high-Pro11x5::ermzuxfsq_low);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if(in_array($res_num,$records)){

				$result['money']=round((Pro11x5::ermzuxfsq_low+((($code-1700)/244)*$diff))*$multiple,3);
			}else{

				$result['money']=0.000;
			}

			return $result;
		}




		//前二组选单式(ermzuxdsq)
		static function ermzuxdsq($codes,$multiple,$code,$num)
		{
			$records = array();
			$result=array();
			$lottery_num = explode(" ", $codes);


			$records[]=$lottery_num[0].$lottery_num[1];
			$records[]=$lottery_num[1].$lottery_num[0];

			//只保留投注号码的万位
			$result['record'][]=(string)$lottery_num[0];
			$result['record'][]=(string)$lottery_num[1];


			$res_num = substr(Pro11x5::$lottery_number, 0,4);			//4
			$diff=(Pro11x5::ermzuxdsq_high-Pro11x5::ermzuxdsq_low);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if(in_array($res_num,$records)){

				$result['money']=round((Pro11x5::ermzuxdsq_low+((($code-1700)/244)*$diff))*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			return $result;
		}






		//318:不定胆前三位bdw
		//(数据格式:codes":"01,02,03,04,05,06,07,08,09,10,11")
		static function bdw($codes,$multiple,$code,$num)
		{
			$records = array();
			$result=array();

			$records = explode(",", $codes);
			//var_dump($records);

			$res_num = substr(self::$lottery_number, 0,6);//取出开奖结果前6位;
			$res_num = str_split($res_num,2);

			$i = 0;		//统计中奖注数计数
			foreach($records as $k => $v){
				if(in_array($v, $res_num)){
					$i++;
				}
			}

			$diff=(Pro11x5::bdw_high-Pro11x5::bdw_low);
			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($i!=0){

				$result['money']=round((Pro11x5::bdw_low+((($code-1700)/244)*$diff))*$i*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			//var_dump($result);
			return $result;
		}




		//定胆前三位dwd  (返回前三位每一位相对应的投注号码)
		//数据格式: codes":"07 08 09 10 11,01 02 03 04 05 06,02 04 06 08 10,-,-"
		static function dwd($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();
			$lottery_num = explode(",", $codes);

			//只有前面三位有数据
			for($i=0;$i<=2;$i++){
				$records[$i] = explode(" ", $lottery_num[$i]);
			}


			//只保留投注号码的万位
			foreach($records[0] as $k=>$v){
				//保证注数一致
				for($m=0;$m<count($records[1]);$m++){
					$result['record'][]=$v;
				}
				for($m=0;$m<count($records[2]);$m++){
					$result['record'][]=$v;
				}
			}


			$res_num = substr(self::$lottery_number, 0,6);//取出开奖结果前6位;
			$res_num = str_split($res_num,2);

			$i = 0;			//统计相同的数目
			$deep = 0;		//依次进入百位、十位、个位
			foreach($records as $k => $v){
				foreach($v as $kk => $vv){
				   if($res_num[$deep] == $vv){
						$i++;
				   }
				}
				$deep++;
			}


			$diff=(Pro11x5::dwd_high-Pro11x5::dwd_low);
			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($i!=0){

				$result['money']=round((Pro11x5::dwd_low+((($code-1700)/244)*$diff))*$i*$multiple,3);
			}else{

				$result['money']=0.000;
			}

			return $result;
		}



		//定单双：dds
		//codes":"5单0双|4单1双"
		static function dds($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();


			$pos = strpos($codes,'|');
			if($pos===false){
				$records[0] = $codes;
			}else{
				$records = explode("|", $codes);
			}

			//var_dump($records);


			$res_num = str_split(self::$lottery_number,2);
			$odd = 0;//奇数,以奇数作为判断标准
			foreach($res_num as $k => $v){
				$v = (int)$v;
				if($v % 2 != 0){
					$odd++;
				}
			}

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);

			foreach($records as $k => $v){

				$t = substr($v,0,1);
				if($t == $odd){
					switch($t){
						case '0':
							//echo '0';
							$diff=(Pro11x5::dds_0_high-Pro11x5::dds_0_low);
							$result['money']=round((Pro11x5::dds_0_low+((($code-1700)/244)*$diff))*$multiple,3);
							break;

						case '1':
							//echo '1';
							$diff=(Pro11x5::dds_1_high-Pro11x5::dds_1_low);
							$result['money']=round((Pro11x5::dds_1_low+((($code-1700)/244)*$diff))*$multiple,3);
							break;

						case '2':
							//echo '2';
							$diff=(Pro11x5::dds_2_high-Pro11x5::dds_2_low);
							$result['money']=round((Pro11x5::dds_2_low+((($code-1700)/244)*$diff))*$multiple,3);
							break;

						case '3':
							//echo '3';
							$diff=(Pro11x5::dds_3_high-Pro11x5::dds_3_low);
							$result['money']=round((Pro11x5::dds_3_low+((($code-1700)/244)*$diff))*$multiple,3);
							break;

						case '4':
							//echo '4';
							$diff=(Pro11x5::dds_4_high-Pro11x5::dds_4_low);
							$result['money']=round((Pro11x5::dds_4_low+((($code-1700)/244)*$diff))*$multiple,3);
							break;

						case '5':
							//echo '5';
							$diff=(Pro11x5::dds_5_high-Pro11x5::dds_5_low);
							$result['money']=round((Pro11x5::dds_5_low+((($code-1700)/244)*$diff))*$multiple,3);
							break;
					}

				}else{
					$result['money']=0;
				}
			}
			return $result;
		}



		//猜中位 czw
		//"codes":"03,04,05,06,07,08,09"
		static function czw($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();

			$records = explode(",", $codes);
			//var_dump($records);
			$res_num = str_split(self::$lottery_number,2);
			sort($res_num);

			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if(in_array($res_num[2],$records)){

				switch($res_num[2]){

					case 3:
					case 9:
						$diff=(Pro11x5::czw_03_09_high-Pro11x5::czw_03_09_low);
						$result['money']=round((Pro11x5::czw_03_09_low+((($code-1700)/244)*$diff))*$multiple,3);
						break;

					case 4:
					case 8:
						$diff=(Pro11x5::czw_04_08_high-Pro11x5::czw_04_08_low);
						$result['money']=round((Pro11x5::czw_04_08_low+((($code-1700)/244)*$diff))*$multiple,3);
						break;


					case 5:
					case 7:
						$diff=(Pro11x5::czw_05_07_high-Pro11x5::czw_05_07_low);
						$result['money']=round((Pro11x5::czw_05_07_low+((($code-1700)/244)*$diff))*$multiple,3);
						break;


					case 6:
						$diff=(Pro11x5::czw_06_high-Pro11x5::czw_06_low);
						$result['money']=round((Pro11x5::ermzuxdsq_low+((($code-1700)/244)*$diff))*$multiple,3);
						break;
				}
			}else{

				$result['money']=0.000;
			}

			return $result;
		}




		//任选复式1中1 rx1fs
		//"codes":"01,02,03,04,05,06,07,08,09,10,11"
		static function rx1fs($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();

			$records = explode(",", $codes);
			//var_dump($records);
			$res_num = str_split(self::$lottery_number,2);

			$i = 0;//计中奖数;
			foreach($records as $k => $v){
				if(in_array($v,$res_num)){
					$i++;
				}
			}


			$diff=(Pro11x5::rx1fs_high-Pro11x5::rx1fs_low);
			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($i!=0){

				$result['money']=round((Pro11x5::rx1fs_low+((($code-1700)/244)*$diff))*$i*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			//var_dump($result);
			return $result;
		}



		//任选复式2中2 rx2fs
		//,"codes":"01,02,03,04,05,06,07,08,09,10,11"
		static function rx2fs($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();

			$lottery_num = explode(",",$codes);
			$i=0;
			foreach($lottery_num as $k1=>$v1){
				foreach($lottery_num as $k2=>$v2){
					if($v1==$v2){
						continue;
					}
					if($k1>$k2){
						$records[$i][0]=$v1;
						$records[$i][1]=$v2;
						$i++;
					}

				}
			}

			//这里采用数组差集的概念，用开奖号码和选号(2个一组)，求差集，当差集为3，说明两者都在里面
			$res_num = str_split(self::$lottery_number,2);
			$j=0;
			foreach($records as $k=>$v){
				if(count(array_intersect($res_num,$v))==2){
					$j++;
				}
			}


			$diff=(Pro11x5::rx2fs_high-Pro11x5::rx2fs_low);
			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($j!=0){

				$result['money']=round((Pro11x5::rx2fs_low+((($code-1700)/244)*$diff))*$j*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			return $result;
		}




		//任选复式3中3  rx3fs
		//"codes":"01,02,03,04,05,06,07,08,09,10,11"
		static function rx3fs($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();

			$lottery_num = explode(",",$codes);
			$i=0;
			foreach($lottery_num as $k1=>$v1){
				foreach($lottery_num as $k2=>$v2){
					foreach($lottery_num as $k3=>$v3){
						if($v1==$v2 || $v1==$v3  || $v2==$v3){
							continue;
						}
						//取中间线的下半部分
						if($k1<$k2 && $k2<$k3){
							$records[$i][0]=$v1;
							$records[$i][1]=$v2;
							$records[$i][2]=$v3;
							$i++;
						}

					}
				}
			}


			$res_num = str_split(self::$lottery_number,2);
			$j=0;
			foreach($records as $k=>$v){
				if(count(array_intersect($res_num,$v))==3){
					//var_dump($v);
					$j++;
				}
			}


			$diff=(Pro11x5::rx3fs_high-Pro11x5::rx3fs_low);
			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($j!=0){

				$result['money']=round((Pro11x5::rx3fs_low+((($code-1700)/244)*$diff))*$j*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			//var_dump($result);
			return $result;
		}





		//任选复式4中4 rx4fs
		//"codes":"01,02,03,04,05,06,07,08,09,10,11"
		static function rx4fs($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();

			$lottery_num = explode(",",$codes);
			$i=0;
			foreach($lottery_num as $k1=>$v1){
				foreach($lottery_num as $k2=>$v2){
					foreach($lottery_num as $k3=>$v3){
						foreach($lottery_num as $k4=>$v4){

							if($v1==$v2 || $v1==$v3  || $v1==$v4 || $v2==$v3 || $v2==$v4 || $v3==$v4){
								continue;
							}
							//取中间线的下半部分
							if($k1<$k2 && $k2<$k3  && $k3<$k4){
								$records[$i][0]=$v1;
								$records[$i][1]=$v2;
								$records[$i][2]=$v3;
								$records[$i][3]=$v4;
								$i++;
							}
						}
					}
				}
			}


			$res_num = str_split(self::$lottery_number,2);
			$j=0;
			foreach($records as $k=>$v){
				if(count(array_intersect($res_num,$v))==4){
					//var_dump($v);
					$j++;
				}
			}


			$diff=(Pro11x5::rx4fs_high-Pro11x5::rx4fs_low);
			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($j!=0){

				$result['money']=round((Pro11x5::rx4fs_low+((($code-1700)/244)*$diff))*$j*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			//var_dump($result);
			return $result;

		}





		//任选复式5中5 rx5fs
		//"codes":"01,02,03,04,05,06,07,08,09,10,11"
		static function rx5fs($codes,$multiple,$code,$num)
		{
			$records=array();
			$result=array();

			$lottery_num = explode(",",$codes);
			$i=0;
			foreach($lottery_num as $k1=>$v1){
				foreach($lottery_num as $k2=>$v2){
					foreach($lottery_num as $k3=>$v3){
						foreach($lottery_num as $k4=>$v4){
							foreach($lottery_num as $k5=>$v5){

								if($v1==$v2 || $v1==$v3  || $v1==$v4 ||$v1==$v5 || $v2==$v3 || $v2==$v4 || $v2==$v5 || $v3==$v4 || $v3==$v5 || $v4==$v5){
									continue;
								}

								//取中间线的下半部分
								if($k1<$k2 && $k2<$k3  && $k3<$k4 && $k4<$k5){
									$records[$i][0]=$v1;
									$records[$i][1]=$v2;
									$records[$i][2]=$v3;
									$records[$i][3]=$v4;
									$records[$i][4]=$v5;
									$i++;

								}
							}
						}
					}
				}
			}


			//只保留开奖结果的万位(这个地方的处理思路和其他地方不一致)
			foreach($records as $k1=>$record){
				foreach($record as $k2=>$number){
					//一个五位数均不相同的号码，可以有120中排列情况,每位数字占24位
					for($m=1;$m<=24;$m++){
						$result['record'][]=$number;
					}
				}
			}



			$res_num = str_split(self::$lottery_number,2);
			$j=0;
			foreach($records as $k=>$v){
				//最好不好使用比较两个数组是否相等,下标有可能不相等
				if(count(array_intersect($res_num,$v))==5){
					//var_dump($v);
					$j++;
				}
			}


			$diff=(Pro11x5::rx5fs_high-Pro11x5::rx5fs_low);
			$backPoint=((1944-$code)/244)*0.122;
			$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
			if($j!=0){

				$result['money']=round((Pro11x5::rx5fs_low+((($code-1700)/244)*$diff))*$j*$multiple,3);
			}else{

				$result['money']=0.000;
			}
			//var_dump($result);
			return $result;

		}







	//任选复式6中5 rx6fs
	//"codes":"01,02,03,04,05,06,07,08,09,10,11"
	static function rx6fs($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$lottery_num = explode(",",$codes);
		$i=0;
		foreach($lottery_num as $k1=>$v1){
			foreach($lottery_num as $k2=>$v2){
				foreach($lottery_num as $k3=>$v3){
					foreach($lottery_num as $k4=>$v4){
						foreach($lottery_num as $k5=>$v5){

							if($v1==$v2 || $v1==$v3  || $v1==$v4 ||$v1==$v5 || $v2==$v3 || $v2==$v4 || $v2==$v5 || $v3==$v4 || $v3==$v5 || $v4==$v5){
								continue;
							}

							//取中间线的下半部分
							if($k1<$k2 && $k2<$k3  && $k3<$k4 && $k4<$k5){
								$records[$i][0]=$v1;
								$records[$i][1]=$v2;
								$records[$i][2]=$v3;
								$records[$i][3]=$v4;
								$records[$i][4]=$v5;
								$i++;
							}
						}
					}
				}
			}
		}


		$res_num = str_split(self::$lottery_number,2);
		$j=0;
		foreach($records as $k=>$v){
			//最好不好使用比较两个数组是否相等,下标有可能不相等
			if(count(array_intersect($res_num,$v))==5){
				//var_dump($v);
				$j++;
			}
		}


		$diff=(Pro11x5::rx6fs_high-Pro11x5::rx6fs_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if($j!=0){

			$result['money']=round((Pro11x5::rx6fs_low+((($code-1700)/244)*$diff))*$j*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}





	//任选复式7中5 rx7fs
	//"codes":"01,02,03,04,05,06,07,08,09,10,11"
	static function rx7fs($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$lottery_num = explode(",",$codes);
		$i=0;
		foreach($lottery_num as $k1=>$v1){
			foreach($lottery_num as $k2=>$v2){
				foreach($lottery_num as $k3=>$v3){
					foreach($lottery_num as $k4=>$v4){
						foreach($lottery_num as $k5=>$v5){

							if($v1==$v2 || $v1==$v3  || $v1==$v4 ||$v1==$v5 || $v2==$v3 || $v2==$v4 || $v2==$v5 || $v3==$v4 || $v3==$v5 || $v4==$v5){
								continue;
							}

							//取中间线的下半部分
							if($k1<$k2 && $k2<$k3  && $k3<$k4 && $k4<$k5){
								$records[$i][0]=$v1;
								$records[$i][1]=$v2;
								$records[$i][2]=$v3;
								$records[$i][3]=$v4;
								$records[$i][4]=$v5;
								$i++;
							}
						}
					}
				}
			}
		}


		$res_num = str_split(self::$lottery_number,2);
		$j=0;
		foreach($records as $k=>$v){
			//最好不好使用比较两个数组是否相等,下标有可能不相等
			if(count(array_intersect($res_num,$v))==5){
				//var_dump($v);
				$j++;
			}
		}


		$diff=(Pro11x5::rx7fs_high-Pro11x5::rx7fs_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if($j!=0){

			$result['money']=round((Pro11x5::rx7fs_low+((($code-1700)/244)*$diff))*$j*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}




	//任选复式8中5 rx8fs
	//"codes":"01,02,03,04,05,06,07,08,09,10,11"
	static function rx8fs($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$lottery_num = explode(",",$codes);
		$i=0;
		foreach($lottery_num as $k1=>$v1){
			foreach($lottery_num as $k2=>$v2){
				foreach($lottery_num as $k3=>$v3){
					foreach($lottery_num as $k4=>$v4){
						foreach($lottery_num as $k5=>$v5){

							if($v1==$v2 || $v1==$v3  || $v1==$v4 ||$v1==$v5 || $v2==$v3 || $v2==$v4 || $v2==$v5 || $v3==$v4 || $v3==$v5 || $v4==$v5){
								continue;
							}

							//取中间线的下半部分
							if($k1<$k2 && $k2<$k3  && $k3<$k4 && $k4<$k5){
								$records[$i][0]=$v1;
								$records[$i][1]=$v2;
								$records[$i][2]=$v3;
								$records[$i][3]=$v4;
								$records[$i][4]=$v5;
								$i++;
							}
						}
					}
				}
			}
		}


		$res_num = str_split(self::$lottery_number,2);
		$j=0;
		foreach($records as $k=>$v){
			//最好不好使用比较两个数组是否相等,下标有可能不相等
			if(count(array_intersect($res_num,$v))==5){
				//var_dump($v);
				$j++;
			}
		}


		$diff=(Pro11x5::rx8fs_high-Pro11x5::rx8fs_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if($j!=0){

			$result['money']=round((Pro11x5::rx8fs_low+((($code-1700)/244)*$diff))*$j*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}






	//任选单式 1中1 rx1ds  (只返回一个数字)
	//"codes":"01"
	static function rx1ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = $codes;
		$res_num = str_split(self::$lottery_number,2);


		$diff=(Pro11x5::rx1ds_high-Pro11x5::rx1ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(in_array($records,$res_num)){

			$result['money']=round((Pro11x5::rx1ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;
	}





	//任选单式2中2 rx2ds 目前只能接受一组参数
	//,"codes":"01 02"
	static function rx2ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = explode(" ",$codes);
		$res_num = str_split(self::$lottery_number,2);


		$diff=(Pro11x5::rx2ds_high-Pro11x5::rx2ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(count(array_intersect($res_num,$records))==2){

			$result['money']=round((Pro11x5::rx2ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		return $result;
	}






	//任选单式3中3  rx3ds
	//"codes":"01 02 03"
	static function rx3ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = explode(" ",$codes);
		$res_num = str_split(self::$lottery_number,2);


		$diff=(Pro11x5::rx3ds_high-Pro11x5::rx3ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(count(array_intersect($res_num,$records))==3){

			$result['money']=round((Pro11x5::rx3ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;
	}





	//任选单式4中4 rx4ds （目前只能接受一组数据）
	//"codes":"01 02 03 04"
	static function rx4ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = explode(" ",$codes);
		$res_num = str_split(self::$lottery_number,2);


		$diff=(Pro11x5::rx4ds_high-Pro11x5::rx4ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(count(array_intersect($res_num,$records))==4){

			$result['money']=round((Pro11x5::rx4ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}





	//任选单式5中5 rx5s
	//"codes":"01 02 03 04 05"
	static function rx5ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = explode(" ",$codes);
		$res_num = str_split(self::$lottery_number,2);

		//只	取开奖结果的万位
		//$record是一个五位数组,构成120种情况，每种情况占24种
		foreach($records as $k1=>$record){
			for($m=1;$m<=24;$m++){
				$result['record'][]=$record;
			}
		}


		$diff=(Pro11x5::rx5ds_high-Pro11x5::rx5ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(count(array_intersect($res_num,$records))==5){

			$result['money']=round((Pro11x5::rx5ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}







	//任选单式 6中5 rx6ds (目前只能接受一组数据)
	//"codes":"01 02 03 04 05 06"
	static function rx6ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = explode(" ",$codes);
		$res_num = str_split(self::$lottery_number,2);


		$diff=(Pro11x5::rx6ds_high-Pro11x5::rx6ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(count(array_intersect($res_num,$records))==5){

			$result['money']=round((Pro11x5::rx6ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}





	//任选单式 7中5 rx7ds
	//"codes":"01 02 03 04 05 06 07"
	static function rx7ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = explode(" ",$codes);
		$res_num = str_split(self::$lottery_number,2);


		$diff=(Pro11x5::rx7ds_high-Pro11x5::rx7ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(count(array_intersect($res_num,$records))==5){

			$result['money']=round((Pro11x5::rx7ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}




	//任选单式8中5 rx8ds
	//"codes":"01 02 03 04 05 06 07 08"
	static function rx8ds($codes,$multiple,$code,$num)
	{
		$records=array();
		$result=array();

		$records = explode(" ",$codes);
		$res_num = str_split(self::$lottery_number,2);


		$diff=(Pro11x5::rx8ds_high-Pro11x5::rx8ds_low);
		$backPoint=((1944-$code)/244)*0.122;
		$result['backMoney']=round(2*$num*$multiple*$backPoint,3);
		if(count(array_intersect($res_num,$records))==5){

			$result['money']=round((Pro11x5::rx8ds_low+((($code-1700)/244)*$diff))*$multiple,3);
		}else{

			$result['money']=0.000;
		}
		//var_dump($result);
		return $result;

	}


}
