<?php

$getcom = $_GET["com"];

$getNu = $_GET["nu"];



//echo $typeCom.'<br/>' ;

//echo $getNu ;

include_once("kuaidi100_config.php");



if(isset($postcom)&&isset($getNu)){

    $key =$kuaidi100key;						//客户授权key
	
    $param = array (
		'com' => $postcom,			//快递公司编码
		'num' => $getNu,	//快递单号
		'phone' => '',				//手机号
		'from' => '',				//出发地城市
		'to' => '',					//目的地城市
		'resultv2' => '1'			//开启行政区域解析
	);
	
	//请求参数
    $post_data = array();
    $post_data["customer"] = $customer;
    $post_data["param"] = json_encode($param);
    $sign = md5($post_data["param"].$key.$post_data["customer"]);
    $post_data["sign"] = strtoupper($sign);
	//echo json_encode($post_data);exit;
    $url = 'http://poll.kuaidi100.com/poll/query.do';	//实时查询请求地址
    
	$params = "";
    foreach ($post_data as $k=>$v) {
        $params .= "$k=".urlencode($v)."&";		//默认UTF-8编码格式
    }
    $post_data = substr($params, 0, -1);
	  $ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	$data = str_replace("\"", '"', $result );
	 
	 
	$data = json_decode($data,true);
	$html='<style type="text/css">.log_ul li{float:none !important;}</style>';
	$html.='<ul class="log_ul">';
	$d=($data['data']);
	if(!empty($d)){
	foreach($d as $k=>$v){
		$html.='<li><div class="title">'.$v['time'].'</div><div>'.$v['context'].'</div></li>';	
	}
	}else{
		$html.='<li>'.$data['message'].'</li>';	
	}
	$html.='</ul>';
	echo $html;exit;
	//以下为原来的

//	$url = 'http://www.kuaidi100.com/applyurl?key='.$kuaidi100key.'&com='.$postcom.'&nu='.$getNu;
	$url = 'https://poll.kuaidi100.com/poll/query.do?customer='.$customer.'&key='.$kuaidi100key.'&com='.$postcom.'&nu='.$getNu;

	// echo $url;

	//请勿删除变量$powered 的信息，否者本站将不再为你提供快递接口服务。

	$powered = '查询服务由：<a href="http://www.kuaidi100.com" target="_blank" style="color:blue">快递100</a> 网站提供';

	

	

	//优先使用curl模式发送数据

	if (function_exists('curl_init') == 1){

	  $curl = curl_init();

	  curl_setopt ($curl, CURLOPT_URL, $url);

	  curl_setopt ($curl, CURLOPT_HEADER,0);

	  curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);

	  curl_setopt ($curl, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);

	  curl_setopt ($curl, CURLOPT_TIMEOUT,5);

	  $get_content = curl_exec($curl);

	  curl_close ($curl);

	}else{

	  include("snoopy.php");

	  $snoopy = new snoopy();

	  $snoopy->fetch($url);

	  $get_content = $snoopy->results;

	}

	//$get_content=iconv('UTF-8', 'GB2312//IGNORE', $get_content);

	//if(strpos($get_content,'地点和跟踪进度')== false){

	//  echo '查询失败，请重试';

	//}
	
    echo json_encode($data);//'<iframe src="'.$get_content.'" width="534" height="340" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"><br/>' . $powered;

	

}else{

	echo '查询失败，请重试';

}

exit();

?>

