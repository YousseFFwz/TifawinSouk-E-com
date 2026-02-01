<style>
                    form {
                    width: 420px;
                    margin: 40px auto;
                    padding: 25px;
                    background-color: #ffffff;
                    border-radius: 10px;
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
                    font-family: "Segoe UI", Tahoma, sans-serif;
                    direction: rtl;
                }

                form div {
                    margin-bottom: 16px;
                }

                label {
                    display: block;
                    margin-bottom: 6px;
                    font-weight: 600;
                    color: #444;
                }

                input[type="text"],
                textarea {
                    width: 100%;
                    padding: 10px 12px;
                    border: 1px solid #ccc;
                    border-radius: 6px;
                    font-size: 14px;
                    transition: all 0.3s ease;
                }

                input[type="text"]:focus,
                textarea:focus {
                    outline: none;
                    border-color: #2563eb;
                    box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
                }

                textarea {
                    min-height: 100px;
                    resize: vertical;
                }

                /* Buttons */
                button {
                    padding: 10px 18px;
                    background-color: #2563eb;
                    color: #fff;
                    border: none;
                    border-radius: 6px;
                    font-size: 15px;
                    font-weight: bold;
                    cursor: pointer;
                    transition: background-color 0.3s, transform 0.1s;
                }

                button:hover {
                    background-color: #1e40af;
                }

                button:active {
                    transform: scale(0.97);
                }

                /* Cancel link */
                a {
                    margin-right: 10px;
                    color: #6b7280;
                    text-decoration: none;
                    font-size: 14px;
                }

                a:hover {
                    color: #111827;
                    text-decoration: underline;
                }

</style>
<h2>edite category {{ $Categories->nom }}</h2>

<form  method="POST">
    @csrf
    <div>
        <label>nom categry</label>
        <input type="text" name="nom" value="{{ $Categories->nom }}" required>
    </div>
    
    <div>
        <label>(Slug):</label>
        <input type="text" name="slug" value="{{ $Categories->slug }}" required>
    </div>

    <div>
        <label>description</label>
        <textarea name="description">{{ $Categories->description }}</textarea>
    </div>

    <button type="submit" style="background: blue; color: white;">edite</button>
    <a href="{{ url('/categories') }}">anuller</a>
</form>