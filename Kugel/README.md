# Zeichen einer Kugel mit Koordinatennetz 

Das Koordinatennetz der Erdkugel soll mittels einer [orthografischen Azimutalprojektion](https://de.wikipedia.org/wiki/Orthografische_Azimutalprojektion) auf eine Ebene abgebildet werden.
Die Kugel wird um einen Winkel 90 - &alpha; &gt; 0 um die West-Ost-Achse zum Betrachter gekippt. Der Fall &alpha; = 0 ist trivial.

## Breitenkreise.

Ohne Drehung sind die Breitenkreise gerade Linien (Trivialer Fall &alpha; = 0). Da das Kippen der Kugel um den Winkel 90 - &alpha; werden die Breitenkreise als Ellipsen auf der Ebene abgebildet.

Das Teilstück der Ellipsen der Breitenkreise, das auf der vom Betrachter abgewandten Seite der Kugel liegt, soll nicht gezeichnet werden. 

Deshalb müssen wir die Schnittpunkte der Breitenkreise mit dem äußeren Kreis der Kugel berechnen. Die Schnittpunkte eines Kreises mit einer Elipse zu berechnen ist nicht ganz einfach. Hier hilft uns allerdings der Sonderfall, dass sich Kreis und Ellipse nur berühen und nicht schneiden. Die Steigung oder erste Ableitung in den Berührungspunkten von Kreis und Elipse ist also gleich.

Damit gilt für den Abstand des Berührungspunktes zur Mittelachse:

x =  Sqr((r ^ 2 - a ^ 4 / b ^ 2) / (1 - a ^ 2 / b ^ 2))

Wobei a und b die Radien der Ellipse in Richtung x- und y-Achse sind.


Zur Berechnung der Breitenkreise dient die Tabelle "Breitenkreise" der Tabelle *kugel.ods*.
 
### SVG

Die Ellipsen der Breitenkreise werden mit dem Befehl <path /> gezeichnet. Diese werden in Spalte M erstellt.

# To do

Berücksichtigen der Sonderfälle Breitenkreis nicht und vollständig sichtbar.







