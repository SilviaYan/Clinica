<script src="<?= base_url();?>resource/js/jquery-1.12.4.js"></script>
<script src="<?= base_url();?>resource/js/popper.min.js" ></script>
<script src="<?= base_url();?>resource/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>resource/js/main.js"></script>
<script type="text/javascript" charset="utf8" src="<?= base_url();?>resource/js/jquery.dataTables.js"></script>



<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({html:true}); 
    $('[data-toggle="tooltip"]').tooltip()
});
</script>

<!--<script src="<?= base_url();?>resource/js/TimeCircles.js"></script>

    <script>
        $("#DateCountdown").TimeCircles();
    </script>

-->

<script type="text/javascript">
    $('[data-toggle="tooltip"]').each(function(){
    var options = { 
        html: true 
    };

    if ($(this)[0].hasAttribute('data-type')) {
        options['template'] = 
            '<div class="tooltip ' + $(this).attr('data-type') + '" role="tooltip">' + 
            '   <div class="tooltip-arrow"></div>' + 
            '   <div class="tooltip-inner"></div>' + 
            '</div>';
    }

    $(this).tooltip(options);
});

    
</script>


<script type="text/javascript">
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover({html:true}); 
    $('[data-toggle="tooltip"]').tooltip();
});


    
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#tablaUsuario').DataTable();
} );

</script>







