<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Configuration Document</title>

    <!-- Internal CSS -->
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        section {
            border-radius: 5px;
            box-shadow: 0px 0px 7px #c4c6c7;
            background-color: #fff;
            padding: 25px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 0.5px solid #6c757d;
            text-align: left;
            vertical-align: top;
            padding: 10px;
            background-color: #f8f9fa;
            font-size: 14px;
            margin-bottom: 0px;
        }

        table p {
            font-size: 14px;
            margin-bottom: 0px;
        }

        p {
            font-size: 14px;
            margin-bottom: 7px;
        }

        hr {
            background-color: #6c757d;
        }
    </style>


</head>

<body>



    <!-- Main (Start) -->
    <main>

        <!-- Section (Start) -->
        <section class="card shadow-sm">
            <div class="card-body">
                
                <table style="background-color: #fff;">
                    <tr>
                        <td style="background-color: #fff; border: none; width: 20px; padding: 0px;">
                            <img src="web/images/logo/logo.png" alt="" style="margin-left: -20px;">
                        </td>
                        <td style="background-color: #fff; border: none; vertical-align: middle;  padding: 0px;">
                            <div style="margin-left: -10px;">
                                <h2 style="margin-bottom: 5px;">PiCloud</h2>
                                <p style="margin-bottom: 3px;">Email : reachus@picloud.ai</p>
                                <p style="margin-bottom: 3px;">Phone : +918712630334</p>
                            </div>
                        </td>
                    </tr>
                </table>
                
                <br>
                <hr>
                <br>


                <h3>Server Configuration Document</h3>

                <br>

                <div class="container">
                    <table style="table-layout: fixed;">
                        <tr>
                            <th colspan="2">Service Details</th>
                        </tr>
                        @foreach ($data as $key => $item)
                        @php
                            $array = ['gross_amount', 'download_pdf', 'otc_amount','convenience_amount','gst_amount','total_amount','item_type']
                        @endphp
                        @if (!in_array($key, $array))
                        <tr>
                            <td>{{ucwords(str_replace('_',' ',strtolower($key)))}}</td>
                            <td>{{$item}}</td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    <br>
                    <table style="table-layout: fixed;">
                        <tr>
                            <th colspan="2">Billing Summary</th>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin-bottom: 4px;">{{request('payment_terms')}} Recuring Cost</p>
                                <p style="font-size: 0.7rem;">For {{request('contract_period')}}</p>
                            </td>
                            <td>Rs. {{ number_format(request('gross_amount'),2)}}</td>
                        </tr>
                        @if (request('otc_amount'))
                        <tr>
                            <td>One Time Cost (OTC)</td>
                            <td>Rs. {{number_format(request('otc_amount'),2)}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td>
                                <p style="margin-bottom: 4px;">Convenience Fees</p>
                                <p style="font-size: 0.7rem;">6% convenience will applicable</p>
                            </td>
                            <td>Rs. {{number_format(request('convenience_amount'),2)}}</td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin-bottom: 4px;">GST</p>
                                <p style="font-size: 0.7rem;">18% GST will applicable</p>
                            </td>
                            <td>Rs. {{number_format(request('gst_amount'),2)}}</td>
                        </tr>
                        <tr>
                            <td>Total Amount</td>
                            <td>Rs. {{number_format(request('total_amount'),2)}}</td>
                        </tr>
                    </table>
                </div>

                <br>
                <hr>
                <br>

                <div>
                    
                    
                </div>

            </div>
        </section>
        <!-- Section (End) -->


    </main>
    <!-- Main (End) -->


</body>

</html>