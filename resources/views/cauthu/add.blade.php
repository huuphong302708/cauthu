<h2>Them cau thu</h2>

<form action="/cauthu/add" method="POST">
    @csrf
    <p>Ten cau thu: <input type="text" name="ten_cau_thu"></p>
    <p>Tuoi: <input type="number" name="tuoi"></p>
    <p>Quoc tich: <input type="text" name="quoc_tich"></p>
    <p>Vi tri: <input type="text" name="vi_tri"></p>
    <p>Luong: <input type="number" name="luong"></p>

    <button type="submit">Luu</button>
    <a href="/cauthu/list">Quay lai</a>
</form>