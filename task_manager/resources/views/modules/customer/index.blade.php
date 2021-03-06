<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Management</title>
</head>
<style>
    table{
        width: 100%;
        text-align: center;
        box-shadow: 0 5px 5px 0 rgba(18, 83, 212, 0.2);
    }
    th{
        background-color: #007bff;
        font-size: 20px;
        color: white;
    }
    a{
        text-decoration: none;
        margin: 0 5px;
    }
    button{
        height: 35px;
        background-color: #87d410;
        font-size: 15px;
        border: 0 solid;
        border-radius: 3px;
        margin: 10px;
    }
    button a{
        color: white;
    }
</style>
<body>
<h1>Danh sách khách hàng</h1>
<button><a href="creates">Create new Customer</a></button>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td><a href="">Tạ Minh Tuấn</a></td>
        <td>0971885813</td>
        <td>minhtuanvt89@gmail.com</td>
        <td><a href="shows">Xem</a> | <a href="{id}/edit">Sửa</a> | <a href="#">Xóa</a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Lộc Văn Khôi</td>
        <td>0971466787</td>
        <td>khoi@gmail.com</td>
        <td><a href="{id}/show">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Nguyễn Văn Trọng</td>
        <td>0975464877</td>
        <td>trong@gmail.com</td>
        <td><a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Trần Đức Duy</td>
        <td>0985446465</td>
        <td>duy@gmail.com</td>
        <td><a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Nguyễn Văn Năm</td>
        <td>0964978971</td>
        <td>nam5@gmail.com</td>
        <td><a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a></td>
    </tr>
    <tr>
        <td></td>
        <td>{{$customerName ?? ''}}</td>
        <td>{{$phone ?? ''}}</td>
        <td>{{$email ?? ''}}</td>
        <td><a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a></td>
    </tr>
    </tbody>
</table>
</body>
</html>
