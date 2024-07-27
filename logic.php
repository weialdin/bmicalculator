<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        if (is_numeric($height) && is_numeric($weight)) {
            $tinggiBadan = $height / 100;
            $bmi = $weight / ($tinggiBadan * $tinggiBadan);

            echo "<div class='card'>";
            echo "<div class='card-header text-center'>";
            echo "<h2>Hasil BMI</h2>";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<p><strong>Nama:</strong> " . htmlspecialchars($name) . "</p>";
            echo "<p><strong>Tinggi Badan:</strong> " . htmlspecialchars($height) . " cm</p>";
            echo "<p><strong>Berat Badan:</strong> " . htmlspecialchars($weight) . " kg</p>";
            echo "<p><strong>BMI:</strong> " . number_format($bmi, 2) . "</p>";

            if ($bmi < 18.5) {
                echo "<p><strong>Status:</strong> Underweight</p>";
            } elseif ($bmi < 24.9) {
                echo "<p><strong>Status:</strong> Normal weight</p>";
            } elseif ($bmi < 29.9) {
                echo "<p><strong>Status:</strong> Overweight</p>";
            } else {
                echo "<p><strong>Status:</strong> Obese</p>";
            }

            echo "<a href='index.html' class='btn btn-primary mt-3'>Hitung Lagi</a>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Input tidak valid. Silakan kembali dan coba lagi.";
            echo "</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Metode request tidak valid.";
        echo "</div>";
    }
    ?>
