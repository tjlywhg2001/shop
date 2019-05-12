<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"B:\aaaweb\shop\public/../application/admin\view\config\configlist.html";i:1557621091;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1557621091;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1557621091;s:54:"B:\aaaweb\shop\application\admin\view\common\left.html";i:1557629004;s:56:"B:\aaaweb\shop\application\admin\view\common\footer.html";i:1557621091;}*/ ?>
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
                    <span class="menu-text">会员留言******</span>
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
            <span class="menu-text">关联商品分类模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('catesWords/lst'); ?>">
                    <span class="menu-text">关联词汇管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('catesBrands/lst'); ?>">
                    <span class="menu-text">推广图管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
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
                            <a href="<?php echo url('config/lst'); ?>">配置管理</a>
                        </li>
                        <li class="active">配置项</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">配置项</span>
            </div>
            <!-- 配置列表开始 -->
            <div class="widget-body">

                <div class="docs-example">
                    <ul class="nav nav-tabs tabs-flat">
                        <li class="active"><a href="#info-tab" data-toggle="tab" aria-expanded="false">店铺配置</a></li>
                        <li class=""><a href="#address-tab" data-toggle="tab" aria-expanded="true">商品配置</a></li>
                    </ul>

                    <form id="accountForm" method="post" class="form-horizontal bv-form" enctype="multipart/form-data">
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;">
                        </button>
                        <div class="tab-content tabs-flat">
                            <div class="tab-pane active" id="info-tab">
                                <?php foreach ($shopconflist as $k => $confs): ?>


                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $confs['config_cname']; ?></label>
                                        <div class="col-sm-6">
                                            <?php if ($confs['config_formtype'] == 'input'): ?>
                                                <!-- 单行文本 -->
                                            <input class="form-control" id="username" placeholder="" value="<?php echo $confs['config_default']; ?>" name="<?php echo $confs['config_ename'];?>" type="text">
                                            <?php elseif ($confs['config_formtype'] == 'radio'): ?>
                                                <!-- 单选项 -->
                                            <div class="radio">
                                                <?php if($confs['config_values']):
                                                    $arr = explode(',' , $confs['config_values']);
                                                    foreach( $arr as $k1 => $v1 ):
                                                ?>
                                                <label style="padding-right: 10px;">
                                                    <input class="inverted colored-blue" id="username" value="<?php echo $v1;?>" name="<?php echo $confs['config_ename'];?>" type="radio"  <?php if($confs['config_default'] == $v1){echo 'checked="checked"';}?> >
                                                    <span class="text"><?php echo $v1; ?></span>
                                                </label>
                                                <?php endforeach; endif; ?>
                                            </div>
                                            <?php elseif ($confs['config_formtype'] == 'checked'): ?>
                                                <!-- 复选框-->
                                            <div class="checkbox">
                                                <?php if($confs['config_values']):
                                                    $arr_val = explode(',' , $confs['config_values']);
                                                    $arr_def = explode(',' , $confs['config_default']);
                                                    foreach( $arr_val as $k3 => $v3):
                                                ?>
                                                <label style="padding-right: 10px;">
                                                    <input class="form-control colored-blue" id="username" name="<?php echo $confs['config_ename'];?>[]" type="checkbox" <?php if(in_array($v3,$arr_def)){ echo 'checked="checked"';}?> value="<?php echo $v3;?>" >
                                                    <span class="text"><?php echo $v3; ?></span>
                                                </label>
                                                <?php endforeach;endif;?>
                                            </div>

                                            <?php elseif ($confs['config_formtype'] == 'textarea'): ?>
                                                <!-- 文本框 -->
                                            <textarea class="form-control" id="username" name="<?php echo $confs['config_ename'];?>" ><?php echo $confs['config_default']; ?></textarea>

                                            <?php elseif ($confs['config_formtype'] == 'select'): ?>
                                                <!-- 下拉式 -->
                                            <select class="form-control" id="username" name="<?php echo $confs['config_ename'];?>" type="radio">
                                }
<!--                                                 <option value="">请选择</option>
 -->                                                <?php if($confs['config_values']):
                                                    $arr = explode(',' , $confs['config_values']);
                                                    foreach ( $arr as $k2 => $v2 ):
                                                ?>
                                                <option <?php if($confs['config_default'] == $v2){echo 'selected="selected"';}?> value="<?php echo $v2; ?>"><?php echo $v2;?></option>
                                                <?php endforeach; endif; ?>
                                            </select>

                                            <?php elseif ($confs['config_formtype'] == 'file'): ?>
                                                <!-- 文件 -->
                                            <input id="username" name="<?php echo $confs['config_ename'];?>" type="file">

                                                <?php if($confs['config_default']): ?>
                                                    <img src="/static/uploadss/<?php echo $confs['config_default']; ?>" alt="" height="40">
                                                <?php else: ?>
                                                    <p style="line-height: 40px">暂无图片</p>
                                                <?php endif; endif; ?>

                                        </div>
                                    </div>


                                <?php endforeach; ?>

                            </div>
                            <div class="tab-pane" id="address-tab">
                                <?php foreach ($commconflist as $k => $confs): ?>


                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $confs['config_cname']; ?></label>
                                        <div class="col-sm-6">
                                            <?php if ($confs['config_formtype'] == 'input'): ?>
                                                <!-- 单行文本 -->
                                            <input class="form-control" id="username" placeholder="" value="<?php echo $confs['config_default']; ?>" name="<?php echo $confs['config_ename'];?>" type="text">
                                            <?php elseif ($confs['config_formtype'] == 'radio'): ?>
                                                <!-- 单选项 -->
                                            <div class="radio">
                                                <?php if($confs['config_values']):
                                                    $arr = explode(',' , $confs['config_values']);
                                                    foreach( $arr as $k1 => $v1 ):
                                                ?>
                                                <label style="padding-right: 10px;">
                                                    <input class="inverted colored-blue" id="username" value="<?php echo $v1;?>" name="<?php echo $confs['config_ename'];?>" type="radio"  <?php if($confs['config_default'] == $v1){echo 'checked="checked"';}?> >
                                                    <span class="text"><?php echo $v1; ?></span>
                                                </label>
                                                <?php endforeach; endif; ?>
                                            </div>
                                            <?php elseif ($confs['config_formtype'] == 'checked'): ?>
                                                <!-- 复选框-->
                                            <div class="checkbox">
                                                <?php if($confs['config_values']):
                                                    $arr_val = explode(',' , $confs['config_values']);
                                                    $arr_def = explode(',' , $confs['config_default']);
                                                    foreach( $arr_val as $k3 => $v3):
                                                ?>
                                                <label style="padding-right: 10px;">
                                                    <input class="form-control colored-blue" id="username" name="<?php echo $confs['config_ename'];?>[]" type="checkbox" <?php if(in_array($v3,$arr_def)){ echo 'checked="checked"';}?> value="<?php echo $v3;?>" >
                                                    <span class="text"><?php echo $v3; ?></span>
                                                </label>
                                                <?php endforeach;endif;?>
                                            </div>

                                            <?php elseif ($confs['config_formtype'] == 'textarea'): ?>
                                                <!-- 文本框 -->
                                            <textarea class="form-control" id="username" name="<?php echo $confs['config_ename'];?>" ><?php echo $confs['config_default']; ?></textarea>

                                            <?php elseif ($confs['config_formtype'] == 'select'): ?>
                                                <!-- 下拉式 -->
                                            <select class="form-control" id="username" name="<?php echo $confs['config_ename'];?>" type="radio">
<!--                                                 <option value="">请选择</option>
 -->                                                <?php if($confs['config_values']):
                                                    $arr = explode(',' , $confs['config_values']);
                                                    foreach ( $arr as $k2 => $v2 ):
                                                ?>
                                                <option <?php if($confs['config_default'] == $v2){echo 'selected="selected"';}?> value="<?php echo $v2; ?>"><?php echo $v2;?></option>
                                                <?php endforeach; endif; ?>
                                            </select>

                                            <?php elseif ($confs['config_formtype'] == 'file'): ?>
                                                <!-- 文件 -->
                                            <input id="username" name="<?php echo $confs['config_ename'];?>" type="file">

                                                <?php if($confs['config_default']): ?>
                                                    <img src="/static/uploadss/<?php echo $confs['config_default']; ?>" alt="" height="40">
                                                <?php else: ?>
                                                    <p style="line-height: 40px">暂无图片</p>
                                                <?php endif; endif; ?>

                                        </div>
                                    </div>


                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                                <button type="submit" class="btn btn-blue">提交配置</button>
                            </div>
                        </div>
                    </form>
                </div>
                    

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
    

</body></html>