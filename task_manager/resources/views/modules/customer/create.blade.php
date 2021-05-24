<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Customer</title>
</head>
<style>
    div{
        width: 400px;
        padding: 5px;
        border: 2px solid blue;
        box-shadow: 0 5px 5px 0 rgba(10, 74, 236, 0.2);
    }
    input{
        width: 300px;
        padding: 5px;
    }
</style>
<body>
<h1>Trang tao customer</h1>
<form action="store" method="post">
    @csrf
    <div>
        <table>
            <tr>
                <td>Họ và tên</td>
                <td>
                    <input type="text" name="customerName">
                </td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td>
                    <input type="text" name="phone">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>
