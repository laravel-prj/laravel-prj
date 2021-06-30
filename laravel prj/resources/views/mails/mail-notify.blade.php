<div>
    <h2>{{ $data['type'] }}</h2>
    <p>{{ $data['thanks'] }}</p>
    <div class="table-responsive">
        <table class="table">
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
                        <td>{{ $loop->index }}</td>
                        @if ($item['image'])
                            <td>
                                <img src="https://moshoptestest.000webhostapp.com/{{ $item['image'] }}" alt="img">
                            </td>
                        @else
                            <td>
                                <img src="{{ asset('/customer/img/no_image.png') }}" alt="img">
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
