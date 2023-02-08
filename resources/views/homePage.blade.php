@extends('layouts.mainLayout')
@section('content')
    <div class="home">
        <div class="home-content">
            <header class="user user-greeting">
                <div class="user-greeting-wrapper">
                    <div class="user-greeting-wrapper-text">
                        <header class="user-greeting-wrapper-text__title">Hello Josh!</header>
                        <p class="user-greeting-wrapper-text__greeting">It’s good to see you again.</p>
                    </div>
                    <img class="user-greeting-wrapper__img" src="{{ asset('images/greeting_photo.svg') }}">
                </div>
            </header>
            <nav class="user">
                <article class="home-nav">asdf</article>
                <article class="user user-complete-working-courses">complete</article>
            </nav>
            <article class="user user-courses-status">status</article>
            <section class="user user-courses-list">
                <div class="user-courses-list-content">
                    <h1 class="user-courses-list__title">Courses</h1>
                    <div class="user-courses-list-sorting">
                        <button class="user-courses-list-sorting__buttons user-courses-list-sorting__all">All Courses</button>
                        <button class="user-courses-list-sorting__buttons user-courses-list-sorting__new">The Newest</button>
                        <button class="user-courses-list-sorting__buttons user-courses-list-sorting__top-rated">Top Rated</button>
                        <button class="user-courses-list-sorting__buttons user-courses-list-sorting__popular">Most Popular</button>
                    </div>
                    <div class="user-courses-list-table">
                        <div class="user-courses-list-table-item">
                            <div class="user-courses-list-table-item__image">
                                <img src="{{ asset('images/figma.svg') }}" alt="">
                            </div>
                            <div class="user-courses-list-table-item__name-author">
                                <h2 class="user-courses-list-table-item__name-author_name">Learn Figma</h2>
                                <h3 class="user-courses-list-table-item__name-author_author">by Christopher Morgan</h3>
                            </div>
                            <div class="user-courses-list-table-item__time">
                                <img src="{{ asset('images/clock.svg') }}" alt="">
                                <span>6h 30min</span>
                            </div>
                            <div class="user-courses-list-table-item__rating">
                                <img src="{{ asset('images/rating_fire.svg') }}" alt="">
                                <span>4,9</span>
                            </div>
                            <a href="" class="user-courses-list-table-item__link">View course</a>
                        </div>
                        <div class="user-courses-list-table-item">
                            <div class="user-courses-list-table-item__image">
                                <img src="{{ asset('images/figma.svg') }}" alt="">
                            </div>
                            <div class="user-courses-list-table-item__name-author">
                                <h2 class="user-courses-list-table-item__name-author_name">Learn Figma</h2>
                                <h3 class="user-courses-list-table-item__name-author_author">by Christopher Morgan</h3>
                            </div>
                            <div class="user-courses-list-table-item__time">
                                <img src="{{ asset('images/clock.svg') }}" alt="">
                                <span>6h 30min</span>
                            </div>
                            <div class="user-courses-list-table-item__rating">
                                <img src="{{ asset('images/rating_fire.svg') }}" alt="">
                                <span>4,9</span>
                            </div>
                            <a href="" class="user-courses-list-table-item__link">View course</a>
                        </div>
                        <div class="user-courses-list-table-item">
                            <div class="user-courses-list-table-item__image">
                                <img src="{{ asset('images/figma.svg') }}" alt="">
                            </div>
                            <div class="user-courses-list-table-item__name-author">
                                <h2 class="user-courses-list-table-item__name-author_name">Learn Figma</h2>
                                <h3 class="user-courses-list-table-item__name-author_author">by Christopher Morgan</h3>
                            </div>
                            <div class="user-courses-list-table-item__time">
                                <img src="{{ asset('images/clock.svg') }}" alt="">
                                <span>6h 30min</span>
                            </div>
                            <div class="user-courses-list-table-item__rating">
                                <img src="{{ asset('images/rating_fire.svg') }}" alt="">
                                <span>4,9</span>
                            </div>
                            <a href="" class="user-courses-list-table-item__link">View course</a>
                        </div>
                        <div class="user-courses-list-table-item">
                            <div class="user-courses-list-table-item__image">
                                <img src="{{ asset('images/figma.svg') }}" alt="">
                            </div>
                            <div class="user-courses-list-table-item__name-author">
                                <h2 class="user-courses-list-table-item__name-author_name">Learn Figma</h2>
                                <h3 class="user-courses-list-table-item__name-author_author">by Christopher Morgan</h3>
                            </div>
                            <div class="user-courses-list-table-item__time">
                                <img src="{{ asset('images/clock.svg') }}" alt="">
                                <span>6h 30min</span>
                            </div>
                            <div class="user-courses-list-table-item__rating">
                                <img src="{{ asset('images/rating_fire.svg') }}" alt="">
                                <span>4,9</span>
                            </div>
                            <a href="" class="user-courses-list-table-item__link">View course</a>
                        </div>
                        <div class="user-courses-list-table-item">
                            <div class="user-courses-list-table-item__image">
                                <img src="{{ asset('images/figma.svg') }}" alt="">
                            </div>
                            <div class="user-courses-list-table-item__name-author">
                                <h2 class="user-courses-list-table-item__name-author_name">Learn Figma</h2>
                                <h3 class="user-courses-list-table-item__name-author_author">by Christopher Morgan</h3>
                            </div>
                            <div class="user-courses-list-table-item__time">
                                <img src="{{ asset('images/clock.svg') }}" alt="">
                                <span>6h 30min</span>
                            </div>
                            <div class="user-courses-list-table-item__rating">
                                <img src="{{ asset('images/rating_fire.svg') }}" alt="">
                                <span>4,9</span>
                            </div>
                            <a href="" class="user-courses-list-table-item__link">View course</a>
                        </div>
                    </div>
                </div>
            </section>
            <article class="user user-statistics">statistics</article>
            <article class="user premium-sub">premium</article>
        </div>
    </div>
@endsection
