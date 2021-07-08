@props(['status'])
@php if ($status == 'active') { @endphp

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <x-card />
        </div>
    </div>
</div>

@php }elseif($status == 'nonactive'){ @endphp

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
        </div>
    </div>
</div>

@php } @endphp
