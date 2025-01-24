<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <link rel="stylesheet" href="{{public_path('invoice.css')}}" type="text/css">

</head>

<body>



    <table class="table-no-border">

        <tr>

            <td class="width-70">

                <img src="{{public_path('images/logo-light.png') }}" alt="" width="200" />

            </td>

            <td class="width-30">

                <h2>Invoice ID: {{$data->id}}</h2>

            </td>

        </tr>

    </table>



    <div class="margin-top">

        <table class="table-no-border">

            <tr>

                <td class="width-50">

                    <div><strong>To:</strong></div>

                    <div>{{$data->booking->attendee->name}}</div>

                    <div>{{$data->booking->attendee->address}}</div>

                    <div><strong>Phone:</strong> {{$data->booking->attendee->phone}}</div>

                    <div><strong>Email:</strong> {{$data->booking->attendee->email}}</div>

                </td>

                <td class="width-50">

                    <div><strong>From:</strong></div>

                    <div>Eventee Supreme (pvt) Ltd.</div>

                    <div>201, kakrail, Dhaka - 1205</div>

                    <div><strong>Phone:</strong> 01845207869</div>

                    <div><strong>Email:</strong> mdnazrulkhandu@gmail.com</div>

                </td>

            </tr>

        </table>

    </div>



    <div>

        <table class="product-table">

            <thead>

                <tr>


                    <th class="width-50">
                        <strong>Event</strong>
                    </th>

                    <th class="width-50">
                        <strong>Venue</strong>
                    </th>
                    
                    <th class="width-50">
                        <strong>Date</strong>
                    </th>

                    <th class="width-25">

                        <strong>Total Tickets</strong>

                    </th>



                    <th class="width-25">

                        <strong>per ticket Price</strong>

                    </th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td class="width-40">
                        {{$data->booking->event->title}}
                    </td>

                    <td class="width-20">
                        {{$data->booking->event->address}}
                    </td>

                    <td class="width-20">
                        {{$data->booking->event->start_date}}
                    </td>

                    <td class="width-20">
                        {{$data->booking->num_tickets}}
                    </td>

                    <td class="width-20">
                        {{$data->booking->event->unit_price}}
                    </td>
                </tr>
            </tbody>
            <tfoot>

                <tr>
                    <td class="width-70" colspan="4">
                        <strong>Sub Total:</strong>
                    </td>

                    <td class="width-25">
                        <strong>{{$data->amount}}</strong>
                    </td>
                </tr>

                <tr>
                    <td class="width-70" colspan="4">
                        <strong>Tax</strong>(0%):
                    </td>

                    <td class="width-25">
                        <strong>0.00</strong>
                    </td>
                </tr>

                <tr>
                    <td class="width-70" colspan="4">
                        <strong>Total Amount:</strong>
                    </td>

                    <td class="width-25">
                        <strong>{{$data->amount}}</strong>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>



    <div class="footer-div">

        <p>Thank you, <br />Eventee Supreme Family</p>

    </div>



</body>

</html>