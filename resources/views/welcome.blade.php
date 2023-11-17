<!DOCTYPE html>
<html>

<head>
    <title>Laravel TensorFlow.js Integration</title>
</head>

<body>
    <h1>Laravel TensorFlow.js Integration</h1>

    <!-- Load TensorFlow.js library -->
    <script src="
            https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@4.13.0/dist/tf.min.js
            "></script>


    <script>
        async function loadModel() {
            // Load the TensorFlow.js model with binary weights
            const model = await tf.loadLayersModel('http://127.0.0.1:8000/model/model.json');

            // Now you can use the model for predictions
            // Example: const result = model.predict(inputData);
        }

        // Load the model when the page is ready
        document.addEventListener('DOMContentLoaded', loadModel);
    </script>
</body>

</html>
