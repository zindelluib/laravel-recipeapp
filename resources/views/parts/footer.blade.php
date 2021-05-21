	<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script>
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
	</script>
	@stack('scripts')
</body>
</html>