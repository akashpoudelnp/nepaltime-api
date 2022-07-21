@extends('layouts.master')
@section('title', 'Nepal Time API')
@section('content')
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="px-4">
                <h2>API Documentation</h2>
                <small>Version <b>1.0</b></small>
                <br>
                <code>https://www.nepaltime.akashpoudel.com.np</code>
            </div>
            <div class="row mb-5" id="swagger-ui">
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="https://unpkg.com/swagger-ui-dist@4.5.0/swagger-ui-bundle.js" crossorigin></script>
    <script>
        window.onload = () => {
            window.ui = SwaggerUIBundle({
                url: '/api/swagger.yaml',
                dom_id: '#swagger-ui',
            });
        };
    </script>
@endpush
