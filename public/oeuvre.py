import os
os.environ['PYGAME_HIDE_SUPPORT_PROMPT'] = "hide"
import numpy as np
import random as rd
import pygame as pg
import sys

# Paramètres de abse pour la création de l'oeuvre
size = int(sys.argv[1])
nb_curves = int(sys.argv[2])
nb_groups = int(sys.argv[3])
#ecart = float(sys.argv[4])
if nb_curves<nb_groups:
    nb_curves = nb_groups
rand_a = 1 if sys.argv[4] == "on" else 0

# calcul centre de l'image
center = size/2

def draw_curve_groups(screen, nb_curves, nb_groups):
    nb = int(nb_curves/nb_groups)
    rotate = 0
    while nb_curves > 0:
        a = 1 if not rand_a else rd.uniform(0,1)
        color = [rd.randint(0, 255), rd.randint(0, 255), rd.randint(0, 255), rd.randint(60, 127)]
        dx, dy = rd.randint(0, 20), rd.randint(0, 50)
        surface = draw_curve_group(int(nb/2), color, a, dx, dy, rotate)
        screen.blit(surface, (0,0))
        rotate = 1 if not rotate else 0
        nb_curves -= nb


def draw_curve_group(nb, color, a, dx, dy, reverse):
    surface = pg.Surface((size, size), pg.SRCALPHA)
    b = rd.uniform(a, 5.0)
    for i in range(int(nb)+1):
        draw_curve(surface, a, b, color, dx, dy, 1, reverse)
        draw_curve(surface, a, b, color, dx, dy, -1, reverse)
        b += 0.01
    return surface


def draw_curve(surface, a, b, color, dx, dy, direction=-1, reverse=0):
    xarray = np.arange(size) / size
    yarray = direction * (((xarray ** a) * ((1 - xarray) ** b)) * size) + center
    points = list(zip((xarray * size)+dx, yarray+dy if not reverse else np.flip(yarray)+dy))
    pg.draw.lines(surface, color, False, points)


pg.init()
mainsurface = pg.surface.Surface((size, size))
mainsurface.fill((0, 0, 0))
draw_curve_groups(mainsurface, nb_curves, nb_groups)
filename = "oeuvre1.png"
pg.image.save(mainsurface, filename)
print(filename)