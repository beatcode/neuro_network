#!/usr/bin/python
# -*- coding: ascii -*-

#Quelle: https://medium.com/technology-invention-and-more/how-to-build-a-simple-neural-network-in-9-lines-of-python-code-cc8f23647ca1#.pea0nt22f
from numpy import exp, array, random, dot
import numpy as np
import sys, os

if __name__ == "__main__":

  f = open('/var/www/html/neuronal_network/data/input_1.txt', 'w')
  f.close()
  f = open('/var/www/html/neuronal_network/data/output_1.txt', 'w')
  f.close()
  f = open('/var/www/html/neuronal_network/data/weights_layer1.txt', 'w')
  f.close()
  f = open('/var/www/html/neuronal_network/data/weights_layer2.txt', 'w')
  f.close()
  