# Základy SQL

## Cíl hodiny
- Naučit se pracovat se strukturovanými daty pomocí SQL
- Získat znalosti o príkazech: `CREATE`, `INSERT`, `SELECT`, `UPDATE`, `DELETE`
- Praktické příklady a malý projekt

## Zakladní SQL příklady

### 1. Vytvoření tabulky
```sql
CREATE TABLE studenti (
    id INT PRIMARY KEY AUTO_INCREMENT, -- id SERIAL PRIMARY KEY,
    jmeno VARCHAR(50),
    prijmeni VARCHAR(50),
    vek INT
);
```

### 2. Vložení dat
```sql
INSERT INTO studenti (jmeno, prijmeni, vek)
VALUES ('Jan', 'Novak', 20),
       ('Eva', 'Svobodova', 22),
       ('Tomas', 'Dvorak', 19);
```

### 3. Základní výběr dat
```sql
SELECT * FROM studenti;
```

### 4. Výběr jen některých sloupců
```sql
SELECT jmeno, vek FROM studenti;
```

### 5. WHERE - filtrování dat
```sql
SELECT * FROM studenti
WHERE vek > 20;
```

### 6. Aktualizace dat
```sql
UPDATE studenti
SET vek = 21
WHERE jmeno = 'Tomas';
```

### 7. Smazání záznamu
```sql
DELETE FROM studenti
WHERE prijmeni = 'Novak';
```

### 8. Bonus - počet řádků
```sql
SELECT COUNT(*) FROM studenti;
```

---

## Mini projekt: Tabulka knih

### Struktura tabulky
```sql
CREATE TABLE knihy (
    id INT PRIMARY KEY AUTO_INCREMENT, // id SERIAL PRIMARY KEY
    nazev VARCHAR(100),
    autor VARCHAR(100),
    rok INT,
    zanr VARCHAR(50)
);
```

### Vložení dat
```sql
INSERT INTO knihy (nazev, autor, rok, zanr)
VALUES
('1984', 'George Orwell', 1949, 'Sci-fi'),
('Sherlock Holmes', 'Arthur Conan Doyle', 1892, 'Detektivka'),
('Duna', 'Frank Herbert', 1965, 'Sci-fi'),
('Zlocin a trest', 'Fjodor Dostojevskij', 1866, 'Román'),
('Lovci hlav', 'Jo Nesbø', 2008, 'Detektivka');
```

### Úlohy
1. Vlož alespoň 5 knih
2. Vyber knihy starší než rok 2000
3. Vyber `nazev` a `autor` knih se žánrem "Detektivka"
4. Změň žánr knihy "Sherlock Holmes" na "Klasika"
5. Smaž knihy s rokem < 1950

---

## Shrnutí
- SQL = jazyk pro práci s relační databází
- `SELECT`, `INSERT`, `UPDATE`, `DELETE` = základní nástroje práce s daty
- Cvičení slouží jako základ pro libovolnou práci s daty v budoucích aplikacích
