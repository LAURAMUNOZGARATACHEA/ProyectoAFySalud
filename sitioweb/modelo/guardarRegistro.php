
<?php
session_start();
$respondentId = session_id() . '_' . $_SESSION['form_counter'];
echo "Session is set. Respondent ID: " . $respondentId . "<br>";
include("../administrador/config/bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Reading the question_codes from the table questions
        $sql = "SELECT question_code FROM questions_metadata";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

    // Fetch question codes into an array
        $questionCodes = $stmt->fetchAll(PDO::FETCH_COLUMN);
        //echo "Fetched Question Codes: " . implode(", ", $questionCodes) . "<br>";

    // Iterate through the question codes
        foreach ($questionCodes as $code) {
    // Construct the field name using the question code
             $fieldName = $code;
    // Check if the field exists in the form data
    if (isset($_POST[$fieldName]) || isset($_POST[strtolower($fieldName)])) {
    // Check if it's a multiple-choice question
        if (is_array($_POST[$fieldName] ?? $_POST[strtolower($fieldName)])) {
        // For multiple-choice questions, concatenate selected options into a comma-separated string
            $selectedOptions = implode(',', $_POST[$fieldName] ?? $_POST[strtolower($fieldName)]);
            $respuesta = NULL;  // Set $respuesta to NULL for multiple-choice questions
        } else {
        // For single-choice questions, use the selected option directly
            $respuesta = $_POST[$fieldName] ?? $_POST[strtolower($fieldName)];
            $respuesta = ($respuesta === "") ? NULL : $respuesta;
            $selectedOptions = NULL;  // Set $selectedOptions to NULL for single-choice questions
        }
    }   
    else {
        $respuesta = NULL;
        $selectedOptions = NULL;
    }

// Insert Query
    $insertQuery = "INSERT INTO responses (response, respondent_id, submitted_at, question_code, selected_options) 
                VALUES (?, ?, NOW(), ?, ?)";
    $insertStatement = $pdo->prepare($insertQuery);

// Bind parameters and execute the insert statement
    $insertStatement->bindParam(1, $respuesta);
    $insertStatement->bindParam(2, $respondentId);
    $insertStatement->bindParam(3, $code);
    $insertStatement->bindParam(4, $selectedOptions);  // Use $selectedOptions for selected_options
    $insertStatement->execute();

//echo "Response $respuesta successfully inserted into the database.";
        } 
        }
// Redirect to the result page
header('Location: mensajeEnvio.php');
session_write_close();
?>

