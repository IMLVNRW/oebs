# openECS - Open eContact System

Ist ein einfache niederschwälliges Kontaktsystem, zb für eine Beratungsplatformen oder vergleichbare einsatz zwecke. openECS ist ein hybrid CMS. User können per App, im Browser anfragen, nach Regestrierung - Benutzername, optional E-Mail und Password - stellen. 

Sie als Berater können per App, Desktop Anwendung oder andere selbst entickelte Anwendungen über die REST API, antworten bzw verarbeiten. 

Die Nachrichten sind nur vom Anfragenden und Bearbeitende zu lesen. Die Nachrichten werden in der Datenbank per OpenPGP verschlüsselt gespeichert. Die Verschlüsslung und Entschlusslung erfolgt Lokal beim anwender. Im Broser per Javascript, in der APP und Anwendungen mit vergleichbaren Lösungen. Zusatzlich muss die Kommunikation von der Anwendung  zum Server und umgekehrt per SSL/TLS Verschlüsselt sein. 

## Für Entwickler
Authentifizierung der REST API wird über HMAC erfolgen.

