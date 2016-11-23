#!/usr/bin/python
# -*- coding: ascii -*-

#Quelle: https://medium.com/technology-invention-and-more/how-to-build-a-simple-neural-network-in-9-lines-of-python-code-cc8f23647ca1#.pea0nt22f
from numpy import exp, array, random, dot
import numpy as np
import sys, os
from NeuralNetwork import NeuralNetwork
from NeuralNetwork import NeuronLayer

if __name__ == "__main__":

    #Seed the random number generator
    random.seed(1)

    # Create layer 1 (4 neurons, each with 3 inputs)
    layer1 = NeuronLayer(10, 9)

    # Create layer 2 (a single neuron with 4 inputs)
    layer2 = NeuronLayer(9, 10)

    # Parameter Uebergabe von PHP Script
    input_parameter =  sys.argv[1]
    output_parameter = sys.argv[2]
    
    # Parameter konvertieren I
    input_int = input_parameter.split(',')
    output_int = output_parameter.split(',')
    
    # Parameter konvertieren II
    input = np.array(input_int, dtype=np.float32)
    output = np.array(output_int, dtype=np.float32)

    # Input
    f_handle = file('/var/www/html/neuronal_network/Input.txt', 'a')
    np.savetxt(f_handle, input)
    f_handle.close()

    # Output
    f_handle = file('/var/www/html/neuronal_network/Output.txt', 'a')
    np.savetxt(f_handle, output)
    f_handle.close()
