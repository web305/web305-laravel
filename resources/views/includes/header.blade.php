@section('header')
<!-- Header -->
<header>
	<div class="container">
		<div class="intro-text">
			<div class="intro-heading"><h1>@yield('title')</h1></div>
			<div class="intro-lead-in"><h3>@yield('subheadline')</h3></div>
		</div>
	</div>
</header>
@endsection

@section('header-home')
<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading"><h1>@yield('title')</h1></div>
            <div class="intro-lead-in"><h2>@yield('subheadline')</h2></div>
            <a href="{!! url('/dienstleistung'); !!}" class="page-scroll btn btn-xl" title="Zu den Dienstleistungen">Zu den Dienstleistungen</a>
        </div>
    </div>
</header>
@endsection