		<div class="fix"></div>

	</div><!--/columns -->
	
	<div id="footer">
		 <p class="fl">&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?>. </p>
            <p class="fr"><a href="http://en.greatwallclub.com">Great Wall Club</a></p>
	</div><!--/footer -->

</div><!--/page -->

<?php wp_footer(); ?>

<script type="text/javascript">
$(function () {
$('#countdown').countdown({until:$.countdown.UTCDate(-8, 2012,  4 - 1, 11), format: 'DHMS', layout: 
						  '<div id="timer">' + '<hr />'+
							  '<div id="timer_days" class="timer_numbers">0{dnn}</div>'+
							  '<div id="timer_hours" class="timer_numbers">{hnn}</div>'+ 
							  '<div id="timer_mins" class="timer_numbers">{mnn}</div>'+
							  '<div id="timer_seconds" class="timer_numbers">{snn}</div>'+
							'<div id="timer_labels">'+
								'<div id="timer_days_label" class="timer_labels">days</div>'+
								'<div id="timer_hours_label" class="timer_labels">hours</div>'+
								'<div id="timer_mins_label" class="timer_labels">mins</div>'+
								'<div id="timer_seconds_label" class="timer_labels">secs</div>'+
							'</div>'+							
						'</div>'
						  
});
});
</script>

</body>
</html>