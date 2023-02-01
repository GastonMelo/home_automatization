# home_automatization
files to raspberry pi 3b+ and esp8266
inicializarGPIO : this file initialize the gpio on the raspberry pi on boot as output and put the state on off.
in the folder Tasks you should find:
In my house I control a pair of light in the kitchen (LucesCocina) depending on the season of the year - Winter (invierno) - Summer (verano). This is because you had more sunlight on summer and the light of the house should start later on the afternoon. Taking into account his, the light of the house starts at 20pm in the summer and in the winter on 18pm.
I control lighs of a house, a irrigation system, and a wifi relays made with the esp8266 (in this case are wifi_prog) and control the on and off of a Nixie Watch with a wifi relay also (wifi_watch).
In the Domotica Folder you should find:
All code in the Control.html was made on JQuery.
From id0 to id8 you should find PHP code to control each of the light of the house and irrigation system as well as wifi relays.
The html code check the status of each button on wireless as well.
You can enable and disable wich of the buttons you can use (enable json)
you can manually add and edit IP direction with agregar_direccion_ip.json
