@if ($message = Session::get('success'))
<div class="alert alert-success alert-success-style1 alert-success-stylenone">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
    </button>
    <p class="message-alert-none"><i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i><strong> Success!</strong> Data Saved.</p>
</div>
@endif


@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif