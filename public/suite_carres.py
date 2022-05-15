import os
os.environ['PYGAME_HIDE_SUPPORT_PROMPT'] = "hide"
import sys
import random as rd
import pygame as pg
from pygame.math import Vector2 as Vec

# paramètres
taille = int(sys.argv[1])
remplissage = int(sys.argv[2])
nb_carres= int(sys.argv[3])
d = float(sys.argv[4].replace(",", "."))


pg.init()
couleurs = [(0,0,0), (0,128,0), (255, 0, 0), (255, 102, 204), (51, 51, 255), (255, 102, 0), (255, 255, 0),(153, 102, 51)]
border_x = 5
border_y = 5
surface = pg.Surface((taille+(border_x*2), taille+(border_y*2)))
surface.fill((255, 255, 255))
points=[
    Vec(border_x, border_y),
    Vec(taille+border_x, border_y),
    Vec(taille+border_x, taille+border_y),
    Vec(border_x, taille+border_y)
]
couleur = rd.choice(couleurs)
pg.draw.polygon(surface, couleur, points, remplissage)
for i in range(nb_carres):
    saved_p0 = points[0]
    points[0] = points[0].lerp(points[1], d)
    points[1] = points[1].lerp(points[2], d)
    points[2] = points[2].lerp(points[3], d)
    points[3] = points[3].lerp(saved_p0, d)
    couleur = rd.choice(couleurs)
    pg.draw.polygon(surface, couleur, points, remplissage)
fichier = "suite_carre.png"
pg.image.save(surface, fichier)
print(fichier)




