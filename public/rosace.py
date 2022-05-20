from math import pi
import sys
import os
os.environ['PYGAME_HIDE_SUPPORT_PROMPT'] = "hide"
import pygame as pg

taille = 500
pg.init()
couleurs = [(0, 0, 0), (0, 128, 0), (255, 0, 0), (255, 102, 204), (51, 51, 255), (255, 102, 0), (255, 255, 0), (153, 102, 51)]
surface.fill((255, 102, 204))
pg.draw.circle(surface, (0, 0, 0, 0), (taille/2, taille/2), taille/2)
rect = pg.Rect(0, 0, taille, taille/2)
fichier = "rosace.png"
pg.image.save(surface, fichier)