function getAllPupuk($connection) {
    $query = "SELECT * FROM pupuk ORDER BY nama ASC";
    $result = mysqli_query($connection, $query);

    $dataPupuk = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $dataPupuk[] = $row;
    }

    return $dataPupuk; // Mengembalikan data
}
