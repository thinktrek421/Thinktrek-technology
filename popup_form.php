<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thinktrek_technology";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search filter
$search = isset($_GET['search']) ? trim($_GET['search']) : "";

// Pagination settings
$limit = 5; // Number of records per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Prepare the SQL query with a search filter
$sql = "SELECT id, name, email, phone, message, created_at FROM popup_form 
        WHERE name LIKE ? OR email LIKE ? OR phone LIKE ? 
        ORDER BY id DESC LIMIT ? OFFSET ?";

$stmt = $conn->prepare($sql);
$searchTerm = "%$search%";
$stmt->bind_param("sssii", $searchTerm, $searchTerm, $searchTerm, $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

// Get total number of records for pagination
$total_sql = "SELECT COUNT(*) AS total FROM popup_form 
              WHERE name LIKE ? OR email LIKE ? OR phone LIKE ?";
$total_stmt = $conn->prepare($total_sql);
$total_stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
$total_stmt->execute();
$total_result = $total_stmt->get_result();
$total_row = $total_result->fetch_assoc();
$total_pages = ceil($total_row['total'] / $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }

        /* Search Box */
        form {
            margin-bottom: 15px;
        }

        input[type="text"] {
            padding: 8px;
            width: 90%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive Table */
        .table-container {
            overflow-x: auto;
            margin: 20px auto;
            width: 95%;
            max-width: 1000px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: slideUp 1s ease-in-out;
            background: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        /* Hover Effect */
        tr:hover {
            background-color: #f1f1f1;
            transition: 0.3s ease;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .pagination a {
            padding: 10px 15px;
            margin: 5px;
            text-decoration: none;
            border: 1px solid #007bff;
            color: #007bff;
            border-radius: 5px;
            transition: 0.3s;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
        }

        .pagination a:hover {
            background-color: #0056b3;
            color: white;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 600px) {
            th, td {
                font-size: 14px;
                padding: 8px;
            }

            button {
                width: 100%;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<h2>Responsive Contact Form Data</h2>

<!-- Search Form -->
<form method="GET">
    <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search by name, email, or phone">
    <button type="submit">Search</button>
</form>

<!-- Data Table -->
<div class="table-container">
    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Date</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found.</p>";
    }
    ?>
</div>

<!-- Pagination -->
<div class="pagination">
    <?php if ($page > 1): ?>
        <a href="?page=<?= $page - 1 ?>&search=<?= htmlspecialchars($search) ?>">&laquo; Prev</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <a href="?page=<?= $i ?>&search=<?= htmlspecialchars($search) ?>" class="<?= $i == $page ? 'active' : '' ?>"><?= $i ?></a>
    <?php endfor; ?>

    <?php if ($page < $total_pages): ?>
        <a href="?page=<?= $page + 1 ?>&search=<?= htmlspecialchars($search) ?>">Next &raquo;</a>
    <?php endif; ?>
</div>

</body>
</html>

<?php
// Close database connections
$stmt->close();
$total_stmt->close();
$conn->close();
?>
