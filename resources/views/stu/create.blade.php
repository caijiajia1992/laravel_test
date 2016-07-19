<!DOCTYPE html>
<html>
<head>
    <title>数据库的操作</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            @include('stu.header')
            <form method="post" action="/stu">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">姓名:</label>
                    <input type="text" name="name" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">年龄:</label>
                    <input type="text" name="age" class="form-control "  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">性别:</label>
                    <input type="text" id=""  class="form-control" name="sex">
                </div>
                <div class="checkbox">
                    <label for="exampleInputFile">班级:</label>
                    <input type="text" id=""  class="form-control" name="classid">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
