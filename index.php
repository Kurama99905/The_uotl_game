<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>The Univesity Game</title>
</head>
<body>

    <div class="head">
        <img src="image.png" alt="Politechnika logo">
    </div>
    <div id="text">
    <?php 
        $conn=mysqli_connect("localhost","root","","the_game");
        $res = mysqli_query($conn, 'SELECT * FROM `questions`');
        foreach($res as $value){
            echo $value['text'], '<br/>';
        ?>
        </div>
        <div id="timer">1:00</div>
  <script>
    let timeLeft = 60; // Set to 60 seconds (1 minute)
    const timerElement = document.getElementById('timer');
    const contentElement = document.getElementById('timer');

    const countdown = setInterval(() => {
      // Calculate minutes and seconds
      const minutes = Math.floor(timeLeft / 60);
      const seconds = timeLeft % 60;

      // Update the timer display
      timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

      // Check if time is up
      if (timeLeft <= 0) {
        clearInterval(countdown); // Stop the timer
        timerElement.textContent = "0:00"; // Set timer to 0:00
        contentElement.textContent = "Time's up! Time to check your knowledge."; // Change the content
        document.getElementById("text").style.display = "none";
        document.getElementById("timer").style.display = "none";
        document.getElementById("container").style.display = "block";
      }

      timeLeft--; // Decrement the time remaining
    }, 1000); // Run every 1 second (1000 milliseconds)
  </script>
  <div id="container" class="container"><div class="question">
    <?php 
        echo $value['question'];
        ?></div>
  <div class="answer_1"><?php echo $value['answer_1'];?></div>
  <div class="answer_2"><?php echo $value['answer_2'];?></div>
  <div class="answer_3"><?php echo $value['answer_3'];?></div>
  <div class="answer_4"><?php echo $value['answer_4'];};
        $conn -> close();
        ?>
  </div></div>
</body>
</html>