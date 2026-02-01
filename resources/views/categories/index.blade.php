<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>TifawinSouk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background-color: #f8f9fa; }
        .btn-add { background: #007bff; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; }
        .badge { background: #eee; padding: 5px 10px; border-radius: 15px; font-size: 0.8em; }
    </style>
</head>
<body>
    
    <h1>Categories</h1>

    <nav style="background: #49aae6; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
    <a href="{{ url('/') }}" style="color: white; text-decoration: none; margin-left: 20px;">home</a>
    <a href="{{ url('/products') }}" style="color: white; text-decoration: none;">manage products</a>
    </nav>
    
    <div style="margin-bottom: 20px;">
        <a href="{{ url('/categories/create') }}" class="btn-add">add category</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nom category </th>
                <th>url (Slug)</th>
                <th>descreption</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)

            <tr>
                <td>{{ $category->id }}</td>
                <td><strong>{{ $category->nom }}</strong></td>
                <td><span class="badge">{{ $category->slug }}</span></td>
                <td>{{ $category->description ?? 'ne pas de description' }}</td>
                <td>
                <a href="{{ route('categories.edit', $category->id) }}" style="color: blue;">edite</a> 
                | 

                <form action="{{ route('categories.delete', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" onclick="return confirm('delete ?')" style="color: red; border:none; background:none; cursor:pointer;">
                        delete
                    </button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>