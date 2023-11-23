import pygame
from pygame.locals import *
from time import sleep
from random import randrange
pygame.init()
width = pygame.display.Info().current_w
height = pygame.display.Info().current_h
screen = pygame.display.set_mode((width,height))
difference = pygame.image.load('spot_the_diff.png')
screen.blit(difference,(0,0))
pygame.display.update()
zombie = pygame.image.load('scary_face.png')
zombie = pygame.transform.scale(zombie,(width,height))
scream = pygame.mixer.Sound('scream.wav')
sleep(randrange(5,15))
scream.play()
screen.blit(zombie,(0,0))
pygame.display.update()
sleep(3)
scream.stop()
pygame.quit()