<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"B:\aaaweb\shop\public/../application/member\view\user\reg.html";i:1564285395;s:56:"B:\aaaweb\shop\application\member\view\common\_meta.html";i:1564280942;s:57:"B:\aaaweb\shop\application\member\view\common\footer.html";i:1564285870;}*/ ?>
<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用户登录</title>
	<meta name="Keywords" content="用户登录" />
	<meta name="Description" content="用户登录" />
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

		// 换一批
        var page = 1;
        var ChangeBatchesUrl = "<?php echo url('Brand/getIndexBrand'); ?>";


	</script>
</head>

<body class="bg-ligtGary" data-type="reg1">

	<div class="register">

		<div class="loginRegister-header">
		    <div class="w w1200">
		        <div class="logo">
		            <div class="logoImg"><a href="#" class="logo"><img src="/static/index/img/user_login_logo.png"></a></div>
		            <div class="logoAdv"></div>

			        <!-- 登录 -->
				    <div class="logo-span">
						<b style="background:url(/static/index/img/login_logo_pic.png) no-repeat;"></b>
					</div>
		        </div>

				<div class="header-href">
				    <span>已注册可<a href="<?php echo url('member/user/login'); ?>" class="jump">在此登录</a></span>
				</div>
		    </div>
		</div>

        <div class="container">
            <div class="w w1200">
                <div class="register-wrap">
                	<div class="register-adv">
					<a href="#" target="_blank"><img width="400" height="324" src="/static/index/img/1488939821671881226.jpg" /></a>
					</div>
                    <div class="register-form">
                    	<div class="form form-other">
                            <form action="user.php" method="post" name="formUser" onsubmit="return mobileRegister();">
                            	<div class="item">
                                	<div class="item-label">用　户　名</div>
                                	<div class="item-info">
                                    	<input type="text" name="username" id="username" onblur="is_registered(this.value, 1);" class="text" value="" autocomplete="off" />
                                    </div>
                                    <div class="input-tip"><span id="username_notice_1"></span></div>
                                </div>
                                <div class="item">
                                	<div class="item-label">设 置 密 码</div>
                                	<div class="item-info">
                                        <input type="password" style="display:none"/>
                                    	<input type="password" name="password" id="pwd" class="text" value="" autocomplete="off" />
                                    </div>
                                    <div class="input-tip"><span id="phone_password"></span></div>
                                </div>
                                <div class="item">
                                	<div class="item-label">确 认 密 码</div>
                                	<div class="item-info">
                                        <input type="password" style="display:none"/>
                                    	<input type="password" name="confirm_password" id="pwdRepeat" class="text" value="" autocomplete="off" />
                                    </div>
                                    <div class="input-tip"><span id="phone_confirm_password"></span></div>
                                </div>
                                <div class="item" id="phone_yz">
                                	<div class="item-label">手 机 号 码</div>
                                	<div class="item-info" style="position: relative;">
                                    	<input type="text" name="mobile_phone" id="mobile_phone" onblur="checkPhone(this.value);" class="text" value="" autocomplete="off" />
                                        <a href="javascript:void(0);" class="email_open ftx-05" ectype="meSwitch" data-type="phone" style="position: absolute; z-index: 1; right: 0; top: 35px;">或邮箱验证</a>
                                    </div>
                                    <div class="input-tip"><span id="phone_notice"></span></div>
                                </div>
                                <div class="item" id="email_yz" style="display:none;">
                                	<div class="item-label">邮 箱 验 证</div>
                                	<div class="item-info" style="position: relative;">
                                    	<input type="text" name="email" id="regName" onblur="checkEmail(this.value);" class="text" value="" autocomplete="off" />
                                        <a href="javascript:void(0);" class="email_off ftx-05" ectype="meSwitch" data-type="email" style="position: absolute; z-index: 1; right: 0; top: 35px;">或手机验证</a>
                                    </div>
                                    <div class="input-tip"><span id="email_notice"></span></div>
                                </div>
                                
								<div class="item" id="code_mobile">
	                                <div class="item-label">短信验证码</div>
	                                <div class="item-info">
	                                    <input type="text" name="send_code" id="send_code" class="text text-2" value="" autocomplete="off">
	                                    <a href="javascript:sendChangeEmail(1);" id="zemail" class="sms-btn">获取验证码</a>
	                                </div>
	                                <div class="input-tip"></div>
	                            </div>

								<div class="item" id="code_email" style="display:none;">
	                                <div class="item-label">邮箱验证码</div>
	                                <div class="item-info">
	                                    <input type="text" name="send_code" id="send_code" class="text text-2" value="" autocomplete="off">
	                                    <a href="javascript:sendChangeEmail(1);" id="zemail" class="sms-btn">获取验证码</a>
	                                </div>
	                                <div class="input-tip"></div>
	                            </div>




                                                                                                                                                                                                
																                                <div class="item item2">
                                	<div class="item-checkbox">
                                        <input type="checkbox" id="clause2" class="ui-solid-checkbox" checked="checked" value="1" name="mobileagreement">
                                        <label class="ui-solid-label" for="clause2">我已阅读并同意<a href="#" class="ftx-05" target="_blank">《用户注册协议》</a></label>
                                    </div>
                                	<div class="input-tip"><span id="mobileagreement"></span></div>
                                </div>
                                <div class="item item2 item-button">
									<input type="hidden" name="flag" id="flag" value='register' />
									<input name="register_type" type="hidden" value="1" />
									<input type="hidden" name="seccode" id="seccode" value="" />
									<input name="act" type="hidden" value="act_register" >
									<input name="register_mode" type="hidden" value="1" >
									<input id="phone_code_callback" type="hidden" value="0" >
									<input id="phone_captcha_verification" type="hidden" value="" />
									<input id="phone_verification" type="hidden" value="0" />
									<input id="email_verification" type="hidden" value="0" />
									<input id="enabled_captcha" type="hidden" value="" />
									<input type="submit" id="registsubmit" name="Submit" maxlength="8" class="btn sc-redBg-btn" value="立即注册"/>
                                </div>
                            </form>
                    	</div>            
                    </div>
                </div>
            </div>
        </div>
	</div>
	<script type="text/javascript">
    $("input[name='sel_question']").val('');
    $("#seccode").val();
    </script>


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
	var loginType = 'login1', 
		regType = 'reg1';

	if ( dataType === loginType || dataType === regType ){
		// 购物车
		$('.tit').remove();
		$('.button-icon').remove();
	}

});

</script>   


<script type="text/javascript" src="/static/index/js/scroll_city.js"></script>
<script type="text/javascript" src="/static/index/js/user.js"></script>
<!-- <script type="text/javascript" src="/static/index/js/user_register.js"></script> -->
<script type="text/javascript" src="/static/index/js/sms.js"></script>
<script type="text/javascript" src="/static/index/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/static/index/js/utils.js"></script>
<script type="text/javascript" src="/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/static/index/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript">



$(function(){


	if(document.getElementById("seccode")){
		$("#seccode").val(0);
	}
	
		
		//邮箱验证和手机验证切换
	$("*[ectype='meSwitch']").on("click",function(){
		var type = $(this).data("type");
		
		if(type == "phone"){
			$("#email_yz,#code_email").show(); //邮箱验证 邮箱号和邮箱验证码显示
			$("#phone_yz,#code_mobile").hide(); //邮箱验证 手机号码和短信隐藏
			
			$("input[name='register_type']").val(0); //邮箱验证标识
			$("input[name='mobile_phone']").val(""); //手机号码清空
			$("input[name='mobile_phone'],input[name='mobile_code']").addClass("ignore"); //邮箱验证 邮箱和邮箱验证码添加验证标识
			$("input[name='email'],input[name='send_code']").removeClass("ignore"); //邮箱验证 手机号码和短信去除验证标识
		}else{
			$("#email_yz,#code_email").hide(); //手机验证 邮箱号和邮箱验证码隐藏
			$("#phone_yz,#code_mobile").show(); //手机验证 手机号码和短信显示
			
			$("input[name='register_type']").val(1); //手机注册标识
			$("input[name='mobile_phone'],input[name='mobile_code']").removeClass("ignore"); //手机验证 手机号码和短信验证标识
			$("input[name='email'],input[name='send_code']").addClass("ignore"); //手机验证 邮箱和邮箱验证码去除验证标识
		}
	});
		



	// if(document.getElementById("seccode")){
	// 	$("#seccode").val(0);
	// }
	
	// $("form[name='formUser'] :input[name='register_type']").val(1);
	
	// //验证码切换
	// $(".changeNextone").click(function(){
	// 	$("#captcha_img").attr('src', 'captcha.php?'+Math.random());
	// });
	// $(".changeNexttwo").click(function(){
	// 	$("#authcode_img").attr('src', 'captcha.php?'+Math.random());
	// });
	
	// var is_passwd_questions = $("form[name='getPassword'] :input[name='is_passwd_questions']").val();
	
	// if(typeof(is_passwd_questions) == 'undefined'){
	// 	$("#form_getPassword1").hide();
	// 	$("#form_getPassword2").hide();
	// 	$("#form_getPassword1").siblings().css({'width':'50%'});
	// }
	
	// // $(".email_open").click(function(){
	// // 	$("#email_yz").show();
	// // 	$(this).parent().hide();
	// // 	$("#email_yz").find(".tx_rm").show();
	// // });
	
	// // $(".email_off").click(function(){
	// // 	$("#email_yz").hide();
	// // 	$(this).parent().hide();
	// // 	$("#phone_yz").find(".tx_rm").show();
	// // });
	
	// $(".email_open").click(function(){
	// 	var email = $("#regName").val();
		
	// 	if(email){
	// 		checkEmail(email);
	// 	}else{
	// 		$("#phone_notice").html('');
	// 		$("#code_notice").html('');
	// 		$("#phone_verification").val(0);
	// 	}
		
	// 	$("#mobile_phone").val("");
	// 	$("#mobile_phone").hide();
	// 	$("#email_yz").show();
	// 	$("#email_yz").find(".tx_rm").show();
		
	// 	$("#phone_yz").hide();
	// 	$("#code_mobile").hide();
	// 	$("#code_email").show();
		
	// 	$("form[name='formUser'] :input[name='register_type']").val(0);
	// 	$("#registsubmit").attr("disabled", false);
	// });
	
	// $(".email_off").click(function(){
	// 	var mobile_phone = $("#mobile_phone").val();
		
	// 	if(mobile_phone){
	// 		checkPhone(mobile_phone);
	// 	}else{
	// 		$("#email_notice").html('');
	// 		$("#email_verification").val(0);
	// 	}
		
	// 	$("#regName").val("");
	// 	$("#regName").hide();
	// 	$("#email_yz").hide();
	// 	$("#phone_yz").find(".tx_rm").show();
		
	// 	$("#phone_yz").show();
	// 	$("#code_mobile").show();
	// 	$("#code_email").hide();
		
	// 	$("form[name='formUser'] :input[name='register_type']").val(1);
	// 	$("#registsubmit").attr("disabled", false);
	// });
	
	
	$.divselect("#divselect","#passwd_quesetion");
	$.divselect("#divselect2","#passwd_quesetion2");
	

});
</script>
</body>
</html>
