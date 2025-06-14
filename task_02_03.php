<iframe src='http://example.com/<?php echo htmlspecialchars($_GET["ifr"], ENT_COMPAT); ?>'>
    click me
</iframe>
<p>Use URL?ifr=PAYLOAD</p>