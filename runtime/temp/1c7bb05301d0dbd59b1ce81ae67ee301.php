<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"F:\www\shop\public/../application/admin\view\data\importlist.html";i:1557059757;s:52:"F:\www\shop\application\admin\view\common\_meta.html";i:1557059757;s:50:"F:\www\shop\application\admin\view\common\top.html";i:1557059757;s:51:"F:\www\shop\application\admin\view\common\left.html";i:1557059757;s:53:"F:\www\shop\application\admin\view\common\footer.html";i:1557059757;}*/ ?>
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

<script type="text/javascript" src="/static/admin/layui/layui.js"></script>


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
            <span class="menu-text">关联商品分类模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('catesWords/lst'); ?>">
                    <span class="menu-text">关联管理</span>
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
                            <a href="">商品管理</a>
                        </li>
                        <li class="active">数据恢复</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">



<!-- <div class="layui-form">
 -->   
    <a class="btn btn-sm btn-azure btn-addon" href="javascript:;" autocomplete="off"> 数据库还原  </a>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="flip-scroll">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>

                                    <th class="text-center">数据库名称</th>
                                    <th class="text-center">卷数</th>
                                    <th class="text-center">压缩</th>
                                    <th class="text-center">数据大小</th>
                                    <th class="text-center">备份时间</th>
                                    <th class="text-center">状态</th>
                                    <th class="text-center">操作</th>
                                </tr> 
                            </thead>
                            <tbody>
                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$data): ?>   
                                <tr>
                                    <td class="text-center"><?php echo date('Ymd-His',$data['time']); ?></td>
                                    <td class="text-center"><?php echo $data['part']; ?></td>
                                    <td class="text-center"><?php echo $data['compress']; ?></td>
                                    <td class="text-center"><?php echo format_bytes($data['size']); ?></td>
                                    <td class="text-center"><?php echo $key; ?></td>
                                    <td class="status text-center" style="width: 200px;">-</td>
                                    <td class="action text-center">
                                        <a class="btn btn-primary btn-sm shiny db-import" href="<?php echo url('data/import',['time'=>$data['time']]); ?>">还原</a>&nbsp;
                                        <a class="btn btn-danger btn-sm shiny" href="<?php echo url('data/del',['time'=>$data['time']]); ?>">删除</a>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                            <script>
                                layui.use(['jquery','layer'],function(){
                                      window.$ = layui.$;
                                      var layer = layui.layer;


                                      $(".db-import").click(function(){
                                            var self = this, status = ".";

                                            $(this).parent().prevAll('.status').html("").html('等待还原');

                                            $.get(self.href, success, "json");
                                            window.onbeforeunload = function(){ return "正在还原数据库，请不要关闭！" }
                                            return false;
                                        
                                            function success(data){

                                                if(data.code==1){

                                                    $(self).parent().prev().text(data.msg);

                                                    if(data.data.part){
                                                        $.get(self.href, 
                                                            {"part" : data.data.part, "start" : data.data.start}, 
                                                            success, 
                                                            "json"
                                                        );
                                                        
                                                    }  else {
                                                        layer.alert(data.msg);
                                                        //window.onbeforeunload = function(){ return null; }
                                                    }
                                                } else {
                                                    layer.alert(data.msg);
                                                }
                                            }
                                        });

                                    //   $(".db-import").click(function(){
                                    //     // console.log($(this).parents().find(".status").html() );//正常
                                    //     // console.log($(this).parent().prevAll('.status').html() );
                                    //     var statusem=$(this).parent().prevAll('.status');
                                    //     $(this).parent().prevAll('.status').html("").html('等待还原');
                                    //     thisobj=this;
                                    //     $.post(this.href, function(data){
                                         
                                    //       if(data.code==1){
                                    //         // statusem.text(""); // 清空数据
                                    //         // statusem.append('data'); 
                                    //         // statusem.text("").append('132');
                                    //         // $(this).parent().prevAll('.status').html("").html(data.msg);//error ：异常原因无法获取当前节点
                                    //         statusem.html(data.msg);
                                    //         getdbimport(thisobj,data.data);
                                    //       }
                                    //     }, "json");
                                    //     return false;
                                    // });

                                    });

                                </script>

                        </table>

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