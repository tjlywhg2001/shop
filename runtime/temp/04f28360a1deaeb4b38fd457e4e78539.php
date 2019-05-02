<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"B:\aaaweb\shop\public/../application/admin\view\commodity\edit.html";i:1556781179;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1556760451;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1556760451;s:54:"B:\aaaweb\shop\application\admin\view\common\left.html";i:1556760451;s:56:"B:\aaaweb\shop\application\admin\view\common\footer.html";i:1556760451;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/style/weather-icons.css" rel="stylesheet">


    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">


    <!--Beyond Scripts-->
    <script src="/static/admin/style/jquery.js"></script>
    <script src="/static/admin/style/jquery_002.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/beyond.js"></script>

    <!-- uedit -->
    <script src="/static/plus/ueditor/ueditor.config.js"></script>
    <script src="/static/plus/ueditor/ueditor.all.min.js"></script>
    <script src="/static/plus/ueditor/lang/zh-cn/zh-cn.js"></script>


    <!-- udloadify -->
<!--     <link href="/static/plus/uploadify/uploadify.css" rel="stylesheet">
 -->    <script src="/static/plus/uploadify/jquery.uploadify.js"></script>
    
</head>

<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
<!-- Page Sidebar Header-->
<div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
</div>
<!-- /Page Sidebar Header -->
<!-- Sidebar Menu -->

<ul class="nav sidebar-menu ">
    <!--Dashboard-->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">商品管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('data/index'); ?>">
                    <span class="menu-text">数据备份</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('data/importlist'); ?>">
                    <span class="menu-text">数据恢复</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('category/lst'); ?>">
                    <span class="menu-text">商品****</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('commodity/lst'); ?>">
                    <span class="menu-text">商品管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('brand/lst'); ?>">
                    <span class="menu-text">商品品牌</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('cates/lst'); ?>">
                    <span class="menu-text">商品分类</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('type/lst'); ?>">
                    <span class="menu-text">商品类型</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
<!--             <li>
                <a href="<?php echo url('config/lst'); ?>">
                    <span class="menu-text">商品回收站</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
 -->        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">会员管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('member/lst'); ?>">
                    <span class="menu-text">会员列表</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('member/add'); ?>">
                    <span class="menu-text">会员级别</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('Category/lst'); ?>">
                    <span class="menu-text">会员留言</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">栏目模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('Category/lst'); ?>">
                    <span class="menu-text">栏目管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">文章模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('arti/lst'); ?>">
                    <span class="menu-text">文章管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('arti/imglist'); ?>">
                    <span class="menu-text">图片管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">导航模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('nav/lst'); ?>">
                    <span class="menu-text">导航管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
<!--             <li>
                <a href="<?php echo url('arti/imglist'); ?>">
                    <span class="menu-text">图片管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li> -->
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">推荐位模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('recpos/lst'); ?>">
                    <span class="menu-text">推荐管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
<!--             <li>
                <a href="<?php echo url('arti/imglist'); ?>">
                    <span class="menu-text">图片管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li> -->
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">链接模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('link/lst'); ?>">
                    <span class="menu-text">链接管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">配置模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('config/configlst'); ?>">
                    <span class="menu-text">配置项</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('config/lst'); ?>">
                    <span class="menu-text">配置管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">系统</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu" style="display: block;">
            <li>
                <a href="<?php echo url('attr/lst'); ?>">
                    <span class="menu-text">商品属性管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>                        
<!--     <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">系统</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu" style="display: block;">
            <li>
                <a href="">
                    <span class="menu-text">用户管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="menu-text">角色管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="menu-text">权限列表</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>                        
 --></ul>
<!-- /Sidebar Menu -->
</div>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo url('Index/index'); ?>">系统</a>
                        </li>
                                            <li>
                            <a href="<?php echo url('commodity/lst'); ?>">商品管理</a>
                        </li>
                        <li class="active">修改商品</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
<!--             <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">配置项</span>
            </div>
 -->            <!-- 配置列表开始 -->
            <div class="widget-body">

                <div class="docs-example">
                    <ul class="nav nav-tabs tabs-flat">
                        <li class="active"><a href="#info-tab" data-toggle="tab">基本信息</a></li>
                        <li class=""><a href="#address-tab1" data-toggle="tab">描述信息</a></li>
                        <li class=""><a href="#address-tab2" data-toggle="tab">会员价格</a></li>
                        <li class=""><a href="#comm_attrlist" data-toggle="tab">商品属性</a></li>
                        <li class=""><a href="#address-tab4" data-toggle="tab">商品相册</a></li>
                     </ul>

                    <form id="accountForm" method="post" class="form-horizontal bv-form" enctype="multipart/form-data">
                        <input type="hidden" id="" name="commodity_id" value="<?php echo $commedit['commodity_id']; ?>" />
                        <input type="hidden" id="" name="commodity_ogthumb" value="<?php echo $commedit['commodity_ogthumb']; ?>" />
                        <input type="hidden" id="" name="commodity_smthumb" value="<?php echo $commedit['commodity_smthumb']; ?>" />
                        <input type="hidden" id="" name="commodity_midthumb" value="<?php echo $commedit['commodity_midthumb']; ?>" />
                        <input type="hidden" id="" name="commodity_bigthumb" value="<?php echo $commedit['commodity_bigthumb']; ?>" />
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;">
                        </button>
                        <!-- 商品信息开始 -->
                        <div class="tab-content tabs-flat">
                            <div class="tab-pane active" id="info-tab">



                                <!-- 基本信息 -->
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="username" placeholder="" name="commodity_name" type="text" value="<?php echo $commedit['commodity_name']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>


                                <!-- 推荐位 -->
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right" style="padding: 0;">推荐位</label>
                                    <div class="col-sm-6">
                                        <?php if(is_array($recposlist) || $recposlist instanceof \think\Collection || $recposlist instanceof \think\Paginator): $i = 0; $__LIST__ = $recposlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recpos): $mod = ($i % 2 );++$i;?>
                                        <div class="" style="float:left; padding-right: 30px;">
                                            <label>
                                                <?php 
                                                    if (in_array($recpos['rec_id'],$recposCommlist)){
                                                        $checked = 'checked="checked"';
                                                    } else {
                                                        $checked = '';
                                                    }
                                                ?>
                                                <input <?php echo $checked; ?> class="colored-blue" value="<?php echo $recpos['rec_id']; ?>" name="recposs[]" type="checkbox" >
                                                <span class="text"><?php echo $recpos['rec_name']; ?></span>
                                            </label>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>


                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">商品主图</label>
                                    <div class="col-sm-6">
                                        <input id="username" placeholder="" name="commodity_ogthumb" type="file" value="$commedit['commodity_ogthumb']">
                                        <?php if($commedit['commodity_ogthumb'] != ''): ?>
                                        <img src="/static/uploadss/<?php echo $commedit['commodity_ogthumb']; ?>" style="width: 50px;" />
                                        <?php else: ?>
                                            暂无图片
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">是否上架</label>
                                    <div class="col-sm-6">
                                        <div class="radio" style="float:left; padding-right: 10px;">
                                            <label>
                                                <input class="inverted colored-blue" value="1" name="commodity_on_sale" type="radio"
                                                <?php if($commedit['commodity_on_sale'] == 1): ?>
                                                    checked="checked"
                                                <?php endif; ?>>
                                                    
                                                <span class="text">上架</span>
                                            </label>
                                        </div>
                                        <div class="radio" style="float:left">
                                            <label>
                                                <input class="inverted colored-blue" value="0" name="commodity_on_sale" type="radio"
                                                <?php if($commedit['commodity_on_sale'] == 0): ?>
                                                    checked="checked"
                                                <?php endif; ?>>
                                                <span class="text">下架</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                    <div class="col-sm-6">
                                        <select name="cates_id">
                                            <option value="">请选择</option>
                                            <?php if(is_array($cateslist) || $cateslist instanceof \think\Collection || $cateslist instanceof \think\Paginator): $i = 0; $__LIST__ = $cateslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catess): $mod = ($i % 2 );++$i;?>
                                            <option <?php if($catess['cates_id'] == $catess['cates_pid']): ?> disabled="disabled" <?php endif; ?> value="<?php echo $catess['cates_id']; ?>"
                                            <?php if($commedit['cates_id'] == $catess['cates_id']): ?>
                                                selected="selected"
                                            <?php endif; ?>
                                            >
                                            
                                             <?php if($catess['cates_pid'] != 0): ?>
                                             |
                                             <?php endif; ?>
                                             <?php echo str_repeat('-',$catess['lever']*5); ?><?php echo $catess['cates_name']; ?>
                                            </option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>



                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">所属品牌</label>
                                    <div class="col-sm-6">
                                        <select name="brand_id">
                                            <option value="">请选择</option>
                                            <?php if(is_array($brandlist) || $brandlist instanceof \think\Collection || $brandlist instanceof \think\Paginator): $i = 0; $__LIST__ = $brandlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brands): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $brands['brand_id']; ?>"
                                            <?php if($commedit['brand_id'] == $brands['brand_id']): ?>
                                                selected="selected" 
                                            <?php endif; ?>
                                            >
                                            <?php echo $brands['brand_name']; ?>
                                            </option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>



                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">市场价</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="username" placeholder="" name="commodity_market_price" type="text" value="<?php echo $commedit['commodity_market_price']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>



                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">本店价</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="username" placeholder="" name="commodity_shop_price" type="text" value="<?php echo $commedit['commodity_shop_price']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>



                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">重量</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="username" name="commodity_weight" type="text" style="display: inline-block;width: 50%;" value="<?php echo $commedit['commodity_weight']; ?>">
                                        <select name="commodity_weight_unit" style="display: inline; width: 100px">
                                            <option value="">请选择</option>
                                            <option value="kg"
                                            <?php if($commedit['commodity_weight_unit'] == 'kg'): ?>
                                                selected="selected"
                                            <?php endif; ?>
                                            >kg</option>
                                            <option value="g"
                                            <?php if($commedit['commodity_weight_unit'] == 'g'): ?>
                                                selected="selected"
                                            <?php endif; ?>
                                            >g</option>
                                        </select>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                            </div>



                            <div class="tab-pane" id="address-tab1">
                                <!-- 描述信息 -->
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <textarea id="content" name="commodity_description" type="text"><?php echo $commedit['commodity_description']; ?></textarea>
                                    </div>
                                    <p class="help-block col-sm-4 red"></p>
                                </div>

                            </div>


                             <div class="tab-pane" id="address-tab2">
                                <!-- 会员价格 -->
                            <?php if(is_array($mblevellist) || $mblevellist instanceof \think\Collection || $mblevellist instanceof \think\Paginator): $i = 0; $__LIST__ = $mblevellist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level): $mod = ($i % 2 );++$i;?>
                                
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $level['level_name']; ?></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="username" placeholder="" name="mls[<?php echo $level['level_id']; ?>]" type="text"
                                        value="<?php if (isset($mblevelarr[$level['level_id']]['price_mpprice'])) { echo $mblevelarr[$level['level_id']]['price_mpprice']; } else { echo ''; } ?>"
                                        />
                                    </div>
                                </div>

                            <?php endforeach; endif; else: echo "" ;endif; ?>


                            </div>




                
                            <div class="tab-pane" id="comm_attrlist">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">商品类型</label>
                                    <div class="col-sm-6">
                                        <select name="type_id" disabled="disabled">
                                            <option value="">请选择</option>
                                            <?php if(is_array($attrlists) || $attrlists instanceof \think\Collection || $attrlists instanceof \think\Paginator): $i = 0; $__LIST__ = $attrlists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attrr): $mod = ($i % 2 );++$i;?>
                                                <option <?php if($commedit['type_id'] == $attrr['type_id']): ?> selected="selected" <?php endif; ?> value="<?php echo $attrr['type_id']; ?>"><?php echo $attrr['type_name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group attrxx">
                                <?php foreach( $typeedit as $k => $v):if($v['attr_type'] == 1): 
                                                        $attrValue = explode(",",$v['attr_values']);
                                                    foreach( $commattreditArr[$v['attr_id']] as $k1 => $v1 ):?>
                                                        <div class='lists'>
                                                            <div class='form-group' value="<?php echo $v1['commattr_id']; ?>">
                                                                <label for='username' class='col-sm-2 control-label no-padding-right'><?php echo $v['attr_name']; ?></label>
                                                                <div class='col-sm-6'>
                                                                    <a href='####' onClick='adddiv(this);' style='display:inline-block; margin-right:20px ; width: 40px; height:35px; border-radius: 2px; line-height:30px;  background:#eee; color:#906; text-align:center; font-size:18px; '><?php if ( $k1 == 0 ) echo '[+]'; else echo '[-]'; ?></a>
                                                                    <select name="old_comm_attr[<?php echo $v['attr_id'];?>][]" style='display: inline-block; margin-right: 20px;'>
                                                                        <option value=''>请选择</option>
                                                                        <?php foreach( $attrValue as $k2 => $v2 ):?>
                                                                            <option <?php if($v2 == $v1['commattr_value']): ?> selected="selected" <?php endif; ?> value='<?php echo $v2; ?>'><?php echo $v2; ?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                    <input class='form-control' id='username' placeholder='' name='old_commattr_attrprice[<?php echo $v1["commattr_id"]?>]' type='text' style='display: inline-block;width: 50%;' value='<?php echo $v1['commattr_attrprice']; ?>' />
                                                                </div>
                                                            </div>
                                                        </div>
                                                           
                                        <?php endforeach;else: if( !$v['attr_values']):?>
                                                        <div class='lists'>
                                                            <div class='form-group'>
                                                                <label for='username' class='col-sm-2 control-label no-padding-right'><?php echo $v['attr_name']; ?></label>
                                                                <div class='col-sm-6'>
                                                                    <input name="old_comm_attr[<?php echo $v['attr_id'];?>]" class='form-control' id='username' placeholder='' type='text' style='display: inline-block;width: 70%;' value="<?php echo $commattreditArr[$v['attr_id']][0]['commattr_value']; ?>" />
                                                                    <input type="hidden" name="old_commattr_attrprice[<?php echo $commattreditArr[$v['attr_id']][0]['commattr_id'] ?>]" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php else:
                                                            $attrValue = explode(",",$v['attr_values']);
                                                        ?>
                                                            <div class='lists'>
                                                                <div class='form-group' value="<?php echo $v1['commattr_id']; ?>">
                                                                    <label for='username' class='col-sm-2 control-label no-padding-right'><?php echo $v['attr_name']; ?></label>
                                                                    <div class='col-sm-6'>
<!--                                                                         <a href='####' onClick='adddiv(this);' style='display:inline-block; margin-right:20px ; width: 40px; height:35px; border-radius: 2px; line-height:30px;  background:#eee; color:#906; text-align:center; font-size:18px; '><?php if ( $k1 == 0 ) echo '[+]'; else echo '[-]'; ?></a>
 -->                                                                        <select name="old_comm_attr[<?php echo $v['attr_id'];?>]" style='display: inline-block; margin-right: 20px;'>
                                                                            <option value=''>请选择</option>
                                                                            <?php foreach( $attrValue as $k2 => $v2 ):?>
                                                                                <option <?php if($v2 == $commattreditArr[$v['attr_id']][0]['commattr_value']): ?> selected="selected" <?php endif; ?> value='<?php echo $v2; ?>'><?php echo $v2; ?></option>
                                                                            <?php endforeach;?>
                                                                        </select>
                                                                         <input type="hidden" name="old_commattr_attrprice[<?php echo $commattreditArr[$v['attr_id']][0]['commattr_id'] ?>]" />
                                                                   </div>
                                                                </div>
                                                            </div>
                                                    <?php endif;endif; endforeach;?>


                                </div>

                            </div>





                            <div class="tab-pane" id="address-tab4">
                                <?php if(is_array($photoedit) || $photoedit instanceof \think\Collection || $photoedit instanceof \think\Paginator): $i = 0; $__LIST__ = $photoedit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photoedits): $mod = ($i % 2 );++$i;?>
                                <div value="<?php echo $photoedits['comm_photo_id']; ?>" class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                    <div class="col-sm-6">
                                        <a href='####' onclick='deldiv(this);' style='display:inline-block; margin-right:20px ; width: 40px; height:35px; border-radius: 2px; line-height:30px;  background:#eee; color:#906; text-align:center; font-size:18px; '>[-]</a>
                                        <input value="/static/uploadss/<?php echo $photoedits['comm_photo_sm']; ?>" class="" id="username" placeholder="" name="comm_photo[]" type="file" style='display: inline-block;width: 70%;'>
                                    <img src="/static/uploadss/<?php echo $photoedits['comm_photo_sm']; ?>" alt="">
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                    <div class="col-sm-6">
                                        <a href='####' onclick='adddiv(this);' style='display:inline-block; margin-right:20px ; width: 40px; height:35px; border-radius: 2px; line-height:30px;  background:#eee; color:#906; text-align:center; font-size:18px; '>[+]</a>
                                        <input class="" id="username" placeholder="" name="comm_photo[]" type="file" style='display: inline-block;width: 70%;'>
                                    </div>
                                </div>



                            </div>


                        </div>


                        <!-- 商品信息结束 -->
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                                <button type="submit" class="btn btn-blue">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
                    <style>
                    a{bo}
                </style>

            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    
	<script type="text/javascript">

	    //实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	    UE.getEditor('content',{initialFrameWidth:795,initialFrameHeight:300,});
    


	</script>
    <script>
        $("select[name=type_id]").change(function(){
            var attr_typeid = $(this).val();
            $.ajax({
                type:"POST",
                url:"<?php echo url('attr/ajaxattrs'); ?>",
                data:{type_id:attr_typeid},
                dataType:'json',
                success:function(data){
                    var html = '';

                    $(data).each(function(k,v){
                        if (v.attr_type == 1) {
                            // 单选处理
                            html += "<div class='lists'>";
                            html += "<div class='form-group'>"
                            html += "<label for='username' class='col-sm-2 control-label no-padding-right'>"+ v.attr_name +"</label>";
                            var attrvaluesarr = v.attr_values.split(',');
                            html += "<div class='col-sm-6'>";
                            html += "<a href='####' onClick='adddiv(this);' style='display:inline-block; margin-right:20px ; width: 40px; height:35px; border-radius: 2px; line-height:30px;  background:#eee; color:#906; text-align:center; font-size:18px; '>[+]</a>";
                            html += "<select name='comm_attr["+ v.attr_id +"][]' style='display: inline-block; margin-right: 20px;'>";
                            html += "<option value=''>请选择</option>";
                            for (var i =0 ; i < attrvaluesarr.length; i++) {
                                html +="<option value='"+ attrvaluesarr[i] +"'>"+ attrvaluesarr[i] +"</option>";
                            }
                            html +="</select>";
                            html +="<input class='form-control' id='username' placeholder='' name='commattr_attrprice[]' type='text' style='display: inline-block;width: 50%;' value='价格'' />";
                            html +="</div></div></div>";
                        } else {
                            // 唯一处理
                            if (v.attr_values){
                                html += "<div class='lists'>";
                                html += "<div class='form-group'>"
                                html += "<label for='username' class='col-sm-2 control-label no-padding-right'>"+ v.attr_name +"</label>";
                                var attrvaluesarr = v.attr_values.split(',');
                                html += "<div class='col-sm-6'>";
                                html += "<a href='####' style='display:inline-block; margin-right:20px ; width: 40px; height:35px; border-radius: 2px; line-height:30px;  background:#eee; color:#906; text-align:center; font-size:18px; '>[+]</a>";
                                html += "<select name='comm_attr["+ v.attr_id +"]' style='display: inline-block; margin-right: 20px;'>";
                                html += "<option value=''>请选择</option>";
                                for (var i =0 ; i < attrvaluesarr.length ; i++) {
                                    html +="<option value='"+ attrvaluesarr[i] +"'>"+ attrvaluesarr[i] +"</option>";
                                }
                                html +="</select>";
                                html +="</div></div></div>";
                            } else {

                                html += "<div class='lists'>";
                                html += "<div class='form-group'>"
                                html += "<label for='username' class='col-sm-2 control-label no-padding-right'>"+ v.attr_name +"</label>";
                                html += "<div class='col-sm-6'>";
                                html +="<input class='form-control' id='username' placeholder='' name='comm_attr["+ v.attr_id +"]' type='text' style='display: inline-block;width: 70%;' />";
                                html +="</div></div></div>";
                            }
                        }
                    })
                    $('.attrxx').html(html);
                }
            })
        })
        function adddiv(s){
            var divs = $(s).parent().parent();
            var divleng = $(s).siblings('select').children('option').length-1;
            if ($(s).html() == '[+]') {
                var newdiv = divs.clone();
                newdiv.find('a').html('[-]');

                if ( newdiv.children().is('input') ){
                    replaces( newdiv.find('input[type="text"]') );
                }
                replaces( newdiv.find('select') );

                

                divs.after(newdiv);
                var divtext = $(s).parent().parent().parent().children('.form-group').length;
                if ( divtext == divleng ) {
                    $(s).eq(0).html('[-]');
                }
            } else {
                var divsVal = divs.attr('value');
                 if (confirm('确定要删除商品图片吗？')){
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo url("CommoAttr/ajaxdelAttr"); ?>',
                        data: {
                            value: divsVal
                        },
                        success: function(data){
                            if ( data == 1 ){
                                divs.parent().children().eq(0).children('.col-sm-6').children('a').html('[+]');
                                divs.remove();
                            } else {
                                alert('删除失败！')
                            }
                        },
                        error: function(){
                            alert('您的网页遭病毒进攻了！请刷新！');
                        }
                    })
                }
            }
        }

        function replaces( div ){
            var oldname = div.attr('name');
            var newname = oldname.replace('old_','');
            div.attr('name',newname);
        }


        function deldiv(s){
            // 定义这个div的父级div
            var divs = $(s).parent().parent();
            // 定义要获取值的指向选择器
            var divsId = divs.attr('value');
            if (confirm('确定要删除商品图片吗？')){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo url("commodity/ajaxdelphoto"); ?>',
                    data: {
                        id: divsId
                    },
                    success: function(data){
                        if ( data == 1 ){
                            divs.remove();
                        } else {
                            alert('删除失败！')
                        }
                    },
                    error: function(){
                        alert('您的网页遭病毒进攻了！请刷新！');
                    }
                })
            }
        }

    </script>

</body></html>