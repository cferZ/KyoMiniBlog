<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<title>Admin | KyoMini Blog</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <link rel="stylesheet" href="/KyoMini/Blog/Admin/View/Public/css/bootstrap.css">
     <link rel="stylesheet" href="/KyoMini/Blog/Admin/View/Public/css/admin.css">
            <!--[if lt IE 9]>
               <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
               <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
             <![endif]-->
</head>


<body>
<?php  $db=M('Admin'); $admin=$db->where('id=1')->getField('nickname'); ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo U('/Admin');?>"><?php echo (L("_Admin_Logo_")); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo U('/Admin');?>">概览</a></li>
            <li><a href="<?php echo U('/Admin/Article/Article_add');?>">撰写</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">管理<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo U('/Admin/Article ');?>">文章</a></li>
                    <li><a href="<?php echo U('/Admin/Category');?>">分类</a></li>
                    <li><a href="<?php echo U('/Admin/Comment ');?>">评论</a></li>
                    <li><a href="<?php echo U('/Admin/Page');?>">独立页</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo U('/Admin/Menu');?>">导航</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">配置<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo U('/Admin/Settings');?>">基本配置</a></li>
                    <li><a href="<?php echo U('/Admin/Picture');?>">图片</a></li>
                    <li><a href="<?php echo U('/Admin/Template');?>">外观</a></li>
                    <li><a href="<?php echo U('/Admin/Lang');?>">语言</a></li>
                     

                    <li class="divider"></li>
                    <li><a href="<?php echo U('/Admin/Database');?>">备份</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">您好，<?php echo ($admin); ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/KyoMini">进入前台</a></li>
                    <li><a href="<?php echo U('Index/cache_del');?>">更新缓存</a></li>
                    <li id="aboutus_menu"><a href="<?php echo U('/Admin/About');?>">关于博客</a></li>
                    <li class="divider"></li>
                    <li><a href="#" data-toggle="modal" data-target="#password">修改密码</a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Index/login_out');?>">退出</a>
            </li>
        </ul>
    </div>
</nav>


  
  
  
  
  
  
  
  
  
  
  <div class="container">
  <!--内容开始-->
  
  <div class="page-header">
  <h3>评论</h3>

  </div>

  <div class="MiniBox2">
  
    <form method="post" action="/KyoMini/index.php/Admin/Comment/del">

  
  <table width="100%" border="0" class="table table-hover" id="list" >
  <tr>
    <td width="5%" id="border_top"><input type="checkbox"  id="all"></td>
    <td width="20%" id="border_top"><b>时间</b></td>
    <td width="40%"class="biaoti" id="border_top"><b>评论内容</b></td>
    <td width="10%" id="border_top"><b>提交者</b></td>
    <td width="10%" id="border_top"><b>回复</b></td>
    <td width="30%" id="border_top"><b>操作</b></td>
  </tr>
    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
  

    <td>
    
<input type="checkbox"  value="<?php echo ($vo["aid"]); ?>" name="<?php echo ($vo["aid"]); ?>">
    
    </td>
    <td><?php echo (date('Y-m-d',$vo["time"])); ?></td>
    <td class="biaoti"><?php echo ($vo["content"]); ?></td>
    <td><?php echo ($vo["couname"]); ?></td>
    <td><?php echo ($vo["respond"]); ?></td>
    <td>
     <span onclick="location.href='/KyoMini/index.php/Admin/Comment/mod/id/<?php echo ($vo["coid"]); ?>'">回复 </span>
    
      <span onclick="if(confirm('确认删除吗?'))window.location.href='/KyoMini/index.php/Admin/Comment/del/id/<?php echo ($vo["coid"]); ?>'"> 删除</span> 
    
    </td>
  </tr><?php endforeach; endif; ?>
  
  <tr>
    <td colspan="6" class="biaoti" style="padding-top:25px;
    ">
<button type="submit" class="btn btn-success">删除</button>        
      
      
     <?php echo ($page); ?>
      </td>
  </tr>
</table>
</form>
  
  
  
  
  </div>
  
  
  
  


  
  
  
  
  
  
  
  
  
  <!--内容结束-->
   <div class="footer">
        <p>&copy; 2014 <a href="#">www.kyomini.com</a> All Rights Reserved.</p>
</div>
<script src="/KyoMini/Blog/Admin/View/Public/Js/jquery-1.11.0.min.js"></script> 
<script src="/KyoMini/Blog/Admin/View/Public/Js/bootstrap.min.js"></script> 
  </div>
  
  




  
  
<script>
    $("#all").on('click', function() {
    $(this)
    .parents('table') 
    .find(':checkbox')                     
    .prop('checked', $(this).is(':checked'));
})
    </script>






















  
  
  
  
  
  
  
  
  
  
  
  
  

    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>$('#myModal').modal(options);</script>


</html>