# neuroal_network

Ziel: Erste Gehversuche mit dem Einsatz eines einfachen Neuronalen Netzwerks am Beispile Tic Tac Toe. 

Live Demo
=========
http://107.170.159.73/neuronal_network/web.php

Einstellungen
=============
9 Input | 9 Output | 1 Hiddenschicht mit 10 Neuronen | 3 ausgeprägte Games in Form von Trainingssätzen

Todo (In Entwicklung)
====
Ein Trainingsmodus mit welchem dem Netz eigene Trainingssätze mitgegeben werden kann.  
 - Input.txt | Output.txt und Gewichtungen.txt löschen.
 - Spieler spielt im Trainingsmodus für beide Spieler einen Zug und sendet diesen an das Netzwerk.
 - Jeder gespielte Zug soll durch das senden an das Netzwerk als Trainingssatz in 2 txt Dateien Input.txt und Output.txt angefügt werden.
 - Das Netzwerk soll im Anschluss alle Traininssätze laden und sich trainieren. Die errechneten Gewichtungen sollen in der Datei Gewichtungen.txt abgespecheicht werden. 
 

Python Testen
=============
$ python tic.py "0.5,0,0,0,0,0,0,0,0"

Sollte Fehlerfrei 1.0, 1.0, 0.0, 0.1, 0.0, 0.3, 1.0, 1.0, 1.0 zurück geben.

Quelle Python Code 
==================
https://medium.com/technology-invention-and-more/how-to-build-a-simple-neural-network-in-9-lines-of-python-code-cc8f23647ca1#.pea0nt22f
