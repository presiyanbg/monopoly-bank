@include('pages.components.navigation.nav')
<div class="hero">
    <div class="body ab-center">
        <div class="title">
            <h1>Monopoly</h1>
        </div>


        <div class="subtitle">
            <h3>@lang("The right way to do business")</h3>
        </div>

        <div class="separator separator-white">
            <div class="separator-line">
            </div>

            <div class="separator-ball">
            </div>

            <div class="separator-line">
            </div>
        </div>
    </div>

    <div class="wallpaper">
        <img src="{{URL::asset('/images/home.jpg')}}" alt="Home page wallpaper">
    </div>
</div>

<section class="section">
    <div class="section-header">
        <div class="section-title">
            <h3>
                @lang("Helping businesses since 1919")
            </h3>
        </div>
    </div>

    <div class="section-body">
        <div class="section-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex repudiandae consectetur nihil commodi ullam consequuntur amet laborum animi dolore dolorum voluptatem error quisquam itaque, quo expedita ipsam ut. Sequi.</p>
        </div>
    </div>
</section>

<section class="section-pictures">
    <div class="section-body">
        <div class="section-content">
            <div class="picture">
                <img src="{{URL::asset('/images/team-picture-1.jpg')}}" alt="Home page wallpaper">
            </div>

            <div class="picture-dsc picture-dsc-dark">
                <div class="picture-title">
                    <h3>
                        @lang("Professional team")
                    </h3>
                </div>

                <div class="picture-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex repudiandae consectetur nihil commodi ullam consequuntur amet laborum animi dolore dolorum voluptatem error quisquam itaque, quo expedita ipsam ut. Sequi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-header">
        <div class="section-title">
            <h3>
                @lang("Interesting title")
            </h3>
        </div>
    </div>

    <div class="section-body">
        <div class="section-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex repudiandae consectetur nihil commodi ullam consequuntur amet laborum animi dolore dolorum voluptatem error quisquam itaque, quo expedita ipsam ut. Sequi.</p>
        </div>
    </div>
</section>


<section class="section-pictures">
    <div class="section-body">
        <div class="section-content">
            <div class="picture-dsc picture-dsc-prim">
                <div class="picture-title">
                    <h3>
                        @lang("Hard working employees")
                    </h3>
                </div>

                <div class="picture-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex repudiandae consectetur nihil commodi ullam consequuntur amet laborum animi dolore dolorum voluptatem error quisquam itaque, quo expedita ipsam ut. Sequi.</p>
                </div>
            </div>

            <div class="picture">
                <img src="{{URL::asset('/images/team-picture-2.jpg')}}" alt="Home page wallpaper">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-header">
        <div class="section-title">
            <h3>
                @lang("Other text i dont know...")
            </h3>
        </div>
    </div>

    <div class="section-body">
        <div class="section-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex repudiandae consectetur nihil commodi ullam consequuntur amet laborum animi dolore dolorum voluptatem error quisquam itaque, quo expedita ipsam ut. Sequi.</p>
        </div>
    </div>
</section>

<section class="section-pictures">
    <div class="section-body">
        <div class="section-content">
            <div class="picture">
                <img src="{{URL::asset('/images/team-picture-3.jpg')}}" alt="Home page wallpaper">
            </div>

            <div class="picture-dsc picture-dsc-dark">
                <div class="picture-title">
                    <h3>
                        @lang("Special offers")
                    </h3>
                </div>

                <div class="picture-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex repudiandae consectetur nihil commodi ullam consequuntur amet laborum animi dolore dolorum voluptatem error quisquam itaque, quo expedita ipsam ut. Sequi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-header">
        <div class="section-title">
            <h3>
                @lang("Call TODAY")
            </h3>
        </div>
    </div>

    <div class="section-body">
        <div class="section-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex repudiandae consectetur nihil commodi ullam consequuntur amet laborum animi dolore dolorum voluptatem error quisquam itaque, quo expedita ipsam ut. Sequi.</p>
        </div>
    </div>
</section>

@include('pages.components.footer.footer')
