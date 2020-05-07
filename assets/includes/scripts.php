<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-52901678-2', 'auto');
	ga('send', 'pageview');
</script>

<script><?php echo \App\Utils::getScript('lib/jquery-1.11.3.min.js') ?></script>
<script><?php echo \App\Utils::getScript('lib/notifyit-0.0.1.js') ?></script>
<script><?php echo \App\Utils::getScript('lib/promptit-0.0.1.js') ?></script>
<script><?php echo \App\Utils::getScript('lib/confirmit-0.0.1.js') ?></script>

<script><?php echo \App\Utils::getScript('lib/typed.min.js') ?></script>
<?php $detect = new Mobile_Detect(); ?>
<script js-type="swiper" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.jquery.min.js"></script>

<script><?php echo \App\Utils::getScript('main.js') ?></script>

<script>
    $(document).ready(function() {
        <?php if ( $detect->isMobile() ) : ?>
            'use strict';

            $(".dynamic-msg").typed({
                strings: [
                    "Não queremos ser sua única agência, apenas sua melhor.<small>Desenvolvemos as melhores ações para alavancar o sucesso de nossos clientes.</small>",
                    "Aqui, todos nós somos viciados em novas ideias<small>Os melhores brainstorms para tornar a sua empresa visível no mercado.</small>"
                ],
                backDelay: 2000,
                typeSpeed: 0,
                showCursor: false,
                loop: true,
                onStringTyped: function() {},
            });

            $('.roll-down-btn').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#about-us').offset().top
                }, 800);
            });
        <?php endif; ?>

        $('.contact-form').on('submit', function(e) {
            e.preventDefault();
            
            var dados = jQuery(this).serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo BASE_PATH; ?>ajax/contact',
                data: dados,
                dataType: 'json',
                beforeSend: function()
                {
                    $('#button-submit').prop('disabled', true).text('Enviando...');
                },
                success: function(data) {
                    notifyit({
                        'message': data['message'],
                        'status': (data['success']) ? 'success' : 'error'
                    });

                    if (data['success']) {
                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#message').val('');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    notifyit({
                        'message': errorThrown,
                        'status': 'error'
                    });
                },
                complete: function() {
                    $('#button-submit').prop('disabled', false).text('Enviar');
                }
            });
        });
    });
</script>
