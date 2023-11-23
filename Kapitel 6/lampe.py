#!/usr/bin/python

import gpiozero as g
from time import sleep

led = g.LED(25)
while True:
    led.on()
    sleep(1)
