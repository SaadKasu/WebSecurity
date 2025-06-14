<?php
function custom_json_encode($s)
{
    $s = str_replace("\\", "\\\\", $s);
    $s = str_replace('"', '\"', $s);
    return $s;
}
?>
<p>Use URL?data=PAYLOAD</p>
<script>
    // custom_json_encode("test") => "test"
    // custom_json_encode('t\e"st') => "t\\e\"st"
    var string = "<?php echo custom_json_encode($_GET['data']); ?>";
</script>
