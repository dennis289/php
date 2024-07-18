<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body script="padding:500px">
    <h1>Feedback</h1>
    <p>Provide your feedback here</p>
   <div class="container">
      <form action="submit_feedback.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" 
            id="name" required
            class="form-control"
            >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" 
            id="email" required
            class="form-control">
        </div>
        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea name="feedback" id="feedback"
             required
             class="form-control"
             ></textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating"
             required
             class="form-control"
             >
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        </div>
        <div>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        <div>
            <a href="view_feedback.php">View Feedback</a>
        </div>

      </form>
   </div>
   
    
</body>
</html>