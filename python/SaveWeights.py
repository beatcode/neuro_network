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
    input_parameter =  "1.0,1.0,1.0,1.0,1.0,1.0,1.0,1.0,1.0"
    
    # Parameter konvertieren I
    input_int = input_parameter.split(',')

    # Parameter konvertieren II
    input = np.array(input_int, dtype=np.float32)

    # Combine the layers to create a neural network
    neural_network = NeuralNetwork(layer1, layer2, input)
      
    # Lade die Input und Output Arrays
    training_set_inputs = np.loadtxt('/var/www/html/neuronal_network/data/input_1.txt', delimiter=",")
    training_set_outputs = np.loadtxt('/var/www/html/neuronal_network/data/output_1.txt', delimiter=",")
    
    # Train the neural network using the training set.
    # Do it x times and make small adjustments each time.
    neural_network.train(training_set_inputs, training_set_outputs, 350000)

    # Erstelle die neuen Array mit den Gewichtungen
    np.savetxt('/var/www/html/neuronal_network/data/weights_layer1.txt',  neural_network.get_weights('1'), delimiter=",")
    np.savetxt('/var/www/html/neuronal_network/data/weights_layer2.txt',  neural_network.get_weights('2'), delimiter=",")
    
    