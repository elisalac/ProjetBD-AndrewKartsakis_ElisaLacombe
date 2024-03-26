<!DOCTYPE html>
<html>

<head>
    <style>
        #formContainer {
            margin-top: 100px;
        }

        fieldset {
            width: 800px;
            margin: auto;
        }

        input[type=text],
        select,
        #detailsFieldset {
            margin-bottom: 10px;
        }

        input[type=submit] {
            position: relative;
            left: 700px;
        }

        label {
            margin-right: 41px;
        }

        select {
            width: 100px;
        }
    </style>
</head>

<body>
    <div id="formContainer">
        <fieldset>
            <legend>Add a document</legend>
            <form>
                <div id="inputContainer">
                    <!-- Id and availability will be generated automatically -->
                    <input type="text" min="1" placeholder="Title" /> <br>
                    <label name="typeDocument">Type</label>
                    <select name="typeDocument">
                        <!-- options will be generated -->
                    </select>

                    <div id="copy">
                        <input type="hidden" name="inputCount" value="<?php echo $inputCount; ?>">
                        <button type="submit" name="addInput" id="addInput">Add input</button>
                    </div>

                    <fieldset id="detailsFieldset">
                        <legend>Details</legend>
                        <input type="text" min="1" placeholder="Author" /> <br>
                        <input type="text" min="1" placeholder="Year" /> <br>
                        <input type="text" min="1" placeholder="Edition" /> <br>
                    </fieldset>
                    <input type="submit" value="Add document" />
                </div>
            </form>
        </fieldset>
    </div>
</body>
<?php
if (isset($_POST['addInput'])) {
    // Retrieve existing input count if any
    $inputCount = isset($_POST['inputCount']) ? $_POST['inputCount'] : 1;
    // Increment input count
    $inputCount++;
} else {
    // If the button hasn't been clicked yet, set default count
    $inputCount = 1;
}
// Generate input fields based on count
for ($i = 1; $i <= $inputCount; $i++) {
    echo '<input type="text" placeholder="Copy ' . $i . '" />';
}
?>

</html>