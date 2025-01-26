<?php include 'db_config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olympic Heroes and Legends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Condensed:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #FFFFFF;
        }

        h1 {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: #003DA5;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 700;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #003DA5;
        }

        .navbar-brand {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bold;
        }

        .nav-link {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 500;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #0078D0; 
            color: #FFFFFF; 
            font-family: 'Roboto', sans-serif; 
        }

        .hero-section {
            background-color: #00A651;
            padding: 60px 0;
            color: #FFFFFF;
            margin-top: -20px;
        }

        .hero-card {
            margin-bottom: 30px;
        }

        .card-title {
            font-weight: bold;
            color: #0078D0;
        }

        .list-unstyled li {
            margin: 10px 0;
            color: #000000;
        }

        .navbar {
            margin-bottom: 20px;
            background-color: #0078D0;
        }

        .navbar-brand,
        .nav-link {
            color: #FFFFFF;
        }

        .navbar-brand:hover,
        .nav-link:hover {
            color: #FFB114;
        }

        .featured-athlete {
            background-color: #FFB114;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .featured-athlete img {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #00A651;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0078D0;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .moment-card {
            position: relative;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            color: #FFFFFF;
            padding: 20px;
            height: 200px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .moment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .moment-card h5,
        .moment-card p {
            position: relative;
            z-index: 2;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .moment-card h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .moment-card p {
            font-size: 1rem;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            color: white;
            cursor: pointer;
            display: none;
        }

        .moment-card:hover .play-icon {
            display: block;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003DA5;">
        <div class="container">
            <a class="navbar-brand" href="#home" style="font-family: 'Arial Black', sans-serif;">Olympic Legends</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#athletes">Legendary Athletes</a>
                    <a class="nav-link" href="#moments">Iconic Moments</a>
                    <a class="nav-link" href="#hall_of_fame">Hall of Fame</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="text-center hero-section">
        <div class="container">
            <h1>Welcome to Olympic Heroes and Legends</h1>
            <p>Celebrating the greatest Olympic athletes and their achievements.</p>
            <h2>Featured Athlete of the Month</h2>
            <div class="featured-athlete">
                <img src="pic/Usain Bolt.jpg" class="img-fluid" alt="Featured Athlete">
                <h5 class="card-title">Usain Bolt</h5>
                <p class="card-text">The fastest man in the world, with 8 Olympic gold medals and world records in the
                    100m and 200m sprints.</p>
            </div>
        </div>
    </section>

    <section id="athletes" class="text-center">
        <div class="container">
            <h2>Legendary Olympic Athletes</h2>
            <div class="row">
                <?php
                // Updated query to include image_path
                $sql = "SELECT name, details, image_path FROM olympics_information";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-md-4 hero-card">
                            <div class="card">
                                <img src="pic/<?php echo $row['image_path']; ?>" 
                                     class="card-img-top" 
                                     alt="<?php echo $row['name']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <button class="btn btn-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#athleteModal"
                                            data-athlete-name="<?php echo $row['name']; ?>"
                                            data-athlete-info="<?php echo htmlspecialchars($row['details']); ?>">
                                        More Info
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section id="moments" class="text-center hero-section">
        <div class="container">
            <h2>Iconic Olympic Moments</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="moment-card position-relative"
                        style="background-image: url('pic/mexico.jpg'); height: 300px; background-size: cover; background-position: center; cursor: pointer;"
                        onclick="toggleImages('collapseMexico')">
                        <h5 class="card-title">1968 Mexico City</h5>
                        <p class="card-text">Tommie Smith and John Carlos raise their fists in a Black Power salute.</p>
                    </div>
                    <div class="collapse" id="collapseMexico">
                        <div class="row mt-2">
                            <div class="col-6">
                                <img src="pic/1.jpg" class="img-fluid" alt="Mexico Moment 1"
                                    style="height: 150px; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="pic/2.jpg" class="img-fluid" alt="Mexico Moment 2"
                                    style="height: 150px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="moment-card position-relative"
                        style="background-image: url('pic/moscow.jpg'); height: 300px; background-size: cover; background-position: center; cursor: pointer;"
                        onclick="toggleImages('collapseMoscow')">
                        <h5 class="card-title">1980 Moscow</h5>
                        <p class="card-text">The USA boycotts the Olympics in protest of the Soviet invasion of
                            Afghanistan.</p>
                    </div>
                    <div class="collapse" id="collapseMoscow">
                        <div class="row mt-2">
                            <div class="col-6">
                                <img src="pic/3.jpg" class="img-fluid" alt="Moscow Moment 1"
                                    style="height: 150px; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="pic/4.jpg" class="img-fluid" alt="Moscow Moment 2"
                                    style="height: 150px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="moment-card position-relative"
                        style="background-image: url('pic/beijing.jpg'); height: 300px; background-size: cover; background-position: center; cursor: pointer;"
                        onclick="toggleImages('collapseBeijing')">
                        <h5 class="card-title">2008 Beijing</h5>
                        <p class="card-text">Usain Bolt sets world records in the 100m and 200m sprints.</p>
                    </div>
                    <div class="collapse" id="collapseBeijing">
                        <div class="row mt-2">
                            <div class="col-6">
                                <img src="pic/5.jpg" class="img-fluid" alt="Beijing Moment 1"
                                    style="height: 150px; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="pic/6.jpg" class="img-fluid" alt="Beijing Moment 2"
                                    style="height: 150px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hall_of_fame" class="text-center hall-of-fame-section">
        <div class="container">
            <h2>Virtual Hall of Fame</h2>
            <p>Honoring the greatest Olympic athletes and their inspiring stories.</p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Athlete</th>
                        <th>Achievements</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT name, achievements FROM olympics_information";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['achievements']) . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <footer>
        <p>&copy; All rights reserved.</p>
    </footer>

    <div class="modal fade" id="athleteModal" tabindex="-1" aria-labelledby="athleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="athleteModalLabel">Athlete Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 id="modalAthleteName"></h5>
                    <p id="modalAthleteInfo"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Iconic Olympic Moments</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage1" src="" alt="Image 1" class="img-fluid mb-2">
                    <img id="modalImage2" src="" alt="Image 2" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const athleteModal = document.getElementById('athleteModal');
            athleteModal.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget;
                const athleteName = button.getAttribute('data-athlete-name');
                const athleteInfo = button.getAttribute('data-athlete-info');

                const modalTitle = athleteModal.querySelector('#modalAthleteName');
                const modalBody = athleteModal.querySelector('#modalAthleteInfo');

                modalTitle.textContent = athleteName;
                modalBody.textContent = athleteInfo;
            });
        });

        function toggleImages(collapseId) {
            const collapseElement = document.getElementById(collapseId);
            const bsCollapse = new bootstrap.Collapse(collapseElement, {
                toggle: true
            });
        }
    </script>
    <?php $conn->close(); ?>
</body>

</html>