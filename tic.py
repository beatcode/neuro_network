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

    # The neural network prints its weights
    def get_weights(self, layer):
     	if layer == '1':
           return self.layer1.synaptic_weights
       	elif layer == '2':
	   return self.layer2.synaptic_weights
        # print "    Layer 2 (1 neuron, with 4 inputs): </br>" 
        # print self.layer2.synaptic_weights


if __name__ == "__main__":

        #Seed the random number generator
    random.seed(1)

        # Create layer 1 (4 neurons, each with 3 inputs)
    layer1 = NeuronLayer(10, 9)

        # Create layer 2 (a single neuron with 4 inputs)
    layer2 = NeuronLayer(9, 10)

    # Parameter vom Web
    input_parameter =  sys.argv[1]
    
      # in array konvertieren
    input_int = input_parameter.split(',')

    # numpy array
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
    
    # Resultat  runden
    hidden_state, output = neural_network.think( input )
    output_round = [ round(elem, 1) for elem in output ]
    output_round_string = str(output_round).strip('[]')
        	

    # speichere die akutellen gewichtung
    # np.savetxt('/var/www/html/neuronal_network/weights_layer1.txt', np.asarray(neural_network.get_weights('1')), delimiter=",")
    # np.savetxt('/var/www/html/neuronal_network/weights_layer2.txt', np.asarray(neural_network.get_weights('2')), delimiter=",")

    # fuer ajax ausgeben
    print output_round_string
     


