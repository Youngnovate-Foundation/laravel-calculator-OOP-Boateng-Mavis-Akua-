<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorOOPController extends Controller
{
    public function index()
    {
        return view('calculator_oop');
    }

    public function calculate(Request $request)
    {
        $calculator = new Calculator();

        $operation = $request->input('operation');
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        switch ($operation) {
            case 'add':
                $result = $calculator->add($num1, $num2);
                break;
            case 'subtract':
                $result = $calculator->subtract($num1, $num2);
                break;
            case 'multiply':
                $result = $calculator->multiply($num1, $num2);
                break;
            case 'divide':
                $result = $calculator->divide($num1, $num2);
                break;
            default:
                $result = 'Invalid operation selected.';
        }

        return view('calculator_oop', compact('result'));
    }
}

// 🧩 Define the Calculator class (OOP style)
class Calculator
{
    public function add($a, $b) { return $a + $b; }
    public function subtract($a, $b) { return $a - $b; }
    public function multiply($a, $b) { return $a * $b; }
    public function divide($a, $b)
    {
        return $b != 0 ? $a / $b : 'Cannot divide by zero';
    }
}
