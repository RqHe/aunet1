<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<!DOCTYPE html>
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
<form action="<?php echo U('addRoleHandle');;?>" method="post"/>
    <table class="table"/>

        <tr>
            <th colspan="2">添加角色</th>
        </tr>

        <tr>
            <td align="right">角色名称:</td>
            <td>
                <input type="text" name='name'/>
            </td>
        </tr>

        <tr>
            <td align="right">角色描述:</td>
            <td>
                <input type="text" name='remark'/>
            </td>
        </tr>
        <tr>
            <td align="right">是否开启:</td>
            <td>
                <input type="radio" name='status' value='1' checked='checked'/>&nbsp;开启&nbsp;
                <input type="radio" name='status' value='0'/>&nbsp;关闭
            </td>
        </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" value="保存添加"/>
        </td>
    </tr>


    </table>
</body>
</html>