<a href="#" onclick="var a='foo<?= htmlentities($_GET['bar'], ENT_QUOTES); ?>'">
    Click Me
</a>
<p>Use URL?bar=PAYLOAD</p>