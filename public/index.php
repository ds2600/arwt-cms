<?php

$config = require __DIR__ . '/../config/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $config['callsign']; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/arwt.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/showdown@2.1.0/dist/showdown.min.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <?php include __DIR__ . '/../common/sidebar.php'; ?>
    
<!-- 
Put your content in the markdownContent div. The Showdown library will convert the markdown to HTML.
If you need assistance with markdown, see https://stackedit.io/ 
-->
<div id="markdownContent" style="display: none;">

<div class="image-container" style="margin:auto; width:100%;">
    <p align="center">
        <img src="/images/arwt-transparent.png" alt="ARWT Logo" width="200" height="200">
        <div class="caption">You can also use HTML/CSS on markdown pages.</div>
    </p>
</div>

# Hello ARWT-CMS!
### What is ARWT-CMS?
ARWT (Amateur Radio Website Template) is a basic CMS to help amateur radio operators make their sites a little prettier.  It's a fork of my original project, [ARWT](https://www.github.com/ds2600/arwt), which was essentially a static HTML template.

Check out the [ARWT repo](https://www.github.com/ds2600/arwt) or the [ARWT-CMS repo](https://www.github.com/ds2600/arwt-cms) for more information.


</div>
    <!-- Rendered Content. Do not edit or remove. -->
    <div id="renderedContent" class="content">
    </div>
    <script src="/js/showdown.js"></script>
</body>
</html>
