# Zadání: Polymorfismus v PHP – Grafický Editor

## Cíl
Procvičit polymorfismus v PHP pomocí:
- rozhraní
- více tříd implementujících společné metody
- pole objektů
- společné zpracování dat různých typů objektů

---

## Úkol

1. **Vytvoř rozhraní `Drawable`**, které bude obsahovat:
   - `draw(): void`
   - `area(): float`

2. **Vytvoř tři třídy**, které implementují `Drawable`:
   - `Circle` – atribut: `radius`
   - `Rectangle` – atributy: `width`, `height`
   - `Triangle` – atributy: `base`, `height`

   Každá třída:
   - vypíše v metodě `draw()` informaci o tom, co kreslí
   - spočítá a vrátí obsah daného tvaru v metodě `area()`

3. **Vytvoř pole různých tvarů (objekty různých tříd)**

4. **Pomocí cyklu zavolej pro každý tvar:**
   - metodu `draw()`
   - metodu `area()`
   - zobraz výstup na obrazovku

5. **Na závěr vypiš celkovou plochu všech tvarů.**

---

## Bonus (volitelné)

- Zaveď kontrolu vstupu (např. že délka musí být větší než 0)
- Vytvoř třídu `Canvas` s metodou `renderAllShapes(array $shapes)`, která vykreslí a spočítá plochu všech tvarů

---

## Očekávaný výstup

```
Drawing a circle with radius 5
Area: 78.539816339745

Drawing a rectangle of size 4 x 6
Area: 24

Drawing a triangle with base 3 and height 7
Area: 10.5

...

Celková plocha všech tvarů: 158.24
```
