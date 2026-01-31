<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tifawon souk</title>
    <style>
                                            .container {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                gap: 40px;
                                height: 100vh; 
                                font-family: "Segoe UI", Tahoma, sans-serif;
                                background: #f3f4f6;
                            }

                        .container a {
                            padding: 25px 50px;
                            font-size: 28px;
                            font-weight: bold;
                            text-decoration: none;
                            color: #ffffff;
                            border-radius: 18px;
                            background: linear-gradient(135deg, #2563eb, #1e40af);
                            box-shadow: 0 15px 30px rgba(37, 99, 235, 0.4);
                            transition: transform 0.2s, box-shadow 0.3s;
                        }

                        
                        .container a:last-child {
                            background: linear-gradient(135deg, #16a34a, #15803d);
                            box-shadow: 0 15px 30px rgba(22, 163, 74, 0.4);
                        }

                        .container a:hover {
                            transform: scale(1.08);
                            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
                        }


    </style>
</head>
<body>
    <div class="container">
        <a href=" {{ url('/categories') }} ">categories</a>
        <a href="{{ url('/products')}} ">products</a>
    </div>
</body>
</html>


