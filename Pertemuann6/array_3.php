<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"> <!--import eksternal dengan nama style.css-->
</head>
<body>
    <h2> Multidimensional Array</h2> <!--Header 2-->
    <table> <!--Pembuatan tabel-->
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        // Membuat array multidimensi yang berisi data tentang film
            $movie = array (
                array("Avengers: Invinity War", 2018, 8.7),
                array("The Avengers", 2012, 8.1),
                array("Guardian of the galaxy", 2014, 8.1),
                array("Iron Man", 2008, 7.9)
                );
        // Menampilkan data dari array multidimensi ke dalam tabel HTML
            echo "<tr>";
                echo"<td>". $movie[0][0]. "</td>"; // Menampilkan judul film
                echo"<td>". $movie[0][1]. "</td>"; // Menampilkan tahun rilis
                echo"<td>". $movie[0][2]. "</td>"; // Menampilkan rating
            echo "</tr>";
            echo "<tr>";
                echo"<td>". $movie[1][0]. "</td>"; // Menampilkan judul film
                echo"<td>". $movie[1][1]. "</td>"; // Menampilkan tahun rilis
                echo"<td>". $movie[1][2]. "</td>"; // Menampilkan rating
            echo "</tr>";
            echo "<tr>";
                echo"<td>". $movie[2][0]. "</td>"; // Menampilkan judul film
                echo"<td>". $movie[2][1]. "</td>"; // Menampilkan tahun rilis
                echo"<td>". $movie[2][2]. "</td>"; // Menampilkan rating
            echo "</tr>";
            echo "<tr>";
                echo"<td>". $movie[3][0]. "</td>"; // Menampilkan judul film
                echo"<td>". $movie[3][1]. "</td>"; // Menampilkan tahun rilis
                echo"<td>". $movie[3][2]. "</td>"; // Menampilkan rating
            echo "</tr>";
        ?>
    </table>
</body>
</html>