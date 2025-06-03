# Pokročilejší SQL

## Cíle lekce
- Umět pracovat s více tabulkami a složitějšími spojeními
- Pochopit poddotazy a agregace
- Naučit se GROUP BY, HAVING, ORDER BY, LIMIT
- Prakticky používat funkce jako COUNT, AVG, SUM
- Základní práce s CASE a podmínkami v dotazech

---

## 1. Teoretický úvod + příklady (45 minut)

### Příprava tabulek

```sql
CREATE TABLE departments (
    id INT PRIMARY KEY,
    name VARCHAR(50)
);

CREATE TABLE employees (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    salary INT,
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES departments(id)
);
```

### Data

```sql
INSERT INTO departments (id, name) VALUES
(1, 'HR'),
(2, 'IT'),
(3, 'Sales'),
(4, 'Marketing');

INSERT INTO employees (id, name, salary, department_id) VALUES
(1, 'Alice', 55000, 1),
(2, 'Bob', 72000, 2),
(3, 'Charlie', 48000, 2),
(4, 'David', 39000, 3),
(5, 'Eve', 61000, 3),
(6, 'Frank', 43000, 4),
(7, 'Grace', 53000, 1),
(8, 'Heidi', 47000, 2),
(9, 'Ivan', 66000, 3),
(10, 'Judy', 38000, 4);
```

### 1.1 GROUP BY + agregace
```sql
SELECT department_id, COUNT(*) AS num_employees
FROM employees
GROUP BY department_id;
```

### 1.2 HAVING vs WHERE
```sql
SELECT department_id, AVG(salary) AS avg_salary
FROM employees
GROUP BY department_id
HAVING AVG(salary) > 50000;
```

### 1.3 ORDER BY + LIMIT
```sql
SELECT name, salary
FROM employees
ORDER BY salary DESC
LIMIT 5;
```

### 1.4 Poddotazy (subqueries)
```sql
SELECT name
FROM employees
WHERE salary > (SELECT AVG(salary) FROM employees);
```

### 1.5 CASE výraz
```sql
SELECT name,
  CASE
    WHEN salary > 60000 THEN 'High'
    WHEN salary > 40000 THEN 'Medium'
    ELSE 'Low'
  END AS salary_category
FROM employees;
```

---

## 2. Samostatná práce – Úkoly (45 minut)

### Použité tabulky:
- `employees(id, name, salary, department_id)`
- `departments(id, name)`

### Úkoly:

#### 1. Počet zaměstnanců v každém oddělení
```sql
-- Napiš dotaz, který vypíše název oddělení a počet zaměstnanců v něm.
```

#### 2. Oddělení s průměrným platem vyšším než 50 000
```sql
-- Vypiš pouze ta oddělení, kde je průměrný plat vyšší než 50000.
```

#### 3. Top 3 nejlépe placení zaměstnanci
```sql
-- Vypiš jména a platy tří nejlépe placených zaměstnanců.
```

#### 4. Zaměstnanci a jejich platová kategorie (CASE)
```sql
-- Přidej ke každému zaměstnanci štítek 'Low', 'Medium', 'High' podle platu.
```

#### 5. Zaměstnanci, kteří mají vyšší plat než průměr v celé firmě
```sql
-- Použij poddotaz.
```

#### 6. Zaměstnanci spolu s názvem oddělení (JOIN)
```sql
-- Vypiš zaměstnance a k nim název oddělení.
```

---

## 3. Shrnutí (5 minut)
- Rozdíl mezi WHERE a HAVING
- Shrnutí poddotazů
- Použití CASE
- Praktický význam GROUP BY a agregací
