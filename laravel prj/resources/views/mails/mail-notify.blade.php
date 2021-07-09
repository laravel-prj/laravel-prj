<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>
</head>

<body>
    @if (isset($data['flag']))
        <div class="container">
            <h2>{{ $data['type'] }}</h2>
            <p>{{ $data['thanks'] }}</p>
        </div>
    @else
        <div class="container">
            <h2>{{ $data['type'] }}</h2>
            <p>{{ $data['thanks'] }}</p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Index</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['listCart'] as $key => $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                @if ($item['image'])
                                    <td>
                                        {{-- <img src="http://moshoptestest.000webhostapp.com/{{ $item['image'] }}" alt="img"> --}}
                                        <img src="{{ $message->embed(public_path('customer/img/' . $item['image'])) }}"
                                            alt="{{ $item['image'] }}" width="200px" height="300px">
                                    </td>
                                @else
                                    <td>
                                        <img src="{{ $message->embed(public_path('/customer/img/no_image.png')) }}"
                                            alt="no_image" width="200px" height="300px">
                                    </td>
                                @endif
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['size'] }}</td>
                                <td>{{ $item['price'] }}$</td>
                                <td>{{ $item['current_quantity'] }}</td>
                                <td>{{ $item['discout_item'] }}%</td>
                                <td>
                                    {{ $item['price'] * $item['current_quantity'] - $item['price'] * $item['current_quantity'] * ($item['discout_item'] / 100) }}$
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    @endif

</body>

</html>
