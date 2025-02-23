@extends('layouts.master')
@section('title')
    <title>Video SMKN 1 Situbondo</title>
@endsection
@section('content')
    <section class="mb-4">
        <div class="container clearfix mt-5 mb-4">
            <div class="row clearfix">
                <!-- Second Posts Area
                ============================================= -->
                <div class="col-lg-12 mb-4">
                    <!-- Gallery Slider
                    ============================================= -->
                    <h4 style="background: #9ADCFF" class="ls1 text-uppercase fw-bold">
                        Video</h4>
                    <!-- Flex Thumbs Slider
                    ============================================= -->
                    <div class="row col-mb-50">
                        @foreach($videos as $video)
                            <div class="col-md-4 mt-0">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-title title-sm nott">
                                            <h5 class="mb-0"><a
                                                    href="#">{{$video->keterangan}}</a>
                                            </h5>
                                        </div>
                                        <div class="entry-image img-fit">
                                            {!! $video->link !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $videos->links('layouts.paginate') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
