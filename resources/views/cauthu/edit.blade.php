<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa cầu thủ</title>
</head>
<body style="width: 50%; margin: 30px auto; font-family: sans-serif;">
    <h2>Chỉnh sửa thông tin cầu thủ</h2>
    
    <form action="/cauthu/edit/{{ $cau_thu->id }}" method="POST">
        @csrf
        
        <p>Tên cầu thủ: <br>
            <input type="text" name="ten_cau_thu" value="{{ $cau_thu->ten_cau_thu }}" style="width: 100%; padding: 6px;" required>
        </p>
        <p>Tuổi: <br>
            <input type="number" name="tuoi" value="{{ $cau_thu->tuoi }}" style="width: 100%; padding: 6px;" required>
        </p>
        <p>Quốc tịch: <br>
            <input type="text" name="quoc_tich" value="{{ $cau_thu->quoc_tich }}" style="width: 100%; padding: 6px;" required>
        </p>
        <p>Vị trí: <br>
            <input type="text" name="vi_tri" value="{{ $cau_thu->vi_tri }}" style="width: 100%; padding: 6px;" required>
        </p>
        <p>Lương ($): <br>
            <input type="number" name="luong" value="{{ $cau_thu->luong }}" style="width: 100%; padding: 6px;" required>
        </p>
        
        <button type="submit" style="padding: 8px 16px;">Cập nhật</button>
        <a href="/cauthu/list" style="margin-left: 10px;">Hủy bỏ</a>
    </form>
</body>
</html>
