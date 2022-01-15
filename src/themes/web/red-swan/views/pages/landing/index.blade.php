@extends('theme::layouts.main')

@section('page-styles')
    <link rel="stylesheet" href="@asset('css/landing.css')">
@endsection

@section('content')
    {{-- Hero --}}
    @include('theme::components.common.hero')

    <section class="section-1">
        <div class="section-container">
            <h1 class="title">
                Title
            </h1>
            <div class="title-divider">
                <div class="gradient-x gradient"></div>
            </div>
            <div class="presentation">
                <div class="container-left">
                    <h3 class="title">
                        Lorem ipsum dolor sit amet
                    </h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                        posuere et sit amet ligula.
                        <br />
                        <br />

                        Images from:

                        <a href="https://undraw.co/">undraw.co</a>
                    </p>
                </div>

                <div class="container-right">
                    @assetLoad('images/svg/presentation.svg')
                </div>
            </div>

            <div class="presentation-bottom">
                <div class="container">
                    <img src="@asset('images/svg/world.svg')">
                </div>
                <div class="text">
                    <div class="align-middle-x">
                        <h3>
                            Lorem ipsum dolor sit amet
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                            <br />
                            <br />
                            Images from:

                            <a href="https://undraw.co/">undraw.co</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="section-container">
            <h1 class="title">
                Title
            </h1>
            <div class="title-divider">
                <div class="gradient-x gradient"></div>
            </div>

            <div class="any-card">
                <div class="card-container">
                    <a href="#">
                        <p class="top-title">
                            xGETTING STARTED
                        </p>

                        <div class="title">
                            Lorem ipsum dolor sit amet.
                        </div>

                        <p class="detail">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                        </p>
                    </a>
                </div>

                <div class="action">
                    <div class="action-container">
                        <button>
                            Action
                        </button>
                    </div>
                </div>
            </div>

            <div class="any-card">
                <div class="card-container">
                    <a href="#">
                        <p class="top-title">
                            xGETTING STARTED
                        </p>

                        <div class="title">
                            Lorem ipsum dolor sit amet.
                        </div>

                        <p class="detail">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                        </p>
                    </a>
                </div>

                <div class="action">
                    <div class="action-container">
                        <button>
                            Action
                        </button>
                    </div>
                </div>
            </div>

            <div class="any-card">
                <div class="card-container">
                    <a href="#">
                        <p class="top-title">
                            xGETTING STARTED
                        </p>

                        <div class="title">
                            Lorem ipsum dolor sit amet.
                        </div>

                        <p class="detail">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                        </p>
                    </a>
                </div>

                <div class="action">
                    <div class="action-container">
                        <button>
                            Action
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pricing">
        <div class="pricing-container">
            <h1 class="title">
                Pricing
            </h1>
            <div class="title-divider">
                <div class="gradient-x gradient"></div>
        </div>

        <div class="pricing-container">
            <div class="pricing-card side">
                <div class="header">
                    <div class="title">
                        Free
                    </div>
                    <ul>
                        <li>Thing</li>
                        <li>Thing</li>
                        <li>Thing</li>
                    </ul>
                </div>

                <div class="price">
                    <div class="currency">
                        £0
                        <span class="type">for one user</span>
                    </div>

                    <div class="sign-up">
                        <button>
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>

            <div class="pricing-card featured">
                <div class="header">
                    <div class="title">
                        Free
                    </div>
                    <ul>
                        <li>Thing</li>
                        <li>Thing</li>
                        <li>Thing</li>
                    </ul>
                </div>

                <div class="price">
                    <div class="currency">
                        £0
                        <span class="type">for one user</span>
                    </div>

                    <div class="sign-up">
                        <button>
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>

            <!-- <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
                    <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                    <ul class="w-full text-center text-base font-bold">
                        <li class="border-b py-4">Thing</li>
                        <li class="border-b py-4">Thing</li>
                        <li class="border-b py-4">Thing</li>
                        <li class="border-b py-4">Thing</li>
                    </ul>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="w-full pt-6 text-4xl font-bold text-center">
                        £x.99
                        <span class="text-base">/ per user</span>
                    </div>
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div> -->

            <div class="pricing-card side">
                <div class="header">
                    <div class="title">
                        Free
                    </div>
                    <ul>
                        <li>Thing</li>
                        <li>Thing</li>
                        <li>Thing</li>
                    </ul>
                </div>

                <div class="price">
                    <div class="currency">
                        £0
                        <span class="type">for one user</span>
                    </div>

                    <div class="sign-up">
                        <button>
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @assetLoad('images/svg/wave-bottom.svg')

    <section class="action-section">
        <h1 class="title">
            Call to Action
        </h1>

        <div class="title-divider">
            <div class="gradient-x"></div>
        </div>

        <h3 class="message">
            Main Hero Message to sell yourself!
        </h3>

        <button>
            Action!
        </button>
    </section>

{{-- @include('theme::components.common.breadcrumb') --}}

{{-- @foreach ($groups as $key => $group)
    <div class="blog">
        <h1>
            {{ $key }}
</h1>
@foreach ($group as $theme)
@include('theme::components.blog.card')
@endforeach
</div>
@endforeach --}}
@endsection
