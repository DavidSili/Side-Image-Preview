<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon"
          type="image/png"
          href="images/favicon.png">
    <title>Side Image Preview</title>
    <meta name="description" content="Demo page for Side Image Preview plugin">
    <meta name="author" content="David Šili">

    <script src="source/js/jquery-3.1.0.min.js"></script>
    <script src="source/js/sideImagePreview.js"></script>
<style>
    body {
        background-color: #ccc;
    }
    #middle {
        background-color: #aaa;
        position:absolute;
        z-index: 1046;
        top:100px;
        bottom:100px;
        left:100px;
        right:100px;
        border: 2px solid #000;
        padding:20px;
        overflow:auto;
    }
    #middle img {
        max-height: 100px;
    }
    div {
        overflow-y:hidden;
    }
    p {
        width: calc(100% - 220px);
        margin: 10px;
        float:left;
    }
    .thumb-preview {
        margin:5px;
        border: 3px ridge #555;
        display: block;
        height: 100px;
        float:right;
    }
</style>
<link rel="stylesheet" type="text/css" href="source/css/sideImagePreview.css" >
</head>

<body>
<div id="middle">
    <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur ligula vitae dolor facilisis, ut fringilla metus faucibus. Cras et pellentesque nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis lobortis lorem id ante pellentesque egestas. Donec tempor felis id nisl aliquam, quis venenatis odio suscipit. Sed at magna vitae nisl tempor viverra at vestibulum mi. Vivamus et iaculis sem, eu fringilla orci.</p><a href="images/1.jpg" class="thumb-preview" target="_blank" title="" ><img src="images/1s.jpg"></a></div>
    <div><p>Donec bibendum vitae quam a facilisis. Sed commodo ex sed rutrum tincidunt. Nullam id dignissim sapien. Curabitur vel ipsum quis nunc ullamcorper ullamcorper non a enim. Ut ultricies tempor massa in pharetra. Nam nec massa ac nisi gravida sagittis id rhoncus ante. In ipsum dolor, blandit at aliquam in, sagittis et leo.</p><a href="images/2.jpg" class="thumb-preview" target="_blank" title="" ><img src="images/2s.jpg"></a></div>
    <div><p>Sed eget dui et mi mollis mattis a ut tellus. Vestibulum erat libero, tincidunt eget eros nec, molestie volutpat dui. Nam quis leo et arcu commodo tincidunt. Nullam tincidunt nunc nec fermentum pretium. Suspendisse iaculis urna in fermentum blandit. Praesent eleifend, diam quis auctor dictum, arcu augue viverra metus, non pharetra sapien dui vitae libero. Nam sodales consequat purus eget sollicitudin. Donec eget sapien turpis.</p><a href="images/3.jpg" class="thumb-preview" target="_blank" title="" ><img src="images/3s.jpg"></a></div>
</div>

<script>

</script>
</body>
</html>