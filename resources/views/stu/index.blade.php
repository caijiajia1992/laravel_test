<!DOCTYPE html>
<html>
<head>
    <title>数据库的操作</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script>
        function dodel(id) {
            if(confirm("确定删除吗?")) {
                var form = document.myform;
                form.action =  "/stu/"+id;
                form.submit();
            }
        }
    </script>
</head>
<body>
<form action="" method="post" name="myform" style="display:none;">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="delete">
</form>
<div class="container">
    <div class="content">
        <div class="title">
            @include('stu.header')
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>班级</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                {{--<tr>--}}
                    {{--<th scope="row">1</th>--}}
                    {{--<td>Mark</td>--}}
                    {{--<td>Otto</td>--}}
                    {{--<td>@mdo</td>--}}
                {{--</tr>--}}
                @foreach($list as $stu)
                    <tr>
                        <td>{{ $stu->id }}</td>
                        <td>{{ $stu->name }}</td>
                        <td>{{ $stu->age }}</td>
                        <td>{{ $stu->sex }}</td>
                        <td>{{ $stu->classid }}</td>
                        <td><a href="javascript:dodel({{ $stu->id }})">删除</a> <a href="/stu/{{ $stu->id }}/edit">修改</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
