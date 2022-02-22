#include <Ethernet.h>

#define pirSensor 2

byte mac[] = { 0xA8, 0x61, 0x0A, 0xAE, 0x84, 0xB4 };
IPAddress ip(192, 168, 1, 177);

IPAddress server(192,168,1,146);

EthernetClient client;
String postData;

void setup() {
  pinMode(pirSensor, INPUT);

  Ethernet.begin(mac, ip); // apre la sessione ethernet

  delay(1000);
}

void loop() {
  if (digitalRead(pirSensor) == HIGH && client.connect(server, 80)) {
    postData = "datiSensore=movimento";

    client.println("POST /ProgettoScuola0/index.php HTTP/1.1");
    client.print("Host: ");
    client.println(server);
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.print("Content-Length: ");
    client.println(postData.length());
    client.println();
    client.println(postData);

    delay(2000);
  }

  if (client.connected())
    client.stop();
}
