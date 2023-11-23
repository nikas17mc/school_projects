import gpiozero as g
from time import sleep
from random import uniform
import os
left_name = input("Left player name is ")
right_name = input ("Right player name is ")
led = g.LED(4)
right_button = g.Button(27)
left_button = g.Button(17)
led.on()
sleep(uniform(5, 10))
led.off()
def press(button):
    if button == 14:
        print(left_name +" won the game")
    else:
        print(right_name +" won the game")
    exit(0)
right_button.when_activated = press
left_button.when_activated = press