<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css');

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid blue;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar');

        @include('admin.header');
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>


                @endif
                <div class="div_center">
                    <div class="container">
                        <h2 class="h2_font">Add Branches</h2>
                        <form action="{{url('/add_branches')}}" method="POST">

                            @csrf

                            <input class="input_color" type="text" name="branch_name" placeholder="Enter Branch Name">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Branch">
                        </form>
                    </div>
                    <table class="center">
                        <tr>
                            <td>Branch Name</td>
                            <td>Action</td>
                        </tr>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->branch_name}}</td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete this Branch record?')" class="btn btn-danger" href="{{url('delete_branches',$data->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        @include('admin.script');
</body>

</html>