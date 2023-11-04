<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Vowels</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Count Vowels</h1>
        <form action="count_vowels.php" method="POST">
            <div class="form-group">
                <label for="inputString">Enter a string:</label>
                <input type="text" class="form-control" id="inputString" name="inputString" required>
            </div>
            <button type="submit" class="btn btn-primary">Count Vowels</button>
        </form>

        <?php
        if (isset($_POST['inputString'])) {
            $inputString = $_POST['inputString'];
            $vowelCount = countVowels($inputString);
            echo "<p>The number of vowels in the string is: $vowelCount</p>";
        }

        function countVowels($str) {
            $str = strtolower($str);
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $count = 0;
            for ($i = 0; $i < strlen($str); $i++) {
                $char = $str[$i];
                // Check if the character is an alphabetic character and a vowel
                if (ctype_alpha($char) && in_array($char, $vowels)) {
                    $count++;
                }
            }
            return $count;
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
