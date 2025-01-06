<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
           
        }
        .receipt-container {
            width: 100%;
                /*border: 1px solid black;*/
    padding: 20px 0px;
        }
        .header {
            margin-top: -2rem;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: red;
        }
        .details {
            margin: 20px 0;
        }
        .details p {
            margin: 1px 0;
        }
        .table-container {
            width: 100%;
            border-collapse: collapse;
        }
        .table-container, .table-container th, .table-container td {
            border: 1px solid black;
        }
        .table-container th, .table-container td {
            padding: 8px;
            text-align: left;
        }
        .footer {
            margin-top: 20px;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer div {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .footer .center-head, .footer .student-signature {
            width: 45%;
            text-align: start;
        }
        .note {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
        }
        .d-flex{
            display:flex;
            align-items:center;
            justify-content:space-between;
        }
        .watermark {
            position: fixed;
            top: 50%;
            left: 44%;
            transform: translate(-50%, -50%);
            opacity: 0.1;
            z-index: -1;
            width: 400px; /* Adjust as needed */
        }
        
    </style>
</head>
<body>
    <img src="https://i.ibb.co/hFV8BfC/20240416-175528-1.png" class="watermark" alt="Watermark">
    <div class="receipt-container">
        <div class="header">
            <table class="table-container" style="border: none !important;">
                <tr align="center">
                    <td style="border: none !important; text-align:center;">
                        <img src="https://i.ibb.co/hFV8BfC/20240416-175528-1.png" alt="LOGO IMAGE" style="width:100px !important;">
                    </td>
                </tr>
                <tr align="center">
                    <td style="border: none !important;">
                        <p style="text-align: center;margin:0px; color:black">DOMOHANA PHARMACY COLLEGE</p>
                    </td>
                </tr>
            </table>


            <table class="table-container" style="border: none !important;">
                <tr align="center">
                    <td style="border: none !important;"><p style="font-size: 14px !important;text-align:center;margin:0px; color:grey">Address:AT+P.O DOMOHANA P.S KARANDIGHI DIST. UTTAR DINAJPUR, W.B -733215</p></td>
                </tr>
            </table>
            <!--<hr style="color:black;">-->
        </div>
        <div class="details">
            <p>Receipt No.: {{ $order->id }}</p>
            <hr>
            <p>Name of Student:{{ $order->student->first_name }} {{ $order->student->last_name }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course:{{ $order->class->name }} {{ $order->section->name }}</p>
            <p>Date of payment:{{ $order->created_at }}</p>
        </div>
        <table class="table-container">
            <tr>
                <th>Sr. No.</th>
                <th>Particulars</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Payable Amount @if($order->seat_booking_amount != '') (Seat Booking) @endif</td>
                <td>{{ $order->receive_amount }}</td>
            </tr>
            {{--  <tr>
                <td>2</td>
                <td>Add Amount</td>
                <td>{{ isset($order) && isset($order->amount) ? $order->amount : '0' }}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Discount</td>
                <td>{{ isset($order) && isset($order->discount_amount) ? $order->discount_amount : '0' }}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Reciveing Amount</td>
                <td>{{ isset($order) && isset($order->receive_amount) ? $order->receive_amount : '0' }}</td>
            </tr>  --}}
            <tr>
                <td colspan="2" style="text-align: right; font-weight: bold;">Paid</td>
                <td>{{ isset($order) && isset($order->receive_amount) ? $order->receive_amount : '0' }}</td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: right; font-weight: bold;">Total Fee(Due Amount)</td>
                <td>{{ isset($order) && isset($order->due_amount) ? $order->due_amount : '0' }}</td>
            </tr>
        </table>
        <div class="footer">
            <div class="d-flex">
            <p>Paid By: <strong>{{ isset($order) && isset($order->payment_type) ? $order->payment_type : '' }}</strong></p>
        </div>
                <div class="center-head" style="justify-content: end;
    width: 100%;">
                    <!--<img src="https://i.ibb.co/GRpdvRW/Whats-App-Image-2024-10-19-at-13-44-38-0849ab92-removebg-preview-1.png" alt="LOGO IMAGE" style="width:70px !important; margin:0 0 0 0">-->
                   <p style="text-align: start;"> Authorize Signature </p>
                   <p style="text-align: start;"><span style="color:red;font-weight:bold;">Note:</span> Once fee paid, not refundable. </p>
                </div>
        </div>
        <div class="note">
            This is a system generated receipt.
        </div>
    </div>
</body>
</html>
