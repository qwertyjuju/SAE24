
import os
os.environ['PYGAME_HIDE_SUPPORT_PROMPT'] = "hide"
import numpy as np
import random as rd
import pygame as pg
import sys

def calc_coor(max_s, dx, dy):
    r = rd.uniform(max_s / 2, max_s)
    alpha = rd.uniform(-np.pi / 6, np.pi / 6)
    x = dx + (r * np.cos(alpha))
    y = dy + (r * np.sin(alpha))
    return x, y, r* np.cos(alpha)

size = int(sys.argv[1])
nb_pol = int(sys.argv[2])
marginx = 10
marginy = 10


max_size_pol = (size-(marginx*2))/nb_pol
pg.init()
surface = pg.Surface((size, size))
surface.fill((0, 0, 0))

points = []
dy = marginy
for i in range(nb_pol):
    dx = marginx
    l_points=[]
    for j in range(nb_pol):
        tempx, tempy, r = calc_coor(max_size_pol, dx, dy)
        x = tempx if tempx >= dx else dx
        y = tempy if tempy >= marginy else marginy
        l_points.append((x, y))
        dx += r
    dy += max_size_pol
    points.append(l_points)

for i in range(1,len(points)):
    for j in range(1,len(points[i])):
        pg.draw.polygon(surface, [rd.randint(0,255) for _ in range(3)], (points[i-1][j-1], points[i-1][j], points[i][j], points[i][j-1]))

filename = "oeuvre2.png"
pg.image.save(surface, filename)
print(filename)