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
    
    # Parameter konvertieren I
    input_int = input_parameter.split(',')

    # Parameter konvertieren II
    input = np.array(input_int, dtype=np.float32)

    # Combine the layers to create a neural network
    neural_network = NeuralNetwork(layer1, layer2, input)

    training_set_inputs = array([     
    [ 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5 ],
    [ 1, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5 ],
    [ 1, 0.5, 0.5, 0.5, 0, 0.5, 0.5, 0.5, 0.5 ],
    [ 1, 0.5, 0.5, 0.5, 0, 0.5, 0.5, 0.5, 1 ],
    [ 1, 0.5, 0.5, 0.5, 0, 0.5, 0.5, 0, 1 ],
    [ 1, 1, 0.5, 0.5, 0, 0.5, 0.5, 0, 1 ],
    [ 1, 1, 0, 0.5, 0, 0.5, 0.5, 0, 1 ],
    [ 1, 1, 0, 0.5, 0, 0.5, 1, 0, 1 ],
    [ 1, 1, 0, 0, 0, 0.5, 1, 0, 1 ],

    [ 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5 ],
    [ 0.5, 0.5, 0.5, 0.5, 1, 0.5, 0.5, 0.5, 0.5 ],
    [ 0.5, 0.5, 0, 0.5, 1, 0.5, 0.5, 0.5, 0.5 ],
    [ 0.5, 0.5, 0, 0.5, 1, 0.5, 0.5, 1, 0.5 ],
    [ 0.5, 0, 0, 0.5, 1, 0.5, 0.5, 1, 0.5 ],
    [ 1, 0, 0, 0.5, 1, 0.5, 0.5, 1, 0.5 ], 
    [ 1, 0, 0, 0.5, 1, 0, 0.5, 1, 0.5 ],
    [ 1, 0, 0, 0.5, 1, 0, 0.5, 1, 1 ],
    [ 1, 0, 0, 0.5, 1, 0, 0, 1, 1 ],

    [ 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5 ], 
    [ 0.5, 1, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5 ],
    [ 0.5, 1, 0.5, 0.5, 0, 0.5, 0.5, 0.5, 0.5 ],
    [ 0.5, 1, 0.5, 0.5, 0, 0.5, 0.5, 1, 0.5 ],
    [ 0.5, 1, 0, 0.5, 0, 0.5, 0.5, 1, 0.5 ],
    [ 0.5, 1, 0, 0.5, 0, 0.5, 1, 1, 0.5 ],
    [ 0.5, 1, 0, 0, 0, 0.5, 1, 1, 0.5 ],
    [ 0.5, 1, 0, 0, 0, 1, 1, 1, 0.5 ],
    [ 0.5, 1, 0, 0, 0, 1, 1, 1, 0 ]])
      


    training_set_outputs = array([      
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 			     0.5, 0.5, 0.5, 0.5, 1, 1, 1, 1, 1, 		    0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 1],
    [0.5, 0.5, 0.5, 0.5, 1, 1, 1, 1, 1, 		 0.5, 0.5, 0.5, 0, 0, 0, 0, 0, 0, 		        1, 1, 1, 1, 1, 1, 1, 1, 1],
    [0.5, 0.5, 0.5, 0.5, 0.5, 0, 0, 0, 0, 		 0.5, 0, 0, 0, 0, 0, 0, 0, 0, 			        0.5, 0.5, 0.5, 0, 0, 0, 0, 0, 0],
    [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0, 0, 	 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 1, 	0.5, 0.5, 0.5, 0.5, 0.5, 0, 0, 0, 0], 
    [0.5, 0, 0, 0, 0, 0, 0, 0, 0,	 		     1, 1, 1, 1, 1, 1, 1, 1, 1, 			        0.5, 0, 0, 0, 0, 0, 0, 0, 0],
    [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 1,  0.5, 0.5, 0.5, 0.5, 0.5, 0, 0, 0, 0, 		    0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 1, 1, 1],
    [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 1, 1, 1, 	 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0, 0, 	    0.5, 0.5, 0.5, 0.5, 1, 1, 1, 1, 1],
    [0.5, 0.5, 0.5, 0, 0, 0, 0, 0, 0, 		     0.5, 0.5, 1, 1, 1, 1, 1, 1, 1, 			    0.5, 0.5, 1, 1, 1, 1, 1, 1, 1],
    [0.5, 0.5, 1, 1, 1, 1, 1, 1, 1, 		     0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 1, 1, 1, 		0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0, 0]]).T


    # Train the neural network using the training set.
    # Do it x times and make small adjustments each time.
    neural_network.train(training_set_inputs, training_set_outputs, 10000)

    # Test the neural network with a new situation.
    hidden_state, output = neural_network.think( input )

    # Output Konvertieren 
    output_round = [ round(elem, 1) for elem in output ]
    output_round_string = str(output_round).strip('[]')
        	
    # fuer ajax ausgeben
    print output_round_string
     
    # speichere die akutellen gewichtung
    #np.savetxt('/var/www/html/neuronal_network/weights_layer1.txt', np.asarray(neural_network.get_weights('1')), delimiter=",")
    #np.savetxt('/var/www/html/neuronal_network/weights_layer2.txt', np.asarray(neural_network.get_weights('2')), delimiter=",")


