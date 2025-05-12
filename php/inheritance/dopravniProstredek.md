# Mini projekt na 45 min (s volnější strukturou)

## Zadání:
Vytvoř hierarchii tříd pro dopravní prostředky:

## Požadavky:
Třída DopravniProstredek:
vlastnosti: nazev, rychlost
metoda popis() – vypíše popis

Třídy Auto, Letadlo, Kolo dědí z DopravniProstredek
každá má svou metodu zvuk(), např. "Brum", "Vuuum", "Crrr"
přepis metody popis() – navíc uvede typ dopravního prostředku

Vytvoř pole s 3 různými objekty, zavolej popis() a zvuk() v cyklu

## Bonus (pro rychlejší):
Přidej abstraktní metodu zvuk() v rodičovské třídě

Nebo využij rozhraní ZvukovyProstredek