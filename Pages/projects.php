<div class="projects-outer" id="projects">
    <div class="projects-grid" id="projects-container">
        <?php
        include_once "./Components/db.php";

        $sql = "SELECT * FROM Portfolio_Projects";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="projects-content">
                    <div><?= $row["name"] ?></div>
                    <div class="projects-content-img">image placeholder</div>
                    <div><?= $row["description"] ?></div>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }

        ?>
    </div>
</div>
