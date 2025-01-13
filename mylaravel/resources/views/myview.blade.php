<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&family=Prompt:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f6f5fe;
            margin-top: 20px;
        }

        h1,h2,h3 {
            display: flex;
            justify-content: center;
            font-family: 'Prompt', sans-serif;
            font-weight: 700;
            color: #3e0976;
        }

        table {
            display: flex;
            justify-content: center;
        }
    </style>

<body class="container mt-4">
    <div class="text-center mb-3">
        <h1>ตารางสูตรคูณ </h1>
        <h3>คำนวณ: {{ $myinput ?? 'N/A' }}</h3>
        <h3>ผลลัพธ์: {{ $myvalue ?? 'N/A' }}</h3>
    </div>

    <form method="post" action="{{ url('/mycontroller') }}">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="myinput" placeholder="กรุณาใส่ตัวเลข เช่น 2*2" value="{{ old('myinput') }}">
            <button class="btn btn-outline-success" type="submit">Submit</button>
        </div>
    </form>

    @if (!empty($multiplicationTable))
        <div class="mt-4">
            <h2 class="text-center">ตารางสูตรคูณแม่ {{ explode('*', $myinput)[0] }} </h2>
            <ul class="list-group">
                @foreach ($multiplicationTable as $row)
                    <li class="list-group-item">{{ $row }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>