@extends('layouts.app') 
{{-- Nếu bạn có layout chung, còn không bạn có thể bỏ dòng này --}}

@section('content')
<div data-mkdf-parallax-speed="1" class="vc_row wpb_row vc_row-fluid mkdf-section mkdf-content-aligment-left" style="">
    <div class="clearfix mkdf-full-section-inner">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
            <div class="vc_column-inner vc_custom_1505498075306">
                <div class="wpb_wrapper">
                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_double vc_sep_border_width_2 vc_sep_pos_align_center vc_sep_color_black vc_separator-has-text">
                        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                        <h4 class="menu-tt">Bánh mì</h4>
                        <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hl-food-list vc_row wpb_row vc_row-fluid mkdf-section vc_custom_1447769555653 mkdf-content-aligment-left">
    <div class="clearfix mkdf-full-section-inner">

        {{-- CỘT TRÁI --}}
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="mkdf-menu-list mkdf-ml-with-featured-image">
                        <ul class="mkdf-ml-holder">
                            @php
                                // Lấy 1/2 đầu danh sách (nếu có 8 món => lấy 4 món)
                                $foodsLeft = $foods->take( ceil($foods->count()/2) );
                            @endphp

                            @foreach($foodsLeft as $food)
                                <li class="mkdf-ml-item clearfix">
                                    <div class="mkdf-ml-item-image">
                                        {{-- Giả sử cột image chứa URL ảnh --}}
                                        <a href="#">
                                            <img width="150" height="150" 
                                                 src="{{ $food->image }}" 
                                                 class="attachment-thumbnail size-thumbnail wp-post-image" 
                                                 alt="{{ $food->name }}" />
                                        </a>
                                    </div>
                                    <div class="mkdf-ml-item-content">
                                        <div class="mkdf-ml-top-holder">
                                            <div class="mkdf-ml-title-holder">
                                                <h4 class="mkdf-ml-title">
                                                    <a href="#">
                                                        {{ $food->name }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="mkdf-ml-dots"></div>
                                            <div class="mkdf-ml-price-holder">
                                                <h4 class="mkdf-ml-price">
                                                    {{ number_format($food->price, 0, ',', '.') }} ₫
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="mkdf-ml-bottom-holder clearfix">
                                            <div class="mkdf-ml-excerpt-holder">
                                                <p>{{ $food->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- CỘT PHẢI --}}
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="mkdf-menu-list mkdf-ml-with-featured-image">
                        <ul class="mkdf-ml-holder">
                            @php
                                // Lấy phần còn lại
                                $foodsRight = $foods->skip( ceil($foods->count()/2) );
                            @endphp

                            @foreach($foodsRight as $food)
                                <li class="mkdf-ml-item clearfix">
                                    <div class="mkdf-ml-item-image">
                                        <a href="#">
                                            <img width="150" height="150" 
                                                 src="{{ $food->image }}" 
                                                 class="attachment-thumbnail size-thumbnail wp-post-image" 
                                                 alt="{{ $food->name }}" />
                                        </a>
                                    </div>
                                    <div class="mkdf-ml-item-content">
                                        <div class="mkdf-ml-top-holder">
                                            <div class="mkdf-ml-title-holder">
                                                <h4 class="mkdf-ml-title">
                                                    <a href="#">
                                                        {{ $food->name }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="mkdf-ml-dots"></div>
                                            <div class="mkdf-ml-price-holder">
                                                <h4 class="mkdf-ml-price">
                                                    {{ number_format($food->price, 0, ',', '.') }} ₫
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="mkdf-ml-bottom-holder clearfix">
                                            <div class="mkdf-ml-excerpt-holder">
                                                <p>{{ $food->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Phần banner cuối, giữ nguyên nếu muốn --}}
<div id="panel-26-0-0-1" class="so-panel widget widget_hl_food_menu hl_food_menu" data-index="1">
    <div data-mkdf-parallax-speed="1" class="vc_row wpb_row vc_row-fluid mkdf-section vc_custom_1505573460551 mkdf-content-aligment-center mkdf-parallax-section-holder mkdf-parallax-section-holder-touch-disabled" style="background:url('https://at06.mediawz.com/wp-content/uploads/2019/08/ricedishbanner.jpg'); background-size:cover; background-position: 50% -44px; padding: 108px !important; background-attachment: fixed;">
        <div class="clearfix mkdf-full-section-inner">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_rounded vc_box_border_grey">
                                    <img src="https://at06.mediawz.com/wp-content/themes/halink.at06/dev/enqueue/css/img/title-graphic-menu.png" class="vc_single_image-img attachment-full" alt="Cơm Dĩa" />
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
