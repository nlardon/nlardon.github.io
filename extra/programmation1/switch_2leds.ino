int led1 = 8;
int led2 = 4;
int bouton = 1;
int etatbouton = LOW;
bool bascule = false;

void setup() {                
  pinMode(led1, OUTPUT);     
  pinMode(led2, OUTPUT);
  pinMode(bouton, INPUT_PULLUP);      
}

void loop() {
  etatbouton = digitalRead(bouton);
  if (etatbouton == LOW) 
  {
      if (bascule == true)
      {
      digitalWrite(led1, HIGH);
      digitalWrite(led2, LOW);
      bascule = false;
      }  
      else
      {
      digitalWrite(led1, LOW);
      digitalWrite(led2, HIGH);
      bascule = true;
      }
      delay(200);
  }
  
  
}
