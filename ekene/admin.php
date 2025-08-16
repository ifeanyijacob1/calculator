<?php
$conn = new mysqli("localhost", "root", "", "portfolio");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM messages ORDER BY sent_at ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Visitor Messages</title>
  <style>
      body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
      table { width: 100%; border-collapse: collapse; margin-top: 20px; }
      th, td { padding: 12px; border: 1px solid #ccc; text-align: left; }
      th { background: #667eea; color: #fff; }
      tr:nth-child(even) { background: #f9f9f9; }
      button { padding: 6px 12px; border: none; border-radius: 5px; cursor: pointer; }
      .btn-view { background: #667eea; color: white; }

      /* Modal Styles */
      .modal {
          display: none;
          position: fixed;
          z-index: 1000;
          top: 0; left: 0;
          width: 100%; height: 100%;
          background: rgba(0,0,0,0.7);
          align-items: center;
          justify-content: center;
      }
      .modal-content {
          background: #fff;
          padding: 20px;
          border-radius: 10px;
          width: 500px;
          max-width: 90%;
          box-shadow: 0 5px 20px rgba(0,0,0,0.3);
          position: relative;
      }
      .modal-header { font-size: 20px; margin-bottom: 10px; }
      .modal-body { margin-bottom: 20px; line-height: 1.6; }
      .close {
          position: absolute; top: 10px; right: 15px;
          font-size: 20px; cursor: pointer; color: #333;
      }
      .close:hover { color: red; }
  </style>
</head>
<body>
  <h2>📩 Visitor Messages</h2>

  <table>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Contact Method</th>
          <th>Date</th>
          <th>Action</th>
      </tr>
      <?php while($row = $result->fetch_assoc()) { 
          // Encode row safely for JS
          $jsonData = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
      ?>
          <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['subject']; ?></td>
              <td><?php echo $row['contact_method']; ?></td>
              <td><?php echo $row['sent_at']; ?></td>
              <td>
                  <button class="btn-view" onclick='viewMessage(<?php echo $jsonData; ?>)'>View</button>
              </td>
          </tr>
      <?php } ?>
  </table>

  <!-- Modal -->
  <div id="messageModal" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal()">&times;</span>
          <div class="modal-header" id="modalSubject">Subject</div>
          <div class="modal-body">
              <p><strong>Name:</strong> <span id="modalName"></span></p>
              <p><strong>Email:</strong> <span id="modalEmail"></span></p>
              <p><strong>Date:</strong> <span id="modalDate"></span></p>
              <hr>
              <p id="modalMessage"></p>
          </div>
      </div>
  </div>

  <script>
      function viewMessage(data) {
          document.getElementById("modalSubject").textContent = "Subject: " + data.subject;
          document.getElementById("modalName").textContent = data.name;
          document.getElementById("modalEmail").textContent = data.email;
          document.getElementById("modalDate").textContent = data.sent_at;
          document.getElementById("modalMessage").textContent = data.message;

          document.getElementById("messageModal").style.display = "flex";
      }

      function closeModal() {
          document.getElementById("messageModal").style.display = "none";
      }

      // Close modal if user clicks outside modal content
      window.onclick = function(event) {
          const modal = document.getElementById("messageModal");
          if (event.target === modal) {
              modal.style.display = "none";
          }
      }
  </script>
</body>
</html>
