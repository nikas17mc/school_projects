#!/usr/bin/python

import gpiozero as g
from time import sleep

led = g.LED(23)
button = g.Button(2)
button.wait_for_active
for i in range(10):
    led.on()
    sleep(1)

