<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:64:"B:\aaaweb\shop\public/../application/index\view\cates\cates.html";i:1562460434;s:55:"B:\aaaweb\shop\application\index\view\common\_meta.html";i:1562460434;s:59:"B:\aaaweb\shop\application\index\view\common\heads_top.html";i:1562460434;s:60:"B:\aaaweb\shop\application\index\view\common\heads_logo.html";i:1562460434;s:60:"B:\aaaweb\shop\application\index\view\common\heads_navs.html";i:1562460434;s:55:"B:\aaaweb\shop\application\index\view\common\right.html";i:1562460434;s:56:"B:\aaaweb\shop\application\index\view\common\footer.html";i:1562490600;s:63:"B:\aaaweb\shop\application\index\view\common\footer_script.html";i:1562460434;}*/ ?>
<!doctype html>
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
	<!-- <script type="text/javascript" src="/static/index/js/transport_jquery.js"></script> -->
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

<body  data-type="goodsList1">

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







    
<div class="hot-sales">
    <div class="hotsale w1390 w">
        <div class="hatsale-mt">热门推荐</div>
        <div class="bd">
            <ul>
            	    <li>
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备' target="_blank">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
                        <div class="p-price">
                        	    <em>¥</em>258.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=630">立即购买</a></div>
                    </div>
                </li>
        <li>
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素' target="_blank">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
                        <div class="p-price">
                        	    <em>¥</em>88.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=768">立即购买</a></div>
                    </div>
                </li>
        <li>
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！' target="_blank">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-price">
                        	    <em>¥</em>159.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=773">立即购买</a></div>
                    </div>
                </li>
        <li class="last">
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！' target="_blank">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-price">
                        	    <em>¥</em>159.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=774">立即购买</a></div>
                    </div>
                </li>
                        </ul>
            <a href="#" class="prev"></a>
            <a href="#" class="next"></a>
        </div>
    </div>
</div>
	<div class="w w1390">
    	<div class="crumbs-nav">
	<div class="crumbs-nav-main clearfix">
				<div class="crumbs-nav-item">
			<div class="menu-drop">
				<div class="trigger">
					<a href="#"><span>男装、女装、内衣</span></a>
					<i class="iconfont icon-down"></i>
				</div>
                				<div class="menu-drop-main">
					<ul>
			<li><a href="#">女装</a></li>
			<li><a href="#">男装</a></li>
			<li><a href="#">内衣</a></li>
			<li><a href="#">服饰配件</a></li>
			<li><a href="#">运动户外</a></li>
		</ul>
				</div>
                			</div>
			<i class="iconfont icon-right"></i>		</div>
				<div class="crumbs-nav-item">
			<div class="menu-drop">
				<div class="trigger">
					<a href="#"><span>女装</span></a>
					<i class="iconfont icon-down"></i>
				</div>
                				<div class="menu-drop-main">
					<ul>
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
				</div>
                			</div>
					</div>
					</div>
</div>
    </div>
    <div class="container">
    	<div class="w w1390">
            <div class="selector">
                
<div class="right-extra" rewrite=0>
    <div class="u_cloose">
        <dl>
            <dt>已选条件：</dt>
            <dd>
    &nbsp;





                
            
</dd>
            <dd class="give_up_all"><a href="#" class="ftx-05">全部撤销</a></dd>
        </dl>
    </div>
	<div class="goods_list">
		<ul class="attr_father">
			
                        <li class="s-line">
                <div class="s-l-wrap brand_img attr_list">
                    <div class="s-l-tit brand_name_l">品牌：</div>
                    <div class="s-l-value brand_select_more">
                        <div class="all_a_z">
<ul class="a_z">
    <li class="all_brand curr">所有品牌</li>
        <li data-key="A">A</li>
        <li data-key="B">B</li>
        <li data-key="C">C</li>
        <li data-key="D">D</li>
        <li data-key="E">E</li>
        <li data-key="F">F</li>
        <li data-key="G">G</li>
        <li data-key="H">H</li>
        <li data-key="I">I</li>
        <li data-key="J">J</li>
        <li data-key="K">K</li>
        <li data-key="L">L</li>
        <li data-key="M">M</li>
        <li data-key="N">N</li>
        <li data-key="O">O</li>
        <li data-key="P">P</li>
        <li data-key="Q">Q</li>
        <li data-key="R">R</li>
        <li data-key="S">S</li>
        <li data-key="T">T</li>
        <li data-key="U">U</li>
        <li data-key="V">V</li>
        <li data-key="W">W</li>
        <li data-key="X">X</li>
        <li data-key="Y">Y</li>
        <li data-key="Z">Z</li>
        <li class="other_brand">其他</li>
</ul>
                        </div>
                        <div class="wrap_brand">  
<div class="brand_div">
        <div class="brand_img_word" brand ="E">
                    <a href="#">
            	<img src="/static/index/img/1490071974970349584.jpg" alt="esprit" title="esprit"> 
            	<span>esprit</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="X">
                    <a href="#">
            	<img src="/static/index/img/1490072756032175204.jpg" alt="喜瑞" title="喜瑞"> 
            	<span>喜瑞</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="L">
                    <a href="#">
            	<img src="/static/index/img/1490072860522023692.jpg" alt="乐力" title="乐力"> 
            	<span>乐力</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="L">
                    <a href="#">
            	<img src="/static/index/img/1490074030328949587.jpg" alt="LG" title="LG"> 
            	<span>LG</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="H">
                    <a href="#">
            	<img src="/static/index/img/1490073591535005714.jpg" alt="鸿星尔克" title="鸿星尔克"> 
            	<span>鸿星尔克</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="H">
                    <a href="#">
            	<img src="/static/index/img/1490073577683159021.jpg" alt="华帝" title="华帝"> 
            	<span>华帝</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="M">
                    <a href="#">
            	<img src="/static/index/img/1490228075580091113.jpg" alt="麦斯威尔" title="麦斯威尔"> 
            	<span>麦斯威尔</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="M">
                    <a href="#">
            	<img src="/static/index/img/1490074901892372216.jpg" alt="美的" title="美的"> 
            	<span>美的</span>
            </a>
            </div>
    </div>
                        </div>
                        <div class="zimu_list">
<ul class="get_more" >
        <li class="is_no" brand ="E" url_id="71"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=71">esprit</a></li>
        <li class="is_no" brand ="X" url_id="85"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=85">喜瑞</a></li>
        <li class="is_no" brand ="L" url_id="94"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=94">乐力</a></li>
        <li class="is_no" brand ="L" url_id="113"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=113">LG</a></li>
        <li class="is_no" brand ="H" url_id="149"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=149">鸿星尔克</a></li>
        <li class="is_no" brand ="H" url_id="150"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=150">华帝</a></li>
        <li class="is_no" brand ="M" url_id="159"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=159">麦斯威尔</a></li>
        <li class="is_no" brand ="M" url_id="160"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=160">美的</a></li>
    </ul>
                        </div>
                        <div class="enter_yes_no">
<div class="ct_auto">
    <span class="yes_bt botton disabled">确定</span>
    <span class="no_bt botton">关闭</span>
</div>
                        </div>
                    </div>
                    <div class="s-l-opt sl-ext">
                        <div class="choose_open s-l-more"><i class="iconfont icon-down"></i></div>
                        <div class="choose_more s-l-multiple"><i class="iconfont icon-plus"></i>多选</div>
                    </div>
                </div>
            </li>
                        
            
                        <li class="s-line">
                <dl class="s-l-wrap">
                    <div class="s-l-tit filter_attr_name">价格：</div>
                    <div class="s-l-value attr_son">
                        <div class="price_auto fl">
<div class="price_range"><a href="#">10&nbsp;-&nbsp;90</a></div>
<div class="price_range"><a href="#">90&nbsp;-&nbsp;170</a></div>
<div class="price_range"><a href="#">170&nbsp;-&nbsp;250</a></div>
<div class="price_range"><a href="#">250&nbsp;-&nbsp;330</a></div>
<div class="price_range"><a href="#">410&nbsp;-&nbsp;490</a></div>
                        </div>
                        <div class="price_auto price_bottom fl">
<input type="text" title="最低价" name="price_min" class="price_class price_min">
<span class="price_class span_price_class">-</span>
<input type="text" title="最高价" name="price_max" class="price_class price_max">
<button class="price_ok price_class">确定</button>
                        </div>
                    </div>
                </dl>
            </li>
             
            
             
            
            		</ul>
    </div>
	<div class="click_more s-more"><span class="sm-wrap"><strong>更多选项</strong><i class="iconfont icon-down"></i></span></div>
</div>
            </div>
            <div class="filter">
        <div class="filter-wrap">
    <div class="filter-sort">
        <a href="#" class="">综合<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">销量<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">新品<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">评论数<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">价格<i class="iconfont icon-arrow-up"></i></a>
    </div>
    <div class="filter-range">
        <div class="fprice">
        	<form method="GET" action="category.php" class="sort" name="listform">
    <div class="fP-box">
                    <input type="text" name="price_min" class="f-text price-min" autocomplete="off" maxlength="6" placeholder="￥" id="price-min" value="">
                    <span>&nbsp;~&nbsp;</span>
                    <input type="text" name="price_max" class="f-text price-max" autocomplete="off" maxlength="6" id="price-max"value="" placeholder="￥">
                </div>
                <div class="fP-expand">
                	<a class="ui-btn-s ui-btn-clear" href="javascript:void(0);" id="clear_price">清空</a>
					<a href="#" class="ui-btn-s ui-btn-s-primary ui-btn-submit">确定</a>
                </div>
    <input type="hidden" name="category" value="347" />
                <input type="hidden" name="display" value="grid" id="display" />
                <input type="hidden" name="brand" value="" />
                <input type="hidden" name="ubrand" value="0" />
                <input type="hidden" name="filter_attr" value="0" />
                <input type="hidden" name="sort" value="goods_id" />
                <input type="hidden" name="order" value="DESC" />
            </form>
        </div>
        <div class="fcheckbox">
                <div class="checkbox_items">
                <div class="checkbox_item ">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-011" >
                    <label class="ui-label" for="store-checkbox-011">包邮</label>
                    <i id="input-i1" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=1&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                    <i id="input-i2" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                </div>
                <div class="checkbox_item ">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-012" >
                    <label class="ui-label" for="store-checkbox-012">自营商品</label>
                    <i id="input-i1" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=1&have=0&sort=goods_id&order=DESC#goods_list"></i>
                    <i id="input-i2" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                </div>
                <div class="checkbox_item ">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-013" >
                    <label class="ui-label" for="store-checkbox-013">仅显示有货</label>
                    <i id="input-i1" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=1&sort=goods_id&order=DESC#goods_list"></i>
                    <i id="input-i2" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-right">
                <div class="button-page">
            <span class="pageState"><span>1</span>/1</span>
            <a href="#" title="上一页"><i class="iconfont icon-left"></i></a>
            <a href="#" title="下一页"><i class="iconfont icon-right"></i></a>
        </div>
                 
        <div class="styles">
            <ul class="items" ectype="fsortTab">
                <li class="item current" data-type="large"><a href="#" title="大图模式"><span class="iconfont icon-switch-grid"></span>大图</a></li>
                <li class="item" data-type="samll"><a href="#" title="小图模式"><span class="iconfont icon-switch-list"></span>小图</a></li>
            </ul>
        </div>
            </div>
</div>    </div>
<div class="g-view w">
    <div class="goods-list" ectype="gMain">
                <div class="gl-warp gl-warp-large">
        	            <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);" class="goodslistForm" data-state="0">
                        <ul>
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174925807.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174925008.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>158.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="801" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 801,'逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅','0', '/static/index/img/0_thumb_G_1490174925807.jpg', '<em>¥</em>158.00', '<em>¥</em>189.60')">
    <label class="ui-label" for="801">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(801,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174925807.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174894049.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>166.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="800" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 800,'2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花','0', '/static/index/img/0_thumb_G_1490174894779.jpg', '<em>¥</em>166.00', '<em>¥</em>199.20')">
    <label class="ui-label" for="800">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(800,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174894779.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174858999.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174858959.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>68.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="799" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 799,'韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10','0', '/static/index/img/0_thumb_G_1490174858999.jpg', '<em>¥</em>68.00', '<em>¥</em>81.60')">
    <label class="ui-label" for="799">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(799,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174858999.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174824075.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174824415.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>149.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="798" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 798,'逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮','0', '/static/index/img/0_thumb_G_1490174824075.jpg', '<em>¥</em>149.00', '<em>¥</em>178.79')">
    <label class="ui-label" for="798">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(798,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174824075.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174791247.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490174794253.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>49.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="797" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 797,'17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料','0', '/static/index/img/0_thumb_G_1490174791219.jpg', '<em>¥</em>49.00', '<em>¥</em>58.80')">
    <label class="ui-label" for="797">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(797,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174791219.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174741400.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>40.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="796" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 796,'初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨','0', '/static/index/img/0_thumb_G_1490174741051.jpg', '<em>¥</em>65.00', '<em>¥</em>78.00')">
    <label class="ui-label" for="796">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(796,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174741051.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169285844.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169285863.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169281822.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>78.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="775" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 775,'韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169281436.jpg', '<em>¥</em>78.00', '<em>¥</em>93.60')">
    <label class="ui-label" for="775">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(775,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169281436.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169255374.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169255340.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169250295.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>159.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="774" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 774,'韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169250846.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="774">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(774,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169250846.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169221093.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169221057.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169216735.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>159.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="773" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 773,'韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169216444.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="773">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(773,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169216444.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169186175.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169190760.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169190653.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169186098.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>118.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="772" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 772,'韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169186175.jpg', '<em>¥</em>118.00', '<em>¥</em>141.60')">
    <label class="ui-label" for="772">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(772,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169186175.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169157142.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169158322.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169158351.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169151557.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>148.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="771" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 771,'韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169151126.jpg', '<em>¥</em>148.00', '<em>¥</em>177.60')">
    <label class="ui-label" for="771">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(771,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169151126.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169118213.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169123927.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169123565.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169111600.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169118199.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>15.90    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="770" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 770,'小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包','0', '/static/index/img/0_thumb_G_1490169118213.jpg', '<em>¥</em>15.90', '<em>¥</em>19.08')">
    <label class="ui-label" for="770">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(770,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169118213.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169074773.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169077239.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169077389.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169074855.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>259.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="769" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 769,'朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169074773.jpg', '<em>¥</em>259.00', '<em>¥</em>310.80')">
    <label class="ui-label" for="769">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(769,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169074773.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169039971.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169039705.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169030177.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>88.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="768" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 768,'韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素','0', '/static/index/img/0_thumb_G_1490169030833.jpg', '<em>¥</em>88.00', '<em>¥</em>105.60')">
    <label class="ui-label" for="768">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(768,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169030833.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490168991044.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490168995911.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490168995071.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490168991357.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>112.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="767" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 767,'韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭','0', '/static/index/img/0_thumb_G_1490168991044.jpg', '<em>¥</em>112.00', '<em>¥</em>134.40')">
    <label class="ui-label" for="767">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(767,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490168991044.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102950633.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489102950134.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102960258.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102960697.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102960787.jpg" width="26" height="26" /></li>
</ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>450.00    </div>
<div class="p-num">已售<em>1</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="635" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 635,'韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服','0', '/static/index/img/0_thumb_G_1489102950633.jpg', '<em>¥</em>450.00', '<em>¥</em>540.00')">
    <label class="ui-label" for="635">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(635,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489102950633.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489102753387.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102766368.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102767107.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102767718.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>300.00    </div>
<div class="p-num">已售<em>2</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="634" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 634,'新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮','0', '/static/index/img/0_thumb_G_1489102753231.jpg', '<em>¥</em>300.00', '<em>¥</em>360.00')">
    <label class="ui-label" for="634">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(634,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489102753231.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102299856.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489102299193.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102305334.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102305350.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>233.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="633" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 633,'新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女','0', '/static/index/img/0_thumb_G_1489102299856.jpg', '<em>¥</em>233.00', '<em>¥</em>279.59')">
    <label class="ui-label" for="633">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(633,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489102299856.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489100550173.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489100561245.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489100561054.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489100561298.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>258.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="630" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 630,'法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备','0', '/static/index/img/0_thumb_G_1489100550574.jpg', '<em>¥</em>258.00', '<em>¥</em>309.59')">
    <label class="ui-label" for="630">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(630,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489100550574.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
     
                 
            </ul>
                        </form>
                        <div id="flyItem" class="fly_item"><img src="" width="40" height="40"></div>
        </div>
        <div class="gl-warp gl-warp-samll">
        	            <form name="compareForm_cat" id="compareForm_cat" action="compare.php" method="post" onSubmit="return compareGoods(this);" class="goodslistForm" data-state="0">
                        <ul>
                    <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174925807.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅" target="_blank">逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>158.00            </div>
    <div class="original-price"><em>¥</em>189.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_801" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 801,'逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅','0', '/static/index/img/0_thumb_G_1490174925807.jpg', '<em>¥</em>158.00', '<em>¥</em>189.60')">
    <label class="ui-label" for="duibi_801">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(801,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174925807.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花" target="_blank">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>166.00            </div>
    <div class="original-price"><em>¥</em>199.20</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_800" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 800,'2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花','0', '/static/index/img/0_thumb_G_1490174894779.jpg', '<em>¥</em>166.00', '<em>¥</em>199.20')">
    <label class="ui-label" for="duibi_800">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(800,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174894779.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174858999.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10" target="_blank">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>68.00            </div>
    <div class="original-price"><em>¥</em>81.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_799" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 799,'韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10','0', '/static/index/img/0_thumb_G_1490174858999.jpg', '<em>¥</em>68.00', '<em>¥</em>81.60')">
    <label class="ui-label" for="duibi_799">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(799,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174858999.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174824075.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮" target="_blank">逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>149.00            </div>
    <div class="original-price"><em>¥</em>178.79</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_798" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 798,'逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮','0', '/static/index/img/0_thumb_G_1490174824075.jpg', '<em>¥</em>149.00', '<em>¥</em>178.79')">
    <label class="ui-label" for="duibi_798">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(798,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174824075.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料" target="_blank">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>49.00            </div>
    <div class="original-price"><em>¥</em>58.80</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_797" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 797,'17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料','0', '/static/index/img/0_thumb_G_1490174791219.jpg', '<em>¥</em>49.00', '<em>¥</em>58.80')">
    <label class="ui-label" for="duibi_797">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(797,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174791219.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨" target="_blank">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>40.00            </div>
    <div class="original-price"><em>¥</em>78.00</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_796" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 796,'初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨','0', '/static/index/img/0_thumb_G_1490174741051.jpg', '<em>¥</em>65.00', '<em>¥</em>78.00')">
    <label class="ui-label" for="duibi_796">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(796,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174741051.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换" target="_blank">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>78.00            </div>
    <div class="original-price"><em>¥</em>93.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_775" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 775,'韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169281436.jpg', '<em>¥</em>78.00', '<em>¥</em>93.60')">
    <label class="ui-label" for="duibi_775">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(775,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169281436.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！" target="_blank">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>159.00            </div>
    <div class="original-price"><em>¥</em>190.79</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_774" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 774,'韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169250846.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="duibi_774">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(774,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169250846.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！" target="_blank">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>159.00            </div>
    <div class="original-price"><em>¥</em>190.79</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_773" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 773,'韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169216444.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="duibi_773">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(773,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169216444.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169186175.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换" target="_blank">韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>118.00            </div>
    <div class="original-price"><em>¥</em>141.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_772" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 772,'韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169186175.jpg', '<em>¥</em>118.00', '<em>¥</em>141.60')">
    <label class="ui-label" for="duibi_772">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(772,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169186175.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！" target="_blank">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>148.00            </div>
    <div class="original-price"><em>¥</em>177.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_771" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 771,'韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169151126.jpg', '<em>¥</em>148.00', '<em>¥</em>177.60')">
    <label class="ui-label" for="duibi_771">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(771,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169151126.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169118213.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包" target="_blank">小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>15.90            </div>
    <div class="original-price"><em>¥</em>19.08</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_770" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 770,'小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包','0', '/static/index/img/0_thumb_G_1490169118213.jpg', '<em>¥</em>15.90', '<em>¥</em>19.08')">
    <label class="ui-label" for="duibi_770">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(770,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169118213.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169074773.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！" target="_blank">朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>259.00            </div>
    <div class="original-price"><em>¥</em>310.80</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_769" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 769,'朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169074773.jpg', '<em>¥</em>259.00', '<em>¥</em>310.80')">
    <label class="ui-label" for="duibi_769">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(769,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169074773.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素" target="_blank">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>88.00            </div>
    <div class="original-price"><em>¥</em>105.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_768" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 768,'韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素','0', '/static/index/img/0_thumb_G_1490169030833.jpg', '<em>¥</em>88.00', '<em>¥</em>105.60')">
    <label class="ui-label" for="duibi_768">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(768,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169030833.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490168991044.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭" target="_blank">韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>112.00            </div>
    <div class="original-price"><em>¥</em>134.40</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_767" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 767,'韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭','0', '/static/index/img/0_thumb_G_1490168991044.jpg', '<em>¥</em>112.00', '<em>¥</em>134.40')">
    <label class="ui-label" for="duibi_767">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(767,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490168991044.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102950633.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服" target="_blank">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</a></div>
    <div class="p-lie">
        <div class="p-num">销量：1</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>450.00            </div>
    <div class="original-price"><em>¥</em>540.00</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_635" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 635,'韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服','0', '/static/index/img/0_thumb_G_1489102950633.jpg', '<em>¥</em>450.00', '<em>¥</em>540.00')">
    <label class="ui-label" for="duibi_635">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(635,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489102950633.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
    <div class="p-lie">
        <div class="p-num">销量：2</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>300.00            </div>
    <div class="original-price"><em>¥</em>360.00</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_634" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 634,'新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮','0', '/static/index/img/0_thumb_G_1489102753231.jpg', '<em>¥</em>300.00', '<em>¥</em>360.00')">
    <label class="ui-label" for="duibi_634">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(634,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489102753231.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102299856.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女" target="_blank">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>233.00            </div>
    <div class="original-price"><em>¥</em>279.59</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_633" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 633,'新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女','0', '/static/index/img/0_thumb_G_1489102299856.jpg', '<em>¥</em>233.00', '<em>¥</em>279.59')">
    <label class="ui-label" for="duibi_633">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(633,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489102299856.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备" target="_blank">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>258.00            </div>
    <div class="original-price"><em>¥</em>309.59</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_630" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 630,'法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备','0', '/static/index/img/0_thumb_G_1489100550574.jpg', '<em>¥</em>258.00', '<em>¥</em>309.59')">
    <label class="ui-label" for="duibi_630">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(630,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489100550574.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
         
            </ul>
                        </form>
                        <div id="flyItem2" class="fly_item2"><img src="" width="40" height="40"></div>
        </div>
        <input type="hidden" value="2" id="region_id" name="region_id">
        <input type="hidden" value="16" id="area_id" name="area_id">
                
                    
            
                        
            
                <div class="clear"></div>
    </div>
    <div class="goods-spread">
    <a href="#" class="g-stop" ectype="gstop"><i class="iconfont icon-right"></i></a>
    <div class="gs-warp">
        <div class="gs-tit">推广商品</div>
        <ul class="gs-list">
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>258.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备'>法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>88.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素'>韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>159.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！'>韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>159.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！'>韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>148.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！'>韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174824075.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>149.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮'>逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
                    </ul>
    </div>
</div>
</div>            
            <div class="p-panel-main guess-love">
            	<div class="ftit ftit-delr"><h3>猜你喜欢</h3></div>
                <div class="gl-list clearfix">
                	<ul class="clearfix">
            	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109583798.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>555.00    </div>
<div class="p-name"><a href="#" target="_blank">【情侣款】Camel骆驼男靴 时尚潮流英伦风马丁靴高帮皮靴 爆卖1万双！ 情侣马丁靴 好评如潮</a></div>
                        	<div class="p-num">已售<em>35</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109633806.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>1000.00    </div>
<div class="p-name"><a href="#" target="_blank">春季马丁靴男真皮男靴黄靴工装军靴韩版短靴沙漠靴高帮男鞋大黄靴 头层牛皮</a></div>
                        	<div class="p-num">已售<em>2</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489108999364.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>200.00    </div>
<div class="p-name"><a href="#" target="_blank">特步女鞋2017春季新款运动鞋休闲鞋女慢跑步鞋旅游鞋轻便舒适时尚 早春特惠 爆款休闲女鞋 赠运费险</a></div>
                        	<div class="p-num">已售<em>2</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>300.00    </div>
<div class="p-name"><a href="#" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
                        	<div class="p-num">已售<em>2</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109337889.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>330.00    </div>
<div class="p-name"><a href="#" target="_blank">igtt铝框行李箱拉杆箱旅行箱万向轮男女20/24/26寸密码箱登机箱子 铝合金框 加强密码锁 万向轮 终身保修</a></div>
                        	<div class="p-num">已售<em>1</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109282145.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>250.00    </div>
<div class="p-name"><a href="#" target="_blank">波米铝框拉杆箱万向轮密码旅行箱子20/24寸行李箱女登机箱男26/28 顺丰速运赠运费险赠十礼品终身质保</a></div>
                        	<div class="p-num">已售<em>1</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109130174.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>458.00    </div>
<div class="p-name"><a href="#" target="_blank">2016秋冬季新款尖头粗跟短靴女高跟真皮加绒中跟马丁靴女靴子女鞋 优质全头层牛皮，品质女鞋</a></div>
                        	<div class="p-num">已售<em>1</em>件</div>
                        </li>
            </ul>
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
   



    <div class="duibi_box" id="slideTxtBox">
	    <div class="parWarp">
	        <div class="parTit">对比栏</div>
	        <div class="parBd">
	            <div class="slideBox5" id="duibilan">
	                <div id="diff-items" class="diff-items clearfix">
	                    <dl class="hasItem" id="compare_goods1">  
	                        <dt><h1>1</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                    <dl class="hasItem" id="compare_goods2">  
	                        <dt><h1>2</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                    <dl class="hasItem" id="compare_goods3">  
	                        <dt><h1>3</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                    <dl class="hasItem" id="compare_goods4">  
	                        <dt><h1>4</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                </div>
	                <div class="diff-operate">
	                	<a id="compare_button" class="compare-active"></a>
						<a id="qingkong" class="del-items">清空对比栏</a>
	                    <a href="#" class="hide-me" ectype="db_hide">隐藏</a>
	                </div>
	            </div>
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
		// $('.tit').remove();
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
		// $('.tit').remove();
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
	LoginArti();
	$('.viptitle>.tit').on('mouseover','a',function(){
		var aa = $('.viptitle>.tit>a').index(this);
		$('.viptitle>.con>ul').eq(aa).css('display','block');
		$('.viptitle>.con>ul').eq(aa).siblings().css('display','none');
	});
});

function LoginArti() {
	$.ajax({
		url: "<?php echo url('Article/IndexShowLogin'); ?>",
		data: {
			'cateid': [23,24],	//
			'limit': 3,
		},
		dataType: 'json',
		type: 'POST',
		success: function (datas) {
			$('.viptitle').children('.tit').empty();
			$('.viptitle').children('.con').empty();
			var list = datas;
			for ( i=0; i<list.length; i++ ) {
				// 登录上的那个父级栏目
				var div = '';
				div += '<a href="javascript:void(0);" class="tab_head_item">' + list[i].name.cate_name + '</a>';
				$('.viptitle').children('.tit').append(div);
				// 登录上的那个子所属栏目的标题
				var listChild = list[i].child, uls = '';
				if ( i==0 ){
					uls += '<ul>';
				} else {
					uls += '<ul style="display:none;">';
				};
				for ( j=0; j<listChild.length; j++ ) {
					uls += '<li><a href="/article/' + listChild[j].ar_id + '.html" target="_blank">' + listChild[j].ar_title + '</a></li>';
				};
				uls += '</ul>'; 
				$('.viptitle').children('.con').append(uls);
			}
		},
		error: function() {
			alert('由于网络问题，加载失败');
		}
	});
}

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

    
    <script type="text/javascript" src="/static/index/js/common.js"></script>
    <script type="text/javascript" src="/static/index/js/compare.js"></script>
    <script type="text/javascript" src="/static/index/js/parabola.js"></script>
    <script type="text/javascript" src="/static/index/js/shopping_flow.js"></script>
    <script type="text/javascript" src="/static/index/js/jd_choose.js"></script>
    <script type="text/javascript" src="/static/index/js/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$(".gl-i-wrap").slide({mainCell:".sider ul",effect:"left",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".sider-prev",nextCell:".sider-next",vis:5});
		
		//对比
		Compare.init();
	});
    </script>
</body>
</html>
