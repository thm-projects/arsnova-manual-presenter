    </div><!-- close #wrap -->
    <footer class="footer" id="footer">
        <div class="footer-container">
            <?php echo kirbytext($site->copyright()) ?>
            <ul class="apps">
                <?php foreach (yaml($site->applications()) as $app) : ?>
                    <li><a href="<?php echo $app['Link']; ?>"><?php echo $app['Name']; ?></a></li>
                <?php endforeach; ?>
            </ul>    
        </div>
    </footer>
<?php 
    echo js('https://code.jquery.com/jquery.js');
    //echo js('assets/js/jquery.stickit.min.js');
    echo js('assets/js/jquery.cookie.js');
    echo js('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js');
?>
<script>
    $('.template').click(function(){
        $('.toggle-temp').toggleClass('carousel-inner');
        $('.container').toggleClass('toggle-carousel').toggleClass('toggle-list');
        $('.carousel-control').toggleClass('hidden');
        if($.cookie("view") == 'carousel') {
            $.cookie('view', 'list', {path: '/'});

             $('.carousel-caption').each(function() {
                    $(this).insertBefore( $(this).prev('.screenshot') );
                    });        
        }else{
            $('.screenshot').each(function() {
                    $(this).insertBefore( $(this).prev('.carousel-caption') );
                    }); 
            $.cookie('view', 'carousel', {path: '/'});
        }
    });
/*
    function checkWidth() {
        if($(window).width() > 767) {
            $('#sidebar').stickit({scope: StickScope.Parent, top: 0});
        }
    }
    checkWidth();
    $(window).resize(function() {
        checkWidth();
        location.reload();
    });*/
</script>
</body>
