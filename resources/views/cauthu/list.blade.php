<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý cầu thủ</title>
</head>
<body>
    <h2>Quan ly cau thu</h2>

            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Ten cau thu</th>
                    <th>Tuoi</th>
                    <th>Quoc tich</th>
                    <th>Vi tri</th>
                    <th>Luong</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->ten_cau_thu }}</td>
                    <td>{{ $item->tuoi }}</td>
                    <td>{{ $item->quoc_tich }}</td>
                    <td>{{ $item->vi_tri }}</td>
                    <td>{{ $item->luong }} $</td>
                    <td><a href="/cauthu/edit/{{ $item->id }}">Edit</a></td>
                    <td><a href="/cauthu/delete/{{ $item->id }}">Delete</a></td>
                </tr>
                @endforeach
            </table>

            <p>
                <a href="/cauthu/add"><button>Them cau thu</button></a>
            </p>
        </tbody>
    </table>
</body>
</html>