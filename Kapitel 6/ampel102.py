#!/usr/bin/python
import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
rot = 0
gelb = 1
gruen = 2
blau = 3
Ampel=[8,7,12,24]
GPIO.setup(Ampel[rot], GPIO.OUT, initial=False)
GPIO.setup(Ampel[gelb], GPIO.OUT, initial=False)
GPIO.setup(Ampel[gruen], GPIO.OUT, initial=True)
GPIO.setup(Ampel[blau], GPIO.OUT, initial=False)
print("Strg+C beendet das Programm")
try:
    while True:
        time.sleep(2)
        GPIO.output(Ampel[gruen],False)
        GPIO.output(Ampel[gelb],True)
        time.sleep(0.6)
        GPIO.output(Ampel[gelb],False)
        GPIO.output(Ampel[rot],True)
        time.sleep(0.6)
        for i in range(10):
            GPIO.output(Ampel[blau],True)
            time.sleep(0.05)
            GPIO.output(Ampel[blau],False)
            time.sleep(0.05)
        time.sleep(0.6)
        GPIO.output(Ampel[gelb],True)
        time.sleep(0.6)
        GPIO.output(Ampel[rot],False)
        GPIO.output(Ampel[gelb],False)
        GPIO.output(Ampel[gruen],True)
except KeyboardInterrupt:
    GPIO.cleanup()
