# FizzBuzz

Schreibe ein Programm, das die Zahlen von 1 bis 100 ausgibt. Bei jeder Zahl, 
die durch 3 teilbar ist, soll "fizz" ausgegeben werden und bei jeder Zahl, die durch 5 teilbar ist, 
soll "buzz" ausgegeben werden. Wenn die Zahl sowohl durch 3 als auch durch 5 teilbar ist, 
soll "fizzbuzz" ausgegeben werden. 

Der Modulo-Operator ermittelt den Rest bei Division. Somit ist eine Teilbarkeit einfach dann erreicht,
wenn die Modulo-Operation (%, MOD) den Rest 0 liefert.

## Vorbereitungen

Checke zunächst den Quellcode mit Git aus:

```bash
# git clone https://github.com/vemaeg/fizzbuzz.git 
```

Installiere die notwendigen Abhängigkeiten mit Composer:

```bash
# cd bizzbuzz
# composer install
``` 

## Aufgabe 1
Implementiere die Klasse `Vema\FizzBuzz\FizzBuzz` gegen das Interface `Vema\FizzBuzz\FizzBuzzInterface`.

## Aufgabe 2
Stelle sicher, dass die gegebenen Tests erfolgreich durchlaufen. Passe deine Implementierung ggf. an.

```bash
# php vendor/bin/phpunit -c phpunit.xml
```

Ausgabe:

```bash
PHPUnit 6.5-g860629794 by Sebastian Bergmann and contributors.

...............................................................  63 / 200 ( 31%)
............................................................... 126 / 200 ( 63%)
............................................................... 189 / 200 ( 94%)
...........                                                     200 / 200 (100%)

Time: 83 ms, Memory: 4.00MB

OK (200 tests, 400 assertions)
```

## Aufgabe 3

Schreibe nun ein Programm `public/fizzbuzz.php`, das die Anforderungen unter Nutzung der
implementierten Klasse `FizzBuzz` erfüllt.

Führe das Programm anschließend aus:

```bash
# cd public
# php fizzbuzz.php
``` 

Die Ausgabe wird wie folgt erwartet:

```bash
1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, Fizz Buzz, 16, 17, Fizz, 19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, Fizz, 28, 29, Fizz Buzz, 31, 32, Fizz, 34, Buzz, Fizz, ...
```

## Aufgabe 4

Erweitere das Programm `public/fizzbuzz.php` so, dass der Start- und Endwert mit den
Argumenten `--start` und `--end` angegeben werden kann.

Rufe das Programm nun wie folgt auf und kontrolliere die Funktion und Ausgabe:

```bash
# php fizzbuzz.php --start=10 --end=50
```

## Aufgabe 5 (Diskussion)

Im nächsten Schritt sollen die Zahlen, mit den die Division durchgeführt werden soll, ebenfalls
mit Argumenten (`--fizz` und `--buzz`) angegeben werden können. Hierzu ist eine Anpassung 
der Implementierung notwendig. Außerdem ist davon auszugehen, dass `Fizz` und `Buzz` zukunftig 
nicht nur mit der Modulo-Operation ermittelt werden sollen.

Wie würdest du bei den neuen Anforderungen vorgehen?

## Aufgabe 6

Erweitere das Programm so, dass man beim Ausführen des Programms ein weiteren Argument
`--output` übergeben kann, um die Ausgabe zu kontrollieren.

Gibt man das Argument `--output=json` an, so soll das Programm die Zahlen als JSON-String zurück
liefern. Der JSON-String muss nach der Dekodierung ein indiziertes Array ergeben.

Führe das Programm anschließend aus und kontrolliere die Ausgabe:

```bash
# php fizzbuzz.php --output=json
```

## Aufgabe 7

Erweitere das Programm um eine weitere Ausgabemöglichkeit `--output=file`. Das Programm soll 
unter der Angabe des Argumentes `--file` die Ausgabe in eine bestimmte Datei umleiten.
 
Überlege dir ein passendes Format, um die Ausgabe sinnvoll in der Datei zu speichern. 
