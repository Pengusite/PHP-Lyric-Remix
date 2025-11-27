<!--Catanghal, Justine Chollo C. | CYB 201 -->
<?php
$title = "You Are Not Alone";
$artist = "Michael Jackson";
$mood = "Emotional";

// Numeric Variables
$verseCount = "3";  
$repeatChorus = 3;    

$totalLines = $verseCount * 4; 
$chorusLabel = "Chorus x " . $repeatChorus;

// ARRAYS that are repeating
$songNouns = ["day", "night", "heart", "world", "love", "hand"];
$songVerbs = ["cry", "hear", "bear", "whisper", "hold", "ask", "sit"];
$songAdjectives = ["cold", "far", "alone", "lone"];

// Verse 1
$verse1 = [
    "Another {$songNouns[0]} has gone, I'm still {$songAdjectives[2]}",
    "How could this be? You're not here with me",
    "You never said goodbye, someone tell me why",
    "Did you have to go and leave my {$songNouns[3]} so {$songAdjectives[0]}?"
];

// Pre-Chorus
$preChorus = [
    "Every {$songNouns[0]}, I {$songVerbs[6]} and ask myself \"How did love slip away?\"",
    "Somethin' whispers in my ear and says"
];

// Chorus
$chorus = [
    "You are not alone, I am here with you",
    "Though you're {$songAdjectives[1]} away, I am here to stay",
    "But you are not alone, I am here with you",
    "Though we're {$songAdjectives[1]} apart, you're always in my {$songNouns[2]}"
];

// Post-Chorus
$postChorus = [
    "'Lone, 'lone",
    "Why? 'Lone"
];

// Verse 2
$verse2 = [
    "Just the other {$songNouns[1]}, I thought I heard you {$songVerbs[0]}",
    "Asking me to come and {$songVerbs[4]} you in my arms",
    "I can {$songVerbs[1]} your prayers, your burdens I will {$songVerbs[2]}",
    "But first I need your {$songNouns[5]}, then forever can begin"
];

// Bridge
$bridge = [
    "Whisper three words and I'll come runnin', fly",
    "And girl, you know that I'll be there",
    "I'll be there"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            text-align: center;
        }

       h1 {
            text-align: center;
            font-size: 2.5em;
            color: white;
            margin-bottom: 10px;
            padding: 15px 0;
            border-radius: 8px;
        }

        .label-box {
            background: linear-gradient(to top, #c84c38, #6c0d24);
            padding: -15px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.1em;
            width: 100%;
            color: #fbffff;
            padding-bottom: 10px;
        }


        h2 {
            text-align: center;
            font-size: 1.5em;
            color: #fbffff;
        }

        h3 {
            color: #444;
            margin-top: 25px;
            margin-bottom: 10px;
            padding-bottom: 5px;
        }

        p {
            text-align: center;
            font-size: 1em;
            margin-bottom: 40px;
        }

        div {
            margin-bottom: 20px;
        }

        br {
            line-height: 1.5;
        }
    </style>

</head>

<body>

<div class="label-box">
<h1><?php echo $title; ?></h1>
<h2>By: <?php echo $artist; ?></h2>

    Mood: <strong><?php echo $mood; ?></strong><br>
    Total Verse Lines: <strong><?php echo $totalLines; ?></strong><br>
    Label: <strong><?php echo $chorusLabel; ?></strong>
</div>

<?php
echo "<h3>Verse 1</h3>";
foreach ($verse1 as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Pre-Chorus</h3>";
foreach ($preChorus as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Chorus</h3>";
foreach ($chorus as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Post-Chorus</h3>";
foreach ($postChorus as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Verse 2</h3>";
foreach ($verse2 as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Pre-Chorus</h3>";
foreach ($preChorus as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Chorus</h3>";
foreach ($chorus as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Bridge</h3>";
foreach ($bridge as $line) echo "$line<br>";
echo "<br>";

echo "<h3>Chorus</h3>";
foreach ($chorus as $line) echo "$line<br>";
echo "<br>";
?>
</body>
</html>