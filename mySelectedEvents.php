<?php
include 'dbConnect.php';

try {
    $stmt = $db->prepare("SELECT * FROM events");
    $stmt->execute();
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($events) > 0) {
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Name</th><th>Date</th><th>Location</th></tr>';

        foreach ($events as $event) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($event['id']) . '</td>';
            echo '<td>' . htmlspecialchars($event['name']) . '</td>';
            echo '<td>' . htmlspecialchars($event['date']) . '</td>';
            echo '<td>' . htmlspecialchars($event['location']) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No events found.';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
