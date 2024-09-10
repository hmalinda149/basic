<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;

        }
        .table_deg{
            border: 2px solid greenyellow;
        }
        th{
            background-color: rgb(94, 95, 95);
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }
        td{
            border: 1px solid skyblue;
            text-align: center;
            color: rgb(24, 24, 24);
        }


        .img_edit{

            height: 100px;
             width: 100px;

        }
        h1{
            color: white;
            font-size: 35px!important;

        }


    </style>
</head>
<body>

    @include('admin.navbar')


    <div class="div_deg">
        <table class="table_deg">
            <tr>
                <th>name</th>
                <th>address</th>
                <th>age</th>
                <th>phone</th>
                <th>email</th>
                <th>gender</th>
                <th>image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>



            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <img src="" alt="" class="img_edit" >
                </td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger" onclick="return confirm('Are you sure to delete this ?')">
                        Delete
                    </a>
                </td>

            </tr>




        </table>

    </div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
