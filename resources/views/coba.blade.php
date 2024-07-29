<h1>About<h1>
@if (session()->has("username"))
<h3>hello, {{ session()->get("username") }}</h3>
@endif
