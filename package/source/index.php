<?php 
/* 21 Day Project - Goal Selection Page */
?>

    <head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Custom Stylesheets --> 
<link rel="stylesheet" href="assets/css/goal-select.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<title>The 21 Day Project - a Realistic Goal-Setting Platform</title>   



</head>
<body>
<div class="home-container">
    <nav class="navbar navbar-light g-nav">
                <!-- <h1 class="fa tb-title">The 21 Day Project</h1> -->
                <img src="assets/img/logo-transparent.png" height="75px">
                <!-- <p class="progress prog1"></p>
                <p class="progress prog2"></p>
                <p class="progress prog3"></p> -->
            <form class="search-form">
                <input type="text" id="search-bar" placeholder="Search for topic...">
                <button class="btn" id="search-btn">Search</button>
            </form>
        </nav>
</div>
       
    <!-- TODO: make topics dynamically populated + implement logic for styling when odd number of topics!-->
<?php
    $goals = [
        'Social Science',
        'Computer Science',
        'English',
        'Mathematics',
        'Chemistry',
        'Physics',
        'Biology',
        'History',
        'Other'
    ];
    ?>

        <div class="g-bttns bttns">
        <?php 
        foreach($goals as $g) {
        ?>
        <button class="g-btn btn">
        <h1 class="g-name"><?php echo $g ?></h1>
        <p>This is a description</p>
        <input type="date" value="<?php 
        date_default_timezone_set('Canada/Eastern');
        $date = date('Y-m-d'); 
        echo date('Y-m-d', strtotime($date. ' + 21 days')); ?>">
        </button>
        <?php } ?>
    </div>
</div>
</body>
