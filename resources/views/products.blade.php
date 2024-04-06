<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="{{ route('product.add') }}">
        @csrf
        <input type="text" id="name" name="name" placeholder="Tên sản phẩm">
        <input type="text" id="price" name="price" placeholder="Giá">
        <input type="text" id="description" name="description" placeholder="Mô tả">
        <button type="submit">Tạo sản phẩm</button>
    </form>
    <table>
        <th>
            <tr>Tên sản phẩm</tr>
            <tr>Giá</tr>
            <tr>Mô tả</tr>
        </th>
        
            @foreach ($products as $product)
            <tr>
            <td> {{$product['name']}}</td>
            <td> {{$product['price']}}</td>
            <td> {{$product['description']}}</td>
            <td>
                <form action="{{ route('product.delete', $product->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Xoá</button>
                </form>
            </td>
        </tr>

            @endforeach
            
    </table>
   
   
</body>
</html>