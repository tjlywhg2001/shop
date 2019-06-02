<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:64:"B:\aaaweb\shop\public/../application/index\view\index\index.html";i:1559435954;s:55:"B:\aaaweb\shop\application\index\view\common\_meta.html";i:1559435954;s:59:"B:\aaaweb\shop\application\index\view\common\heads_top.html";i:1559435954;s:60:"B:\aaaweb\shop\application\index\view\common\heads_logo.html";i:1559435954;s:60:"B:\aaaweb\shop\application\index\view\common\heads_navs.html";i:1559435954;s:59:"B:\aaaweb\shop\application\index\view\common\title_top.html";i:1559435954;s:55:"B:\aaaweb\shop\application\index\view\common\right.html";i:1559435954;s:56:"B:\aaaweb\shop\application\index\view\common\footer.html";i:1559435954;s:63:"B:\aaaweb\shop\application\index\view\common\footer_script.html";i:1559435954;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $configArr['webname']; ?></title>
	<meta name="Keywords" content="<?php echo $configArr['keywords']; ?>" />
	<meta name="Description" content="<?php echo $configArr['description']; ?>" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="/static/index/css/base.css">
	<link rel="stylesheet" type="text/css" href="/static/index/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/index/css/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/static/index/css/purebox.css">
	<link rel="stylesheet" type="text/css" href="/static/index/css/quickLinks.css">
	<link rel="stylesheet" type="text/css" href="/static/index/css/suggest.css" />
	<link rel="stylesheet" type="text/css" href="/static/index/css/select.css" />
	<link rel="stylesheet" type="text/css" href="/static/index/css/perfect-scrollbar.min.css" />
	<script type="text/javascript" src="/static/index/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/static/index/js/jquery_004.js"></script>
	<script type="text/javascript" src="/static/index/js/jquery.json.js"></script>
	<script type="text/javascript" src="/static/index/js/transport_jquery.js"></script>
	<script type="text/javascript">
		var json_languages = {
			"ok":"\u786e\u5b9a",
			"determine":"\u786e\u5b9a",
			"cancel":"\u53d6\u6d88",
			"drop":"\u5220\u9664",
			"edit":"\u7f16\u8f91",
			"remove":"\u79fb\u9664",
			"follow":"\u5173\u6ce8",
			"pb_title":"\u63d0\u793a",
			"Prompt_information":"\u63d0\u793a\u4fe1\u606f",
			"title":"\u63d0\u793a",
			"not_login":"\u60a8\u5c1a\u672a\u767b\u5f55",
			"close":"\u5173\u95ed","cart":"\u8d2d\u7269\u8f66",
			"js_cart":"\u8d2d\u7269\u8f66",
			"all":"\u5168\u90e8",
			"go_login":"\u53bb\u767b\u9646",
			"select_city":"\u8bf7\u9009\u62e9\u5e02",
			"comment_goods":"\u8bc4\u8bba\u5546\u54c1",
			"submit_order":"\u63d0\u4ea4\u8ba2\u5355",
			"sys_msg":"\u7cfb\u7edf\u63d0\u793a",
			"no_keywords":"\u8bf7\u8f93\u5165\u641c\u7d22\u5173\u952e\u8bcd\uff01",
			"adv_packup_one":"\u8bf7\u53bb\u540e\u53f0\u5e7f\u544a\u4f4d\u7f6e",
			"adv_packup_two":"\u91cc\u9762\u8bbe\u7f6e\u5e7f\u544a\uff01",
			"more":"\u66f4\u591a",
			"Please":"\u8bf7\u53bb",
			"set_up":"\u8bbe\u7f6e\uff01",
			"login_phone_packup_one":"\u8bf7\u8f93\u5165\u624b\u673a\u53f7\u7801",
			"more_options":"\u66f4\u591a\u9009\u9879",
			"Pack_up":"\u6536\u8d77",
			"no_attr":"\u6ca1\u6709\u66f4\u591a\u5c5e\u6027\u4e86",
			"search_Prompt":"\u53ef\u8f93\u5165\u6c49\u5b57,\u62fc\u97f3\u67e5\u627e\u54c1\u724c",
			"most_input":"\u6700\u591a\u53ea\u80fd\u9009\u62e95\u9879",
			"multi_select":"\u591a\u9009",
			"checkbox_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u591a\u9009",
			"radio_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u5355\u9009",
			"contrast":"\u5bf9\u6bd4",
			"empty_contrast":"\u6e05\u7a7a\u5bf9\u6bd4\u680f",
			"Prompt_add_one":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a04\u4e2a\u54e6^_^",
			"Prompt_add_two":"\u60a8\u8fd8\u53ef\u4ee5\u7ee7\u7eed\u6dfb\u52a0",
			"button_compare":"\u6bd4\u8f83\u9009\u5b9a\u5546\u54c1",
			"exist":"\u60a8\u5df2\u7ecf\u9009\u62e9\u4e86%s",
			"count_limit":"\u6700\u591a\u53ea\u80fd\u9009\u62e94\u4e2a\u5546\u54c1\u8fdb\u884c\u5bf9\u6bd4",
			"goods_type_different":"%s\u548c\u5df2\u9009\u62e9\u5546\u54c1\u7c7b\u578b\u4e0d\u540c\u65e0\u6cd5\u8fdb\u884c\u5bf9\u6bd4",
			"compare_no_goods":"\u60a8\u6ca1\u6709\u9009\u5b9a\u4efb\u4f55\u9700\u8981\u6bd4\u8f83\u7684\u5546\u54c1\u6216\u8005\u6bd4\u8f83\u7684\u5546\u54c1\u6570\u5c11\u4e8e 2 \u4e2a\u3002",
			"btn_buy":"\u8d2d\u4e70",
			"is_cancel":"\u53d6\u6d88",
			"select_spe":"\u8bf7\u9009\u62e9\u5546\u54c1\u5c5e\u6027",
			"Province":"\u8bf7\u9009\u62e9\u6240\u5728\u7701\u4efd",
			"City":"\u8bf7\u9009\u62e9\u6240\u5728\u5e02",
			"District":"\u8bf7\u9009\u62e9\u6240\u5728\u533a\u57df",
			"Street":"\u8bf7\u9009\u62e9\u6240\u5728\u8857\u9053",
			"Detailed_address_null":"\u8be6\u7ec6\u5730\u5740\u4e0d\u80fd\u4e3a\u7a7a",
			"Select_attr":"\u8bf7\u9009\u62e9\u5c5e\u6027",
			"Focus_prompt_one":"\u60a8\u5df2\u5173\u6ce8\u8be5\u5e97\u94fa\uff01",
			"Focus_prompt_login":"\u60a8\u5c1a\u672a\u767b\u5f55\u5546\u57ce\u4f1a\u5458\uff0c\u4e0d\u80fd\u5173\u6ce8\uff01",
			"Focus_prompt_two":"\u767b\u5f55\u5546\u57ce\u4f1a\u5458\u3002",
			"store_focus":"\u5e97\u94fa\u5173\u6ce8\u3002",
			"Focus_prompt_three":"\u60a8\u786e\u5b9e\u8981\u5173\u6ce8\u6240\u9009\u5e97\u94fa\u5417\uff1f",
			"Focus_prompt_four":"\u60a8\u786e\u5b9e\u8981\u53d6\u6d88\u5173\u6ce8\u5e97\u94fa\u5417\uff1f",
			"Focus_prompt_five":"\u60a8\u8981\u5173\u6ce8\u8be5\u5e97\u94fa\u5417\uff1f",
			"Purchase_quantity":"\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf.",
			"My_collection":"\u6211\u7684\u6536\u85cf",
			"shiping_prompt":"\u8be5\u5730\u533a\u6682\u4e0d\u652f\u6301\u914d\u9001",
			"Have_goods":"\u6709\u8d27",
			"No_goods":"\u65e0\u8d27",
			"No_shipping":"\u65e0\u6cd5\u914d\u9001",
			"Deliver_back_order":"\u4e0b\u5355\u540e\u7acb\u5373\u53d1\u8d27",
			"Time_delivery":" \u65f6\u53d1\u8d27",
			"goods_over":"\u6b64\u5546\u54c1\u6682\u65f6\u552e\u5b8c",
			"Stock_goods_null":"\u5546\u54c1\u5e93\u5b58\u4e0d\u8db3",
			"purchasing_prompt_two":"\u5bf9\u4e0d\u8d77\uff0c\u8be5\u5546\u54c1\u5df2\u7ecf\u7d2f\u8ba1\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf",
			"day_not_available":"\u5f53\u65e5\u65e0\u8d27",
			"day_yes_available":"\u5f53\u65e5\u6709\u8d27",
			"Already_buy":"\u5df2\u8d2d\u4e70",
			"Already_buy_two":"\u4ef6\u5546\u54c1\u8fbe\u5230\u9650\u8d2d\u6761\u4ef6,\u65e0\u6cd5\u518d\u8d2d\u4e70",
			"Already_buy_three":"\u4ef6\u8be5\u5546\u54c1,\u53ea\u80fd\u518d\u8d2d\u4e70",
			"goods_buy_empty_p":"\u5546\u54c1\u6570\u91cf\u4e0d\u80fd\u5c11\u4e8e1\u4ef6",
			"goods_number_p":"\u5546\u54c1\u6570\u91cf\u5fc5\u987b\u4e3a\u6570\u5b57",
			"search_one":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c",
			"search_two":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c",
			"search_three":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c",
			"search_four":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c",
			"jian":"\u4ef6",
			"letter":"\u4ef6",
			"inventory":"\u5b58\u8d27",
			"move_collection":"\u79fb\u81f3\u6211\u7684\u6536\u85cf",
			"select_shop":"\u8bf7\u9009\u62e9\u5957\u9910\u5546\u54c1",
			"Parameter_error":"\u53c2\u6570\u9519\u8bef",
			"screen_price":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c",
			"screen_price_left":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c",
			"screen_price_right":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c",
			"screen_price_dy":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c",
			"invoice_ok":"\u4fdd\u5b58\u53d1\u7968\u4fe1\u606f",
			"invoice_desc_null":"\u8f93\u5165\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a\uff01",
			"invoice_desc_number":"\u60a8\u6700\u591a\u53ef\u4ee5\u6dfb\u52a03\u4e2a\u516c\u53f8\u53d1\u7968\uff01",
			"invoice_packup":"\u8bf7\u9009\u62e9\u6216\u586b\u5199\u53d1\u7968\u62ac\u5934\u90e8\u5206\uff01",
			"invoice_tax_null":"\u8bf7\u586b\u5199\u7eb3\u7a0e\u4eba\u8bc6\u522b\u7801",
			"add_address_10":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a010\u4e2a\u6536\u8d27\u5730\u5740",
			"msg_phone_not":"\u624b\u673a\u53f7\u7801\u4e0d\u6b63\u786e",
			"captcha_not":"\u9a8c\u8bc1\u7801\u4e0d\u80fd\u4e3a\u7a7a",
			"captcha_xz":"\u8bf7\u8f93\u51654\u4f4d\u6570\u7684\u9a8c\u8bc1\u7801",
			"captcha_cw":"\u9a8c\u8bc1\u7801\u9519\u8bef",
			"Detailed_map":"\u8be6\u7ec6\u5730\u56fe",
			"email_error":"\u90ae\u7bb1\u683c\u5f0f\u4e0d\u6b63\u786e\uff01",
			"bid_prompt_null":"\u4ef7\u683c\u4e0d\u80fd\u4e3a\u7a7a!",
			"bid_prompt_error":"\u4ef7\u683c\u8f93\u5165\u683c\u5f0f\u4e0d\u6b63\u786e\uff01",
			"mobile_error_goods":"\u624b\u673a\u683c\u5f0f\u4e0d\u6b63\u786e\uff01",
			"null_email_goods":"\u90ae\u7bb1\u4e0d\u80fd\u4e3a\u7a7a",
			"select_store":"\u8bf7\u9009\u62e9\u95e8\u5e97\uff01",
			"Product_spec_prompt":"\u8bf7\u9009\u62e9\u5546\u54c1\u89c4\u683c\u7c7b\u578b",
			"reply_desc_one":"\u56de\u590d\u5e16\u5b50\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a",
			"go_shoping":"\u53bb\u8d2d\u7269",
			"highest_price":"\u5df2\u662f\u6700\u9ad8\u4ef7\uff01",
			"lowest_price":"\u5df2\u662f\u6700\u4f4e\u4ef7\uff01",
			"no_history":"\u60a8\u5df2\u6e05\u7a7a\u6700\u8fd1\u6d4f\u89c8\u8fc7\u7684\u5546\u54c1",
			"receive_coupons":"\u9886\u53d6\u4f18\u60e0\u5238",
			"Immediate_use":"\u7acb\u5373\u4f7f\u7528",
			"no_enabled":"\u5173\u95ed"
		};
		//加载效果
		var load_cart_info = '<img src="/static/index/img/loadGoods.gif" height="108" class="ml100">';
		var load_icon = '<img src="/static/index/img/load.gif" width="200" height="200">';
	</script>
</head>

<body class="home_visual_body" data-type="index2">

    <div class="top-banner" style="background: rgb(255, 40, 125) none repeat scroll 0% 0%;">
        <div class="module w1200" data-type="range">
    	    <a href="#" target="_blank"><img src="/static/index/img/1494985021864887905.jpg" width="1200" height="80"></a>
            <i class="iconfont icon-cha" ectype="close"></i>
        </div>
        <div class="spec" data-spec="{&quot;picHeight&quot;:&quot;500&quot;,&quot;target&quot;:&quot;_blank&quot;,&quot;navColor&quot;:&quot;#ff287d&quot;,&quot;is_li&quot;:0,&quot;bg_color&quot;:[],&quot;pic_src&quot;:[&quot;https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985021864887905.jpg&quot;],&quot;link&quot;:&quot;&quot;,&quot;sort&quot;:[&quot;1&quot;]}"></div>
    </div>
        
        <div class="site-nav" id="site-nav">
    <div class="w w1200">
        <div class="fl">	
            <div class="city-choice" id="city-choice" data-ectype="dorpdown">
				<div class="dsc-choie dsc-cm">
					<i class="iconfont icon-map-marker"></i>
					<span class="ui-areamini-text" data-id="1" title="商丘">商丘</span>
				</div>
				<div class="dorpdown-layer">
					<div class="ui-areamini-content-wrap" id="ui-content-wrap">
						<div class="hot">
							<a href="javascript:get_district_list(52, 0);"  >北京</a>
							<a href="javascript:get_district_list(321, 0);" >上海</a>
							<a href="javascript:get_district_list(76, 0);"  >广州</a>
							<a href="javascript:get_district_list(77, 0);"  >深圳</a>
							<a href="javascript:get_district_list(322, 0);" >成都</a>
							<a href="javascript:get_district_list(311, 0);" >西安</a>
							<a href="javascript:get_district_list(343, 0);" >天津</a>
							<a href="javascript:get_district_list(180, 0);" >武汉</a>
							<a href="javascript:get_district_list(120, 0);" >海口</a>
							<a href="javascript:get_district_list(220, 0);" >南京</a>
						</div>
						<div class="search-first-letter">
							<a href="javascript:void(0);" data-letter="A">A</a>
							<a href="javascript:void(0);" data-letter="B">B</a>
							<a href="javascript:void(0);" data-letter="C">C</a>
							<a href="javascript:void(0);" data-letter="D">D</a>
							<a href="javascript:void(0);" data-letter="E">E</a>
							<a href="javascript:void(0);" data-letter="F">F</a>
							<a href="javascript:void(0);" data-letter="G">G</a>
							<a href="javascript:void(0);" data-letter="H">H</a>
							<a href="javascript:void(0);" data-letter="J">J</a>
							<a href="javascript:void(0);" data-letter="K">K</a>
							<a href="javascript:void(0);" data-letter="L">L</a>
							<a href="javascript:void(0);" data-letter="M">M</a>
							<a href="javascript:void(0);" data-letter="N">N</a>
							<a href="javascript:void(0);" data-letter="P">P</a>
							<a href="javascript:void(0);" data-letter="Q">Q</a>
							<a href="javascript:void(0);" data-letter="R">R</a>
							<a href="javascript:void(0);" data-letter="S">S</a>
							<a href="javascript:void(0);" data-letter="T">T</a>
							<a href="javascript:void(0);" data-letter="W">W</a>
							<a href="javascript:void(0);" data-letter="X">X</a>
							<a href="javascript:void(0);" data-letter="Y">Y</a>
							<a href="javascript:void(0);" data-letter="Z">Z</a>
						</div>
						<div class="scrollBody" id="scrollBody">
							<div class="all-list" id="scrollMap">
								<ul id="ul">
									<li data-id="1" data-name="A">
										<em>A</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(36, 0);" >安庆</a>
											<a href="javascript:get_district_list(112, 0);" >安顺</a>
											<a href="javascript:get_district_list(152, 0);" >安阳</a>
											<a href="javascript:get_district_list(246, 0);" >鞍山</a>
											<a href="javascript:get_district_list(259, 0);" >阿拉善盟</a>
											<a href="javascript:get_district_list(312, 0);" >安康</a>
											<a href="javascript:get_district_list(324, 0);" >阿坝</a>
											<a href="javascript:get_district_list(345, 0);" >阿里</a>
											<a href="javascript:get_district_list(352, 0);" >阿克苏</a>
											<a href="javascript:get_district_list(353, 0);" >阿拉尔</a>
											<a href="javascript:void(0);" class="is_district">澳门</a>
										</div>
									</li>
									<li data-id="2" data-name="B">
										<em>B</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(37, 0);" class="city_selected">蚌埠</a>
											<a href="javascript:get_district_list(51, 0);" >亳州</a>
											<a href="javascript:get_district_list(52, 0);" >北京</a>
											<a href="javascript:get_district_list(63, 0);" >白银</a>
											<a href="javascript:get_district_list(99, 0);" >百色</a>
											<a href="javascript:get_district_list(100, 0);" >北海</a>
											<a href="javascript:get_district_list(113, 0);" >毕节</a>
											<a href="javascript:get_district_list(122, 0);" >白沙</a>
											<a href="javascript:get_district_list(123, 0);" >保亭</a>
											<a href="javascript:get_district_list(139, 0);" >保定</a>
											<a href="javascript:get_district_list(213, 0);" >白城</a>
											<a href="javascript:get_district_list(214, 0);" >白山</a>
											<a href="javascript:get_district_list(247, 0);" >本溪</a>
											<a href="javascript:get_district_list(260, 0);" >巴彦淖尔盟</a>
											<a href="javascript:get_district_list(261, 0);" >包头</a>
											<a href="javascript:get_district_list(285, 0);" >滨州</a>
											<a href="javascript:get_district_list(313, 0);" >宝鸡</a>
											<a href="javascript:get_district_list(325, 0);" >巴中</a>
											<a href="javascript:get_district_list(354, 0);" >巴音郭楞</a>
											<a href="javascript:get_district_list(355, 0);" >博尔塔拉</a>
											<a href="javascript:get_district_list(371, 0);" >保山</a>
										</div>
									</li>
									<li data-id="3" data-name="C">
										<em>C</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(38, 0);" >巢湖</a>
											<a href="javascript:get_district_list(39, 0);" >池州</a>
											<a href="javascript:get_district_list(40, 0);" >滁州</a>
											<a href="javascript:get_district_list(78, 0);" >潮州</a>
											<a href="javascript:get_district_list(101, 0);" >崇左</a>
											<a href="javascript:get_district_list(124, 0);" >昌江</a>
											<a href="javascript:get_district_list(125, 0);" >澄迈县</a>
											<a href="javascript:get_district_list(140, 0);" >沧州</a>
											<a href="javascript:get_district_list(141, 0);" >承德</a>
											<a href="javascript:get_district_list(197, 0);" >长沙</a>
											<a href="javascript:get_district_list(199, 0);" >常德</a>
											<a href="javascript:get_district_list(200, 0);" >郴州</a>
											<a href="javascript:get_district_list(211, 0);" >长春</a>
											<a href="javascript:get_district_list(223, 0);" >常州</a>
											<a href="javascript:get_district_list(248, 0);" >朝阳</a>
											<a href="javascript:get_district_list(262, 0);" >赤峰</a>
											<a href="javascript:get_district_list(301, 0);" >长治</a>
											<a href="javascript:get_district_list(322, 0);" >成都</a>
											<a href="javascript:get_district_list(346, 0);" >昌都</a>
											<a href="javascript:get_district_list(356, 0);" >昌吉</a>
											<a href="javascript:get_district_list(372, 0);" >楚雄</a>
											<a href="javascript:get_district_list(394, 0);" >重庆</a>
										</div>
									</li>
									<li data-id="4" data-name="D">
										<em>D</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(64, 0);" >定西</a>
											<a href="javascript:get_district_list(79, 0);" >东莞</a>
											<a href="javascript:get_district_list(126, 0);" >定安县</a>
											<a href="javascript:get_district_list(127, 0);" >东方</a>
											<a href="javascript:get_district_list(168, 0);" >大庆</a>
											<a href="javascript:get_district_list(169, 0);" >大兴安岭</a>
											<a href="javascript:get_district_list(245, 0);" >大连</a>
											<a href="javascript:get_district_list(249, 0);" >丹东</a>
											<a href="javascript:get_district_list(286, 0);" >德州</a>
											<a href="javascript:get_district_list(287, 0);" >东营</a>
											<a href="javascript:get_district_list(302, 0);" >大同</a>
											<a href="javascript:get_district_list(326, 0);" >达州</a>
											<a href="javascript:get_district_list(327, 0);" >德阳</a>
											<a href="javascript:get_district_list(373, 0);" >大理</a>
											<a href="javascript:get_district_list(374, 0);" >德宏</a>
											<a href="javascript:get_district_list(375, 0);" >迪庆</a>
										</div>
									</li>
									<li data-id="5" data-name="E">
										<em>E</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(182, 0);" >鄂州</a>
											<a href="javascript:get_district_list(196, 0);" >恩施</a>
											<a href="javascript:get_district_list(263, 0);" >鄂尔多斯</a>
										</div>
									</li>
									<li data-id="6" data-name="F">
										<em>F</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(41, 0);" >阜阳</a>
											<a href="javascript:get_district_list(53, 0);" >福州</a>
											<a href="javascript:get_district_list(80, 0);" >佛山</a>
											<a href="javascript:get_district_list(102, 0);" >防城港</a>
											<a href="javascript:get_district_list(234, 0);" >抚州</a>
											<a href="javascript:get_district_list(250, 0);" >抚顺</a>
											<a href="javascript:get_district_list(251, 0);" >阜新</a>
										</div>
									</li>
									<li data-id="7" data-name="G">
										<em>G</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(65, 0);" >甘南</a>
											<a href="javascript:get_district_list(76, 0);" >广州</a>
											<a href="javascript:get_district_list(98, 0);" >桂林</a>
											<a href="javascript:get_district_list(103, 0);" >贵港</a>
											<a href="javascript:get_district_list(111, 0);" >贵阳</a>
											<a href="javascript:get_district_list(235, 0);" >赣州</a>
											<a href="javascript:get_district_list(271, 0);" >固原</a>
											<a href="javascript:void(0);" class="is_district">果洛</a>
											<a href="javascript:get_district_list(328, 0);" >甘孜</a>
											<a href="javascript:get_district_list(329, 0);" >广安</a>
											<a href="javascript:get_district_list(330, 0);" >广元</a>
										</div>
									</li>
									<li data-id="8" data-name="H">
										<em>H</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(42, 0);" >淮北</a>
											<a href="javascript:get_district_list(43, 0);" >淮南</a>
											<a href="javascript:get_district_list(44, 0);" >黄山</a>
											<a href="javascript:get_district_list(81, 0);" >河源</a>
											<a href="javascript:get_district_list(82, 0);" >惠州</a>
											<a href="javascript:get_district_list(104, 0);" >河池</a>
											<a href="javascript:get_district_list(105, 0);" >贺州</a>
											<a href="javascript:get_district_list(120, 0);" >海口</a>
											<a href="javascript:get_district_list(142, 0);" >邯郸</a>
											<a href="javascript:get_district_list(143, 0);" >衡水</a>
											<a href="javascript:get_district_list(153, 0);" >鹤壁</a>
											<a href="javascript:get_district_list(165, 0);" >漯河</a>
											<a href="javascript:get_district_list(167, 0);" >哈尔滨</a>
											<a href="javascript:get_district_list(170, 0);" >鹤岗</a>
											<a href="javascript:get_district_list(171, 0);" >黑河</a>
											<a href="javascript:get_district_list(183, 0);" >黄冈</a>
											<a href="javascript:get_district_list(184, 0);" >黄石</a>
											<a href="javascript:get_district_list(201, 0);" >衡阳</a>
											<a href="javascript:get_district_list(202, 0);" >怀化</a>
											<a href="javascript:get_district_list(224, 0);" >淮安</a>
											<a href="javascript:get_district_list(252, 0);" >葫芦岛</a>
											<a href="javascript:get_district_list(258, 0);" >呼和浩特</a>
											<a href="javascript:get_district_list(264, 0);" >呼伦贝尔</a>
											<a href="javascript:void(0);" class="is_district">海北</a>
											<a href="javascript:void(0);" class="is_district">海东</a>
											<a href="javascript:void(0);" class="is_district">海南</a>
											<a href="javascript:void(0);" class="is_district">海西</a>
											<a href="javascript:void(0);" class="is_district">黄南</a>
											<a href="javascript:get_district_list(288, 0);" >菏泽</a>
											<a href="javascript:get_district_list(314, 0);" >汉中</a>
											<a href="javascript:get_district_list(357, 0);" >哈密</a>
											<a href="javascript:get_district_list(358, 0);" >和田</a>
											<a href="javascript:get_district_list(376, 0);" >红河</a>
											<a href="javascript:get_district_list(383, 0);" >杭州</a>
											<a href="javascript:get_district_list(384, 0);" >湖州</a>
											<a href="javascript:get_district_list(3401, 0);" >合肥</a>
										</div>
									</li>
									<li data-id="9" data-name="J">
										<em>J</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(66, 0);" >嘉峪关</a>
											<a href="javascript:get_district_list(67, 0);" >金昌</a>
											<a href="javascript:get_district_list(68, 0);" >酒泉</a>
											<a href="javascript:get_district_list(83, 0);" >江门</a>
											<a href="javascript:get_district_list(84, 0);" >揭阳</a>
											<a href="javascript:get_district_list(154, 0);" >济源</a>
											<a href="javascript:get_district_list(155, 0);" >焦作</a>
											<a href="javascript:get_district_list(172, 0);" >鸡西</a>
											<a href="javascript:get_district_list(173, 0);" >佳木斯</a>
											<a href="javascript:get_district_list(185, 0);" >荆门</a>
											<a href="javascript:get_district_list(186, 0);" >荆州</a>
											<a href="javascript:get_district_list(212, 0);" >吉林</a>
											<a href="javascript:get_district_list(236, 0);" >吉安</a>
											<a href="javascript:get_district_list(237, 0);" >景德镇</a>
											<a href="javascript:get_district_list(238, 0);" >九江</a>
											<a href="javascript:get_district_list(253, 0);" >锦州</a>
											<a href="javascript:get_district_list(283, 0);" >济南</a>
											<a href="javascript:get_district_list(289, 0);" >济宁</a>
											<a href="javascript:get_district_list(303, 0);" >晋城</a>
											<a href="javascript:get_district_list(304, 0);" >晋中</a>
											<a href="javascript:get_district_list(385, 0);" >嘉兴</a>
											<a href="javascript:get_district_list(386, 0);" >金华</a>
														</div>
									</li>
									<li data-id="10" data-name="K">
										<em>K</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(151, 0);" >开封</a>
											<a href="javascript:get_district_list(359, 0);" >喀什</a>
											<a href="javascript:get_district_list(360, 0);" >克拉玛依</a>
											<a href="javascript:get_district_list(361, 0);" >克孜勒苏</a>
											<a href="javascript:get_district_list(367, 0);" >昆明</a>
														</div>
									</li>
									<li data-id="11" data-name="L">
										<em>L</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(45, 0);" >六安</a>
											<a href="javascript:get_district_list(54, 0);" >龙岩</a>
											<a href="javascript:get_district_list(62, 0);" >兰州</a>
											<a href="javascript:get_district_list(69, 0);" >临夏</a>
											<a href="javascript:get_district_list(70, 0);" >陇南</a>
											<a href="javascript:get_district_list(106, 0);" >来宾</a>
											<a href="javascript:get_district_list(107, 0);" >柳州</a>
											<a href="javascript:get_district_list(114, 0);" >六盘水</a>
											<a href="javascript:get_district_list(128, 0);" >乐东</a>
											<a href="javascript:get_district_list(129, 0);" >临高县</a>
											<a href="javascript:get_district_list(130, 0);" >陵水</a>
											<a href="javascript:get_district_list(144, 0);" >廊坊</a>
											<a href="javascript:get_district_list(150, 0);" >洛阳</a>
											<a href="javascript:get_district_list(203, 0);" >娄底</a>
											<a href="javascript:get_district_list(215, 0);" >辽源</a>
											<a href="javascript:get_district_list(225, 0);" >连云港</a>
											<a href="javascript:get_district_list(254, 0);" >辽阳</a>
											<a href="javascript:get_district_list(290, 0);" >莱芜</a>
											<a href="javascript:get_district_list(291, 0);" >聊城</a>
											<a href="javascript:get_district_list(292, 0);" >临沂</a>
											<a href="javascript:get_district_list(305, 0);" >临汾</a>
											<a href="javascript:get_district_list(306, 0);" >吕梁</a>
											<a href="javascript:get_district_list(331, 0);" >乐山</a>
											<a href="javascript:get_district_list(332, 0);" >凉山</a>
											<a href="javascript:get_district_list(344, 0);" >拉萨</a>
											<a href="javascript:get_district_list(347, 0);" >林芝</a>
											<a href="javascript:get_district_list(370, 0);" >丽江</a>
											<a href="javascript:get_district_list(377, 0);" >临沧</a>
											<a href="javascript:get_district_list(387, 0);" >丽水</a>
														</div>
									</li>
									<li data-id="12" data-name="M">
										<em>M</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(46, 0);" >马鞍山</a>
											<a href="javascript:get_district_list(85, 0);" >茂名</a>
											<a href="javascript:get_district_list(86, 0);" >梅州</a>
											<a href="javascript:get_district_list(174, 0);" >牡丹江</a>
											<a href="javascript:get_district_list(323, 0);" >绵阳</a>
											<a href="javascript:get_district_list(333, 0);" >眉山</a>
														</div>
									</li>
									<li data-id="13" data-name="N">
										<em>N</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(55, 0);" >南平</a>
											<a href="javascript:get_district_list(56, 0);" >宁德</a>
											<a href="javascript:get_district_list(97, 0);" >南宁</a>
											<a href="javascript:get_district_list(156, 0);" >南阳</a>
											<a href="javascript:get_district_list(220, 0);" >南京</a>
											<a href="javascript:get_district_list(226, 0);" >南通</a>
											<a href="javascript:get_district_list(233, 0);" >南昌</a>
											<a href="javascript:get_district_list(334, 0);" >南充</a>
											<a href="javascript:get_district_list(335, 0);" >内江</a>
											<a href="javascript:get_district_list(348, 0);" >那曲</a>
											<a href="javascript:get_district_list(368, 0);" >怒江</a>
											<a href="javascript:get_district_list(388, 0);" >宁波</a>
														</div>
									</li>
									<li data-id="14" data-name="P">
										<em>P</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(57, 0);" >莆田</a>
											<a href="javascript:get_district_list(71, 0);" >平凉</a>
											<a href="javascript:get_district_list(157, 0);" >平顶山</a>
											<a href="javascript:get_district_list(239, 0);" >萍乡</a>
											<a href="javascript:get_district_list(255, 0);" >盘锦</a>
											<a href="javascript:get_district_list(336, 0);" >攀枝花</a>
											<a href="javascript:get_district_list(369, 0);" >普洱</a>
														</div>
									</li>
									<li data-id="15" data-name="Q">
										<em>Q</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(58, 0);" >泉州</a>
											<a href="javascript:get_district_list(72, 0);" >庆阳</a>
											<a href="javascript:get_district_list(87, 0);" >清远</a>
											<a href="javascript:get_district_list(108, 0);" >钦州</a>
											<a href="javascript:get_district_list(115, 0);" >黔东南</a>
											<a href="javascript:get_district_list(116, 0);" >黔南</a>
											<a href="javascript:get_district_list(117, 0);" >黔西南</a>
											<a href="javascript:get_district_list(131, 0);" >琼海</a>
											<a href="javascript:get_district_list(132, 0);" >琼中</a>
											<a href="javascript:get_district_list(145, 0);" >秦皇岛</a>
											<a href="javascript:get_district_list(175, 0);" >七台河</a>
											<a href="javascript:get_district_list(176, 0);" >齐齐哈尔</a>
											<a href="javascript:get_district_list(187, 0);" >潜江</a>
											<a href="javascript:get_district_list(284, 0);" >青岛</a>
											<a href="javascript:get_district_list(378, 0);" >曲靖</a>
											<a href="javascript:get_district_list(393, 0);" >衢州</a>
														</div>
									</li>
									<li data-id="16" data-name="R">
										<em>R</em>
										<div class="itme-city">
									<a href="javascript:get_district_list(293, 0);" >日照</a>
											<a href="javascript:get_district_list(349, 0);" >日喀则</a>
														</div>
									</li>
									<li data-id="17" data-name="S">
										<em>S</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(47, 0);" >宿州</a>
											<a href="javascript:get_district_list(59, 0);" >三明</a>
											<a href="javascript:get_district_list(77, 0);" >深圳</a>
											<a href="javascript:get_district_list(88, 0);" >汕头</a>
											<a href="javascript:get_district_list(89, 0);" >汕尾</a>
											<a href="javascript:get_district_list(90, 0);" >韶关</a>
											<a href="javascript:get_district_list(121, 0);" >三亚</a>
											<a href="javascript:get_district_list(138, 0);" >石家庄</a>
											<a href="javascript:get_district_list(158, 0);" >三门峡</a>
											<a href="javascript:get_district_list(159, 0);" >商丘</a>
											<a href="javascript:get_district_list(177, 0);" >双鸭山</a>
											<a href="javascript:get_district_list(178, 0);" >绥化</a>
											<a href="javascript:get_district_list(188, 0);" >神农架林区</a>
											<a href="javascript:get_district_list(189, 0);" >十堰</a>
											<a href="javascript:get_district_list(190, 0);" >随州</a>
											<a href="javascript:get_district_list(204, 0);" >邵阳</a>
											<a href="javascript:get_district_list(216, 0);" >四平</a>
											<a href="javascript:get_district_list(217, 0);" >松原</a>
											<a href="javascript:get_district_list(221, 0);" >苏州</a>
											<a href="javascript:get_district_list(227, 0);" >宿迁</a>
											<a href="javascript:get_district_list(240, 0);" >上饶</a>
											<a href="javascript:get_district_list(244, 0);" >沈阳</a>
											<a href="javascript:get_district_list(272, 0);" >石嘴山</a>
											<a href="javascript:get_district_list(307, 0);" >朔州</a>
											<a href="javascript:get_district_list(315, 0);" >商洛</a>
											<a href="javascript:get_district_list(321, 0);" >上海</a>
											<a href="javascript:get_district_list(337, 0);" >遂宁</a>
											<a href="javascript:get_district_list(350, 0);" >山南</a>
											<a href="javascript:get_district_list(362, 0);" >石河子</a>
											<a href="javascript:get_district_list(389, 0);" >绍兴</a>
														</div>
									</li>
									<li data-id="18" data-name="T">
										<em>T</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(48, 0);" >铜陵</a>
											<a href="javascript:get_district_list(73, 0);" >天水</a>
											<a href="javascript:get_district_list(118, 0);" >铜仁</a>
											<a href="javascript:get_district_list(133, 0);" >屯昌县</a>
											<a href="javascript:get_district_list(146, 0);" >唐山</a>
											<a href="javascript:get_district_list(191, 0);" >天门</a>
											<a href="javascript:get_district_list(218, 0);" >通化</a>
											<a href="javascript:get_district_list(228, 0);" >泰州</a>
											<a href="javascript:get_district_list(256, 0);" >铁岭</a>
											<a href="javascript:get_district_list(265, 0);" >通辽</a>
											<a href="javascript:get_district_list(294, 0);" >泰安</a>
											<a href="javascript:get_district_list(300, 0);" >太原</a>
											<a href="javascript:get_district_list(316, 0);" >铜川</a>
											<a href="javascript:get_district_list(343, 0);" >天津</a>
											<a href="javascript:get_district_list(363, 0);" >图木舒克</a>
											<a href="javascript:get_district_list(364, 0);" >吐鲁番</a>
											<a href="javascript:get_district_list(390, 0);" >台州</a>
											<a href="javascript:void(0);" class="is_district">台湾</a>
														</div>
									</li>
									<li data-id="19" data-name="W">
										<em>W</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(49, 0);" >芜湖</a>
											<a href="javascript:get_district_list(74, 0);" >武威</a>
											<a href="javascript:get_district_list(109, 0);" >梧州</a>
											<a href="javascript:get_district_list(134, 0);" >万宁</a>
											<a href="javascript:get_district_list(135, 0);" >文昌</a>
											<a href="javascript:get_district_list(136, 0);" >五指山</a>
											<a href="javascript:get_district_list(180, 0);" >武汉</a>
											<a href="javascript:get_district_list(222, 0);" >无锡</a>
											<a href="javascript:get_district_list(266, 0);" >乌海</a>
											<a href="javascript:get_district_list(267, 0);" >乌兰察布市</a>
											<a href="javascript:get_district_list(273, 0);" >吴忠</a>
											<a href="javascript:get_district_list(295, 0);" >威海</a>
											<a href="javascript:get_district_list(296, 0);" >潍坊</a>
											<a href="javascript:get_district_list(317, 0);" >渭南</a>
											<a href="javascript:get_district_list(351, 0);" >乌鲁木齐</a>
											<a href="javascript:get_district_list(365, 0);" >五家渠</a>
											<a href="javascript:get_district_list(379, 0);" >文山</a>
											<a href="javascript:get_district_list(391, 0);" >温州</a>
														</div>
									</li>
									<li data-id="20" data-name="X">
										<em>X</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(50, 0);" >宣城</a>
											<a href="javascript:get_district_list(60, 0);" >厦门</a>
											<a href="javascript:get_district_list(147, 0);" >邢台</a>
											<a href="javascript:get_district_list(160, 0);" >新乡</a>
											<a href="javascript:get_district_list(161, 0);" >信阳</a>
											<a href="javascript:get_district_list(162, 0);" >许昌</a>
											<a href="javascript:get_district_list(181, 0);" >仙桃</a>
											<a href="javascript:get_district_list(192, 0);" >咸宁</a>
											<a href="javascript:get_district_list(193, 0);" >襄樊</a>
											<a href="javascript:get_district_list(194, 0);" >孝感</a>
											<a href="javascript:get_district_list(205, 0);" >湘潭</a>
											<a href="javascript:get_district_list(206, 0);" >湘西</a>
											<a href="javascript:get_district_list(229, 0);" >徐州</a>
											<a href="javascript:get_district_list(241, 0);" >新余</a>
											<a href="javascript:get_district_list(268, 0);" >锡林郭勒盟</a>
											<a href="javascript:get_district_list(269, 0);" >兴安盟</a>
											<a href="javascript:void(0);" class="is_district">西宁</a>
											<a href="javascript:get_district_list(308, 0);" >忻州</a>
											<a href="javascript:get_district_list(311, 0);" >西安</a>
											<a href="javascript:get_district_list(318, 0);" >咸阳</a>
											<a href="javascript:get_district_list(380, 0);" >西双版纳</a>
											<a href="javascript:void(0);" class="is_district">香港</a>
														</div>
									</li>
									<li data-id="21" data-name="Y">
										<em>Y</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(91, 0);" >阳江</a>
											<a href="javascript:get_district_list(92, 0);" >云浮</a>
											<a href="javascript:get_district_list(110, 0);" >玉林</a>
											<a href="javascript:get_district_list(166, 0);" >濮阳</a>
											<a href="javascript:get_district_list(179, 0);" >伊春</a>
											<a href="javascript:get_district_list(195, 0);" >宜昌</a>
											<a href="javascript:get_district_list(207, 0);" >益阳</a>
											<a href="javascript:get_district_list(208, 0);" >永州</a>
											<a href="javascript:get_district_list(209, 0);" >岳阳</a>
											<a href="javascript:get_district_list(219, 0);" >延边</a>
											<a href="javascript:get_district_list(230, 0);" >盐城</a>
											<a href="javascript:get_district_list(231, 0);" >扬州</a>
											<a href="javascript:get_district_list(242, 0);" >宜春</a>
											<a href="javascript:get_district_list(243, 0);" >鹰潭</a>
											<a href="javascript:get_district_list(257, 0);" >营口</a>
											<a href="javascript:get_district_list(270, 0);" >银川</a>
											<a href="javascript:void(0);" class="is_district">玉树</a>
											<a href="javascript:get_district_list(297, 0);" >烟台</a>
											<a href="javascript:get_district_list(309, 0);" >阳泉</a>
											<a href="javascript:get_district_list(310, 0);" >运城</a>
											<a href="javascript:get_district_list(319, 0);" >延安</a>
											<a href="javascript:get_district_list(320, 0);" >榆林</a>
											<a href="javascript:get_district_list(338, 0);" >雅安</a>
											<a href="javascript:get_district_list(339, 0);" >宜宾</a>
											<a href="javascript:get_district_list(366, 0);" >伊犁</a>
											<a href="javascript:get_district_list(381, 0);" >玉溪</a>
														</div>
									</li>
									<li data-id="22" data-name="Z">
										<em>Z</em>
										<div class="itme-city">
											<a href="javascript:get_district_list(61, 0);" >漳州</a>
											<a href="javascript:get_district_list(75, 0);" >张掖</a>
											<a href="javascript:get_district_list(93, 0);" >湛江</a>
											<a href="javascript:get_district_list(94, 0);" >肇庆</a>
											<a href="javascript:get_district_list(95, 0);" >中山</a>
											<a href="javascript:get_district_list(96, 0);" >珠海</a>
											<a href="javascript:get_district_list(119, 0);" >遵义</a>
											<a href="javascript:get_district_list(137, 0);" >儋州</a>
											<a href="javascript:get_district_list(148, 0);" >张家口</a>
											<a href="javascript:get_district_list(149, 0);" >郑州</a>
											<a href="javascript:get_district_list(163, 0);" >周口</a>
											<a href="javascript:get_district_list(164, 0);" >驻马店</a>
											<a href="javascript:get_district_list(198, 0);" >张家界</a>
											<a href="javascript:get_district_list(210, 0);" >株洲</a>
											<a href="javascript:get_district_list(232, 0);" >镇江</a>
											<a href="javascript:get_district_list(274, 0);" >中卫</a>
											<a href="javascript:get_district_list(298, 0);" >枣庄</a>
											<a href="javascript:get_district_list(299, 0);" >淄博</a>
											<a href="javascript:get_district_list(340, 0);" >资阳</a>
											<a href="javascript:get_district_list(341, 0);" >自贡</a>
											<a href="javascript:get_district_list(342, 0);" >泸州</a>
											<a href="javascript:get_district_list(382, 0);" >昭通</a>
											<a href="javascript:get_district_list(392, 0);" >舟山</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="scrollBar" id="scrollBar">
								<p id="city_bar"></p>
							</div>
							<input name="area_phpName" id="phpName" value="index.php" type="hidden">
						</div>
					</div>
				</div>
			</div>
			<div class="txt-info" id="ECS_MEMBERZONE">
				<span>您好 &nbsp;<a href="#">86913361-232247</a></span>
				<span>，欢迎来到&nbsp;<a alt="首页" title="首页" href="index.php">童攀课堂</a></span>
				<span>[<a href="#">退出</a>]</span>
		    </div>
		    
<!--             <div class="txt-info" id="ECS_MEMBERZONE">
				<a href="#" class="link-login red">请登录</a>
			    <a href="#" class="link-regist">免费注册</a>
            </div> -->

		</div>
		<ul class="quick-menu fr">
			<?php if(is_array($navArr['top']) || $navArr['top'] instanceof \think\Collection || $navArr['top'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navArr['top'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topNav): $mod = ($i % 2 );++$i;?>
			<li>
		    	<div class="dt"><a href="<?php echo $topNav['nav_url']; ?>" <?php if($topNav['nav_open'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $topNav['nav_name']; ?></a></div>
		    </li>
		    <li class="spacer"></li>
		    <?php endforeach; endif; else: echo "" ;endif; ?>
<!-- 			<li>
		    	<div class="dt"><a href="history_list.php">我的浏览</a></div>
		    </li>
		    <li class="spacer"></li>
			<li>
		    	<div class="dt"><a href="user.php?act=collection_list">我的收藏</a></div>
		    </li>
		    <li class="spacer"></li>
			<li>
		    	<div class="dt"><a href="user.php?act=message_list">客户服务</a></div>
		    </li>
		    <li class="spacer"></li> -->
		    <li class="li_dorpdown" data-ectype="dorpdown">
				<div class="dt dsc-cm">网站导航<i class="iconfont icon-down"></i></div>
				<div class="dd dorpdown-layer">
				    <dl class="fore1">
				        <dt>特色主题</dt>
				        <dd>
							<div class="item"><a href="category.php?id=858">家用电器</a></div>
							<div class="item"><a href="category.php?id=3">手机数码</a></div>
							<div class="item"><a href="category.php?id=4">电脑办公</a></div>
						</dd>
				    </dl>
				    <dl class="fore2">
				        <dt>促销活动</dt>
				        <dd>
					        <div class="item"><a href="auction.php">拍卖活动</a></div>
					        <div class="item"><a href="crowdfunding.php">共创商品</a></div>
					        <div class="item"><a href="activity.php">优惠活动</a></div>
					        <div class="item"><a href="wholesale.php">批发市场</a></div>
					        <div class="item"><a href="package.php">超值礼包</a></div>
					        <div class="item"><a href="coupons.php?act=coupons_index">优惠券</a></div>
    				    </dd>
				    </dl>
				</div>
		    </li>
		</ul>
    </div>
</div>




        <div class="header">
    <div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="#"><img src="/static/index/img/logo.png"></a></div>
            <div class="logoAdv"><!-- <a href="#"><img src="/static/index/img/ecsc-join.gif"></a> --></div>

		    <!-- 购物车 -->
           	<div class="tit">购物车（<em ectype="cartNum">2</em>）</div>


	        <!-- 登录 -->
		    <div class="logo-span">
				<b style="background:url(/static/index/img/login_logo_pic.png) no-repeat;"></b>
			</div>
        </div>

		<div class="header-href">
		    <span>还没有账号<a href="#" class="jump">免费注册</a></span>
		</div>

        <div class="dsc-search">
            <div class="form">
				<form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()" class="search-form">
				    <input autocomplete="off" onkeyup="lookup(this.value);" name="keywords" id="keyword" value="<?php echo $configArr['search_value']; ?>" class="search-text" type="text">
				    <input name="store_search_cmt" value="0" type="hidden">
				    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>

				    <!-- 购物车 -->
                    <button type="submit" class="button button-icon"><i></i></button>
				</form>


				<ul class="keyword">
					<?php 
						$searchKey = explode(',',$configArr['search_keywords']);
						foreach ($searchKey as $k => $v):?>
						<li><a href="search.php?keywords=%E5%91%A8%E5%A4%A7%E7%A6%8F" target="_blank"><?php echo $v; ?></a></li>
					<?php endforeach;?>
<!-- 					<li><a href="search.php?keywords=%E5%86%85%E8%A1%A3" target="_blank">内衣</a></li>
					<li><a href="search.php?keywords=Five+Plus" target="_blank">Five Plus</a></li>
					<li><a href="search.php?keywords=%E6%89%8B%E6%9C%BA" target="_blank">手机</a></li> -->
				</ul>

				<div class="suggestions_box" id="suggestions" style="display:none;">
				    <div class="suggestions_list" id="auto_suggestions_list">
				        &nbsp;
				    </div>
				</div>
            </div>
        </div>
        <div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">

			<div class="shopCart-con dsc-cm">
				<a href="#">
					<i class="iconfont icon-carts"></i>
					<span>我的购物车</span>
					<em class="count cart_num">0</em>
				</a>
			</div>
			<div class="dorpdown-layer" ectype="dorpdownLayer">
		        <div class="prompt"><div class="nogoods"><b></b><span>购物车中还没有商品，赶紧选购吧！</span></div></div>
		    </div>

			<script type="text/javascript">
			function changenum(rec_id, diff, warehouse_id, area_id)
			{
				var cValue = $('#cart_value').val();
			    var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
			 
				if(goods_number < 1)
				{
					return false;	
				}
				else
				{
					change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
				}
			}
			function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
			{
				if(cValue != '' || cValue == 'undefined'){
				   var cValue = $('#cart_value').val(); 
				}   
				Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
			}
			function change_goods_number_response(result)
			{    
				var rec_id = result.rec_id;           
			    if (result.error == 0)
			    {
			       $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
			       $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
			       if (result.goods_number <= 0)
			        {
						//数量为零则隐藏所在行
			            $('#tr_goods_' +rec_id).style.display = 'none';
			            $('#tr_goods_' +rec_id).innerHTML = '';
			        }
			        $('#total_desc').html(result.flow_info);//更新合计
			        if($('ECS_CARTINFO'))
			        

					if(result.group.length > 0){
						for(var i=0; i<result.group.length; i++){
							$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
							$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
						}
					}

					$("#goods_price_" + rec_id).html(result.goods_price);
					$(".cart_num").html(result.subtotal_number);
				}
				else if (result.message != '')
				{
					$('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
					alert(result.message);
				}                
			}

			function deleteCartGoods(rec_id,index)
			{
				Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
			}

			/**
			 * 接收返回的信息
			 */
			function deleteCartGoodsResponse(res)
			{
			  if (res.error)
			  {
			    alert(res.err_msg);
			  }
			  else if(res.index==1)
			  {
					Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
			  }
			  else
			  {
				  $("#ECS_CARTINFO").html(res.content);
				  $(".cart_num").html(res.cart_num);
			  }
			}

			function return_cart_list(result)
			{
				$(".cart_num").html(result.cart_num);
				$(".pop_panel").html(result.content);
				tbplHeigth();
			}
			</script>
        </div>
    </div>
</div>


        <div class="nav dsc-zoom" ectype="dscNav">
	<div class="w w1200">
		<div class="categorys site-masts">
			<div class="categorys-type"><a href="#">男装、女装、内衣</a></div>
			<div class="categorys-tab-content">
				<div class="categorys-items" ectype="items">
					<div class="categorys-item" ectype="item" data-catid="347" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">女装</a></strong>
								<span>
						            <a href="#">连衣裙</a>
									<a href="#">蕾丝/雪纺衫</a>
									<a href="#">衬衫</a>
									<a href="#">T恤</a>
									<a href="#">半身裙</a>
									<a href="#">休闲裤</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">女装</a></h3>
								<ul class="cate-list">
									<li><a href="#">连衣裙</a></li>
									<li><a href="#">蕾丝/雪纺衫</a></li>
									<li><a href="#">衬衫</a></li>
									<li><a href="#">T恤</a></li>
									<li><a href="#">半身裙</a></li>
									<li><a href="#">休闲裤</a></li>
									<li><a href="#">短裤</a></li>
									<li><a href="#">牛仔裤</a></li>
									<li><a href="#">针织衫</a></li>
									<li><a href="#">吊带/背心</a></li>
									<li><a href="#">打底衫</a></li>
									<li><a href="#">打底裤</a></li>
									<li><a href="#">正装裤</a></li>
									<li><a href="#">小西服</a></li>
									<li><a href="#">马甲</a></li>
									<li><a href="#">风衣</a></li>
									<li><a href="#">羊毛衫</a></li>
									<li><a href="#">羊绒衫</a></li>
									<li><a href="#">短外套</a></li>
									<li><a href="#">棉服</a></li>
									<li><a href="#">毛呢大衣</a></li>
									<li><a href="#">加绒裤</a></li>
									<li><a href="#">羽绒服</a></li>
									<li><a href="#">皮草</a></li>
									<li><a href="#">真皮皮衣</a></li>
									<li><a href="#">仿皮皮衣</a></li>
									<li><a href="#">旗袍/唐装</a></li>
									<li><a href="#">礼服</a></li>
									<li><a href="#">婚纱</a></li>
									<li><a href="#">中老年女装</a></li>
									<li><a href="#">大码女装</a></li>
								</ul>
								<ul class="cate-logo">    
									<li><a href="#"><img src="/static/index/img/1490071974970349584.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072756032175204.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073577683159021.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073591535005714.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072860522023692.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074030328949587.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490228075580091113.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="463" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">男装</a></strong>
								<span>
						            <a href="#">T恤</a>
									<a href="#">裤子</a>
									<a href="#">POLO衫</a>
									<a href="#">针织衫</a>
									<a href="#">夹克</a>
									<a href="#">卫衣</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">男装</a></h3>
								<ul class="cate-list">
									<li><a href="#">T恤</a></li>
									<li><a href="#">裤子</a></li>
									<li><a href="#">POLO衫</a></li>
									<li><a href="#">针织衫</a></li>
									<li><a href="#">夹克</a></li>
									<li><a href="#">卫衣</a></li>
									<li><a href="#">风衣</a></li>
									<li><a href="#">马甲/背心</a></li>
									<li><a href="#">短裤</a></li>
									<li><a href="#">休闲裤</a></li>
									<li><a href="#">牛仔裤</a></li>
									<li><a href="#">西服</a></li>
									<li><a href="#">西裤</a></li>
									<li><a href="#">西服套装</a></li>
									<li><a href="#">真皮皮衣</a></li>
									<li><a href="#">仿皮皮衣</a></li>
									<li><a href="#">羽绒服</a></li>
									<li><a href="#">毛呢大衣</a></li>
									<li><a href="#">棉服</a></li>
									<li><a href="#">羊绒衫</a></li>
									<li><a href="#">羊毛衫</a></li>
									<li><a href="#">卫裤/运动裤</a></li>
								</ul>
								<ul class="cate-logo">    
									<li><a href="#"><img src="/static/index/img/1490073529881448780.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072981305868823.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072373278367315.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072879222701895.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073539440462760.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072765604121481.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073675778205608.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073240845049320.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="630" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">服饰配件</a></strong>
								<span>
						            <a href="#">配饰</a>
									<a href="#">光学镜架/镜片</a>
									<a href="#">防辐射眼镜</a>
									<a href="#">女士丝巾/围巾/披肩</a>
									<a href="#">棒球帽</a>
									<a href="#">遮阳伞/雨伞</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">服饰配件</a></h3>
								<ul class="cate-list">
									<li><a href="#">配饰</a></li>
									<li><a href="#">光学镜架/镜片</a></li>
									<li><a href="#">防辐射眼镜</a></li>
									<li><a href="#">女士丝巾/围巾/披肩</a></li>
									<li><a href="#">棒球帽</a></li>
									<li><a href="#">遮阳伞/雨伞</a></li>
									<li><a href="#">遮阳帽</a></li>
									<li><a href="#">领带/领结/领带夹</a></li>
									<li><a href="#">男士腰带/礼盒</a></li>
									<li><a href="#">防晒手套</a></li>
									<li><a href="#">老花镜</a></li>
									<li><a href="#">袖扣</a></li>
									<li><a href="#">鸭舌帽</a></li>
									<li><a href="#">装饰眼镜</a></li>
									<li><a href="#">女士腰带/礼盒</a></li>
								</ul>
								<ul class="cate-logo">
								    <li><a href="#"><img src="/static/index/img/1490228100138579787.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072804442637685.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490171981556005380.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073561018734078.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072823106532144.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072677495061584.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="547" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">内衣</a></strong>
								<span>
						            <a href="#">内衣配件</a>
									<a href="#">文胸</a>
									<a href="#">睡衣/家居服</a>
									<a href="#">情侣睡衣</a>
									<a href="#">文胸套装</a>
									<a href="#">少女文胸</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">内衣</a></h3>
								<ul class="cate-list">
									<li><a href="#">内衣配件</a></li>
									<li><a href="#">文胸</a></li>
									<li><a href="#">睡衣/家居服</a></li>
									<li><a href="#">情侣睡衣</a></li>
									<li><a href="#">文胸套装</a></li>
									<li><a href="#">少女文胸</a></li>
									<li><a href="#">女式内裤</a></li>
									<li><a href="#">男式内裤</a></li>
									<li><a href="#">商务男袜</a></li>
									<li><a href="#">休闲棉袜</a></li>
									<li><a href="#">吊带/背心</a></li>
									<li><a href="#">打底衫</a></li>
									<li><a href="#">抹胸</a></li>
									<li><a href="#">连裤袜/丝袜</a></li>
									<li><a href="#">美腿袜</a></li>
									<li><a href="#">打底裤袜</a></li>
									<li><a href="#">塑身美体</a></li>
									<li><a href="#">大码内衣</a></li>
								</ul>
								<ul class="cate-logo">
								    <li><a href="#"><img src="/static/index/img/1490072950580851309.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490227784119952387.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073518703639070.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073982547710498.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074308773778697.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072313895957648.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073454678614186.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490227986732712711.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="1442" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">运动户外</a></strong>
								<span>
						            <a href="#">跑步运动</a>
									<a href="#">室内健身</a>
									<a href="#">自行车运动</a>
									<a href="#">轮滑运动</a>
									<a href="#">羽毛球/网球/乒乓球</a>
									<a href="#">足球/篮球/排球</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">运动户外</a></h3>
								<ul class="cate-list">
									<li><a href="#">跑步运动</a></li>
									<li><a href="#">室内健身</a></li>
									<li><a href="#">自行车运动</a></li>
									<li><a href="#">轮滑运动</a></li>
									<li><a href="#">羽毛球/网球/乒乓球</a></li>
									<li><a href="#">足球/篮球/排球</a></li>
									<li><a href="#">运动休闲</a></li>
									<li><a href="#">钓鱼用品</a></li>
									<li><a href="#">野营烧烤</a></li>
									<li><a href="#">游泳运动</a></li>
									<li><a href="#">舞蹈运动</a></li>
									<li><a href="#">瑜伽运动</a></li>
									<li><a href="#">防狼防身</a></li>
									<li><a href="#">水上运动</a></li>
								</ul>
								<ul class="cate-logo">
								    <li><a href="#"><img src="/static/index/img/1490072850306019115.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072931218635674.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072898345358625.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073009638652059.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073324022460149.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072918339853569.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072889090025069.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072993409028193.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


        <div class="categorys <?php if( !isset($show_nav)){ echo 'site-mast';} ?>">
            <div class="categorys-type">
            	<a href="categoryall.php" target="_blank">全部商品分类</a>
            </div>
		    <div class="categorys-tab-content navshow" >
		    	<div class="categorys-items" id="cata-nav">
		    		<?php if(is_array($CommCates) || $CommCates instanceof \think\Collection || $CommCates instanceof \think\Paginator): $i = 0; $__LIST__ = $CommCates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CommCates): $mod = ($i % 2 );++$i;?>
		            <div class="categorys-item" ectype="cateItem" data-id="<?php echo $CommCates['cates_id']; ?>" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-ele"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="" target="_blank"><?php echo $CommCates['cates_name']; ?></a>
					            </strong>
				            	<?php if($CommCates['children']): ?>
					            <span>
					            	<?php if(is_array($CommCates['children']) || $CommCates['children'] instanceof \think\Collection || $CommCates['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $CommCates['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CatesChildren): $mod = ($i % 2 );++$i;if($i < 3): ?>
									<a href="" target="_blank"><?php echo $CatesChildren['cates_name']; ?></a>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				                </span>
								<?php endif; ?>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_<?php echo $CommCates['cates_id']; ?>"></div>
									<div class="cate_detail" ectype="subitems_<?php echo $CommCates['cates_id']; ?>"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_<?php echo $CommCates['cates_id']; ?>"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
				    <?php endforeach; endif; else: echo "" ;endif; ?>

				    <script>
				    	// ajax异步获取顶级分类下的子分类、品牌、频道等相关信息在右侧菜单显示
				    	var ajaxCommCatesUrl = "<?php echo url('cates/getCommsCates'); ?>";
				    	// 加载中图片路径
				    	var imgLoad = '/static/index/img/loadGoods.gif';
				    </script>
				</div>
			</div>
		</div>
		


        <div class="nav-main" id="nav">
            <ul class="navitems">
	            <li><a href="<?php echo url('index/Index/index'); ?>" class="curr">首页</a></li>
	            <?php if(is_array($navArr['mid']) || $navArr['mid'] instanceof \think\Collection || $navArr['mid'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navArr['mid'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$midNav): $mod = ($i % 2 );++$i;?>
	            <li><a href="<?php echo $midNav['nav_url']; ?>" <?php if($midNav['nav_open'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $midNav['nav_name']; ?></a></li>
	            <?php endforeach; endif; else: echo "" ;endif; ?>
        	</ul>
        </div>



		<div class='topShows'>
	        <div class="mall-search">
	            <div class="dsc-search">
	                <div class="form">
	                    <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm(this)" class="search-form">
	                        <input autocomplete="off" name="keywords" type="text" id="keyword2" value="手机" class="search-text">
	                        <input type="hidden" name="store_search_cmt" value="0">
	                        <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>
	                        <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)">搜店铺</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <div class="suspend-login">
	            <a href="user.php">登录</a> |
	            <a href="user.php?act=register">注册</a>
	        </div>
	        <div class="shopCart" id="ECS_CARTINFO">
	            <div class="shopCart-con dsc-cm">
	                <a href="flow.php">
	                    <i class="iconfont icon-carts"></i>
	                    <span></span>
	                    <em class="count cart_num">0</em>
	                </a>
	            </div>
	            <div class="dorpdown-layer" ectype="dorpdownLayer">
	                <div class="prompt">
	                    <div class="nogoods">
	                    	<b></b>
	                    	<span>购物车中还没有商品，赶紧选购吧！</span>
	                    </div>
	                </div>
	            </div>
	            <script type="text/javascript">
	            function changenum(rec_id, diff, warehouse_id, area_id)
	            {
	                var cValue = $('#cart_value').val();
	                var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
	             
	                if(goods_number < 1)
	                {
	                    return false;   
	                }
	                else
	                {
	                    change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
	                }
	            }
	            function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
	            {
	                if(cValue != '' || cValue == 'undefined'){
	                   var cValue = $('#cart_value').val(); 
	                }   
	                Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
	            }
	            function change_goods_number_response(result)
	            {    
	                var rec_id = result.rec_id;           
	                if (result.error == 0)
	                {
	                   $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
	                   $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
	                   if (result.goods_number <= 0)
	                    {
	                        //数量为零则隐藏所在行
	                        $('#tr_goods_' +rec_id).style.display = 'none';
	                        $('#tr_goods_' +rec_id).innerHTML = '';
	                    }
	                    $('#total_desc').html(result.flow_info);//更新合计
	                    if($('ECS_CARTINFO'))
	                    

	                    if(result.group.length > 0){
	                        for(var i=0; i<result.group.length; i++){
	                            $("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
	                            $("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
	                        }
	                    }

	                    $("#goods_price_" + rec_id).html(result.goods_price);
	                    $(".cart_num").html(result.subtotal_number);
	                }
	                else if (result.message != '')
	                {
	                    $('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
	                    alert(result.message);
	                }                
	            }

	            function deleteCartGoods(rec_id,index)
	            {
	                Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
	            }

	            /**
	             * 接收返回的信息
	             */
	            function deleteCartGoodsResponse(res)
	            {
	              if (res.error)
	              {
	                alert(res.err_msg);
	              }
	              else if(res.index==1)
	              {
	                    Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
	              }
	              else
	              {
	                  $("#ECS_CARTINFO").html(res.content);
	                  $(".cart_num").html(res.cart_num);
	              }
	            }

	            function return_cart_list(result)
	            {
	                $(".cart_num").html(result.cart_num);
	                $(".pop_panel").html(result.content);
	                tbplHeigth();
	            }
	            </script>
	        </div>
	    </div>




	</div>
</div>




    <div class="homeindex" ectype="homeWrap">
   




<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->






        <div class="attached-search-container" ectype="suspColumn">
            <div class="w w1200">

                <div class="nav dsc-zoom" ectype="dscNav">
	<div class="w w1200">
		<div class="categorys site-masts">
			<div class="categorys-type"><a href="#">男装、女装、内衣</a></div>
			<div class="categorys-tab-content">
				<div class="categorys-items" ectype="items">
					<div class="categorys-item" ectype="item" data-catid="347" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">女装</a></strong>
								<span>
						            <a href="#">连衣裙</a>
									<a href="#">蕾丝/雪纺衫</a>
									<a href="#">衬衫</a>
									<a href="#">T恤</a>
									<a href="#">半身裙</a>
									<a href="#">休闲裤</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">女装</a></h3>
								<ul class="cate-list">
									<li><a href="#">连衣裙</a></li>
									<li><a href="#">蕾丝/雪纺衫</a></li>
									<li><a href="#">衬衫</a></li>
									<li><a href="#">T恤</a></li>
									<li><a href="#">半身裙</a></li>
									<li><a href="#">休闲裤</a></li>
									<li><a href="#">短裤</a></li>
									<li><a href="#">牛仔裤</a></li>
									<li><a href="#">针织衫</a></li>
									<li><a href="#">吊带/背心</a></li>
									<li><a href="#">打底衫</a></li>
									<li><a href="#">打底裤</a></li>
									<li><a href="#">正装裤</a></li>
									<li><a href="#">小西服</a></li>
									<li><a href="#">马甲</a></li>
									<li><a href="#">风衣</a></li>
									<li><a href="#">羊毛衫</a></li>
									<li><a href="#">羊绒衫</a></li>
									<li><a href="#">短外套</a></li>
									<li><a href="#">棉服</a></li>
									<li><a href="#">毛呢大衣</a></li>
									<li><a href="#">加绒裤</a></li>
									<li><a href="#">羽绒服</a></li>
									<li><a href="#">皮草</a></li>
									<li><a href="#">真皮皮衣</a></li>
									<li><a href="#">仿皮皮衣</a></li>
									<li><a href="#">旗袍/唐装</a></li>
									<li><a href="#">礼服</a></li>
									<li><a href="#">婚纱</a></li>
									<li><a href="#">中老年女装</a></li>
									<li><a href="#">大码女装</a></li>
								</ul>
								<ul class="cate-logo">    
									<li><a href="#"><img src="/static/index/img/1490071974970349584.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072756032175204.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073577683159021.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073591535005714.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072860522023692.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074030328949587.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490228075580091113.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="463" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">男装</a></strong>
								<span>
						            <a href="#">T恤</a>
									<a href="#">裤子</a>
									<a href="#">POLO衫</a>
									<a href="#">针织衫</a>
									<a href="#">夹克</a>
									<a href="#">卫衣</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">男装</a></h3>
								<ul class="cate-list">
									<li><a href="#">T恤</a></li>
									<li><a href="#">裤子</a></li>
									<li><a href="#">POLO衫</a></li>
									<li><a href="#">针织衫</a></li>
									<li><a href="#">夹克</a></li>
									<li><a href="#">卫衣</a></li>
									<li><a href="#">风衣</a></li>
									<li><a href="#">马甲/背心</a></li>
									<li><a href="#">短裤</a></li>
									<li><a href="#">休闲裤</a></li>
									<li><a href="#">牛仔裤</a></li>
									<li><a href="#">西服</a></li>
									<li><a href="#">西裤</a></li>
									<li><a href="#">西服套装</a></li>
									<li><a href="#">真皮皮衣</a></li>
									<li><a href="#">仿皮皮衣</a></li>
									<li><a href="#">羽绒服</a></li>
									<li><a href="#">毛呢大衣</a></li>
									<li><a href="#">棉服</a></li>
									<li><a href="#">羊绒衫</a></li>
									<li><a href="#">羊毛衫</a></li>
									<li><a href="#">卫裤/运动裤</a></li>
								</ul>
								<ul class="cate-logo">    
									<li><a href="#"><img src="/static/index/img/1490073529881448780.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072981305868823.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072373278367315.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072879222701895.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073539440462760.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072765604121481.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073675778205608.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073240845049320.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="630" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">服饰配件</a></strong>
								<span>
						            <a href="#">配饰</a>
									<a href="#">光学镜架/镜片</a>
									<a href="#">防辐射眼镜</a>
									<a href="#">女士丝巾/围巾/披肩</a>
									<a href="#">棒球帽</a>
									<a href="#">遮阳伞/雨伞</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">服饰配件</a></h3>
								<ul class="cate-list">
									<li><a href="#">配饰</a></li>
									<li><a href="#">光学镜架/镜片</a></li>
									<li><a href="#">防辐射眼镜</a></li>
									<li><a href="#">女士丝巾/围巾/披肩</a></li>
									<li><a href="#">棒球帽</a></li>
									<li><a href="#">遮阳伞/雨伞</a></li>
									<li><a href="#">遮阳帽</a></li>
									<li><a href="#">领带/领结/领带夹</a></li>
									<li><a href="#">男士腰带/礼盒</a></li>
									<li><a href="#">防晒手套</a></li>
									<li><a href="#">老花镜</a></li>
									<li><a href="#">袖扣</a></li>
									<li><a href="#">鸭舌帽</a></li>
									<li><a href="#">装饰眼镜</a></li>
									<li><a href="#">女士腰带/礼盒</a></li>
								</ul>
								<ul class="cate-logo">
								    <li><a href="#"><img src="/static/index/img/1490228100138579787.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072804442637685.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490171981556005380.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073561018734078.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072823106532144.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072677495061584.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="547" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">内衣</a></strong>
								<span>
						            <a href="#">内衣配件</a>
									<a href="#">文胸</a>
									<a href="#">睡衣/家居服</a>
									<a href="#">情侣睡衣</a>
									<a href="#">文胸套装</a>
									<a href="#">少女文胸</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">内衣</a></h3>
								<ul class="cate-list">
									<li><a href="#">内衣配件</a></li>
									<li><a href="#">文胸</a></li>
									<li><a href="#">睡衣/家居服</a></li>
									<li><a href="#">情侣睡衣</a></li>
									<li><a href="#">文胸套装</a></li>
									<li><a href="#">少女文胸</a></li>
									<li><a href="#">女式内裤</a></li>
									<li><a href="#">男式内裤</a></li>
									<li><a href="#">商务男袜</a></li>
									<li><a href="#">休闲棉袜</a></li>
									<li><a href="#">吊带/背心</a></li>
									<li><a href="#">打底衫</a></li>
									<li><a href="#">抹胸</a></li>
									<li><a href="#">连裤袜/丝袜</a></li>
									<li><a href="#">美腿袜</a></li>
									<li><a href="#">打底裤袜</a></li>
									<li><a href="#">塑身美体</a></li>
									<li><a href="#">大码内衣</a></li>
								</ul>
								<ul class="cate-logo">
								    <li><a href="#"><img src="/static/index/img/1490072950580851309.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490227784119952387.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073518703639070.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073982547710498.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490074308773778697.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072313895957648.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073454678614186.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490227986732712711.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="categorys-item" ectype="item" data-catid="1442" data-eveval="0">
						<div class="item-content">
							<i class="iconfont icon-right"></i>
							<div class="categorys-title">
								<strong><a href="#">运动户外</a></strong>
								<span>
						            <a href="#">跑步运动</a>
									<a href="#">室内健身</a>
									<a href="#">自行车运动</a>
									<a href="#">轮滑运动</a>
									<a href="#">羽毛球/网球/乒乓球</a>
									<a href="#">足球/篮球/排球</a>
								</span>
							</div>
						</div>
						<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
							<div class="catetop-layer-con clearfix">
								<h3><a href="#">运动户外</a></h3>
								<ul class="cate-list">
									<li><a href="#">跑步运动</a></li>
									<li><a href="#">室内健身</a></li>
									<li><a href="#">自行车运动</a></li>
									<li><a href="#">轮滑运动</a></li>
									<li><a href="#">羽毛球/网球/乒乓球</a></li>
									<li><a href="#">足球/篮球/排球</a></li>
									<li><a href="#">运动休闲</a></li>
									<li><a href="#">钓鱼用品</a></li>
									<li><a href="#">野营烧烤</a></li>
									<li><a href="#">游泳运动</a></li>
									<li><a href="#">舞蹈运动</a></li>
									<li><a href="#">瑜伽运动</a></li>
									<li><a href="#">防狼防身</a></li>
									<li><a href="#">水上运动</a></li>
								</ul>
								<ul class="cate-logo">
								    <li><a href="#"><img src="/static/index/img/1490072850306019115.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072931218635674.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072898345358625.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073009638652059.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490073324022460149.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072918339853569.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072889090025069.jpg" width="112" height="49"></a></li>
								    <li><a href="#"><img src="/static/index/img/1490072993409028193.jpg" width="112" height="49"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


        <div class="categorys <?php if( !isset($show_nav)){ echo 'site-mast';} ?>">
            <div class="categorys-type">
            	<a href="categoryall.php" target="_blank">全部商品分类</a>
            </div>
		    <div class="categorys-tab-content navshow" >
		    	<div class="categorys-items" id="cata-nav">
		    		<?php if(is_array($CommCates) || $CommCates instanceof \think\Collection || $CommCates instanceof \think\Paginator): $i = 0; $__LIST__ = $CommCates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CommCates): $mod = ($i % 2 );++$i;?>
		            <div class="categorys-item" ectype="cateItem" data-id="<?php echo $CommCates['cates_id']; ?>" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-ele"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="" target="_blank"><?php echo $CommCates['cates_name']; ?></a>
					            </strong>
				            	<?php if($CommCates['children']): ?>
					            <span>
					            	<?php if(is_array($CommCates['children']) || $CommCates['children'] instanceof \think\Collection || $CommCates['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $CommCates['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CatesChildren): $mod = ($i % 2 );++$i;if($i < 3): ?>
									<a href="" target="_blank"><?php echo $CatesChildren['cates_name']; ?></a>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				                </span>
								<?php endif; ?>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_<?php echo $CommCates['cates_id']; ?>"></div>
									<div class="cate_detail" ectype="subitems_<?php echo $CommCates['cates_id']; ?>"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_<?php echo $CommCates['cates_id']; ?>"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
				    <?php endforeach; endif; else: echo "" ;endif; ?>

				    <script>
				    	// ajax异步获取顶级分类下的子分类、品牌、频道等相关信息在右侧菜单显示
				    	var ajaxCommCatesUrl = "<?php echo url('cates/getCommsCates'); ?>";
				    	// 加载中图片路径
				    	var imgLoad = '/static/index/img/loadGoods.gif';
				    </script>
				</div>
			</div>
		</div>
		


        <div class="nav-main" id="nav">
            <ul class="navitems">
	            <li><a href="<?php echo url('index/Index/index'); ?>" class="curr">首页</a></li>
	            <?php if(is_array($navArr['mid']) || $navArr['mid'] instanceof \think\Collection || $navArr['mid'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navArr['mid'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$midNav): $mod = ($i % 2 );++$i;?>
	            <li><a href="<?php echo $midNav['nav_url']; ?>" <?php if($midNav['nav_open'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $midNav['nav_name']; ?></a></li>
	            <?php endforeach; endif; else: echo "" ;endif; ?>
        	</ul>
        </div>



		<div class='topShows'>
	        <div class="mall-search">
	            <div class="dsc-search">
	                <div class="form">
	                    <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm(this)" class="search-form">
	                        <input autocomplete="off" name="keywords" type="text" id="keyword2" value="手机" class="search-text">
	                        <input type="hidden" name="store_search_cmt" value="0">
	                        <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>
	                        <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)">搜店铺</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <div class="suspend-login">
	            <a href="user.php">登录</a> |
	            <a href="user.php?act=register">注册</a>
	        </div>
	        <div class="shopCart" id="ECS_CARTINFO">
	            <div class="shopCart-con dsc-cm">
	                <a href="flow.php">
	                    <i class="iconfont icon-carts"></i>
	                    <span></span>
	                    <em class="count cart_num">0</em>
	                </a>
	            </div>
	            <div class="dorpdown-layer" ectype="dorpdownLayer">
	                <div class="prompt">
	                    <div class="nogoods">
	                    	<b></b>
	                    	<span>购物车中还没有商品，赶紧选购吧！</span>
	                    </div>
	                </div>
	            </div>
	            <script type="text/javascript">
	            function changenum(rec_id, diff, warehouse_id, area_id)
	            {
	                var cValue = $('#cart_value').val();
	                var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
	             
	                if(goods_number < 1)
	                {
	                    return false;   
	                }
	                else
	                {
	                    change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
	                }
	            }
	            function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
	            {
	                if(cValue != '' || cValue == 'undefined'){
	                   var cValue = $('#cart_value').val(); 
	                }   
	                Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
	            }
	            function change_goods_number_response(result)
	            {    
	                var rec_id = result.rec_id;           
	                if (result.error == 0)
	                {
	                   $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
	                   $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
	                   if (result.goods_number <= 0)
	                    {
	                        //数量为零则隐藏所在行
	                        $('#tr_goods_' +rec_id).style.display = 'none';
	                        $('#tr_goods_' +rec_id).innerHTML = '';
	                    }
	                    $('#total_desc').html(result.flow_info);//更新合计
	                    if($('ECS_CARTINFO'))
	                    

	                    if(result.group.length > 0){
	                        for(var i=0; i<result.group.length; i++){
	                            $("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
	                            $("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
	                        }
	                    }

	                    $("#goods_price_" + rec_id).html(result.goods_price);
	                    $(".cart_num").html(result.subtotal_number);
	                }
	                else if (result.message != '')
	                {
	                    $('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
	                    alert(result.message);
	                }                
	            }

	            function deleteCartGoods(rec_id,index)
	            {
	                Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
	            }

	            /**
	             * 接收返回的信息
	             */
	            function deleteCartGoodsResponse(res)
	            {
	              if (res.error)
	              {
	                alert(res.err_msg);
	              }
	              else if(res.index==1)
	              {
	                    Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
	              }
	              else
	              {
	                  $("#ECS_CARTINFO").html(res.content);
	                  $(".cart_num").html(res.cart_num);
	              }
	            }

	            function return_cart_list(result)
	            {
	                $(".cart_num").html(result.cart_num);
	                $(".pop_panel").html(result.content);
	                tbplHeigth();
	            }
	            </script>
	        </div>
	    </div>




	</div>
</div>


    
            </div>            
        </div>            
                                    
                                    
                                    
                                    
<!-- *********************************************************************** -->
                                    
                                    
                                        
<div class="content" style="min-height: 886px;"><div class="visual-item" data-mode="lunbo" data-purebox="banner" data-li="1" data-length="5" ectype="visualItme" style="display: block;" data-diff="0">
                                    
                                    <div class="view">
                                        <div class="banner home-banner">
                                        	<div class="bd">
                                            	<ul data-type="range" data-slide="fold" style="position: relative; width: 1903px; height: 500px;">	    <li style="background-image: url(&quot;https://demo.dscmall.cn/data/gallery_album/1/original_img/1536773209297708549.jpg&quot;); background-position: center center; background-repeat: no-repeat; position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a href="" target="_blank" style="height:500px;"></a></div></li>
    	    <li style="background-image: url(&quot;https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984992503176615.jpg&quot;); background-position: center center; background-repeat: no-repeat; position: absolute; width: 1903px; left: 0px; top: 0px; display: list-item;"><div class="banner-width"><a href="" target="_blank" style="height:500px;"></a></div></li>
    	    <li style="background-image: url(&quot;https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984991783527346.jpg&quot;); background-position: center center; background-repeat: no-repeat; position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a href="" target="_blank" style="height:500px;"></a></div></li>
    
</ul><div class="spec" data-spec=""></div>
                                            </div>
                                            <div class="hd"><ul><li class="">1</li><li class="on">2</li><li class="">3</li></ul></div>
                                            <div class="vip-outcon">
                                                <div class="vip-con">
                                                    <div class="insertVipEdit" data-mode="insertVipEdit">
 
<div ectype="user_info"><div class="avatar">
    <a href="https://demo.dscmall.cn/user.php?act=profile"><img src="/static/index/img/avatar.png"></a>
</div>
<div class="login-info">
        <span>Hi，欢迎来到大商创!</span>
    <a href="https://demo.dscmall.cn/user.php" class="login-button">请登录</a>
    <a href="https://demo.dscmall.cn/merchants.php" target="_blank" class="register_button">我要开店</a>
    </div>
<input type="hidden" name="user_id" ectype="user_id" value="0"></div>   
<div class="vip-item">
    <div class="tit">
                <a href="javascript:void(0);" class="tab_head_item">公告</a>
                <a href="javascript:void(0);" class="tab_head_item">促销</a>
            </div>
    <div class="con">
                <ul>
                        <li><a href="https://demo.dscmall.cn/article.php?id=63" target="_blank">服务店突破2000多家</a></li>
                        <li><a href="https://demo.dscmall.cn/article.php?id=62" target="_blank">我们成为中国最大家电零售B2B2C系统</a></li>
                        <li><a href="https://demo.dscmall.cn/article.php?id=61" target="_blank">三大国际腕表品牌签约</a></li>
                    </ul>
                <ul style="display:none;">
                        <li><a href="https://demo.dscmall.cn/article.php?id=60" target="_blank">春季家装季，家电买一送一</a></li>
                        <li><a href="https://demo.dscmall.cn/article.php?id=59" target="_blank">抢百元优惠券，享4.22%活期</a></li>
                        <li><a href="https://demo.dscmall.cn/article.php?id=58" target="_blank">Macbook最高返50000消费豆！</a></li>
                    </ul>
            </div>
</div>
<div class="vip-item">
    <div class="tit">快捷入口</div>
    <div class="kj_con">
                        <div class="item item_1">
            <a href="https://demo.dscmall.cn/history_list.php" target="_blank">
                <i class="iconfont icon-browse"></i>
                <span>我的浏览</span>
            </a>
        </div>
                                <div class="item item_2">
            <a href="https://demo.dscmall.cn/user.php?act=collection_list" target="_blank">
                <i class="iconfont icon-zan-alt"></i>
                <span>我的收藏</span>
            </a>
        </div>
                                <div class="item item_3">
            <a href="https://demo.dscmall.cn/user.php?act=order_list" target="_blank">
                <i class="iconfont icon-order"></i>
                <span>我的订单</span>
            </a>
        </div>
                                <div class="item item_4">
            <a href="https://demo.dscmall.cn/user.php?act=account_safe" target="_blank">
                <i class="iconfont icon-password-alt"></i>
                <span>账号安全</span>
            </a>
        </div>
                                <div class="item item_5">
            <a href="https://demo.dscmall.cn/user.php?act=affiliate" target="_blank">
                <i class="iconfont icon-share-alt"></i>
                <span>我要分享</span>
            </a>
        </div>
                                <div class="item item_6">
            <a href="https://demo.dscmall.cn/merchants.php" target="_blank">
                <i class="iconfont icon-settled"></i>
                <span>商家入驻</span>
            </a>
        </div>
                    </div>
</div>
</div><div class="spec" data-spec=""></div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="h-need" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="need-channel clearfix" id="h-need_0" data-type="range" data-lift="推荐">
 
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984987302153402.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">优质新品</h3>
        <p style="color: #ffffff">专注生活美学</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494985002375136884.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984989930757668.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">潮流女装</h3>
        <p style="color: #ffffff">春装流行款抢购</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984989766362152.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984989391013089.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">人气美鞋</h3>
        <p style="color: #ffffff">新外貌“鞋”会</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984990383161028.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984987606903394.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">品牌精选</h3>
        <p style="color: #ffffff">潮牌尖货 初春换新</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984988032635434.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984990175755536.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">护肤彩妆</h3>
        <p style="color: #ffffff">春妆必买清单 低至3折</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984991251825734.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="spec" data-spec="" data-title=""></div></div>
                                    </div>
                                </div><div class="visual-item w1200 brandList" data-mode="h-brand" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="brand-channel clearfix" id="h-brand_0" data-type="range" data-lift="品牌">
 
<div class="home-brand-adv slide_lr_info">
        <a href="" target="_blank"><img src="/static/index/img/1494984992104112514.jpg" class="slide_lr_img"></a>
    </div>
<div ectype="homeBrand"><div class="brand-list" id="recommend_brands">
	<ul>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=204" target="_blank"><img src="/static/index/img/1490039286075654490.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=204" target="_blank">关注人数<br><div id="collect_count_204">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=93" target="_blank"><img src="/static/index/img/1490072850306019115.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="93" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=93" target="_blank">关注人数<br><div id="collect_count_93">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank"><img src="/static/index/img/1490072329183966195.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="73" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank">关注人数<br><div id="collect_count_73">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=76" target="_blank"><img src="/static/index/img/1490072373278367315.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="76" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=76" target="_blank">关注人数<br><div id="collect_count_76">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=79" target="_blank"><img src="/static/index/img/1490072677495061584.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="79" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=79" target="_blank">关注人数<br><div id="collect_count_79">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=82" target="_blank"><img src="/static/index/img/1490072694695600078.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="82" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=82" target="_blank">关注人数<br><div id="collect_count_82">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=85" target="_blank"><img src="/static/index/img/1490072756032175204.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="85" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=85" target="_blank">关注人数<br><div id="collect_count_85">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=95" target="_blank"><img src="/static/index/img/1490072870537181142.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="95" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=95" target="_blank">关注人数<br><div id="collect_count_95">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=98" target="_blank"><img src="/static/index/img/1490072898345358625.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="98" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=98" target="_blank">关注人数<br><div id="collect_count_98">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=101" target="_blank"><img src="/static/index/img/1490072931218635674.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="101" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=101" target="_blank">关注人数<br><div id="collect_count_101">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=105" target="_blank"><img src="/static/index/img/1490072971610241726.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="105" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=105" target="_blank">关注人数<br><div id="collect_count_105">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=110" target="_blank"><img src="/static/index/img/1490074043963552715.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="110" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=110" target="_blank">关注人数<br><div id="collect_count_110">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=113" target="_blank"><img src="/static/index/img/1490074030328949587.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="113" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=113" target="_blank">关注人数<br><div id="collect_count_113">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=116" target="_blank"><img src="/static/index/img/1490073109529817869.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="116" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=116" target="_blank">关注人数<br><div id="collect_count_116">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=122" target="_blank"><img src="/static/index/img/1490073982547710498.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="122" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=122" target="_blank">关注人数<br><div id="collect_count_122">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=126" target="_blank"><img src="/static/index/img/1490073943918274561.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="126" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=126" target="_blank">关注人数<br><div id="collect_count_126">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=195" target="_blank"><img src="/static/index/img/1490075385239594909.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="195" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=195" target="_blank">关注人数<br><div id="collect_count_195">0</div></a></div>
			</div>
		</li>
			</ul>
	<input type="hidden" name="user_id" value="0">
	<a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a>
</div>
</div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div>



<!-- +++++++++++++++++++++++++++   商品分类 start  ++++++++++++++++++++++++++++++ -->

                                <?php if(is_array($CatesRecpos) || $CatesRecpos instanceof \think\Collection || $CatesRecpos instanceof \think\Paginator): $i = 0; $__LIST__ = $CatesRecpos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CatesRecpos): $mod = ($i % 2 );++$i;?>
                                <div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_0" data-lift="女装">
 
<div class="floor-line-con floorOne floor-color-type-1" data-title="男装女装" data-idx="1" id="floor_1" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit"><?php echo $CatesRecpos['cates_name']; ?></div>
        <div class="hd-tags">
            <ul>
                <li class="first">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                <?php if(is_array($CatesRecpos['children']) || $CatesRecpos['children'] instanceof \think\Collection || $CatesRecpos['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $CatesRecpos['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CatesRecposChildren): $mod = ($i % 2 );++$i;?>
                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="347">
                    <span><?php echo $CatesRecposChildren['cates_name']; ?></span>
                    <i class="arrowImg"></i>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-01">
        <div class="bd-left">
                        <div class="floor-left-slide">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:232px"><ul style="width: 696px; left: -464px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                                                        <li style="float: left; width: 232px;"><a href=""><img src="/static/index/img/1494985255003388359.jpg"></a></li>
                                                                                                <li style="float: left; width: 232px;"><a href=""><img src="/static/index/img/1494985255671031591.jpg"></a></li>
                                                                                                <li style="float: left; width: 232px;"><a href=""><img src="/static/index/img/1494985255859372374.jpg"></a></li>
                                                                    </ul></div>
                </div>
                <div class="hd"><ul><li class="">1</li><li class="">2</li><li class="on">3</li></ul></div>
            </div>
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494984993812175408.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494984993892207941.jpg"></a>
                                            </div>
            
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv" style="display: none;">
                    <div class="f-r-m-item">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>毛衣</h3>
                                <span>满100减10</span>
                            </div>
                            <img src="/static/index/img/1494984997173604814.jpg">
                        </a>
                    </div>
                    <div class="f-r-m-item">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>随意搭</h3>
                                <span>来潮我看</span>
                            </div>
                            <img src="/static/index/img/1494985255611006354.png">
                        </a>
                    </div>
                    <div class="f-r-m-item">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>外套</h3>
                                <span>大牌抢好货</span>
                            </div>
                            <img src="/static/index/img/1494985257076782520.png">
                        </a>
                    </div>
                    <div class="f-r-m-item">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>连衣裙</h3>
                                <span>春季流行款抢购</span>
                            </div>
                            <img src="/static/index/img/1494985261416235695.jpg">
                        </a>
                    </div>
                    <div class="f-r-m-item f-r-m-i-double">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>女士套装</h3>
                                <span>新品低至5折</span>
                            </div>
                            <img src="/static/index/img/1494984998972685382.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_347" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=801" target="_blank"><img src="/static/index/img/0_thumb_G_1490174925807.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=801" title="逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅">逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>158.00                            </span>
            <span class="original-price"><em>¥</em>189.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=800" target="_blank"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=800" title="2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>130.00                            </span>
            <span class="original-price"><em>¥</em>199.20</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=799" target="_blank"><img src="/static/index/img/0_thumb_G_1490174858999.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=799" title="韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>68.00                            </span>
            <span class="original-price"><em>¥</em>81.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=798" target="_blank"><img src="/static/index/img/0_thumb_G_1490174824075.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=798" title="逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮">逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>149.00                            </span>
            <span class="original-price"><em>¥</em>178.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=797" target="_blank"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=797" title="17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>49.00                            </span>
            <span class="original-price"><em>¥</em>58.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=796" target="_blank"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=796" title="初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>40.00                            </span>
            <span class="original-price"><em>¥</em>78.00</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_630" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=783" target="_blank"><img src="/static/index/img/0_thumb_G_1490173894447.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=783" title="红叶伞遮阳伞防紫外线黑胶防晒晴雨两用太阳伞女糖果色折叠雨伞大 黑胶防晒 晴雨两用 糖果色 都市风情">红叶伞遮阳伞防紫外线黑胶防晒晴雨两用太阳伞女糖果色折叠雨伞大 黑胶防晒 晴雨两用 糖果色 都市风情</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>38.00                            </span>
            <span class="original-price"><em>¥</em>45.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=782" target="_blank"><img src="/static/index/img/0_thumb_G_1490173860746.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=782" title="6林志玲花样姐姐同款海伦凯勒太阳镜女 偏光蛤蟆镜潮墨镜H8535 花样姐姐同款 林志玲设计 炫彩镂空">6林志玲花样姐姐同款海伦凯勒太阳镜女 偏光蛤蟆镜潮墨镜H8535 花样姐姐同款 林志玲设计 炫彩镂空</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>378.00                            </span>
            <span class="original-price"><em>¥</em>453.59</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=781" target="_blank"><img src="/static/index/img/0_thumb_G_1490173699371.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=781" title="宝石蝶真丝围巾女士春秋季高档丝巾重磅桑蚕丝大方巾披肩丝绸礼品 16姆米重磅真丝丝滑缎面90方巾礼盒包装">宝石蝶真丝围巾女士春秋季高档丝巾重磅桑蚕丝大方巾披肩丝绸礼品 16姆米重磅真丝丝滑缎面90方巾礼盒包装</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>169.00                            </span>
            <span class="original-price"><em>¥</em>202.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=780" target="_blank"><img src="/static/index/img/0_thumb_G_1490173663577.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=780" title="男女韩版纯棉可爱冬季个性防尘情侣口罩保暖透气黑色时尚潮款春 15元一共2个口罩 防尘个性时尚">男女韩版纯棉可爱冬季个性防尘情侣口罩保暖透气黑色时尚潮款春 15元一共2个口罩 防尘个性时尚</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>15.00                            </span>
            <span class="original-price"><em>¥</em>18.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=779" target="_blank"><img src="/static/index/img/0_thumb_G_1490173626566.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=779" title="74超薄非球面镜片高度近视眼镜片近视镜片防蓝光配眼镜镜片加工 套餐价低至359元 6款镜架任您选">74超薄非球面镜片高度近视眼镜片近视镜片防蓝光配眼镜镜片加工 套餐价低至359元 6款镜架任您选</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>399.00                            </span>
            <span class="original-price"><em>¥</em>478.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=778" target="_blank"><img src="/static/index/img/0_thumb_G_1490173534127.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=778" title="NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品">NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>219.00                            </span>
            <span class="original-price"><em>¥</em>262.80</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_547" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=795" target="_blank"><img src="/static/index/img/0_thumb_G_1490174703131.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=795" title="都市丽人一片式无痕文胸厚杯性感聚拢舒适光面胸罩纯色商场同款 2016新品明星同款舒适Q软托无痕体验">都市丽人一片式无痕文胸厚杯性感聚拢舒适光面胸罩纯色商场同款 2016新品明星同款舒适Q软托无痕体验</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>91.00                            </span>
            <span class="original-price"><em>¥</em>109.20</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=794" target="_blank"><img src="/static/index/img/0_thumb_G_1490174663688.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=794" title="都市丽人文胸旗舰店 林志玲有钢圈少女小胸文胸 聚拢 调整型内衣V 官方正品 赠运费险 收藏有礼 全国包邮">都市丽人文胸旗舰店 林志玲有钢圈少女小胸文胸 聚拢 调整型内衣V 官方正品 赠运费险 收藏有礼 全国包邮</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>69.00                            </span>
            <span class="original-price"><em>¥</em>82.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=793" target="_blank"><img src="/static/index/img/0_thumb_G_1490174631015.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=793" title="久慕雅黛诱惑情趣内衣诱惑女蕾丝吊带袜性感长筒吊袜丝袜吊袜带 性感显瘦 舒适防滑 细腻滑弹 纤长有型">久慕雅黛诱惑情趣内衣诱惑女蕾丝吊带袜性感长筒吊袜丝袜吊袜带 性感显瘦 舒适防滑 细腻滑弹 纤长有型</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>68.00                            </span>
            <span class="original-price"><em>¥</em>81.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=792" target="_blank"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=792" title="贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>124.00                            </span>
            <span class="original-price"><em>¥</em>165.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=791" target="_blank"><img src="/static/index/img/0_thumb_G_1490174508974.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=791" title="迷瞳盒装女士内裤莫代尔透气少女三角裤夏季性感低腰无痕大码裤头 5条盒装 莫代尔面料 小内裤 窄边三角裤">迷瞳盒装女士内裤莫代尔透气少女三角裤夏季性感低腰无痕大码裤头 5条盒装 莫代尔面料 小内裤 窄边三角裤</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>44.50                            </span>
            <span class="original-price"><em>¥</em>53.40</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=790" target="_blank"><img src="/static/index/img/0_thumb_G_1490174469373.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=790" title="Calvin Klein Underwear/CK 2017春夏新款 男士平角内裤NU8638 初上市价格290元">Calvin Klein Underwear/CK 2017春夏新款 男士平角内裤NU8638 初上市价格290元</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>290.00                            </span>
            <span class="original-price"><em>¥</em>348.00</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_463" style="display: block;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=789" target="_blank"><img src="/static/index/img/0_thumb_G_1490174414186.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=789" title="森马针织衫 冬季男圆领套头青年毛衣小清新线衫毛衫纯色韩版学生">森马针织衫 冬季男圆领套头青年毛衣小清新线衫毛衫纯色韩版学生</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>79.00                            </span>
            <span class="original-price"><em>¥</em>94.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=788" target="_blank"><img src="/static/index/img/0_thumb_G_1490174342632.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=788" title="HLA/海澜之家休闲西服2017春季新品平驳领时尚西装男单西外套 平驳领型 胸针装饰 青春休闲 舒适手感">HLA/海澜之家休闲西服2017春季新品平驳领时尚西装男单西外套 平驳领型 胸针装饰 青春休闲 舒适手感</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>498.00                            </span>
            <span class="original-price"><em>¥</em>597.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=787" target="_blank"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=787" title="YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>130.00                            </span>
            <span class="original-price"><em>¥</em>190.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=786" target="_blank"><img src="/static/index/img/0_thumb_G_1490174241651.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=786" title="裤子男士哈伦裤春季新款2017束脚裤修身韩版潮流小脚裤男裤休闲裤 弹力">裤子男士哈伦裤春季新款2017束脚裤修身韩版潮流小脚裤男裤休闲裤 弹力</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>99.00                            </span>
            <span class="original-price"><em>¥</em>118.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=785" target="_blank"><img src="/static/index/img/0_thumb_G_1490174208112.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=785" title="森马夹克 2016冬装新款男士飞行夹克贴布绣立领休闲外套韩版潮流">森马夹克 2016冬装新款男士飞行夹克贴布绣立领休闲外套韩版潮流</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>199.90                            </span>
            <span class="original-price"><em>¥</em>239.88</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=866" target="_blank"><img src="/static/index/img/0_thumb_G_1490211843119.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=866" title="马克华菲短袖T恤 夏装新款舒适圆领条纹拼接男简约修身短袖上衣">马克华菲短袖T恤 夏装新款舒适圆领条纹拼接男简约修身短袖上衣</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>128.00                            </span>
            <span class="original-price"><em>¥</em>153.60</span>
        </div>
    </div>
</li>
</ul>
</div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=72" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072313895957648.jpg" title="ELLE HOME"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=76" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072373278367315.jpg" title="金利来"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=79" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072677495061584.jpg" title="justyle"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=82" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072694695600078.jpg" title="李宁"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=86" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072765604121481.jpg" title="康比特"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=106" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072981305868823.jpg" title="开普特"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=122" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073982547710498.jpg" title="Five Plus"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=149" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073591535005714.jpg" title="鸿星尔克"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=152" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490228100138579787.jpg" title="杰克琼斯"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=154" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073529881448780.jpg" title="匡威"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div>



<?php endforeach; endif; else: echo "" ;endif; ?>



<!-- +++++++++++++++++++++++++++   商品分类end  ++++++++++++++++++++++++++++++ -->



                                <div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="1" style="display: block; position: relative; opacity: 1; z-index: 0; left: 0px; top: 0px;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_1" data-lift="鞋靴">
 
<div class="floor-line-con floorOne floor-color-type-2" data-title="鞋靴箱包" data-idx="1" id="floor_2" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit">鞋靴、箱包、钟表、奢侈品</div>
        <div class="hd-tags">
            <ul>
                <li class="first">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="360">
                    <span>功能箱包</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="355">
                    <span>流行男鞋</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="362">
                    <span>奢侈品</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first current" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="353">
                    <span>时尚女鞋</span>
                    <i class="arrowImg"></i>
                </li>
                                                            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-02">
        <div class="bd-left">
                        <div class="floor-left-slide">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:474px"><ul style="width: 1422px; left: -474px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                                                        <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494984993525657918.jpg"></a></li>
                                                                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985258163076122.jpg"></a></li>
                                                                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985258841930385.jpg"></a></li>
                                                                    </ul></div>
                </div>
                <div class="hd"><ul><li class="">1</li><li class="on">2</li><li class="">3</li></ul></div>
            </div>
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494984994714366758.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494984994759822929.jpg"></a>
                                            </div>
            
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv" style="display: none;">
                                        <div class="f-r-m-item
                                        	 f-r-m-i-double                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>商务出差必备</h3>
                                <span>磨砂登机箱</span>
                            </div>
                            <img src="/static/index/img/1494985264048620039.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>防水斜挎包</h3>
                                <span>商城自营，闪电发货</span>
                            </div>
                            <img src="/static/index/img/1494985259325736762.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>欧时纳女包</h3>
                                <span>跨万店三免一</span>
                            </div>
                            <img src="/static/index/img/1494985254984045600.png">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>大牌精选</h3>
                                <span>满199减100</span>
                            </div>
                            <img src="/static/index/img/1494985261810426955.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>纪梵希</h3>
                                <span>大牌上新</span>
                            </div>
                            <img src="/static/index/img/1495042209788792159.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_360" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=832" target="_blank"><img src="/static/index/img/0_thumb_G_1490208758028.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=832" title="DELSEY法国大使拉杆箱旅行箱25寸400密码箱箱子万向轮男女行李箱 可扩充容量 全球联保">DELSEY法国大使拉杆箱旅行箱25寸400密码箱箱子万向轮男女行李箱 可扩充容量 全球联保</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>619.00                            </span>
            <span class="original-price"><em>¥</em>742.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=683" target="_blank"><img src="/static/index/img/0_thumb_G_1489109337889.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=683" title="igtt铝框行李箱拉杆箱旅行箱万向轮男女20/24/26寸密码箱登机箱子 铝合金框 加强密码锁 万向轮 终身保修">igtt铝框行李箱拉杆箱旅行箱万向轮男女20/24/26寸密码箱登机箱子 铝合金框 加强密码锁 万向轮 终身保修</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>330.00                            </span>
            <span class="original-price"><em>¥</em>396.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=682" target="_blank"><img src="/static/index/img/0_thumb_G_1489109282145.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=682" title="波米铝框拉杆箱万向轮密码旅行箱子20/24寸行李箱女登机箱男26/28 顺丰速运赠运费险赠十礼品终身质保">波米铝框拉杆箱万向轮密码旅行箱子20/24寸行李箱女登机箱男26/28 顺丰速运赠运费险赠十礼品终身质保</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>250.00                            </span>
            <span class="original-price"><em>¥</em>300.00</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_355" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=903" target="_blank"><img src="/static/index/img/0_thumb_G_1490915806032.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=903" title="正品直邮Hermes爱马仕2017新款男鞋 时尚真皮休闲鞋H171325ZH02   7495">正品直邮Hermes爱马仕2017新款男鞋 时尚真皮休闲鞋H171325ZH02   7495</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>11.00                            </span>
            <span class="original-price"><em>¥</em>957.59</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=902" target="_blank"><img src="/static/index/img/0_thumb_G_1490915538739.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=902" title="阿迪达斯男鞋ZX750三叶草zx700跑步鞋S 76193 BB 1211 1213 1214 〓〓〓专柜正品 支持验货 全新现货〓〓〓">阿迪达斯男鞋ZX750三叶草zx700跑步鞋S 76193 BB 1211 1213 1214 〓〓〓专柜正品 支持验货 全新现货〓〓〓</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>479.00                            </span>
            <span class="original-price"><em>¥</em>574.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=835" target="_blank"><img src="/static/index/img/0_thumb_G_1490208908113.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=835" title="NIKE耐克男鞋2017春款AIR ZOOM 33气垫休闲运动跑步鞋831352-001 气垫缓震 夏季透气 6年老店 正品保障">NIKE耐克男鞋2017春款AIR ZOOM 33气垫休闲运动跑步鞋831352-001 气垫缓震 夏季透气 6年老店 正品保障</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>629.00                            </span>
            <span class="original-price"><em>¥</em>754.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=834" target="_blank"><img src="/static/index/img/0_thumb_G_1490208869148.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=834" title="New Balance/NB 500系列男鞋复古鞋跑步鞋休闲运动鞋GM500RSW">New Balance/NB 500系列男鞋复古鞋跑步鞋休闲运动鞋GM500RSW</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>321.00                            </span>
            <span class="original-price"><em>¥</em>385.20</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=685" target="_blank"><img src="/static/index/img/0_thumb_G_1489109633806.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=685" title="春季马丁靴男真皮男靴黄靴工装军靴韩版短靴沙漠靴高帮男鞋大黄靴 头层牛皮">春季马丁靴男真皮男靴黄靴工装军靴韩版短靴沙漠靴高帮男鞋大黄靴 头层牛皮</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>800.00                            </span>
            <span class="original-price"><em>¥</em>1200.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=684" target="_blank"><img src="/static/index/img/0_thumb_G_1489109583798.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=684" title="【情侣款】Camel骆驼男靴 时尚潮流英伦风马丁靴高帮皮靴 爆卖1万双！ 情侣马丁靴 好评如潮">【情侣款】Camel骆驼男靴 时尚潮流英伦风马丁靴高帮皮靴 爆卖1万双！ 情侣马丁靴 好评如潮</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>450.00                            </span>
            <span class="original-price"><em>¥</em>666.00</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_362" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=841" target="_blank"><img src="/static/index/img/0_thumb_G_1490209163537.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=841" title="AIPU艾谱豪雅高端电子指纹家用办公奢侈品保险箱保险柜88cm">AIPU艾谱豪雅高端电子指纹家用办公奢侈品保险箱保险柜88cm</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>26688.00                            </span>
            <span class="original-price"><em>¥</em>32025.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=840" target="_blank"><img src="/static/index/img/0_thumb_G_1490209125275.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=840" title="COVHERlab男士职业正装商务领带 紫方块奢侈领带男韩版 礼品领带 奢侈品牌 商务必备 简约大气 送礼佳品">COVHERlab男士职业正装商务领带 紫方块奢侈领带男韩版 礼品领带 奢侈品牌 商务必备 简约大气 送礼佳品</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>551.00                            </span>
            <span class="original-price"><em>¥</em>661.19</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=839" target="_blank"><img src="/static/index/img/0_thumb_G_1490209093825.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=839" title="BOSSsunwen头层牛皮真皮针扣皮带男士编织时尚腰带奢侈品个性青年 自动扣 头层牛皮 赠运费险 全场包邮 七天退换">BOSSsunwen头层牛皮真皮针扣皮带男士编织时尚腰带奢侈品个性青年 自动扣 头层牛皮 赠运费险 全场包邮 七天退换</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>1188.00                            </span>
            <span class="original-price"><em>¥</em>1425.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=838" target="_blank"><img src="/static/index/img/0_thumb_G_1490209061619.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=838" title="perhomme/帛欧尼男士手提包横款潮流精品男包奢侈品时尚真皮包 领券购物更 优惠">perhomme/帛欧尼男士手提包横款潮流精品男包奢侈品时尚真皮包 领券购物更 优惠</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>1388.00                            </span>
            <span class="original-price"><em>¥</em>1665.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=837" target="_blank"><img src="/static/index/img/0_thumb_G_1490209033472.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=837" title="KooDao2016新款奢侈蛇纹真皮女士手提包百搭精品休闲斜挎手拎包 悦享生活 品质追求 满减领券 支持无理由 退换货">KooDao2016新款奢侈蛇纹真皮女士手提包百搭精品休闲斜挎手拎包 悦享生活 品质追求 满减领券 支持无理由 退换货</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>3369.00                            </span>
            <span class="original-price"><em>¥</em>4042.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=836" target="_blank"><img src="/static/index/img/0_thumb_G_1490208973736.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=836" title="LUGAV奢侈品男鞋商务休闲皮鞋固特异男士尖头手工定制鞋进口牛皮 固特异工艺 顺丰包邮 经典手工皮鞋 限量抢购！">LUGAV奢侈品男鞋商务休闲皮鞋固特异男士尖头手工定制鞋进口牛皮 固特异工艺 顺丰包邮 经典手工皮鞋 限量抢购！</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>799.00                            </span>
            <span class="original-price"><em>¥</em>958.80</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_353" style="display: block;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=681" target="_blank"><img src="/static/index/img/0_thumb_G_1489109130174.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=681" title="2016秋冬季新款尖头粗跟短靴女高跟真皮加绒中跟马丁靴女靴子女鞋 优质全头层牛皮，品质女鞋">2016秋冬季新款尖头粗跟短靴女高跟真皮加绒中跟马丁靴女靴子女鞋 优质全头层牛皮，品质女鞋</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>458.00                            </span>
            <span class="original-price"><em>¥</em>549.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=680" target="_blank"><img src="/static/index/img/0_thumb_G_1489109041792.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=680" title="topgloria/汤普葛罗舒适秋冬新款圆头女靴 舒适粗高跟短靴110360H 冬靴特价清仓2件9折，下单送后跟帖">topgloria/汤普葛罗舒适秋冬新款圆头女靴 舒适粗高跟短靴110360H 冬靴特价清仓2件9折，下单送后跟帖</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>444.00                            </span>
            <span class="original-price"><em>¥</em>532.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=679" target="_blank"><img src="/static/index/img/0_thumb_G_1489108999364.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=679" title="特步女鞋2017春季新款运动鞋休闲鞋女慢跑步鞋旅游鞋轻便舒适时尚 早春特惠 爆款休闲女鞋 赠运费险">特步女鞋2017春季新款运动鞋休闲鞋女慢跑步鞋旅游鞋轻便舒适时尚 早春特惠 爆款休闲女鞋 赠运费险</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>200.00                            </span>
            <span class="original-price"><em>¥</em>240.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=676" target="_blank"><img src="/static/index/img/0_thumb_G_1489108709072.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=676" title="莱尔斯丹 2017春新款复古粗跟圆头中跟高跟鞋女鞋通勤单鞋8M43701">莱尔斯丹 2017春新款复古粗跟圆头中跟高跟鞋女鞋通勤单鞋8M43701</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>588.00                            </span>
            <span class="original-price"><em>¥</em>705.60</span>
        </div>
    </div>
</li>
</ul>
</div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=93" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072850306019115.jpg" title="同庆和堂"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=115" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074006660107941.jpg" title="西门子"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=130" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074180745676140.jpg" title="TP-LINL"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=131" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073919711003101.jpg" title="ZIPPO"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=132" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073900838296364.jpg" title="阿玛尼"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=138" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073717776504773.jpg" title="迪士尼"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=139" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073705755280994.jpg" title="飞科"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=154" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073529881448780.jpg" title="匡威"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=178" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073253749057076.jpg" title="文轩网"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=186" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074308773778697.jpg" title="新百伦"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="2" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_2" data-lift="食品">
 
<div class="floor-line-con floorOne floor-color-type-3" data-title="食品酒水" data-idx="1" id="floor_3" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit">食品、酒类、生鲜、特产</div>
        <div class="hd-tags">
            <ul>
                <li class="first">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="616">
                    <span>进口食品</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="623">
                    <span>生鲜食品</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="615">
                    <span>中外名酒</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="622">
                    <span>粮油调味</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first current" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="617">
                    <span>休闲食品</span>
                    <i class="arrowImg"></i>
                </li>
                                                            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-03">
        <div class="bd-left">
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494984995376315298.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494984995451465490.jpg"></a>
                                            </div>
            
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv" style="display: none;">
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>李锦记</h3>
                                <span>商城自营好物低价</span>
                            </div>
                            <img src="/static/index/img/1494985253313357913.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	 f-r-m-i-double                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>金锣火腿肠</h3>
                                <span>方便食品</span>
                            </div>
                            <img src="/static/index/img/1494985009349965302.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>酸辣牛肉味五连包</h3>
                                <span>五件包39.9选14</span>
                            </div>
                            <img src="/static/index/img/1494985008433437711.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>香茉莉香米</h3>
                                <span>满76香米1KG</span>
                            </div>
                            <img src="/static/index/img/1494985262035088187.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>魔力紫</h3>
                                <span>尽享休闲时光</span>
                            </div>
                            <img src="/static/index/img/1494985264023870581.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_616" style="display: none;"><ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=741" target="_blank"><img src="/static/index/img/0_thumb_G_1490165595498.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=741" title="泰国进口小老板海苔片32g*6包 即食脆海苔紫菜片零食炸海苔食品 泰国进口6包包邮健康的香脆零食鲜美可口">泰国进口小老板海苔片32g*6包 即食脆海苔紫菜片零食炸海苔食品 泰国进口6包包邮健康的香脆零食鲜美可口</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>38.90                            </span>
            <span class="original-price"><em>¥</em>46.68</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=740" target="_blank"><img src="/static/index/img/0_thumb_G_1490165561683.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=740" title="俄罗斯进口零食品 POHHN小牛大奶牛巧克力威化夹心饼干15包约500g 500g/袋 约15包">俄罗斯进口零食品 POHHN小牛大奶牛巧克力威化夹心饼干15包约500g 500g/袋 约15包</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>25.60                            </span>
            <span class="original-price"><em>¥</em>30.72</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=739" target="_blank"><img src="/static/index/img/0_thumb_G_1490165528323.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=739" title="法国进口零食费罗伦十二星座糖水果味薄荷硬糖果礼盒装清凉糖女生 十二款定制独有星座可写贺卡颜控糖情人礼盒">法国进口零食费罗伦十二星座糖水果味薄荷硬糖果礼盒装清凉糖女生 十二款定制独有星座可写贺卡颜控糖情人礼盒</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>29.90                            </span>
            <span class="original-price"><em>¥</em>35.87</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=738" target="_blank"><img src="/static/index/img/0_thumb_G_1490165470760.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=738" title="香港特产珍妮聪明小熊曲奇饼干640g四味奶油4mix礼盒装进口零食品 香港人气美食 手工四味奶油曲奇">香港特产珍妮聪明小熊曲奇饼干640g四味奶油4mix礼盒装进口零食品 香港人气美食 手工四味奶油曲奇</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>188.00                            </span>
            <span class="original-price"><em>¥</em>225.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=737" target="_blank"><img src="/static/index/img/0_thumb_G_1490165418547.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=737" title="台湾进口 自然素材焦糖黑糖饼干早餐代餐饼干办公室休闲零食 365g 台湾进口/浓郁黑糖味/香酥可口/好吃不腻">台湾进口 自然素材焦糖黑糖饼干早餐代餐饼干办公室休闲零食 365g 台湾进口/浓郁黑糖味/香酥可口/好吃不腻</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>39.90                            </span>
            <span class="original-price"><em>¥</em>47.87</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=736" target="_blank"><img src="/static/index/img/0_thumb_G_1490165375713.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=736" title="越南进口 Tipo面包鸡蛋牛奶味300g饼干零食糕点 奶香浓郁 香酥可口 大包分享装">越南进口 Tipo面包鸡蛋牛奶味300g饼干零食糕点 奶香浓郁 香酥可口 大包分享装</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>15.80                            </span>
            <span class="original-price"><em>¥</em>18.96</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_623" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=759" target="_blank"><img src="/static/index/img/0_thumb_G_1490167738180.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=759" title="波士顿鲜活龙虾700g 加拿大进口海鲜水产大龙虾活 鲜活发货 肉质嫩滑 加拿大进口">波士顿鲜活龙虾700g 加拿大进口海鲜水产大龙虾活 鲜活发货 肉质嫩滑 加拿大进口</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>219.00                            </span>
            <span class="original-price"><em>¥</em>262.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=758" target="_blank"><img src="/static/index/img/0_thumb_G_1490167696110.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=758" title="全母现货湖中醉长荡湖大闸蟹鲜活螃蟹湖蟹共10只装6只送4只全母蟹 6只送4只 全母蟹 只只有黄 顺丰鲜达">全母现货湖中醉长荡湖大闸蟹鲜活螃蟹湖蟹共10只装6只送4只全母蟹 6只送4只 全母蟹 只只有黄 顺丰鲜达</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>88.00                            </span>
            <span class="original-price"><em>¥</em>105.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=757" target="_blank"><img src="/static/index/img/0_thumb_G_1490167660455.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=757" title="三顿饭进口冰鲜三文鱼刺身中段新鲜三文鱼净肉即食生鱼片生吃海鲜 当天现杀 净肉400g 默认不发皮">三顿饭进口冰鲜三文鱼刺身中段新鲜三文鱼净肉即食生鱼片生吃海鲜 当天现杀 净肉400g 默认不发皮</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>81.88                            </span>
            <span class="original-price"><em>¥</em>98.25</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=756" target="_blank"><img src="/static/index/img/0_thumb_G_1490167619511.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=756" title="加拿大北极甜虾500g 80+ 进口生鲜海鲜虾 即食冻虾北极虾 包邮 中粮品质 野生海域虾">加拿大北极甜虾500g 80+ 进口生鲜海鲜虾 即食冻虾北极虾 包邮 中粮品质 野生海域虾</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>45.80                            </span>
            <span class="original-price"><em>¥</em>54.95</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=755" target="_blank"><img src="/static/index/img/0_thumb_G_1490167575816.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=755" title="澳大利亚牛腩块冷冻生鲜牛肉进口新鲜生牛肉牛肉粒1kg 澳洲· 谷饲牛腩 (1000 g)">澳大利亚牛腩块冷冻生鲜牛肉进口新鲜生牛肉牛肉粒1kg 澳洲· 谷饲牛腩 (1000 g)</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>188.00                            </span>
            <span class="original-price"><em>¥</em>225.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=754" target="_blank"><img src="/static/index/img/0_thumb_G_1490167531824.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=754" title="顶诺澳洲菲力牛排10份经典套餐团购菲力生鲜牛肉牛扒送刀叉 10份牛排 送10油包 10酱包 1刀叉">顶诺澳洲菲力牛排10份经典套餐团购菲力生鲜牛肉牛扒送刀叉 10份牛排 送10油包 10酱包 1刀叉</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>135.00                            </span>
            <span class="original-price"><em>¥</em>162.00</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_615" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=766" target="_blank"><img src="/static/index/img/0_thumb_G_1490167981086.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=766" title="【五千好评】法国洋酒 礼盒装 白兰地贵族蓝利xo正品 700ml 包邮 销量破万超值 破损包赔 配送礼盒礼袋">【五千好评】法国洋酒 礼盒装 白兰地贵族蓝利xo正品 700ml 包邮 销量破万超值 破损包赔 配送礼盒礼袋</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>168.00                            </span>
            <span class="original-price"><em>¥</em>201.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=765" target="_blank"><img src="/static/index/img/0_thumb_G_1490167981086.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=765" title="【五千好评】法国洋酒 礼盒装 白兰地贵族蓝利xo正品 700ml 包邮 销量破万超值 破损包赔 配送礼盒礼袋">【五千好评】法国洋酒 礼盒装 白兰地贵族蓝利xo正品 700ml 包邮 销量破万超值 破损包赔 配送礼盒礼袋</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>168.00                            </span>
            <span class="original-price"><em>¥</em>201.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=764" target="_blank"><img src="/static/index/img/0_thumb_G_1490167945584.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=764" title="美国SKYY深蓝牌原味蓝天伏特加*2瓶组合正品洋酒鸡尾酒 原装进口 正品行货 品质保障">美国SKYY深蓝牌原味蓝天伏特加*2瓶组合正品洋酒鸡尾酒 原装进口 正品行货 品质保障</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>77.00                            </span>
            <span class="original-price"><em>¥</em>92.39</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=763" target="_blank"><img src="/static/index/img/0_thumb_G_1490167910975.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=763" title="百利甜酒Baileys原味750ml/瓶 爱尔兰进口洋酒力娇酒 奶油威士忌 的混搭">百利甜酒Baileys原味750ml/瓶 爱尔兰进口洋酒力娇酒 奶油威士忌 的混搭</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>89.00                            </span>
            <span class="original-price"><em>¥</em>106.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=762" target="_blank"><img src="/static/index/img/0_thumb_G_1490167877934.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=762" title="进口洋酒 杰克丹尼威士忌酒700ml Jack Daniel's鸡尾酒基酒 行货">进口洋酒 杰克丹尼威士忌酒700ml Jack Daniel's鸡尾酒基酒 行货</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>136.00                            </span>
            <span class="original-price"><em>¥</em>163.20</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=761" target="_blank"><img src="/static/index/img/0_thumb_G_1490167841780.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=761" title="RIO锐澳鸡尾酒套餐发光瓶预调酒混合6口味275ml*6瓶 限定发光瓶 嗨翻夜趴">RIO锐澳鸡尾酒套餐发光瓶预调酒混合6口味275ml*6瓶 限定发光瓶 嗨翻夜趴</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>99.00                            </span>
            <span class="original-price"><em>¥</em>118.80</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_622" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=900" target="_blank"><img src="/static/index/img/0_thumb_G_1490234264758.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=900" title="润穗苏北软香稻米5kg 香软弹滑 苏北大米 苏软香 口感上层 洁白纤长 香糯可口">润穗苏北软香稻米5kg 香软弹滑 苏北大米 苏软香 口感上层 洁白纤长 香糯可口</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>36.90                            </span>
            <span class="original-price"><em>¥</em>44.27</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=899" target="_blank"><img src="/static/index/img/0_thumb_G_1490234225950.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=899" title="【天猫超市】柴火大院长粒香大米5kg东北大米长粒香米杂粮伴侣 粒粒精选 颗粒饱满 香软甜滑 嫩黏筋道 东北大米">【天猫超市】柴火大院长粒香大米5kg东北大米长粒香米杂粮伴侣 粒粒精选 颗粒饱满 香软甜滑 嫩黏筋道 东北大米</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>55.00                            </span>
            <span class="original-price"><em>¥</em>66.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=898" target="_blank"><img src="/static/index/img/0_thumb_G_1490234195923.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=898" title="【兆丰年】 上海崇明岛绿色生态五斤 大米 寿司米 无抛光 新米 不抛光 无农药残留 自然农法">【兆丰年】 上海崇明岛绿色生态五斤 大米 寿司米 无抛光 新米 不抛光 无农药残留 自然农法</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>69.90                            </span>
            <span class="original-price"><em>¥</em>83.88</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=897" target="_blank"><img src="/static/index/img/0_thumb_G_1490234165600.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=897" title="谷绿农品 有机大米稻花香2号新米10斤东北大米黑龙江5kg包邮 有机大米 稻花香有机 不满意包退">谷绿农品 有机大米稻花香2号新米10斤东北大米黑龙江5kg包邮 有机大米 稻花香有机 不满意包退</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>60.00                            </span>
            <span class="original-price"><em>¥</em>72.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=896" target="_blank"><img src="/static/index/img/0_thumb_G_1490234132934.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=896" title="馨达大米五常长粒香大米5kg正宗东北特产黑龙江优质袋装大米10斤 小批量碾磨 正宗五常大米 东北大米">馨达大米五常长粒香大米5kg正宗东北特产黑龙江优质袋装大米10斤 小批量碾磨 正宗五常大米 东北大米</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>36.00                            </span>
            <span class="original-price"><em>¥</em>43.19</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=895" target="_blank"><img src="/static/index/img/0_thumb_G_1490234099339.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=895" title="爱心农场2016新米黑龙江东北长粒香大米优质东北特产大米5kg10斤 2016新米超值10斤装小批量现碾东北米">爱心农场2016新米黑龙江东北长粒香大米优质东北特产大米5kg10斤 2016新米超值10斤装小批量现碾东北米</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>39.90                            </span>
            <span class="original-price"><em>¥</em>47.87</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_617" style="display: block;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=747" target="_blank"><img src="/static/index/img/0_thumb_G_1490165975986.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=747" title="北京特产 御食园蜜麻花500g 特色小吃休闲年货零食 食品芝麻糕点 2件起送试 吃，多买多送">北京特产 御食园蜜麻花500g 特色小吃休闲年货零食 食品芝麻糕点 2件起送试 吃，多买多送</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>19.80                            </span>
            <span class="original-price"><em>¥</em>23.76</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=746" target="_blank"><img src="/static/index/img/0_thumb_G_1490165942091.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=746" title="软香奶萨萨210g休闲零食牛轧糖沙琪玛蔓越莓味 松鼠新风尚 300款零食 低至3折起">软香奶萨萨210g休闲零食牛轧糖沙琪玛蔓越莓味 松鼠新风尚 300款零食 低至3折起</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>16.80                            </span>
            <span class="original-price"><em>¥</em>20.16</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=745" target="_blank"><img src="/static/index/img/0_thumb_G_1490165905743.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=745" title="金锣 肉粒多香肠40g*8支/袋 火腿肠 零食 食品">金锣 肉粒多香肠40g*8支/袋 火腿肠 零食 食品</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>10.90                            </span>
            <span class="original-price"><em>¥</em>13.08</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=744" target="_blank"><img src="/static/index/img/0_thumb_G_1490165799096.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=744" title="【三只松鼠_蔓越莓曲奇饼干260g】办公室休闲零食早餐美食糕点 松鼠新风尚 300款零食 低至3折起">【三只松鼠_蔓越莓曲奇饼干260g】办公室休闲零食早餐美食糕点 松鼠新风尚 300款零食 低至3折起</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>16.00                            </span>
            <span class="original-price"><em>¥</em>19.20</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=743" target="_blank"><img src="/static/index/img/0_thumb_G_1490165766277.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=743" title="江中猴姑饼干20天装960g 酥性零食猴头菇饼干 早餐代餐饼干40包装 【胃要天天养】上午一包，下午一包！">江中猴姑饼干20天装960g 酥性零食猴头菇饼干 早餐代餐饼干40包装 【胃要天天养】上午一包，下午一包！</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>116.00                            </span>
            <span class="original-price"><em>¥</em>139.20</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=742" target="_blank"><img src="/static/index/img/0_thumb_G_1490165722464.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=742" title="猪肉猪肉脯210g 休闲食品小吃零食靖江特产猪肉干 松鼠新风尚 300款零食 低至3折起">猪肉猪肉脯210g 休闲食品小吃零食靖江特产猪肉干 松鼠新风尚 300款零食 低至3折起</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>18.90                            </span>
            <span class="original-price"><em>¥</em>22.67</span>
        </div>
    </div>
</li>
</ul>
</div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072329183966195.jpg" title="她他/tata"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=81" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072685002270742.jpg" title="宝姿"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=83" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072728394097278.jpg" title="白兰氏"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=102" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072941526335126.jpg" title="欧亚马"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=107" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072993409028193.jpg" title="三星"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=117" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073123533047769.jpg" title="阿尔卡特"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=130" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074180745676140.jpg" title="TP-LINL"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=136" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490227517695746097.jpg" title="博时基金"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=137" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073731822160672.jpg" title="达利园"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=141" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074990110164877.jpg" title="钙尔奇"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="3" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_3" data-lift="家用">
 
<div class="floor-line-con floorOne floor-color-type-4" data-title="家用电器" data-idx="1" id="floor_4" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit">家用电器</div>
        <div class="hd-tags">
            <ul>
                <li class="first">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1115">
                    <span>生活电器</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1129">
                    <span>厨房电器</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1145">
                    <span>个护健康</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first current" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1160">
                    <span>五金家装</span>
                    <i class="arrowImg"></i>
                </li>
                                                            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-04">
        <div class="bd-left">
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494985252213529452.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494985263907218565.jpg"></a>
                                            </div>
            
                        <div class="floor-left-slide">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:474px"><ul style="width: 1422px; left: -474px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985258768732496.jpg"></a></li>
                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985266144681478.png"></a></li>
                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985266980557091.png"></a></li>
                                            </ul></div>
                </div>
                <div class="hd"><ul><li class="">1</li><li class="on">2</li><li class="">3</li></ul></div>
            </div>
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv" style="display: none;">
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>海信55英寸</h3>
                                <span>买既得无线鼠标一个</span>
                            </div>
                            <img src="/static/index/img/1494985010017482916.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>欧景除湿器</h3>
                                <span>洗化干衣一体</span>
                            </div>
                            <img src="/static/index/img/1494985252050215807.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>智能音箱</h3>
                                <span>满100减19</span>
                            </div>
                            <img src="/static/index/img/1494985253347581677.JPG">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	 f-r-m-i-double                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>美的电饭煲</h3>
                                <span>给力“实”惠</span>
                            </div>
                            <img src="/static/index/img/1494985267962226313.JPG">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>极客系列</h3>
                                <span>定金100减300</span>
                            </div>
                            <img src="/static/index/img/1494985260469428998.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_1115" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=847" target="_blank"><img src="/static/index/img/0_thumb_G_1490209649059.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=847" title="康佳电风扇塔扇家用塔式落地扇静音无叶风扇定时扇遥控立式大厦扇 换季活动 晒图奖励30元 到手119元起">康佳电风扇塔扇家用塔式落地扇静音无叶风扇定时扇遥控立式大厦扇 换季活动 晒图奖励30元 到手119元起</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>179.00                            </span>
            <span class="original-price"><em>¥</em>214.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=846" target="_blank"><img src="/static/index/img/0_thumb_G_1490209616526.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=846" title="凉师傅无叶风扇静音落地扇家用立式遥控电风扇办公室循环扇客厅6A 凉师傅 无叶风扇 两年保修">凉师傅无叶风扇静音落地扇家用立式遥控电风扇办公室循环扇客厅6A 凉师傅 无叶风扇 两年保修</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>499.00                            </span>
            <span class="original-price"><em>¥</em>598.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=845" target="_blank"><img src="/static/index/img/0_thumb_G_1490209587072.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=845" title="碧利沙电风扇家用落地扇宿舍台扇静音摇头小台式电扇立式学生风扇">碧利沙电风扇家用落地扇宿舍台扇静音摇头小台式电扇立式学生风扇</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>59.00                            </span>
            <span class="original-price"><em>¥</em>70.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=844" target="_blank"><img src="/static/index/img/0_thumb_G_1490209559885.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=844" title="美的壁扇FW40-F3挂壁式工业电风扇 家用台式餐厅摇头墙16寸电扇 热销壁扇 团购优选 3档风速">美的壁扇FW40-F3挂壁式工业电风扇 家用台式餐厅摇头墙16寸电扇 热销壁扇 团购优选 3档风速</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>179.00                            </span>
            <span class="original-price"><em>¥</em>214.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=825" target="_blank"><img src="/static/index/img/0_thumb_G_1490204999096.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=825" title="申花饮水机立式冷热办公室冰温热水机家用玻璃节能制冷开水机 32年老品牌 多仓速发 晒单奖20元">申花饮水机立式冷热办公室冰温热水机家用玻璃节能制冷开水机 32年老品牌 多仓速发 晒单奖20元</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>128.00                            </span>
            <span class="original-price"><em>¥</em>153.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=824" target="_blank"><img src="/static/index/img/0_thumb_G_1490204958315.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=824" title="美国iRobot529经典组合扫地机器人家用全自动智能擦地机国行热卖 告别手动 每日净尘 咨询送配件">美国iRobot529经典组合扫地机器人家用全自动智能擦地机国行热卖 告别手动 每日净尘 咨询送配件</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>2999.00                            </span>
            <span class="original-price"><em>¥</em>3598.79</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_1129" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=850" target="_blank"><img src="/static/index/img/0_thumb_G_1490209752799.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=850" title="RW/容威 GL-166迷你电饭锅2人-3人家用宿舍小型1-2-3人正品电饭煲 智能预约 1.8L容量 多功能数码显示屏">RW/容威 GL-166迷你电饭锅2人-3人家用宿舍小型1-2-3人正品电饭煲 智能预约 1.8L容量 多功能数码显示屏</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>119.00                            </span>
            <span class="original-price"><em>¥</em>142.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=849" target="_blank"><img src="/static/index/img/0_thumb_G_1490209720209.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=849" title="美的智能家用多功能双胆电压力锅高压锅饭煲正品WCS5025 5L小家电 5L双胆 智能预约 大面板">美的智能家用多功能双胆电压力锅高压锅饭煲正品WCS5025 5L小家电 5L双胆 智能预约 大面板</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>249.00                            </span>
            <span class="original-price"><em>¥</em>298.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=848" target="_blank"><img src="/static/index/img/0_thumb_G_1490209690294.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=848" title="TOSOT/大松 GDF-2001C格力电饭煲迷你智能全自动家用 电饭锅1-2人 格力出品 数码显示 智能预约 全国包邮">TOSOT/大松 GDF-2001C格力电饭煲迷你智能全自动家用 电饭锅1-2人 格力出品 数码显示 智能预约 全国包邮</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>388.00                            </span>
            <span class="original-price"><em>¥</em>465.59</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=807" target="_blank"><img src="/static/index/img/0_thumb_G_1490175385248.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=807" title="SAVTM/狮威特 JE-07榨汁机家用全自动果蔬多功能迷你学生炸果汁机 渣汁分离 低速慢磨 十年包换 终身质保">SAVTM/狮威特 JE-07榨汁机家用全自动果蔬多功能迷你学生炸果汁机 渣汁分离 低速慢磨 十年包换 终身质保</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>199.00                            </span>
            <span class="original-price"><em>¥</em>238.79</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=806" target="_blank"><img src="/static/index/img/0_thumb_G_1490175339477.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=806" title="Midea/美的 TLC2000面包机家用全自动智能多功能不锈钢机身触摸屏 逼格好物 钢化上盖 时尚触屏">Midea/美的 TLC2000面包机家用全自动智能多功能不锈钢机身触摸屏 逼格好物 钢化上盖 时尚触屏</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>299.00                            </span>
            <span class="original-price"><em>¥</em>358.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=805" target="_blank"><img src="/static/index/img/0_thumb_G_1490175311141.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=805" title="Donlim/东菱 DL-KF500S 咖啡机家用全半自动意式商用蒸汽式打奶泡 不锈钢机身 20帕进口泵浦 双温系统">Donlim/东菱 DL-KF500S 咖啡机家用全半自动意式商用蒸汽式打奶泡 不锈钢机身 20帕进口泵浦 双温系统</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>499.00                            </span>
            <span class="original-price"><em>¥</em>598.80</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_1145" style="display: none;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=856" target="_blank"><img src="/static/index/img/0_thumb_G_1490209956282.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=856" title="顺鼎电动按摩椅家用全自动全身按摩垫智能颈椎按摩器老人椅子沙发">顺鼎电动按摩椅家用全自动全身按摩垫智能颈椎按摩器老人椅子沙发</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>1680.00                            </span>
            <span class="original-price"><em>¥</em>2016.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=855" target="_blank"><img src="/static/index/img/0_thumb_G_1490209928976.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=855" title="正品老人豪华按摩椅家用颈椎按摩器颈部全身多功能电动沙发椅特价">正品老人豪华按摩椅家用颈椎按摩器颈部全身多功能电动沙发椅特价</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>1380.00                            </span>
            <span class="original-price"><em>¥</em>1656.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=854" target="_blank"><img src="/static/index/img/0_thumb_G_1490209897184.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=854" title="[OTO]EV-01按摩椅家用全身腰部靠垫多功能全自动太空舱沙发椅老人 正品保障 小巧实用 美臀塑形 下方套餐">[OTO]EV-01按摩椅家用全身腰部靠垫多功能全自动太空舱沙发椅老人 正品保障 小巧实用 美臀塑形 下方套餐</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>4999.00                            </span>
            <span class="original-price"><em>¥</em>5998.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=853" target="_blank"><img src="/static/index/img/0_thumb_G_1490209865656.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=853" title="多迪斯泰A09按摩椅豪华全身家用按摩椅太空舱零重力按摩椅沙发 热销新品 SL型轨道 智能前移 自动检测">多迪斯泰A09按摩椅豪华全身家用按摩椅太空舱零重力按摩椅沙发 热销新品 SL型轨道 智能前移 自动检测</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>16800.00                            </span>
            <span class="original-price"><em>¥</em>20160.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=852" target="_blank"><img src="/static/index/img/0_thumb_G_1490209823294.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=852" title="丁阁仕A6L家用全身按摩椅 零重力太空舱全自动音乐按摩椅沙发 双SL导轨 深V零重力 泰式拉筋">丁阁仕A6L家用全身按摩椅 零重力太空舱全自动音乐按摩椅沙发 双SL导轨 深V零重力 泰式拉筋</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>5999.00                            </span>
            <span class="original-price"><em>¥</em>7198.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=851" target="_blank"><img src="/static/index/img/0_thumb_G_1490209796384.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=851" title="航科家用按摩椅全自动全身电动多功能太空舱按摩器老人沙发椅 智能大腿气囊按摩 脚底3D推拿">航科家用按摩椅全自动全身电动多功能太空舱按摩器老人沙发椅 智能大腿气囊按摩 脚底3D推拿</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>2180.00                            </span>
            <span class="original-price"><em>¥</em>2616.00</span>
        </div>
    </div>
</li>
</ul>
</div>
                                <div class="f-r-main" ectype="floor_cat_1160" style="display: block;">
<ul class="p-list">
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=862" target="_blank"><img src="/static/index/img/0_thumb_G_1490210428229.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=862" title="锐奔水钻机手持式钻孔机混泥土打孔钻眼机大功率空调开孔两用电钻 力大威猛 工业级 全铜电机 带保护离合">锐奔水钻机手持式钻孔机混泥土打孔钻眼机大功率空调开孔两用电钻 力大威猛 工业级 全铜电机 带保护离合</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>358.00                            </span>
            <span class="original-price"><em>¥</em>429.59</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=861" target="_blank"><img src="/static/index/img/0_thumb_G_1490210364947.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=861" title="醒狮 多功能手提木工刨家用轻型大功率电刨子电动工具套装压刨机">醒狮 多功能手提木工刨家用轻型大功率电刨子电动工具套装压刨机</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>198.00                            </span>
            <span class="original-price"><em>¥</em>237.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=860" target="_blank"><img src="/static/index/img/0_thumb_G_1490210322574.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=860" title="龙韵电动扳手 锂电扳手 无刷电机充电扳手 扭力冲击板手 无刷电机 档位调节 双档定制">龙韵电动扳手 锂电扳手 无刷电机充电扳手 扭力冲击板手 无刷电机 档位调节 双档定制</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>610.00                            </span>
            <span class="original-price"><em>¥</em>732.00</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=859" target="_blank"><img src="/static/index/img/0_thumb_G_1490210232345.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=859" title="百锐3.6V电动螺丝刀迷你电起子充电式小型电改锥锂电变形电批包邮 3.6V双向控制 带灯照明 可变型">百锐3.6V电动螺丝刀迷你电起子充电式小型电改锥锂电变形电批包邮 3.6V双向控制 带灯照明 可变型</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>148.00                            </span>
            <span class="original-price"><em>¥</em>177.60</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=858" target="_blank"><img src="/static/index/img/0_thumb_G_1490210205198.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=858" title="龙韵电链锯 大功率自喷油手提电锯伐木锯家用木工锯链条电动工具 免费换新 3年质保 安全耐用 3C认证">龙韵电链锯 大功率自喷油手提电锯伐木锯家用木工锯链条电动工具 免费换新 3年质保 安全耐用 3C认证</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>299.00                            </span>
            <span class="original-price"><em>¥</em>358.80</span>
        </div>
    </div>
</li>
<li class="opacity_img">
    <div class="product">
        <div class="p-img"><a href="https://demo.dscmall.cn/goods.php?id=857" target="_blank"><img src="/static/index/img/0_thumb_G_1490209988231.jpg" width="140" height="140"></a></div>
        <div class="p-name"><a href="https://demo.dscmall.cn/goods.php?id=857" title="东成角磨机S1M-FF03/04-100A手提砂轮切割机角向磨光机抛光机东城">东成角磨机S1M-FF03/04-100A手提砂轮切割机角向磨光机抛光机东城</a></div>
        <div class="p-price">
            <span class="shop-price">
                                    <em>¥</em>122.00                            </span>
            <span class="original-price"><em>¥</em>146.40</span>
        </div>
    </div>
</li>
</ul>
</div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=72" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072313895957648.jpg" title="ELLE HOME"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072329183966195.jpg" title="她他/tata"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=109" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074056964147533.jpg" title="诺基亚"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=110" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074043963552715.jpg" title="松下电器"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=115" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074006660107941.jpg" title="西门子"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=125" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073960166035363.jpg" title="华为"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=130" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074180745676140.jpg" title="TP-LINL"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=139" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073705755280994.jpg" title="飞科"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=148" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073603108687350.jpg" title="宏基"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=150" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073577683159021.jpg" title="华帝"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="h-master" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="master-channel" id="h-master_0" data-type="range" data-lift="达人">
 
<div class="ftit"><h3>达人</h3></div>
<div class="master-con">
            <div class="m-c-item m-c-i-1" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006295599886.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>纯棉质品</h3>
                <span>把好货带回家</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985002918483191.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-2" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006392060862.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>团购热卖</h3>
                <span>每一款都是好货</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985002435254172.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-3" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006452127966.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>团购热卖</h3>
                <span>都是好货</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985003577610926.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-4" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006427221958.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>舒适童鞋</h3>
                <span>帮宝宝学走路</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985003958834850.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-5" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985005357290375.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>双十二运动鞋</h3>
                <span>品牌直降</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985004056329811.png"></a></div>
    </div>
        </div>
<div class="spec" data-spec="" data-title="达人"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="h-storeRec" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="store-channel" id="h-storeRec_0" data-type="range" data-lift="店铺">
 
<div class="ftit"><h3>店铺</h3></div>
<div class="rec-store-list">
            <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985261279846913.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985267980096546.png"></div></div>
                <div class="s-title">
                    <div class="tit">美宝莲</div>
                    <div class="ui-tit">纽约高潮街装</div>
                </div>
            </div>
        </a>
    </div>
                <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985257347489575.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985265619204005.png"></div></div>
                <div class="s-title">
                    <div class="tit">三只松鼠</div>
                    <div class="ui-tit">就是这个味</div>
                </div>
            </div>
        </a>
    </div>
                <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985254811159847.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985265516324065.png"></div></div>
                <div class="s-title">
                    <div class="tit">绿联旗舰店</div>
                    <div class="ui-tit">给生活多点色彩</div>
                </div>
            </div>
        </a>
    </div>
                <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985263326444094.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985267537609679.jpg"></div></div>
                <div class="s-title">
                    <div class="tit">韩都衣舍</div>
                    <div class="ui-tit">满249减50</div>
                </div>
            </div>
        </a>
    </div>
        </div>
<div class="spec" data-spec="" data-title="店铺"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="guessYouLike" data-purebox="goods" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="lift-channel clearfix" id="guessYouLike" data-type="range" data-lift="商品">
                                            <div data-goodstitle="title"><div class="ftit"><h3>还没逛够</h3></div></div>
                                            <ul>
 
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=620" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489098265067.jpg"></div>
        <div class="p-name" title="新品HYC 2k显示器32寸电脑显示器无边框HDMI液晶显示器IPS显示屏 2K高清屏IPS 超薄 厚6mm 无边框">新品HYC 2k显示器32寸电脑显示器无边框HDMI液晶显示器IPS显示屏 2K高清屏IPS 超薄 厚6mm 无边框</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>1500.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=621" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489098360804.jpg"></div>
        <div class="p-name" title="三星C24F396FH曲面显示器23.5英寸电脑显示器24液晶显示屏幕超22">三星C24F396FH曲面显示器23.5英寸电脑显示器24液晶显示屏幕超22</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>2200.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=622" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489098597912.jpg"></div>
        <div class="p-name" title="Apple/苹果 27” Retina 5K显示屏 iMac:3.3GHz处理器2TB存储">Apple/苹果 27” Retina 5K显示屏 iMac:3.3GHz处理器2TB存储</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>8999.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=624" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489099128797.jpg"></div>
        <div class="p-name" title="名龙堂i7 6700升7700 GTX1060 6G台式电脑主机DIY游戏组装整机 升6GB独显 送正版WIN10 一年上门">名龙堂i7 6700升7700 GTX1060 6G台式电脑主机DIY游戏组装整机 升6GB独显 送正版WIN10 一年上门</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>4300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=625" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489099437211.jpg"></div>
        <div class="p-name" title="秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服">秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>120.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=627" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489099773629.jpg"></div>
        <div class="p-name" title="2017春装新款男士卫衣套头圆领韩版潮流时尚男生休闲外套">2017春装新款男士卫衣套头圆领韩版潮流时尚男生休闲外套</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>200.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=633" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489102299856.jpg"></div>
        <div class="p-name" title="新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>233.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=634" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489102753231.jpg"></div>
        <div class="p-name" title="新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=635" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489102950633.jpg"></div>
        <div class="p-name" title="韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>450.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=636" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489103412794.jpg"></div>
        <div class="p-name" title="The Face Shop 水光无瑕气垫CC霜 裸妆隔离保湿补水持久遮瑕强 韩式裸妆 打造水嫩遮瑕 光润亮彩">The Face Shop 水光无瑕气垫CC霜 裸妆隔离保湿补水持久遮瑕强 韩式裸妆 打造水嫩遮瑕 光润亮彩</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>222.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=637" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489103674623.jpg"></div>
        <div class="p-name" title="一叶子补水面膜女保湿控油深层清洁收毛孔护肤面膜贴套装专柜正品 补水保湿 清洁控油">一叶子补水面膜女保湿控油深层清洁收毛孔护肤面膜贴套装专柜正品 补水保湿 清洁控油</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>330.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=638" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104168209.jpg"></div>
        <div class="p-name" title="美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红">美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>520.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=639" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104534699.jpg"></div>
        <div class="p-name" title="美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红">美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=640" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104621775.jpg"></div>
        <div class="p-name" title="花美时三合一自动旋转双头眉笔眉粉染眉膏画眉持久防水防汗不脱色 防水防汗 持久不晕染 正品包邮">花美时三合一自动旋转双头眉笔眉粉染眉膏画眉持久防水防汗不脱色 防水防汗 持久不晕染 正品包邮</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>200.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=642" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104935834.jpg"></div>
        <div class="p-name" title="一叶子面膜女补水保湿收缩毛孔控油玻尿酸面膜专柜正品 共28片">一叶子面膜女补水保湿收缩毛孔控油玻尿酸面膜专柜正品 共28片</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>80.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=644" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105021484.jpg"></div>
        <div class="p-name" title="欧莱雅男士水能保湿化妆护肤品套装深层补水滋润洗面奶爽肤水乳液">欧莱雅男士水能保湿化妆护肤品套装深层补水滋润洗面奶爽肤水乳液</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>60.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=645" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105083498.jpg"></div>
        <div class="p-name" title="杰威尔发胶定型喷雾男士干胶头发持久定型造型啫喱水发蜡蓬松清香 快速定型，蓬松清香，不起白屑，买2送1">杰威尔发胶定型喷雾男士干胶头发持久定型造型啫喱水发蜡蓬松清香 快速定型，蓬松清香，不起白屑，买2送1</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>110.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=646" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105134405.jpg"></div>
        <div class="p-name" title="美的电磁炉Midea/美的 WK2102电磁炉特价家用触摸屏电池炉灶正品 已爆售百万多台 防滑触摸屏 一键爆炒">美的电磁炉Midea/美的 WK2102电磁炉特价家用触摸屏电池炉灶正品 已爆售百万多台 防滑触摸屏 一键爆炒</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>455.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=647" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105175252.jpg"></div>
        <div class="p-name" title="志高嵌入式电陶炉家用双头双灶镶嵌式电磁炉双眼光波炉特价正品 不挑锅可烧烤 三环猛火 嵌入式双灶">志高嵌入式电陶炉家用双头双灶镶嵌式电磁炉双眼光波炉特价正品 不挑锅可烧烤 三环猛火 嵌入式双灶</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>488.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=648" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105257655.jpg"></div>
        <div class="p-name" title="Midea/美的 MB-WFS5017TM电饭煲5L智能正品电饭锅家用3-4-6-7-8人 下单立减20 精研柴火饭 涡轮防溢">Midea/美的 MB-WFS5017TM电饭煲5L智能正品电饭锅家用3-4-6-7-8人 下单立减20 精研柴火饭 涡轮防溢</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
</ul>
                                        <div class="spec" data-spec=""></div></div>
                                    </div>
                                </div></div>                            
                                                                        
                                                                        
                                                                        
                                            
            <!-- <div class="attached-search-container show" ectype="suspColumn" style="display: none!important;">
 -->	
 <div class="attached-search-container" ectype="suspColumn">
	<div class="w w1200">
	    <div class="categorys site-mast">
            <div class="categorys-type">
            	<a href="categoryall.php" target="_blank">全部商品分类</a>
            </div>
		    <div class="categorys-tab-content">
		    	<div class="categorys-items" id="cata-nav">
		    		<?php if(is_array($CommCates) || $CommCates instanceof \think\Collection || $CommCates instanceof \think\Paginator): $i = 0; $__LIST__ = $CommCates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CommCates): $mod = ($i % 2 );++$i;?>
		            <div class="categorys-item" ectype="cateItem" data-id="<?php echo $CommCates['cates_id']; ?>" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-ele"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="" target="_blank"><?php echo $CommCates['cates_name']; ?></a>
					            </strong>
				            	<?php if($CommCates['children']): ?>
					            <span>
					            	<?php if(is_array($CommCates['children']) || $CommCates['children'] instanceof \think\Collection || $CommCates['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $CommCates['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$CatesChildren): $mod = ($i % 2 );++$i;if($i < 3): ?>
									<a href="" target="_blank"><?php echo $CatesChildren['cates_name']; ?></a>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				                </span>
								<?php endif; ?>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_<?php echo $CommCates['cates_id']; ?>"></div>
									<div class="cate_detail" ectype="subitems_<?php echo $CommCates['cates_id']; ?>"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_<?php echo $CommCates['cates_id']; ?>"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
				    <?php endforeach; endif; else: echo "" ;endif; ?>

				    <script>
				    	// ajax异步获取顶级分类下的子分类、品牌、频道等相关信息在右侧菜单显示
				    	var ajaxCommCatesUrl = "<?php echo url('cates/getCommsCates'); ?>";
				    	// 加载中图片路径
				    	var imgLoad = '/static/index/img/loadGoods.gif';
				    </script>
				</div>
			</div>
		</div>
	
        <div class="mall-search">
            <div class="dsc-search">
                <div class="form">
                    <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm(this)" class="search-form">
                        <input autocomplete="off" name="keywords" type="text" id="keyword2" value="Five Plus" class="search-text">
                        <input type="hidden" name="store_search_cmt" value="0">
                        <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>
                        <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)">搜店铺</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="suspend-login">
        	<a href="https://demo.dscmall.cn/user.php">登录</a>|<a href="https://demo.dscmall.cn/user.php?act=register">注册</a>
        </div>
        <div class="shopCart" id="ECS_CARTINFO">
                    
			<div class="shopCart-con dsc-cm">
				<a href="https://demo.dscmall.cn/flow.php">
					<i class="iconfont icon-carts"></i>
					<span></span>
					<em class="count cart_num">0</em>
				</a>
			</div>
			<div class="dorpdown-layer" ectype="dorpdownLayer">
		        <div class="prompt">
		        	<div class="nogoods"><b></b><span>购物车中还没有商品，赶紧选购吧！</span></div>
		        </div>
		    </div>
		</div>
	</div>
	<script type="text/javascript">
		function changenum(rec_id, diff, warehouse_id, area_id)
		{
			var cValue = $('#cart_value').val();
		    var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
		 
			if(goods_number < 1)
			{
				return false;	
			}
			else
			{
				change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
			}
		}
		function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
		{
			if(cValue != '' || cValue == 'undefined'){
			   var cValue = $('#cart_value').val(); 
			}   
			Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
		}
		function change_goods_number_response(result)
		{    
			var rec_id = result.rec_id;           
		    if (result.error == 0)
		    {
		       $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
		       $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
		       if (result.goods_number <= 0)
		        {
					//数量为零则隐藏所在行
		            $('#tr_goods_' +rec_id).style.display = 'none';
		            $('#tr_goods_' +rec_id).innerHTML = '';
		        }
		        $('#total_desc').html(result.flow_info);//更新合计
		        if($('ECS_CARTINFO'))
		        

				if(result.group.length > 0){
					for(var i=0; i<result.group.length; i++){
						$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
						$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
					}
				}

				$("#goods_price_" + rec_id).html(result.goods_price);
				$(".cart_num").html(result.subtotal_number);
			}
			else if (result.message != '')
			{
				$('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
				alert(result.message);
			}                
		}

		function deleteCartGoods(rec_id,index)
		{
			Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
		}

		/**
		 * 接收返回的信息
		 */
		function deleteCartGoodsResponse(res)
		{
		  if (res.error)
		  {
		    alert(res.err_msg);
		  }
		  else if(res.index==1)
		  {
				Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
		  }
		  else
		  {
			  $("#ECS_CARTINFO").html(res.content);
			  $(".cart_num").html(res.cart_num);
		  }
		}

		function return_cart_list(result)
		{
			$(".cart_num").html(result.cart_num);
			$(".pop_panel").html(result.content);
			tbplHeigth();
		}
	</script> 
</div>


            </div>
    	</div>
        <div class="lift lift-mode-one" ectype="lift" data-type="one" style="z-index: 100001; left: 265.5px; top: 50%;">
            <div class="lift-list" ectype="liftList">
            </div>
        </div>
        
        <input name="warehouse_id" type="hidden" value="2">
    	<input name="area_id" type="hidden" value="19">
        <input name="area_city" type="hidden" value="543">
        <input name="temp" type="hidden" value="backup_tpl_1">
        
        
    	<div ectype="bonusadv_box"><div class="ejectAdv" ectype="ejectAdv" style="display: none;">
    <div class="ejectAdvbg"></div>
    <div class="ejectAdvimg">
            <a href="#" target="_blank"><img src="/static/index/img/bonusadv_1501618595.png"></a>
        <a href="javascript:void(0);" class="ejectClose" ectype="ejectClose"></a>
    </div>
</div>
</div>
    </div>
    



    <div class="mui-mbar-tabs">
	<div class="quick_link_mian" data-userid="62">
        <div class="quick_links_panel">
            <div id="quick_links" class="quick_links">
            	<ul>
                    <li>
                        <a href="user.php"><i class="setting"></i></a>
                        <div class="ibar_login_box status_login">
                            <div class="avatar_box">
                                <p class="avatar_imgbox">
                                    <img src="/static/index/img/touxiang.jpg" width="100" height="100"/>
                                </p>
                                <ul class="user_info">
                                    <li>用户名：86913361-232247</li>
                                    <li>级&nbsp;别：铜牌</li>
                                </ul>
                            </div>
                            <div class="login_btnbox">
                                <a href="user.php?act=order_list" class="login_order">我的订单</a>
                                <a href="user.php?act=collection_list" class="login_favorite">我的收藏</a>
                            </div>
                            <i class="icon_arrow_white"></i>
                        </div>
                    </li>

                    <li id="shopCart">
                        <a href="javascript:void(0);" class="cart_list">
                            <i class="message"></i>
                            <div class="span">购物车</div>
                            <span class="cart_num">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_order"><i class="chongzhi"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">我的订单</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_yhq"><i class="yhq"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">优惠券</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_total"><i class="view"></i></a>
                        <div class="mp_tooltip" style=" visibility:hidden;">
                            <font id="mpbtn_myMoney" style="font-size:12px; cursor:pointer;">我的资产</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_history"><i class="zuji"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_histroy" style="font-size:12px; cursor:pointer;">我的足迹</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_collection"><i class="wdsc"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_wdsc" style="font-size:12px; cursor:pointer;">我的收藏</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_email"><i class="email"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_email" style="font-size:12px; cursor:pointer;">邮箱订阅</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="quick_toggle">
            	<ul>
                    <li>
                        <a id="IM" IM_type="dsc" onclick="openWin(this)" href="javascript:;"><i class="kfzx"></i></a>
                        <div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
                    </li>
                    <li class="returnTop">
                        <a href="javascript:void(0);" class="return_top"><i class="top"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="quick_links_pop" class="quick_links_pop"></div>
    </div>
</div>
<div class="email_sub">
	<div class="attached_bg"></div>
	<div class="w1200">
        <div class="email_sub_btn">
            <input type="input" id="user_email" name="user_email" autocomplete="off" placeholder="请输入您的邮箱帐号">
            <a href="javascript:void(0);" onClick="add_email_list();" class="emp_btn">订阅</a>
        </div>
    </div>
</div>
   

    <!-- 首页以及其他页面 -->
<div class="footer-new">
    <div class="footer-new-top">
    	<div class="w w1200">
            <div class="service-list">
			<div class="service-item">
			    <i class="f-icon f-icon-qi"></i>
			    <span>七天包退</span>
			</div>
			<div class="service-item">
			    <i class="f-icon f-icon-zheng"></i>
			    <span>正品保障</span>
			</div>
			<div class="service-item">
			    <i class="f-icon f-icon-hao"></i>
			    <span>好评如潮</span>
			</div>
			<div class="service-item">
			    <i class="f-icon f-icon-shan"></i>
			    <span>闪电发货</span>
			</div>
			<div class="service-item">
			    <i class="f-icon f-icon-quan"></i>
			    <span>权威荣誉</span>
			</div>
        </div>
        <div class="contact">
			<div class="contact-item contact-item-first"><i class="f-icon f-icon-tel"></i><span>4000-000-000</span></div>
				<div class="contact-item">
				    <a id="IM" im_type="dsc" onclick="openWin(this)" href="javascript:;" class="btn-ctn"><i class="f-icon f-icon-kefu"></i><span>咨询客服</span></a>
			    </div>
            </div>
        </div>
    </div>
    <div class="footer-new-con">
    	<div class="fnc-warp">
            <div class="help-list">
				<?php if(is_array($bases) || $bases instanceof \think\Collection || $bases instanceof \think\Paginator): $i = 0; $__LIST__ = $bases;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$footers): $mod = ($i % 2 );++$i;?>

					<div class="help-item">
					    <h3><?php echo $footers['cate_name']; ?> </h3>
					    <ul>
					    	<?php if(is_array($footers["arts"]) || $footers["arts"] instanceof \think\Collection || $footers["arts"] instanceof \think\Paginator): $i = 0; $__LIST__ = $footers["arts"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$artis): $mod = ($i % 2 );++$i;?>
					            <li><a href="<?php if($artis['ar_linkurl']): ?> <?php echo $artis['ar_linkurl']; ?>" target="_balck"> <?php else: ?> <?php echo url('index/article/index',array('ar_id'=>$artis['ar_id'])); ?>"> <?php endif; ?> <?php echo $artis['ar_title']; ?></a></li>
					    	<?php endforeach; endif; else: echo "" ;endif; ?>
					    </ul>

					</div>


				<?php endforeach; endif; else: echo "" ;endif; ?>
		  
            </div>
            <div class="qr-code">
				<div class="qr-item qr-item-first">
				    <div class="code_img"><img src="/static/index/img/ecjia_qrcode.png"></div>
				    <div class="code_txt">官方网址</div>
				</div>
				<div class="qr-item">
				    <div class="code_img"><img src="/static/index/img/ectouch_qrcode.png"></div>
				    <div class="code_txt">在线课程</div>
				</div>
            </div>
    	</div>
    </div>
    <div class="footer-new-bot">
    	<div class="w w1200">
             
			<p class="copyright_links">

				<a href="<?php echo url('index/Index/index'); ?>">首页</a>

				
            	<?php if(is_array($bottoms) || $bottoms instanceof \think\Collection || $bottoms instanceof \think\Paginator): $i = 0; $__LIST__ = $bottoms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bottomNav): $mod = ($i % 2 );++$i;?>

				 		<span style="padding: 0 10px;">|</span>
						<a <?php if($bottomNav['ar_linkurl'] != ''): ?> href="<?php echo $bottomNav['ar_linkurl']; ?>" target="_blank" <?php else: ?> href="<?php echo url('index/article/index',array('ar_id'=>$bottomNav['ar_id'])); ?>" <?php endif; ?> ><?php echo $bottomNav['ar_title']; ?></a>


				<?php endforeach; endif; else: echo "" ;endif; ?>




			</p>

 			<p>
			 <?php 
				$footerCopyright = explode(',',$configArr['footer_copyright']);
				foreach ($footerCopyright as $k => $v ):
			 if ($k <=1 ) { echo '<span>'.$v.'</span>'; } else { echo '<a href="#">'.$v.'</a>'; }endforeach?>
			</p>





	        <p class="copyright_auth">&nbsp;</p>
	    </div>
    </div>
    
    
    <div class="hide" id="pd_coupons">
        <span class="success-icon m-icon"></span>
        <div class="item-fore">
            <h3>领取成功！感谢您的参与，祝您购物愉快~</h3>
            <div class="txt ftx-03">本活动为概率性事件，不能保证所有客户成功领取优惠券</div>
        </div>
    </div>
    
    
    <div class="hidden">
        <input name="seller_kf_IM" value="" rev="" ru_id="" type="hidden">
        <input name="seller_kf_qq" value="349488953" type="hidden">
        <input name="seller_kf_tel" value="4000-000-000" type="hidden">
        <input name="user_id" value="62" type="hidden">
    </div>
</div>


<!-- 登录和注册页面 -->
<div class="footer user-footer">
	<div class="dsc-copyright">
		<div class="w w1200">
			<p class="footer-ecscinfo pb10">

				<a href="<?php echo url('index/Index/index'); ?>">首页</a>

				
            	<?php if(is_array($bottoms) || $bottoms instanceof \think\Collection || $bottoms instanceof \think\Paginator): $i = 0; $__LIST__ = $bottoms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bottomNav): $mod = ($i % 2 );++$i;?>

				 		<span style="padding: 0 10px;">|</span>
						<a <?php if($bottomNav['ar_linkurl'] != ''): ?> href="<?php echo $bottomNav['ar_linkurl']; ?>" target="_blank" <?php else: ?> href="<?php echo url('index/article/index',array('ar_id'=>$bottomNav['ar_id'])); ?>" <?php endif; ?> ><?php echo $bottomNav['ar_title']; ?></a>


				<?php endforeach; endif; else: echo "" ;endif; ?>




			</p>

 			<p>
			 <?php 
				$footerCopyright = explode(',',$configArr['footer_copyright']);
				foreach ($footerCopyright as $k => $v ):
			 if ($k <=1 ) { echo '<span>'.$v.'</span>'; } else { echo '<a href="#">'.$v.'</a>'; }endforeach?>
			</p>


		</div>
	</div>
    <div class="hidden">
        <input type="hidden" name="seller_kf_IM" value="" rev="" ru_id="" />
        <input type="hidden" name="seller_kf_qq" value="349488953" />
        <input type="hidden" name="seller_kf_tel" value="4000-000-000" />
        <input type="hidden" name="user_id" value="0" />
    </div>
</div>



<script type="text/javascript">
$(function () {

	var navshow = $('.navshow').length;
	if ( navshow > 1){ 
		$('.navshow').eq(1).css('display','none');
		$('.nav-main').eq(1).remove();
		$('.dsc-zoom').eq(1).removeClass('dsc-zoom');
		$('.topShows').eq(0).remove();
	} else {
		$('.topShows').eq(0).remove();
	}

	var dataType = $('body').data('type');
	var indexType = 'index1', 
		index2Type = 'index2', 
		loginType = 'login1', 
		regType = 'reg1', 
		cartListType = 'cart_list1', 
		goodsListType = 'goodsList1';

	if ( dataType === loginType || dataType === regType ){
		// 登录头部改样式
		$('.header').removeClass('header').addClass('loginRegister-header');
		$('.logoImg a').addClass('logo');
		$('.logoImg a img').attr('src','/static/index/img/user_login_logo.png');
		// 全局
		$('.dsc-search').remove();
		$('.shopCart').remove();
		$('.footer-new').remove();
		// 购物车
		$('.tit').remove();
		$('.button-icon').remove();
		// 注册
		if ( dataType === regType ){
			$('.header-href span').html('已注册可<a href="#" class="jump">在此登录</a>')
		}
	}else if ( dataType === cartListType ) {
		// 全局
		$('.header').addClass('header-cart');
		$('.logoAdv').remove();
		$('.button-goods').remove();
		$('.keyword').remove();
		$('.shopCart').remove();
		// 登录
		$('.logo-span').remove();
		$('.header-href').remove();
		$('.user-footer').remove();
	} else {
		// 购物车
		$('.tit').remove();
		$('.button-icon').remove();
		// 登录
		$('.logo-span').remove();
		$('.header-href').remove();
		$('.user-footer').remove();
		if ( dataType === indexType ){
			// 首页颜色
			$('body').addClass('catetop-cloth');
			$('.site-mast').remove();
		} else if ( dataType === index2Type ){
			// 首页颜色
			$('.site-masts').remove();
		} else {
			$('.site-masts').remove();
			if ( dataType === goodsListType ) {
				// 唯一宽度
				$('.site-nav').children().removeClass('w1200').addClass('w1390');
				$('.header').children().removeClass('w1200').addClass('w1390');
				$('.dsc-zoom').children('.w').removeClass('w1200').addClass('w1390');
			}
		}
	}
})

</script>   

    	<script type="text/javascript" src="/static/index/js/suggest.js"></script>
	<script type="text/javascript" src="/static/index/js/scroll_city.js"></script>
	<script type="text/javascript" src="/static/index/js/utils.js"></script>
	<script type="text/javascript" src="/static/index/js/warehouse.js"></script>
	<script type="text/javascript" src="/static/index/js/warehouse_area.js"></script>
    
    <script type="text/javascript" src="/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.yomi.js"></script>
    <script type="text/javascript" src="/static/index/js/cart_common.js"></script>
    <script type="text/javascript" src="/static/index/js/cart_quick_links.js"></script>
    <script type="text/javascript" src="/static/index/js/dsc-common.js"></script>
	<script type="text/javascript" src="/static/index/js/jquery.purebox.js"></script> 


   <script type="text/javascript" src="/static/index/js/jquery_003.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery_002.js"></script>
    <script type="text/javascript" src="/static/index/js/asyLoadfloor.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.js"></script>
    <script type="text/javascript">
		/*首页轮播*/
		var slideType = $("*[data-mode='lunbo']").find("*[data-type='range']").data("slide");
		var length = $(".banner .bd").find("li").length;
		
		if(slideType == "roll"){
			slideType = "left";
		}
		
		if(length>1){
			$(".banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:slideType,interTime:5000,delayTime:500,autoPlay:true,autoPage:true,trigger:"click",endFun:function(i,c,s){
				$(window).resize(function(){
					var width = $(window).width();
					if(!$('body').hasClass("festival_home")){
						s.find(".bd li").css("width",width);
					}
				});
			}});
		}else{
			$(".banner .hd").hide();
		}
		
		//楼层二级分类商品切换
		$("*[ectype='floorItem']").slide({titCell:".hd-tags li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		$("*[ectype='floorItem']").slide({titCell:".floor-nav li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		//第五套楼层模板
		$(".floor-fd-slide").slide({mainCell:".bd ul",effect:"left",autoPlay:false,autoPage:true,vis:4,scroll:1,prevCell:".ff-prev",nextCell:".ff-next"});
		
		//第六套楼层模板
		$(".floor-brand").slide({mainCell:".fb-bd ul",effect:"left",pnLoop:true,autoPlay:false,autoPage:true,vis:3,scroll:1,prevCell:".fs_prev",nextCell:".fs_next"});
		
		//楼层轮播图广告
		$("*[data-purebox='homeFloor']").each(function(index, element) {
			var f_slide_length = $(this).find(".floor-left-slide .bd li").length;
			if(f_slide_length > 1){
				$(element).find(".floor-left-slide").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
			}else{
				$(element).find(".floor-left-slide .hd").hide();
			}
        });
		//异步加载出首页个人信息、秒杀活动、品牌信息、首页弹出广告
        $(function(){
            var site_domain = "";
            var brand_id = $('*[ectype="homeBrand"]').find(".brand-list").data("value");
			var seckillid = $('[data-mode="h-seckill"]').find('[data-type="range"]').data('seckillid');
			var temp = "backup_tpl_1";
			
			var where = '';
			if(!brand_id){
				brand_id = '';
			}
			
            seckillid = JSON.stringify(seckillid);
			
            if(site_domain){
				$.ajax({
					type: "GET",
					url: "s", /*jquery Ajax跨域*/
					data: "act=getUserInfo&is_jsonp=1&brand_id="+brand_id + "&seckillid=" + seckillid + "&temp=" + temp,
					dataType:"jsonp",
					jsonp:"jsoncallback",
					success: homeAjax
				});
            }else{
                Ajax.call('', 'brand_id=' + brand_id + "&seckillid=" + seckillid + "&temp=" + temp, homeAjax , 'POST', 'JSON');
            }
			
			function ajax_Homeindex_Bonusadv(){
				var cfg_bonus_adv = "1";//是否开启首页弹出广告
				var suffix = "backup_tpl_1";
				
				if(cfg_bonus_adv == 1 && suffix){
					Ajax.call('', 'suffix=' + suffix, function(data){
						if(data.error != 1){
							$("[ectype='bonusadv_box']").html(data.content);
						}
					} , 'POST', 'JSON');
				}
			}
			
			ajax_Homeindex_Bonusadv();
			
			function homeAjax(data){
				$("*[ectype='user_info']").html(data.content);
				$("*[ectype='homeBrand']").html(data.brand_list);
				if(data.seckill_goods){
					$('[data-mode="h-seckill"]').show().find('[data-type="range"] .box-bd').html(data.seckill_goods);
					var sec_begin_time =  $('[data-mode="h-seckill"]').find('[data-type="range"] .box-bd').find('input[name="sec_begin_time"]').val();
					var sec_end_time = $('[data-mode="h-seckill"]').find('[data-type="range"] .box-bd').find('input[name="sec_end_time"]').val();
					if(sec_begin_time){
						$('[data-mode="h-seckill"]').find('[data-type="range"] .box-hd [ectype="time"]').attr("data-time",sec_begin_time)
					}else{
						$('[data-mode="h-seckill"]').find('[data-type="range"] .box-hd [ectype="time"]').attr("data-time",sec_end_time)
					}
					$("*[ectype='time']").each(function(){
						$(this).yomi();
					});
					//首页秒杀商品滚动
					$(".seckill-channel").slide({mainCell:".box-bd ul",effect:"leftLoop",autoPlay:true,autoPage:true,interTime:5000,delayTime:500,vis:5,scroll:1,trigger:"click"});
				}else{
					$('[data-mode="h-seckill"]').hide();
				}
				
				$.catetopLift();
				
				$(window).scroll(function(){
					var scrollTop = $(document).scrollTop();
					var navTop = $("*[ectype='dscNav']").offset().top;  //by yanxin
                    console.log(navTop);
						
					if(scrollTop>navTop){
						$("*[ectype='suspColumn']").addClass("show");
					}else{
						$("*[ectype='suspColumn']").removeClass("show");
					}
				});
			}
                        
			//重新加载商品模块
			$("[data-mode='guessYouLike']").each(function(){
				var _this = $(this);
				var goods_ids = _this.data("goodsid");
				var warehouse_id = $("input[name='warehouse_id']").val();
				var area_id = $("input[name='area_id']").val();
				var area_city = $("input[name='area_city']").val();
				if(goods_ids){
					Ajax.call('', 'goods_ids=' + goods_ids + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id + "&area_city=" + area_city, function(data){
						if(data.content){
							_this.find(".view .lift-channel ul").html(data.content);
						}
					} , 'POST', 'JSON');
				}
			});
                       
			$("li[ectype='floor_cat_content'].current").each(function(){
				 get_homefloor_cat_content(this);
			});
			
			$("[ectype='identi_floorgoods'].current").each(function(){
				 get_homefloor_cat_content(this);
			});
			
			function checked_article_cat(){
				var cat_ids = '';
				
				$('[data-mode="insertVipEdit"] .tit a').each(function(){
					var val = $(this).data('catid');
					if(cat_ids){
						cat_ids = cat_ids + "," + val;
					}else{
						cat_ids = val;
					}
				});
				
				if(cat_ids){
					Ajax.call('', 'cat_ids=' + cat_ids, function(data){
						$('[data-mode="insertVipEdit"] .vip_article_cat').html(data.content);
						
						//首页信息栏 新闻文章切换 
						$(".vip-item").slide({titCell:".tit a",mainCell:".con"});
					} , 'POST', 'JSON');
				}
			}
			checked_article_cat();
                        //异步新品排行
                        $("[ectype='h-phb3']").each(function(){
				 var _this = $(this);
                                 var activitytype = _this.data('activitytype');
                                 var goodsids = _this.data('goodsids');
                                 var warehouse_id = $("input[name='warehouse_id']").val();
				var area_id = $("input[name='area_id']").val();
                                
                Ajax.call('', 'goodsids=' + goodsids + "&activitytype=" + activitytype + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id, function(data){
						_this.html(data.content);
				} , 'POST', 'JSON');
			});
        });
		
		//楼层左侧栏悬浮框
		readyLoad();
		
		//会员名称*号 by yanxin
		/*var name = $(".suspend-login a.nick_name").text();
		var star = new Array();
		var nameLen = name.length > 2 ? name.length-2:"1";
		for(var i=1;i<=nameLen;i++){
			star.push("*");
		}
		star = star.join("");
		if(name.length > 2){
			var new_name = name[0] + star + name[name.length-1];
		}else{
			var new_name = name[0] + star;
		}
		$(".suspend-login a.nick_name").text(new_name);
		*/
		//去掉悬浮框 我的购物车
		$(".attached-search-container .shopCart-con a span").text("");
		
		/*首页可视化 第八套模板 楼层左侧前后轮播 */
		aroundSilder(".floor_silder");
    </script>


</body></html>