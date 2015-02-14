<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<dl>
    <dt>文件上传</dt>
    <dd><a href="<?php echo U('/Admin/Upload/index');?>">上传附件</a></dd>
</dl>
<dl>
    <dt>属性管理</dt>
    <dd><a href="<?php echo U('/Admin/Attribute/index');?>">属性列表</a></dd>
    <dd><a href="<?php echo U('/Admin/Attribute/addAttr');?>">添加属性</a></dd>
</dl>
<dl>
    <dt>文章管理</dt>
    <dd><a href="<?php echo U('/Home/Index/Blog');?>">文章列表</a></dd>
    <dd><a href="<?php echo U('/Home/Index/index');;?>">添加文章</a></dd>
    <dd><a href="<?php echo U('/Home/Index/trash');;?>">回收站</a></dd>
</dl>
<dl>
    <dt>权限管理</dt>
    <dd><a href="<?php echo U('/Admin/Rbac/role');;?>">角色列表</a></dd>
    <dd><a href="<?php echo U('/Admin/Rbac/user');;?>">用户列表</a></dd>
    <dd><a href="<?php echo U('/Admin/Rbac/node');;?>">节点列表</a></dd>
    <dd><a href="<?php echo U('/Admin/Rbac/addRole');;?>">添加角色</a></dd>
    <dd><a href="<?php echo U('/Admin/Rbac/addNode');;?>">添加节点</a></dd>
    <dd><a href="<?php echo U('/Admin/Rbac/addUser');;?>">添加用户</a></dd>
    <dd><a href="<?php echo U('/Admin/Rbac/logout');;?>">退出登录</a></dd>
</dl>



<dl>
    <dt>分类管理</dt>
    <dd><a href="<?php echo U('/Admin/Category/addCate');;?>">添加分类</a></dd>
    <dd><a href="<?php echo U('/Admin/Category/index');;?>">分类列表</a></dd>
</dl>


</body>
</html>