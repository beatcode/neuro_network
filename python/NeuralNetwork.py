#!/usr/bin/python
# -*- coding: ascii -*-

#Quelle: https://medium.com/technology-invention-and-more/how-to-build-a-simple-neural-network-in-9-lines-of-python-code-cc8f23647ca1#.pea0nt22f
from numpy import exp, array, random, dot
import numpy as np
import sys, os


class NeuronLayer():	
		def __init__(self, number_of_neurons, number_of_inputs_per_neuron):
   			self.synaptic_weights = 2 * random.random((number_of_inputs_per_neuron, number_of_neurons)) - 1

class NeuralNetwork():
    def __init__(self, layer1, layer2, input):

        self.input = input
        self.layer1 = layer1
        self.layer2 = layer2

    # The Sigmoid function, which describes an S shaped curve.
    # We pass the weighted sum of the inputs through this function to
    # normalise them between 0 and 1.
    def __sigmoid(self, x):
        return 1 / (1 + exp(-x))

    # The derivative of the Sigmoid function.
    # This is the gradient of the Sigmoid curve.
    # It indicates how confident we are about the existing weight.
    def __sigmoid_derivative(self, x):
        return x * (1 - x)

		
    # We train the neural network through a process of trial and error.
    # Adjusting the synaptic weights each time.
    def train(self, training_set_inputs, training_set_outputs, number_of_training_iterations):
			
        for iteration in xrange(number_of_training_iterations):
            # Pass the training set through our neural network
            output_from_layer_1, output_from_layer_2 = self.think(training_set_inputs)

            # Calculate the error for layer 2 (The difference between the desired output
            # and the predicted output).
            layer2_error = training_set_outputs - output_from_layer_2
            layer2_delta = layer2_error * self.__sigmoid_derivative(output_from_layer_2)

            # Calculate the error for layer 1 (By looking at the weights in layer 1,
            # we can determine by how much layer 1 contributed to the error in layer 2).
            layer1_error = layer2_delta.dot(self.layer2.synaptic_weights.T)
            layer1_delta = layer1_error * self.__sigmoid_derivative(output_from_layer_1)

            # Calculate how much to adjust the weights by
            layer1_adjustment = training_set_inputs.T.dot(layer1_delta)
            layer2_adjustment = output_from_layer_1.T.dot(layer2_delta)

            # Adjust the weights.
            self.layer1.synaptic_weights += layer1_adjustment
            self.layer2.synaptic_weights += layer2_adjustment


    # The neural network thinks.
    def think(self, inputs):
	output_from_layer1 = self.__sigmoid(dot(inputs, self.layer1.synaptic_weights))
	output_from_layer2 = self.__sigmoid(dot(output_from_layer1, self.layer2.synaptic_weights))
	return output_from_layer1, output_from_layer2

    def set_weights(self):
	self.layer1.synaptic_weights = np.loadtxt('/var/www/html/neuronal_network/data/weights_layer1.txt', delimiter=",")
	self.layer2.synaptic_weights = np.loadtxt('/var/www/html/neuronal_network/data/weights_layer2.txt', delimiter=",")
		
		# The neural network prints its weights
    def get_weights(self, layer):
     	if layer == '1':
           return self.layer1.synaptic_weights
       	elif layer == '2':
	   return self.layer2.synaptic_weights

