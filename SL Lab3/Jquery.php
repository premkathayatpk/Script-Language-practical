<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hide/Unhide Images</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .image-container {
        display: flex;
        flex-wrap: wrap;
    }
    .image-container img {
        width: 200px;
        height: auto;
        margin: 5px;
    }
</style>
</head>
<body>

<div class="image-container">
    <img src="flower.png" class="image">
</div>

<button id="hideButton">Hide</button>
<button id="unhideButton">Unhide</button>
