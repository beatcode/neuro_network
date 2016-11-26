#!/usr/bin/python
# -*- coding: ascii -*-

from numpy import exp, array, random, dot
import numpy as np
import sys, os

if __name__ == "__main__":


  
  #   # Parameter Uebergabe von PHP Script
       input_parameter =  sys.argv[1]
       output_parameter =  sys.argv[2]

    
  #     # Parameter konvertieren I
       input_int = input_parameter.split(',')
       output_int = output_parameter.split(',')

      
  #     # Parameter konvertieren II
       input = np.array(input_int, dtype=np.float32)
       output = np.array(output_int, dtype=np.float32)

       
        
       f_handleI = file('/var/www/html/neuronal_network/data/input_1.txt', 'a')
       np.savetxt(f_handleI, np.matrix(input), delimiter=",", fmt="%s", newline='\n')
       f_handleI.close()


       f_handleO = file('/var/www/html/neuronal_network/data/output_1.txt', 'a')
       np.savetxt(f_handleO, np.matrix(output), delimiter=",", fmt="%s", newline='\n')
       f_handleO.close()