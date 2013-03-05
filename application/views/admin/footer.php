</div> 
</body>
</html>
<script>
$('#logout').click(function() {
    $.ajax({
        url: "",
        context: document.body,
        success: function(s,x){

            $('html[manifest=saveappoffline.appcache]').attr('content', '');
                $(this).html(s);
        }
    }); 
});
</script>
