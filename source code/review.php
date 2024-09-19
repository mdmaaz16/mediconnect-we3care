<?php
session_start();
include "db.php";
$patient_id = $_SESSION['patient_id'];
$app_id = $_GET['id'];
$sql = "SELECT doctor_ids FROM bookappointment WHERE appointment_id = " . $app_id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$doctor_id = $row['doctor_ids'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Modal</title>
    <style>
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }
        .star-rating input[type=radio] {
            display: none;
        }
        .star-rating label {
            font-size: 2em;
            color: #ddd;
            cursor: pointer;
        }
        .star-rating input[type=radio]:checked ~ label {
            color: #f5b301;
        }
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #f5b301;
        }
        .b1{
            border: 3px solid rgba(0, 128, 128, 0.8);
            border-radius: 7px;
            padding: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxxxxx" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h3 align="center">Give Your Review</h3>
    <!-- Button trigger modal -->
    
    <div class="container mt-5 b1">
        <div class="text-center">
            <h1>Review</h1>
            <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reviewModal">Review</button>
            <button class="btn btn-secondary mt-3">Go Back</button>
        </div>
    </div>

    <!-- Review Modal -->
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel">Give Your Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="save_review.php" method="post">
                    <div class="modal-body">
                        <div class="star-rating">
                            <input type="radio" name="rating" id="5-stars" value="5"><label for="5-stars">&#9733;</label>
                            <input type="radio" name="rating" id="4-stars" value="4"><label for="4-stars">&#9733;</label>
                            <input type="radio" name="rating" id="3-stars" value="3"><label for="3-stars">&#9733;</label>
                            <input type="radio" name="rating" id="2-stars" value="2"><label for="2-stars">&#9733;</label>
                            <input type="radio" name="rating" id="1-star" value="1"><label for="1-star">&#9733;</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mt-3" name="review" id="reviewText" rows="3" placeholder="Write your review here..."></textarea>
                        </div>
                        <input type="hidden" name="app_id" value="<?php echo $app_id; ?>">
                        <input type="hidden" name="doctor_id" value="<?php echo $doctor_id; ?>">
                        <input type="hidden" name="patient_id" value="<?php echo $patient_id; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
