@if ($message = Session::get('success'))
<div class="alert alert-success alert-success-style1 alert-success-stylenone">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
    </button>
    <p class="message-alert-none"><i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i><strong> Success!</strong> Data Added.</p>
</div>
@endif


@if ($message = Session::get('delete'))
<div class="alert alert-success alert-success-style1 alert-success-stylenone">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
    </button>
    <p class="message-alert-none"><i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i><strong> Success!</strong> Data Deleted.</p>
</div>
@endif

@if ($message = Session::get('edit'))
<div class="alert alert-success alert-success-style1 alert-success-stylenone">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
    </button>
    <p class="message-alert-none"><i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i><strong> Success!</strong> Data Edited.</p>
</div>
@endif