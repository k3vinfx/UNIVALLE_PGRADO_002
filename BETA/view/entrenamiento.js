const net = new brain.NeuralNetwork();

const data = [
    { input: { estornudo: 1 }, output: { resfrio: 1 } },
    { input: { estornudo: 3 }, output: { resfrio: 1 } },
    { input: { estornudo: 0 }, output: { resfrio: 0 } },
    // ... otros datos de entrenamiento ...
];
net.train(data);

// Realizar una predicción

function Predecir() {
    const Nuevo_dato = parseFloat(document.getElementById('inputESTORNUDOS').value);

    // Realizar una predicción
    const output = net.run({ estornudo: Nuevo_dato });

    const predictionResult = document.getElementById('result');
    predictionResult.textContent = 'Resultado de la predicción: ' + JSON.stringify(output);

    console.log('Resultado de la predicción:', output);

}