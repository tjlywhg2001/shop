<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"B:\aaaweb\shop\public/../application/admin\view\category\list.html";i:1557621091;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1557621091;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1557621091;s:54:"B:\aaaweb\shop\application\admin\view\common\left.html";i:1557629004;s:56:"B:\aaaweb\shop\application\admin\view\common\footer.html";i:1557621091;}*/ ?>
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
                        <li class="active">用户管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<form action="" method="post">                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('Category/add'); ?>'"> <i class="fa fa-plus"></i> 添加分类
</button>
<button type="submit" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"> <i class="fa fa-plus"></i> 分类排序
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr styl>
                                <th class="text-center">栏目ID</th>
                                <th class="text-center">栏目名称</th>
                                <th class="text-center">栏目分类</th>
                                <th class="text-center">栏目关键词</th>
                                <th class="text-center">栏目描述</th>
                                <th class="text-center">排序</th>
                                <th class="text-center">显示导航</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        
                        <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
                        <tbody>
                                <tr>
                                <td align="center" width="5%"><?php echo $category['cate_id']; ?></td>
                                <td align="+center" width="12%">
<!--                                     <?php if($category['cate_pid'] != 0): ?>
                                     |
                                    <?php endif; ?>
 -->                                    <?php echo str_repeat('◆',$category['lever']*4).'&nbsp;' ?>
                                    <?php echo $category['cate_name']; ?>
                                    
                                </td>
                                <td align="center" width="5%">
                                <?php if($category['cate_type'] == 1): ?>
                                    系统分类
                                <?php elseif($category['cate_type'] == 2): ?>
                                    帮助分类
                                <?php elseif($category['cate_type'] == 3): ?>
                                    网店帮助
                                <?php elseif($category['cate_type'] == 4): ?>
                                    网店信息
                                <?php elseif($category['cate_type'] == 5): ?>
                                    普通分类
                                <?php endif; ?>

                                </td>
                                <td align="center" width="10%"><?php echo $category['cate_keywords']; ?></td>
                                <td align="+center" width="42%"><?php echo cut_str($category['cate_description'] ,30); ?></td>
                                <td align="center" width="4%">
                                    <input type="text" name="cate_sort[<?php echo $category['cate_id']; ?>]" value="<?php echo $category['cate_sort']; ?>" style="width: 30px; text-align: center;" />
                                </td>
                               <td align="center" width="10%">
                                
                                <?php if($category['cate_shownav'] != 0): ?>
                                    显示
                                <?php else: ?>
                                    隐藏
                                <?php endif; ?>

                                </td>
                                <td align="center" width="12%">
                                    <a href="<?php echo url('edit',array('cate_id'=>$category['cate_id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <?php if(!in_array(($category['cate_id']), explode(',',"1,2,3"))): ?>
                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('cate_id'=>$category['cate_id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                    <?php else: ?>
                                    <a href="#" disabled="disabled" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</form>
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