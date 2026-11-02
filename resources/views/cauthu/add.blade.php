<h2>Them cau thu</h2>
<body style="width: 50%; margin: 30px auto; font-family: sans-serif;">

    @if ($errors->any())
        <div class= "alert alert alert-danger alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="/cauthu/add" method="POST">
    @csrf
    <p>Ten cau thu: <input type="text" name="ten_cau_thu" style="width: 100%; padding: 8px;"></p>
    <p>Tuoi: <input type="number" name="tuoi" style="width: 100%; padding: 8px;"></p>
    <p>Quoc tich: <input type="text" name="quoc_tich" style="width: 100%; padding: 8px;"></p>
    <p>Vi tri: <input type="text" name="vi_tri" style="width: 100%; padding: 8px;"></p>
    <p>Luong: <input type="number" name="luong" style="width: 100%; padding: 8px;"></p>

    <button type="submit">Luu</button>
    <a href="/cauthu/list">Quay lai</a>
</form>