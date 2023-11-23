#!/usr/bin/python

import gpiozero as g
from time import sleep
#25
#8
#7
# led_1.on()
# sleep(2)
# led_1.off()
# led_2.on()
# sleep(2)
# led_2.off()
# led_3.on()
# sleep(2)
# led_3.off()


led_1 = g.LED(23)
led_2 = g.LED(24)
led_3 = g.LED(25)
button = g.Button(2)
button.wait_for_active()
def ofg():
    led_3.off()
    led_2.on()
    sleep(2)
    led_2.off()
    led_1.on()
    sleep(3)
for i in range(2):
    led_1.on()
    sleep(1)
    led_2.on()
    sleep(2)
    led_1.off()
    led_2.off()
    led_3.on()
    sleep(5)
    ofg()