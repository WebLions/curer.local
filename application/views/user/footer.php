
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="/bootstrap/js/bootstrap.js"></script>

<link href="/datepicker/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="/datepicker/moment-with-locales.js"></script>
<script src="/datepicker/bootstrap-datetimepicker.js"></script>

<script src="/js/script.js"></script>
<script src="/js/jquery.maskMoney.js" type="text/javascript"></script>

<script>

    $(function() {
        $("#sender_buy").maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' ГРН'});
        $("#sender_sell").maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' ГРН'});
        $("#recipient_buy").maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' ГРН'});
        $("#recipient_sell").maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' ГРН'});
        $("#tariff").maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' ГРН'});
    })

</script>



</html>