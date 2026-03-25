# 📊 Laravel CSV Logic Verification System

A simple Laravel 12 application to **upload CSV files and verify digital logic outputs** (AND, OR, NAND, NOR, or custom IC logic).

---

## 🚀 Features

* 📁 Upload CSV file
* 🔍 Parse data without external packages
* 🧠 Apply logic verification (customizable)
* ✅ Show PASS / FAIL results
* 🏗️ Clean architecture (Controller → Service → View)
* ⚡ No Composer dependency required for CSV parsing

---

## 📂 Project Structure

```
app/
 ├── Http/Controllers/ExcelController.php
 ├── Services/LogicVerificationService.php

resources/views/
 ├── upload.blade.php
 ├── result.blade.php

routes/
 ├── web.php
```

---

## 📄 CSV Format

Your CSV file should follow this format:

```
Chip ID,Input (A),Input (B),Input (C),Input (D),Output (O)
1,1,0,0,1,1
2,1,1,1,0,1
3,1,0,0,1,1
4,0,1,0,1,0
5,1,1,0,1,0
```

---

## ⚙️ Installation

### 1. Clone the repository

```
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### 2. Setup environment

```
cp .env.example .env
php artisan key:generate
```

### 3. Install dependencies (if needed)

```
composer install
```

### 4. Run the application

```
php artisan serve
```

Open:

```
http://127.0.0.1:8000
```

---

## 📤 Usage

1. Open the application in browser
2. Upload a CSV file
3. System will:

   * Read inputs (A, B, C, D)
   * Calculate expected output
   * Compare with actual output
4. View results in table with:

   * Expected Output
   * Actual Output
   * PASS / FAIL status

---

## 🧠 Logic Implementation

Core logic is defined in:

```
app/Services/LogicVerificationService.php
```

### Example Logic:

```php
return ($A && $B) || ($C && $D);
```

### Supported Logic Types:

| Gate | Logic         |   |      |
| ---- | ------------- | - | ---- |
| AND  | `$A && $B`    |   |      |
| OR   | `$A           |   | $B`  |
| NAND | `!($A && $B)` |   |      |
| NOR  | `!($A         |   | $B)` |

---

## 🔧 Customization

You can modify logic easily:

```php
private function calculateOutput($A, $B, $C, $D)
{
    return !( ($A || $B) && ($C || $D) ); // Example IC logic
}
```

---

## 🛠️ Tech Stack

* Laravel 12
* PHP 8.2
* Blade Templates
* Native PHP (`fgetcsv`)

---

## 📌 Notes

* No external Excel/CSV library used
* Works with `.csv` files only
* Lightweight and fast

---

## 🚀 Future Enhancements

* 📊 Export results as CSV/Excel
* 🔍 Auto-detect logic gates
* 🎯 Support multiple IC types
* ⚛️ React frontend integration
* 🗄️ Database storage

---

## 👨‍💻 Author

Developed by: [Souvik De](https://www.linkedin.com/in/souvik-de-567942126/)

---

## 📄 License

This project is open-source and available under the MIT License.
