<style>
                    form {
                    width: 400px;
                    margin: 50px auto;
                    padding: 20px;
                    background: #f9f9f9;
                    border-radius: 8px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    font-family: Arial, sans-serif;
                }

                form div {
                    margin-bottom: 15px;
                }

                label {
                    display: block;
                    margin-bottom: 6px;
                    font-weight: bold;
                    color: #333;
                }

                input[type="text"],
                textarea {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 6px;
                    font-size: 14px;
                    transition: border-color 0.3s, box-shadow 0.3s;
                }

                input[type="text"]:focus,
                textarea:focus {
                    outline: none;
                    border-color: #4f46e5;
                    box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2);
                }

                textarea {
                    resize: vertical;
                    min-height: 100px;
                }

                button {
                    width: 100%;
                    padding: 12px;
                    background: #4f46e5;
                    color: #fff;
                    border: none;
                    border-radius: 6px;
                    font-size: 16px;
                    font-weight: bold;
                    cursor: pointer;
                    transition: background 0.3s, transform 0.1s;
                }

                button:hover {
                    background: #4338ca;
                }

                button:active {
                    transform: scale(0.98);
                }

</style>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label>nom Category</label>
        <input type="text" name="nom" required>
    </div>
    
    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <button type="submit">add Category</button>
</form>