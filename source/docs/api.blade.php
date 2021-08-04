@extends('_layouts.documentation')

@section('content')

    <h1>API BLADE PHP</h1>

    @php
        $items = [
            [
                'verb' => 'POST',
                'url' => '/login',
                'result' => 'token...'
            ],
            [
                'verb' => 'GET',
                'url' => '/invoices',
                'result' => '[
    {
        "status": "init",
        "transactions": [
            "1e72773a282d27473a6d90eda485787c187d2b9373304cd6ad67b66cc871f3cb",
            "1e72773a282d27473a6d90eda485787c187d2b9373304cd6ad67b66cc871f3cb",
            "b51469bdcbfc8ecfd495fae4a9f71735f9ba5c552a100c1f11b7b928453f3a69",
            "b51469bdcbfc8ecfd495fae4a9f71735f9ba5c552a100c1f11b7b928453f3a69"
        ],
        "_id": "61000e841608c6347c6e506e",
        "amount": 50000000000,
        "address": "5KaFXUocYv27an4b1M3TR4HBDqpDRvYuPbXQR9SQLvu3MfZKFeBJdUWVULxHgXw9pC6M1dga8zbKjXpGwCsPpg4n2TKMu7icMmiPz9fJnc",
        "payment_id": "b0f9714f88aeb9cb",
        "tx_description": "",
        "uri": "monero:5KaFXUocYv27an4b1M3TR4HBDqpDRvYuPbXQR9SQLvu3MfZKFeBJdUWVULxHgXw9pC6M1dga8zbKjXpGwCsPpg4n2TKMu7icMmiPz9fJnc?tx_amount=0.050000000000",
        "created_at": "2021-07-27T13:47:48.863Z",
        "updated_at": "2021-08-01T08:02:09.107Z",
        "__v": 4
    },
    {
        "status": "completed",
        "transactions": [
            "bded1c40aff2343b9f9fbba3ccc3a1265c03529009c82c733319513bade7748f",
            "bded1c40aff2343b9f9fbba3ccc3a1265c03529009c82c733319513bade7748f",
            "bded1c40aff2343b9f9fbba3ccc3a1265c03529009c82c733319513bade7748f"
        ],
        "_id": "60f41cce06bf013e64e7dd33",
        "amount": 500000000000,
        "address": "5KaFXUocYv27an4b1M3TR4HBDqpDRvYuPbXQR9SQLvu3MfZKFeBJdUWVULxHgXw9pC6M1dga8zbKjXpGwCsPpg4n2QEq9r4dfdvRnAJjRU",
        "payment_id": "5fbf8f75a26525db",
        "tx_description": "",
        "uri": "monero:5KaFXUocYv27an4b1M3TR4HBDqpDRvYuPbXQR9SQLvu3MfZKFeBJdUWVULxHgXw9pC6M1dga8zbKjXpGwCsPpg4n2QEq9r4dfdvRnAJjRU?tx_amount=0.500000000000",
        "created_at": "2021-07-18T12:21:34.412Z",
        "updated_at": "2021-07-18T13:15:27.718Z",
        "__v": 3
    }
]'
            ],
            [
                'verb' => 'POST',
                'url' => '/invoices',
                'result' => ''
            ],
            [
                'verb' => 'GET',
                'url' => '/invoices/id',
                'result' => ''
            ],
            [
                'verb' => 'DELETE',
                'url' => '/invoices',
                'result' => ''
            ]
        ];
    @endphp

    @foreach($items as $item)
        <div class="api-item mb-2">

            @php
                $color = '';
                $verb = $item['verb'];

                if ($verb == 'GET')
                    $color = 'blue';
                else if ($verb == 'POST')
                    $color = 'green';
                else if ($verb == 'PUT')
                    $color = 'orange';
                else if ($verb == 'DELETE')
                    $color = 'red';
            @endphp

            <div class="api-dropdown p-3 flex border-solid border-2 border-{{ $color }}-400 cursor-pointer">
                {{ $item['verb'] }} - {{ $item['url'] }}
            </div>

            <pre class="api-result hidden">{{ $item['result'] }}</pre>
        </div>
    @endforeach
@endsection