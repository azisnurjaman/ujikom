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

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-danger-style1 alert-danger-stylenone">
    <button type="button" class="close danger-op" data-dismiss="alert" aria-label="Close">
        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
    </button>
    <p class="message-alert-none"><i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i><strong> Error!</strong> Data Can't to Delete Because Data Have Relation.</p>
</div>
@endif