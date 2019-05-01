<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:64:"B:\aaaweb\shop\public/../application/index\view\index\index.html";i:1556716437;s:55:"B:\aaaweb\shop\application\index\view\common\_meta.html";i:1556716437;s:59:"B:\aaaweb\shop\application\index\view\common\heads_top.html";i:1556716437;s:60:"B:\aaaweb\shop\application\index\view\common\heads_logo.html";i:1556716437;s:60:"B:\aaaweb\shop\application\index\view\common\heads_navs.html";i:1556716437;s:55:"B:\aaaweb\shop\application\index\view\common\right.html";i:1556716437;s:56:"B:\aaaweb\shop\application\index\view\common\footer.html";i:1556716437;s:63:"B:\aaaweb\shop\application\index\view\common\footer_script.html";i:1556716437;}*/ ?>
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

<body data-type="index1">

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


        <div class="categorys site-mast">
            <div class="categorys-type">
            	<a href="categoryall.php" target="_blank">全部商品分类</a>
            </div>
		    <div class="categorys-tab-content">
		    	<div class="categorys-items" id="cata-nav">
		            <div class="categorys-item" ectype="cateItem" data-id="858" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-ele"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="category.php?id=858" target="_blank">家用电器</a>
					            </strong>
					            <span>
									<a href="category.php?id=1105" target="_blank">大家电</a>
									<a href="category.php?id=1115" target="_blank">生活电器</a>
				                </span>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_858"></div>
									<div class="cate_detail" ectype="subitems_858"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_858"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
		            <div class="categorys-item" ectype="cateItem" data-id="3" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-digital"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="category.php?id=33" target="_blank" class="division_cat">手机</a>、<a href="category.php?id=64" target="_blank" class="division_cat">数码</a>、<a href="category.php?id=37" target="_blank" class="division_cat">通信</a>
					        	</strong>
					            <span>
									<a href="category.php?id=112" target="_blank">智能设备</a>
									<a href="category.php?id=76" target="_blank">数码配件</a>
				                </span>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_3"></div>
									<div class="cate_detail" ectype="subitems_3"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_3"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
			        <div class="categorys-item" ectype="cateItem" data-id="4" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-computer"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="category.php?id=4" target="_blank">电脑、办公</a>
					            </strong>
					            <span>
									<a href="category.php?id=158" target="_blank">服务产品</a>
									<a href="category.php?id=132" target="_blank">电脑整机</a>
				                </span>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_4"></div>
									<div class="cate_detail" ectype="subitems_4"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_4"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
		            <div class="categorys-item" ectype="cateItem" data-id="5" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-bed"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="category.php?id=5" target="_blank">家居、家具、家装、厨具</a>
					            </strong>
					            <span>
									<a href="category.php?id=143" target="_blank">厨具</a>
									<a href="category.php?id=159" target="_blank">家装建材</a>
				                </span>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_5"></div>
									<div class="cate_detail" ectype="subitems_5"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_5"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
			        <div class="categorys-item" ectype="cateItem" data-id="6" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-clothes"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="category.php?id=6" target="_blank">男装、女装、内衣</a>
					            </strong>
					            <span>
									<a href="category.php?id=347" target="_blank">女装</a>
									<a href="category.php?id=463" target="_blank">男装</a>
				                </span>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_6"></div>
									<div class="cate_detail" ectype="subitems_6"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_6"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
		            <div class="categorys-item" ectype="cateItem" data-id="8" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-shoes"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="category.php?id=8" target="_blank">鞋靴、箱包、钟表、奢侈品</a>
					            </strong>
					            <span>
									<a href="category.php?id=362" target="_blank">奢侈品</a>
									<a href="category.php?id=360" target="_blank">功能箱包</a>
				                </span>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_8"></div>
									<div class="cate_detail" ectype="subitems_8"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_8"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
		            <div class="categorys-item" ectype="cateItem" data-id="860" data-eveval="0">
				        <div class="item item-content">
						    <i class="iconfont icon-heal"></i>
						    <div class="categorys-title">
				                <strong>
						            <a href="category.php?id=860" target="_blank">个人化妆、清洁用品</a>
					            </strong>
					            <span>
									<a href="category.php?id=876" target="_blank">面部护肤</a>
									<a href="category.php?id=880" target="_blank">洗发护发</a>
				                </span>
					        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
									<div class="cate_channel" ectype="channels_860"></div>
									<div class="cate_detail" ectype="subitems_860"></div>
				                </div>
				                <div class="cate-layer-rihgt" ectype="brands_860"></div>
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div>
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
	</div>
</div>


		<div class="banner catetop-banner">
			<div class="bd">
				<ul style="position: relative; width: 1903px; height: 450px;">
					<li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1489958299308242697.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
					<li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1490123276201426626.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
					<li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1490123436237080312.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
					<li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1490123306523369831.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
					<li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: list-item;"><div class="banner-width"><a style="background: url(/static/index/img/1490123319351624402.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
				</ul>
			</div>
			<div class="cloth-hd">
				<ul>
					<li class="">1</li>
					<li class="">2</li>
					<li class="">3</li>
					<li class="">4</li>
					<li class="on">5</li>
				</ul>
			</div>
		</div>
		<div class="catetop-main w w1200" ectype="catetopWarp">

			<div class="limitime" id="limitime">
				<div class="hd">
					<h2>限时抢购</h2>
					<h3>每日精彩不断</h3>
				</div>
				<div class="bd">
					<ul class="limitime-list clearfix">
				
						<li class="mod-shadow-card">
							<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a>
							<p class="price">
								<em>¥</em>124.00											
								<del><em>¥</em>165.60</del>
							</p>
							<a href="#" class="name" title="贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a>
							<a href="#" class="limitime-btn">查看详情</a>
						</li>
						<li class="mod-shadow-card">
							<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a>
							<p class="price">
								<em>¥</em>130.00											
								<del><em>¥</em>190.79</del>
							</p>
							<a href="#" class="name" title="YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a>
							<a href="#" class="limitime-btn">查看详情</a>
						</li>
						<li class="mod-shadow-card">
							<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" alt=""></a>
							<p class="price">
								<em>¥</em>40.00											
								<del><em>¥</em>78.00</del>
							</p>
							<a href="#" class="name" title="初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a>
							<a href="#" class="limitime-btn">查看详情</a>
						</li>
						<li class="mod-shadow-card">
							<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a>
							<p class="price">
								<em>¥</em>124.00											
								<del><em>¥</em>165.60</del>
							</p>
							<a href="#" class="name" title="贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a>
							<a href="#" class="limitime-btn">查看详情</a>
						</li>
						<li class="mod-shadow-card">
							<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a>
							<p class="price">
								<em>¥</em>130.00											
								<del><em>¥</em>190.79</del>
							</p>
							<a href="#" class="name" title="YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a>
							<a href="#" class="limitime-btn">查看详情</a>
						</li>
									
					</ul>
				</div>
			</div>

		
	
			<div class="catetop-floor-wp" ectype="goods_cat_level">
				<div class="catetop-floor" id="floor_1" ectype="floorItem">
					<div class="f-hd">
						<h2>女装</h2>
						<h3>1F</h3>
						<div class="extra">
							<div class="fgoods-hd">
								<ul>
									<li class="on">连衣裙</li>
									<li>蕾丝/雪纺衫</li>
									<li>衬衫</li>
									<li>T恤</li>
									<li>半身裙</li>
					
								</ul>
							</div>
						</div>
					</div>
					<div class="f-bd clearfix">
						<div class="bd-left">
							<div class="l-ad">
								<ul>
								    <li><a href="#"><img src="/static/index/img/1489959091429324080.jpg" width="400" height="660"></a></li>
								</ul>
							</div>
						</div>
						<div class="bd-right">
							<div class="right-top clearfix">
								<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902198662849705.png" width="399" height="170"></a></div>
								<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902716880024601.jpg" width="399" height="170"></a></div>
							</div>
							<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
							<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
									<div class="p-price"><em>¥</em>88.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
									<div class="p-price"><em>¥</em>159.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
									<div class="p-price"><em>¥</em>159.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
									<div class="p-price"><em>¥</em>148.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a></div>
									<div class="p-price"><em>¥</em>166.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
									<div class="p-price"><em>¥</em>78.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169186175.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换</a></div>
									<div class="p-price"><em>¥</em>118.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169118213.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包</a></div>
									<div class="p-price"><em>¥</em>15.90</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169074773.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
									<div class="p-price"><em>¥</em>259.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490168991044.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭</a></div>
									<div class="p-price"><em>¥</em>112.00</div>
								</li>
							</ul>
							<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174858999.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
									<div class="p-price"><em>¥</em>68.00</div>
								</li>
							</ul>
							<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
							</ul>
							<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
									<div class="p-price"><em>¥</em>65.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
									<div class="p-price"><em>¥</em>300.00</div>
								</li>
							</ul>
							<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
									<div class="p-price"><em>¥</em>49.00</div>
								</li>
								<li>
									<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489102299856.jpg" alt=""></a></div>
									<div class="p-name"><a href="#">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
									<div class="p-price"><em>¥</em>233.00</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
							<ul class="brands">
								<li><a href="#"><img src="/static/index/img/1490071974970349584.jpg" alt="esprit"></a></li>
								<li><a href="#"><img src="/static/index/img/1490072756032175204.jpg" alt="喜瑞"></a></li>
								<li><a href="#"><img src="/static/index/img/1490073577683159021.jpg" alt="华帝"></a></li>
								<li><a href="#"><img src="/static/index/img/1490073591535005714.jpg" alt="鸿星尔克"></a></li>
								<li><a href="#"><img src="/static/index/img/1490072860522023692.jpg" alt="乐力"></a></li>
								<li><a href="#"><img src="/static/index/img/1490074030328949587.jpg" alt="LG"></a></li>
								<li><a href="#"><img src="/static/index/img/1490228075580091113.jpg" alt="麦斯威尔"></a></li>
								<li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" alt="美的"></a></li>
							</ul>
						</div>
					</div>





					<div class="catetop-floor" id="floor_2" ectype="floorItem">
						<div class="f-hd">
							<h2>男装</h2>
							<h3>2F</h3>
							<div class="extra">
								<div class="fgoods-hd">
									<ul>
										<li class="on">T恤</li>
										<li>裤子</li>
										<li>POLO衫</li>
										<li>针织衫</li>
										<li>夹克</li>
								
									</ul>
								</div>
							</div>
						</div>
						<div class="f-bd clearfix">
							<div class="bd-left">
								<div class="l-ad">
									<ul>
									    <li><a href="#"><img src="/static/index/img/1490211733278354775.png" width="400" height="660"></a></li>
									</ul>
								</div>
							</div>
							<div class="bd-right">
								<div class="right-top clearfix">
									<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902568354711628.jpg" width="399" height="170"></a></div>
									<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902583818745610.jpg" width="399" height="170"></a></div>
								</div>
								<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
									<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211620029.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a></div>
											<div class="p-price"><em>¥</em>128.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211575591.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98</a></div>
											<div class="p-price"><em>¥</em>98.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211700709.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购</a></div>
											<div class="p-price"><em>¥</em>89.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099773629.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">2017春装新款男士卫衣套头圆领韩版潮流时尚男生休闲外套</a></div>
											<div class="p-price"><em>¥</em>200.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099544749.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">秋冬新款加绒圆领套头卫衣男青年男生韩版潮流学生休闲外套男</a></div>
											<div class="p-price"><em>¥</em>168.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099437211.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服</a></div>
											<div class="p-price"><em>¥</em>120.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174019725.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">HLA/海澜之家撞色长袖T恤春季热卖圆领修身拼接T恤男 简约圆领 微弹修身 撞色拼接 触感柔软</a></div>
											<div class="p-price"><em>¥</em>98.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211843119.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">马克华菲短袖T恤 夏装新款舒适圆领条纹拼接男简约修身短袖上衣</a></div>
											<div class="p-price"><em>¥</em>128.00</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174208112.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">森马夹克 2016冬装新款男士飞行夹克贴布绣立领休闲外套韩版潮流</a></div>
											<div class="p-price"><em>¥</em>199.90</div>
										</li>
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a></div>
											<div class="p-price"><em>¥</em>159.00</div>
										</li>
									</ul>
									<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
										<li>
											<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174241651.jpg" alt=""></a></div>
											<div class="p-name"><a href="#">裤子男士哈伦裤春季新款2017束脚裤修身韩版潮流小脚裤男裤休闲裤 弹力</a></div>
											<div class="p-price"><em>¥</em>99.00</div>
										</li>
									</ul>
									<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
									</ul>
									<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
									</ul>
									<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
									</ul>
								</div>
							</div>
							<div class="clear"></div>
								<ul class="brands">
									<li><a href="#"><img src="/static/index/img/1490073529881448780.jpg" alt="匡威"></a></li>
									<li><a href="#"><img src="/static/index/img/1490072981305868823.jpg" alt="开普特"></a></li>
									<li><a href="#"><img src="/static/index/img/1490072373278367315.jpg" alt="金利来"></a></li>
									<li><a href="#"><img src="/static/index/img/1490072879222701895.jpg" alt="金史密斯"></a></li>
									<li><a href="#"><img src="/static/index/img/1490073539440462760.jpg" alt="康恩贝"></a></li>
									<li><a href="#"><img src="/static/index/img/1490072765604121481.jpg" alt="康比特"></a></li>
									<li><a href="#"><img src="/static/index/img/1490073675778205608.jpg" alt="哥弟"></a></li>
									<li><a href="#"><img src="/static/index/img/1490073240845049320.jpg" alt="小米"></a></li>
								</ul>
							</div>
						</div>





						<div class="catetop-floor" id="floor_3" ectype="floorItem">
							<div class="f-hd">
								<h2>服饰配件</h2>
								<h3>3F</h3>
								<div class="extra">
									<div class="fgoods-hd">
										<ul>
											<li class="on">配饰</li>
											<li>光学镜架/镜片</li>
											<li>防辐射眼镜</li>
											<li>女士丝巾/围巾/披肩</li>
											<li>棒球帽</li>
								
										</ul>
									</div>
								</div>
							</div>
							<div class="f-bd clearfix">
								<div class="bd-left">
									<div class="l-ad">
										<ul>    
											<li><a href="#"><img src="/static/index/img/1490211940085510775.png" width="400" height="660"></a></li>
										</ul>
									</div>
								</div>
								<div class="bd-right">
									<div class="right-top clearfix">
										<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902595862278495.jpg" width="399" height="170"></a></div>
										<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902606945055998.jpg" width="399" height="170"></a></div>
									</div>
									<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
										<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173894447.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">红叶伞遮阳伞防紫外线黑胶防晒晴雨两用太阳伞女糖果色折叠雨伞大 黑胶防晒 晴雨两用 糖果色 都市风情</a></div>
												<div class="p-price"><em>¥</em>38.00</div>
											</li>
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173663577.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">男女韩版纯棉可爱冬季个性防尘情侣口罩保暖透气黑色时尚潮款春 15元一共2个口罩 防尘个性时尚</a></div>
												<div class="p-price"><em>¥</em>15.00</div>
											</li>
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490155369648.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">Apple/苹果 Apple Watch Series 2 智能手表42mm</a></div>
												<div class="p-price"><em>¥</em>3188.00</div>
											</li>
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489108087695.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">【新品发售】 Beats Beats Solo3 Wireless 头戴式无线蓝牙耳机 分期免息 全国联保 免费保修一年</a></div>
												<div class="p-price"><em>¥</em>1888.00</div>
											</li>
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173626566.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">74超薄非球面镜片高度近视眼镜片近视镜片防蓝光配眼镜镜片加工 套餐价低至359元 6款镜架任您选</a></div>
												<div class="p-price"><em>¥</em>399.00</div>
											</li>
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173699371.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">宝石蝶真丝围巾女士春秋季高档丝巾重磅桑蚕丝大方巾披肩丝绸礼品 16姆米重磅真丝丝滑缎面90方巾礼盒包装</a></div>
												<div class="p-price"><em>¥</em>169.00</div>
											</li>
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173534127.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品</a></div>
												<div class="p-price"><em>¥</em>219.00</div>
											</li>
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173860746.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">6林志玲花样姐姐同款海伦凯勒太阳镜女 偏光蛤蟆镜潮墨镜H8535 花样姐姐同款 林志玲设计 炫彩镂空</a></div>
												<div class="p-price"><em>¥</em>378.00</div>
											</li>
										</ul>
										<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
										</ul>
										<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
										</ul>
										<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
										</ul>
										<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
											<li>
												<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173534127.jpg" alt=""></a></div>
												<div class="p-name"><a href="#">NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品</a></div>
												<div class="p-price"><em>¥</em>219.00</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="clear"></div>
									<ul class="brands">
										<li><a href="#"><img src="/static/index/img/1490228100138579787.jpg" alt="杰克琼斯"></a></li>
										<li><a href="#"><img src="/static/index/img/1490072804442637685.jpg" alt="健安喜"></a></li>
										<li><a href="#"><img src="/static/index/img/1490171981556005380.jpg" alt="佳沪数码-华为"></a></li>
										<li><a href="#"><img src="/static/index/img/1490073561018734078.jpg" alt="姬芮"></a></li>
										<li><a href="#"><img src="/static/index/img/1490072823106532144.jpg" alt="金奥力"></a></li>
										<li><a href="#"><img src="/static/index/img/1490072677495061584.jpg" alt="justyle"></a></li>
										<li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" alt="美的"></a></li>
									</ul>
								</div>
							</div>





							<div class="catetop-floor" id="floor_4" ectype="floorItem">
								<div class="f-hd">
									<h2>内衣</h2>
									<h3>4F</h3>
									<div class="extra">
										<div class="fgoods-hd">
											<ul>
												<li class="on">内衣配件</li>
												<li>文胸</li>
												<li>睡衣/家居服</li>
												<li>情侣睡衣</li>
												<li>文胸套装</li>
									
											</ul>
										</div>
									</div>
								</div>
								<div class="f-bd clearfix">
									<div class="bd-left">
										<div class="l-ad">
											<ul>
											    <li><a href="#"><img src="/static/index/img/1490211951765051111.png" width="400" height="660"></a></li>
											</ul>
										</div>
									</div>
									<div class="bd-right">
										<div class="right-top clearfix">
											<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902618861680555.jpg" width="399" height="170"></a></div>
											<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902628538237349.jpg" width="399" height="170"></a></div>
										</div>
										<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
											<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099987431.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">爆款 爱慕经典KiKi裤轻薄无痕女士中腰三角内裤多色内衣A</a></div>
													<div class="p-price"><em>¥</em>88.00</div>
												</li>
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a></div>
													<div class="p-price"><em>¥</em>138.00</div>
												</li>
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174469373.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">Calvin Klein Underwear/CK 2017春夏新款 男士平角内裤NU8638 初上市价格290元</a></div>
													<div class="p-price"><em>¥</em>290.00</div>
												</li>
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100049187.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">2017新品 加一尚品无痕内衣女 前扣无钢圈薄款交叉美背文胸M37 厚杯+薄杯 无钢圈 前扣 美背 上薄下厚</a></div>
													<div class="p-price"><em>¥</em>158.00</div>
												</li>
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100653308.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">樱尚雅一片式无痕无钢圈文胸聚拢调整型性感小胸罩厚薄款少女内衣 2件减5元 不聚拢包退 送运费险</a></div>
													<div class="p-price"><em>¥</em>200.00</div>
												</li>
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100914563.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">舒适睡眠文胸罩无痕薄款运动内衣无钢圈女士调整型背心式少女聚拢 赠运费险 无痕无钢圈 舒适聚拢</a></div>
													<div class="p-price"><em>¥</em>211.00</div>
												</li>
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174663688.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">都市丽人文胸旗舰店 林志玲有钢圈少女小胸文胸 聚拢 调整型内衣V 官方正品 赠运费险 收藏有礼 全国包邮</a></div>
													<div class="p-price"><em>¥</em>69.00</div>
												</li>
												<li>
													<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174703131.jpg" alt=""></a></div>
													<div class="p-name"><a href="#">都市丽人一片式无痕文胸厚杯性感聚拢舒适光面胸罩纯色商场同款 2016新品明星同款舒适Q软托无痕体验</a></div>
													<div class="p-price"><em>¥</em>91.00</div>
												</li>
											</ul>
											<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
											</ul>
											<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
											</ul>
											<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
											</ul>
											<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
											</ul>
										</div>
									</div>
									<div class="clear"></div>
											<ul class="brands">
												<li><a href="#"><img src="/static/index/img/1490072950580851309.jpg" alt="Masentek"></a></li>
												<li><a href="#"><img src="/static/index/img/1490227784119952387.jpg" alt="李医生"></a></li>
												<li><a href="#"><img src="/static/index/img/1490073518703639070.jpg" alt="兰蔻"></a></li>
												<li><a href="#"><img src="/static/index/img/1490073982547710498.jpg" alt="Five Plus"></a></li>
												<li><a href="#"><img src="/static/index/img/1490074308773778697.jpg" alt="新百伦"></a></li>
												<li><a href="#"><img src="/static/index/img/1490072313895957648.jpg" alt="ELLE HOME"></a></li>
												<li><a href="#"><img src="/static/index/img/1490073454678614186.jpg" alt="狼爪"></a></li>
												<li><a href="#"><img src="/static/index/img/1490227986732712711.jpg" alt="立邦"></a></li>
											</ul>
										</div>
									</div>





									<div class="catetop-floor" id="floor_5" ectype="floorItem">
										<div class="f-hd">
											<h2>运动户外</h2>
											<h3>5F</h3>
											<div class="extra">
												<div class="fgoods-hd">
													<ul>
														<li class="on">跑步运动</li>
														<li>室内健身</li>
														<li>自行车运动</li>
														<li>轮滑运动</li>
														<li>羽毛球/网球/乒乓球</li>
													
													</ul>
												</div>
											</div>
										</div>
										<div class="f-bd clearfix">
											<div class="bd-left">
												<div class="l-ad">
													<ul>
													    <li><a href="#"><img src="/static/index/img/1490211964186681053.png" width="400" height="660"></a></li>
													</ul>
												</div>
											</div>
											<div class="bd-right">
												<div class="right-top clearfix">
													<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902637953027856.jpg" width="399" height="170"></a></div>
													<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902646240694917.jpg" width="399" height="170"></a></div>
												</div>
												<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
													<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218873837.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">Nike 耐克官方 PRO COOL COMP LONG-SLEEVE 男子训练紧身衣703088</a></div>
															<div class="p-price"><em>¥</em>249.00</div>
														</li>
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218667022.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤</a></div>
															<div class="p-price"><em>¥</em>98.00</div>
														</li>
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218800612.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">洽福 转椅轮子万向轮 老板椅办公椅子滑轮电脑椅配件滚轮脚轮轱辘 静音灵活不伤地板质保三年下单备注安装方式</a></div>
															<div class="p-price"><em>¥</em>23.80</div>
														</li>
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218770962.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">哑铃男士钢制家用电镀哑铃杠铃25 40公斤 纯钢哑铃盒装 健身器材 纯钢哑铃杠铃送哑铃架</a></div>
															<div class="p-price"><em>¥</em>360.00</div>
														</li>
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218732576.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">T1多功能健身器材家用仰卧板收腹机哑铃凳仰卧起坐板折叠 健身椅 进口格子皮八档调节 承重500斤</a></div>
															<div class="p-price"><em>¥</em>260.00</div>
														</li>
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218701469.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">迪卡侬健身手套 力量训练哑铃护掌防滑 DOMYOS QS 轻盈透气 重量训练</a></div>
															<div class="p-price"><em>¥</em>39.90</div>
														</li>
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218905472.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">专业瑜伽服双线美背瑜伽背心吊带含胸垫一体式弹力修身运动健身服</a></div>
															<div class="p-price"><em>¥</em>159.00</div>
														</li>
														<li>
															<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218835060.jpg" alt=""></a></div>
															<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤</a></div>
															<div class="p-price"><em>¥</em>98.00</div>
														</li>
													</ul>
													<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
													</ul>
													<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
													</ul>
													<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
													</ul>
													<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
													</ul>
												</div>
											</div>
											<div class="clear"></div>
													<ul class="brands">
														<li><a href="#"><img src="/static/index/img/1490072850306019115.jpg" alt="同庆和堂"></a></li>
														<li><a href="#"><img src="/static/index/img/1490072931218635674.jpg" alt="皮克朋"></a></li>
														<li><a href="#"><img src="/static/index/img/1490072898345358625.jpg" alt="皮尔瑜伽"></a></li>
														<li><a href="#"><img src="/static/index/img/1490073009638652059.jpg" alt="苹果"></a></li>
														<li><a href="#"><img src="/static/index/img/1490073324022460149.jpg" alt="七匹狼"></a></li>
														<li><a href="#"><img src="/static/index/img/1490072918339853569.jpg" alt="乔山"></a></li>
														<li><a href="#"><img src="/static/index/img/1490072889090025069.jpg" alt="斯伯丁"></a></li>
														<li><a href="#"><img src="/static/index/img/1490072993409028193.jpg" alt="三星"></a></li>
													</ul>
												</div>
											</div>




										</div>
										
									    <div class="atwillgo" id="atwillgo">
								            <div class="awg-hd">
												<h2>随手购</h2>
								            </div>
								            <div class="awg-bd">
												<div class="atwillgo-slide">
												    <a href="#"><i class="iconfont icon-left"></i></a>
												    <a href="#"><i class="iconfont icon-right"></i></a>
												    <div class="hd">
												        <ul><li class="on"></li><li></li><li></li></ul>
												    </div>
												    <div class="bd">
												        <div class="tempWrap" style="overflow:hidden; position:relative; width:1200px">
												        	<ul style="width: 3600px; left: 0px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>300.00</div>
																	<div class="p-name"><a href="#">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174208112.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>199.90</div>
																	<div class="p-name"><a href="#">森马夹克 2016冬装新款男士飞行夹克贴布绣立领休闲外套韩版潮流</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173534127.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>219.00</div>
																	<div class="p-name"><a href="#">NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218873837.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>249.00</div>
																	<div class="p-name"><a href="#">Nike 耐克官方 PRO COOL COMP LONG-SLEEVE 男子训练紧身衣703088</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>159.00</div>
																	<div class="p-name"><a href="#">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099544749.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>168.00</div>
																	<div class="p-name"><a href="#">秋冬新款加绒圆领套头卫衣男青年男生韩版潮流学生休闲外套男</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>88.00</div>
																	<div class="p-name"><a href="#">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>78.00</div>
																	<div class="p-name"><a href="#">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174508974.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>44.50</div>
																	<div class="p-name"><a href="#">迷瞳盒装女士内裤莫代尔透气少女三角裤夏季性感低腰无痕大码裤头 5条盒装 莫代尔面料 小内裤 窄边三角裤</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218835060.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>98.00</div>
																	<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>49.00</div>
																	<div class="p-name"><a href="#">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100914563.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>211.00</div>
																	<div class="p-name"><a href="#">舒适睡眠文胸罩无痕薄款运动内衣无钢圈女士调整型背心式少女聚拢 赠运费险 无痕无钢圈 舒适聚拢</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218800612.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>23.80</div>
																	<div class="p-name"><a href="#">洽福 转椅轮子万向轮 老板椅办公椅子滑轮电脑椅配件滚轮脚轮轱辘 静音灵活不伤地板质保三年下单备注安装方式</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>130.00</div>
																	<div class="p-name"><a href="#">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>124.00</div>
																	<div class="p-name"><a href="#">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099437211.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>120.00</div>
																	<div class="p-name"><a href="#">秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>258.00</div>
																	<div class="p-name"><a href="#">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														        <li style="float: left; width: 158px;">
																	<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" alt=""></a></div>
																	<div class="p-price"><em>¥</em>148.00</div>
																	<div class="p-name"><a href="#">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
																	<div class="p-btn"><a href="#">加入购物车</a></div>
														        </li>
														    </ul>
														</div>
												    </div>
												</div>
								            </div>
								        </div>
		    
			
										<div class="catetop-lift lift-hide" ectype="lift" style="left: 261.5px; top: 50%;">
									    	<div class="lift-list" ectype="liftList">
									        	<div class="catetop-lift-item" ectype="liftItem" data-target="#limitime"><span>限时抢购</span></div>
									            <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>女装</span></div>
										        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>男装</span></div>
										        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>服饰配件</span></div>
										        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>内衣</span></div>
										        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>运动户外</span></div>
										        <div class="catetop-lift-item" ectype="liftItem" data-target="#atwillgo"><span>随手购</span></div>
									        	<div class="catetop-lift-item lift-item-top" ectype="liftItem"><span><i class="iconfont icon-up"></i></span></div>
									        </div>
									    </div>
									    <input name="region_id" value="1" type="hidden">
									    <input name="area_id" value="7" type="hidden">
									    <input name="cat_id" value="6" type="hidden">
									    <input name="tpl" value="1" type="hidden">
									    <script type="text/javascript">
											//楼层以后加载后使用js
											function loadCategoryTop(key){
												var Floor = $("#floor_"+key);
												Floor.slide({mainCell:".right-bottom",titCell:".fgoods-hd ul li",effect:"fold"});
											}
										</script>
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
	var dataType = $('body').data('type');
	var indexType = 'index1', 
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
    

    <script type="text/javascript" src="/static/index/js/parabola.js"></script>
    <script type="text/javascript" src="/static/index/js/asyLoadfloor.js"></script>
    
    <script type="text/javascript">
	$(function(){







		//顶级分类页模板id
		//tpl==0 默认模板、tpl==1 女装模板、tpl==2 家电模板、tpl==3 食品模板
		var tpl = $("input[name='tpl']").val();
		var length = $(".catetop-banner .bd").find("li").length;
		
		//轮播图
		if(length>1){
			if(tpl == 1){
				$(".catetop-banner").slide({titCell:".cloth-hd ul",mainCell:".bd ul",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,trigger:"mouseover"});
			}else if(tpl == 3){
				$(".catetop-banner").slide({titCell:".food-hd ul",mainCell:".bd ul",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,trigger:"mouseover"});
			}else{
				$(".catetop-banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,trigger:"mouseover"});
			}
		}else{
			$(".catetop-banner .hd").hide();
		}
		
		if(tpl == 1){
			//女装模板 精品大牌
			var length2 = $(".selectbrand-slide .bd").find("li").length;
			if(length2>5){
				$(".selectbrand-slide").slide({mainCell:".bd ul",titCell:".hd ul",effect:"left",pnLoop: false,vis: 5,scroll: 5,autoPage:"<li></li>"});
				$(".selectbrand-slide .prev,.selectbrand-slide .next").show();
			}else{
				$(".selectbrand-slide .prev,.selectbrand-slide .next").hide();
			}
		}else if(tpl == 2){
			$(".hotrecommend").slide({hd:".hr-slide-hd ul",effect:"fold"});
		}else if(tpl == 0){
			$(".toprank").slide({effect:"fold",titCell:".hd ul li"});
			$(".catetop-brand .brand-slide").slide({mainCell: '.bs-bd ul',effect: 'left',vis: 10,scroll: 10,autoPage: true});
			$.catetopLift();
			
			if($("input[name='history']").val() == 0){
				$(".lift-history").hide();
			}else{
				$(".lift-history").show();
			}
		}
		
		//随手购
		if($(".atwillgo-slide .bd").find("li").length > 6){
			$(".atwillgo-slide").slide({mainCell:".bd ul",titCell:".hd ul",effect:"left",pnLoop:false,vis: 6,scroll: 6,autoPage:"<li></li>"});
		}else{
			$(".atwillgo-slide").find(".prev,.next").hide();
		}
		
		//楼层异步加载封装函数调用
		if(tpl != 0){
			$.catTopLoad(tpl);
		}
	});
    </script>


</body>
</html>