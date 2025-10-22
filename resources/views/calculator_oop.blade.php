<!DOCTYPE html>
<html>
<head>
    <title>OOP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fb;
            text-align: center;
            margin-top: 80px;
        }
        form {
            background-color: #fff;
            display: inline-block;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        input, select, button {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <h2>OOP Calculator</h2>
    <form method="POST" action="{{ route('calculate') }}">
        @csrf
        <input type="number" step="any" name="num1" placeholder="Enter first number" required>
        <input type="number" step="any" name="num2" placeholder="Enter second number">
        <select name="operation" required>
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (×)</option>
            <option value="divide">Divide (÷)</option>
        </select>
        <br>
        <button type="submit">Calculate</button>
    </form>

    @if (isset($result))
        <h3>Result: {{ $result }}</h3>
    @endif
</body>
</html>
