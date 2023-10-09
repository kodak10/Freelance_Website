@extends('client.layouts.app')
@section('content')


<div class="dashboard_content_wrapper">

    <div class="dashboard dashboard_wrapper pr30 pr0-xl">

        @include('client.layouts.sidebar')

        <div class="dashboard__main pl0-md">
            <div class="dashboard__content hover-bgc-color">
                <div class="row pb40">
                    <div class="col-lg-12">
                        @include('client.layouts.sidebar-mobile')

                    </div>
                    <div class="col-lg-12">
                        <div class="dashboard_title_area">

                            <h2>Bienvenue</h2>
                            <p class="text">{{Auth::user()->client->name}} {{Auth::user()->client->prenoms}}</p>
                        </div>
                    </div>
                </div>

            </div>

            @include('client.layouts.footer')

        </div>
    </div>
</div>

@endsection