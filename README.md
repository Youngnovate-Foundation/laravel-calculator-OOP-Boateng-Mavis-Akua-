# 🧮 Laravel Calculator (OOP Version)

**Author:** Boateng Mavis Akua  
**Course:** PHP & Laravel – Assignment 2  
**Institution:** University of Mines and Technology (UMaT)  
**Date:** October 2025  

---

## 📘 Overview
This project is an **Object-Oriented Programming (OOP)** version of the Laravel calculator app.  
It builds on Assignment 1 (the functional version) and refactors the logic into a **class-based structure** to improve code organization, readability, and reusability.  

The calculator performs basic arithmetic operations while demonstrating OOP concepts such as **encapsulation**, **abstraction**, and **method invocation** in a real Laravel environment.

---

## ⚙️ Features
- ✅ Addition, Subtraction, Multiplication, Division  
- 🔢 Power, Modulus, and Square Root operations  
- 💡 Clean class-based logic using Laravel Controllers  
- 🧱 Separation of logic from presentation (MVC principle)  
- 🎯 Simple and intuitive interface  

---

## 🧩 Class Structure

```php
class Calculator {
    public function add($a, $b);
    public function subtract($a, $b);
    public function multiply($a, $b);
    public function divide($a, $b);
    public function modulus($a, $b);
    public function power($a, $b);
    public function squareRoot($a);
}
This Calculator class encapsulates all the mathematical operations.
The CalculatorOOPController acts as a bridge between the view and class logic, handling input from users and displaying results.

🚀 How to Run
Clone the repository:

bash
Copy code
git clone https://github.com/Youngnovate-Foundation/laravel-calculator-OOP-Boateng-Mavis-Akua-.git
Navigate to the project folder:

bash
Copy code
cd laravel-calculator-OOP-Boateng-Mavis-Akua-
Install dependencies:

bash
Copy code
composer install
Start the Laravel development server:

bash
Copy code
php artisan serve
Visit the app in your browser:

cpp
Copy code
http://127.0.0.1:8000
🧠 Learning Objective
This assignment demonstrates:

How to use classes and objects to structure PHP applications.

The difference between procedural programming and object-oriented programming.

Integration of OOP logic inside a Laravel MVC framework.

How Laravel routes, controllers, and views communicate.

🆚 Procedural vs OOP Version
Aspect	Assignment 1 (Procedural)	Assignment 2 (OOP)
Code Structure	Functions directly handle operations	Operations are encapsulated within a class
Scalability	Harder to extend with new operations	Easily extendable by adding new methods
Reusability	Limited – functions must be copied or imported	High – class can be reused anywhere
Maintainability	Logic mixed with controller code	Clean separation of logic and controller
Core Concept	Function-based approach	Class-based approach using OOP principles

🪪 License
This project is open-sourced under the MIT License.