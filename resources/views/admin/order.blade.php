<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css');
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h1_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
        }


        .test_color {
            color: black;
            padding-bottom: 20px;
        }

        .test_color option {
            color: black;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar');

        @include('admin.header');

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div_center">
                    <h1 class="h1_font">Add Order</h2>
                </div>
                <form style="margin-left: 300px;" action="{{ url('/add_order') }}" method="POST">
                    @csrf
                    <div class="div_design">
                        <label>Sender :</label>
                        <input class="test_color" type="text" name="Sender" placeholder="who is sending?" required="">
                    </div>
                    <div class="div_design">
                        <label>Reciever :</label>
                        <input class="test_color" type="text" name="Receiver" placeholder="who will receive?" required="">
                    </div>
                    <div class="div_design">
                        <label>Receivers Phone No :</label>
                        <input class="test_color" type="number" name="receivers_phone" placeholder="enter phone number" required="">
                    </div>
                    <div class="div_design">
                        <label> Destination:</label>
                        <select class="test_color" name="destination_branch">

                            <option value="" selected="">Add destination</option>
                            <option>Dhaka</option>
                            <option>Sylhet</option>
                            <option>Chittagong</option>
                            <option>Khulna</option>
                            <option>Sunamgonj</option>
                        </select>
                    </div>
                    <div class="div_design">
                        <label>Payment Status :</label>
                        <select class="test_color" name="pstatus" required="">
                            <option value="" selected="">Add payment Status</option>

                            <option>Paid</option>
                            <option>Unpaid</option>
                        </select>

                    </div>
                    <div class="div_design">
                        <label>Delivery Status :</label>
                        <select class="test_color" name="dstatus">
                            <option value="New Delivery" selected="">New Delivery</option>
                        </select>

                    </div>
                    <div class="div_design" style="margin-left: 120px;margin-top: 30px">
                        <input type="submit" value="Add Order" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>

        @include('admin.script');
</body>

</html>