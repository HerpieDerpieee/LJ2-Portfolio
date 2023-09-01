<div class="projects-outer" id="projects">
    <h1 class="projects-fancy-title">Projecten</h1><br><br>
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
                    <h1><?= $row["name"] ?></h1>
                    <img class="projects-content-img" src="<?= $row['img'] ?>"/>
                    <div><?= $row["description"] ?></div>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }

        ?>
    </div>
    <button id="projects-show-more" onclick="disappear(true)">Show More</button>
</div>